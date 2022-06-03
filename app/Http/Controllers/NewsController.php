<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $news=news::latest()->paginate();
        return view('news.index',compact('news'));
    }


    public function create()
    {
         return view('news.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'date'=>'required',
            'description'=>'required',

          ]);

              $image=$request->image;
              $newimage=time().$image->getClientOriginalName();
              $image->move('news/images/',$newimage);

          $new=news::create([
            'image'=> 'news/images/'.$newimage,
            'title'=> $request->title,
            'date'=> $request->date,
            'description'=> $request->description,
          ]);

          return redirect()->back();
    }


    public function show($id)
    {
        $new=news::find($id);
        return view('news.show',compact('new'));
    }


    public function edit($id)
    {
        $new=news::find($id);
        return view('news.edit',compact('new'));
    }


    public function update(Request $request,$id)
    {
        $new=news::find($id);
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'date'=>'required',
            'description'=>'required',

          ]);

          if ($request->has('image')) {
            $image=$request->image;
            $newimage=time().$image->getClientOriginalName();
            $image->move('news/images/',$newimage);
            $new->image= 'news/images/'.$newimage;
          }
          $new->image = 'news/images/'.$newimage;
          $new->title = $request->title;
          $new->date = $request->date;
          $new->description = $request->description;

          $new->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $new=news::find($id);
        $new->forcedelete();
        return redirect()->back();
    }
}
