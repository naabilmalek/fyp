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
        <h1 align="center" ><br>Get ready to receive pledges!</h1><br>
    </div>

    <form>

        <div class="container"  align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="background-color:LightGray;">
                <div class="form-group ">
                    <label for="author_email" class="control-label col-lg-3" style="padding-left:50px"><br>Email Address*</label>			
                    <div class="col-lg-9"  style="padding:18px"  >
                        <input class="control-label col-lg-9" id="author_email" type="text" class="form-control" name="author_email">     
                    </div>

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
                    <label for="contact_num" class="control-label col-lg-3" style="padding-left:50px"><br>Contact Number*</label>			
                    <div class="col-lg-9"  style="padding:18px"  >
                        <input class="control-label col-lg-9" id="contact_num" type="text" class="form-control" name="contact_num">     
                    </div>
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
                        <input class="control-label col-lg-9" id="bank_name" type="text" class="form-control" name="bank_name">     
                    </div>
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
                        <input class="control-label col-lg-9" id="bank_accHolder" type="text" class="form-control" name="bank_accHolder">     
                    </div>
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
                        <input class="control-label col-lg-9" id="bank_accNum" type="text" class="form-control" name="bank_accNum">     
                    </div>
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





@include('inc.footer')