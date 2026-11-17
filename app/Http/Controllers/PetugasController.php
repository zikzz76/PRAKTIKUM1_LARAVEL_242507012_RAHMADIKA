<?php

namespace App\Http\Controllers;

use App\Models\tb_pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function login(){
        return view('/login');
    }

    public function proseslogin(request $request){
        //validasi
        $request->validate([
            'email'=>'required',
            'katasandi'=>'required',
        ]);

        $ambildata=$request->only('email','katasandi');

        if(Auth::attempt($ambildata)){
            $request = redirect()->interted('/dashboard');
        }
        else
        {
            return back()->with('pesan','email atau password salah');
        }
      
    }
}
