<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Image;
use App\Project;
use App\User;
use App\Payment;
use Auth;


class ProjectsController extends Controller
{
  
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display(){
        $user_id= auth()->user()->id;
        $user=User::find($user_id);
    	return view('user.createdProject')->with('projects',$user->projects);
    }
    
     public function indexH(){

        // $projects=Project::all();

        // return view('home')->with('projects', $projects);

        $project = Project::orderBy('project_name', 'asc')->take(3)->get();
        
        return view('home',compact('project'));
    }

    public function indexp(){

        // $projects=Project::all();

        // return view('home')->with('projects', $projects);

        $project = Project::orderBy('project_name', 'asc')->take(3)->get();
        
        return view('projectGallery',compact('project'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function preview($id){
        
        $projects=Project::find($id);
        $user_id = Project::where('id', $id)->value('user_id');
        $users=User::find($user_id);
        $payment = Payment::where('project_id',$id)->first();

        

    	return view('project.projectPreview',compact('projects','users','payment'));
    }


    public function comment(){
        $campaign = Campaign::find($id);
        $title = $campaign->title;

        $enable_discuss = get_option('enable_disqus_comment_in_blog');
        return view('campaign_single', compact('campaign', 'title', 'enable_discuss'));
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
            'fund_goal'=>'required',
            'story'=>'required',
        ]);
        
        $request->hasFile('imgupload');
        $projectavatar = $request->file('imgupload');
        $filename = time() . '.' . $projectavatar->getClientOriginalExtension();
        Image::make($projectavatar)->resize(700, 300)->save( public_path('/upload/projectImage/' . $filename ) );

        $date=date_create($request->input('end_date'));
        $date_format=date_format($date,"Y/m/d");

        $date1=date_create($request->input('start_date'));
        $date_format1=date_format($date1,"Y/m/d");

        $project = new Project;
    	$project -> project_image = $filename;
        $project -> project_name = $request -> input('project_name');
        $project -> project_URL = $request -> input('project_URL');
    	$project -> website_URL = $request -> input('web_URL');
        $project -> project_desc = $request -> input('project_description');
        $project -> funding_start = $date_format1;
    	$project -> funding_end_date = $date_format;
        $project -> fund_goal = $request -> input('fund_goal');  
        $project -> video_URL = $request -> input('video_URL'); 
        $project -> project_story = $request -> input('story');
        $project -> user_id = auth()->user()->id;
        
        $project -> save();
        
        
        return redirect('/projectProfile');


    }

    public function store2(Request $request){
        $user_id= auth()->user()->id;
        $user=User::find($user_id);
        
        $request->validate([
            
            'ic_passport'=>'required',
            'matric_no'=>'required',
            'bank_name'=>'required',
            'bank_accHolder'=>'required',
            'bank_accNum'=>'required',
        ]);

            $data = array(
                
                           
                            'ic_passport'=> $request -> input('ic_passport'),
                            
                            'matric_no'=>$request ->input('matric_no'),
                            'bank_name'=> $request -> input('bank_name'),
                            'bank_acc_holder'=> $request -> input('bank_accHolder'),
                            'acc_num'=> $request -> input('bank_accNum')
            );  
        
           
        User:: where('id',$user_id) -> update($data);

        
        
        return redirect('/createdProject')->with('info',"Project Update Successfully");

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
    public function updateProject($id)
    {
         $project = Project::find($id);
        
        return view('project.projectBackgroundEdit',['projects' => $project]);
    }

    public function editPB(Request $request, $id){
        $project= Project::find($id);
        
        if($request->hasFile('imgupload')){
    		$projectavatar = $request->file('imgupload');
            $filename = time() . '.' . $projectavatar->getClientOriginalExtension();
            Image::make($projectavatar)->resize(700, 400)->save( public_path('/upload/projectImage/' . $filename ) );
            
            $date=date_create($request->input('end_date'));
            $date_format=date_format($date,"Y/m/d");
            $date1=date_create($request->input('start_date'));
            $date_format1=date_format($date1,"Y/m/d");


            $data = array(
                
                'project_image'=> $filename,
                'project_name' => $request -> input('project_name'),
                'project_URL' => $request -> input('project_URL'),
                'website_URL' => $request -> input('web_URL'),
                'project_desc' => $request -> input('project_description'),
               'funding_start' => $date_format1,
                'funding_end_date' => $date_format,
                'fund_goal' => $request -> input('fund_goal'),  
                'video_URL' => $request -> input('video_URL'), 
                'project_story' => $request -> input('story'),
                'user_id' => auth()->user()->id,
            );  
        }

        else{
                $date=date_create($request->input('end_date'));
                $date_format=date_format($date,"Y/m/d");
                $date1=date_create($request->input('start_date'));
                $date_format1=date_format($date1,"Y/m/d");
                $data = array(

                    'project_name' => $request -> input('project_name'),
                    'project_URL' => $request -> input('project_URL'),
                    'website_URL' => $request -> input('web_URL'),
                    'project_desc' => $request -> input('project_description'),
                    'funding_start' => $date_format1,
                    'funding_end_date' => $date_format,
                    'fund_goal' => $request -> input('fund_goal'),  
                    'video_URL' => $request -> input('video_URL'), 
                    'project_story' => $request -> input('story'),
                    'user_id' => auth()->user()->id,
            );
        }
        Project:: where('id',$id) -> update($data);

        return redirect('/projectProfileEdit');

    }

    public function updateProjectP()
    {
        $user_id= auth()->user()->id;
        $user=User::find($user_id);
        
        return view('project.projectProfileEdit',['users' => $user]);
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
