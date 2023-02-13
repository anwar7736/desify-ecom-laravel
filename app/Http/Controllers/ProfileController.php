<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        if(request()->ajax())
        {

        }

        return view('profile.index');
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
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => [''],
            'username' => [''],
            'contact_no' => [''],
            'user' => [''],
        ]);

        $response = Http::post(env('API_URL').'update-profile', [
            $validated,
        ]);

        $data = $response->json();
        if($data['success']){
            session()->put('auth', $data['data']);
            return response()->json(['success'=>true, 'msg'=>$data['msg']]);
        }
        else{
            return response()->json(['success'=>false, 'msg'=>$data['msg']]);
        }
    }

    public function destroy($id)
    {
        //
    }
}
