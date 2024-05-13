<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery Contents</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('style/styles.css')}}" rel="stylesheet" />
        <script src="{{url('js/scripts.js')}}"></script>

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Gallery Contents</h1>
            {{-- <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a class="btn btn-light" href="superadmindashboard"><i class="fa-solid fa-arrow-left"> </i> Go Back to Dashboard</a></li>
            </ol> --}}
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Images</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="#" onclick="editImages();">Add New Image</a>
                            <a class="small text-white text-decoration-none" href="viewimage" onclick="">View Images</a>

                            {{-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Videos</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white text-decoration-none" href="#" onclick="editVideos();">Add New Video</a>
                            <a class="small text-white text-decoration-none" href="viewvideo" onclick="">View Videos</a>

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
                    
                    {{-- edit Images of Gallery --}}
                    <div id="eimage" style="display:none;">
                     @include('superadmin.HomePageContents.GalleryContents.editImages')
                    </div>
                    
                       {{-- edit videos of Gallery --}}
                   <div id="evideo" style="display:none;">
                    @include('superadmin.HomePageContents.GalleryContents.editVideos')
                   </div>  
                </div>
            </div>
        </div>
    </main>

 


    <script>
        function editImages(){
            document.getElementById('eimage').style.display = 'block';
            document.getElementById('evideo').style.display = 'none';
            
        }
        //
        function editVideos(){
            document.getElementById('eimage').style.display = 'none';
            document.getElementById('evideo').style.display = 'block';
            
        }
        
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
</body>
</html>