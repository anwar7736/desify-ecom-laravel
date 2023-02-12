<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(Request $request)
    {
       
       $response =  Http::post(env('API_URL').'user-login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $data = $response->json();
        if($data['success'])
        {
            session()->put('auth', $data['data']);
            return redirect()->route('home');
        }
        else{
            return back()->with(['success'=>false, 'msg'=> $data['msg']]);
        }
    }

    function register(Request $request)
    {
        $response =  Http::post(env('API_URL').'user-register', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);

        $data = $response->json();
        dd($data);
        if($data['success'])
        {
            session()->put('auth', $data['data']);
            return redirect()->route('home');
        }
        else{
            return back()->with(['success'=>false, 'msg'=> $data['msg']]);
        }
    }

    function logout()
    {
        session()->put('auth', []);
        return redirect()->route('home');
    }

    function viewLogin()
    {
        return view('auth.login');
    }

    function viewRegister()
    {
        return view('auth.register');
    }
}
