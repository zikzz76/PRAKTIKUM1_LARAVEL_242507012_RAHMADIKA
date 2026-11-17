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

     public function regis(){
        return view('/register');
    }
    public function proseslogin(request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $ambildata=$request->only('email','password');

        if(Auth::attempt($ambildata)){
            redirect('dashboard')->with('pesan','berhasil masuk');
        }
        else
        {
            return back()->with('pesan','email atau password salah');
        }
      
    }

    public function buat(request $request){
        $request->validate([
            'NamaLengkap'=>'required',
            'Email'=>'required|unique:email|email',
            'NoTelpon'=>'required|string',
            'Alamat'=>'required|string',
            'KataSandi'=>'required|min:6',
            'Ulangi'=>'required|same:password'
        ]);
        return back()->with('pesan','akun telah di buat');
    }
}
