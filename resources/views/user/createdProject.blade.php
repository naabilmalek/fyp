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
            <thead>
                <tr>
                    <th></th>
                    <th width="300">Project Name</th>
                    <th>Status</th>
                    <th>Project Ends</th>
                    <th>Created Date &amp; Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>
                        <a href="https://www.mystartr.com/projects/gg1"><img src="//www.mystartr.com/images/17825/17825_1512161309_canselor-125x92.JPG" width="100%"></a>
                    </td>
                    <td>t</td>
                    <td>Draft</td>
                    <td>03/12/2017</td>
                    <td>02/12/2017 04:48 am</td>
                    <td>
                        <div class="table_action list-group">
                            <div>
                                <a href="https://www.mystartr.com/project?step=basic&amp;pid=1860">
                                <span class="glyphicon glyphicon-edit"></span> Edit</a>
                            </div>
                            <div>           
                                <a href="https://www.mystartr.com/projects/gg1/updates/list">
                                <span class="glyphicon glyphicon-list"></span> Updates</a>
                            </div> 
                            <div>    
                                <a href="https://www.mystartr.com/project/pledge-list-report/1860" target="_blank">
                                <span class="glyphicon glyphicon-edit"></span> Download supporters list</a>
                            </div>
                        </div>
                    </td>
                </tr>
                    
            </tbody>
        </table>
    </div>

</div>

@include('inc.footer')