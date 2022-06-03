<?php

namespace App\Http\Controllers;

use App\contactmap;
use Illuminate\Http\Request;

class ContactmapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $contact_map=contactmap::latest()->paginate();
        return view('contact_map.index',compact('contact_map'));
    }


    public function create()
    {
         return view('contact_map.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'lang'=>'required',
            'atit'=>'required',
          ]);


          $contact_map=contactmap::create([
            'lang'=> $request->lang,
            'atit'=> $request->atit,

          ]);

          return redirect()->back();
    }


    public function show($id)
    {
        $contact_map=contactmap::find($id);
        return view('contact_map.show',compact('contact_map'));
    }


    public function edit($id)
    {
        $contact_map=contactmap::find($id);
        return view('contact_map.edit',compact('contact_map'));
    }


    public function update(Request $request,$id)
    {
        $contact_map=contactmap::find($id);
        $request->validate([
            'lang'=>'required',
            'atit'=>'required',

          ]);



          $contact_map->lang = $request->lang;
          $contact_map->atit = $request->atit;


          $contact_map->save();


          return redirect()->back();
    }


    public function destroy($id)
    {
        $contact_map=contactmap::find($id);
        $contact_map->forcedelete();
        return redirect()->back();
    }
}
