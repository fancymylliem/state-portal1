<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Update Council Of Ministers</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        {{-- @include('top.header') --}}
        <div id="layoutAuthentication">
                @include('errors')
                <main>
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="row">
                                        <div class="col"><h3 class="text-center font-weight-light my-4">Update Districts</h3></div>                    
                                    </div>
                                    {{-- <div class="card-header"><h3 class="text-center font-weight-light my-4">Add New District</h3></div> --}}
                                    <div class="card-body">
                                        <form action="{{('/updatedist/'.$dist->dist_id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                {{-- <div class="col-md-6"> --}}
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputDistname" type="text" name="dist_name" value="{{$dist->district_name}}" placeholder="" required>
                                                            <label for="inputDistname">District Name</label>
                                                            <span class="error-message">
                                                            @error('dist_name')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                {{-- </div>
                                                <div class="col-md-6"> --}}
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputDistHead" type="text" name="dist_head" value="{{$dist->district_head}}" placeholder="" required>
                                                        <label for="inputDistHead">District Headquarter</label>
                                                        <span class="error-message">
                                                            @error('dist_head')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputArea" type="text" name="area" value="{{$dist->area}}" placeholder="" required>
                                                        <label for="inputArea">Area(in sq km)</label>
                                                        <span class="error-message">
                                                            @error('area')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputPopulation" type="text" name="population" value="{{$dist->population}}" placeholder="" required>
                                                        <label for="inputPopulation">Population</label>
                                                        <span class="error-message">
                                                            @error('population')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                {{-- </div> --}}
                                            </div>
                                            
                                        <div class="mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit">UPDATE</button>
                            
                                        </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                </main>
        </div>       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    </body>
</html>
