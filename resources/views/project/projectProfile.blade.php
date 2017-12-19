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
    <h1 align="center" ><br>Tell Us About Yourself</h1><br>
</div>

<form method="POST" action="{{url('/useradd')}}">

    {{ csrf_field() }}
    <div class="container"  align="center">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-color:LightGray;">
            <div class="form-group ">
                <div class="col-md-3" style="padding:20px">
                    <a href="#">
                        <img class="img-responsive" src="" alt="" width="90" height="90" >
                    </a>
                </div>
                
                

                <div  class="col-md-8" align="left">             
                    <label for="profile_pic" class="control-label " align="left"><br>Profile Picture*</label> 
                    
                    <div class="controls">
                        <input name="profile_picture" type="file" id="profile_picture" style="padding-bottom:5px ">            
                    </div>
                    
                    <p><small>Note: Please put square photos (eg: 300px*300px)</small> </p>
                    
                </div>     
                        
            </div>
        </div>
        
    </div><br>

    <div class="container"  align="center">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-color:LightGray;">
            <div class="form-group ">
		        <label for="author_name" class="control-label col-lg-3" style="padding-left:50px"><br>Author's Name*</label>			
		        <div class="col-lg-9"  style="padding:18px"  >
                    <input class="control-label col-lg-9" id="author_name" type="text" class="form-control" name="author_name" >     
                </div>
                
            </div>
        </div>
        <div class="col-md-2"></div>
    </div><br>

    <div class="container"  align="center">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-color:LightGray;">
            <div class="form-group ">
                <label for="user_biography" class="control-label col-lg-3" ><br>Biography*</label>			
                <div class="col-lg-9"  style="padding:18px"  >
                    <textarea class="control-label col-lg-9" id="user_biography" type="text" class="form-control" name="user_biography" cols="50" rows="10">     
                    </textarea>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-7" align="left">
                        <p><small>Note: Describe yourself. Tell the world about yourself!</small> </p>
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
		        <label for="ic_passport" class="control-label col-lg-3" style="padding-left:50px"><br>IC or Passport Number*</label>			
		        <div class="col-lg-9"  style="padding:25px"  >
                    <input class="control-label col-lg-9" id="ic_passport" type="text" class="form-control" name="ic_passport">     
                </div>
                
            </div>
        </div>
        <div class="col-md-2"></div>
    </div><br>

    <div class="container"  align="center">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-color:LightGray;">
            <div class="form-group ">
		        <label for="location_user" class="control-label col-lg-3" style="padding-left:50px"><br>Location*</label>			
		        <div class="col-lg-9"  style="padding:25px"  >
                    <input class="control-label col-lg-9" id="location_user" type="text" class="form-control" name="location_user" >     
                </div>
                
            </div>
        </div>
        <div class="col-md-2"></div>
    </div><br>

    <div class="container"  align="center">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-color:LightGray;">
            <div class="form-group ">
		        <label for="website_user" class="control-label col-lg-3" style="padding-left:50px"><br>Website URL</label>			
		        <div class="col-lg-9"  style="padding:18px"  >
                    <input class="control-label col-lg-9" id="website_user" type="text" class="form-control" name="website_user" >     
                </div>

                <div class="col-md-3"></div>
                <div class="col-md-7" align="left">
                        <p><small>Note: Provide your resume link or website about you.</small> </p>
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
            <button  class="btn btn-primary" type="submit">
            Next</button>
        </div>
        <div class="col-md-2"></div>
    </div>

</form>
               



@include('inc.footer')
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                