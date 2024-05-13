<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Government of Meghalaya | Official Website</title>
    <link rel="stylesheet" href="{{url('style/index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      *{
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body class="overflow-auto">
  @include('home.layouts.top')
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      
      <div class="carousel-inner">
        
        {{-- <div class="carousel-item active">
          <img src="{{asset("uploads/assets/slides/images/")}}/{{$slides->image1}}" class="d-block w-100" style="height: 400px;"  alt="...">
          <div class="carousel-caption d-none d-md-block bg-primary">
            <h5>{{$slides->slide_name}}</h5>
            <p>{{$slides->about}}</p>
          </div>
        </div> --}}
        <div class="carousel-item active">
          <img src="{{url('assets/images/img1.jpg')}}" class="d-block w-100" style="height: 400px;"  alt="...">
          <div class=" carousel-caption d-none d-md-block bg-primary">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
        
        <div class="carousel-item">
          <img src="{{url('assets/images/img2.jpg')}}" class="d-block w-100" style="height: 400px;"  alt="...">
          <div class=" carousel-caption d-none d-md-block bg-primary">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('assets/images/img3.jpg')}}" class="d-block w-100" style="height: 400px;"  alt="...">
          <div class=" carousel-caption d-none d-md-block bg-primary">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  <div class="row my-4 mx-1 d-flex justify-content-center">
    <div class="col-md-3 ">
      <div class="row d-flex justify-content-center">      
        <img class="" src="{{asset('assets/images/govnr.gif')}}" alt="" style="height:10rem;width:10rem;">
        <span class="h6 text-center">Govornor</span>
        <span class="h6 text-center">Shri. Phagu Chauhan</span>
      </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <img src="{{asset('assets/images/mom.png')}}" alt="" style="height:18rem;width:35rem;">
    </div>
    <div class="col-md-3 ">
      <div class="row d-flex justify-content-center">
        <img class="" src="{{asset('assets/images/cm.jpg')}}" alt="" style="height:10rem;width:10rem;">
      <span class="h6 text-center">Chief Minister of Meghalaya</span>
      <span class="h6 text-center">Shri. Conrad K Sangma</span>
      </div>
    </div>
  </div>

  <div class="row my-4 mx-1">
      <div class="col-9">
          <div class="row">
              <div class="col-md-3">
                  <div class="card bg-warning">
                    <h5 class="card-title fw-semibold text-center text-dark">GOVERNMENT</h5>
                    <div class="card-body rounded-bottom m-1 bg-primary">
                          <ul>
                            <li class=""><a class="text-white text-decoration-none" href="https://meggovernor.gov.in/">Governor</a></li>
                            <li class=""><a class="text-white text-decoration-none" href="https://cm.meghalaya.gov.in/">Chief Minister</a></li>
                            <li class=""><a class="text-white text-decoration-none" href="https://meghalayahighcourt.nic.in/chief-justice-judges">Chief Justice</a></li>
                            <li class=""><a class="text-white text-decoration-none" href="/viewministers">Council of Minister</a></li>
                          </ul>
                    </div>
                  </div>
              </div>
              <div class="col-md-5">
                <div class="card bg-warning">
                  <h5 class="card-title fw-semibold text-center text-dark">ONLINE SERVICE</h5>
                  <div class="card-body rounded-bottom m-1 bg-primary">
                    <ul>
                      <li><a class="text-white text-decoration-none" href="https://megedistrict.gov.in/">e-District Services</a></li>
                      <li><a class="text-white text-decoration-none" href="">e-District Dashboard</a></li>
                      <li><a class="text-white text-decoration-none" href="">Online Services From Various Department</a></li>
                      <li><a class="text-white text-decoration-none" href="">Chief Minister's Relief Fund</a></li>
                  </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card bg-warning">
                  <h5 class="card-title fw-semibold text-center text-dark">WHAT'S NEWs</h5>
                  <div class="card-body rounded-bottom m-1 bg-primary">
                    <ul>
                      <li><a class="text-white text-decoration-none" href="">Lorem ipsum dolor sit</a></li>
                      <li><a class="text-white text-decoration-none" href="">Lorem ipsum dolor sit</a></li>
                      <li><a class="text-white text-decoration-none" href="">Lorem ipsum dolor sit</a></li>
                      <li><a class="text-white text-decoration-none" href="">Lorem ipsum dolor sit</a></li>
                  </ul>
                  </div>
                </div>
              </div>
          </div>
      </div>
      {{-- <div class="col-3">
        <div class="card">
          <div class="card-title">Twitter</div>
          <div class="card-body">
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
        </div>
      </div> --}}
  </div>
  <div class="row my-2 mx-1">
    <div class="col">
        <a class="text-decoration-none text-dark" href="depts"><div class="card h-5 bg-warning">
          <div class="card-body text-center">
            <div class="ff-icon"><img src="{{url('/assets/images/dept_0.png')}}" alt=""></div>
              <div class="card-title">Department</div>
          </div>
      </div></a>
    </div>
    <div class="col">
        <a class="text-decoration-none text-dark" href="https://investmeghalaya.gov.in/">
          <div class="card h-5 bg-warning">
            <div class="card-body text-center">
              <div class="ff-icon"><img src="{{url('/assets/images/invest_0.png')}}" alt=""></div>
                <div class="card-title">Invest Meghalaya</div>   
            </div>
        </div>
        </a>
    </div>
    <div class="col">
      <a class="text-decoration-none text-dark" href="https://www.meghalayatourism.in/">
        <div class="card h-5 bg-warning">
          <div class="card-body text-center">
            <div class="ff-icon"><img src="{{url('/assets/images/tourism.png')}}" alt=""></div>
              <div class="card-title">Meghalaya Tourism</div>
          </div>
      </div>
      </a>
    </div>
  </div>
  <div class="row my-2 mx-1">
    <div class="col">
      <a class="text-decoration-none text-dark" href="http://164.100.250.63:8080/login.htm">
        <div class="card h-5 bg-warning">
          <div class="card-body text-center">
            <div class="ff-icon"><img src="{{url('/assets/images/arch_0.png')}}" alt=""></div>
              <div class="card-title">Meghalaya State Enterprise Architecture</div>
          </div>
      </div>
      </a>
    </div>
    <div class="col">
      <a class="text-decoration-none text-dark" href="">
        <div class="card h-5 bg-warning">
          <div class="card-body text-center">
            <div class="ff-icon"><img src="{{url('/assets/images/sdg.png')}}" alt=""></div>
              <div class="card-title">Sustainable Development Goals (SDG)</div>
          </div>
      </div>
      </a>
    </div>
  </div>
  <div class="row p-5 d-flex justify-center">
      <div class="col text-center">
        <a class="text-decoration-none" href="acts"><img class="rounded-circle" src="{{url('/assets/images/acts.png')}}" alt=""><br>
          <span class="card-title text-dark">Acts</span></a>
      </div>
      <div class="col text-center">
        <a class="text-decoration-none" href=""><img class="rounded-circle" src="{{url('/assets/images/rules.png')}}" alt=""><br>
        <span class="card-title text-dark">Rules & Regulations</span></a>
      </div>
      <div class="col text-center">
        <a class="text-decoration-none" href=""><img class="rounded-circle" src="{{url('/assets/images/documents.png')}}" alt=""><br>
        <span class="card-title text-dark">Documents</span></a>
      </div>
      <div class="col text-center">
        <a class="text-decoration-none" href=""><img class="rounded-circle" src="{{url('/assets/images/circulars.png')}}" alt=""><br>
        <span class="card-title text-dark">Circular / OMs</span></a>
      </div>
      <div class="col text-center">
        <a class="text-decoration-none" href="">
        <img class="rounded-circle" src="{{url('/assets/images/orders.png')}}" alt=""><br>
        <span class="card-title text-dark">Government Orders</span>
      </a>
      </div>
      <div class="col text-center">
        <a class="text-decoration-none" href="">
          <img class="rounded-circle" src="{{url('/assets/images/schemes.png')}}" alt=""><br>
        <span class="card-title text-dark">Schemes</span></a>
      </div>
      <div class="col text-center">
        <a class="text-decoration-none" href="">
          <img class="rounded-circle" src="{{url('/assets/images/forms.png')}}" alt=""><br>
        <span class="card-title text-dark">Forms</span></a>
      </div>
  </div>
  <div class="row bg-success p-4 d-flex justify-center">
    {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         --}}
    <div class="col text-center">
      <a class="text-decoration-none text-white" href=""><img class="rounded" src="{{url('/assets/images/recruit.png')}}" alt=""><br>
        <span class="card-title">Recruitment</span></a>
    </div>
    <div class="col text-center">
      <a class="text-decoration-none text-white" href=""><img class="rounded" src="{{url('/assets/images/web-dir.png')}}" alt=""><br>
        <span class="card-title">Web Directory</span></a>
    </div>
    <div class="col text-center">
      <a class="text-decoration-none text-white" href=""><img class="rounded" src="{{url('/assets/images/gallery.png')}}" alt=""><br>
        <span class="card-title">Gallery</span></a>
    </div>
    <div class="col text-center">
      <a class="text-decoration-none text-white" href=""><img class="rounded" src="{{url('/assets/images/mobile-ap.png')}}" alt=""><br>
        <span class="card-title">Mobile App Directory</span></a>
    </div>
    <div class="col text-center">
      <a class="text-decoration-none text-white" href=""><img class="rounded" src="{{url('/assets/images/calender.png')}}" alt=""><br>
        <span class="card-title">Calender</span></a>
    </div>
    <div class="col text-center">
      <a class="text-decoration-none text-white" href=""><img class="rounded" src="{{url('/assets/images/email.png')}}" alt=""><br>
        <span class="card-title">Email ID</span></a>
    </div>
    <div class="col text-center">
      <a class="text-decoration-none text-white" href=""><img class="rounded" src="{{url('/assets/images/map.png')}}" alt=""><br>
        <span class="card-title">Maps</span></a>
    </div>
    
  </div>
  <footer class="">
    @include('home.layouts.footer')
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{'js/scripts.js'}}"></script>
</body>
</html>