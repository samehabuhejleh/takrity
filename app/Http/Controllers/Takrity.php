<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Takrity extends Controller
{
    public function index()
    {
        $products=DB::select('select * from products');
        $portfolios=DB::select('select * from portfolios');
        $news=DB::select('select * from news');
      return view('takrity.index',compact('products','portfolios','news'));
    }

    public function about_us()
    {
        $aboutbetters=DB::select('select * from aboutbetters');
        $aboutmeets=DB::select('select * from aboutmeets');
      return view('takrity.about_us',compact('aboutbetters','aboutmeets'));
    }

    public function portfolio()
    {
        $portfolios=DB::select('select * from portfolios');
      return view('takrity.portfolio',compact('portfolios'));
    }

    public function product()
    {
        $products=DB::select('select * from products');
        return view('takrity.products',compact('products'));
    }

    public function products_1($id)
    {
        $products1=DB::table('product1s')->where('user_id',$id)->get();
        return view('takrity.products1',compact('products1'));
    }

    public function products_2($id){
        $products2=DB::table('product2s')->where('user_id2',$id)->get();
        return view('takrity.products2',compact('products2'));
    }
    public function products3($id){
        $products3=DB::table('product3s')->where('user_id3',$id)->get();
        return view('takrity.products_3',compact('products3'));
    }

    public function new()
    {
        $news=DB::select('select * from news');
        return view('takrity.news',compact('news'));
    }

    public function  news_details($id)
    {
        $newsdet=DB::table('news')->where('id',$id)->get();
        return view('takrity.news_details',compact('newsdet'));
    }

    public function  careers(){
        return view('takrity.careers');
    }

    public function  contact_us()
    {
        $contact_us=DB::select('select * from contactuses');
        $contact_map=DB::select('select * from contactmaps');

         return view('takrity.contact_us',compact('contact_us','contact_map'));
     }

}

