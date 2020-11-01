<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function member()
    {
        //view for reg
        return view ('registerMember');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|string',
            'phone_no'   => 'required|digits_between:8,15',
            'dob'            => 'required|date',
            'gender'            => 'required|string',
            // 'file'      => 'required|mimes:csv,jpeg,png,csv,pdf,JPG,PNG,JPEG|max:2048',
            // 'passport_name'   => 'required|file',
            'email' => 'required |string|email|max:255|unique:members',
            'address'   => 'required|string',
            'state'            => 'required|string',
            'lgalcda'         => 'required|string',
            'party_reg_no'             => 'required|string',
            'acc_no'             => 'required|string',
        ]);

        $member = Member::create($request->all());
        
        $success = [
           "title"   => "Registration Successful",
           "message" => "You have successfully register a member",
        ];

        return redirect()->route('/home')->with('success', $success);
    }
}
