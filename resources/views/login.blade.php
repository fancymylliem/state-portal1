<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="{{ url('style/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="" style="background-image: url('assets/images/cclogin.jpg');overflow-x:hidden;">
<div id="layoutAuthentication">
    <main>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                    <div class="card-body">
                        @include('errors')
                        <form id="loginForm" action="{{('/getdashboard') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                <label for="inputEmail">Email address</label>
                                <span class="error-message">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                <label for="inputPassword">Password</label>
                                <span class="error-message">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="role" id="role" aria-label="select Department">
                                    <option selected>Select Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Creator/NIC</option>
                                    <option value="3">Publisher</option>
                                    <option value="4">Draft User</option>
                                    <option value="5">Approver</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="password.html">Forgot Password?</a>
                                <button id="loginButton" class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="/assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
