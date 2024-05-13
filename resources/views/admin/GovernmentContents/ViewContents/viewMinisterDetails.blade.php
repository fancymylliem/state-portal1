<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>{{$viewDetails->minister_name}} | Meghalaya</title>
</head>
<body>
    <div id="layoutAuthentication">
        @include('errors')
        <main>
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card shadow-lg border-0 rounded-lg">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Council Of Ministers</h3></div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Sl No</th>
                                            <td>{{$viewDetails->minister_id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td><img src="{{'/uploads/ministers'}}/{{$viewDetails->photo}}" alt="" style="height: 15rem;width:15rem;"></td>
                                        </tr>
                                        <tr>
                                            <th>Minister Name</th>
                                            <td>{{$viewDetails->minister_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Party</th>
                                            <td>{{$viewDetails->party}}</td>
                                        </tr>
                                        <tr>
                                            <th>constituency</th>
                                            <td>{{$viewDetails->constituency}}</td>
                                        </tr>
                                        <tr>
                                            <th>district</th>
                                            <td>{{$viewDetails->district}}</td>
                                        </tr>
                                        <tr>
                                            <th>assembly</th>
                                            <td>{{$viewDetails->assembly}}</td>
                                        </tr>
                                        <tr>
                                            <th>nativeplace</th>
                                            <td>{{$viewDetails->nativeplace}}</td>
                                        </tr>
                                        <tr>
                                            <th>education</th>
                                            <td>{{$viewDetails->education}}</td>
                                        </tr>
                                        <tr>
                                            <th>occupation</th>
                                            <td>{{$viewDetails->occupation}}</td>
                                        </tr>
                                        <tr>
                                            <th>political</th>
                                            <td>{{$viewDetails->political}}</td>
                                        </tr>
                                        <tr>
                                            <th>marital</th>
                                            <td>{{$viewDetails->marital}}</td>
                                        </tr>
                                        <tr>
                                            <th>additional</th>
                                            <td>{{$viewDetails->additional}}</td>
                                        </tr>
                                        <tr>
                                            <th>communication</th>
                                            <td>{{$viewDetails->communication}}</td>
                                        </tr>
                                        <tr>
                                            <th>permanent</th>
                                            <td>{{$viewDetails->permanent}}</td>
                                        </tr>
                                        <tr>
                                            <th>email</th>
                                            <td>{{$viewDetails->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>contact_number</th>
                                            <td>{{$viewDetails->contact_number}}</td>
                                        </tr>
                                        <tr>
                                            <th> Action </th>
                                            <td><a href="/editcom/{{$id=$viewDetails->minister_id}}" class="btn btn-success">Edit</a>
                                                <a href="deletecom/{{$id=$viewDetails->minister_id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
              
</body>
</html>     
                