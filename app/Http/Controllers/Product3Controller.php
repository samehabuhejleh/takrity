<?php

namespace App\Http\Controllers;

use App\product3;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Product3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products3=product3::latest()->paginate();
        return view('products3.index',compact('products3'));
    }


    public function create()
    {
        $products3=DB::select('select * from product2s');
         return view('products3.create',compact('products3'));
    }


    public function store(Request $request)
    {
        $id=Auth::id();
        $request->validate([
            'user_id3'=>'required',
            'image3'=>'required',
            'title3'=>'required',
            'description3'=>'required',

          ]);

              $image=$request->image3;
              $newimage=time().$image->getClientOriginalName();
              $image->move('products3/images/',$newimage);

          $product3=product3::create([
            'user_id3'=> $id,
            'image3'=> 'products3/images/'.$newimage,
            'title3'=> $request->title3,
            'description3'=> $request->description3,
          ]);

           return redirect()->back();
    }


    public function show($id)
    {
        $product3=product2::find($id);
        return view('products3.show',compact('product3'));
    }


    public function edit($id)
    {
        $product3=product3::find($id);
        return view('products3.edit',compact('product3'));
    }


    public function update(Request $request,$id)
    {
        $product3=product3::find($id);
        $request->validate([
            'image3'=>'required',
            'title3'=>'required',
            'description3'=>'required',

          ]);

          if ($request->has('image3')) {
            $image=$request->image3;
            $newimage=time().$image->getClientOriginalName();
            $image->move('products3/images/',$newimage);
            $product3->image3= 'products3/images/'.$newimage;
          }

          $product3->image3 = 'products3/images/'.$newimage;
          $product3->title3 = $request->title3;
          $product3->description3 = $request->description3;

          $product3->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $product3=product3::find($id);
        $product3->forcedelete();
        return redirect()->back();
    }
}
