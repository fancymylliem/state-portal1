
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View Document Content</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Document Details</h3></div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>Document Id</th>
                                                <th>Department Name</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Year</th>
                                                <th>Download PDF</th>
                                                <th>Status</th>
                                                <th>Approve</th>
                                                <th>Recheck</th>
                                                
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($order as $o) --}}
                                                <tr>
                                                    <td>{{$doc->doc_id}}</td>
                                                    <td>{{$doc->department}}</td>
                                                    <td>{{$doc->title}}</td>
                                                    <td>{{$doc->category}}</td>
                                                    <td>{{$doc->year}}</td>                                                    
                                                    <td><a href="/downloaddocument/{{$doc->pdf}}">Download File</a></td>  
                                                    <td>{{$doc->status}}</td>                                                    
                                                    <td>
                                                        @if($doc->status == 1)
                                                            <form action="{{('/approvedocument/'.$doc->doc_id)}}" method="POST">
                                                                {{ method_field('PUT') }}
                                                                {{ csrf_field() }}                    
                                                                <button type="submit" class="btn btn-primary" id="button1" name="changeStatus" value="0" onclick="buttonNone1();">Approve</button>
                                                            </form>
                                                            @elseif($doc->status == 2)
                                                                <button class="btn btn-default text-success fw-bold">Approved</button>
                                                            @else
                                                                <button class="btn btn-default">NA</button>
                                                        @endif                  
                                                    </td>
                                                    <td>
                                                        @if($doc->status == 1)
                                                        <form action="{{('/recheckdocument/'.$doc->doc_id)}}" method="POST">
                                                            {{ method_field('PUT') }}
                                                            {{ csrf_field() }}        
                                                            {{-- <textarea name="remark" id="" cols="30" rows="10">Enter the message</textarea>               --}}
                                                            <button type="submit" class="btn btn-warning"  name="changeStatus" value="1" onclick="buttonNone2();">recheck</button>
                                                        </form> 
                                                        @elseif($doc->status==2)
                                                            <button class="btn btn-default" id="button2">NA</button>
                                                        @else
                                                            <button class="btn btn-default text-warning fw-bold">sent for recheck</button>
                                                        @endif                                                
                                                    </td>  
                                                    <td><a class="btn btn-danger" onclick="return prompt('Are You sure you want to reject ?');" href="/reject/{{$id=$act->act_id}}">Reject</a></td>
                                                    <td><a class="btn btn-danger" onclick="return confirm('Are You Sure');" href="/deletedoc/{{$id=$act->act_id}}">Delete</a></td>
                                           
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
