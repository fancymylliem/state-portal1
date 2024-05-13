<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Create Home Page Contents</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="{{url('js/scripts.js')}}"></script>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Home Page Contents</a>
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
                            <a class="nav-link" href="superadmindashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Back to Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Click for Expand</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="true" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Create Home Page Contents
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#" onclick="editSlides();">Slide Show Images</a>
                                    <a class="nav-link" href="#" onclick="editHons();">Our Honourables</a>
                                    <a class="nav-link" href="#" onclick="editGallery();">Gallery</a>
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
                            <h1 class="mt-4">Create Contents of the Home page <br></h1><h4>1. Slide Show Images <br>2. Our Honourables <br>3. Gallery images and Videos <br></h4>

                        </div>
                        <div class="card-body" id="edit-box">
                    
                            <!-- {{-- edit Slides --}} -->
                            <div id="eslide" style="display:none;">
                             @include('superadmin.HomePageContents.slides.viewSlides');
                             
                            </div>
                               <!-- {{-- edit Honourables  --}} -->
                           <div id="ehons" style="display:none;">
                            @include('superadmin.HomePageContents.digniteries.viewHonourables');                            
                            </div> 
                           <!-- {{-- edit Gallery --}} -->
                           <div id="egallery" style="display:none;">
                            @include('superadmin.HomePageContents.GalleryContents.editGallery');                          
                            </div>
                            
                        </div>
                        
                    </div>
                </main>
            </div>
        </div>
        <script>
            function editSlides(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('eslide').style.display = 'block';
                document.getElementById('ehons').style.display = 'none';
                document.getElementById('egallery').style.display = 'none';
                
            }
            //
            function editHons(){
                document.getElementById('heading').style.display = 'none';

                document.getElementById('eslide').style.display = 'none';
                document.getElementById('ehons').style.display = 'block';
                document.getElementById('egallery').style.display = 'none';
                
            }
            function editGallery(){
                document.getElementById('heading').style.display = 'none';

                document.getElementById('eslide').style.display = 'none';
                document.getElementById('ehons').style.display = 'none';
                document.getElementById('egallery').style.display = 'block';
                
            }
    
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    </body>
</html>
