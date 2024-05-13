<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">IAS List</h3></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>IAS Name</th>
                                        <th>Position</th>
                                        <th>present Post</th>
                                        <th>Operation</th>
                                        {{-- <th>Joining</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ias as $data)
                                    <tr>
                                        <td>{{$data->ias_id}}</td>
                                        <td>{{$data->ias_name}}</td>
                                        <td>{{$data->position}}</td>
                                        <td>{{$data->present_post}}</td>
                                        <td>
                                            <a class="btn btn-warning" href="editias/{{$id=$data->ias_id}}">Edit</a>
                                            <a class="btn btn-danger" href="deleteias/{{$id=$data->ias_id}}">Delete</a>
                                        </td>
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
</div>
                
                