<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Blogimage;
use App\Models\Introduction;
use Illuminate\Http\Request;
use App\Exceptions\Handler;

class MainPageController extends Controller
{
    // Method for routing the data to web index page
        public function index()
    {
       
        $blog=Blog::orderBy('id', 'DESC')->take(10)->get();
        $blog_trend = Blog::orderBy('trending', 'Desc')->take(5)->get();
        $profile = Introduction::findOrFail(1);

        
        foreach($blog as $b){
            $b->images=$b->blogimages;
        }

        foreach($blog_trend as $b){
            $b->images=$b->blogimages;
        }
        
        dd($profile);
        return view('web.index')->with('blog',$blog);
                                // ->with('blog_trend', $blog_trend)
                                // ->with('profile', $profile);
    }
}
