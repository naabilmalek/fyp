<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/openGallery', function () {
    return view('projectGallery');
});



Auth::routes();




Route::group(['middleware' => ['auth']], function() {
    
    Route::get('/createProject', function () {
        return view('project.projectBackground');
    });

   

});

//project create route
Route::get('/projectBackground', function () {
    return view('project.projectBackground');
});

Route::get('/projectStory', function () {
    return view('project.projectStory');
});

Route::get('/projectProfile', function () {
    return view('project.projectProfile');
});

Route::get('/projectAccount', function () {
    return view('project.projectAccount');
});

Route::get('/projectView', function () {
    return view('project.projectView');
});

Route::get('/createdProject', function () {
    return view('user.createdProject');
});

// user Page route

Route::get('/userProfile', function () {
    return view('user.userProfile');
});

// Route::get('/editProfile', function () {
//     return view('user.editProfile');
// });

// comment route

// Route::get('/getcommentpage','CommentController@showPage');
// Route::post('/postcomment','CommentController@storeComment');

//profile masa create
Route::post('/addProjectBackground','ProjectsController@store1');

 //user profile 
 Route::get('/userProfile', 'UsersController@home');
 Route::get('/editProfile/{id}', 'UsersController@update');
 Route::post('/edit/{id}', 'UsersController@edit');


