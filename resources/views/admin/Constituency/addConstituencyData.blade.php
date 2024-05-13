<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Superadmin | Add Constituency Data</title>
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
                            <h3 class="text-center font-weight-light my-4">Add Constituency Data</h3>
                            <a href='admindashboard' role="button" class="btn-close" aria-label="close"></a>
                        </div>
                            <div class="card-body">
                                <form action="{{('/newconstituencydata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputConstituencyData" type="text" name="constituency_data" placeholder="Health Department" />
                                        <label for="inputConstituencyData">Constituency Data</label>
                                        <span class="error-message">
                                            @error('constituency_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewconstituencydata">View Constituency</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
