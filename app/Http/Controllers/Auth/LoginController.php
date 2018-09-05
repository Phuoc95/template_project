<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'email'    => 'required',
                'password' => 'required',
            ]
        );
        if ($validator->passes()) {
            $remember = $request->remember ? true : false;
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember)) {
                return redirect()->route('dashboard');
            } else {
                Session::flash('loginFail', trans('auth.loginFail'));
                return redirect()->back();
            }
        } else {
            return redirect()->back()->withErrors($validator->errors()); //add flash data under the key errors
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
