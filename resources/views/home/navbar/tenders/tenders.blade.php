<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tenders | Meghalaya</title>
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
                  <div class="header"><h4 class="fw-semibold">Tenders</h4></div>

                  {{-- <form action="{{'/searchtender'}}" id="searchForm" method="POST">
                    @csrf
                    <div class="form-floating mb-3 mb-md-0">
                      <input class="form-control " id="searchInput" type="text" name="" placeholder="" value="" />
                      <label for="inputDeptName">Search Tender By Department Name</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                      <button class="btn btn-primary" type="submit" onclick="">Search</button> 
                    </div>
                  </form> --}}

                  <div id="searchResults">
                    
                  </div>
                
                  <table class="table">
                    <tbody>
                      @foreach ($viewtender as $t)
                        @if($t->status==2)
                          <tr>
                            <td>
                              <ul>
                                <li>
                                  <a class="text-decoration-none text-dark" href="abouttender/{{$id=$t->tender_id}}">{{$t->title}}</a>                                  
                                  <a class="text-primary mx-3" href="/downloadtender/{{$t->pdf}}">
                                    <i class="far fa-file-pdf "></i> 
                                    <span class="text-primary h6"> {{(($t->filesize)/1024)>1024?round((($t->filesize)/1024)/1024,2).' MB':round(($t->filesize)/1024,2).' KB'}}</span>
                                  </a>
                                  </a>
                                </li>
                              </ul> 
                            </td>
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
    <script>
      $('#searchForm').on('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      var searchQuery = $('#searchInput').val(); // Get the search query

  // Make AJAX request
  $.ajax({
    url: '/searchtender', // Laravel route to handle the search request
    method: 'POST',
    data: { searchQuery: searchQuery }, // Send the search query as data
    success: function(response) {
      // Handle the response from the server
      $('#searchResults').html(response);
    },
    error: function(xhr) {
      // Handle error
      console.log(xhr.responseText);
    }
  });
});

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>