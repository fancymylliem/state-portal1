Spotlights
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h3 class="text-center font-weight-light my-4">Spotlights</h3>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="viewspot" class="btn btn-primary">View List</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('errors')
                                    <form action="{{ ('addnewspot') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Title Input -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputTitle" name="title" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputTitle">Title</label>
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <!-- Description Input -->
                                        <h4>Description</h4>
                                        <div class="form-floating mb-3">
                                            <textarea name="description" id="" cols="100" rows="6"></textarea>
                                            <span>
                                                @error('description')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        <!-- Availability Options -->
                                        <h4>Availability of Form Details</h4>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability" id="flexRadioDefault1" onclick="showUrl();">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                Online Availability
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability" id="flexRadioDefault2" onclick="showDownload();">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                Downloadable
                                                </label>
                                            </div>
                                            <div class="form-floating mb-3" id="inputurl" style="display: none;">
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
                                        <!-- Keywords Input -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputKeywords" name="keywords" type="text" placeholder="Enter keywords" />
                                            <label for="inputKeywords">Keywords</label>
                                            @error('keywords')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <!-- Publish Select Dropdown -->
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
                                        <!-- Language Select Dropdown -->
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
                                        <!-- Save Button -->
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-block" type="submit">SAVE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{url('js/scripts.js')}}"></script>
</body>
</html>
