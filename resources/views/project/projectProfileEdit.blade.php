@extends('inc.header')



<div class=" container" align="center"  >
    <div class="col-md-3 ">  </div> 
        <div class="col-md-2 ">
            <a href="{{ url('/projectBackground') }}" class="btn btn-default btn-block btn-create btn-create-active btn btn-primary ">
            <span class="glyphicon   glyphicon-ok-sign "></span> Basic</a>
        </div>

        <div class="col-md-2 ">
            <a href="{{ url('/projectProfile') }}" class="btn btn-default btn-block btn-create btn-create-active btn btn-danger">
            <span class="glyphicon   glyphicon-ok-sign "></span> About You</a>
        </div>

        
        <div class="col-md-2">
            <a href="#" class="btn btn-default btn-block btn-create btn-create-active btn btn-success">
            </span> Preview</a>
        </div>
    <div class="col-md-3 ">  </div> 

</div> 

<div>
    <h1 align="center" ><br>Tell Us About Yourself</h1><br>
</div>

<form enctype="multipart/form-data" method="POST" action="{{ url('/addProjectCreator') }}">

    {{ csrf_field() }}
   
    <div class="container"  align="center">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-color:LightGray;">
            <div class="form-group ">
		        <label for="ic_passport" class="control-label col-lg-3" style="padding-left:50px"><br>IC or Passport Number*</label>			
		        <div class="col-lg-9"  style="padding:25px"  >
                    <input class="control-label col-lg-9" id="ic_passport" type="text" class="form-control" name="ic_passport" value="<?php echo $users->ic_passport ?>">     
                </div>
                @if ($errors->has('ic_passport'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ic_passport') }}</strong>
                                    </span>
                    @endif               
            </div>
        </div>
        <div class="col-md-2"></div>
    </div><br>

    
    
    <div class="container"  align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="background-color:LightGray;">
                <div class="form-group ">
                    <label for="author_email" class="control-label col-lg-3" style="padding-left:50px"><br>Matric No*</label>			
                    <div class="col-lg-9"  style="padding:18px"  >
                        <input class="control-label col-lg-9" id="matric_no" type="text" class="form-control" name="matric_no" value="<?php echo $users->matric_no ?>">     
                    </div>
                    @if ($errors->has('matric_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('matric_no') }}</strong>
                                    </span>
                    @endif 
                    <div class="col-md-3"></div>
                    <div class="col-md-7" align="left">
                            <p><small>Note: This Email need to verify before you can create the project.</small> </p>
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
                    <label for="bank_name" class="control-label col-lg-3" style="padding-left:50px"><br>Bank Name*</label>			
                    <div class="col-lg-9"  style="padding:18px"  >
                        <input class="control-label col-lg-9" id="bank_name" type="text" class="form-control" name="bank_name" value="<?php echo $users->bank_name ?>">     
                    </div>
                    @if ($errors->has('bank_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank_name') }}</strong>
                                    </span>
                    @endif 
                </div>
            </div>
            <div class="col-md-2"></div>
        </div><br>

        <div class="container"  align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="background-color:LightGray;">
                <div class="form-group ">
                    <label for="bank_accHolder" class="control-label col-lg-3" style="padding-bottom:20px" ><br>Bank Account Name*</label>			
                    <div class="col-lg-9"  style="padding:18px"  >
                        <input class="control-label col-lg-9" id="bank_accHolder" type="text" class="form-control" name="bank_accHolder"  value="<?php echo $users->bank_acc_holder ?>" >     
                    </div>

                    @if ($errors->has('bank_accHolder'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank_accHolder') }}</strong>
                                    </span>
                    @endif 
                </div>
            </div>
            <div class="col-md-2"></div>
        </div><br>

        <div class="container"  align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="background-color:LightGray;">
                <div class="form-group ">
                    <label for="bank_accNum" class="control-label col-lg-3" style="padding-bottom:20px" ><br>Bank Account Number*</label>			
                    <div class="col-lg-9"  style="padding:18px"  >
                        <input class="control-label col-lg-9" id="bank_accNum" type="text" class="form-control" name="bank_accNum" value="<?php echo $users->acc_num ?>">     
                    </div>

                    @if ($errors->has('bank_accNum'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank_accNum') }}</strong>
                                    </span>
                    @endif 
                </div>
            </div>
            <div class="col-md-2"></div>
        </div><br>
                
    <div class="container" align="center">    
        

        <div class="col-md-4 col-md-offset-4" align="center" >
            <button href="{{url('/createdProject')}}" class="btn btn-primary" type="submit" width="30%">
            Done!</button>
        </div>
        <div class="col-md-2"></div>
    </div>

</form>
               


@include('inc.footer')
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                