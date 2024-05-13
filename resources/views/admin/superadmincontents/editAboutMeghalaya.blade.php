<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit About Meghalaya</title>
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">About Meghalaya</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a class="btn btn-light" href="superadmindashboard"><i class="fa-solid fa-arrow-left"> </i> Go Back to Dashboard</a></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">About Meghalaya</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white text-decoration-none" href="viewaboutmeg" onclick="">View AM</a>
                                        <a class="small text-white text-decoration-none" href="#" onclick="editAM();">Edit</a>
                                        {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Edit Block</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white text-decoration-none" href="viewblocks" onclick="">View Blocks</a>
                                        <a class="small text-white text-decoration-none" href="#" onclick="editBlocks();">Edit</a>
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
                                
                                {{-- edit about Meghalaya --}}
                                <div id="eam" style="display:none;">
                                 @include('admin.superadmincontents.editAM')
                                </div>
                                
                                   {{-- edit block--}}
                               <div id="eblock" style="display:none;">
                                @include('admin.superadmincontents.editBlocks')
                               </div>  
                            </div>
                        </div>
                    </div>
                </main>
                <script>
                    function editAM(){
                        document.getElementById('eam').style.display = 'block';
                        document.getElementById('eblock').style.display = 'none';
                        
                    }
                    //
                    function editBlocks(){
                        document.getElementById('eam').style.display = 'none';
                        document.getElementById('eblock').style.display = 'block';
                        
                    }
                </script>
          
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script type="text/javascript">
            var i = 0;
            $("#dynamic-ar").click(function () {
                ++i;
                $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                    '][block]" placeholder="Enter Block Name" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                    );
            });
            $(document).on('click', '.remove-input-field', function () {
                $(this).parents('tr').remove();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
