<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Contents</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Categories</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a class="btn btn-light" href="ccdashboard"><i class="fa-solid fa-arrow-left"> </i> Go Back to Dashboard</a></li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Schemes</div>
                        <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewscheme" onclick="">View Schemes</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editSchemes();">Add New Scheme</a>
                            {{-- <div class="small text-dark"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Forms</div>
                        <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewform" onclick="">View Forms</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editForms();">Add New Form</a>
                            {{-- <div class="small text-dark"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Services</div>
                        <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewservice" onclick="">View Services</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editServices();">Add New Service</a>
                            {{-- <div class="small text-dark"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Acts</div>
                        <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewact" onclick="">View Acts</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editActs();">Add New Act</a>
                            {{-- <div class="small text-dark"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Rules</div>
                        <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewrule" onclick="">View Rules</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editRules();">Add New Rule</a>
                            {{-- <div class="small text-dark"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Circular OMs</div>
                        <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewcircularoms" onclick="">View </a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editCircular();">Add New</a>
                            {{-- <div class="small text-dark"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Government Orders</div>
                        <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="vieworder" onclick="">View</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editGovOs();">Add New Order</a>
                            {{-- <div class="small text-dark"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">Documents</div>
                        <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewdocument" onclick="">View</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editDocs();">Add New Documents</a>
                            {{-- <div class="small text-dark"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>

                
            </div>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Contents
                    {{-- @include('errors') --}}
                </div>
                <div class="card-body" id="edit-box">
                    
                    {{-- edit Schemes --}}
                    <div id="escheme" style="display:none;">
                     @include('contentcreators/categories/addSchemes');
                    </div>
                    
                       {{-- edit Forms --}}
                   <div id="eform" style="display:none;">
                    @include('contentcreators/categories/addForms');
                    </div> 
                   {{-- edit Acts --}}
                   <div id="eact" style="display:none;">
                    @include('contentcreators/categories/addActs');
                    </div>
                                       {{-- edit Documents --}}

                    <div id="edoc" style="display:none;">
                        @include('contentcreators/categories/addDocuments');
                    </div>
                                       {{-- edit Rules --}}

                    <div id="erule" style="display:none;">
                        @include('contentcreators/categories/addRules');
                    </div>
                                       {{-- edit Services --}}

                    <div id="eservice" style="display:none;">
                        @include('contentcreators/categories/addServices');
                    </div> 
                                        {{-- edit Services --}}

                    <div id="ecircular" style="display:none;">
                        @include('contentcreators/categories/addCircular');
                    </div> 
                    
                                        {{-- edit Services --}}

                    <div id="egovorder" style="display:none;">
                        @include('contentcreators/categories/addGovernmentOrders');
                    </div>  
                </div>
            </div>
        </div>
    </main>

 


    <script>
        function editSchemes(){
            document.getElementById('escheme').style.display = 'block';
            document.getElementById('eform').style.display = 'none';
            document.getElementById('eact').style.display = 'none';
            document.getElementById('edoc').style.display = 'none';
            document.getElementById('erule').style.display = 'none';
            document.getElementById('eservice').style.display = 'none';
            document.getElementById('ecircular').style.display = 'none';
            document.getElementById('egovorder').style.display = 'none';

            
        }
        //
        function editForms(){
            document.getElementById('escheme').style.display = 'none';
            document.getElementById('eform').style.display = 'block';
            document.getElementById('eact').style.display = 'none';
            document.getElementById('edoc').style.display = 'none';
            document.getElementById('erule').style.display = 'none';
            document.getElementById('eservice').style.display = 'none';
            document.getElementById('ecircular').style.display = 'none';
            document.getElementById('egovorder').style.display = 'none';

            
        }
        function editActs(){
            document.getElementById('escheme').style.display = 'none';
            document.getElementById('eform').style.display = 'none';
            document.getElementById('eact').style.display = 'block';
            document.getElementById('edoc').style.display = 'none';
            document.getElementById('erule').style.display = 'none';
            document.getElementById('eservice').style.display = 'none';
            document.getElementById('ecircular').style.display = 'none';
            document.getElementById('egovorder').style.display = 'none';

            
        }
        function editDocs(){
            document.getElementById('escheme').style.display = 'none';
            document.getElementById('eform').style.display = 'none';
            document.getElementById('eact').style.display = 'none';
            document.getElementById('edoc').style.display = 'block';
            document.getElementById('erule').style.display = 'none';
            document.getElementById('eservice').style.display = 'none';
            document.getElementById('ecircular').style.display = 'none';
            document.getElementById('egovorder').style.display = 'none';

            
        }
        function editRules(){
            document.getElementById('escheme').style.display = 'none';
            document.getElementById('eform').style.display = 'none';
            document.getElementById('eact').style.display = 'none';
            document.getElementById('edoc').style.display = 'none';
            document.getElementById('erule').style.display = 'block';
            document.getElementById('eservice').style.display = 'none';
            document.getElementById('ecircular').style.display = 'none';
            document.getElementById('egovorder').style.display = 'none';

            
        }
        function editServices(){
            document.getElementById('escheme').style.display = 'none';
            document.getElementById('eform').style.display = 'none';
            document.getElementById('eact').style.display = 'none';
            document.getElementById('edoc').style.display = 'none';
            document.getElementById('erule').style.display = 'none';
            document.getElementById('eservice').style.display = 'block';
            document.getElementById('ecircular').style.display = 'none';
            document.getElementById('egovorder').style.display = 'none';

            
        }
        function editCircular(){
            document.getElementById('escheme').style.display = 'none';
            document.getElementById('eform').style.display = 'none';
            document.getElementById('eact').style.display = 'none';
            document.getElementById('edoc').style.display = 'none';
            document.getElementById('erule').style.display = 'none';
            document.getElementById('eservice').style.display = 'none';
            document.getElementById('ecircular').style.display = 'block';
            document.getElementById('egovorder').style.display = 'none';
            
        }
        function editGovOs(){
            document.getElementById('escheme').style.display = 'none';
            document.getElementById('eform').style.display = 'none';
            document.getElementById('eact').style.display = 'none';
            document.getElementById('edoc').style.display = 'none';
            document.getElementById('erule').style.display = 'none';
            document.getElementById('eservice').style.display = 'none';
            document.getElementById('ecircular').style.display = 'none';
            document.getElementById('egovorder').style.display = 'block';
            
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
</body>
</html>