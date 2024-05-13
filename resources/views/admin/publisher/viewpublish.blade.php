<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>View publish</title>
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
                            <h3 class="text-center font-weight-light my-4">View Publisher</h3>
                            <a href='admindashboard' role="button" class="btn-close" aria-label="close"></a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>SL No</th>
                                    <th>Publisher</th>
                                    <th>Operations</th>
                                </thead>
                                <tbody>
                                @foreach ($pub as $p)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$l->publish}}</td>
                                        <td>
                                            <a href="editpublish/{{$id = $p->id}}" class="btn btn-success">Edit</a>
                                            <a href="deletepublish/{{$id = $p->id}}" class="btn btn-danger" onclick="return confirm('Are you sure ?');">Delete</a>
                                        </td>
                                    </tr>       
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>