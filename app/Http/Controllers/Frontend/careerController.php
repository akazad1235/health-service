<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClientSupport;

class careerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.careers.career');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  return $request->all();
      $request->validate([
        'name' => 'required',
        'email' => 'required',
        'referel' => 'required',
        'referel_email' => 'required',
      
         ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'referelName' => $request->input('referel'),
            'referelEmail' => $request->input('referel_email')
        ];
        Mail::to('admin@azadhosen.com')->send(new ClientSupport($data));
        if(mail::failures()){
 
            return back()->with('error','Your Complain Failed');    
        }else{

            return back()->with('success','Your Complain Recorded');  
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
    public function update(Request $request, $id)
    {
        //
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

    public function dspHiring(){
        return view('frontend.pages.careers.dspHire');  
    }
}
