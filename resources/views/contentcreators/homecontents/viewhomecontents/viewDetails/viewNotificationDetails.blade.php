<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>View Notfications | Creator</title>
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
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tender Details</h3></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($order as $o) --}}
                                                <tr>
                                                    <th>Notification Id</th><td>{{$notification->notification_id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Department Name</th><td>{{$notification->department_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Title</th><td>{{$notification->title}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Reference Number</th><td>{{$notification->notification_no}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Release Date</th><td>{{$notification->release_date}}</td>
                                                </tr>
                                             
                                                <tr>
                                                    <th>Download PDF</th><td><a href="/downloadnoti/{{$notification->noti_pdf}}">Download File</a></td>  
                                                </tr> 
                                                    
                                                    {{-- <td>{{$tender->status}}</td> --}}
                                                <tr>
                                                    <th>Edit</th>
                                                    <td>
                                                        @if ($notification->status !== 0 && $notification->status !== 3)
                                                        <h6 class="fw-bold text-warning">Cant Edit right now</h6>
                                                            @else
                                                            <a class="btn btn-warning" href="/editnotification/{{$id=$notification->notification_id}}">Edit</a>
                                                            @endif
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Send to Publisher Status</th>
                                                    <td>
                                                        @if($notification->status == 1)
                                                            <form action="{{('/sendtopubnoti/'.$notification->notification_id)}}" method="POST" id="formSend">
                                                                {{ method_field('PUT') }}
                                                                {{ csrf_field() }}                    
                                                                <button type="submit" class="btn btn-default" name="changeStatus" value="0" onclick="send(event);">
                                                                    <h6 class="fw-bold text-success">Sent</h6>
                                                                </button>
                                                            </form>                    
                                                        @elseif ($notification->status == 0)
                                                        <form action="{{('/sendtopubnoti/'.$notification->notification_id)}}" method="POST" id="formPending">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}                      
                                                            <button type="submit" class="btn  btn-outline-info" name="changeStatus" value="1" onclick="pending(event)">Pending</button>
                                                        </form>
                                                        @else
                                                        <form action="{{('/sendtopubnoti/'.$notification->notification_id)}}" method="POST" id="formResend">
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
                </main>
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
