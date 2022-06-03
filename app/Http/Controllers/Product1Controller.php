<?php

namespace App\Http\Controllers;

use App\product1;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Product1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products1=product1::latest()->paginate();
        return view('products1.index',compact('products1'));
    }


    public function create()
    {
        $products=DB::select('select * from products');
         return view('products1.create',compact('products'));
    }


    public function store(Request $request)
    {
        $id=Auth::id();
        $request->validate([
            'user_id'=>'required',
            'image'=>'required',
            'title'=>'required',
            'description'=>'required',

          ]);

              $image=$request->image;
              $newimage=time().$image->getClientOriginalName();
              $image->move('products1/images/',$newimage);

          $product1=product1::create([
            'user_id'=> $id,
            'image'=> 'products1/images/'.$newimage,
            'title'=> $request->title,
            'description'=> $request->description,
          ]);

          return redirect()->back();
    }


    public function show($id)
    {
        $product1=product1::find($id);
        return view('products1.show',compact('product1'));
    }


    public function edit($id)
    {
        $product1=product1::find($id);
        return view('products1.edit',compact('product1'));
    }


    public function update(Request $request,$id)
    {
        $product1=product1::find($id);
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'description'=>'required',

          ]);

          if ($request->has('image')) {
            $image=$request->image;
            $newimage=time().$image->getClientOriginalName();
            $image->move('products1/images/',$newimage);
            $product1->image= 'products1/images/'.$newimage;
          }

          $product1->image = 'products1/images/'.$newimage;
          $product1->title = $request->title;
          $product1->description = $request->description;

          $product1->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $product1=product1::find($id);
        $product1->forcedelete();
        return redirect()->back();
    }
}
