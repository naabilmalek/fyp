@extends('inc.header')


<div class=" container" align="center"  >
    <div class="col-md-4 ">  </div> 
        <div class="col-md-2 ">
            <a href="{{ url('/projectBackground') }}" class="btn btn-default btn-block btn-create btn-create-active btn btn-primary ">
            <span class="glyphicon   glyphicon-ok-sign "></span> Basic</a>
        </div>

        <div class="col-md-2 ">
            <a href="{{ url('/projectProfile') }}" class="btn btn-default btn-block btn-create btn-create-active btn btn-danger">
            <span class="glyphicon   glyphicon-ok-sign "></span> About You</a>
        </div>

        
        
    <div class="col-md-4 ">  </div> 

</div> 

<div>
    <h1 align="center" ><br>Let's Start Your Project</h1><br>
</div>


<form enctype="multipart/form-data" method="POST" action="{{ url('/editProjectBackground/'.$projects->id) }}" >
{{csrf_field()}}
<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group{{ $errors->has('imgupload') ? ' has-error' : '' }}">
		    <label for="project_image" class="control-label col-lg-3" style="padding-left:50px"><br>Project Image*</label>			
		    <div class="col-lg-9"  style="padding:10px"  >
                <div class="col-lg-9" style="background-color:white;">
			    <div class="controls" style="padding:10px"   >
				    <div id="create-project-image-field" class="text-center"  style="padding:10px">
                        <input type="file" id="imgupload" name="imgupload"style="display:none">
                       
                        <a id ="upload_image"  onclick="$('#upload_image').click(function(){ $('#imgupload').trigger('click');abort(); });" class="font-blue font-bold"><b>Choose an image from your computer
                        </b></a></input>
                        @if ($errors->has('imgupload'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imgupload') }}</strong>
                                    </span>
                                @endif
                        <br><br>

								This image will be displayed in our project listing page <br>
								or mini project view. <br>
								File dimensions: 700px (wide) by 431px (high). <br>
								Accepted file formats : JPG, PNG or GIF.<br>
								Enhancement request: 4:3 ratio, 800 x 600
				    </div>
	            </div>
                </div>
            </div>
            <div class="col-md-3"></div>
		    <div class="col-md-6" align="left">
                    <p><small> Note: Choose picture that is going to represent your project.</small> </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>

<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">
		    <label for="project_name" class="control-label col-lg-3" style="padding-left:50px"><br>Project Name*</label>			
		    <div class="col-lg-9"  style="padding:18px"  >
                <input class="control-label col-lg-9" id="project_name" type="text" class="form-control" name="project_name" value="<?php echo $projects->project_name ?>">     
                @if ($errors->has('project_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_name') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="col-md-3"></div>
		    <div class="col-md-6" align="left">
                    <p><small>Note: Choose a catchy name for your project.</small> </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>

<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group{{ $errors->has('project_URL') ? ' has-error' : '' }}">
		    <label for="project_URL" class="control-label col-lg-3" style="padding-left:50px"><br>Project URL*</label>			
		    <div class="col-lg-9"  style="padding:10px"  >
                <div class="controls input-group" style="padding:5px">
			        <span class="input-group-addon">https://www.studgogo.com/projects/</span>
				    <input style="padding:5px" class="control-label col-lg-6" id="project_URL" class="form-control required" maxlength="60" name="project_URL" type="text"
                    value="<?php echo $projects->project_URL ?>">
                    @if ($errors->has('project_URL'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_URL') }}</strong>
                                    </span>
                                @endif
                </div>     
            </div>
            <div class="col-md-3"></div>
		    <div class="col-md-6" align="left">
                    <p><small>Note: Make it Simple!</small> </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>

<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group{{ $errors->has('web_URL') ? ' has-error' : '' }}">
            <label for="website_URL" class="control-label col-lg-3" style="padding-left:50px"><br>Website URL</label>			
                <div class="col-lg-9"  style="padding:18px"  >
                    <input class="control-label col-lg-9" id="web_URL" type="text" class="form-control" name="web_URL" value="<?php echo $projects->website_URL ?>">     
                    @if ($errors->has('web_URL'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('web_URL') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6" align="left">
                    <p><small>Note: Other website that you use to promote your project. </small> </p>
                </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>

<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group{{ $errors->has('project_description') ? ' has-error' : '' }}">
		    <label for="project_desc" class="control-label col-lg-3" ><br>Project Description*</label>			
		    <div class="col-lg-9"  style="padding:18px"  >
                <textarea class="control-label col-lg-9" id="project_description" type="text" class="form-control" name="project_description"  cols="50" rows="10"
                value="<?php echo $projects->project_desc ?>" >     
                </textarea>
                @if ($errors->has('project_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_description') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="col-md-3"></div>
		    <div class="col-md-7" align="left">
                    <p><small>Note: Describe your project. Make your Funders understand what are they going to fund. Make it as clear as possible</small> </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>


<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
            
		    <label for="end_date" class="control-label col-lg-3" ><br>Funding Start Date</label>			
		    <div class="col-lg-9"  style="padding:18px"  > 
                <input class="control-label col-lg-6" id="start_date" type="text" class="form-control" name="start_date" readonly="readonly" >
                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                <div class="col-lg-2">
                    <span class="glyphicon glyphicon-calendar " style="padding:4px" name="date"></span></input>
                </div> 
            </div>
            <div class="col-md-3"></div>
		    <div class="col-md-7" align="left">
                    <p><small>Note: Describe your project. Make your Funders understand what are they going to fund. Make it as clear as possible</small> </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>

<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
            
		    <label for="end_date" class="control-label col-lg-3" ><br>Funding End Date</label>			
		    <div class="col-lg-9"  style="padding:18px"  > 
                <input class="control-label col-lg-6" id="end_date" type="text" class="form-control" name="end_date" readonly="readonly" 
                value="<?php echo $projects->funding_end_date?>" >
                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                <div class="col-lg-2">
                    <span class="glyphicon glyphicon-calendar " style="padding:4px" name="date"></span></input>
                </div> 
            </div>
            <div class="col-md-3"></div>
		    <div class="col-md-7" align="left">
                    <p><small>Note: Describe your project. Make your Funders understand what are they going to fund. Make it as clear as possible</small> </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>

<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group{{ $errors->has('fund_goal') ? ' has-error' : '' }}">
            
		    <label for="fund_goal" class="control-label col-lg-3" ><br>Funding Goal</label>			
		    <div class="col-lg-9"  style="padding:18px"  >
                <div class="controls input-group" style="padding:5px">    
                    <span class="input-group-addon">RM</span> 
                    <input class="control-label col-lg-9" id="fund_goal" type="text" class="form-control" name="fund_goal" value="<?php echo $projects->fund_goal ?>"> 
                    
                </div>
                @if ($errors->has('fund_goal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fund_goal') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="col-md-3"></div>
		    <div class="col-md-7" align="left">
                    <p><small>Note: Describe your project. Make your Funders understand what are they going to fund. Make it as clear as possible</small> </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>

<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group ">
		    <label for="video_URL" class="control-label col-lg-3" style="padding-left:50px"><br>Video URL</label>			
		    <div class="col-lg-9"  style="padding:18px"  >
                <input class="control-label col-lg-9" id="video_URL" type="text" class="form-control" name="video_URL" value="<?php echo $projects->video_URL ?>">     
            </div>
            <div class="col-md-3"></div>
		    <div class="col-md-6" align="left">
                    <p><small>Note: Put your video that you created to help the funders to understand more about your project.</small> </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>


<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group ">
            <label for="story" class="control-label col-lg-3"><br>Project Background Story*</label>			
                <div class="col-lg-9"  style="padding:18px"  >
                    <textarea class="control-label col-lg-9" id="story" type="text" class="form-control" name="story" cols="50" rows="10"
                    value="<?php echo $projects->project_story ?>">     
                    </textarea>
                </div>

                @if ($errors->has('story'))
                                    <span class="help-block ">
                                        <strong>{{ $errors->first('story') }}</strong>
                                    </span>
                @endif
                <div class="col-md-3"></div>
                <div class="col-md-6" align="left">
                    <p><small>Note: The story behind this project. What motivates you to do this project? Why are you decide to do this project? </small> </p>
                </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div><br>

<div class="container" align="center">    
        

        <div class="col-md-4 col-md-offset-4" align="center" >
            <button  class="btn btn-primary" type="submit" width="30%">
            Next</button>
        </div>
        <div class="col-md-2"></div>
    </div>

</form>
   
    



@extends('inc.footer')

