<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Update Spotlights</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        {{-- @include('top.header') --}}           
            <div id="layoutAuthentication_content">
                @include('errors')
                <main>
                    <div class="row justify-content-center ">
                      <div class="col-lg-10">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Spotlights</h3></div>
                            <div class="card-body">
                                @include('errors')
                                <form action="{{('/updatespot/'.$spot->content_id)}}" method="POST" enctype="multipart/form-data" id="formsubmit">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputLastName" name="title" type="text" value="{{$act->title}}" placeholder="Enter the title of the scheme" />
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
                                                <input class="form-control" id="inputShortTitle" name="short_title" type="text" value="{{$act->short_title}}" placeholder="Enter the title of the scheme" />
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
                                                <input class="form-control" id="inputExtent" name="extent" type="text" value="{{$act->extent}}" placeholder="Enter the title of the scheme" />
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
                                                <input class="form-control" id="inputCDate" name="commencement_date" type="date" value="{{$act->commencement_date}}" placeholder="Enter the title of the scheme" />
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
                                                <textarea class="" name="act_objective"  id="" cols="60" rows="8">{{$act->act_objective}}</textarea>
                                                <label for="inputObjective"></label>
                                                {{-- <input class="form-control" id="inputObjective" name="act_objective" type="text" value="{{$act->act_objective}}" placeholder="Enter the title of the scheme" /> --}}
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
                                                <option>select Language</option>
                                                @foreach ($language as $l)
                                                {{-- <option value="{{$l->lang_id}}">{{$l->language}}</option>   --}}
                                                <option selected value="{{$act->lang_id}}">{{$l->language}}</option>  
                                                @endforeach
                                              </select>
                                              <span class="error-message">
                                                @error('language')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <h4>Availability of Act Details</h4>
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
                                                <input class="form-control" id="" name="url" type="text" value="{{$act->url}}" placeholder="Enter the title of the scheme" />
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
                                                <input class="form-control" id="inputpdf" name="pdf" type="file" value="{{$act->pdf}}" placeholder="Upload PDF" />
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
                                                <input class="form-control" id="inputKeywords" name="keywords" type="text" value="{{$act->keywords}}" placeholder="Enter the title of the scheme" />
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
                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit" onclick="confirmation(event);">UPDATE</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                {{-- <div class="small"><a href="">Have an account? Go to login</a></div> --}}
                            </div>
                        </div>
                      </div>
                </div>
                </main>
            </div>
            <script>
                function confirmation(e){
                    e.preventDefault();
                    var c = confirm('Are you sure you want this update ?');
                    if(c){
                        var form = document.getElementById('formsubmit');
                        form.submit();
                    }
                }
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
