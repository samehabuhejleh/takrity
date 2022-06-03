<?php

namespace App\Http\Controllers;

use App\aboutbetter;
use Illuminate\Http\Request;

class AboutbetterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $abouts=aboutbetter::latest()->paginate();
        return view('about_better.index',compact('abouts'));
    }


    public function create()
    {
         return view('about_better.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',

          ]);


          $about=aboutbetter::create([
            'title'=> $request->title,
            'description'=> $request->description,
          ]);

          return redirect()->back();
    }


    public function show($id)
    {
        $about=aboutbetter::find($id);
        return view('about_better.show',compact('about'));
    }


    public function edit($id)
    {
        $about=aboutbetter::find($id);
        return view('about_better.edit',compact('about'));
    }


    public function update(Request $request,$id)
    {
        $about=aboutbetter::find($id);
        $request->validate([
            'title'=>'required',
            'description'=>'required',

          ]);

          $about->title = $request->title;
          $about->description = $request->description;

          $about->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $about=aboutbetter::find($id);
        $about->forcedelete();
        return redirect()->back();
    }
}
