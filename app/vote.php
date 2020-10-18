<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    public function User()
    {
    return $this->belongsTo('App\User');
     }
     public function Candidate()
     {
         return $this->belongsTo('App\Candidate');
     }
}
