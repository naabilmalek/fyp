<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>StudGogo-Crowdfunding Platform for Student</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.css')}}" type="text/css" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="{{url('css/3-col-portfolio.css')}}" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script type="text/js" src="{{url('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/js" src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- scripts for datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
                    $( function() {
                        $( "#end_date" ).datepicker();
                    } );

                    $( function() {
                        $( "#start_date" ).datepicker();
                    } );
    </script>

    <!-- scripts for comments -->

    
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

    <!-- <script>
        function othername() {
            var input = document.getElementById("project_name").value;
            alert(input);
        }
    </script> -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"  >Studgogo</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/openGallery') }}">Discover A Project</a>
                    </li>
                    <li>
                        <a href="{{url('/createProject')}}">Create A Project</a>
                    </li>
                    <li>
                        <a href="#">How It Works</a>
                    </li>
                </ul>
                
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                        <img src="/studgogo/public/upload/avatars/{{ Auth::user()->profile_image }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                                <a href="{{ url('/userProfile') }}">
                                    Profile
                                </a>

                                <a href="{{url('/editProfile/'.Auth::user()->id)}}"  >
                                    Edit Profile
                                </a>

                                <a href="{{ url('/createdProject') }}">
                                    Created Project
                                </a>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    