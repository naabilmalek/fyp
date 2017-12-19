@extends('inc.header')

<div class=" container" align="center"  >
    <div class="col-md-1 ">  </div> 
        <div class="col-md-2 ">
            <a href="{{ url('/projectBackground') }}" class="btn btn-default btn-block btn-create btn-create-active btn btn-primary ">
            <span class="glyphicon   glyphicon-ok-sign "></span> Basic</a>
        </div>

        <div class="col-md-2 ">
            <a href="{{ url ('/projectStory') }}" class="btn btn-default btn-block btn-create btn-create-active btn btn-danger">
            <span class="glyphicon   glyphicon-ok-sign "></span> Story</a>
        </div>

        <div class="col-md-2 ">
            <a href="{{ url('/projectProfile') }}" class="btn btn-default btn-block btn-create btn-create-active btn btn-primary">
            <span class="glyphicon   glyphicon-ok-sign "></span> About You</a>
        </div>

        <div class="col-md-2 ">
            <a href="{{url('/projectAccount')}}" class="btn btn-default btn-block btn-create btn-create-active btn btn-warning ">
            <span class="glyphicon   glyphicon-ok-sign "></span> Account</a>
        </div>

        <div class="col-md-2">
            <a href="#" class="btn btn-default btn-block btn-create btn-create-active btn btn-success">
            </span> Preview</a>
        </div>
    <div class="col-md-1 ">  </div> 

</div> 

<div>
    <h1 align="center" ><br>Tell Us the Story Behind Your Project</h1><br>
</div>

<form>
<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group ">
		    <label for="video_URL" class="control-label col-lg-3" style="padding-left:50px"><br>Video URL</label>			
		    <div class="col-lg-9"  style="padding:18px"  >
                <input class="control-label col-lg-9" id="video_URL" type="text" class="form-control" name="video_URL">     
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
                    <textarea class="control-label col-lg-9" id="story" type="text" class="form-control" name="story" cols="50" rows="10">     
                    </textarea>
                </div>
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
    <div class="col-md-2"></div>
    <div class="col-md-4" align="right">
        <button href="#" class="btn btn-primary " type="">
        Save as Draft</button>
    </div>

    <div class="col-md-4" align="left">
        <button href="#" class="btn btn-primary" type="submit">
        Next</button>
    </div>
    <div class="col-md-2"></div>
</div>

</form>
   
    



@extends('inc.footer')

