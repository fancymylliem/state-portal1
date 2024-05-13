Services
<div id="layoutAuthentication">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add new Service</h3></div>
                                <div class="col-md-2"><a href="viewservice" class="btn btn-primary">View List</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('errors')
                            <form action="{{('/addnewservice')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="row mb-3"> --}}
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" name="department" type="text" placeholder="Enter the department" />
                                            <label for="inputFirstName">Department</label>
                                            <span>
                                                @error('department')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputLastName" name="title" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputLastName">Title</label>
                                            <span>
                                                @error('title')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                {{-- </div> --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" name="desc" type="text" placeholder="Enter the Description" />
                                    <label for="inputEmail">Description</label>
                                    <span>
                                        @error('desc')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                {{-- <div class="form-floating mb-3"> --}}
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputcatagory" name="catagory" type="text" placeholder="Catagory" />
                                        <label for="inputcatagory">Catagory</label>
                                        <span>
                                            @error('catagory')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                {{-- </div> --}}
                                <div class="form-floating mb-3">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="htavail" type="text" placeholder="How to Avail" />
                                            <label for="inputhtavail">How to Avail</label>
                                            <span>
                                                @error('htavail')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                </div>
                                    <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputsponsor" name="wtcontact" type="text" placeholder="Whom to contact" />
                                                <label for="inputcontact">Whom to Contact</label>
                                                <span>
                                                    @error('wtcontact')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputassoservice" name="assoservice" type="text" placeholder="Associated Services" />
                                                <label for="inputassoservice">Associated Services</label>
                                                <span>
                                                    @error('assoservice')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                    </div>   
                                    <div class="form-floating mb-3">                
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputpdf" name="pdf" type="file" placeholder="Upload PDF" />
                                                <label for="inputpdf">Upload PDF</label>
                                                <span>
                                                    @error('pdf')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
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
</div>