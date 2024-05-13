<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View Slides</title>
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
                    Honourable Dignitaries
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Honourable Dignitaries</h3></div>
                                    <div class="card-body">
                                        @include('errors')
                                        <form action="{{('/updatehonourable/'.$hon->hon_id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputName" type="text" name="name" value="{{$hon->name}}" placeholder="" required>
                                                        <label for="inputName">Name</label>
                                                        <span class="error-message">
                                                            @error('name')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputPost" type="text" name="post" value="{{$hon->post}}" placeholder="" required>
                                                        <label for="inputPost">Designation</label>
                                                        <span class="error-message">
                                                            @error('post')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputImage" type="file" name="image" value="{{$hon->image}}" placeholder="" required>
                                                        <label for="inputImage">Select Image</label>
                                                        <span class="error-message">
                                                            @error('image')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                        </div>
                                                    </div>
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
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
