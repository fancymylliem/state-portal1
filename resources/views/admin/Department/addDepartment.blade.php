<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add New Department</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                @include('errors')
                <main>
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h3 class="text-center font-weight-light my-4">Add New Department</h3>
                                        <a href='admindashboard' role="button" class="btn-close" aria-label="close"></a>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{'/adddepartment'}}" method="POST" id="formsubmit">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputDeptName" type="text" name="department_name" placeholder="Health Department" value="" />
                                                {{-- {{$department->department_name}} --}}
                                                <label for="inputDeptName">Department Name</label>
                                                <span class="error-message">
                                                    @error('department_name')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            {{-- <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <textarea class="form-control" name="about_dept" id="" cols="30" rows="10"></textarea>
                                                <label for="inputPassword">About</label>
                                            </div> --}}
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" onclick="confirmation(event);">ADD</button>
                                                <button href="#" class="btn btn-outline-info" onclick="view(event);">view</button>
                                            </div>
                                        </form>
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
            function confirmation(e){
                e.preventDefault();
                var c = confirm('Are you sure ?');
                if(c){
                    var form = document.getElementById('formsubmit');
                    form.submit();
                }
            }
            function view(e){
                e.preventDefault();
                document.getElementById('displaycat').style.display = "block";
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
