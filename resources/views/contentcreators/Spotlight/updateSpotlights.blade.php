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
                                            <input class="form-control" id="inputTitle" name="title" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputTitle">Title</label>
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <h4>Description</h4>
                                        <div class="form-floating mb-3">
                                            <textarea name="description" id="" cols="100" rows="6"></textarea>
                                            <span>
                                                @error('description')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                       
                                        <h4>Availability of Form Details</h4>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability" id="flexRadioDefault1" onclick="showDownload(0);">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                Online Availability
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability" id="flexRadioDefault2" onclick="showDownload(1);">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                Downloadable
                                                </label>
                                            </div>
                                            <div class="form-floating mb-3" id="inputurl1" style="display: none;">
                                                <div class="form-floating mb-3">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="" name="url" type="text" placeholder="Enter url" />
                                                        <label for="inputUrl">Paste the URL here</label>
                                                        <span>
                                                            @error('url')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3" id="inputdownload1" style="display: none;">
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
                                            <input class="form-control" id="inputKeywords" name="keywords" type="text" placeholder="Enter keywords" />
                                            <label for="inputKeywords">Keywords</label>
                                            @error('keywords')
                                                {{ $message }}
                                            @enderror
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
                                      
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="language" id="lang" aria-label="Select language">
                                                <option selected disabled>Select Language</option>
                                                @foreach ($language as $l)
                                                    <option value="{{ $l->lang_id }}">{{ $l->language }}</option>  
                                                @endforeach
                                            </select>
                                            @error('language')
                                                {{ $message }}
                                            @enderror
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

<script>
function showDownload(x){
    if(x==0)
    {
        document.getElementById('inputurl1').style.display = 'block';
        document.getElementById('inputdownload1').style.display = 'none';
    }
    else
    {
        document.getElementById('inputurl1').style.display = 'none';
        document.getElementById('inputdownload1').style.display = 'block';
    }
}
</script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
