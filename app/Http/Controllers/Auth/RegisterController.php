<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Session;
use DB;
use Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest'); 
	   
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data, [
                'name'                  => ['required', 'string', 'max:255'],
                'last_name'             => ['required', 'string', 'max:255'],
                'email'                 => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password'              => ['required', 'string', 'min:8', 'confirmed'],
                'website'               => ['required', 'string', 'url'],
                'country'               => ['required', 'string', 'max:255'],
                'role'                  => ['required', 'integer', 'in:1,2,3'],
                'g-recaptcha-response'  => ['required'],
            ]
        );
    }
	
	
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();

        try {
            $user = User::create([
                'external_id'   => 'iii',
                'name'          => $data['name'],
                'last_name'     => $data['last_name'],
                'website'       => $data['website'],
                'country'       => $data['country'],
                'email'         => $data['email'],
                'password'      => Hash::make($data['password']),
                'role'          => $data['role'],
            ]);

            $user->external_id = $u = 'i-'.(100000 + $user->id);
            $user->update();

            Session::put('myregrole', $data['role']);
            Session::put('myregname', $data['name']);
            Session::put('myreglname', $data['last_name']);
            Session::put('myregemail', $data['email']);
            Session::put('myregexternal', $u);

            DB::commit();
            return $user;
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
        }
    }

}