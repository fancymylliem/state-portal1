<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h3 class="text-center font-weight-light my-4">Add New IAS</h3>
                            </div>
                            <div class="col-md-2">
                                <a href="viewias" class="btn btn-primary">View List</a>
                            </div>
                        </div>

                    <div class="card-body">
                        <form action="{{('/addnewias')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                {{-- <div class="col-md-6"> --}}
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputiasname" type="text" name="ias_name" placeholder="" required>
                                            <label for="inputiasname">IAS Name</label>
                                            <span class="error-message">
                                                @error('ias_name')
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
                                {{-- </div>
                                <div class="col-md-6"> --}}
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
                            {{-- <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPhoto" type="file" name="photo" placeholder="" required>
                                        <label for="inputPhoto">Upload photo</label>
                                        <span class="error-message">
                                            @error('photo')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div> 
                            </div> --}}
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
