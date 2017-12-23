<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use Auth;

class UsersController extends Controller
{
    //
    public function home(){
        $id=Auth::user()->id;
    	$users = User::find($id);
    	return view('user.userProfile',['user' => $users]);
    }

    public function update($id){
        
        $users = User::find($id);
        
        return view('user.editProfile',['users' => $users]);
        
       
    }

    public function edit(Request $request, $id){
    	// $this->validate($request, [
    	// 	'profile_picture' => 'required',
    	// 	'description' => 'required'
        // ]);
        if($request->hasFile('profile_picture')){
    		$avatar = $request->file('profile_picture');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/upload/avatars/' . $filename ) );
            

            $data = array(
                
                            'profile_image'=> $filename,
                            'name'=> $request -> input('user_name'),
                            'phone_no'=> $request -> input('contact'),
                            'email'=> $request -> input('email'),
                            'location_user'=> $request -> input('user_location'),
                            'userweb_URL'=> $request -> input('web_URL'),
                            'user_bio'=> $request -> input('userBio')
            );  
        }

        else{
                $data = array(


                'name'=> $request -> input('user_name'),
                'phone_no'=> $request -> input('contact'),
                'email'=> $request -> input('email'),
                'location_user'=> $request -> input('user_location'),
                'userweb_URL'=> $request -> input('web_URL'),
                'user_bio'=> $request -> input('userBio')
            );
        }
        User:: where('id',$id) -> update($data);
        
        return redirect('/userProfile')-> with ('info', 'Articale Deleted Successfully!');

    }



}
