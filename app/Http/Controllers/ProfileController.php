<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request; //add facades request to get
use App\Profile; // model 

 
class ProfileController extends Controller
{
    public function profile()
    {
        return view ('profile');
    }

    public function mbrprofile (Request $party_reg_no, $acc_no){
        $party_reg_no = Request::get( 'party_reg_no' );
       $acc_no = Request::get( 'acc_no' );
       
       if($party_reg_no != "" &&  $acc_no != "" ){
   
       $user = Profile::where( 'party_reg_no', 'LIKE', '%' . $party_reg_no . '%', 'acc_no', 'LIKE', '%' . $acc_no . '%' )->get();
        if (count ( $user ) > 0)
        return view('/profile')->withDetails( $user )->withQuery($party_reg_no, $acc_no);
         }
   
        return view ('/profile')->withMessage ("No Details found for this Member, Member is yet to be Accredited, Please contact the Administrator!");
        }
}
