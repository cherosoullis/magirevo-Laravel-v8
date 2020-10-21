@extends('layouts.application')


@section('content')


{{-- <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head> --}}

{{-- <body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item active" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="full-width.html">Full Width Page</a>
              <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
              <a class="dropdown-item" href="pricing.html">Pricing Table</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Portfolio Item
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Portfolio Item</li>
    </ol>

    <!-- Portfolio Item Row -->
  <div class="row">

      <div class="col-md-6">
        <img class="img-fluid pic-shadow" src="{{ asset('storage/recipes/'. $recipe->photo) }}" alt="">
      </div>

      <div class="col-md-6">

        <h3 class="d-inline-flex headings" >Περιγραφή Συνταγής  </h3>
        @if (Auth::check())
          <div class="d-inline-flex ml-3">
              <favorite
                  :recipe={{ $recipe->id }}
                  :favorited={{ $recipe->favorited() ? 'true' : 'false' }}
              ></favorite>
          </div>
      @endif
      <div class="d-inline-flex  ml-5">
        <a href="{{route('recipes.edit', $recipe->slug)}}">  <span style="color: Mediumslateblue;"><i class="ml-5 fas fa-edit fa-2x"></i></span></a>
      </div>
          {!!$recipe->description!!}

          <div class="d-flex"><p class="headings">Επίπεδο Δυσκολίας:   </p>

            <div class="difficulty ml-2" style="font-family: 'Arial Black'; margin-top: -30px;">
              <span class="vary-easy {{$recipe->difficulty == 'Πολύ Εύκολο' ? 'red' : ''}}" style="font-size: 20px;font-weight: 1000;" >I</span>
              <span class="easy {{$recipe->difficulty == 'Εύκολο' ? 'red' : ''}}" style="font-size: 25px;font-weight: 1000;" >I</span>
              <span class="medium {{$recipe->difficulty == 'Μέτριο' ? 'red' : ''}}" style="font-size: 30px;font-weight: 1000;" >I</span>
              <span class="hard {{$recipe->difficulty == 'Δύσκολο' ? 'red' : ''}}" style="font-size: 35px;font-weight: 1000;">I</span>
              <span class="very-hard {{$recipe->difficulty == 'Πολύ Δύσκολο' ? 'red' : ''}}" style="font-size: 40px;font-weight: 1000;">I</span>
            </div>
          </div>

            <div class="d-flex"><p class="headings mr-2">Κουζίνα:</p>{{$recipe->cuisine['name']??''}}</div>

            <div class="d-flex"><p class="d-inline headings mr-2">Κατηγορία:</p>@foreach ($recipe->categories as $category) {{$category->name}} @endforeach</div>

            <div class="d-inline-flex mr-3"><p class=" headings mr-2">Προετοιμασία:</p>{{Str::limit($recipe->prep_time,5,' ')}}<i class="ml-2 fas fa-stopwatch fa-lg" style="color: Dodgerblue;"></i></div>
            <div class="d-inline-flex"><p class="headings mr-2">Μαγείρεμα:</p>{{Str::limit($recipe->cook_time,5,' ')}}<i class="ml-2 fas fa-stopwatch fa-lg" style="color: Dodgerblue;"></i></div>

            <div class="d-flex"><p class="headings mr-2">Μερίδες:</p>{{$recipe->portion}} {{$recipe->serving_size}}</div>


            <div class="row">
              <div class="col-sm-1">
                <span class="hvr-grow" style="font-size: 12px; color: Dodgerblue;">
                  <i class="fab fa-twitter fa-3x"></i>
                </span>
              </div>
              <div class="col-sm-1">
                <span class="hvr-grow" style="font-size: 12px; color: Dodgerblue;">
                  <i class="fab fa-facebook-f fa-3x"></i>
                </span>
              </div>
              <div class="col-sm-1">
                <span class="hvr-grow" style="font-size: 12px; color: Dodgerblue;">
                  <i class="fab fa-instagram fa-3x"></i>
                </span>
              </div>
              <div class="col-sm-1">
                <span class="hvr-grow" style="font-size: 12px; color: Dodgerblue;">
                    <i class="fab fa-pinterest fa-3x"></i>
                  </span>
              </div>
              <div class="col-sm-1">
                <span class="hvr-grow" style="font-size: 12px; color: Dodgerblue;">
                    <i class="fab fa-youtube fa-3x"></i>
                  </span>
              </div>
              <div class="col-sm-1">
                <span class="hvr-grow" style="font-size: 12px; color: Dodgerblue;">
                    <i class="fas fa-print fa-3x"></i>
                  </span>
              </div>
            </div>
            {{-- <star-rating v-model="rating"></star-rating> --}}
            {{-- <star-rating :recipe="{{$recipe->id}}"
            :rated={{ $recipe->rated() ? 'true' : 'false' }}></star-rating> --}}
            <rating  :recipe={{ $recipe->id }}></rating>
            {{-- <rating :recipe={{ $recipe->id }}></rating> --}}

          </div>

  </div>

  <div class="row">
    <div class="col-md-5">
      {{-- @foreach ($recipe->ingredients as $master)
        <h3 class="my-3">{{$master->heading}}</h3>
        <ul>
        @foreach ($master->children as $ingredient)
          @if ($ingredient->recipe_id == $master->recipe_id)
            @isset($ingredient->quantity )
              <li>{{$ingredient->quantity }}</li>
            @endisset
          @endif
        @endforeach
        </ul>
      @endforeach --}}
      {{-- OR use bootstrap table https://getbootstrap.com/docs/4.1/content/tables/ --}}
          @foreach ($recipe->ingredients->sortBy('order') as $master)
            <h3 class="my-3">{{{$master->heading ?? ''}}}</h3>

             {{-- @if ($loop->first) {{--Shows only once what is inside the loop --}}
             @isset($master->heading )
               <table class="table table-hover">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Ποσότητα</th>
                   <th scope="col">Είδος</th>
                   <th scope="col">Υλικό</th>
                   <th scope="col">Πληροφορίες</th>
                 </tr>
               </thead>
               <tbody>

             @endisset

              {{-- @endif --}}

            {{-- <h3 class="my-3">{{$master->heading}}</h3> --}}
            @foreach ($master->childrens->sortBy('order') as $ingredient)
              {{-- @if ($loop->first) --}}
              {{-- the one time code here --}}
              {{-- @endif --}}

              @if ($ingredient->recipe_id == $master->recipe_id)
                <tr>

                @isset($ingredient->quantity )
                  <td>{{$ingredient->id }}</td>
                  <td>{{$ingredient->quantity }}</td>
                  <td>{{$ingredient->unit }}</td>
                  {{-- <td>{{$ingredient->foodstaff_id }}</td> --}}
                  <td>{{$ingredient['foodstaff']['name'] }}</td>

                  <td>{{$ingredient->details }}</td>
                @endisset
              </tr>

              {{-- @endif

              @if ($loop->first) --}}
              @endif

            @endforeach
            </tbody>
          </table>
          @endforeach
        </div>

        <div class="col-md-7">
          <h2 class="my-3" style="color: #0B5004; font-weight: 1000;">ΕΚΤΕΛΕΣΗ</h2>
          @foreach ($recipe->executions->sortBy('order') as $master)
            <h3 class="my-3">{{$master->title}}</h3>
            <p> {!!$master->body!!}</p>
            {{-- <ul> --}}
            {{-- @foreach ($master->children as $ingredient)
              @if ($ingredient->recipe_id == $master->recipe_id)
                @isset($ingredient->quantity )
                  <li>{{$ingredient->quantity }}</li>
                @endisset
              @endif
            @endforeach --}}
            {{-- </ul> --}}
          @endforeach
        </div>

</div>
    <!-- /.row -->
<h6 class="d-inline-flex">Source:</h6> <a href="{{$recipe->source_url}}" target="_blank">{{$recipe->source}}<a>
    <!-- Related Projects Row -->
    <h3 class="my-4">Σχετικές Συνταγές</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  {{-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

{{-- </body> --}}

</html>
@endsection
