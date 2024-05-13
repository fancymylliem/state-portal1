<div id="layoutAuthentication">
    @include('errors')
    <main>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Council Of Ministers</h3></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Image</th>
                                        <th>Minister Name</th>
                                        <th>Party</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($com as $det)
                                    <tr>
                                        <td>{{$det->minister_id}}</td>
                                        <td>{{$det->image}}</td>
                                        <td>{{$det->minister_name}}</td>
                                        <td>{{$det->party}}</td>
                                        <td><a href="viewcomdetails/{{$id=$det->minister_id}}" class="btn btn-success">View</a>
                                        <a href="deletecom/{{$id=$det->minister_id}}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a class="btn btn-outline-primary" href="addnewcom">Add New</a></div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</div>
                
                