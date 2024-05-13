<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update Council Of Ministers</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        {{-- @include('top.header') --}}
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                @include('errors')
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                <div class="row">
                                                    <div class="col-md-10"><h3 class="text-center">Council of Ministers</h3></div>                        
                                                </div>
                                                <div class="card-body">
                                                    <form action="{{('/addnewcom')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        {{-- <div class="row mb-3"> --}}
                                                            <div class="form-floating mb-3">
                                                                <div class="form-floating mb-3 mb-md-0">
                                                                    <input class="form-control" id="inputMinisterame" type="text" value="{{$com->minister_name}}" name="minister_name" value="" placeholder="" required>
                                                                    <label for="inputMinisterame">Minister Name</label>
                                                                    <span class="error-message">
                                                                        @error('minister_name')
                                                                            {{$message}}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            
                                                            {{-- </div> --}}
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="inputDesignation" type="text" value="{{$com->designation}}" name="designation" value="" placeholder="" required>
                                                                        <label for="inputDesignation">Designation</label>
                                                                        <span class="error-message">
                                                                            @error('designation')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="inputParty" type="text" value="{{$com->party}}" name="party" value="" placeholder="" required>
                                                                        <label for="inputParty">Party</label>
                                                                        <span class="error-message">
                                                                            @error('party')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" id="inputDistrict" type="text" value="{{$com->district}}" name="district" value="" placeholder="" required>
                                                                        <label for="inputDistrict">District</label>
                                                                        <span class="error-message">
                                                                            @error('district')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="inputConstituency" type="text" value="{{$com->constituency}}" name="constituency" value="" placeholder="" required>
                                                                        <label for="inputConstituency">Constituency</label>
                                                                        <span class="error-message">
                                                                            @error('constituency')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="inputAssembly" type="text" value="{{$com->assembly}}" name="assembly" value="" placeholder="" required>
                                                                        <label for="inputAssembly">Assembly</label>
                                                                        <span class="error-message">
                                                                            @error('assembly')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>  
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" id="inputNativePlace" type="text" value="{{$com->nativeplace}}" name="nativeplace" value="" placeholder="" required>
                                                                        <label for="inputNativePlace">Native Place</label>
                                                                        <span class="error-message">
                                                                            @error('nativeplace')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            {{-- <div class="row mb-3"> --}}
                                                                <div class="form-floating mb-3">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <textarea class="form-control" name="education" id="inputEducation" cols="30" rows="10">{{$com->education}}</textarea>
                        
                                                                        {{-- <input class="form-control" id="inputEducation" type="text" value="{{$com->}}" name="education" value="" placeholder="" required> --}}
                                                                        <label for="inputEducation">Education</label>
                                                                        <span class="error-message">
                                                                            @error('education')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <textarea class="form-control" name="political" id="inputPoliticalCareer" cols="30" rows="10">{{$com->political}}</textarea>
                        
                                                                        {{-- <input class="form-control" id="inputPoliticalCareer" type="text" value="{{$com->}}" name="political" value="" placeholder="" required> --}}
                                                                        <label for="inputPoliticalCareer">Political Career</label>
                                                                        <span class="error-message">
                                                                            @error('political')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div> 
                                                                <div class="form-floating mb-3">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" id="inputCAddress" type="text" value="{{$com->communication}}" name="communication" value="" placeholder="" required>
                                                                        <label for="inputCAddress">Communication Address</label>
                                                                        <span class="error-message">
                                                                            @error('communication')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" id="inputPAddress" type="text" value="{{$com->permanent}}" name="permanent" value="" placeholder="" required>
                                                                        <label for="inputPAddress">Permanent Address</label>
                                                                        <span class="error-message">
                                                                            @error('permanent')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div> 
                                                            {{-- </div> --}}
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="inputOccupation" type="text" value="{{$com->occupation}}" name="occupation" value="" placeholder="" required>
                                                                        <label for="inputOccupation">Occupation</label>
                                                                        <span class="error-message">
                                                                            @error('occupation')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="inputMaritalStatus" type="text" value="{{$com->marital}}" name="marital" value="" placeholder="" required>
                                                                        <label for="inputMaritalStatus">Marital Status</label>
                                                                        <span class="error-message">
                                                                            @error('marital')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="form-floating mb-3">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <textarea class="form-control"  value="{{$com->additional}}" name="additional" id="inputAdditional" cols="30" rows="10">{{$com->additional}}</textarea>
                                                                        {{-- < class="form-control" id="inputAdditional" type="text" value="{{$com->}}" name="additional" value="" placeholder="" required> --}}
                                                                        <label for="inputAdditional">Additional Information</label>
                                                                        <span class="error-message">
                                                                            @error('additional')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="inputEmail" type="email" value="{{$com->email}}" name="email" value="" placeholder="" required>
                                                                        <label for="inputEmail">Email</label>
                                                                        <span class="error-message">
                                                                            @error('email')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="inputContactNo" type="text" value="{{$com->contact_number}}" name="contactno" value="" placeholder="" required>
                                                                        <label for="inputContactNo">Contact No</label>
                                                                        <span class="error-message">
                                                                            @error('contactno')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">
                                                                        <input class="form-control" id="inputPhoto" type="file" value="{{$com->photo}}" name="photo" value="" placeholder="" required>
                                                                        <label for="inputPhoto">Upload photo</label>
                                                                        <span class="error-message">
                                                                            @error('photo')
                                                                                {{$message}}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="">
                                                                <button class="btn btn-primary" type="submit">SAVE</button>
                                                
                                                            </div>
                                                    </form>
                                                </div>
                                                {{-- <div class="card-footer text-center py-3">
                                                    <div class="small"></div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    </body>
</html>
