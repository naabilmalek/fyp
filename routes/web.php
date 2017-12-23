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

Route::get('/', 'ProjectsController@indexH');

Route::get('/home', 'ProjectsController@indexH');

Route::get('/laravel', function () {
    return redirect()->to('http://127.0.0.1:8080/gg/public/');
});


Route::get('/openGallery', function () {
    return view('projectGallery');
});

Route::get('/index', function () {
    return view('index');
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


//project page view after created
Route::get('/projectView/{id}','ProjectsController@preview' );



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

//create project. ntuk page 1 dan 2 (form)
Route::post('/addProjectBackground','ProjectsController@store1');
Route::post('/addProjectCreator','ProjectsController@store2');

//preview ntuk user bile dh siap create or edit
// Route::get('/editProfile/{id}', 'ProjectsController@preview');

 //user profile 
 Route::get('/userProfile', 'UsersController@home');
 Route::get('/editProfile/{id}', 'UsersController@update');
 Route::post('/edit/{id}', 'UsersController@edit');

 //edit project yg dah create
 Route::get('/editProject/{id}', 'ProjectsController@updateProject');
 Route::post('/editProjectBackground/{id}', 'ProjectsController@editPB');
 Route::post('/editProjectProfile','ProjectsController@editPP');
 Route::get('/projectProfileEdit', 'ProjectsController@updateProjectP');
 


