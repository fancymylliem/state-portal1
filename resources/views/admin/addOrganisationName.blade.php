<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Superadmin | Add Organisation Name</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
        <div id="layoutAuthentication">
                @include('errors')
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="text-center font-weight-light my-4">Add New Organisation Name</h3>
                                <a href='admindashboard' role="button" class="btn-close" aria-label="close"></a>
                            </div>
                            <div class="card-body">
                                <form action="{{('/postorganisation')}}" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-select" name="dept_name" id="dept" aria-label="select Department">
                                                <option selected>select Department</option>
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
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-select" name="type" id="type" aria-label="select Organisation type">
                                                <option selected>Select Type</option>
                                                @foreach ($otype as $type)
                                                <option value="{{$type->org_type_id}}">{{$type->org_type_name}}</option>  
                                                @endforeach
                                              </select>
                                              <span class="error-message">
                                                @error('type')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputOrganisationName" type="text" name="organisation_name" placeholder="" />
                                        <label for="inputOrganisationName">Organisation Name</label>
                                        <span class="error-message">
                                            @error('organisation_name')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="row">     
                                        <div class="col">
                                            <button class="btn btn-primary" type="submit">ADD</button> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="col">
                                    <a class="btn btn-outline-info" href="vieworganisations">View</a>
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
