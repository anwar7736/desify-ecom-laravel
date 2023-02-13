<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
           $id = auth_info()['id'];
           $response = Http::get(env('API_URL').'get-orders/'.$id);

           $data = $response->json();
           if($data['success'])
           {
                $orders = $data['orders'];
                $html = view('order.partials.order-data', compact('orders'))->render();

                return response()->json(['html'=>$html]);
           }
        }
        return view('order.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $response = Http::get(env('API_URL').'order-details/'.$id);

        $data = $response->json();
        $order = $data['order'];
        return view('order.show', compact('order'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
