<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View Documents</title>
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
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active"><a class="btn btn-light" href="ccdashboard"><i class="fa-solid fa-arrow-left"> </i> Go Back to Dashboard</a></li>
                                </ol>
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Documents</h3></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>Sl No</th>
                                                <th>Title</th>
                                                <th>Department</th>
                                                <th>Category</th>
                                                <th>Year</th>
                                                <th>pdf</th>
                                                <th>Operations</th>
                                                <th>Status</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($vdoc as $d)
                                                <tr>
                                                    @if ($d->status == 0)
                                                        <td>{{$d->doc_id}}</td>
                                                        <td>{{$d->title}}</td>
                                                        <td>{{$d->department}}</td>
                                                        <td>{{$d->category}}</td>
                                                        <td>{{$d->year}}</td>
                                                        <td>{{$d->pdf}}</td>
                                                        <td><a class="btn btn-warning" href="editdocument/{{$id=$d->doc_id}}">Edit</a>
                                                        <a class="btn btn-danger" href="deletedocument/{{$id=$d->doc_id}}">Delete</a></td>
                                                        <td>
                                                            @if($d->status == 1) 
                                                                <form action="{{('/sendtopubdoc/'.$d->doc_id)}}" method="POST">
                                                                    {{ method_field('PUT') }}
                                                                    {{ csrf_field() }}                          
                                                                    <button type="submit" class="btn btn-default" name="changeStatus" value="1">sent</button>
                                                                </form>                    
                                                            @else
                                                                <form action="{{('/sendtopubdoc/'.$d->doc_id)}}" method="POST">
                                                                    {{ method_field('PUT') }}
                                                                    {{ csrf_field() }}                              
                                                                    <button type="submit" class="btn btn-outline-warning" name="changeStatus" value="0">pending</button>
                                                                </form>                                                 
                                                            @endif
                                                        </td>
                                                    @endif
                                                </tr> 
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                                    
                                        

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
