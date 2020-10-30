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
        return view ('registerMember');
    }

    public function request()
    { 
      $members = Member::all();
      return view ('request', ['members' => $members]); 
    }

  }	