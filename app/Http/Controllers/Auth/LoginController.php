<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

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

        public function __construct()
        {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:user')->except('logout');
        }

    //     // define the login for admins
    //     public function showAdminLoginForm()
    //   {
    //     return view('auth.login', ['url' => 'admin']);
    //   }

    // public function adminLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email'   => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

    //         return redirect()->intended('/admin');
    //     }
    //     return back()->withInput($request->only('email', 'remember'));
    // }

    //      // define the login for users
    // public function showUserLoginForm()
    // {
    //     return view('auth.login', ['url' => 'user']);
    // }

    // public function userLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email'   => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

    //         return redirect()->intended('/user');
    //     }
    //     return back()->withInput($request->only('email', 'remember'));
    // }


    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }


    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
  

    public function showUserLoginForm()
    {
        return view('auth.login', ['url' => 'user']);
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/user');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showLoginForm()    
     {        
          return view('auth.login');  
           }
       
}
