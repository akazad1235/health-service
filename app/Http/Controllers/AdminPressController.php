<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\press;
use Image;
use File;


class AdminPressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $allPress = press::orderBy('id', 'desc')->get();
        return view('backend.pages.press.manage',compact('allPress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.pages.press.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //   return $request->all();
        $request->validate([
            'title' => 'required | max:100',
            'url' => 'required | url',
            'editor1' => 'required',
            'image' => 'required | mimes:jpeg,png,jpg,gif| max:4096',
        ]);

        $title = $request->input('title');
        $url = $request->input('url');
        $desc = $request->input('editor1');
        $status = $request->input('status');
        $image = $request->file('image');
        $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $image->getClientOriginalExtension();
        // return $fileName;
        Image::make($image)->resize(582, 344)->save(public_path('backend/img/press/').$fileName );


        $data = [
            'title' => $title,
            'url' => $url,
            'desc' => $desc,
            'image' => $fileName,
            'status' => $status

        ];

        if(press::create($data)){
            return back()->with('success','Press Create Successfully!');
        }else{
            return back()->with('error',' Press Create Faild!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = base64_decode($id);
        $Details =  press::find($id);
        return view('backend.pages.press.details', compact('Details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = base64_decode($id);
        $getPressById = press::where('id', $id)->find($id);
        return view('backend.pages.press.update', compact('getPressById'));
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
        $id = base64_decode($id);
        $getPress =  press::find($id);
        
  
        $request->validate([
            'title' => 'required | max:100',
            'url' => 'required | url',
            'editor1' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif| max:4096',
        ]);
            $title = $request->input('title');
            $url = $request->input('url');
            $desc = $request->input('editor1');
            $status = $request->input('status');
            $image = $request->file('image');
  
          if($image){
              $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $image->getClientOriginalExtension();
          // return $fileName;
          Image::make($image)->resize(582, 344)->save(public_path('backend/img/press/').$fileName );
          $existsImage = public_path("backend/img/press/{$getPress->image}");
          //unlink($existsImage); 
            if(File::exists($existsImage)){
               unlink($existsImage); 
            } 
            
         
  
          $data = [
            'title' => $title,
            'url' => $url,
            'desc' => $desc,
            'image' => $fileName,
            'status' => $status

        ];
          if($getPress->update($data)){
            

              return back()->with('success','Press Post Successfully! Updated');
          }else{
              return back()->with('error','Press Post Update Faild!');
          }
          }else{
            $data = [
                'title' => $title,
                'url' => $url,
                'desc' => $desc,
                'status' => $status
            ];
          if($getPress->update($data)){
              return back()->with('success','Press Post Successfully! Updated');
          }else{
              return back()->with('error','Press Post Update Faild!');
          }
          }
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id= base64_decode($id);
        $getDltPress  = press::find($id);
        $getDltPress->delete();
        if( $getDltPress){
            unlink(public_path('backend/img/press/'.$getDltPress->image));
            return back()->with('success','Blog Post Successfully! Deleted');
        }else{
            return back()->with('error','Blog Post Delete Faild!');
        }
    }
}
