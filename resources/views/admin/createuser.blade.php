<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Create Publisher</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
                @include('errors')
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h3 class="text-center font-weight-light my-4">ADD USER</h3>
                                        <a href='admindashboard' role="button" class="btn-close" aria-label="close"></a>
                                        <input type="hidden" name="close">
                                    </div>
                                    <div class="card-body">
                                        <form action="{{('/addnewuser')}}" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" name="dept_name" id="dept" aria-label="select Department">
                                                            <option selected>Select Department</option>
                                                            @foreach ($depts as $dept)
                                                            <option value="{{$dept->dept_id}}">{{$dept->department_name}}</option>  
                                                            @endforeach
                                                          </select>
                                                          <span class="error-message">
                                                            @error('dept_name')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                            </div>
                                {{--        <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="first_name" placeholder="Enter your first name" required>
                                                        <label for="inputFirstName">Name</label>
                                                        <span class="error-message">
                                                            @error('first_name')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" name="last_name" placeholder="Enter your last name" required>
                                                        <label for="inputLastName">Last name</label>
                                                        <span class="error-message">
                                                            @error('last_name')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div> 
                                            </div>--}}
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="text" name="name" placeholder="Enter your Name" required>
                                                <label for="inputname">Name</label>
                                                <span class="error-message">
                                                    @error('name')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required>
                                                <label for="inputEmail">Email address</label>
                                                <span class="error-message">
                                                    @error('email')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputnumber" type="number" name="mobile_no" placeholder="Enter your Mobile number" required>
                                                <label for="inputnumber">Mobile Number</label>
                                                <span class="error-message">
                                                    @error('mobile_no')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                {{-- <div class="col-md-6"> --}}
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" name="user_role" id="dept" aria-label="select Department">
                                                            <option selected>Select User Role</option>
                                                            @foreach ($roles as $role)                                                            
                                                            <option value="{{$role->id}}">{{$role->role}}</option>                                                            
                                                            @endforeach
                                                          </select>
                                                          <span class="error-message">
                                                            @error('user_role')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                {{-- </div> --}}
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" required>
                                                        <label for="inputPassword">Password</label>
                                                        <span class="error-message">
                                                            @error('password')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder="Confirm password" required>
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                        <span class="error-message">
                                                            @error('password_confirmation')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">ADD</button>
                                                <button class="btn btn-primary" type="reset">CLEAR</button>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            <div id="layoutAuthentication_footer">
                {{-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; meghalaya.gov.in 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> --}}
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
