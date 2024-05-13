<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View Position Data</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
        {{-- @include('top.header') --}}
        <div id="layoutAuthentication">
            @include('errors')
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="text-center font-weight-light my-4">Position Data</h3>
                        <a href='admindashboard' role="button" class="btn-close" aria-label="close"></a>
                    </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Position id</th>
                                    <th>Position Name</th>
                                    <th>Operations</th>
                                </thead>
                                <tbody>
                                    @foreach ($position as $po)
                                    <tr>
                                        <td>{{$po->position_id}}</td>
                                        <td>{{$po->position_name}}</td>
                                        <td>
                                            <a href="editpositiondata/{{$id = $po->position_id}}" class="btn btn-success">Edit</a>
                                            <a href="deletepositiondata/{{$id = $po->position_id}}" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete');">Delete</a></td>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        
    </body>
</html>
