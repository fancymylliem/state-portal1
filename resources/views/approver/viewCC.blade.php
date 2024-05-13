<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View Content Creator Details</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        {{-- @include('top.header') --}}
        <div id="layoutAuthentication">
            @include('errors')
            <main>
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Content Creator Details</h3></div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        {{-- <th>Sl No</th> --}}
                                        <th>CC Id</th>
                                        <th>Department Name</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>status</th>
                                        <th>Operations</th>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($details as $cc)
                                        @if ($cc->role==2)
                                        <tr>
                                            {{-- <td>{{$loop->index+1}}</td> --}}
                                            <td>{{$cc->id}}</td>
                                            <td>{{$cc->department_name}}</td>
                                            <td>{{$cc->first_name}}{{$cc->last_name}}</td>
                                            <td>{{$cc->email}}</td>
                                            <td>{{$cc->password}}</td>
                                            <td>
                                                @if($cc->status == 1)
                                                <form action="{{('/pendingcc/'.$cc->id)}}" method="POST" id="formactive">
                                                    {{ method_field('PUT') }}
                                                    {{ csrf_field() }}                    
                                                    <button type="submit" class="btn btn-outline-success" name="changeStatus" value="0" onclick="confirmActive(event);">Active</button>
                                                </form>                    
                                                @elseif ($cc->status == 0)
                                                <form action="{{('/activecc/'.$cc->id)}}" method="POST" id="formpending">
                                                    {{ method_field('PUT') }}
                                                    {{ csrf_field() }}                      
                                                    <button type="submit" class="btn  btn-outline-primary" name="changeStatus" value="1" onclick="confirmPending(event);">Pending</button>
                                                </form>
                                            @endif
                                            </td>
                                            
                                            <td>
                                                <a class="btn btn-warning" href="">Edit</a>
                                                <a class="btn btn-danger" href="">Delete</a>
                                            </td>
                                        </tr> 
                                            
                                        @endif
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
            </main>
        </div>
        <script>
            function confirmActive(e){
                e.preventDefault();
                var c = confirm('Are you sure ?');
                if(c){
                    var form = document.getElementById('formactive');
                    form.submit();
                }
            }
            function confirmPending(e){
                e.preventDefault();
                var c = confirm('Are you sure ?');
                if(c){
                    var form = document.getElementById('formpending');
                    form.submit();
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
