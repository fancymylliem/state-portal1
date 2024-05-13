<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>View Tender | Publisher</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tender Details</h3></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($order as $o) --}}
                                                <tr>
                                                    <th>Act Id</th><td>{{$tender->tender_id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Department Name</th><td>{{$tender->department_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Reference Number</th><td>{{$tender->ref_no}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Title</th><td>{{$tender->title}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Release Date</th><td>{{$tender->release_date}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Last Date</th><td>{{$tender->last_date}}</td>
                                                </tr>    
                                                <tr>
                                                    <th>Opening Date</th><td>{{$tender->opening_date}}</td>
                                                </tr>
                                                <tr>   
                                                    <th>Download PDF</th><td><a href="/downloadtender/{{$tender->pdf}}">Download File</a></td>  
                                                </tr> 
                                                <tr>
                                                    <th>Approval</th>
                                                    <td>
                                                        @if($tender->status == 1)
                                                            <form action="{{('/approvetender/'.$tender->tender_id)}}" method="POST" id="formApprove">
                                                                {{ method_field('PUT') }}
                                                                {{ csrf_field() }}     
                                                                <button type="submit" class="btn btn-primary" id="button1" name="changeStatus" value="0" onclick="buttonNone1(event);">Approve</button>
                                                            </form>
                                                            @elseif($tender->status == 2)
                                                                <button class="btn btn-default text-success fw-bold">Approved</button>
                                                            @else
                                                                <button class="btn btn-default">NA</button>
                                                        @endif                  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Recheck</th>
                                                    <td>
                                                        @if($tender->status == 1)
                                                        <form action="{{('/rechecktender/'.$tender->tender_id)}}" method="POST" id="formRecheck">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}  
                                                            <textarea name="remark" id="" cols="30" rows="4">Enter the message</textarea>              
                                                            <button type="submit" class="btn btn-info"  name="changeStatus" value="1" onclick="buttonNone2(event);">Send Back</button>
                                                        </form> 
                                                        @elseif($tender->status!==3)
                                                            <button class="btn btn-default" id="button2">NA</button>
                                                        @else
                                                            <button class="btn btn-default text-warning fw-bold">Sent back for recheck</button>
                                                        @endif                                                
                                                        
                                                    </td>
                                                </tr>
                                                    {{-- <td><a class="btn btn-warning" href="/editact/{{$id=$tender->tender_id}}">Edit</a> --}}
                                                        <th>Operations</th>
                                                    <td>
                                                        <form action="{{('/rejecttender/'.$tender->tender_id)}}" method="POST" id="formReject">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}    
                                                            @if ($tender->status == 4)
                                                                <button class="btn btn-default text-danger m-1" onclick="rejectConfirmation(event);">Rejected</button>
                                                            @else
                                                                <button type="submit" class="btn btn-outline-danger m-1" onclick="rejectConfirmation(event);">Reject</button>
                                                            @endif

                                                        </form>
                                                        
                                                            
                                                        
                                                        <a class="btn btn-outline-danger m-1" onclick="return confirm('Are you sure ?');" href="/deletetenderfrompub/{{$id=$tender->tender_id}}">Delete</a></td>
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
