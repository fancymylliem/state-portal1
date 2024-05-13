<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Government of Meghalata| Official Wbsite</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body class="bg-light">
        <div class="container-fluid" style="height:100vh;background-image: url('/assets/images/login.jpg');backgroung-repeat:no-repeat;">
            <nav>
                <div class="text-center">
                    <h1 class="text-white"> Welcome to <br><span class="text-primary">Content Management System</span> </h1>
                    <h2 class="text-warning">For Meghalaya State Portal</h2>
                    <h3 class="text-white">Please Login according to your Role</h3>
                </div>
            </nav>
            <div class="row text-center">
                <div class="col link">
                </div>
                <div class="col link">
                    <a href="superadminlogin" class="btn btn-outline-primary my-2 px-4">Superadmin</a>

                    <a href="deptadminlogin" class="btn btn-outline-success my-2 px-4">Publisher</a>

                    <a href="contentcreatorlogin" class="btn btn-outline-warning my-2 px-4">Creator</a>
                </div>
                <div class="col link"> 
                    
                </div>
            </div>
            <div class="text-center">
                {{-- <p><span class="text-primary">Superadmin</span><br>Superadmin manages the system <br>create departments <br>create publishers <br></p>
                <p><span class="text-secondary">publisher</span></p>
                <p><span class="text-info">Creator</span></p> --}}
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    </body>
</html>