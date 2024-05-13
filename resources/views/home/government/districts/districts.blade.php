<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Districts | Meghalaya</title>
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
                  <div class="header"><h4 class="fw-semibold">Districts</h4></div>
                  <table class="table">
                    <thead>
                        <th>District Name</th>
                        <th>Headquater</th>
                        <th>Population</th>
                        <th>Area</th>
                    </thead>
                    <tbody>
                      @foreach ($viewdist as $d)
                          <tr>
                            <td>
                                <a class="text-decoration-none text-dark" href="aboutdist/{{$id=$d->dist_id}}">{{$d->district_name}} </a>
                            </td>
                            <td>
                                <a class="text-decoration-none text-dark">{{$d->district_head}} </a>
                            </td>
                            <td>
                                <a class="text-decoration-none text-dark">{{$d->population}} </a>
                            </td>
                            <td>
                                <a class="text-decoration-none text-dark">{{$d->area}} </a>
                            </td>
                          </tr> 
                        @endforeach
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
        @include('home.layouts.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>