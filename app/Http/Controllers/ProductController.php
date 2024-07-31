<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function index(){
        $data['products'] = products::all();
        return view ('products.index',$data);
    }

    public function create(){               // for create data..............................!!
        
            return view('products.create'); 
    }


    public function store(Request $request){      // For store data.........................!!
        $data = [
          'name' => $request->get('name'),
          'price' => $request->get('price'),
          'description' => $request->get('description'),
          'category' => $request->get('category'),
          'quantity' => $request->get('quantity'),
          'status' => $request->get('status')
        ];
        products::insert($data);
        return redirect()->route('products.index');
       }



    public function edit($id){                     // for edit data................................!!
        if(!$id)
        {
            return redirect()->back();
        }
        $data = products::find($id);
        if($data)
        {
            return view('products.edit',compact('data'));
        }
        return redirect()->back();
    }



    public function delete($id){                          // for delete data.........................!!
        if(!$id)
        {
            return redirect()->back();
        }
     $data = products::find($id);
     if($data)
     {
        $data->delete();
        return redirect()->back();
     }
     return redirect()->back();
    }



    public function update(Request $request, $id){  // for update.....................!!
        if(!$id)
        {
            return redirect()->back();
        }
     $data = products::find($id);
     if($data)
     {
        $data=[
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'category' => $request->get('category'),
            'quantity' => $request->get('quantity'),
            'status' => $request->get('status')
        ];
        products::where('id',$id)->update($data);
        return redirect()->route('products.index');
     }
          return redirect()->back();
    }
}
