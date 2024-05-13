<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Content Creator | Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" style="overflow-x: hidden;">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="">Content Creator</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            {{-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> --}}
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="creatorsettings">Settings</a></li>
                        {{-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> --}}
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="creatorlogout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Official Site
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                My Contents
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" onclick="draft();" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Draft
                                    </a>
                                    <a class="nav-link collapsed" onclick="recheck();" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Recheck
                                    </a>
                                    <a class="nav-link collapsed" onclick="sent();" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Sent to Publisher
                                    </a>
                                    <a class="nav-link collapsed" onclick="reject();" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Rejected Contents
                                    </a>
                                    
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo">Add Acts</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addschemes" data-whatever="@mdo">Add Schemes</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addcircular" data-whatever="@mdo">Add Circular/OMs</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#adddocuments" data-whatever="@mdo">Add Documents</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addrules" data-whatever="@mdo">Add_Rule_&_Regulation</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addservices" data-whatever="@mdo">Add New Services</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addforms" data-whatever="@mdo">Add Forms</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addgovorder" data-whatever="@mdo">Add_Goverment_Order</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addspotlight" data-whatever="@mdo">Add Spotlight</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#profile_form" data-whatever="@mdo">Add Porfile_form</button></div>
                                    <div class="col">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#mapcategory" data-whatever="@mdo">Add Map Category</button></div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Creator Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Navigation Contents</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white text-decoration-none" href="homepagecontents">Create</a>
                                        {{-- <a class="small text-white text-decoration-none" href="viewcontent">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Category Contents</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white text-decoration-none" href="createcategorycontent">Create</a>
                                        {{-- <a class="small text-white text-decoration-none" href="viewcontent">View Details</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>           
                    </div>
                    <div class="row">
                        <div class="col-lg-10" id="draft" style="display: none;">
                            @include('contentcreators.checkcontents.draft')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10" id="recheck" style="display: none;">
                            @include('contentcreators.checkcontents.recheck')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10" id="sent" style="display: none;">
                            @include('contentcreators.checkcontents.sentToPublisher')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10" id="reject" style="display: none;">
                            @include('contentcreators.checkcontents.rejected')
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script>
            function draft(){
                document.getElementById('draft').style.display = "block";
                document.getElementById('recheck').style.display = "none";
                document.getElementById('sent').style.display = "none";
                document.getElementById('reject').style.display = "none";
            }
            function recheck(){
                document.getElementById('draft').style.display = "none";
                document.getElementById('recheck').style.display = "block";
                document.getElementById('sent').style.display = "none";
                document.getElementById('reject').style.display = "none";

            }
            function sent(){
                document.getElementById('draft').style.display = "none";
                document.getElementById('recheck').style.display = "none";
                document.getElementById('sent').style.display = "block";
                document.getElementById('reject').style.display = "none";

            }
            function reject(){
                document.getElementById('draft').style.display = "none";
                document.getElementById('recheck').style.display = "none";
                document.getElementById('sent').style.display = "none";
                document.getElementById('reject').style.display = "block";

            }

        </script>

<!-- START OF ACTS-->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Acts</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewact')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-2">
                                    <div class="form-floating mb-5 mb-md-2">
                                        <select class="form-select" name="department" id="dept" aria-label="select Department">
                                            <option selected>select Department</option>
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
                                
                                {{-- <div class="form-floating mb-3">
                                    <div class="form-floating mb-7 mb-md-4">
                                        <select class="form-select" name="district" multiple id="dept" aria-label="select District" style="width:300px;">
                                            <option selected>select District</option>
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
                                </div> --}}
                                
                                <div class="form-floating mb-3">
                                <div class="form-floating mb-5 mb-md-2">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputTitle" name="title" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputTitle">Title</label>
                                            <span>
                                                @error('title')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                    <div class="form-floating mb-5 mb-md-2">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputNumber" name="number" type="text" placeholder="Enter the title of the scheme" />
                                                <label for="inputNumber">Number</label>
                                                <span>
                                                    @error('number')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                    <div class="form-floating mb-5 mb-md-2">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputYear" name="year" type="text" placeholder="Enter the title of the scheme" />
                                                <label for="inputYear">Year</label>
                                                <span>
                                                    @error('year')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-2">
                                <div class="form-floating mb-5 mb-md-2">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputShortTitle" name="short_title" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputShortTitle">Short Title</label>
                                            <span>
                                                @error('short_title')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-2">
                                <div class="form-floating mb-5 mb-md-2">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputExtent" name="extent" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputExtent">Extent</label>
                                            <span>
                                                @error('extent')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-2">
                                <div class="form-floating mb-5 mb-md-2">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputCDate" name="commencement_date" type="date" placeholder="Enter the title of the scheme" />
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
                                <div class="form-floating mb-2">
                                <div class="form-floating mb-5 mb-md-2">
                                        <div class="form-floating">
                                            <textarea name="act_objective" id="" cols="60" rows="6"></textarea>
                                            {{-- <input class="form-control" id="inputObjective" name="act_objective" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputObjective">Act Objective</label> --}}
                                            <span>
                                                @error('act_objective')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-2">
                                <div class="form-floating mb-5 mb-md-2">
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
                                {{-- <h4>Availability of Act Details</h4>
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
                                </div> --}}
                                <div class="row mb-2" id="inputdownload" style="display: block;">
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
                                <div class="form-floating mb-2">
                                <div class="form-floating mb-5 mb-md-2">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputKeywords" name="keywords" type="text" placeholder="Enter keywodrs" />
                                            <label for="inputKeywords">Keywords</label>
                                            <span>
                                                @error('keywords')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary" type="submit">Add Acts</button>
                                    <a href="viewact" class="btn btn-primary">View Acts</a></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            {{-- <div class="small"><a href="">Have an account? Go to login</a></div> --}}
                        </div>[]
                    </div>
                </div>
            </div>
<!--END OF ACTS-->

<!--START OF SCHEMES-->
<div class="modal" id="addschemes" tabindex="-1" role="dialog" aria-labelledby="schemes" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="schemes">Add schemes</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewscheme')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" name="department" type="text" placeholder="Enter the department" />
                                            <label for="inputFirstName">Department</label>
                                            <span>
                                                @error('department')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
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
                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" name="desc" type="text" placeholder="Enter the Description" />
                                    <label for="inputEmail">Description</label>
                                    <span>
                                        @error('desc')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputUsername" name="sbenifici" type="text" placeholder="Scheme Benificiaries" />
                                        <label for="inputusername">Scheme Benificiaries</label>
                                        <span>
                                            @error('sbnifici')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputUsername" name="sbenifit" type="text" placeholder="Scheme Benifits" />
                                            <label for="inputusername">Scheme Benifits</label>
                                            <span>
                                                @error('sbnifit')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>   
                                </div>
                                <div class="form-floating mb-3">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="htavail" type="text" placeholder="How to Avail" />
                                            <label for="inputhtavail">How to Avail</label>
                                            <span>
                                                @error('htavail')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                </div>
                                    <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputsponsor" name="sponsors" type="text" placeholder="Sponsors" />
                                                <label for="inputsponsor">Sponsors</label>
                                                <span>
                                                    @error('sponsors')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputagefrom" name="agefrom" type="text" placeholder="Age From" />
                                                <label for="inputagefrom">Age From</label>
                                                <span>
                                                    @error('agefrom')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        {{-- </div> --}}
                                        {{-- <div class="row mb-3"> --}}
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputto" name="to" type="text" placeholder="To" />
                                                <label for="inputto">To</label>
                                                <span>
                                                    @error('to')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputintroduce" name="introduce" type="date" placeholder="Introduce on" />
                                                <label for="inputintroduce">Introduce On</label>
                                                <span>
                                                    @error('introduce')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        {{-- </div>
                                        <div class="row mb-3"> --}}
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
                                
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Add Schemes</button>
                                    <a href="viewscheme" class="btn btn-primary">View Schemes</a>
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
<!--END OF SCHEMES-->

<!--START OF ADD CIRCULAR-->
<div class="modal" id="addcircular" tabindex="-1" role="dialog" aria-labelledby="circular" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="circular">Add Circular/OMs</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewcircularoms')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" name="department" type="text" placeholder="Enter the department" />
                                                    <label for="inputFirstName">Department</label>
                                                    <span>
                                                        @error('department')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" name="title" type="text" placeholder="Enter the title of the Act" />
                                                    <label for="inputLastName">Title</label>
                                                    <span>
                                                        @error('title')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col mb-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputnoticeno" name="noticeno" type="text" placeholder="Enter the Category" />
                                                    <label for="inputnoticeno">Notice Number</label>
                                                    <span>
                                                        @error('noticeno')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col mb-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputreldate" name="releasedate" type="date" placeholder="" />
                                                    <label for="inputcategory">Release Date</label>
                                                    <span>
                                                        @error('releasedate')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="row mb-3">
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
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">Add Circular</button>
                                            <a href="viewcircularoms" class="btn btn-primary">View Circular</a>
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
    </div>
</div>
<!--END OF ADD CIRCULAR-->

<!--START OF ADD DOCUMENTS-->
<div class="modal" id="adddocuments" tabindex="-1" role="dialog" aria-labelledby="documents" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="documents">Add Documents</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewdocument')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" name="department" type="text" placeholder="Enter the department" />
                                                    <label for="inputFirstName">Department</label>
                                                    <span>
                                                        @error('department')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" name="title" type="text" placeholder="Enter the title of the Act" />
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
                                                    <input class="form-control" id="inputcategory" name="category" type="text" placeholder="Enter the Category" />
                                                    <label for="inputcategory">Category</label>
                                                    <span>
                                                        @error('category')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputyear" name="year" type="text" placeholder="Enter the Year" />
                                                    <label for="inputyear">Year</label>
                                                    <span>
                                                        @error('year')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
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
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">Add Documents</button>
                                            <a href="viewdocument" class="btn btn-primary">View Documents</a>
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
    </div>
</div>
<!--END OF ADD DOCUMENTS-->

<!--START OF ADD RULE & REGULATION-->
<div class="modal" id="addrules" tabindex="-1" role="dialog" aria-labelledby="rules" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="rules">Add New Rules and Regulation</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewrule')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" name="department" type="text" placeholder="Enter the department" />
                                                    <label for="inputFirstName">Department</label>
                                                    <span>
                                                        @error('department')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" name="title" type="text" placeholder="Enter the title of the Act" />
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
                                                    <input class="form-control" id="inputcategory" name="category" type="text" placeholder="Enter the Category" />
                                                    <label for="inputcategory">Category</label>
                                                    <span>
                                                        @error('category')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
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
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">Add Rules</button>
                                            <a href="viewrule" class="btn btn-primary">View Rules</a>
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
    </div>
</div>
<!--END OF ADD RULE & REGULATION-->

<!--START OF SERVICES-->
<div class="modal" id="addservices" tabindex="-1" role="dialog" aria-labelledby="services" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="services">Add New Service </h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewservice')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- <div class="row mb-3"> --}}
                                            <div class="form-floating mb-3">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" name="department" type="text" placeholder="Enter the department" />
                                                    <label for="inputFirstName">Department</label>
                                                    <span>
                                                        @error('department')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
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
                                        {{-- </div> --}}
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="desc" type="text" placeholder="Enter the Description" />
                                            <label for="inputEmail">Description</label>
                                            <span>
                                                @error('desc')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        {{-- <div class="form-floating mb-3"> --}}
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputcatagory" name="catagory" type="text" placeholder="Catagory" />
                                                <label for="inputcatagory">Catagory</label>
                                                <span>
                                                    @error('catagory')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        {{-- </div> --}}
                                        <div class="form-floating mb-3">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputPassword" name="htavail" type="text" placeholder="How to Avail" />
                                                    <label for="inputhtavail">How to Avail</label>
                                                    <span>
                                                        @error('htavail')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                        </div>
                                            <div class="form-floating mb-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputsponsor" name="wtcontact" type="text" placeholder="Whom to contact" />
                                                        <label for="inputcontact">Whom to Contact</label>
                                                        <span>
                                                            @error('wtcontact')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputassoservice" name="assoservice" type="text" placeholder="Associated Services" />
                                                        <label for="inputassoservice">Associated Services</label>
                                                        <span>
                                                            @error('assoservice')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                            </div>   
                                            <div class="form-floating mb-3">                
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
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">Add Service</button>
                                            <a href="viewservice" class="btn btn-primary">View Services</a>
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
    </div>
</div>
<!--END OF SERVICES-->

<!--START OF FORMS-->
<div class="modal" id="addforms" tabindex="-1" role="dialog" aria-labelledby="forms" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered"  role="document" >
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="forms">Add Forms</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
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
                                                <input class="form-check-input" type="radio" name="availability" id="flexRadioDefault1" onclick="showUrl(0);">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                Online Availability
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability" id="flexRadioDefault2" onclick="showUrl(1);">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                Downloadable
                                                </label>
                                            </div>
                                            <div class="form-floating mb-3" id="inputurl2" style="display: none;">
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
                                            <div class="row mb-3" id="inputdownload2" style="display: none;">
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
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Add Forms</button>
                                    <a href="viewform" class="btn btn-primary">View Forms</a>
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
   <script>
    function showUrl(x){
        if(x==0)
        {
            document.getElementById('inputurl2').style.display = 'block';
            document.getElementById('inputdownload2').style.display = 'none';
        }
        else
        {
            document.getElementById('inputurl2').style.display = 'none';
            document.getElementById('inputdownload2').style.display = 'block';
        }
    }
</script>
<!--END OF FORMS-->

<!--START OF ADD GOVERNMENT ORDER -->
<div class="modal" id="addgovorder" tabindex="-1" role="dialog" aria-labelledby="govorder" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="govorder">Add Government_Order</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewgovorder')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <select class="form-select" name="department" id="dept" aria-label="select Department">
                                                    <option selected>select Department</option>
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
                                            <div class="form-floating mb-3">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" name="title" type="text" placeholder="Enter the title of the Act" />
                                                    <label for="inputLastName">Title</label>
                                                    <span>
                                                        @error('title')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col mb-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputgono" name="gono" type="text" placeholder="Enter the Go Number" />
                                                    <label for="inputgono">GO Number</label>
                                                    <span>
                                                        @error('gono')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col mb-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputreldate" name="releasedate" type="date" placeholder="" />
                                                    <label for="inputcategory">Release Date</label>
                                                    <span>
                                                        @error('releasedate')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="row mb-3">
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
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">Add Order</button>
                                            <a href="vieworder" class="btn btn-primary">View Order</a>
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
    </div>
</div>
<!--END OF ADD GOVERNMENT ORDER-->

<!--START OF SPOTLIGHT -->
<div class="modal" id="addspotlight" tabindex="-1" role="dialog" aria-labelledby="spotlight" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="spotlight">Add Spotlight</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ ('addnewspot') }}" method="POST" enctype="multipart/form-data">
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
                                            <textarea name="description" id="" cols="60" rows="6"></textarea>
                                            <span>
                                                @error('description')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                       
                                        <h4>Availability of Form Details</h4>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability_name" id="flexRadioDefault1" value='O' onclick="showDownload(0);">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                Online Availability
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability_name" id="flexRadioDefault2" value='D' onclick="showDownload(1);">
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
                                                    <option value="{{ $p->publish}}">{{ $p->publish}}</option>  
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
                                                    <option value="{{ $l->language}}">{{ $l->language }}</option>  
                                                @endforeach
                                            </select>
                                            @error('language')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                      
                                        <div class="mt-4 mb-0">
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Add Spotlight</button>
                                                <a href="viewspot" class="btn btn-primary">View Spotlight</a>
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
<!--<script type="text/javascript">
    function showUrl(){
        document.getElementById('inputurl').style.display = 'block';
        document.getElementById('inputdownload').style.display = 'none';
    }
    function showDownload(){
        document.getElementById('inputurl').style.display = 'none';
        document.getElementById('inputdownload').style.display = 'block';
    } 
</script>-->
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
<!--END OF SPOTLIGHT-->


<!-- START OF PROFILE FORM-->
<div class="modal" id="profile_form" tabindex="-1" role="dialog" aria-labelledby="profile_form" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="profile_form">Add Profile Form</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewprofile')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputName" name="name" type="text" placeholder="Enter your name" />
                                            <label for="inputName">Name</label>
                                            <span>
                                                @error('name')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputDesignation" name="designation" type="text" placeholder="Enter your Designation" />
                                            <label for="inputDesignation">Designation</label>
                                            <span>
                                                @error('designation')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputAssume_office" name="assume_office" type="text" placeholder="Enter the assume_office" />
                                            <label for="inputAssume_office">Assume_Office</label>
                                            <span>
                                                @error('assume_office')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputImg" name="image" type="file" accept="image/*" />
                                        <label for="inputImg">Upload Image</label>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputDateofbirth" name="date_of_birth" type="date" placeholder="Enter your date of birth" />
                                            <label for="inputDateofbirth">Date of Birth</label>
                                            <span>
                                                @error('date_of_birth')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputBirth_place" name="birth_place" type="text" placeholder="Enter your Birth Place" />
                                            <label for="inputBirth_place">Birth_place</label>
                                            <span>
                                                @error('birth_place')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputEducation" name="education" type="text" placeholder="Enter the Education" />
                                            <label for="inputEducation">Education</label>
                                            <span>
                                                @error('education')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputFathername" name="father_name" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputFathername">Father Name</label>
                                            <span>
                                                @error('father_name')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputMothername" name="mother_name" type="text" placeholder="Enter your Mother name" />
                                            <label for="inputMothername">Mother Name</label>
                                            <span>
                                                @error('mother_name')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputMaritalstatus" name="marital_status" type="text" placeholder="Enter your Marital status" />
                                            <label for="inputMaritalstatus">Maritals tatus</label>
                                            <span>
                                                @error('marital_status')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputChildren" name="children" type="text" placeholder="Enter your Children" />
                                            <label for="inputChildren">Children</label>
                                            <span>
                                                @error('children')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputProfession" name="profession" type="text" placeholder="Enter your Profession" />
                                            <label for="inputProfession">Profession</label>
                                            <span>
                                                @error('profession')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputPolcareer" name="pol_career" type="text" placeholder="Enter your Career" />
                                            <label for="inputPolcareer">pol_career</label>
                                            <span>
                                                @error('pol_career')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputSoc_activities" name="soc_activities" type="text" placeholder="Enter soc_activities" />
                                            <label for="inputSoc_activities">Soc_activities</label>
                                            <span>
                                                @error('soc_activities')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputPublication" name="publications" type="text" placeholder="Enter Publication" />
                                            <label for="inputPublication">Publication</label>
                                            <span>
                                                @error('publications')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputAwards" name="awards" type="text" placeholder="Enter the Awards" />
                                            <label for="inputAwards">Awards</label>
                                            <span>
                                                @error('awards')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputForeigntravel" name="foreign_travels" type="text" placeholder="Enter Foreign_travel" />
                                            <label for="inputForeigntravel">Foreign_travels</label>
                                            <span>
                                                @error('foreign_travels')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputHobbies" name="hobbies" type="text" placeholder="Enter your hobbies" />
                                            <label for="inputHobbies">Hobbies</label>
                                            <span>
                                                @error('hobbies')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputAddinfo" name="add_info" type="text" placeholder="Enter the Add info" />
                                            <label for="inputAdd_nfo">Information</label>
                                            <span>
                                                @error('add_info')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputAddress" name="address" type="text" placeholder="Enter your Address" />
                                            <label for="inputAddress">Address</label>
                                            <span>
                                                @error('address')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputPhonenumber" name="phone_no" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputPhonenumber">Phone number</label>
                                            <span>
                                                @error('phone_number')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputFaxnumber" name="fax_no" type="text" placeholder="Enter the Fax Number" />
                                            <label for="inputFaxnumber">Fax_number</label>
                                            <span>
                                                @error('fax_number')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputMobilenumber" name="mobile_no" type="text" placeholder="Enter the mobile number" />
                                            <label for="inputMobilenumber">Mobile number</label>
                                            <span>
                                                @error('mobile_number')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputEmail" name="email_id" type="text" placeholder="Enter the email" />
                                            <label for="inputEmail">Email</label>
                                            <span>
                                                @error('email')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputWebsite" name="website" type="text" placeholder="Enter the website" />
                                            <label for="inputWebsite">Website</label>
                                            <span>
                                                @error('website')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputKeyword" name="keywords" type="text" placeholder="Enter the title of the scheme" />
                                            <label for="inputKeyword">Keywords</label>
                                            <span>
                                                @error('keywords')
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
                                            <option value="{{$l->language}}">{{$l->language}}</option>  
                                            @endforeach
                                          </select>
                                          <span class="error-message">
                                            @error('language')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="publish" id="id" aria-label="Select publish">
                                        <option selected disabled>Publish</option>
                                        @foreach ($pub as $p)
                                            <option value="{{ $p->publish}}">{{ $p->publish }}</option>  
                                        @endforeach
                                    </select>
                                    @error('publish')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Add Porfile form</button>
                                        <a href="viewprofileform" class="btn btn-primary">View Porfile form</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<!--END OF PROFILE FORM-->

<!--START OF MAP CATEGORY-->
<div class="modal" id="mapcategory" tabindex="-1" role="dialog" aria-labelledby="mapcategory" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mapcategory">Add Map Category</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ ('addnewmapcat') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
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
                                            <input class="form-control" id="inputTitle" name="title" type="text" placeholder="Enter the title " />
                                            <label for="inputTitle">Title</label>
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-select" name="map" id="map" aria-label="select Department" style="width: 20em;">
                                                <option selected>select Map ID</option>
                                                @foreach ($map as $m)
                                                <option value="{{$m->map_id}}">{{$m->map_name}}</option>  
                                                @endforeach
                                            </select>
                                            <span class="error-message">
                                                @error('map_id')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                        <h4>Map Description</h4>
                                        <div class="form-floating mb-3">
                                            <textarea name="description" id="" cols="60" rows="6"></textarea>
                                            <span>
                                                @error('description')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        <h4>Availability of Form Details</h4>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability_name" id="flexRadioDefault1" onclick="showDownload(0); value='O'">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                Online Availability
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability_name" id="flexRadioDefault2" value='D' onclick="showDownload(1);">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                Downloadable
                                                </label>
                                            </div>
                                            <div class="form-floating mb-3" id="inputurl3" style="display: none;">
                                                <div class="form-floating mb-3">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="" name="url" type="text" placeholder="Enter url" />
                                                        <label for="inputurl">Paste the URL Path here</label>
                                                        <span>
                                                            @error('url')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3" id="inputdownload3" style="display: none;">
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
                                                    <option value="{{ $p->publish }}">{{ $p->publish }}</option>  
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
                                                    <option value="{{ $l->language }}">{{ $l->language }}</option>  
                                                @endforeach
                                            </select>
                                            @error('language')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputCreated_by" name="created" type="text" placeholder="Created By" />
                                            <label for="inputCreated_by">Created By</label>
                                            @error('created')
                                                {{ $message }}
                                            @enderror
                                        </div>  
                                        <div class="mt-4 mb-0">
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Add Map category</button>
                                                <a href="viewmapcat" class="btn btn-primary">View Map category</a>
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
    <script>
    function showDownload(x){
        if(x==0)
        {
            document.getElementById('inputurl3').style.display = 'block';
            document.getElementById('inputdownload3').style.display = 'none';
        }
        else
        {
            document.getElementById('inputurl3').style.display = 'none';
            document.getElementById('inputdownload3').style.display = 'block';
        }
    }
</script>
<!--END OF MAP CATEGORY-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>       
    </body>
</html>
