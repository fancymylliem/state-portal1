<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nongkrem Dance - A Religious Dance Festival of Meghalaya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                  <div class="header"><h4></h4></div>
                  <table class="table">
                    <tbody>
                      @foreach ($viewSpotlight as $s)
                        @if($s->publish_id==1)
                          <tr>
                              <td>
                                <ol>
                                <h1 class="page-title"><span class="field field--name-title field--type-string field--label-hidden">Nongkrem Dance - A Religious Dance Festival of Meghalaya</span>
                                </h1>
                                  <p> 
                                  <a class="text-decoration-none text-dark" href="aboutspot/{{$id=$s->content_id}}">{{$s->description}}</a>
                                  <div class="carousel-item active">
                                  <img src="{{url('assets/images/Nongkrem_Dance_Festival.png')}}" class="d-block w-90" style="height: 300px;"  alt="...">
                                  </div>
                                    </p>
                                  </ol> 
                                  </td>
                              </tr>
                              @else
                              <tr>
                                <th> underProcess to Publish </th><td>{{$s->publish_id==2}}</td> 
                              </tr>
                          @endif
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
    <footer class="mt-3">
        @include('home.layouts.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>