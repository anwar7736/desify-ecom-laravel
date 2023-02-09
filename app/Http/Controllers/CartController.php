<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Utils\Util;
class CartController extends Controller
{
    public function index()
    {
        //return session()->put('cart', []);

        $cart = session()->get('cart', []);
        // dd($cart);
        return view('cart.index', compact('cart'));
    }

    public function viewCheckout()
    {
        $cart = session()->get('cart', []);
        
        return view('cart.checkout', compact('cart'));
    }

    public function store(Request $request)
    {
        $id = $request->product;
        $size = $request->variation;
        $qty = $request->qty ?? 1;

        $response = Http::get(env('API_URL').'product/'.$id);
        $product = $response->json();
        $variation = $product['variation'];
        $variations = $product['variations'];

        $cart = session()->get('cart', []);

        $stock = Util::checkProductStock($id, $size);

        if($stock < $qty){
            return response()->json(['success'=>false,'msg'=>'Product '.$stock.' pcs available!']);
        }
  
        if(isset($cart[$id])) 
        {
            $old_qty = $cart[$id]['quantity'];
            $new_stock= $old_qty +  $qty;

            // $stock=$this->util->checkProductStock($id, $size);

            if($stock < $new_stock){
                return response()->json(['success'=>false,'msg'=>'Product '.($stock - $old_qty).' pcs available!']);
            }

            $cart[$id]['quantity'] = $new_stock;
            $cart[$id]['size'] = $size ?? '';
        } 
        
        else {
            $cart[$id] = [
                "name" => $product['name'],
                "sku" => $product['sku'],
                "quantity" => $qty,
                "type" => $product['type'],
                "regular_price" => $product['ecom_price'],
                "default_price"=> $variation['default_sell_price'],
                "size" => $size,
                "sizes" => $variations,
                "image" => $product['image_url'],
            ];
        }

        session()->put('cart', $cart);

        $total_item = getTotalCart();
        // $cart_items = getCartItems();
        // $view = view('components.checkout_modal', compact('cart_items'))->render();
        return response()->json(['success'=>true,'msg'=>'Product successfully added to cart', 'total'=>$total_item]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function updateItemSize()
    {
        $id = request()->product;
        $size = request()->size;
        $cart = session()->get('cart', []);
        $stock =  Util::checkProductStock($id, $size);
        if(isset($cart[$id]))
        {
            $cart[$id]['size'] = $size;
            session()->put('cart', $cart);
            return response()->json(['success' => true, 'msg'=> 'Product size updated', 'stock'=>$stock]);
        }
        else{
            return response()->json(['success' => false, 'msg'=> 'Something went wrong!']);
        }
    }

    public function update(Request $request, $id)
    {
        $qty = $request->qty;
        $size = $request->size;
        $cart = session()->get('cart', []);

        $stock = $stock = Util::checkProductStock($id, $size);

        if($stock < $qty)
        {
            return response()->json(['success'=>false,'msg'=>'Product '.$stock.' pcs available!']);
        }
        else{
            $cart[$id]['quantity'] = $qty;
            session()->put('cart', $cart);
            return response()->json(['success'=>true,'msg'=>'Cart quantity updated successfully']);
        }
    }

    public function destroy($id)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        $total = getTotalCart();
        return response()->json(['success'=>true, 'msg'=>'Item remove from cart list', 'total'=>$total]);
    }    
    
    public function clearAll()
    {

        $cart = session()->put('cart', []);
        $total = 0;
        return response()->json(['success'=>true, 'msg'=>'All item remove from cart', 'total'=>$total]);
    }

    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);

        $data = [];
        $data['id'] = auth_info()['id'];
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['charge'] = $request->delivery_charge;
        $data['sub_total'] = $request->sub_total;
        $data['final_total'] = $request->final_total;
        
        $response = Http::post(env('API_URL').'checkout', [
            'customer'=> $data,
            'items'=>$cart
        ]);
        $data = $response->json();
        if($data['success'])
        {
            session()->put('cart', []);
            return redirect()->route('home');
        }
        else{
            return redirect()->back()->with(['msg'=>'Something went wrong!']);
        }
    }
}
