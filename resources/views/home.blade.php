@include ('inc.header')
    
     <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><b>Welcome to StudGogo!</b></h1>
        <p><b>A crowdfunding platform for student
        </b></p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List of Project
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        @foreach($project as $project)
        <div class="row">
        
        
           

            
             <div class="col-md-4" >
                
                <a href="{{url('/projectView/' .$project->id)}}">
                        <img class=" img-responsive" href="{{url('/projectView/' .$project->id)}}" src="/studgogo/public/upload/projectImage/{{ $project->project_image }}" >
                    </a>
                    <h3>
                        <a href="{{url('/projectView/' .$project->id)}}">{{ $project->project_name }}</a>
                    </h3>
                    <p>{{$project->project_desc}}</p>
                
            </div>   

            
            
            @endforeach
        </div>
        <!-- /.row -->


        <!-- Pagination -->
        <!-- <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- /.row -->

        <hr>

@include('inc.footer')
