<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Blogimage;
use App\Models\Introduction;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomePageController extends Controller
{
        // Method for routing the data to web index page
        public function index()
    {
      
         $blogs=Blog::orderBy('id', 'DESC')->take(5)->get();
         $blog_latest = Blog::orderBy('created_at', 'Desc')->take(5)->get();
         $blog_trending = Blog::orderBy('trending', 'Desc')->take(5)->get();
         $profile = Introduction::first();
        
        foreach($blogs as $b){
            $b->images=$b->blogimages;
        }


        foreach($blog_latest as $b){
            $b->images=$b->blogimages;
        }

        foreach($blog_trending as $b){
            $b->images=$b->blogimages;
        }

        return view('web.index')->with('blogs',$blogs)
                                ->with('blog_latest', $blog_latest)
                                ->with('blog_trending',$blog_trending)
                                ->with('profile', $profile);
    }
}
