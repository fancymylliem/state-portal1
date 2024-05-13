<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View Acts</title>
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
                                    <li class="breadcrumb-item active"><a class="btn btn-light" href="ccdashboard"><i class="fa-solid fa-arrow-left"> </i> Go Back to Dashboard</a></li>
                                </ol>
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Re-check and Edit</h3></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>Sl No</th>
                                                <th>Title</th>
                                                <th>Department</th>
                                                <th>pdf</th>
                                                <th>Operations</th>
                                                <th>status</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($act as $a)
                                                <tr>
                                                    @if ($a->status == 3)
                                                        <td>{{$a->act_id}}</td>
                                                        <td>{{$a->title}}</td>
                                                        <td>{{$a->dept_id}}</td>
                                                        <td>{{$a->pdf}}</td>
                                                        <td><a class="btn btn-warning" href="editact/{{$id=$a->act_id}}">Edit</a>
                                                        {{-- <a class="btn btn-danger" href="deleteact/{{$id=$a->act_id}}">Delete</a></td> --}}
                                                        <td>
                                                            @if($a->status == 1)
                                                                <form action="{{('/sendtopubact/'.$a->act_id)}}" method="POST" id="formSent">
                                                                    {{ method_field('PUT') }}
                                                                    {{ csrf_field() }}                    
                                                                    <button type="submit" class="btn btn-default" name="changeStatus" value="0" >Sent</button>
                                                                </form>                    
                                                            @else
                                                                <form action="{{('/sendtopubact/'.$a->act_id)}}" method="POST" id="pending">
                                                                    {{ method_field('PUT') }}
                                                                    {{ csrf_field() }}                      
                                                                    <button type="submit" class="btn  btn-outline-warning" name="changeStatus" value="1" onclick="sentConfirmation(event);">Pending</button>
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
        <script>
            function sentConfirmation(e){
                e.preventDefault();
                var pending = confirm('Are you sure you want to send ?');
                if(pending){
                    var form = document.getElementById('pending');
                    form.submit();
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{'js/scripts.js'}}"></script>

    </body>
</html>