<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function showCandidate()
    {
        return view('candidate.index');
    }

    public function store(Request $request)
    {      
        $member = Member::create($request->all());

    return redirect ('/home')->with('success', 'Candidate has been successfully registered & accredited on the ADP E-VOTING SYSTEM!', 'alert-class', 'alert-success');
    }
   
    public function request()
      { 
        $member = Member::all();
        return view ('request', ['members' => $members]); 
      }

}
