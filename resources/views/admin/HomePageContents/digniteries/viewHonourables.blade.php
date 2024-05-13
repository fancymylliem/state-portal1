
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                <meta name="description" content="" />
                <meta name="author" content="" />
                <title>View Honourable Dignitaries</title>
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
                                    <div class="col-lg-9">
                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Honourable Dignitaries</h3></div>
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Designation</th>
                                                            <th>Photo</th>
                                                            <th>Operation</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($hon as $data)
                                                        <tr>
                                                            <td>{{$data->name}}</td>
                                                            <td>{{$data->post}}</td>
                                                            <td class="" ><img src="{{ asset('uploads/assets/gallery/honourable/')}}/{{$data->image}}" style="height:4rem;width:4rem;"/></td>
                                                            <td><a class="btn btn-warning" href="edithonourable/{{$id=$data->hon_id}}">Edit</a>
                                                            <a class="btn btn-danger" href="deletehon/{{$id=$data->hon_id}}">Delete</a></td>

                                                        </tr>
                                                            
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer text-center py-3">
                                                <div class="small"><a class="btn btn-outline-primary" href="addhonourable">Add New</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                <script src="js/scripts.js"></script>
                
            </body>
        </html>
        