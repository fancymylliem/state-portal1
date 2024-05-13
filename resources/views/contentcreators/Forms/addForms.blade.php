Forms
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10"><h3 class="text-center font-weight-light my-4">Add New Form</h3></div>
                                <div class="col-md-2"><a href="viewform" class="btn btn-primary">View List</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('errors')
                            <form action="{{('/addnewform')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-select" name="department" id="dept" aria-label="select Department">
                                            <option selected onchange="">select Department</option>
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
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-select" name="org_name" id="org" aria-label="select Organisation">
                                            <option selected>Organisation Name</option>
                                          </select>
                                          <span class="error-message">
                                            @error('org_name')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-select" name="district" id="dist" aria-label="select Department" style="width: 20em;">
                                            <option selected>select District</option>
                                            {{-- <option value="">select all</option>   --}}
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
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputLastName" name="title" type="text" placeholder="Enter the title of the scheme" />
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
                                            <input class="form-control" id="inputFormNo" name="form_no" type="text" placeholder="" />
                                            <label for="inputFormNo">Form Number(if any)</label>
                                            <span>
                                                @error('form_no')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputClassification" name="classification" type="text" placeholder="" />
                                            <label for="inputClassification">Classification</label>
                                            <span>
                                                @error('classification')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-select" name="category" id="dept" aria-label="select Category">
                                            <option selected>Category</option>
                                            {{-- <option value="">select all</option>   --}}
                                            @foreach ($category as $c)
                                            <option value="{{$c->category_id}}">{{$c->category_name}}</option>  
                                            @endforeach
                                          </select>
                                          <span class="error-message">
                                            @error('category')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputAssociate" name="associate" type="text" placeholder="" />
                                            <label for="inputAssociate">Associate Service</label>
                                            <span>
                                                @error('associate')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <h3>Description</h3>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea name="desc" id="" cols="60" rows="6"></textarea>
                                            {{-- <label for="inputpdf">Description</label> --}}
                                            <span>
                                                @error('desc')
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
                                <h4>Availability of Form Details</h4>
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
                                </div>
                                
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
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputKeywords" name="keywords" type="text" placeholder="" />
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
<script>
    $('#dept').change(function(){
        $.ajax({
            url:'/getorganisationbydeptid/'+$('#dept option:selected').val(),
            type:'GET',
            dataType:'json',
            success:function(data){
                $('#org').html('');
                $.each(data,function(key,value){
                    $('#org').append('<option value="'+ value.org_id + '">'+ value.org_name + '</option>');
                })
            },
            error:function(respose){
                alert(JSON.stringify(respose));
            }
        
            
        });
    })
</script>
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