<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function login(Request $request){
        
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);

        //if check  user exists

        $user =User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
            Auth::login($user);
            return redirect()->route('product.index');
    }
    
    $request->session()->flash('error','Check 1st email and password');
    return redirect()->back();

    }
    
    $request->session()->flash('error','Check 2nd email and password');
    return redirect()->back();

  }
}