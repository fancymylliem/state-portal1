<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Update Tender</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
</head>
<body>
    <main>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <div class="row">
                                <div class="col"><h3 class="text-center font-weight-light my-4">Update Tender</h3></div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('errors')
                            <form action="{{('/updatetender/'.$tender->tender_id)}}" method="POST" enctype="multipart/form-data" id="formsubmit">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputTitle" name="title" type="text" value="{{$tender->title}}" placeholder="Enter the title for the Tender" />
                                    <label for="inputTitle">Title</label>
                                    <span class="message">
                                        @error('title')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-select" name="department" id="dept" aria-label="select Department">
                                            <option>select Department</option>
                                            @foreach ($depts as $dept)
                                            <option selected value="{{$tender->dept_id}}">{{$dept->department_name}}</option>  
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
                                    <input class="form-control" id="inputrefno" name="ref_no" type="text" value="{{$tender->ref_no}}" placeholder="00/ABC/99" />
                                    <label for="inputrefno">Reference Number:</label>
                                    <span class="message">
                                        @error('ref_no')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputreldate" name="release_date" type="date" value="{{$tender->release_date}}" placeholder="Release Date of the Tender" />
                                    <label for="inputreldate">Release Date</label>
                                    <span class="message">
                                        @error('release_date')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputLastdate" name="last_date" type="date" value="{{$tender->last_date}}" placeholder="Last Date for the tender" />
                                    <label for="inputlastdate">Last Date</label>
                                    <span class="message">
                                        @error('last_date')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputopendate" name="opening_date" type="date" value="{{$tender->opening_date}}" placeholder="Opening Date for the Tender" />
                                    <label for="inputopendate">Opening Date</label>
                                    <span class="message">
                                        @error('opening_date')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputpdf" name="pdf" type="file" value="{{$tender->pdf}}" placeholder="Upload PDF File" />
                                    <label for="inputpdf">Upload PDF</label>
                                    <span class="message">
                                        @error('pdf')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                
                                
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button class="btn btn-primary" type="submit" onclick="confirmation(event);">UPDATE</button></div>
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