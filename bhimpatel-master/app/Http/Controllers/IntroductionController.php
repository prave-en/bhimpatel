<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Introduction;
use App\Models\Blog;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $profile['profile'] = Introduction::all();
        $data['introduction']=Introduction::first();
        $blogs=Blog::all();
        foreach($blogs as $blog){
            $blog->blogimages;
        }
        $data['blogs']=$blogs;
        //return $data;
        return view('dashboard.index')->with('data',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'intro' => 'required',
        ]);

        $profile = new Introduction;
        $profile->full_name = $request->full_name;
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->dob = $request->dob;
        $profile->intro = $request->intro;
        $profile->save();
        return back()->with('success','data added succesfully');
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
         $this->validate(request(), [
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'intro' => 'required',
        ]);

        $profile = Introduction::findOrFail($id);
        $profile->full_name = $request->full_name;
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->dob = $request->dob;
        $profile->intro = $request->intro;
        $profile->save();
        return back()->with('success','data added succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
