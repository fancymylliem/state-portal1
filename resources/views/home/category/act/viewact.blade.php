<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acts | Meghalaya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                  <div class="header"><h4>Acts</h4></div>
                  <table class="table">
                    <tbody>
                            <tr>
                                <th>Department</th>
                                <td>{{$viewAct->department_name}}</td>
                            </tr>
                            <tr>
                                <th>Act Title</th>
                                <td>{{$viewAct->title}}</td>
                            </tr>
                            <tr>
                                <th>Commencement Date: </th>
                                <td>{{$viewAct->commencement_date}}</td>
                            </tr>
                            <tr>
                                <th>Extent </th>
                                <td>{{$viewAct->extent}}</td>
                            </tr>
                            <tr>
                                <th>Download PDF</th>
                                <td><a class="text-primary mx-3" href="/downloadact/{{$viewAct->pdf}}">
                                    <i class="far fa-file-pdf "></i> 
                                    <span class="text-primary h6"> {{(($viewAct->filesize)/1024)>1024?round((($viewAct->filesize)/1024)/1024,2).' MB':round(($viewAct->filesize)/1024,2).' KB'}}</span>
                                  </a></td>
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