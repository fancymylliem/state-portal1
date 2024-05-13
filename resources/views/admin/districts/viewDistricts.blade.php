<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>View Districts</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
        {{-- @include('top.header') --}}
        <div id="layoutAuthentication">
            @include('errors')
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header d-flex justify-content-between align-items-center ">
                            <h3 class="text-center font-weight-light my-4">Organisation Types</h3>
                            <a href='admindashboard' role="button" class="btn-close" aria-label="close"></a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Sl No</th>
                                    <th> District Name</th>
                                    <th>District Headquater</th>
                                    <th> Area</th>
                                    <th>Population</th>				
                                    <th>Operation</th>
                                </thead>
                                <tbody>
                                    @foreach ($details4 as $data)
                                    <tr>
                                        <td>{{$data->dist_id}}</td>
                                        <td>{{$data->district_name}}</td>
                                        <td>{{$data->district_head}}</td>
                                        <td>{{$data->area}}</td>
                                        <td>{{$data->population}}</td>
                                        <td>
                                        <a class="btn btn-success" href="editdist/{{$id=$data->dist_id}}">Edit</a>
                                        <a class="btn btn-danger" href="deletedist/{{$id=$data->dist_id}}" onclick="return confirm('Are you sure ?');">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-center py-3">
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#Modal" data-whatever="@mdo">ADD NEW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--  MODAL STARTED  FOR ADD NEW DISTRICTS  -->       
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabel">Add Districts</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewdist')}}" method="POST" enctype="multipart/form-data" id="formsubmit">
                                        <div class="modal-body">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="form-floating mb-7 mb-md-4">
                                                    <input class="form-control" id="inputDistname" type="text" name="dist_name" placeholder="" required>
                                                    <label for="inputDistname">District Name</label>
                                                    <span class="error-message">
                                                        @error('dist_name')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-floating mb-7 mb-md-4">
                                                    <input class="form-control" id="inputDistHead" type="text" name="dist_head" placeholder="" required>
                                                    <label for="inputDistHead">District Headquarter</label>
                                                    <span class="error-message">
                                                        @error('dist_head')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-floating mb-7 mb-md-4">
                                                    <input class="form-control" id="inputArea" type="text" name="area" placeholder="" required>
                                                    <label for="inputArea">Area (in sq km)</label>
                                                    <span class="error-message">
                                                        @error('area')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-floating mb-7 mb-md-4">
                                                    <input class="form-control" id="inputPopulation" type="text" name="population" placeholder="" required>
                                                    <label for="inputPopulation">Population</label>
                                                    <span class="error-message">
                                                        @error('population')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 mb-4 d-flex justify-content-between">
                                            <div class="mt-10 mb-0">
                                                <button class="btn btn-primary text-left" type="submit">ADD</button>
                                                <button class="btn btn-primary text-left" type="reset">CLEAR</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>    

<!--END MODEL FOR ADD  NEW DISTRICTS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        
    </body>
</html>
