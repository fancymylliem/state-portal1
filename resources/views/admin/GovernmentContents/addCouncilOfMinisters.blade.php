<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="row">
                            <div class="col-md-10"><h3 class="text-center">Council of Ministers</h3></div>
                            <div class="col-md-2"><a href="viewcom" class="btn btn-primary">View List</a></div>
                        </div>
                        <div class="card-body">
                            <form action="{{('/addnewcom')}}" method="POST" enctype="multipart/form-data" id="formsubmit">
                                @csrf
                                {{-- <div class="row mb-3"> --}}
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputMinisterName" type="text" name="minister_name" value="" placeholder="" required>
                                            <label for="inputMinisterName">Minister Name</label>
                                            <span class="error-message">
                                                @error('minister_name')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputDesignation" type="text" name="designation" value="" placeholder="" required>
                                                <label for="inputDesignation">Designation</label>
                                                <span class="error-message">
                                                    @error('designation')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputParty" type="text" name="party" value="" placeholder="" required>
                                                <label for="inputParty">Party</label>
                                                <span class="error-message">
                                                    @error('party')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputDistrict" type="text" name="district" value="" placeholder="" required>
                                                <label for="inputDistrict">District</label>
                                                <span class="error-message">
                                                    @error('district')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputConstituency" type="text" name="constituency" value="" placeholder="" required>
                                                <label for="inputConstituency">Constituency</label>
                                                <span class="error-message">
                                                    @error('constituency')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputAssembly" type="text" name="assembly" value="" placeholder="" required>
                                                <label for="inputAssembly">Assembly</label>
                                                <span class="error-message">
                                                    @error('assembly')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>  
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputNativePlace" type="text" name="nativeplace" value="" placeholder="" required>
                                                <label for="inputNativePlace">Native Place</label>
                                                <span class="error-message">
                                                    @error('nativeplace')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <textarea class="form-control" name="education" id="inputEducation" cols="30" rows="10"></textarea>
                                                <label for="inputEducation">Education</label>
                                                <span class="error-message">
                                                    @error('education')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <textarea class="form-control" name="political" id="inputPoliticalCareer" cols="30" rows="10"></textarea>
                                                <label for="inputPoliticalCareer">Political Career</label>
                                                <span class="error-message">
                                                    @error('political')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div> 
                                        
                                    {{-- </div> --}}
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputOccupation" type="text" name="occupation" value="" placeholder="" required>
                                                <label for="inputOccupation">Occupation</label>
                                                <span class="error-message">
                                                    @error('occupation')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputMaritalStatus" type="text" name="marital" value="" placeholder="" required>
                                                <label for="inputMaritalStatus">Marital Status</label>
                                                <span class="error-message">
                                                    @error('marital')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row mb-3">
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <textarea class="form-control" name="additional" id="inputAdditional" cols="30" rows="10"></textarea>
                                                <label for="inputAdditional">Additional Information</label>
                                                <span class="error-message">
                                                    @error('additional')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputCAddress" type="text" name="communication" value="" placeholder="" required>
                                            <label for="inputCAddress">Communication Address</label>
                                            <span class="error-message">
                                                @error('communication')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPAddress" type="text" name="permanent" value="" placeholder="" required>
                                            <label for="inputPAddress">Permanent Address</label>
                                            <span class="error-message">
                                                @error('permanent')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div> 
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" value="" placeholder="" required>
                                                <label for="inputEmail">Email</label>
                                                <span class="error-message">
                                                    @error('email')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputContactNo" type="text" name="contactno" value="" placeholder="" required>
                                                <label for="inputContactNo">Contact No</label>
                                                <span class="error-message">
                                                    @error('contactno')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPhoto" type="file" name="photo" value="" placeholder="">
                                                <label for="inputPhoto">Upload photo</label>
                                                <span class="error-message">
                                                    @error('photo')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="">
                                        <button class="btn btn-primary" type="submit" onclick="confirmation(event);">SAVE</button>
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
    </div>
</div>
<script>
    function confirmation(e){
        e.preventDefault();
        var c = confirm('Are you sure ?');
        if(c){
            var form = document.getElementById('formsubmit');
            form.submit();
        }
    }
</script>