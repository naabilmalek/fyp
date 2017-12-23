
@include('inc.header')


<div>
        <h1 align="center" ><br>{{$projects->project_name}}</h1>
</div><br>

<div class="container" style="background-color:LightGray;">
    <div class="col-md-8" style="padding:20px">
        <a href="#">
            <img class="img-responsive" src="/studgogo/public/upload/projectImage/{{ $projects->project_image }}" style="height:100%">
        </a>
    </div>

    <div class="col-md-4">
        <div class="project-page-funding-box font-grey">

            <div><br>Project By :</div>
            <div style="font-size:25px">{{$projects->user_id}}</div>

            <div style="padding-top:15px; padding-bottom:15px" >
                <div style="font-size:20px">
                <span class="glyphicon glyphicon-time font-blue font-normal"></span> 37 
                <span class="project-page-funding-box-small-font"> days to go</span></div>
            </div>

            <div class="col-md-1" style="font-size:25px; padding:0px">67 </div>
          
            <div class="col-md-11"style="padding-top:11px; padding-left:0px; padding-bottom:10px">Supporters </div><br>

            
            <div style="padding-bottom:10px">Fund Progress: </div>
            <div  align="center" style="font-size:25px; padding:0px">RM17,000 </div>
            <div  align="center" >Supported of RM35,000</div>
            
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                50%</div>  
            </div>
            

	    </div>
	    	
        
			<div class="project-page-fund-period">
			    <a class="btn btn-primary btn-lg btn-block" onclick="fbq('track', 'AddToCart');" style="margin-top: 15px" href="https://www.mystartr.com/projects/wuxiantwotaipei/pledge">SUPPORT NOW</a>
			    
                <small style="display:none" class="font-blue project-page-funding-box-small-font font-normal">Started on 11/11/2017 12:00 am &amp; will close on 10/01/2018 11:59PM</small>
            </div>
                    

            <div ><br>Funding Period: </div>
                <div align="center" style="padding-bottom:20px;">11/11/2017 - 10/01/2018</div>
            </div>
          
        </div><br><br>
        
        
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Project Details</a></li>
                <li><a data-toggle="tab" href="#menu1">About the Creator</a></li>
                <li><a data-toggle="tab" href="#menu2">Updates</a></li>
                <li><a data-toggle="tab" href="#menu3">Funders</a></li>
                <li><a data-toggle="tab" href="#menu4">Comments</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <h3>Menu 4</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    
                </div>
            </div>
        </div>
    </div>

</div>

@include('inc.footer')