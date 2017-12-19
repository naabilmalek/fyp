<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CommentsController extends Controller
{
    
    public function showPage(){  
        $comments = DB::select('select * from comments');  
        return View::make('commentpage' , array('comments' => $comments));
    }
    
    public function storeComment(){
        $input = Input::all();
        $validation = Validator::make($input, comment::$storevalid);
        
        if ($validation->passes()){               
            $com = new comment();
            $com->comment_text = Input::get('commentText');
            date_default_timezone_set('Asia/Colombo');    
            $com->post_d_time = date('Y/m/d H:i:s');   
            $com->save();
      
            $validation = array('Successfully added the Comment!');
      
            return Redirect::back() 
                ->withErrors($validation);            
        }
        return Redirect::back()
            ->withInput()
            ->withErrors($validation);
    }
}
