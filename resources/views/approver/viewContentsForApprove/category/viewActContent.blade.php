<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>View Act | Publisher</title>
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
                                                    <th>Approval Status</th>
                                                    <td>
                                                        @if($act->status == 1)
                                                            <form action="{{('/approveact/'.$act->act_id)}}" method="POST" id="formApprove">
                                                                {{ method_field('PUT') }}
                                                                {{ csrf_field() }}     
                                                                <button type="submit" class="btn btn-primary" id="button1" name="changeStatus" value="0" onclick="buttonNone1(event);">Approve</button>
                                                            </form>
                                                            @elseif($act->status == 2)
                                                                <button class="btn btn-default text-success fw-bold">Approved</button>
                                                            @else
                                                                <button class="btn btn-default">NA</button>
                                                        @endif                  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Recheck Status</th>
                                                    <td>
                                                        @if($act->status == 1)
                                                        <form action="{{('/recheckact/'.$act->act_id)}}" method="POST" id="formRecheck">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}  
                                                            <textarea name="remark" id="" cols="30" rows="4">Enter the message</textarea>              
                                                            <button type="submit" class="btn btn-info"  name="changeStatus" value="1" onclick="buttonNone2(event);">Send Back</button>
                                                        </form> 
                                                        @elseif($act->status!==3)
                                                            <button class="btn btn-default" id="button2">NA</button>
                                                        @else
                                                            <button class="btn btn-default text-warning fw-bold">Sent back for recheck</button>
                                                        @endif                                                
                                                        
                                                    </td>
                                                </tr>
                                                    {{-- <td><a class="btn btn-warning" href="/editact/{{$id=$act->act_id}}">Edit</a> --}}
                                                        <th>Actions</th>
                                                    <td>
                                                        <form action="{{('/rejectact/'.$act->act_id)}}" method="POST" id="formReject">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}    
                                                            @if ($act->status == 4)
                                                                <button class="btn btn-default text-danger m-1" onclick="rejectConfirmation(event);">Rejected</button>
                                                            @else
                                                                <button type="submit" class="btn btn-outline-danger m-1" onclick="rejectConfirmation(event);">Reject</button>
                                                            @endif

                                                        </form>
                                                        
                                                            
                                                        
                                                        <a class="btn btn-outline-danger m-1" onclick="return confirm('Are you sure ?');" href="/deleteactfrompub/{{$id=$act->act_id}}">Delete</a></td>
                                                </tr> 
                                                {{-- @endforeach --}}
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
            function buttonNone1(e){
                e.preventDefault();
                var approve = confirm('Are you sure you want to approve ?');
                if(approve){
                    var form = document.getElementById('formApprove');
                    form.submit();
                    document.getElementById('button2').style.display = 'none';
                    document.getElementById('heading').style.display = 'none';
                }
                
            }
            function buttonNone2(e){
                e.preventDefault();
                var recheck = confirm('Are you sure you want to send back to the creator ?');
                if(recheck){
                    var form = document.getElementById('formRecheck');
                    form.submit();
                    document.getElementById('button2').style.display = 'none';
                    document.getElementById('heading').style.display = 'none';
                }
            }
            function rejectConfirmation(e){
                e.preventDefault();
                var reject = confirm('Are you sure you want to reject ?');
                if(reject){
                    var form = document.getElementById('formReject');
                    form.submit();
                }
            }
            // function deleteConfirmation(e){
            //     e.preventDefault();
            //     confirm('Are you sure you want to delete ?');
            // }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
