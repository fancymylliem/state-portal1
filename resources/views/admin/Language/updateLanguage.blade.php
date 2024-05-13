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
            <div id="layoutAuthentication_content">
                @include('errors')
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Add New Language</h3></div>
                                    <div class="card-body">
                                        <form action="{{'/updatelanguage/'.$id=$lang->lang_id}}" method="POST" id="postLang">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputLanguage" type="text" name="language" value="{{$lang->language}}" placeholder="Health Department" value="" />
                                                <label for="inputLanguage">Language Name</label>
                                                <span class="error-message">
                                                    @error('language')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" onclick="formsubmit(event);">UPDATE</button> 
                                            </div>
                                        </form>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
            </div>
        </div>
        <script>
            function formsubmit(e){
                e.preventDefault();
                var lang = document.getElementById('inputLanguage');
                var msg = confirm('Are you sure you want to update ?');
                if(msg){
                    var form = document.getElementById('postLang');
                    form.submit();
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
