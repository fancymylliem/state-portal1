<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update Slides</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        {{-- @include('top.header') --}}
        <div id="layoutAuthentication">
                @include('errors')
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-body">
                                        slide show
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10">
                                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                        <div class="card-header"><div class="row">
                                                            <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Update Slides</h3></div>
                                                            {{-- <div class="col-md-2"><a class="btn btn-primary" href="viewslide">View List</a></div> --}}
                                                        </div></div>
                                                        <div class="card-body">
                                                            @include('errors')
                                                            <form action="{{('/updateslide/'.$slide->slide_id)}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row mb-3">
                                                                        <div class="form-floating mb-3">
                                                                            <div class="form-floating mb-3 mb-md-0">
                                                                                <input class="form-control" id="inputSlideName" type="text" name="slide_name" value="{{$slide->slide_name}}" placeholder="" required>
                                                                                <label for="inputSlideName">Slide Header</label>
                                                                                <span class="error-message">
                                                                                @error('slide_name')
                                                                                    {{$message}}
                                                                                @enderror
                                                                            </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <div class="form-floating mb-3 mb-md-0">
                                                                                <input class="form-control" id="inputAbout" type="text" name="about" value="{{$slide->about}}" placeholder="" required>
                                                                            <label for="inputAbout">About</label>
                                                                            <span class="error-message">
                                                                                @error('about')
                                                                                    {{$message}}
                                                                                @enderror
                                                                            </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <div class="form-floating mb-3 mb-md-0">
                                                                                <input class="form-control" id="inputImage1" type="file" name="image1" value="{{$slide->image1}}" placeholder="" required>
                                                                                <label for="inputImage1">Select Image</label>
                                                                                <span class="error-message">
                                                                                @error('image1')
                                                                                    {{$message}}
                                                                                @enderror
                                                                            </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                            <div class="mt-4 mb-0">
                                                                <button class="btn btn-primary" type="submit">Create</button>
                                                
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
                                        
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
