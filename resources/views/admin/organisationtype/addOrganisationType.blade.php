<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Superadmin | Add Organisation Type</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
        <div id="layoutAuthentication">
                @include('errors')
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Add New Organisation</h3></div>
                            <div class="card-body">
                                <form action="{{('/neworganisationtype')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputOrganisationType" type="text" name="organisation_type" placeholder="Health Department" />
                                        <label for="inputOrganisationType">Organisation Type</label>
                                        <span class="error-message">
                                            @error('organisation_type')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col text-center">
                                        <button class="btn btn-primary" type="submit">ADD</button> 
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center mt-4 mb-0">
                                <div class="col">
                                    <a class="btn btn-outline-info" href="vieworganisationtype">View Types</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
