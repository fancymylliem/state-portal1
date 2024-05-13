Tenders
@include('errors')

<main>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Tender</h3></div>
                            <div class="col-md-2"><a href="viewtender" class="btn btn-primary">View List</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{('/addnewtender')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputTitle" name="title" type="text" placeholder="Enter the title for the Tender" />
                                <label for="inputTitle">Title</label>
                                <span class="message">
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
                                <input class="form-control" id="inputrefno" name="ref_no" type="text" placeholder="00/ABC/99" />
                                <label for="inputrefno">Reference Number:</label>
                                <span class="message">
                                    @error('ref_no')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputreldate" name="release_date" type="date" placeholder="Release Date of the Tender" />
                                <label for="inputreldate">Release Date</label>
                                <span class="message">
                                    @error('release_date')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputLastdate" name="last_date" type="date" placeholder="Last Date for the tender" />
                                <label for="inputlastdate">Last Date</label>
                                <span class="message">
                                    @error('last_date')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputopendate" name="opening_date" type="date" placeholder="Opening Date for the Tender" />
                                <label for="inputopendate">Opening Date</label>
                                <span class="message">
                                    @error('opening_date')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputopendate" name="ldate_display" type="date" placeholder="Last Date for the Tender" />
                                <label for="inputopendate">Last Date for Display</label>
                                <span class="message">
                                    @error('ldate_display')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputpdf" name="pdf" type="file" placeholder="Upload PDF File" />
                                <label for="inputpdf">Upload PDF</label>
                                <span class="message">
                                    @error('pdf')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            
                            
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary" type="submit">Add</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        {{-- <div class="small"><a href="">Have an account? Go to login</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
</main>