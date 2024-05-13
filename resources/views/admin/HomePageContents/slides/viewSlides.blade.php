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
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">   
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col"><h3 class="text-center font-weight-light my-4">View Slides</h3></div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>Sl No</th>
                                                <th>Name</th>
                                                <th>About</th>
                                                <th>Image</th>
                                                <th>Operation</th>
                                                
                                            </thead>
                                            <tbody>
                                                @foreach ($slides as $s)
                                                <tr>
                                                    <td>{{$s->slide_id}}</td>
                                                    {{-- <td>{{$s->dept_id}}</td> --}}
                                                    <td>{{$s->slide_name}}</td>
                                                    <td>{{$s->about}}</td>
                                                    <td><img src="{{asset("uploads/assets/slides/images/")}}/{{$s->image1}}" alt="" style="height:6rem;width:18rem;"></td>
                                                    <td><a class="btn btn-info" href="editslide/{{$id=$s->slide_id}}">Edit</a></td>
                                                    <td><a class="btn btn-danger" href="deleteslide/{{$id=$s->slide_id}}">Delete</a></td>
                                                </tr> 
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                                    
                                        

                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a class="btn btn-outline-primary" href="addnewslide">Add New</a></div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
