Citizen Charter
@include('errors')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Citizen Charter</h3></div>
                            <div class="col-md-2"><a href="viewcitizencharter" class="btn btn-primary">View List</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{('/addnewcitizencharter')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputTitle" name="title" type="text" placeholder="Enter the title for the Citizen Charter" />
                                <label for="inputTitle">Title</label>
                                <span>
                                    @error('title')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputpdf" name="cc_pdf" type="file" placeholder="Upload PDF File" />
                                <label for="inputpdf">Upload PDF</label>
                                <span>
                                    @error('cc_pdf')
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