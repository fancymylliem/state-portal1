<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View Rules and Regulaion</title>
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
                            <div class="col">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <div id="layoutAuthentication_content">
                                            <main>
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-7">
                                                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Add New Rules and Regulation</h3></div>
                                                                <div class="card-body">
                                                                    @include('errors')
                                                                    <form action="{{('/updaterule/'.$rule->rule_id)}}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="form-floating mb-3">
                                                                            <div class="form-floating mb-3">
                                                                                <div class="form-floating mb-3 mb-md-0">
                                                                                    <input class="form-control" id="inputFirstName" name="department" type="text" value="{{$rule->department}}" placeholder="Enter the department" />
                                                                                    <label for="inputFirstName">Department</label>
                                                                                    <span>
                                                                                        @error('department')
                                                                                            {{$message}}
                                                                                        @enderror
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <div class="form-floating mb-3">
                                                                                <div class="form-floating">
                                                                                    <input class="form-control" id="inputLastName" name="title" type="text" value="{{$rule->title}}" placeholder="Enter the title of the Act" />
                                                                                    <label for="inputLastName">Title</label>
                                                                                    <span>
                                                                                        @error('title')
                                                                                            {{$message}}
                                                                                        @enderror
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <div class="form-floating mb-3">
                                                                                <div class="form-floating">
                                                                                    <input class="form-control" id="inputcategory" name="category" type="text" value="{{$rule->category}}" placeholder="Enter the Category" />
                                                                                    <label for="inputcategory">Category</label>
                                                                                    <span>
                                                                                        @error('category')
                                                                                            {{$message}}
                                                                                        @enderror
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-3 mb-md-0">
                                                                                    <input class="form-control" id="inputpdf" name="pdf" type="file" value="{{$rule->pdf}}" placeholder="Upload PDF" />
                                                                                    <label for="inputpdf">Upload PDF</label>
                                                                                    <span>
                                                                                        @error('pdf')
                                                                                            {{$message}}
                                                                                        @enderror
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-4 mb-0">
                                                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Add</button></div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="card-footer text-center py-3">
                                                                    {{-- <div class="small"><a href="">Have an account? Go to login</a></div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </main>
                                        </div>

                                    </div>
                                    <div class="card-footer text-center py-3">
                                        {{-- <div class="small"><a href="">Have an account? Go to login</a></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            {{-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> --}}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
