<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tender | Meghalaya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    @include('home.layouts.top')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                    @include('home.layouts.left')
            </div>
            <div class="col-lg-8">
                {{-- main content --}}
                <div class="mt-5">
                  <div class="header"><h4 class="fw-semibold">Tender</h4></div>
                  <table class="table">
                    <tbody>
                            <tr>
                                <th>Department</th>
                                <td>{{$viewtender->department_name}}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$viewtender->title}}</td>
                            </tr>
                            <tr>
                                <th>Reference Number</th>
                                <td>{{$viewtender->ref_no}}</td>
                            </tr>
                            <tr>
                                <th>Date Release</th>
                                <td>{{$viewtender->release_date}}</td>
                            </tr>
                            <tr>
                                <th>Last Date</th>
                                <td>{{$viewtender->last_date}}</td>
                            </tr>
                            <tr>
                                <th>Opening Date</th>
                                <td>{{$viewtender->opening_date}}</td>
                            </tr>
                            <tr>
                                <th>Download PDF</th>
                                <td>
                                    <a class="text-primary mx-3" href="/downloadtender/{{$viewtender->pdf}}">
                                        <i class="far fa-file-pdf "></i> 
                                        <span class="text-primary h6"> {{(($viewtender->filesize)/1024)>1024?round((($viewtender->filesize)/1024)/1024,2).' MB':round(($viewtender->filesize)/1024,2).' KB'}}</span>
                                      </a>
                                </td>
                            </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="col-lg-2">
                    @include('home.layouts.right')
            </div>
        </div>

    </div>
    <footer class="mt-3">
        @include('home.layouts.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>