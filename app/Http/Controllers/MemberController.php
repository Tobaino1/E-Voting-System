<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

use App\Mail\RegistrationMail;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function member()
    {
        //view for reg
        return view ('member');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name'              => 'required|string',
        //     'phone_no'   => 'required|string',
        //     'dob'            => 'required|date',
        //     'gender'            => 'required|string',
        //     // 'file'      => 'required|mimes:csv,jpeg,png,csv,pdf,JPG,PNG,JPEG|max:2048',
        //     'passport_name'   => 'required|file',
        //     'email'   => 'required|string',
        //     'address'   => 'required|string',
        //     'state'            => 'required|string',
        //     'lgalcda'         => 'required|string',
        //     'party_reg_no'             => 'required|string',
        // ]);
          
        $member = Member::create($request->all());

        if (request()->hasFile('passport_name')) {
            $passport_name = request()->file('passport_name')->getClientOriginalName();
            request()->file('passport_name')->storeAs('passports', $member->id . '/' . $passport_name, '');
            $member->update(['passport_name' => $passport_name]);           
        }
       

        
        // $enrollment = CardEnrollment::create($request->except('passport_name'));

		// if ($request->hasFile('passport_name')) {
		// 	$pathToFile = $request->file('passport_name')->store('passports');
		// 	Log::debug($pathToFile);

		// 	$enrollment->update(['passport_name' => $pathToFile]);
        // }
        
        //get member email
        $member_email = $member->email;

		// send mail to the user
		Mail::to($member_email)->send(new RegistrationMail($member));
         
    return redirect ('/home')->with('success', 'Member has been successfully registered & accredited on the ADP E-VOTING SYSTEM!', 'alert-class', 'alert-success');
        // return redirect()->back()->with('success', 'Data Added');

    }
  }	