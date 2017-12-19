@include('inc.header')

<div align="center">
    <h1>Edit Your Profile</h1>

</div><br>

<hr width="80%"><br>

<form enctype="multipart/form-data" method="POST" action="{{ url( '/edit',array($users->id)) }}">
{{csrf_field()}}
<div class="container " >
    <div class="container"  align="center" style="border:1px; solid-black;">
        
        <div class="col-md-8 col-md-offset-2 border:1px;" align="center">
            <div class="form-group " >
                <div class="col-md-3" style="padding:20px" >
                    <a href="#">
                        <img class="img-responsive" src="/studgogo/public/upload/avatars/{{ $users->profile_image }}" alt="" width="90" height="90" >
                    </a>
                </div>
       
                <div  class="col-md-8" align="left">             
                    <label for="profile_pic" class="control-label " align="left"><br>Profile Picture*</label> 
                    
                    <div class="controls">
                        <input name="profile_picture" type="file" id="profile_picture" style="padding-bottom:5px " >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">            
                    </div>
                    
                    <p><small>Note: Please put square photos (eg: 300px*300px)</small> </p>
                    
                </div>     
                        
            </div>
        </div>

    </div><br>

    <div class="container"  align="center">
        
        <div class="col-md-8 col-md-offset-2" align="center">
            <div class="form-group ">
                <label for="user_name" class="control-label col-lg-3" style="padding-left:50px"><br>Name*</label>			
                <div class="col-lg-9"  style="padding:18px"  >
                    <input class="control-label col-lg-9" id="user_name" type="text" class="form-control" name="user_name" value="<?php echo $users['name'] ?>">     
                </div>
            
            </div>
        </div>

    </div><br>

    <div class="container"  align="center">
        
        <div class="col-md-8 col-md-offset-2" align="center">
            <div class="form-group ">
                <label for="contact" class="control-label col-lg-3" style="padding-left:50px"><br>Contact Number*</label>			
                <div class="col-lg-9"  style="padding:18px"  >
                    <input class="control-label col-lg-9" id="contact" type="text" class="form-control" name="contact" value="<?php echo $users['phone_no'] ?>">     
                </div>
            
            </div>
        </div>

    </div><br>

    <div class="container"  align="center">
        
        <div class="col-md-8 col-md-offset-2" align="center">
            <div class="form-group ">
                <label for="email" class="control-label col-lg-3" style="padding-left:50px"><br>Email*</label>			
                <div class="col-lg-9"  style="padding:18px"  >
                    <input class="control-label col-lg-9" id="email" type="text" class="form-control" name="email" value="<?php echo $users['email'] ?>">     
                </div>
            
            </div>
        </div>

    </div><br>

    <div class="container"  align="center">
        
        <div class="col-md-8 col-md-offset-2" align="center">
            <div class="form-group ">
                <label for="user_location" class="control-label col-lg-3" style="padding-left:50px"><br>Location*</label>			
                <div class="col-lg-9"  style="padding:18px"  >
                    <input class="control-label col-lg-9" id="user_location" type="text" class="form-control" name="user_location" value="<?php echo $users['location_user'] ?>">     
                </div>
            
            </div>
        </div>

    </div><br>

    <div class="container"  align="center">
        
        <div class="col-md-8 col-md-offset-2" align="center">
            <div class="form-group ">
                <label for="web_URL" class="control-label col-lg-3" style="padding-left:50px"><br>Website URL*</label>			
                <div class="col-lg-9"  style="padding:18px"  >
                    <input class="control-label col-lg-9" id="web_URL" type="text" class="form-control" name="web_URL" value="<?php echo $users['userweb_url'] ?>">     
                </div>
            
            </div>
        </div>

    </div><br>

    <div class="container"  align="center">
        
        <div class="col-md-8 col-md-offset-2" align="center">
            <div class="form-group ">
                <label for="userBio" class="control-label col-lg-3" style="padding-left:50px"><br>Bio</label>			
                <div class="col-lg-7"  style="padding:10px; padding-left:0px"  >
                <textarea name="userBio" id="userBio" cols="51" rows="10" value="<?php echo $users['bio'] ?>"></textarea>     
                </div>
            
            </div>
        </div>

    </div><br>

    <div class="container" align="center">    
            
            <div class="col-md-5 col-md-offset-3" align="center">
                <button  class="btn btn-primary " type="submit">
                Save</button>
            </div>

            
    </div>




</div>
</form>


@include('inc.footer')