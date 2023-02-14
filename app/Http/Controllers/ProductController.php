<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function homeCategoryProduct()
    {
        $visible = request()->get('visible');
        $response = Http::get(env('API_URL').'home-category-product?visible='.$visible);
        $data = $response->json();
        $products = $data['products'];
        $view = view('component.slider', compact('products'))->render();
        return response()->json(['html'=>$view, 'title'=>$data['category_name']]);
    }    
    
    // public function newArrival()
    // {
    //     $response = Http::get(env('API_URL').'new-arrival');
    //     $products = $response->json();
    //     $view = view('component.slider', compact('products'))->render();
    //     return response()->json(['html'=>$view]);
    // }    
    
    // public function bestDeal()
    // {
    //     $response = Http::get(env('API_URL').'best-deal');
    //     $products = $response->json();
    //     $view = view('component.slider', compact('products'))->render();
    //     return response()->json(['html'=>$view]);
    // }    
    
    // public function featuredProduct()
    // {
    //     $response = Http::get(env('API_URL').'featured-product');
    //     $products = $response->json();
    //     $view = view('component.slider', compact('products'))->render();
    //     return response()->json(['html'=>$view]);
    // }

    public function show($id)
    {
        $response = Http::get(env('API_URL').'product/'.$id);
        $product = $response->json();
        return view('product.product_details', compact('product'));
    }

    public function shop()
    {   
        $response = Http::get(env('API_URL').'brand-list');
        $brands = $response->json();

        if(request()->ajax())
        {
            $products = [];
            $category = request()->get('category');   
            $query = request()->get('query');   
            $min = request()->get('priceMin');   
            $max = request()->get('priceMax');   
            $paginate = request()->get('paginate');   
            $orderBy = request()->get('orderBy');   
            $brands = request()->get('brands');   

            // if(!empty($category))
            // {
            //     $response = Http::get(env('API_URL').'product-by-category?category='.$category);
            //     $products = $response->json();
            // }            
            // if(!empty($query))
            // {
            //     $response = Http::get(env('API_URL').'product-search?query='.$query);
            //     $products = $response->json();
            // }
                $response = Http::post(env('API_URL').'shop-product-list', [
                    'min' => $min,
                    'max' => $max,
                    'paginate' => $paginate,
                    'order' => $orderBy,
                    'brands' => $brands,
                    'category' => $category,
                    'query' => $query,
                ]);

                $products = $response->json();

            $view = view('component.product', compact('products'))->render();
            return response()->json(['success'=>true, 'html'=>$view]);
        }

        return view('product.shop', compact('brands'));
    }

    public function relatedProducts()
    {
        $category = request()->get('category');
        $id = request()->get('id');
        $response = Http::get(env('API_URL').'related-product-list?category='.$category.'&id='.$id);
        $products = $response->json();
        $view = view('component.slider', compact('products'))->render();
        return response()->json(['html'=>$view]);
    }
}
