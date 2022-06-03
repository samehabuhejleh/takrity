<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products=product::latest()->paginate();
        return view('products.index',compact('products'));
    }


    public function create()
    {
         return view('products.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'description'=>'required',

          ]);

              $image=$request->image;
              $newimage=time().$image->getClientOriginalName();
              $image->move('products/images/',$newimage);

          $product=product::create([
            'image'=> 'products/images/'.$newimage,
            'title'=> $request->title,
            'description'=> $request->description,
          ]);

          return redirect()->back();
    }


    public function show($id)
    {
        $product=product::find($id);
        return view('products.show',compact('product'));
    }


    public function edit($id)
    {
        $product=product::find($id);
        return view('products.edit',compact('product'));
    }


    public function update(Request $request,$id)
    {
        $product=product::find($id);
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'description'=>'required',

          ]);

          if ($request->has('image')) {
            $image=$request->image;
            $newimage=time().$image->getClientOriginalName();
            $image->move('products/images/',$newimage);
            $product->image= 'products/images/'.$newimage;
          }
          $product->image = 'products/images/'.$newimage;
          $product->title = $request->title;
          $product->description = $request->description;

          $product->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $product=product::find($id);
        $product->forcedelete();
        return redirect()->back();
    }
}
