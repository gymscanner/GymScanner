<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Mail;
use Mail;

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
        // $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {  
        $inputVal = $request->all();
       
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))){
            if (auth()->user()->role == 1) {
		        $this->send_verification_code();
                return redirect()->route('admin.verify');
            }
            if (auth()->user()->role == 2) {
                return redirect()->route('myprofile');
            }
            if (auth()->user()->role == 3) {
                return redirect()->route('personal_myprofile');
            }else {
                return redirect()->route('login');
            }
        }else{
            return redirect()->route('login')
                ->with('message','Email & Password are incorrect.');
        }     
    }

    public function send_verification_code() {

        $rand_no = rand(100000, 999999);
        
        Mail::send([], [], function($message) use($rand_no) {
             $message->from('vendors@gymscanner.com', 'GYMSCANNER');
             $message->to(auth()->user()->email, auth()->user()->name)->subject('verification code')
		 	        ->setBody("<head><meta http-equiv='Content-Language' content='en-us'>
                    <meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
                    </head>".$rand_no, 'text/html');
        });
        $admin = User::where('id',auth()->user()->id)->first();
        $admin->verify_code = $rand_no;
        $admin->save();
    }
}
