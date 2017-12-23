<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class creator extends Model
{
    //
    public function projects(){

        // return $this->hasOne('App\Project','foreign_key');
        return $this->hasMany('App\Project');
    }

   
}
