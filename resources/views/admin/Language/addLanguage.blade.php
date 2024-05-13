<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add New Language</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
                @include('errors')
                <main>
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="text-center font-weight-light my-4">Add New Language</h3>
                                    <a href='admindashboard' role="button" class="btn-close" aria-label="close"></a>
                                </div>
                                <div class="card-body">
                                    <form action="{{'/newlanguage'}}" method="POST" id="postLanguage">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputLanguage" type="text" name="language" placeholder="Health Department" required/>
                                            <label for="inputLanguage">Language Name</label>
                                            <span class="error-message">
                                                @error('language')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit" onclick="formsubmit(event);">ADD</button> 
                                            <button class="btn btn-outline-info" type="" onclick="view(event);">View</button> 
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div id="view" style="display:none;">
                        @include('admin.Language.viewLanguage');
                    </div>
                </main>
        </div>
        <script>
            function formsubmit(e){
                e.preventDefault();
                // var lang = document.getElementById('inputLanguage').value;
                var msg = confirm('Are you sure you want to add new language ?');
                    if(msg){
                    var form = document.getElementById('postLanguage');
                    form.submit();
                    }
            }
            function view(e){
            e.preventDefault();
            document.getElementById('view').style.display = 'block';
        }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('js/scripts.js')}}"></script>
    </body>
</html>
