<!-- @include('inc.header')

<div class="container">
<div class="row" align="center">
      
        <div class="col-md-6">
            <h2 class:"text-center">Sign In</h2>
            <div class="form-group">
                <label for="exampleInputEmail1" class="col-lg-2 control-label" align="left">Email</label>
                <div align="left" style="padding: 10px">
                    <input type="email" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>

                <label for="exampleInputPassword1" control label" align="left" class="col-lg-2 control-label">Password</label>
                <div align="left" style="padding: 10px">
                   <input type="Password"  class="form-control" placeholder="Password"></input>
                        
                </div>

                <div align="left" style="padding: 10px">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <a href="{{ url('/') }} " class="btn btn-primary">Back</a>
                </div>
            </div> 
            
        </div>

        <div class="col-md-6">
            <h2 class:"text-center">Sign Up</h2>
            <div class="form-group">
                <label align  >Full Name</label>
                <div align="left" style="padding: 10px">
                    <input type="name" name="name" class="form-control" id="inputname"  placeholder="Full Name">
                        
                </div>

                <label  control label" align="left" class="col-lg-2 control-label" align="left">Email</label>
                <div align="left" style="padding: 10px">
                   <input type="email"  class="form-control" placeholder="Email"></input>
                </div>

                <div align="left" style="padding: 10px">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <a href="{{ url('/') }} " class="btn btn-primary">Back</a>
                </div>
            </div> 
        </div>

        
            

                
</div>
</div>

@include('inc.footer') -->