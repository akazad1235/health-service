<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $inputVal = $request->all();

        $email =  $inputVal['email'];
        
         $getAdmin = User::where('email', $inputVal['email'])->count();
       // $adminId =  $getAdmin[0]['id'];
       // $adminEmail =  $getAdmin[0]['email'];


        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($getAdmin == 0) {
            return redirect()->route('login')
            ->with('error','Your email incorrect.');
        }else{
            if(auth()->attempt(array('email' => $inputVal['email'], 'password' =>$inputVal['password']))){
                //session(['adminId'=>$adminId]);
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('login')
                ->with('error','Email or password incorrect.');
            }
        }
    }
}
