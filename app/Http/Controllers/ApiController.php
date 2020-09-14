<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllCandidates() {
        // logic to get all Candidate 
      }
  
      public function createCandidate(Request $request) {
        // logic to create a Candidate record 
      }
  
      public function getCandidate($id) {
        // logic to get a Candidate record 
      }
  
      public function updateCandidate(Request $request, $id) {
        // logic to update a Candidate record 
      }
  
      public function deleteCandidate ($id) {
        // logic to delete a Candidate record 
      }
}
