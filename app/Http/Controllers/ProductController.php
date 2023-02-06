<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $response = Http::get('https://sisallsoftware.com/ecomadmin/api/product/'.$id);
        $product = $response->json();
        return view('product.product_details', compact('product'));
    }

    public function shop()
    {
        if(request()->ajax())
        {
            $response = Http::get('https://sisallsoftware.com/ecomadmin/api/shop-product-list');
            $products = $response->json();
            $view = view('component.product', compact('products'))->render();
            return response()->json(['success'=>true, 'html'=>$view]);
        }

        return view('product.shop');
    }
}
