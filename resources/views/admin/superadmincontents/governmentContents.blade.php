<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Government Contents</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="{{url('js/scripts.js')}}"></script>

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Government Contents</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a class="btn btn-light" href="superadmindashboard"><i class="fa-solid fa-arrow-left"> </i> Go Back to Dashboard</a></li>
            </ol>
            <div class="row">
                {{-- <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body">About Meghalaya</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewabout">View About</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editAbout();">Edit</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Council of Ministers</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewcom" onclick="">View List</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editCOM();">Add New COM</a>
                            {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">IAS list</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewias" onclick="">View List</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editIAS();">Add New IAS</a>
                            {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body">MCS List</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewmcs" onclick="">View List</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editMCS();">Add New MCS</a>
                            {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Districts</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="viewdist">View Districts</a>
                            <a class="small text-white text-decoration-none" href="#" onclick="editDist();">Add Districts</a>
                            {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Contents
                    @include('errors')
                </div>
                <div class="card-body" id="edit-box">
                    {{-- About Meghalaya --}}
                    {{-- <div id="eabout" style="display:none;">
                        @include('superadmin.superadmincontents.editAboutMeghalaya')
                       </div> --}}
                    {{-- add council of ministers --}}
                    <div id="ecom" style="display:none;">
                     @include('superadmin.superadmincontents.addCouncilOfMinisters')
                    </div>
                    {{-- view council of minister --}}
                    <div id="vcom" style="display:none;">
                        {{-- @include('superadmin.superadmincontents.viewCouncilOfMinisters') --}}
                       </div>
                       {{-- add ias --}}
                   <div id="eias" style="display:none;">
                    @include('superadmin.superadmincontents.addIAS')
                   </div>
                   {{-- view ias list --}}
                   <div id="vias" style="display:none;">
                    {{-- @include('superadmin.superadmincontents.viewIAS') --}}
                   </div>
                   {{-- add MCS list --}}
                   <div id="emcs" style="display:none;">
                    @include('superadmin.superadmincontents.addMCS')
                   </div>
                   {{-- view MCS list --}}
                   <div id="vmcs" style="display:none;">
                    {{-- @include('superadmin.superadmincontents.viewMCS') --}}
                   </div>
                   <div id="edist" style="display:none;">
                    @include('superadmin.superadmincontents.addDistricts')
                   </div>
                </div>
            </div>
        </div>
    </main>

 


    <script>
        function editAbout(){
            // document.getElementById('eabout').style.display = 'block';
            document.getElementById('ecom').style.display = 'none';
            document.getElementById('eias').style.display = 'none';
            document.getElementById('emcs').style.display = 'none';
            document.getElementById('edist').style.display = 'none';
            
        }
        //
        function editCOM(){
            // document.getElementById('eabout').style.display = 'none';
            document.getElementById('ecom').style.display = 'block';
            document.getElementById('eias').style.display = 'none';
            document.getElementById('emcs').style.display = 'none';
            document.getElementById('edist').style.display = 'none';
            
        }
        // function viewCOM(){
        //     document.getElementById('vcom').style.display = 'block';
        //     document.getElementById('vias').style.display = 'none';
        //     document.getElementById('vmcs').style.display = 'none';
        // }
        //
        function editIAS(){
            // document.getElementById('eabout').style.display = 'none';
            document.getElementById('ecom').style.display = 'none';
            document.getElementById('eias').style.display = 'block';
            document.getElementById('emcs').style.display = 'none';
            document.getElementById('edist').style.display = 'none';


        }
        // function viewIAS(){
        //     document.getElementById('vcom').style.display = 'none';
        //     document.getElementById('vias').style.display = 'block';
        //     document.getElementById('vmcs').style.display = 'none';

        // }
        //
        function editMCS(){
            // document.getElementById('eabout').style.display = 'none';
            document.getElementById('ecom').style.display = 'none';
            document.getElementById('eias').style.display = 'none';
            document.getElementById('emcs').style.display = 'block';
            document.getElementById('edist').style.display = 'none';

        }
        // function viewMCS(){
        //     document.getElementById('vcom').style.display = 'none';
        //     document.getElementById('vias').style.display = 'none';
        //     document.getElementById('vmcs').style.display = 'block';

        // }
        function editDist(){
            // document.getElementById('eabout').style.display = 'none';
            document.getElementById('ecom').style.display = 'none';
            document.getElementById('eias').style.display = 'none';
            document.getElementById('emcs').style.display = 'none';
            document.getElementById('edist').style.display = 'block';

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
</body>
</html>