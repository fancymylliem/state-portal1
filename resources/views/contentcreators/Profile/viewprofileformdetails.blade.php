
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>View Profile_form | Creator</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Porfile Form Details</h3></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Porfile_form Id</th><td>{{$prof->content_id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Position Id</th><td>{{$prof->position_id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Name</th><td>{{$prof->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Designation</th><td>{{$prof->designation}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Assume office </th><td>{{$prof->assume_office}}</td>
                                                </tr>
                                                <tr>
                                                    <th>image path</th><td>{{$prof>img_path}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth</th><td>{{$prof->date_of_birth}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Birth place</th><td>{{$prof->birth_place}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Education</th><td>{{$prof->education}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Father Name</th><td>{{$prof->father_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Mother Name</th><td>{{$prof->mother_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Marital status</th><td>{{$prof->marital_status}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Children</th><td>{{$prof->children}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Profession</th><td>{{$prof->profession}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pol_Career</th><td>{{$prof->pol_career}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Soc_activities</th><td>{{$prof->soc_activities}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Publication</th><td>{{$prof->publications}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Award</th><td>{{$prof->awards}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Foreigns Travel </th><td>{{$prof->foreign_travels}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Hobbies</th><td>{{$prof->hobbies}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Information</th><td>{{$prof->infomation}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th><td>{{$prof->address}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone_no</th><td>{{$prof->phone_no}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Fax Number</th><td>{{$prof->fax_no}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Mobile number</th><td>{{$prof->mobile_no}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email_id</th><td>{{$prof->email_id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>website</th><td>{{$prof->website}}</td>
                                                </tr>
                                                <tr>
                                                    <th>keyword</th><td>{{$prof->keyword}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Language</th><td>{{$prof->language}}</td>
                                                </tr>
                                                @if($prof->publish)
                                                    <tr>
                                                        <th>publish</th><td>{{$prof->publish}}</td>
                                                    </tr>
                                               @else
                                                <tr>
                                                     <th>publish</th><td>{{$prof->publish}}</td>   
                                                </tr>
                                               @endif
                                               <tr>
                                                    <th>Edit</th>
                                                    <td>
                                                        <a class="btn btn-warning" href="/editprofileform/{{$id=$prof->content_id}}">Edit</a>
                                                    </td>
                                                </tr>
                                                {{--<tr>
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
