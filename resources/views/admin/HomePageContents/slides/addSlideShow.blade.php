slide show
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><div class="row">
                    <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Slides</h3></div>
                    <div class="col-md-2"><a class="btn btn-primary" href="viewslide">View List</a></div>
                </div></div>
                <div class="card-body">
                    @include('errors')
                    <form action="{{('/addnewslide')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputSlideName" type="text" name="slide_name" placeholder="" required>
                                        <label for="inputSlideName">Slide Header</label>
                                        <span class="error-message">
                                        @error('slide_name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputAbout" type="text" name="about" placeholder="" required>
                                    <label for="inputAbout">About</label>
                                    <span class="error-message">
                                        @error('about')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputImage1" type="file" name="image1" placeholder="" required>
                                        <label for="inputImage1">Select Image</label>
                                        <span class="error-message">
                                        @error('image1')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                            </div>
                        
                    <div class="mt-4 mb-0">
                        <button class="btn btn-primary" type="submit">Create</button>
        
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
