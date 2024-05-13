<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title> View Department</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
<div id="layoutAuthentication_content">
    @include('errors')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="text-center font-weight-light my-4">Department Details</h3>
                            <a href='admindashboard' role="button" class="btn-close" aria-label="close"></a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    {{-- <th>SL No</th> --}}
                                    <th>Department id</th>
                                    <th>Department name</th>
                                    <th>Operations</th>
                                    {{-- <th>Operations</th> --}}
                                </thead>
                                <tbody>
                                    @foreach ($departments as $dept)
                                    <tr>
                                        {{-- <td>{{$loop->index+1}}</td> --}}
                                        <td>{{$dept->dept_id}}</td>
                                        <td>{{$dept->department_name}}</td>
                                        <td><a href="editdept/{{$id = $dept->dept_id}}" class="btn btn-success">Edit</a>
                                        <a href="deletedept/{{$id = $dept->dept_id}}" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete');">Delete</a></td>
                                    </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-center py-3">
                        <div class="col">
                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#addnewdepartment" data-whatever="@mdo">Add new</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<!--ADD NEW DEPARTMENT -->
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        @include('errors')
            <main>
                <div class="modal fade" id="addnewdepartment" tabindex="-1" role="dialog" aria-labelledby="newdepartment" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="newdepartment">Add Department</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                            <form action="{{'/adddepartment'}}" method="POST" id="formsubmit">
                                                @csrf
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputDeptName" type="text" name="department_name" placeholder="Health Department" value="" />
                                                    {{-- {{$department->department_name}} --}}
                                                    <label for="inputDeptName">Department Name</label>
                                                    <span class="error-message">
                                                        @error('department_name')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                {{-- <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                    <textarea class="form-control" name="about_dept" id="" cols="30" rows="10"></textarea>
                                                    <label for="inputPassword">About</label>
                                                </div> --}}
                                                
                                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <button class="btn btn-primary" type="submit">ADD</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer"></div>
    </div>
        <script>
            function confirmation(e){
                e.preventDefault();
                var c = confirm('Are you sure ?');
                if(c){
                    var form = document.getElementById('formsubmit');
                    form.submit();
                }
            }
        </script> 
<!-- END ADD NEW DEPARTMENT-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>