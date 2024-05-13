Documents
<div id="layoutAuthentication_content">
    @include('errors')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Document</h3></div>
                                <div class="col-md-2"><a href="viewdocument" class="btn btn-primary">View List</a></div>
                            </div>
                    </div>
                        <div class="card-body">
                            <form action="{{('/addnewdocument')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
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
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputLastName" name="title" type="text" placeholder="Enter the title of the Act" />
                                            <label for="inputLastName">Title</label>
                                            <span>
                                                @error('title')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputcategory" name="category" type="text" placeholder="Enter the Category" />
                                            <label for="inputcategory">Category</label>
                                            <span>
                                                @error('category')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputyear" name="year" type="text" placeholder="Enter the Year" />
                                            <label for="inputyear">Year</label>
                                            <span>
                                                @error('year')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
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