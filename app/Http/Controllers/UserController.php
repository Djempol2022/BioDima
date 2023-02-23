<?php

namespace App\Http\Controllers;
use App\Models\User;
use id;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function halamanlogin(){
        return view('backend.layouts.login');
    }

    public function cek_login(request $request ){
        $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($request->only('email','password'))){ 
            if (auth()->user()->role == 'Admin') {
                return redirect()->route('AdminFormMember');
            } 
            elseif (auth()->user()->role == '') {
                return redirect()->route('HalamanLogin');
            }
          
            
        }else{
            toastr()->error('Email atau Password Salah');
            return redirect()->route('HalamanLogin');
        }
    }
    public function user_logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
