@include('inc.header')

@if(count($users) > 0)
    @foreach($users->all() as $user)
<div class="container">
    <h1 align="center">My Profile </h1>
    
</div>

<hr width="80%">


<div class="container">    
    
    <div class="container col-md-10">   
        <div class="row">
            <div class="container col-md-4 col-md-offset-2">
                <img src="/studgogo/public/upload/avatars/{{ $user->profile_image }}"  class="img" style="width:300px; height:300px; float:left; border-radius:50%; margin-right:25px;"></img>
            </div>

            <div class="container col-md-6 " >
                <div class="col-md-12">
                
                        @if($user->name ==  Auth::user()->name )
                        <div class="container col-md-12" style="background-color:LightGray">
                            <h2>
                                {{ ucwords($user->name) }}
                            </h2>
                        </div>
                        <hr  >
                        
                        <div class="container col-md-12 " style="background-color:LightGray">
                            <ul class="container details">
                                <li><p style="width:20%; background-color:LightGray;" ><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>
                                @if(empty($user->phone_no))
                                    Not Available
                                @else
                                    {{$user->phone_no}}
                                @endif
                                </p></li>
                                <li><p style="width:20%; background-color:LightGray; " value="<?php echo $user->email; ?>"><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>
                                @if(empty($user->email))
                                    Not Available
                                @else
                                    {{$user->email}}
                                @endif
                                </p></li>
                                <li><p style="width:20%; background-color:LightGray;" ><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>
                                @if(empty($user->location_user))
                                    Not Available
                                @else
                                    {{$user->location_user}}
                                @endif                                
                                </p></li>
                                <li><p style="width:30%; background-color:LightGray;" ><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="{{$user->userweb_url}}" >
                                @if(empty($user->userweb_url))
                                    Not Available
                                @else
                                    {{$user->userweb_url}}
                                @endif                                 
                                </p></a></li>
                                <li><p style="width:20%; background-color:LightGray;"><span class="glyphicon glyphicon-info-sign" style="width:50px;"></span> Bio</p>
                                <textarea name="bio" id="bio" cols="50" rows="10" align="left" disabled style="" >@if(!empty($user->user_bio)){{$user->user_bio}}
                                @else
                                Not Available
                                @endif                                
                                </textarea>
                                </li>
                            </ul>
                        </div>  
                        @endif
                    
                </div>
            </div>
        </div>
    </div>
</div><br>

<div class="container" align="center">    
            
            <div class="col-md-4 col-md-offset-4" align="center">
                <a href='{{url("/editProfile/{$user->id}")}}' class="btn btn-primary " type="button">
                Edit Profile</a>
            </div>

            
 </div>
    @endforeach
 @endif  

@include('inc.footer')