Videos
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header">
                    {{-- <div class="row">
                        <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Video</h3></div>
                        <div class="col-md-2"><a class="btn btn-primary" href="viewvideo">View</a></div>
                    </div> --}}
                </div>
                <div class="card-body">
                    @include('errors')

                    <form action="{{('/addnewvideos')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputVideoName" type="text" name="video_name" placeholder="" required>
                                        <label for="inputVideoName">Video Name</label>
                                        <span class="error-message">
                                        @error('Video_name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputVideo" type="file" name="video" placeholder="">
                                        <label for="inputVideo">Select Video</label>
                                        <span class="error-message">
                                        @error('video')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputVideoLink" type="text" name="video_link" placeholder="" required>
                                        <label for="inputVideoLink">Add Video Link</label>
                                        <span class="error-message">
                                        @error('video_link')
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
