<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New MCS</h3></div>
                        <div class="col-md-2"><a class="btn btn-primary" href="viewmcs">View List</a></div>
                    </div>    
                </div>
                <div class="card-body">
                    <form action="{{('/addnewmcs')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            {{-- <div class="col-md-6"> --}}
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputMcssname" type="text" name="mcs_name" placeholder="" required>
                                        <label for="inputMcssname">MCS Name</label>
                                        <span class="error-message">
                                        @error('mcs_name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPosition" type="text" name="position" placeholder="" required>
                                        <label for="inputPosition">Position</label>
                                        <span class="error-message">
                                        @error('position')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                            {{-- </div> --}}
                            {{-- <div class="col-md-6"> --}}
                                <div class="form-floating mb-3">
                                   <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPresentPost" type="text" name="present_post" placeholder="" required>
                                    <label for="inputPresentPost">Present Post</label>
                                    <span class="error-message">
                                        @error('present_post')
                                            {{$message}}
                                        @enderror
                                    </span>
                                   </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputJoining" type="date" name="joining" placeholder="" required>
                                        <label for="inputJoining">Joining Date</label>
                                        <span class="error-message">
                                        @error('joining')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                            {{-- </div> --}}
                        </div>
                        <div class="row mb-3">
                            {{-- <div class="col-md-6"> --}}
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputAssets" type="file" name="assets" placeholder="" required>
                                    <label for="inputAssets">Upload assets</label>
                                    <span class="error-message">
                                        @error('assets')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                            {{-- </div>  --}}
                        </div>
                    <div class="mt-4 mb-0">
                        <button class="btn btn-primary" type="submit">ADD</button>
        
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
