<?php

namespace App\Http\Controllers;

use App\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $portfolios=portfolio::latest()->paginate();
        return view('portfolios.index',compact('portfolios'));
    }


    public function create()
    {
         return view('portfolios.create');
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
              $image->move('portfolios/images/',$newimage);

          $portfolio=portfolio::create([
            'image'=> 'portfolios/images/'.$newimage,
            'title'=> $request->title,
            'description'=> $request->description,
          ]);

          return redirect()->back();
    }


    public function show($id)
    {
        $portfolio=portfolio::find($id);
        return view('portfolios.show',compact('portfolio'));
    }


    public function edit($id)
    {
        $portfolio=portfolio::find($id);
        return view('portfolios.edit',compact('portfolio'));
    }


    public function update(Request $request,$id)
    {
        $portfolio=portfolio::find($id);
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'description'=>'required',

          ]);

          if ($request->has('image')) {
            $image=$request->image;
            $newimage=time().$image->getClientOriginalName();
            $image->move('portfolios/images/',$newimage);
            $portfolio->image= 'portfolios/images/'.$newimage;
          }
          $portfolio->image = 'portfolios/images/'.$newimage;
          $portfolio->title = $request->title;
          $portfolio->description = $request->description;

          $portfolio->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $portfolio=portfolio::find($id);
        $portfolio->forcedelete();
        return redirect()->back();
    }
}
