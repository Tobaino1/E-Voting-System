<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function member()
    {
        return view ('member');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required|string',
            'phone_no'   => 'required|string',
            'dob'            => 'required|date',
            'gender'            => 'required|string',
            'passport_name'      => 'blob',
            'email'   => 'required|string',
            'address'   => 'required|string',
            'state'            => 'required|string',
            'lgalcda'         => 'required|string',
            'party_reg_no'             => 'required|string',
        ]);
                // saving
        $members = new Member;
        $members-> name = $request->input('name');
        $members-> phone_no = $request->input('phone_no');
        $members-> dob = $request->input('dob');
        $members-> gender = $request->input('gender');
        $members-> passport_name = $request->input('passport_name');
        $members-> email = $request->input('email');
        $members-> address = $request->input('address');
        $members-> state = $request->input('state');
        $members-> lgalcda = $request->input('lgalcda');
        $members-> party_reg_no = $request->input('party_reg_no');
        $members->save();
        return redirect ('/member')->with('success', 'You have successfully registered a new member to the ADP E-VOTING SYSTEM!') ;
    }
}