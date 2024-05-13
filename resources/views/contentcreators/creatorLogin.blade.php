<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | Content Creator</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="" style="background-image: url('assets/images/cclogin.jpg');overflow-x:hidden;">
        <div id="layoutAuthentication">
                <main>
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Content Creator Login</h3></div>
                                    <div class="card-body">
                                        @include('errors')
                                        <form action="{{('/creatorlogin')}}" method="POST">
                                            @csrf
                                            {{-- <div class="form-floating mb-3">
                                                <select class="form-select" name="dept_name" id="dept" aria-label="select Department">
                                                    <option selected>select Department</option>
                                                    @foreach ($depts as $dept)
                                                    <option value="{{$dept->dept_id}}">{{$dept->department_name}}</option>  
                                                    @endforeach
                                                  </select>
                                                  <span class="error-message">
                                                    @error('depat_name')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div> --}}
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                                <span class="error-message">
                                                    @error('email')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                                <span class="error-message">
                                                    @error('password')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            {{-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> --}}
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                {{-- <a class="small" href="password.html">Forgot Password?</a> --}}
                                                <button class="btn btn-primary" type="submit">Login</button>

                                            </div>
                                        </form>
                                    </div>
                                    {{-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="superadminregister">Need an account? Sign up!</a></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                </main>
                {{-- <div id="layoutAuthentication_footer">
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                                
                            </div>
                        </div>
                    </footer>
                </div> --}}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
