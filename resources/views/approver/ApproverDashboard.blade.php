<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Publisher | Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="">Publisher</a>
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
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        {{-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> --}}
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="publisherlogout">Logout</a></li>
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
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Navigation Contents
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" onclick="displayFromn();" href="#">From Creator</a>
                                    <a class="nav-link" onclick="displayApprovedn();" href="#">Approved</a>
                                    {{-- <a class="nav-link" onclick="displayRejected();" href="#">Rejected</a> --}}
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Category Contents
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link " onclick="displayFromc();" href="#">
                                        From Creator
                                    </a>
                                    <a class="nav-link " onclick="displayApprovedc();" href="#">
                                        Approved
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" onclick="displayRejected();">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-xmark"></i></div>
                                Rejected Contents
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Publisher Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Department admin/publisher</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Contant Creators</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white text-decoration-none" href="addcontentcreator">Create New CC</a>
                                        <a class="small text-white text-decoration-none" href="viewcontentcreator">View CC</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                           <div class="col" id="fromCreatorc" style="display: none;">
                            @include('approver.dashboardcontents.category.fromCreatorContents')
                           </div>
                           <div class="col" id="approvedc" style="display: none;">
                            @include('approver.dashboardcontents.category.approvedContents')
                           </div>
                           <div class="col" id="rejected" style="display: none;">
                            @include('approver.rejected.rejected')
                           </div>
                        </div>
                        <div class="row">
                           <div class="col" id="fromCreatorn" style="display: none;">
                            @include('approver.dashboardcontents.navigation.fromCreatorContents')
                           </div>
                           <div class="col" id="approvedn" style="display: none;">
                            @include('approver.dashboardcontents.navigation.approvedContents')
                           </div>
                           <div class="col" id="rejected" style="display: none;">
                            @include('approver.rejected.rejected')
                           </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script>
            function displayFromc(){
                document.getElementById('fromCreatorc').style.display = "block";
                document.getElementById('fromCreatorn').style.display = "none";
                document.getElementById('approvedc').style.display = "none";
                document.getElementById('approvedn').style.display = "none";
                document.getElementById('rejected').style.display = "none";
            }
            function displayApprovedc(){
                document.getElementById('fromCreatorc').style.display = "none";
                document.getElementById('fromCreatorn').style.display = "none";
                document.getElementById('approvedn').style.display = "none";
                document.getElementById('approvedc').style.display = "block";
                document.getElementById('rejected').style.display = "none";

            }
            function displayFromn(){
                document.getElementById('fromCreatorc').style.display = "none";
                document.getElementById('fromCreatorn').style.display = "block";
                document.getElementById('approvedc').style.display = "none";
                document.getElementById('approvedn').style.display = "none";
                document.getElementById('rejected').style.display = "none";
            }
            function displayApprovedn(){
                document.getElementById('fromCreatorc').style.display = "none";
                document.getElementById('fromCreatorn').style.display = "none";
                document.getElementById('approvedn').style.display = "block";
                document.getElementById('approvedc').style.display = "none";
                document.getElementById('rejected').style.display = "none";

            }
            function displayRejected(){
                document.getElementById('fromCreatorc').style.display = "none";
                document.getElementById('fromCreatorn').style.display = "none";
                document.getElementById('approvedn').style.display = "none";
                document.getElementById('approvedc').style.display = "none";
                document.getElementById('rejected').style.display = "block";

            }

        </script>
        {{-- <script>
            function govOrder(){
                document.getElementById('h').style.display='none';
                document.getElementById('gov').style.display='block';
                document.getElementById('act').style.display='none';
                document.getElementById('doc').style.display='none';
            }
            function act(){
                document.getElementById('h').style.display='none';
                document.getElementById('gov').style.display='none';
                document.getElementById('act').style.display='block';
                document.getElementById('doc').style.display='none';
            }
            function doc(){
                document.getElementById('h').style.display='none';
                document.getElementById('gov').style.display='none';
                document.getElementById('act').style.display='none';
                document.getElementById('doc').style.display='block';
            }
            function ApprovedAct(){
                document.getElementById('aact').style.display='block';
                document.getElementById('agov').style.display='none';
                document.getElementById('adoc').style.display='none';
            }
            function approvedGovOrder(){
                document.getElementById('aact').style.display='none';
                document.getElementById('agov').style.display='block';
                document.getElementById('adoc').style.display='none';
            }
            function approvedDoc(){
                document.getElementById('aact').style.display='none';
                document.getElementById('agov').style.display='none';
                document.getElementById('adoc').style.display='block';

            }
        </script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('js/scripts.js')}}"></script>
    </body>
</html>
