<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $response = Http::get(env('API_URL').'home-slider');
            $sliders = $response->json();
            $response2 = Http::get(env('API_URL').'popular-categories');
            $categories = $response2->json();
            $category = view('home.partials.popular_category', compact('categories'))->render();
            $slider = view('home.partials.slider', compact('sliders'))->render();
            return response()->json(['category'=>$category,'slider'=>$slider]);
        }
        return view('home.index');
    }

    public function popular_categories()
    {
        $response = Http::get(env('API_URL').'popular-categories');
        $categories = $response->json();
        $html = view('home.partials.popular_category', compact('categories'))->render();
        return response()->json(['html'=>$html]);
    }
}
