<?php

namespace App\Http\Controllers;

use App\aboutmeet;
use Illuminate\Http\Request;

class AboutmeetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $aboutmeets=aboutmeet::latest()->paginate();
        return view('about_meet.index',compact('aboutmeets'));
    }


    public function create()
    {
         return view('about_meet.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'name'=>'required',
            'major'=>'required',
            'description'=>'required',

          ]);

              $image=$request->image;
              $newimage=time().$image->getClientOriginalName();
              $image->move('aboutmeets/images/',$newimage);

          $aboutmeet=aboutmeet::create([
            'image'=> 'aboutmeets/images/'.$newimage,
            'name'=> $request->name,
            'major'=> $request->major,
            'description'=> $request->description,
          ]);

          return redirect()->back();
    }


    public function show($id)
    {
        $aboutmeet=aboutmeet::find($id);
        return view('about_meet.show',compact('aboutmeet'));
    }


    public function edit($id)
    {
        $aboutmeet=aboutmeet::find($id);
        return view('about_meet.edit',compact('aboutmeet'));
    }


    public function update(Request $request,$id)
    {
        $aboutmeet=aboutmeet::find($id);
        $request->validate([
            'image'=>'required',
            'name'=>'required',
            'major'=>'required',
            'description'=>'required',

          ]);

          if ($request->has('image')) {
            $image=$request->image;
            $newimage=time().$image->getClientOriginalName();
            $image->move('aboutmeets/images/',$newimage);
            $aboutmeet->image= 'aboutmeets/images/'.$newimage;
          }
          $aboutmeet->image = 'aboutmeets/images/'.$newimage;
          $aboutmeet->name = $request->name;
          $aboutmeet->major = $request->major;
          $aboutmeet->description = $request->description;

          $aboutmeet->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $aboutmeet=aboutmeet::find($id);
        $aboutmeet->forcedelete();
        return redirect()->back();
    }
}
