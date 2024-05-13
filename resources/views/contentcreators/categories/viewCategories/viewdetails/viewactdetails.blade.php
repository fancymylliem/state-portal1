
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>View Act | Creator</title>
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
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Act Details</h3></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($order as $o) --}}
                                                <tr>
                                                    <th>Act Id</th><td>{{$act->act_id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Department Name</th><td>{{$act->department_name}}</td>
                                                </tr>
                                                {{-- <tr>
                                                    <th>District</th><td>{{$act->district_name}}</td>
                                                </tr> --}}
                                                <tr>
                                                    <th>Title</th><td>{{$act->title}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Number</th><td>{{$act->number}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Year</th><td>{{$act->year}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Short Title</th><td>{{$act->short_title}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Extent</th><td>{{$act->extent}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Commencement Date</th><td>{{$act->commencement_date}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Act Objective</th><td>{{$act->act_objective}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Language</th><td>{{$act->language}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Keywords</th><td>{{$act->keywords}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Download PDF</th><td><a href="/downloadact/{{$act->pdf}}">Download File</a></td>  
                                                </tr> 
                                                    
                                                    {{-- <td>{{$act->status}}</td> --}}
                                                <tr>
                                                    <th>Edit</th>
                                                    <td>
                                                        @if ($act->status !== 0 && $act->status !== 3)
                                                        <h6 class="fw-bold text-warning">Cant Edit right now</h6>
                                                            @else
                                                            <a class="btn btn-warning" href="/editact/{{$id=$act->act_id}}">Edit</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Send to Publisher Status</th>
                                                    <td>
                                                        @if($act->status == 1)
                                                            <form action="{{('/sendtopubact/'.$act->act_id)}}" method="POST" id="formSend">
                                                                {{ method_field('PUT') }}
                                                                {{ csrf_field() }}                    
                                                                <button type="submit" class="btn btn-default" name="changeStatus" value="0" onclick="send(event);">
                                                                    <h6 class="fw-bold text-success">Sent</h6>
                                                                </button>
                                                            </form>                    
                                                        @elseif ($act->status == 0)
                                                        <form action="{{('/sendtopubact/'.$act->act_id)}}" method="POST" id="formPending">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}                      
                                                            <button type="submit" class="btn  btn-outline-info" name="changeStatus" value="1" onclick="pending(event)">Pending</button>
                                                        </form>
                                                        @else
                                                        <form action="{{('/sendtopubact/'.$act->act_id)}}" method="POST" id="formResend">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}                    
                                                            <button type="submit" class="btn btn-outline-info" name="changeStatus" value="0" onclick="resendConfirmation(event);">Re send</button>
                                                        </form>                                               
                                                        @endif
                                                    </td>
                                                </tr>
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
        </div>
        <script>
            function send(e){
                e.preventDefault();
                var send = confirm('Are you sure you want to send ?');
                if(send){
                    var form = document.getElementById('formSend');
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
            function pending(e){
                e.preventDefault();
                var pending = confirm('Are you sure you want to send ?');
                if(pending){
                    var form = document.getElementById('formPending');
                    form.submit();
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
