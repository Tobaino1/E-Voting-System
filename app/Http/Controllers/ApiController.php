<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Candidate;

class ApiController extends Controller
{
    public function getAllCandidates() {
        // logic to get all Candidate 
        //http://localhost:8000/api/candidates

        $candidates = Candidate::get()->toJson(JSON_PRETTY_PRINT);
         return response($candidates, 200);
      }
  
      public function createCandidate(Request $request) {
        // logic to create a Candidate record
        // http://127.0.0.1:8000/api/candidates

        $candidate = new Candidate;
        $candidate->name = $request->name;
        $candidate->gender = $request->gender;
        $candidate->age = $request->age;
        $candidate->party = $request->party;
        $candidate->position = $request->position;
        $candidate->save();
    
        return response()->json(["message" => "Candidate record created"], 201);
      } 
      
      public function getCandidate($id) {
        // logic to get a Candidate record 
        //http://localhost:8000/api/candidates/{id}

        if (Candidate::where('id', $id)->exists()) {
          $candidate = Candidate::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($candidate, 200);
        } else {
          return response()->json([
            "message" => "Candidate record doesn't exist"
          ], 404);
        }
    }
  
      public function updateCandidate(Request $request, $id) {
        // logic to update a Candidate record 
        //http://localhost:8000/api/candidates/{id}

        if (Candidate::where('id', $id)->exists()) {
          $candidate = Candidate::find($id);
          $candidate->name = is_null($request->name) ? $candidate->name : $request->name;
          $candidate->gender = is_null($request->gender) ? $candidate->gender : $request->gender;
          $candidate->age = is_null($request->age) ? $candidate->age : $request->age;
          $candidate->party = is_null($request->party) ? $candidate->party : $request->party;
          $candidate->position = is_null($request->position) ? $candidate->position : $request->position;
          $candidate->save();
  
          return response()->json([
              "message" => "Candidate records updated successfully"
          ], 200);
          } else {
          return response()->json([
            "message" => "Candidate record doesn't exist"
          ], 404);
          
      }
      }
  
      public function deleteCandidate ($id) {
        // logic to delete a Candidate record 
        //http://localhost:8000/api/candidates/{id}

          if(Candidate::where('id', $id)->exists()) {
            $candidate = Candidate::find($id);
            $candidate->delete();
    
            return response()->json(["message" => "Candidate records deleted"], 202);
          } else {
            return response()->json(["message" => "Candidate not found"  ], 404);
          }
        }

}
