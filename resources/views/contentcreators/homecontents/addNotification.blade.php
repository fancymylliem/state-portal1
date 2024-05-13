Notification
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Notification</h3></div>
                            <div class="col-md-2"><a href="viewnotification" class="btn btn-primary">View List</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('errors')
                        <form action="{{('/addnewnotification')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputTitle" name="title" type="text" placeholder="Enter the title for the Notification" />
                                <label for="inputTitle">Title</label>
                                <span>
                                    @error('title')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <select class="form-select" name="department" id="dept" aria-label="select Department">
                                        <option selected>select Department</option>
                                        @foreach ($depts as $dept)
                                        <option value="{{$dept->dept_id}}">{{$dept->department_name}}</option>  
                                        @endforeach
                                      </select>
                                      <span class="error-message">
                                        @error('department')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputnotino" name="noti_no" type="text" placeholder="00/ABC/99" />
                                <label for="inputnotino">Notification Number:</label>
                                <span>
                                    @error('noti_no')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputreldate" name="release_date" type="date" placeholder="Release Date of the Notification" />
                                <label for="inputreldate">Release Date</label>
                                <span>
                                    @error('release_date')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            
            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputpdf" name="noti_pdf" type="file" placeholder="Upload PDF File" />
                                <label for="inputpdf">Upload PDF</label>
                                <span>
                                    @error('noti_pdf')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            
                            
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Add</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        {{-- <div class="small"><a href="">Have an account? Go to login</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>