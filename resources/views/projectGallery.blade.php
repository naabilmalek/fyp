@include('inc.header')

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
                        <img class=" img-responsive"  src="/studgogo/public/upload/projectImage/{{ $project->project_image }}" >
                    </a>
                    <h3>
                        <a href="{{url('/projectView/' .$project->id)}}">{{ $project->project_name }}</a>
                    </h3>
                    <p>{{$project->project_desc}}</p>
                
            </div>  

            @endforeach
        </div>

        
        <hr>

       



@include('inc.footer')
