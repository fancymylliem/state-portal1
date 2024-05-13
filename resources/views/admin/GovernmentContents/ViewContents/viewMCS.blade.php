<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">MCS List</h3></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>MCS Name</th>
                                        <th>Position</th>
                                        <th>present Post</th>
                                        <th>Operations</th>
                                        {{-- <th>Joining</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mcs as $data)
                                    <tr>
                                        <td>{{$data->mcs_id}}</td>
                                        <td>{{$data->mcs_name}}</td>
                                        <td>{{$data->position}}</td>
                                        <td>{{$data->present_post}}</td>
                                        <td><a class="btn btn-warning" href="editmcs/{{$id=$data->mcs_id}}">Edit</a>
                                        <a class="btn btn-danger" href="deletemcs/{{$id=$data->mcs_id}}">Delete</a></td>
                                        {{-- <td>{{$data->joining}}</td> --}}
                                    </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a class="btn btn-outline-primary" href="addnewmcs">Add New</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>      
            