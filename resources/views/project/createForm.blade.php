@extends('inc.header')


<div class=" container" align="center"  >
    
        
    <div class="col-md-2 ">
        <a href="#" class="btn btn-default btn-block btn-create btn-create-active btn btn-primary ">
        <span class="glyphicon   glyphicon-ok-sign "></span> Basic</a>
    </div>

    <div class="col-md-2 ">
        <a href="#" class="btn btn-default btn-block btn-create btn-create-active btn btn-warning">
        <span class="glyphicon   glyphicon-ok-sign "></span> Basic</a>
    </div>

    <div class="col-md-2 ">
        <a href="#" class="btn btn-default btn-block btn-create btn-create-active btn btn-danger">
        <span class="glyphicon   glyphicon-ok-sign "></span> Basic</a>
    </div>

    <div class="col-md-2 ">
        <a href="#" class="btn btn-default btn-block btn-create btn-create-active btn btn-primary">
        <span class="glyphicon   glyphicon-ok-sign "></span> Basic</a>
    </div>

    <div class="col-md-2 ">
        <a href="#" class="btn btn-default btn-block btn-create btn-create-active btn btn-warning ">
        <span class="glyphicon   glyphicon-ok-sign "></span> Basic</a>
    </div>

    <div class="col-md-2">
        <a href="#" class="btn btn-default btn-block btn-create btn-create-active btn btn-success">
        </span> Preview</a>
    </div>

</div>

<div>
    <h1 align="center" ><br>Let's Start Your Project</h1><br>
</div>

<form>
<div class="container"  align="center">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:LightGray;">
        <div class="form-group ">
		    <label for="project_image" class="control-label col-lg-3" style="padding-left:50px"><br>Project Image*</label>			
		    <div class="col-lg-9"  style="padding:10px"  >
                <div class="col-lg-9" style="background-color:white;">
			    <div class="controls" style="padding:10px"   >
				    <div id="create-project-image-field" class="text-center" onclick="$('#project_image').focus().trigger('click');" style="padding:10px">
				        <span class="font-blue font-bold">Choose an image from your computer</span><br><br>

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
        <div class="form-group ">
		    <label for="project_name" class="control-label col-lg-3" style="padding-left:50px"><br>Project Name*</label>			
		    <div class="col-lg-9"  style="padding:18px"  >
                <input class="control-label col-lg-9" id="name" type="text" class="form-control" name="name" placeholder="Project Name">     
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
        <div class="form-group ">
		    <label for="project_URL" class="control-label col-lg-3" style="padding-left:50px"><br>Project URL*</label>			
		    <div class="col-lg-9"  style="padding:10px"  >
                <div class="controls input-group" style="padding:5px">
			        <span class="input-group-addon">https://www.studgogo.com/projects/</span>
				    <input style="padding:5px" class="control-label col-lg-6" id="project_URL" class="form-control required" maxlength="60" name="project_URL" type="text">
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
        <div class="form-group ">
            <label for="website_URL" class="control-label col-lg-3" style="padding-left:50px"><br>Website URL</label>			
                <div class="col-lg-9"  style="padding:18px"  >
                    <input class="control-label col-lg-9" id="web_URL" type="text" class="form-control" name="name" placeholder="Website URL">     
                    <button>Add More</button>
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
        <div class="form-group ">
		    <label for="project_desc" class="control-label col-lg-3" ><br>Project Description*</label>			
		    <div class="col-lg-9"  style="padding:18px"  >
                <textarea class="control-label col-lg-9" id="project_description" type="text" class="form-control" name="name" placeholder="Project Name" cols="50" rows="10">     
                </textarea>
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

</form>
   
    



@extends('inc.footer')

