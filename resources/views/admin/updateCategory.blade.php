<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Create Category</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
        <div id="layoutAuthentication">
                @include('errors')
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Category</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{('/updatecategory/'.$detailss->category_id)}}" method="POST">
                                            @csrf
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputDeptName" type="text" name="category_name" value="{{$detailss->category_name}}" placeholder="Schemes" />
                                                <label for="inputDeptName">Category Name</label>
                                                <span class="error-message">
                                                    @error('category_name')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">UPDATE</button> 
                                                {{-- <a href="#" class="btn btn-outline-info">view</a> --}}
                                            </div>
                                        </form>
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