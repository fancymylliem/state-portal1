<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Create Navbar Contents</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Navbar Contents</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <!-- Navbar-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="ccdashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Back to Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Click for Expand</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Create Contents
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#" onclick="editNotification();">Notifications</a>
                                    <a class="nav-link" href="#" onclick="editTender();">Tender</a>
                                    <a class="nav-link" href="#" onclick="editCitizen();">Citizen Charter</a>
                                    <a class="nav-link" href="#" onclick="editContact();">Key Contacts</a>
                                    {{-- <a class="nav-link" href="#" onclick="editNews();">News Room</a> --}}
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4" id="main-content">
                        <div id="heading">
                            <h1 class="mt-4" id="">Create Navigation contents <br></h1>
                        <h5>1. Notifications <br>2. Tenders <br>3. Citizen Charter <br>4. Key Contacts <br>5. Newsroom </h5>
                        </div>
                        <div class="card-body" id="edit-box">
                    
                            <div id="escheme" style="display:none;">
                             @include('contentcreators.homecontents.addNotification');
                             
                            </div>
                            
                           <div id="eform" style="display:none;">
                            @include('contentcreators.homecontents.addTender');                            
                            </div> 
                           <div id="eact" style="display:none;">
                            @include('contentcreators.homecontents.addCitizenC');                          
                            </div>
        
                            <div id="edoc" style="display:none;">
                                @include('contentcreators.homecontents.addContacts');                                
                            </div>
                    </div>
                </main>
            </div>
        </div>
        <script>
            function editNotification(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('escheme').style.display = 'block';
                document.getElementById('eform').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('edoc').style.display = 'none';

            }
            //
            function editTender(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eform').style.display = 'block';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('edoc').style.display = 'none';
               
            }
            function editCitizen(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eform').style.display = 'none';
                document.getElementById('eact').style.display = 'block';
                document.getElementById('edoc').style.display = 'none';
               
            }
            function editContact(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eform').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('edoc').style.display = 'block';
                
            }
           
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('js/scripts.js')}}"></script>
    </body>
</html>
