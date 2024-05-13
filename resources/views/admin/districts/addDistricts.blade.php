<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Districts</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{url('style/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">   
                    <div class="card-body">
                        <!-- MODAL STARTED-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Districts</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewdist')}}" method="POST" enctype="multipart/form-data" id="formsubmit">
                                        <div class="modal-body">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputDistname" type="text" name="dist_name" placeholder="" required>
                                                    <label for="inputDistname">District Name</label>
                                                    <span class="error-message">
                                                        @error('dist_name')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputDistHead" type="text" name="dist_head" placeholder="" required>
                                                    <label for="inputDistHead">District Headquarter</label>
                                                    <span class="error-message">
                                                        @error('dist_head')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputArea" type="text" name="area" placeholder="" required>
                                                    <label for="inputArea">Area (in sq km)</label>
                                                    <span class="error-message">
                                                        @error('area')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPopulation" type="text" name="population" placeholder="" required>
                                                    <label for="inputPopulation">Population</label>
                                                    <span class="error-message">
                                                        @error('population')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" onclick="confirmation(event);">ADD</button>
                                                <button class="btn btn-primary" type="reset">CLEAR</button>
                                            </div>
                                            <div class="mt-4 mb-0">   
                                                <a href="viewdist" class="btn btn-primary btn-sm text-left">VIEW</a>  
                                                <a href="viewdist" class="btn btn-primary btn-sm text-left">UPDATE</a>    
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('js/scripts.js')}}"></script>
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
</body>
</html>
