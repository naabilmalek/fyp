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

    Route::get('/createdProject', 'ProjectsController@display');
   

});

//project create route
Route::get('/projectBackground', function () {
    return view('project.projectBackground');
});



Route::get('/projectProfile', function () {
    return view('project.projectProfile');
});



Route::get('/projectView', function () {
    return view('project.projectPreview');
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
Route::post('/addProjectCreator','ProjectsController@store2');

Route::get('/editProfile/{id}', 'ProjectsController@preview');

 //user profile 
 Route::get('/userProfile', 'UsersController@home');
 Route::get('/editProfile/{id}', 'UsersController@update');
 Route::post('/edit/{id}', 'UsersController@edit');

 //edit project

 Route::get('/editProfile/{id}', 'ProjectsController@updateProject');
 Route::post('/editProjectBackground/{id}', 'ProjectsController@editPB');
 Route::post('/editProjectProfile','ProjectsController@editPP');
 Route::get('/projectProfileEdit', 'ProjectsController@updateProjectP');
 


