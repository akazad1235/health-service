<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

use Image;
use File;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPost = Blog::orderBy('id', 'DESC')->get();
        return view('backend.pages.blogs.manage', compact('allPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.pages.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required | max:100',
            'editor1' => 'required',
            'image' => 'required | mimes:jpeg,png,jpg,gif| max:4096',
        ]);

        $title = $request->input('blog_title');
        $desc = $request->input('editor1');
        $status = $request->input('status');
        $image = $request->file('image');
        $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $image->getClientOriginalExtension();
        // return $fileName;
        Image::make($image)->resize(582, 344)->save(public_path('backend/img/blog/').$fileName );


        $data = [
            'title' => $title,
            'desc' => $desc,
            'image' => $fileName,
            'status' => $status

        ];

        
        if(Blog::create($data)){
            return back()->with('success','Blog Post Create Successfully!');
        }else{
            return back()->with('error','Blog Post Create Faild!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog, $id)
    {
        $id = base64_decode($id);
        $Details =  Blog::find($id);
        return view('backend.pages.blogs.details', compact('Details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $id = base64_decode($id);
        $getPostById = Blog::find($id);
        return view('backend.pages.blogs.update', compact('getPostById'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = base64_decode($id);
      $getPost =  Blog::find($id);

        $request->validate([
            'blog_title' => 'required | max:100',
            'editor1' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif| max:4096',
        ]);

            $title = $request->input('blog_title');
            $desc = $request->input('editor1');
            $status = $request->input('status');
            $image = $request->file('image');

        if($image){
            $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $image->getClientOriginalExtension();
        // return $fileName;
        Image::make($image)->resize(582, 344)->save(public_path('backend/img/blog/').$fileName );
        $existsImage = public_path("backend/img/blog/{$getPost->image}");
        //unlink($existsImage); 
          if(File::exists($existsImage)){
             unlink($existsImage); 
          } 
          

        $data = [
            'title' => $title,
            'desc' => $desc,
            'image' => $fileName,
            'status' => $status

        ];
        if($getPost->update($data)){
            return back()->with('success','Blog Post Successfully! Updated');
        }else{
            return back()->with('error','Blog Post Update Faild!');
        }
        }else{
           $data = [
            'title' => $title,
            'desc' => $desc,
            'status' => $status
        ]; 
        
        if($getPost->update($data)){
            return back()->with('success','Blog Post Successfully! Updated');
        }else{
            return back()->with('error','Blog Post Update Faild!');
        }
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {
        $id= base64_decode($id);
        $getDltPost  = Blog::find($id);
        $getDltPost->delete();
        if( $getDltPost){
            unlink(public_path('backend/img/blog/'.$getDltPost->image));
            return back()->with('success','Blog Post Successfully! Deleted');
        }else{
            return back()->with('error','Blog Post Delete Faild!');
        }
    }
}
