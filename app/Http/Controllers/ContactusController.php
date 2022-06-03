<?php

namespace App\Http\Controllers;

use App\contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $contact_us=contactus::latest()->paginate();
        return view('contact_us.index',compact('contact_us'));
    }


    public function create()
    {
         return view('contact_us.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'title'=>'required',
          ]);

              $image=$request->image;
              $newimage=time().$image->getClientOriginalName();
              $image->move('contactus/images/',$newimage);

          $contact_us=contactus::create([
            'image'=> 'contactus/images/'.$newimage,
            'title'=> $request->title,
          ]);

          return redirect()->back();
    }


    public function show($id)
    {
        $contact_us=contactus::find($id);
        return view('contact_us.show',compact('contact_us'));
    }


    public function edit($id)
    {
        $contact_us=contactus::find($id);
        return view('contact_us.edit',compact('contact_us'));
    }


    public function update(Request $request,$id)
    {
        $contact_us=contactus::find($id);
        $request->validate([
            'image'=>'required',
            'title'=>'required',

          ]);

          if ($request->has('image')) {
            $image=$request->image;
            $newimage=time().$image->getClientOriginalName();
            $image->move('contactus/images/',$newimage);
            $contact_us->image= 'contactus/images/'.$newimage;
          }
          $contact_us->image = 'contactus/images/'.$newimage;
          $contact_us->title = $request->title;

          $contact_us->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $contact_us=contactus::find($id);
        $contact_us->forcedelete();
        return redirect()->back();
    }
}
