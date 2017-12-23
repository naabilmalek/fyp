@include('inc.header')


<div class="container">
    <div>
        <h2>List of Created Projects</h2>
 
    </div>

    <hr>
</div>


<div class="container">

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
        @if(count($projects)>0)
            <thead>
            
                <tr>
                    <th>ID No</th>
                    <th>Project Image</th>
                    <th width="300">Project Name</th>
                    <th>Status</th>
                    <th>Project Ends</th>
                    <th>Created Date &amp; Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($projects as $project)
                <tr>
                    <td>
                        {{$project->id}}
                    </td>
                    <td>
                        <a href=""><img src="/studgogo/public/upload/projectImage/{{ $project->project_image }}" width="320" height="180" ></a>
                    </td>
                    <td>{{$project->project_name}}</td>
                    <td>Draft</td>
                    <td>{{date('d-M-Y', strtotime($project->funding_end_date))}}</td>
                    <td>{{$project->created_at->timezone('Asia/Kuala_Lumpur')->format('d-M-Y & H:i')}}
                            
                    </td>
                    <td>
                        <div class="table_action list-group">
                            <div>
                                <a href='{{url("/editProfile/{$project->id}")}}'>
                                <span class="glyphicon glyphicon-edit"></span> Edit</a>
                            </div>
                            <div>           
                                <a href="">
                                <span class="glyphicon glyphicon-list"></span> Updates</a>
                            </div> 
                            <div>    
                                <a href="" target="_blank">
                                <span class="glyphicon glyphicon-edit"></span> Download supporters list</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach       
            </tbody>
        @else
            <p><strong>You have not created any projects yet</strong></p>
        @endif
        </table>
    </div>

</div>



@include('inc.footer')