Profile_form
<div id="layoutAuthentication">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add Profile Form</h3></div>
                                <div class="col-md-2"><a href="viewact" class="btn btn-primary">View List</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('errors')
                            <form action="{{('/addnewprofileform')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputName" name="name" type="text" placeholder="Enter your name" />
                                            <label for="inputTitle">Name</label>
                                            <span>
                                                @error('name')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputDesignation" name="designation" type="text" placeholder="Enter your Designation" />
                                            <label for="inputDesignation">Designation</label>
                                            <span>
                                                @error('designation')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputAssume_office" name="assume_office" type="text" placeholder="Enter the assume_office" />
                                            <label for="inputAssume_office">Assume_Office</label>
                                            <span>
                                                @error('assume_office')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputImg" name="image" type="text" placeholder="Enter the image_path" />
                                            <label for="inputImg">Image_path</label>
                                            <span>
                                                @error('image_path')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputDate" name="date_of_birth" type="date" placeholder="Enter your date of birth" />
                                            <label for="inputDate">Date of Birth</label>
                                            <span>
                                                @error('date_of_birth')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputBirth_place" name="birth_place" type="text" placeholder="Enter your Birth Place" />
                                            <label for="inputBirth_place">Birth_place</label>
                                            <span>
                                                @error('birth_place')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputEducation" name="education" type="text" placeholder="Enter the Education" />
                                            <label for="inputEducation">Education</label>
                                            <span>
                                                @error('education')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputFathername" name="fathername" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputFathername">Father Name</label>
                                            <span>
                                                @error('fathername')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputMothername" name="mothername" type="text" placeholder="Enter your Mother name" />
                                            <label for="inputMothername">Mother Name</label>
                                            <span>
                                                @error('mothername')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputMaritalstatus" name="maritalstatus" type="text" placeholder="Enter your Marital status" />
                                            <label for="inputMaritalstatus">Maritals tatus</label>
                                            <span>
                                                @error('marital_status')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputChildren" name="children" type="text" placeholder="Enter your Children" />
                                            <label for="inputChildren">Children</label>
                                            <span>
                                                @error('children')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputProfession" name="profession" type="text" placeholder="Enter your Profession" />
                                            <label for="inputProfession">Profession</label>
                                            <span>
                                                @error('profession')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputPolcareer" name="polcareer" type="text" placeholder="Enter your Career" />
                                            <label for="inputPolcareer">pol_career</label>
                                            <span>
                                                @error('polcareer')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputSoc_activities" name="soc_activities" type="text" placeholder="Enter soc_activities" />
                                            <label for="inputTitle">Soc_activities</label>
                                            <span>
                                                @error('soc_activities')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputPublication" name="publication" type="text" placeholder="Enter Publication" />
                                            <label for="inputPublication">Publication</label>
                                            <span>
                                                @error('publication')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputAward" name="award" type="text" placeholder="Enter the Award" />
                                            <label for="inputAward">Award</label>
                                            <span>
                                                @error('award')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputForeign_travel" name="foreign_travel" type="text" placeholder="Enter Foreign_travel" />
                                            <label for="inputForeign_travel">Foreign_travel</label>
                                            <span>
                                                @error('foreign_travel')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputHobbies" name="hobbies" type="text" placeholder="Enter your hobbies" />
                                            <label for="inputHobbies">Hobbies</label>
                                            <span>
                                                @error('hobbies')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputAdd_info" name="add_info" type="text" placeholder="Enter the Add info" />
                                            <label for="inputAdd_info">Information</label>
                                            <span>
                                                @error('add_info')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputAddress" name="address" type="text" placeholder="Enter your Address" />
                                            <label for="inputAddress">Address</label>
                                            <span>
                                                @error('address')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputPhonenumber" name="phonenumber" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputPhonenumber">Phone number</label>
                                            <span>
                                                @error('phone_number')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputFaxnumber" name="faxnumber" type="text" placeholder="Enter the Fax Number" />
                                            <label for="inputFaxnumber">Fax_number</label>
                                            <span>
                                                @error('fax_number')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputMobilenumber" name="mobilenumber" type="text" placeholder="Enter the mobile number" />
                                            <label for="inputMobilenumber">Mobile number</label>
                                            <span>
                                                @error('mobilenumber')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputEmail" name="email" type="text" placeholder="Enter the email" />
                                            <label for="inputEmail">Email</label>
                                            <span>
                                                @error('email')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputWebsite" name="website" type="text" placeholder="Enter the website" />
                                            <label for="inputWebsite">Website</label>
                                            <span>
                                                @error('website')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputKeywords" name="keywords" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputKeywords">Keywords</label>
                                            <span>
                                                @error('keywords')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-select" name="language" id="lang" aria-label="select Language">
                                            <option selected>select Language</option>
                                            @foreach ($language as $l)
                                            <option value="{{$l->lang_id}}">{{$l->language}}</option>  
                                            @endforeach
                                          </select>
                                          <span class="error-message">
                                            @error('language')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="publish" id="id" aria-label="Select publish">
                                        <option selected disabled>Publish</option>
                                        @foreach ($pub as $p)
                                            <option value="{{ $p->publish_id }}">{{ $p->publish }}</option>  
                                        @endforeach
                                    </select>
                                    @error('publish')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">SAVE</button></div>
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
{{--<script type="text/javascript">
    function showUrl(){
        document.getElementById('inputurl').style.display = 'block';
        document.getElementById('inputdownload').style.display = 'none';
    }
    function showDownload(){
        document.getElementById('inputurl').style.display = 'none';
        document.getElementById('inputdownload').style.display = 'block';
    } 
</script>--}}
