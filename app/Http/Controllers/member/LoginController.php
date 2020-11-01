<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\MessageBag;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function __construct()
    {   
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:member')->except('logout');
    }

/**
     * shows login form
     * 
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('member.login');
    }

    /**
     * login logic
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|string|email',
            'acc_no' => 'required|string'
        ]);

        $credentials = [
            'email'    => $request->email,
            'acc_no' => $request->acc_no
        ];

        if (Auth::guard('member')->attempt($credentials)) {
            return redirect()->intended(route('member.user'));
        }

        $error_bag = new MessageBag;
        $error_bag->add('email', 'These credential does not match our startup records');
        return back()->withInput($request->only('email'))
            ->withErrors($error_bag);
    }

   /**
     * logouts a startup
    * 
    * @param \Illuminate\Http\Request $request
    */
    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $request->wantsJson()
            ? new Response('', 204)
            : redirect()->route('member.login');
    }

    
}
