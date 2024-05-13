<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View Map Category | Creator</title>
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
                            <div class="col">
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active"><a class="btn btn-light" href="cdcdashboard"><i class="fa-solid fa-arrow-left"> </i> Go Back to Dashboard</a></li>
                                </ol>
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Map Category</h3></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>Map category ID</th>
                                                <th>Map ID</th>
                                                <th>District ID</th>
                                                <th>Title</th>
                                                <th>Remark</th>
                                                <th>Operations</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($vmap as $vm)
                                                <tr>
                                                    @if ($vm->publish == 'Y' || $vm->publish == 'N')
                                                        <td>{{$vm->content_id}}</td>
                                                        <td>{{$vm->map_id}}</td>
                                                        <td>{{$vm->dist_id}}</td>
                                                        <td>{{$vm->title}}</td>
                                                        {{-- <td>{{$vm->pdf}}</td> --}}
                                                        <td>
                                                            <a class="btn btn-info" href="viewmapcatdetails/{{$id=$vm->content_id}}">View</a>
                                                            <a class="btn btn-danger" href="deletemap/{{$id=$vm->content_id}}" onclick="deleteConfirmation(event);">Delete</a>
                                                        </td>
                                                    @endif
                                                </tr> 
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
        </div>
        <script>
            // function send(e){
            //     e.preventDefault();
            //     var send = confirm('Are you sure you want to ?');
            //     if(send){
            //         var form = document.getElementById('send');
            //         form.submit();
            //     }
            // }
            function resend(e){
                e.preventDefault();
                var resend=alert('Are you sure you want to send back ?');
                // if(resend){
                //     var form = document.getElementById('resend');
                //     form.submit();
                // }
            }
            function pending(e){
                e.preventDefault();
                var pending = confirm('Are you sure you want to Send ?');
                if(pending){
                    var form = document.getElementById('pending');
                    form.submit();
                }
            }
            function resendConfirmation(e){
                e.preventDefault();
                var resend = confirm('Are you sure you want to resend ?');
                if(resend){
                    var form = document.getElementById('formResend');
                    form.submit();
                }
            }
            function deleteConfirmation(e){
                e.preventDefault();
                var delete = confirm("Are you sure you want to delete ?");
                if(delete){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
