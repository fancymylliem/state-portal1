<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="{{url('js/scripts.js')}}"></script>

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

       <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                     <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a class="btn btn-light" href="superadmindashboard"><i class="fa-solid fa-arrow-left"> </i> Go Back to Dashboard</a></li>
                    </ol>
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Gallery Videos</h3></div>
                        <div class="card-body">
                            <table class="table" id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Video Name</th>
                                        <th>Video Clips</th>
                                        <th>Links</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $data)
                                    <tr>
                                        <td>{{$data->video_name}}</td>
                                        <td>{{$data->video}}</td>
                                        <td>{{$data->link}}</td>
                                        <td><a class="btn btn-warning" href="editvideo/{{$id=$data->video_id}}">Edit</a></td>
                                        <td><a class="btn btn-danger" href="deletevideo/{{$id=$data->video_id}}">Delete</a></td>
                                    </tr>
                                        
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
        </div>
       </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        