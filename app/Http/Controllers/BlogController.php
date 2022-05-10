<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Blogimage;
use Illuminate\Http\Request;
use App\Exceptions\Handler; 

class BlogController extends Controller
{
    // */
    public function index()
    {
       //example
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blogs-create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate(request(), [
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
        ]);
        
         try {
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            if ($request->show){
                $blog->show = $request->show;
            }
            if($request->trending){
                $blog->trending = $request->trending;
            }
            $blog->order = $request->order;
            $blog->save();

             if($request->hasfile('image')){
                 echo "jj";    

                foreach($request->file('image') as $key=>$img){
                    $name=time() . '.'.$img->clientExtension();
                    $blog_image = new Blogimage();
                    $blog_image->blog_id = $blog->id;
                    $blog_image->image = $name;
                    $blog_image->is_featured = 1;
                    $blog_image->show = 1;
                    $blog_image->order = 1;
                    if($blog_image->save()) {
                        $img->move(public_path().'/blogs/', $name);
                    }
                }
            }
        } catch (Throwable $e) {
            report($e);
        }
        return redirect()->route('intro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $blog = Blog::findOrFail($id);
        $blog->blogimages;
        return $blog;
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
        $blog = Blog::findOrFail($id);
        $blog->blogimages;
        $data['blog']=$blog;
        // return $data;
        return view('dashboard.blogs-create-edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //dd($request);
         $this->validate(request(), [
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            // 'show' => 'required',
            // 'trending' => 'required',
            // 'order' => 'required'
        ]);
        try {
        $blog =  Blog::find($id);
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->long_description = $request->long_description;
        if ($request->show){
                $blog->show = $request->show;
        }
        if($request->trending){
            $blog->trending = $request->trending;
        }
        if($request->order){
            $blog->order = $request->order;
        }
        $blog->save();

        } catch (Throwable $e) {
        report($e);
        }
        if($request->hasfile('image')){
            foreach($request->file('image') as $key=>$img){
                $name=time() . '.'.$img->clientExtension();
                $blog_image = new Blogimage();
                $blog_image->blog_id = $blog->id;
                $blog_image->image = $name;
                $blog_image->is_featured = 1;
                $blog_image->show = 1;
                $blog_image->order = 1;
                if($blog_image->save()) {
                    $img->move(public_path().'/blogs/', $name);
                }
            }
        }
        return back()->with('success','SUCCCESS');
        
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
