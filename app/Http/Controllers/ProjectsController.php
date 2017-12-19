<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Image;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 123;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        //

        $request->validate([

            'imgupload'=>'required',
            'project_name'=>'required',
            'project_URL'=>'required',
            'project_description'=>'required',
            'end_date'=>'required',
            'fund_goal'=>'required'
        ]);
        
        $request->hasFile('imgupload');
        $projectavatar = $request->file('imgupload');
        $filename = time() . '.' . $projectavatar->getClientOriginalExtension();
        Image::make($projectavatar)->resize(300, 300)->save( public_path('/upload/projectImage/' . $filename ) );

        // $data = array(
            
        //                     'profile_image'=> $filename,
        //                     'project_name'=> $request -> input('project_name'),
        //                     'project_URL'=> $request -> input('project_URL'),
        //                     'website_URL'=> $request -> input('web_URL'),
        //                     'project_desc'=> $request -> input('project_description'),
        //                     'funding_end_date'=> $request -> input('end_date'),
        //                     'fund_goal'=> $request -> input('fund_goal')
        // );

        // return User::create(&data)->save();
        // return 123;

        $date=date_create($request->input('end_date'));
        $date_format=date_format($date,"Y/m/d");

        $project = new Project;
    	$project -> project_image = $filename;
        $project -> project_name = $request -> input('project_name');
        $project -> project_URL = $request -> input('project_URL');
    	$project -> website_URL = $request -> input('web_URL');
    	$project -> project_desc = $request -> input('project_description');
    	$project -> funding_end_date = $date_format;
        $project -> fund_goal = $request -> input('fund_goal');        
    	$project -> save();
        
        return redirect('/projectBackground')-> with ('info', 'Articale Saved Successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
