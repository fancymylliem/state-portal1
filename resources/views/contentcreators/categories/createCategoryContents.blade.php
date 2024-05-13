<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Create Contents</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Category Contents</a>
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
                                    <a class="nav-link" href="#" onclick="editActs();">Acts</a>
                                    <a class="nav-link" href="#" onclick="editSchemes();">Schemes</a>
                                    <a class="nav-link" href="#" onclick="editServices();">Service</a>
                                    <a class="nav-link" href="#" onclick="editGovOs();">Government Orders</a>
                                    <a class="nav-link" href="#" onclick="editRules();">Rules and Regulations</a>
                                    <a class="nav-link" href="#" onclick="editDocs();">Documents</a>
                                    <a class="nav-link" href="#" onclick="editCircular();">Circular/OMs</a>
                                    <a class="nav-link" href="#" onclick="editForms();">Forms</a>
                                    <a class="nav-link" href="#" onclick="editSpotlights();">Spotlights</a>
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
                            <h1 class="mt-4" id="">Create Category Contents  <br></h1>
                            <h4>1. Acts <br>2. Forms <br>3. Documents <br>4. Rules and Regulations <br>5. Services <br>6. Circular OMs <br>7. Schemes <br>8. Spotlights</h4>
                        </div>
                        <div class="card-body" id="">
                            <!-- {{-- edit Acts --}} -->
                           <div id="eact" style="display:none;">
                                @include('contentcreators.categories.addActs');                          
                            </div>
                            <!-- {{-- edit Schemes --}} -->
                            <div id="escheme" style="display:none;">
                                @include('contentcreators.categories.addSchemes');
                            </div>
                            <!-- {{-- edit Services --}} -->
                            <div id="egovorder" style="display:none;">
                                @include('contentcreators.categories.addGovernmentOrders');                                
                            </div> 

                           <!-- {{-- edit Documents --}} -->
                            <div id="edoc" style="display:none;">
                                @include('contentcreators.categories.addDocuments');                                
                            </div>
                           <!-- {{-- edit Rules --}} -->
                            <div id="erule" style="display:none;">
                                @include('contentcreators.categories.addRules');                                
                            </div>
                           <!-- {{-- edit Services --}} -->
                            <div id="eservice" style="display:none;">
                                @include('contentcreators.categories.addServices');                                
                            </div> 
                             <!-- {{-- edit Services --}} -->
                            <div id="ecircular" style="display:none;">
                                @include('contentcreators.categories.addCircular');                                
                            </div> 
                             
                            <!-- {{-- edit Forms --}} -->
                            <div id="eform" style="display:none;">
                                @include('contentcreators.categories.addForms');                         
                            </div>  
                            <!-- {{-- edit Spotlight --}} -->
                            <div id="spot" style="display:none;">
                                @include('contentcreators.categories.addSpotlights');                       
                            </div> 
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script>
            function editActs(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('eact').style.display = 'block';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eservice').style.display = 'none';
                document.getElementById('edoc').style.display = 'none';
                document.getElementById('erule').style.display = 'none';
                document.getElementById('ecircular').style.display = 'none';
                document.getElementById('egovorder').style.display = 'none';    
                document.getElementById('eform').style.display = 'none';
                document.getElementById('spot').style.display = 'none';
            }
            function editSchemes(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('escheme').style.display = 'block';
                document.getElementById('eservice').style.display = 'none';
                document.getElementById('edoc').style.display = 'none';
                document.getElementById('erule').style.display = 'none';
                document.getElementById('ecircular').style.display = 'none';
                document.getElementById('egovorder').style.display = 'none';   
                document.getElementById('eform').style.display = 'none';
                document.getElementById('spot').style.display = 'none';
            }
            //
            function editServices(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eservice').style.display = 'block';
                document.getElementById('edoc').style.display = 'none';
                document.getElementById('erule').style.display = 'none';
                document.getElementById('ecircular').style.display = 'none';
                document.getElementById('egovorder').style.display = 'none';
                document.getElementById('eform').style.display = 'none';
                document.getElementById('spot').style.display = 'none';
            }
            
            function editDocs(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eform').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('edoc').style.display = 'block';
                document.getElementById('erule').style.display = 'none';
                document.getElementById('eservice').style.display = 'none';
                document.getElementById('ecircular').style.display = 'none';
                document.getElementById('egovorder').style.display = 'none';
                document.getElementById('spot').style.display = 'none';   
            }
            function editRules(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eform').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('edoc').style.display = 'none';
                document.getElementById('erule').style.display = 'block';
                document.getElementById('eservice').style.display = 'none';
                document.getElementById('ecircular').style.display = 'none';
                document.getElementById('egovorder').style.display = 'none';
                document.getElementById('spot').style.display = 'none';
            }
            
            function editCircular(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eform').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('edoc').style.display = 'none';
                document.getElementById('erule').style.display = 'none';
                document.getElementById('eservice').style.display = 'none';
                document.getElementById('ecircular').style.display = 'block';
                document.getElementById('egovorder').style.display = 'none'; 
                document.getElementById('spot').style.display = 'none'; 
            }
            function editGovOs(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eform').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('edoc').style.display = 'none';
                document.getElementById('erule').style.display = 'none';
                document.getElementById('eservice').style.display = 'none';
                document.getElementById('ecircular').style.display = 'none';
                document.getElementById('egovorder').style.display = 'block';
                document.getElementById('spot').style.display = 'none';  
            }
            function editForms(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eservice').style.display = 'none';
                document.getElementById('edoc').style.display = 'none';
                document.getElementById('erule').style.display = 'none';
                document.getElementById('ecircular').style.display = 'none';
                document.getElementById('egovorder').style.display = 'none';   
                document.getElementById('eform').style.display = 'block';
                document.getElementById('spot').style.display = 'none';
            }
            function editSpotlights(){
                document.getElementById('heading').style.display = 'none';
                document.getElementById('spot').style.display = 'block';
                document.getElementById('escheme').style.display = 'none';
                document.getElementById('eservice').style.display = 'none';
                document.getElementById('edoc').style.display = 'none';
                document.getElementById('eact').style.display = 'none';
                document.getElementById('erule').style.display = 'none';
                document.getElementById('ecircular').style.display = 'none';
                document.getElementById('egovorder').style.display = 'none';    
                document.getElementById('eform').style.display = 'none';
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('js/scripts.js')}}"></script>
    </body>
</html>
