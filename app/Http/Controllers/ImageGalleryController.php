<?php

namespace App\Http\Controllers;

use App\Models\imageGallery;
use Illuminate\Http\Request;
use Image;
use File;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allImage =  imageGallery::get();
        return view('backend.pages.images.manage', compact('allImage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.images.create');
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
            'image' => 'required | mimes:jpeg,png,jpg,gif| max:4096',
        ]);
        $image = $request->file('image');
        $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $image->getClientOriginalExtension();
        // return $fileName;
        Image::make($image)->resize(1400, 1400)->save(public_path('backend/img/gallery/').$fileName );


        $data = [
            'image' => $fileName,
        ];

        
        if(imageGallery::create($data)){
            return back()->with('success','Blog Post Create Successfully!');
        }else{
            return back()->with('error','Blog Post Create Faild!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function show(imageGallery $imageGallery, $id)
    {
        $id = base64_decode($id);
        $getImageViewById = imageGallery::find($id);
        return view('backend.pages.images.view', compact('getImageViewById'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(imageGallery $imageGallery, $id)
    {
        $id = base64_decode($id);
        $getImageById = imageGallery::find($id);
        return view('backend.pages.images.update', compact('getImageById'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\imageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imageGallery $imageGallery, $id)
    {
        $request->validate([
            'image' => 'required | mimes:jpeg,png,jpg,gif| max:4096',
        ]);
        $id = base64_decode($id);
        $getPost =  imageGallery::find($id);
  
         
              $image = $request->file('image');
  
          if($image){
              $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $image->getClientOriginalExtension();
          // return $fileName;
          Image::make($image)->resize(1400, 1400)->save(public_path('backend/img/gallery/').$fileName );
          $existsImage = public_path("backend/img/gallery/{$getPost->image}");
          //unlink($existsImage); 
            if(File::exists($existsImage)){
               unlink($existsImage); 
            } 
            
  
          $data = [
              'image' => $fileName,
  
          ];
          if($getPost->update($data)){
              return back()->with('success','Image Successfully! Updated');
          }else{
              return back()->with('error','Image Update Faild!');
          }
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(imageGallery $imageGallery, $id)
    {
        
        $id= base64_decode($id);
        $getDltPost  = imageGallery::find($id);
        $getDltPost->delete();
        if( $getDltPost){
            unlink(public_path('backend/img/gallery/'.$getDltPost->image));
            return back()->with('success','Blog Post Successfully! Deleted');
        }else{
            return back()->with('error','Blog Post Delete Faild!');
        }
    }
    
}
