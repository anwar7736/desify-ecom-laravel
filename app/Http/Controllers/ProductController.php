<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function newArrival()
    {
        $response = Http::get(env('API_URL').'new-arrival');
        $products = $response->json();
        $view = view('component.slider', compact('products'))->render();
        return response()->json(['html'=>$view]);
    }    
    
    public function bestDeal()
    {
        $response = Http::get(env('API_URL').'best-deal');
        $products = $response->json();
        $view = view('component.slider', compact('products'))->render();
        return response()->json(['html'=>$view]);
    }    
    
    public function featuredProduct()
    {
        $response = Http::get(env('API_URL').'featured-product');
        $products = $response->json();
        $view = view('component.slider', compact('products'))->render();
        return response()->json(['html'=>$view]);
    }

    public function show($id)
    {
        $response = Http::get(env('API_URL').'product/'.$id);
        $product = $response->json();
        return view('product.product_details', compact('product'));
    }

    public function shop()
    {   
        $category = request()->get('category');   

        if(request()->ajax())
        {
            $products = [];

            if(!is_null($category))
            {
                $response = Http::get(env('API_URL').'product-by-category?category='.$category);
                $products = $response->json();

                $view = view('component.product', compact('products'))->render();
                return response()->json(['success'=>true, 'html'=>$view]);
            }
            else{
                $response = Http::get(env('API_URL').'shop-product-list');
                $products = $response->json();
            }

            $view = view('component.product', compact('products'))->render();
            return response()->json(['success'=>true, 'html'=>$view]);
        }

        return view('product.shop');
    }

    public function relatedProducts()
    {
        $category = request()->get('category');
        $response = Http::get(env('API_URL').'related-product-list?category='.$category);
        $products = $response->json();
        $view = view('component.slider', compact('products'))->render();
        return response()->json(['html'=>$view]);
    }
}
