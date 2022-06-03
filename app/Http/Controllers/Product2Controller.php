<?php

namespace App\Http\Controllers;

use App\product2;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Product2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products2=product2::latest()->paginate();
        return view('products2.index',compact('products2'));
    }


    public function create()
    {
        $products2=DB::select('select * from product1s');
         return view('products2.create',compact('products2'));
    }


    public function store(Request $request)
    {
        $id=Auth::id();
        $request->validate([
            'user_id2'=>'required',
            'image2'=>'required',
            'title2'=>'required',
            'description2'=>'required',

          ]);

              $image=$request->image2;
              $newimage=time().$image->getClientOriginalName();
              $image->move('products2/images/',$newimage);

          $product2=product2::create([
            'user_id2'=> $id,
            'image2'=> 'products2/images/'.$newimage,
            'title2'=> $request->title2,
            'description2'=> $request->description2,
          ]);

           return redirect()->back();
    }


    public function show($id)
    {
        $product2=product2::find($id);
        return view('products2.show',compact('product2'));
    }


    public function edit($id)
    {
        $product2=product2::find($id);
        return view('products2.edit',compact('product2'));
    }


    public function update(Request $request,$id)
    {
        $product2=product2::find($id);
        $request->validate([
            'image2'=>'required',
            'title2'=>'required',
            'description2'=>'required',

          ]);

          if ($request->has('image2')) {
            $image=$request->image2;
            $newimage=time().$image->getClientOriginalName();
            $image->move('products2/images/',$newimage);
            $product2->image2= 'products2/images/'.$newimage;
          }

          $product2->image2 = 'products2/images/'.$newimage;
          $product2->title2 = $request->title2;
          $product2->description2 = $request->description2;

          $product2->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $product2=product2::find($id);
        $product2->forcedelete();
        return redirect()->back();
    }
}
