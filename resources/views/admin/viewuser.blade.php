<div id="layoutAuthentication">
    <main>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Admin/Publisher Details</h3></div>
                        <div class="card-body">
                            @include('errors')
                            <table class="table">
                                <thead>
                                    {{-- <th>Sl No</th> --}}
                                    <th>Publisher Id</th>
                                    <th>Department</th>
                                    <th>Publisher Name</th>
                                    <th>Email</th>
                                    {{-- <th>password</th> --}}
                                    {{-- <th>Status</th> --}}
                                    <th>Operations</th>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($details as $dept)
                                    <tr>
                                        @if ($dept->role == 1)
                                        {{-- <td>{{$loop->index+1}}</td> --}}
                                        <td>{{$dept->id}}</td>
                                        <td>{{$dept->department_name}}</td>
                                        <td>{{$dept->name}}</td>
                                        <td>{{$dept->email}}</td>
                                        {{-- <td>{{$dept->role}}</td> --}}
                                        {{-- <td>{{$dept->password}}</td> --}}
                                        {{-- <td>
                                            @if($dept->status == 1)
                                                <form action="{{('/pendingpub/'.$dept->id)}}" method="POST" id="formactive">
                                                    {{ method_field('PUT') }}
                                                    {{ csrf_field() }}                    
                                                    <button type="submit" class="btn btn-outline-success" name="changeStatus" value="0" onclick="confirmActive(event);">Active</button>
                                                </form>                    
                                                @elseif ($dept->status == 0)
                                                <form action="{{('/activepub/'.$dept->id)}}" method="POST" id="formpending">
                                                    {{ method_field('PUT') }}
                                                    {{ csrf_field() }}                      
                                                    <button type="submit" class="btn  btn-outline-primary" name="changeStatus" value="1" onclick="confirmPending(event);">Pending</button>
                                                </form>
                                            @endif
                                        </td> --}}
                                        <td><a class="btn btn-warning" href="editpublisher/{{$id=$dept->id}}">Edit</a>
                                        <a class="btn btn-danger" href="deletepublisher/{{$id=$dept->id}}">Delete</a></td>
                                        @endif
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-center py-3">
                            <a href="adddepartmentadmin" class="btn btn-outline-primary">Create Publisher</a>
                        </div>
                    </div>
                </div>
            </div>
    </main>            
</div>
<script>
function confirmActive(e){
    e.preventDefault();
    var c = confirm('Are you sure ?');
    if(c){
        var form = document.getElementById('formactive');
        form.submit();
    }
}
function confirmPending(e){
    e.preventDefault();
    var c = confirm('Are you sure ?');
    if(c){
        var form = document.getElementById('formpending');
        form.submit();
    }
}
</script>
        

