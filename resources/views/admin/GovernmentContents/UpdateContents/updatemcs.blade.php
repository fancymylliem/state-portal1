<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update MCS</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        {{-- @include('top.header') --}}
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                @include('errors')
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Update MCS</h3></div>
                                        </div>    
                                    </div>
                                    <div class="card-body">
                                        <form action="{{('/updatemcs/'.$mcs->mcs_id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                {{-- <div class="col-md-6"> --}}
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floatinf mb-3 mb-md-0">
                                                            <input class="form-control" id="inputMcssname" type="text" name="mcs_name" value="{{$mcs->mcs_name}}" placeholder="" required>
                                                        <label for="inputMcssname">MCS Name</label>
                                                        <span class="error-message">
                                                            @error('mcs_name')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floatinf mb-3 mb-md-0">
                                                            <input class="form-control" id="inputPosition" type="text" name="position" value="{{$mcs->position}}" placeholder="" required>
                                                        <label for="inputPosition">Position</label>
                                                        <span class="error-message">
                                                            @error('position')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                {{-- </div> --}}
                                                {{-- <div class="col-md-6"> --}}
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floaing mb-3 mb-md-0">
                                                            <input class="form-control" id="inputPresentPost" type="text" name="present_post" value="{{$mcs->present_post}}" placeholder="" required>
                                                        <label for="inputPresentPost">Present Post</label>
                                                        <span class="error-message">
                                                            @error('present_post')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                       <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputJoining" type="date" name="joining" value="{{$mcs->joining}}" placeholder="" required>
                                                        <label for="inputJoining">Joining Date</label>
                                                        <span class="error-message">
                                                            @error('joining')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                       </div>
                                                    </div>
                                                {{-- </div> --}}
                                            </div>
                                            <div class="row mb-3">
                                                {{-- <div class="col-md-6"> --}}
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputAssets" type="file" name="assets" value="{{$mcs->assets}}" placeholder="" required>
                                                        <label for="inputAssets">Upload assets</label>
                                                        <span class="error-message">
                                                            @error('assets')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                {{-- </div>  --}}
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
                    </div>
                    
                </main>
            </div>
        </div>       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    </body>
</html>
