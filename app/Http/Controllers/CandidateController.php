<?php

namespace App\Http\Controllers;
use App\Candidate;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function showCandidate()
    {
        return view('candidate.index');
    }

    public function store(Request $request)
    {      
        $candidate = Candidate::create($request->all());

    return redirect ('/home')->with('success', 'Candidate has been successfully registered & accredited on the ADP E-VOTING SYSTEM!', 'alert-class', 'alert-success');
    }
   
    public function request()
      { 
        $member = Candidate::all();
        return view ('request', ['members' => $members]); 
      }

}
