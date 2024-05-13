
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>View spotlight | Creator</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Spotlight Details</h3></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($order as $o) --}}
                                                <tr>
                                                    <th>Spotlight Id</th><td>{{$spot->content_id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Title</th><td>{{$spot->title}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Spotlight Description</th><td>{{$spot->description}}</td>
                                                </tr>
                                               {{--@if($spot->availability == 'availability')
                                                <tr>
                                                    <th>online Availability</th>
                                                    <td>{{$spot->availability}}</td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <th>Downloadable</th>
                                                    <td>{{$spot->availability}}</td>
                                                </tr>--}}
                                                </tr>
                                                @if($spot->url_path)
                                                    <tr>
                                                        <th>Online Availability</th>
                                                        <td>{{$spot->availability}}</td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <th>Downloadable</th>
                                                        <td>{{$spot->availability}}</td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <th>Language</th><td>{{$spot->language}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Keywords</th><td>{{$spot->keywords}}</td>
                                                </tr>
                                                @if($spot->publish)
                                                    <tr>
                                                        <th>publish</th><td>{{$spot->publish}}</td>
                                                    </tr>
                                               @else
                                                <tr>
                                                     <th>publish</th><td>{{$spot->publish}}</td>   
                                                </tr>
                                               @endif
                                                @if ($spot->url_path)
                                                    <tr>
                                                        <th>Url</th><td>{{$spot->url_path}}</td>
                                                    </tr>
                                                    @else
                                                    <tr>
                                                        <th>Download PDF</th><td><a href="/downloadspot/{{$spot->pdf}}">Download File</a></td>  
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <th>Edit</th>
                                                    <td>
                                                        <a class="btn btn-warning" href="/editspot/{{$id=$spot->content_id}}">Edit</a>
                                                    </td>
                                                </tr>
                                               {{-- <tr>
                                                    <th>Publisher Status</th>
                                                    <td>
                                                        @if($spot->status == 1)
                                                            <form action="{{('/sendtopubspot/'.$spot->content_id)}}" method="POST" id="formSend">
                                                                {{ method_field('PUT') }}
                                                                {{ csrf_field() }}                    
                                                                <button type="submit" class="btn btn-default" name="changeStatus" value="0" onclick="send(event);">
                                                                    <h6 class="fw-bold text-success">Sent</h6>
                                                                </button>
                                                            </form>                    
                                                        @elseif ($spot->status == 0)
                                                        <form action="{{('/sendtopubspot/'.$spot->content_id)}}" method="POST" id="formPending">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}                      
                                                            <button type="submit" class="btn  btn-outline-info" name="changeStatus" value="1" onclick="pending(event)">Pending</button>
                                                        </form>
                                                        @else
                                                        <form action="{{('/sendtopubspot/'.$spot->content_id)}}" method="POST" id="formResend">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}                    
                                                            <button type="submit" class="btn btn-outline-info" name="changeStatus" value="0" onclick="resendConfirmation(event);">Re send</button>
                                                        </form>                                               
                                                        @endif
                                                    </td>
                                                </tr>--}}
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
