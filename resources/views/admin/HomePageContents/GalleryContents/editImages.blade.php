Images
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header">
                    {{-- <div class="row">
                        <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Image</h3></div>
                        <div class="col-md-2"><a class="btn btn-primary" href="viewimage">View</a></div>
                    </div> --}}
                </div>
                <div class="card-body">
                    @include('errors')
                    <form action="{{('/addnewimages')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputImageName" type="text" name="image_name" placeholder="" required>
                                    <label for="inputImageName">Image Name</label>
                                    <span class="error-message">
                                        @error('image_name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputImage" type="file" name="image" placeholder="" required>
                                    <label for="inputImage">Select Image</label>
                                    <span class="error-message">
                                        @error('image')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                            </div>
                        
                    <div class="mt-4 mb-0">
                        <button class="btn btn-primary" type="submit">SAVE</button>
        
                    </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"></div>
                </div>
            </div>
        </div>
    </div>
</div>
