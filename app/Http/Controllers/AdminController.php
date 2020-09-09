<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member; // model 
use App\Accrediation; // model 

class AdminController extends Controller
{
/**
     * Create a new controller instance.
     * authentication //to redirect unathorized access to login
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function requestMembers()
      { 
        $members = Member::all();
        return view ('member_request', ['members' => $members]); 
      }

      public function requestAccrediations()
      { 
        $accrediations = Accrediation::all();
        return view ('Accrediations_request', ['accrediations' => $accrediations]); 
      }

      public function regMember ()
    {
        return view ('registerMember');
    }

}
