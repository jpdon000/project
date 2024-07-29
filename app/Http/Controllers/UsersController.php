<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users')); // only for fetch data from database table................... return view('user',compact('users'));
    } 

    public function create(){                       // For create data...........................!!
        return view('users.create');
    }

     public function store(Request $request){      // For store data.........................!!
      $data = [
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'password' => $request->get('password')
      ];
      User::insert($data);
      return redirect()->route('users.index');
     }



     public function delete($id){                  //For delete....................!!
        if(!$id)
        {
            return redirect()->back();
        }

        $user = User::find($id);
        if($user)
        {
            $user->delete();
            return redirect()->back();
        }
        return redirect()->back();
     }


     public function edit($id){                  // For edit..............................!!
        if(!$id)
        {
            return redirect()->back();
        }

        $user = User::find($id);
        if($user)
        {
            return view('users.edit',compact('user'));
        }
             return redirect()->back();
     }



     public function update(Request $request,$id){      // For Update...............................!!
        if(!$id)
        {
            return redirect()->back();
        }

        $user = User::find($id);
        if($user){
            $data = [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'password' => $request->get('password')
              ];
              User::where('id',$id)->update($data);
              return redirect()->route('users.index');
        }
        return redirect()->back();
       }

}

