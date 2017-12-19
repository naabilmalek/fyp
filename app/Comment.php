<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public $table = 'comments';
    public $timestamps = false;
    protected $fillable = ['id','comment_text','post_d_time'];
   
    public static $storevalid = array( 
      'commentText' => 'required',     
    );
}
