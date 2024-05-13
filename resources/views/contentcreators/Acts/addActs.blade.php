Acts
<div id="layoutAuthentication">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Act</h3></div>
                                <div class="col-md-2"><a href="viewact" class="btn btn-primary">View List</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('errors')
                            <form action="{{('/addnewact')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-select" name="department" id="dept" aria-label="select Department">
                                            <option selected>select Department</option>
                                            @foreach ($depts as $dept)
                                            <option value="{{$dept->dept_id}}">{{$dept->department_name}}</option>  
                                            @endforeach
                                          </select>
                                          <span class="error-message">
                                            @error('department')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                
                                {{-- <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-select" name="district" multiple id="dept" aria-label="select District" style="width:300px;">
                                            <option selected>select District</option>
                                            @foreach ($districts as $d)
                                            <option value="{{$d->dist_id}}">{{$d->district_name}}</option>  
                                            @endforeach
                                          </select>
                                          <span class="error-message">
                                            @error('district')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div> --}}
                                
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputTitle" name="title" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputTitle">Title</label>
                                            <span>
                                                @error('title')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <div class="form-floating mb-3">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputNumber" name="number" type="text" placeholder="Enter the title of the scheme" />
                                                <label for="inputNumber">Number</label>
                                                <span>
                                                    @error('number')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <div class="form-floating mb-3">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputYear" name="year" type="text" placeholder="Enter the title of the scheme" />
                                                <label for="inputYear">Year</label>
                                                <span>
                                                    @error('year')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputShortTitle" name="short_title" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputShortTitle">Short Title</label>
                                            <span>
                                                @error('short_title')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputExtent" name="extent" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputExtent">Extent</label>
                                            <span>
                                                @error('extent')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputCDate" name="commencement_date" type="date" placeholder="Enter the title of the scheme" />
                                            <label for="inputCDate">Commencement Date</label>
                                            <span>
                                                @error('commencement_date')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <h3>Act Objective</h3>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <textarea name="act_objective" id="" cols="100" rows="6"></textarea>
                                            {{-- <input class="form-control" id="inputObjective" name="act_objective" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputObjective">Act Objective</label> --}}
                                            <span>
                                                @error('act_objective')
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
                                {{-- <h4>Availability of Act Details</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="showUrl();">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Online Availability
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onclick="showDownload();">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Downloadable
                                    </label>
                                  </div>
                                <div class="form-floating mb-3" id="inputurl" style="display: none;">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="" name="url" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputUrl">Paste the URL here</label>
                                            <span>
                                                @error('url')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row mb-3" id="inputdownload" style="display: block;">
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
<script type="text/javascript">
    function showUrl(){
        document.getElementById('inputurl').style.display = 'block';
        document.getElementById('inputdownload').style.display = 'none';
    }
    function showDownload(){
        document.getElementById('inputurl').style.display = 'none';
        document.getElementById('inputdownload').style.display = 'block';
    }
  
</script>

