<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Admin | Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Admin User</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="superadminsettings">Settings</a></li>
                        {{-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> --}}
                        <li><hr class="dropdown-divider"/></li>
                        <li><a class="dropdown-item" href="logout">Logout</a></li>
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
                            {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
                            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewnavbarcontant">Navigation Bar</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Footer</a>
                                </nav>
                            </div> --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                 Master Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">

                                     <div class="container">
                                        <div class="row">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo">Add Districts</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#adddepartment" data-whatever="@mdo">Add Department</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addorganisationtype" data-whatever="@mdo">Add_Organisation_Type</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addorganisationname" data-whatever="@mdo">Add_Organisation_Type</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#adddocumenttype" data-whatever="@mdo">Add Document Type</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#adduser" data-whatever="@mdo">Add User</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addlanguage" data-whatever="@mdo">Language</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#category" data-whatever="@mdo">Create Category</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#assembly" data-whatever="@mdo">Assembly Data</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#community" data-whatever="@mdo">Community Data</button></div> 
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#constituency" data-whatever="@mdo">Constituency Data</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#contact" data-whatever="@mdo">Contact Type</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ias" data-whatever="@mdo">IAS Batch Data</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#loksabha" data-whatever="@mdo">Lok Sabha</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#lokconst" data-whatever="@mdo">LokSabha_Constituency</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#notified" data-whatever="@mdo">Notification_Category</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rules" data-whatever="@mdo">Rules_Category</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#scheme" data-whatever="@mdo">Scheme_Beneficiaries</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#schemebenefit" data-whatever="@mdo">Scheme Benefits</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#schemename" data-whatever="@mdo">Scheme Name</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#schemespons" data-whatever="@mdo">Scheme Sponsor</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#service" data-whatever="@mdo">Service Category</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addposition" data-whatever="@mdo">Add_Position Type</button></div>
                                            <div class="col">
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addmap" data-whatever="@mdo">Add_map_category</button></div>
                                            {{-- <a class="nav-link" href="editabout">About Meghalaya</a> --}}
                                            <a class="nav-link" href="password.html"></a>
                                        </nav>
                                         </div>
                                    </div>
                                  
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Create
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="governmentcontents">Government</a>
                                            <a class="nav-link" href="edithomepage">Edit Home</a>
                                        </nav>
                                    </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Super Admin Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4" style="height: 10rem;">
                                <div class="card shadow-lg bg-white text-dark mb-4" >
                                    <div class="card-body"><h4 class="text-success">Departments</h4><br>
                                        <h5 class=" text-dark">Total Departments : <span class="fw-bold text-success">{{$countDept}}</span></h5>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-primary fw-bold text-decoration-none" href="adddepartment">Add Department</a> --}}
                                        <a class="small text-secondary text-decoration-none" href="#" onclick="viewDept();">View Departments</a>
                                        {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="height: 10rem;">
                                <div class="card bg-white shadow-lg text-dark mb-4">
                                    <div class="card-body"><h4 class="text-success">Publishers</h4><br>
                                        <h5 class=" text-dark">Total Publishers : <span class="fw-bold text-success">{{$countPublisher}}</span></h5>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-dark text-decoration-none" href="adddepartmentadmin">Create New Admin</a> --}}
                                        <a class="small text-secondary text-decoration-none" href="#" onclick="viewPub();">View Publishers</a>
                                        {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="height: 10rem;">
                                <div class="card bg-white shadow-lg text-dark mb-4">
                                    <div class="card-body"><h4 class="text-success">Districts</h4><br>
                                        <h5 class=" text-dark">Total Districts : <span class="fw-bold text-success">{{$countDistrict}}</span></h5>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-dark text-decoration-none" href="adddepartmentadmin">Create New Admin</a> --}}
                                        <a class="small text-secondary text-decoration-none" href="#" onclick="viewDist();">View Districts</a>
                                        {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            View Details
                        </div>
                        <div class="card-body">
                            <div id="dept" style="display: none;">
                                @include('admin.Department.viewDepartments');
                            </div>
                            <div id="pub" style="display: none;">
                                @include('admin.viewuser');
                            </div>
                            <div id="dist" style="display: none;">
                                @include('admin.districts.viewDistricts');
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Meghalaya State Portal Management System</div>
                            <div>

                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
            function viewDept(){
                document.getElementById('dept').style.display="block";
                document.getElementById('pub').style.display="none";
                document.getElementById('dist').style.display="none";
            }
            function viewPub(){
                document.getElementById('dept').style.display="none";
                document.getElementById('pub').style.display="block";
                document.getElementById('dist').style.display="none";

            }
            function viewDist(){
                document.getElementById('dept').style.display="none";
                document.getElementById('pub').style.display="none";
                document.getElementById('dist').style.display="block";

            }
        </script>
<!--  MODAL STARTED  FOR ADD DISTRICTS  -->       
                    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Districts</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{('/addnewdist')}}" method="POST" enctype="multipart/form-data" id="formsubmit">
                                        <div class="modal-body">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="form-floating mb-7 mb-md-4">
                                                    <input class="form-control" id="inputDistname" type="text" name="dist_name" placeholder="" required>
                                                    <label for="inputDistname">District Name</label>
                                                    <span class="error-message">
                                                        @error('dist_name')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-floating mb-7 mb-md-4">
                                                    <input class="form-control" id="inputDistHead" type="text" name="dist_head" placeholder="" required>
                                                    <label for="inputDistHead">District Headquarter</label>
                                                    <span class="error-message">
                                                        @error('dist_head')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-floating mb-7 mb-md-4">
                                                    <input class="form-control" id="inputArea" type="text" name="area" placeholder="" required>
                                                    <label for="inputArea">Area (in sq km)</label>
                                                    <span class="error-message">
                                                        @error('area')
                                                            {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-floating mb-7 mb-md-4">
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
                                        <div class="mt-5 mb-4 d-flex justify-content-between">
                                            <div class="mt-10 mb-0">
                                                <button class="btn btn-primary text-left" type="submit">ADD</button>
                                                <button class="btn btn-primary text-left" type="reset">CLEAR</button>
                                            </div>
                                                <div>
                                                <a href="viewdist" class="btn btn-primary text-left">VIEW</a>
                                                <a href="viewdist" class="btn btn-primary text-left">UPDATE</a>   
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>    

<!--END MODEL FOR ADD DISTRICTS-->

<!--MODAL START OF ADD DEPARTMENT-->
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        @include('errors')
            <main>
                <div class="modal" id="adddepartment" tabindex="-1" role="dialog" aria-labelledby="department" aria-hidden="true" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="department">Add Department</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
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
                                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <button class="btn btn-primary" type="submit">ADD</button>
                                                    <a href="viewdepartment" class="btn btn-outline-info" onclick="view(event);">View Department</a>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer"></div>
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
        </script>    
<!--END MODAL OF ADD DEPARTMENT-->

<!-- START MODAL OF ADD ORGNAISATION TYPE-->
<div id="layoutAuthentication">
    @include('errors')
        <div class="modal" id="addorganisationtype" tabindex="-1" role="dialog" aria-labelledby="department" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="department">Add Organisation Type</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{('/neworganisationtype')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputOrganisationType" type="text" name="organisation_type" placeholder="Health Department" />
                                        <label for="inputOrganisationType">Organisation Type</label>
                                        <span class="error-message">
                                            @error('organisation_type')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="vieworganisationtype">View Organisation Types</a> 
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div></div>
<!-- END MODAL OF ADD ORGANISATION TYPE-->

<!-- START MODAL OF ADD ORGANISATION NAME-->
<div id="layoutAuthentication">
    @include('errors')
        <div class="modal" id="addorganisationname" tabindex="-1" role="dialog" aria-labelledby="organisation" aria-hidden="true" data-bs-backdrop="static" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="organisation">Add Organisation Name </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{('/postorganisation')}}" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-select" name="dept_name" id="dept" aria-label="select Department">
                                                <option selected>Select Department</option>
                                                @foreach ($departments as $dept)
                                                <option value="{{$dept->dept_id}}">{{$dept->department_name}}</option>  
                                                @endforeach
                                              </select>
                                              <span class="error-message">
                                                @error('dept_name')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-select" name="type" id="type" aria-label="select Department">
                                                <option selected>Select Type</option>
                                                @foreach ($otype as $type)
                                                <option value="{{$type->org_type_id}}">{{$type->org_type_name}}</option>  
                                                @endforeach
                                              </select>
                                              <span class="error-message">
                                                @error('type')
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputOrganisationName" type="text" name="organisation_name" placeholder="" />
                                        <label for="inputOrganisationName">Organisation Name</label>
                                        <span class="error-message">
                                            @error('organisation_name')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit">ADD</button>
                                            <a class="btn btn-outline-info" href="vieworganisations">View Organisation name</a>
                                        </div>
                                    </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!--END MODAL OF ADD ORGANISATION NAME-->


<!--START MODAL OF ADD DOCUMENT TYPE-->
<div id="layoutAuthentication">
    @include('errors')
        <div class="modal" id="adddocumenttype" tabindex="-1" role="dialog" aria-labelledby="document" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="document">Add Document Type </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{('/newdocumenttype')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputDocumentType" type="text" name="document_type" placeholder="Health Department" />
                                        <label for="inputDocumentType">Document Type</label>
                                        <span class="error-message">
                                            @error('document_type')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewdocumenttype">View Document Types</a> 
                                    </div>
                                 </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<!--END MODAL OF ADD DOCUMENT TYPE-->

<!--START MODAL OF ADD USER-->
<div id="layoutAuthentication">
    @include('errors')
        <div class="modal" id="adduser" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="user">Add User </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                            </div>
                                        <div class="modal-body">
                                            <form action="{{('/addnewuser')}}" method="POST">
                                                @csrf
                                                <div class="form-floating mb-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" name="dept_name" id="dept" aria-label="select Department">
                                                            <option selected>Select Department</option>
                                                            @foreach ($departments as $dept)
                                                            <option value="{{$dept->dept_id}}">{{$dept->department_name}}</option>  
                                                            @endforeach
                                                            </select>
                                                            <span class="error-message">
                                                                @error('dept_name')
                                                                    {{$message}}
                                                                @enderror
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputname" type="text" name="name" placeholder="Enter your Name" required>
                                                    <label for="inputname">Name</label>
                                                    <span class="error-message">
                                                    @error('name')
                                                        {{$message}}
                                                    @enderror
                                                        </span>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required>
                                                        <label for="inputEmail">Email address</label>
                                                        <span class="error-message">
                                                            @error('email')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputnumber" type="number" name="mobile_no" placeholder="Enter your Mobile number" required>
                                                        <label for="inputnumber">Mobile Number</label>
                                                        <span class="error-message">
                                                            @error('mobile_no')
                                                                {{$message}}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                            <div class="form-floating mb-3 mb-md-0">
                                                                <select class="form-select" name="user_role" id="dept" aria-label="select Department">
                                                                    <option selected>Select User Role</option>
                                                                    @foreach ($roles as $role)                                                            
                                                                    <option value="{{$role->id}}">{{$role->role}}</option>                                                            
                                                                    @endforeach
                                                                </select>
                                                                <span class="error-message">
                                                                    @error('user_role')
                                                                        {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <div class="form-floating mb-3 mb-md-0">
                                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" required>
                                                                <label for="inputPassword">Password</label>
                                                                <span class="error-message">
                                                                    @error('password')
                                                                        {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                    </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mb-3 mb-md-0">
                                                                <input class="form-control" id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder="Confirm password" required>
                                                                <label for="inputPasswordConfirm">Confirm Password</label>
                                                                <span class="error-message">
                                                                    @error('password_confirmation')
                                                                        {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>          
                                                    <div class="mt-4 mb-0">
                                                        <button class="btn btn-primary" type="submit">ADD</button>
                                                        <button class="btn btn-primary" type="reset">CLEAR</button>
                                                    </div>
                                            </form>
                                        </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"></div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>

<!--END MODAL OF ADD USER-->

<!--START MODAL OF LANGUAGE-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="addlanguage" tabindex="-1" role="dialog" aria-labelledby="language" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="language">Add Language </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                            </div>
                                <div class="modal-body">
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
                                            <button class="btn btn-primary" type="submit">ADD</button>
                                            <a href="viewLanguage" class="btn btn-outline-info" type="" onclick="view(event);">View Language</a>
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
                var lang = document.getElementById('inputLanguage').value;
                var msg = confirm('Are you sure you want to add new Language ?');
                  if(msg){
                    var form = document.getElementById('postLanguage');
                    form.submit();
                    }
                }
        </script>
<!--END MODAL OF LANGUAGE-->

<!--START MODAL OF CREATE CATEGORY-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="category" tabindex="-1" role="dialog" aria-labelledby="createcategory" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createcategory">Create Category </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                            </div>
                                        <div class="modal-body">
                                        <form action="{{('/createnewcategory')}}" method="POST" id="postContentCategory" >
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputDeptName" type="text" name="category_name" placeholder="Schemes" />
                                                <label for="inputDeptName">Category Name</label>
                                                <span class="error-message">
                                                    @error('category_name')
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">Create</button> 
                                                <a href="viewcategories" type="" class="btn btn-outline-info" onclick="view(event);">view Category</a>  
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="displaycat" style="display:none;">
                        @include('admin.viewCategory');
                    </div>
                </main>
        </div>
        <script>
             function formsubmit(e){
               e.preventDefault();
                var lang = document.getElementById('inputDeptName').value;
                var msg = confirm('Are you sure you want to add this Category ?');
                  if(msg){
                    var form = document.getElementById('postContentCategory');
                    form.submit();
                    }
                }
        </script>
<!--END MODAL OF CREATE CATEGORY-->

<!--START OF ASSEMBLY DATA-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="assembly" tabindex="-1" role="dialog" aria-labelledby="addassembly" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addassemebly">Add Assembly </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newassemblydata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputAssemblyData" type="text" name="assembly_data" placeholder="Health Department" />
                                        <label for="inputAssemblyData">Assembly Data</label>
                                        <span class="error-message">
                                            @error('assembly_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewassemblydata">View Assembly</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF ASSEMBLY DATA-->

<!--START OF COMMUNITY DATA-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="community" tabindex="-1" role="dialog" aria-labelledby="addcommunity" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addcommunity">Add Community </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newcommunitydata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputCommunityData" type="text" name="community_data" placeholder="Health Department" />
                                        <label for="inputCommunityData">Community Data</label>
                                        <span class="error-message">
                                            @error('community_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewcommunitydata">View community</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!-- END OF COMMUNITY DATA-->

<!-- START OF CONSTITUENCY DATA-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="constituency" tabindex="-1" role="dialog" aria-labelledby="addconstituency" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addconstituency">Add Constituency </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newconstituencydata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputConstituencyData" type="text" name="constituency_data" placeholder="Health Department" />
                                        <label for="inputConstituencyData">Constituency Data</label>
                                        <span class="error-message">
                                            @error('constituency_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewconstituencydata">View Constituency</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF CONSTITUENCY DATA-->

<!--START OF CONTACTTYPE DATA-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="contact" tabindex="-1" role="dialog" aria-labelledby="contacttype" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="contacttype">Contact type</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newcontactdata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputContactData" type="text" name="contact_data" placeholder="Health Department" />
                                        <label for="inputContactData">Contact Data</label>
                                        <span class="error-message">
                                            @error('contact_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewcontactdata">View Contact</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF CONTACTTYPE DATA-->

<!--START OF IAS BATCH DATA-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="ias" tabindex="-1" role="dialog" aria-labelledby="addias" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addias">Add IAS Batch  </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newiasbatchdata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputIasbatchData" type="text" name="iasbatch_data" placeholder="Health Department" />
                                        <label for="inputIasbatchData">IAS batch</label>
                                        <span class="error-message">
                                            @error('iasbatch_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewiasbatchdata">View IASbatch</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF IAS BATCH DATA-->

<!--START OF LOK SABHA-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="loksabha" tabindex="-1" role="dialog" aria-labelledby="loksabha" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loksabha">Add Lok Sabha </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newloksabhadata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputLoksabhaData" type="text" name="loksabha_data" placeholder="Health Department" />
                                        <label for="inputLoksabhaData">Lok Sabha Data</label>
                                        <span class="error-message">
                                            @error('loksabha_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewloksabhadata">View Loksabha</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>

<!--END OF LOK SABHA-->

<!--START OF LOK SABHA CONSTITUENCY-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="lokconst" tabindex="-1" role="dialog" aria-labelledby="loksabhaconstituency" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loksabhaconstituency">Add Lok Sabha </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newlokconstituencydata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputLokconstituencyData" type="text" name="lokconst_data" placeholder="Health Department" />
                                        <label for="inputLokconstituencyaData">Lok Sabha Data</label>
                                        <span class="error-message">
                                            @error('lokconst_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewlokconstituencydata">View Loksabha constituency</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF LOK SABHA CONSTITUENCY-->

<!--START OF NOTIFICATION CATEGORY-->

<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="notified" tabindex="-1" role="dialog" aria-labelledby="notifiedCategory" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="notifiedCategory">Notification Category </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newnotificationcategorydata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputNotificationCategoryData" type="text" name="notified_data" placeholder="Health Department" />
                                        <label for="inputNotificationCategoryData">Notification Category</label>
                                        <span class="error-message">
                                            @error('notified_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewnotificationcategorydata">View Notification Category</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>

<!--END OF NOTIFICATION CATEGORY-->

<!--START OF RULES CATEGORY DATA-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="rules" tabindex="-1" role="dialog" aria-labelledby="rulescategory" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rulescategory">Rules category </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newrulescategorydata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputRulescategoryData" type="text" name="rule_data" placeholder="Health Department" />
                                        <label for="inputRulescategoryData">Rules category Data</label>
                                        <span class="error-message">
                                            @error('rule_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewrulescategorydata">View Rules category</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF RULES CATEGORY DATA-->

<!--START OF SCHEME BENEFICIARIES-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="scheme" tabindex="-1" role="dialog" aria-labelledby="schemebene" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="schemebene">Scheme Beneficiaries </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newschemebeneficiariesdata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputSchemebeneficiariesData" type="text" name="scheme_data" placeholder="Health Department" />
                                        <label for="inputSchemebeneficiariesData">Scheme Data</label>
                                        <span class="error-message">
                                            @error('scheme_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewschemebeneficiariesdata">View Scheme Beneficiaries</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>



<!--END OF SCHEME BENEFICIARIES-->

<!--START OF SCHEME BNEFITS-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="schemebenefit" tabindex="-1" role="dialog" aria-labelledby="schemebenefit" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="schemebenefit">Scheme Benefits </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newschemebenefitdata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputSchemebenefitData" type="text" name="schemefit_data" placeholder="Health Department" />
                                        <label for="inputSchemebenefitData">Scheme benefit Data</label>
                                        <span class="error-message">
                                            @error('schemefit_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewschemebenefitdata">View Scheme Benefit</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF SCHEME BENEFIT-->

<!--START OF SCHEME NAME-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="schemename" tabindex="-1" role="dialog" aria-labelledby="schemename" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="schemename">Scheme Name </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newschemenamedata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputSchemenameData" type="text" name="schemename_data" placeholder="Health Department" />
                                        <label for="inputSchemenameData">Scheme benefit Data</label>
                                        <span class="error-message">
                                            @error('schemename_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewschemenamedata">View Scheme Name</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF SCHEME NAME-->

<!--START OF SCHEME SPONSOR-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="schemespons" tabindex="-1" role="dialog" aria-labelledby="schemespons" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="schemespons">Scheme Sponsor</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newschemesponsordata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputSchemesponsData" type="text" name="schemespons_data" placeholder="Health Department" />
                                        <label for="inputSchemesponsData">Scheme benefit Data</label>
                                        <span class="error-message">
                                            @error('schemespons_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewschemesponsordata">View Scheme Sponsor</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF SCHEME SPONSOR-->

<!--START OF SERVICE CATEGORY-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="service" tabindex="-1" role="dialog" aria-labelledby="service" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="service">Service Category</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <form action="{{('/newservicecategorydata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputServicecategoryData" type="text" name="service_data" placeholder="Health Department" />
                                        <label for="inputServicecategoryData">Service Category</label>
                                        <span class="error-message">
                                            @error('service_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                        <a class="btn btn-outline-info" href="viewservicecategorydata">View Service Category</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF  SERVICE CATEGORY-->

<!--START OF POSITIONTYPE DATA-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="addposition" tabindex="-1" role="dialog" aria-labelledby="positiontype" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="positiontype">Position type</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="{{('/newpositiondata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPositionData" type="text" name="position_data" placeholder="Add position" />
                                        <label for="inputPositionData">Position Data</label>
                                        <span class="error-message">
                                            @error('position_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">Add Position</button>
                                        <a class="btn btn-outline-info" href="viewpositiondata">View Position</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF POSITIONTYPE DATA-->

<!--START OF MAP CATEGORY-->
<div id="layoutAuthentication">
    @include('errors')
    <main>
        <div class="modal" id="addmap" tabindex="-1" role="dialog" aria-labelledby="mapcategory" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mapcategory"> Map Category</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="{{('/newmapdata')}}" method="POST">
                                    @csrf
                                    <div class="row form-floating">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputMapcategory" type="text" name="map_data" placeholder="Add Map category" />
                                        <label for="inputMapcategory">Map Data</label>
                                        <span class="error-message">
                                            @error('map_data')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">Add Map category</button>
                                        <a class="btn btn-outline-info" href="viewmapdata">View Map category</a>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
<!--END OF MAP CATEFORY-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
  