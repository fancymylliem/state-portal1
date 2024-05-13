<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Key Contacts | Meghalaya</title>
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
                  <div class="header"><h4>Key Contacts</h4></div>
                  <table class="table">
                    <tbody>
                            <tr>
                                <th>Department</th>
                                <td>{{$viewcontact->department}}</td>
                            </tr>
                            <tr>
                                <th>Act Title</th>
                                <td>{{$viewcontact->title}}</td>
                            </tr>
                            <tr>
                                <th>Download PDF</th>
                                <td><i class="fa-solid fa-file-pdf"></i><a class="text-primary" href="/downloadact/{{$viewcontact->pdf}}">{{$viewcontact->pdf}}</a></td>
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
    <footer>
        {{-- @include('home.layouts.footer') --}}
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>