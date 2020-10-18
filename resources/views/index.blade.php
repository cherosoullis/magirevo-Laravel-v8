@extends('layouts.application')

@section('content')
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        {{-- <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')"> --}}
          <div class="carousel-item active" style="background-image: url('storage/carousel/Healthy_eating.jpg')">

          {{-- <div class="carousel-caption d-none d-md-block" style="right: -450px;"> --}}
            <div class="carousel-caption d-none d-md-block">
            <h3>Julia Child</h3>
            <p>Αμερικανίδα σύμβουλος μαγειρικής</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('storage/carousel/Corn_cobs_in_a_basket.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Ευριπίδης</h3>
            <p>Αρχαίος τραγικός</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('storage/carousel/Strawberries.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Jean Anthelme Brillat-Savarin</h3>
            <p>Γάλλος περιώνυμος μπον βιβέρ</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4 headings">Κύριες Κατηγορίες</h1>

    <!-- Marketing Icons Section -->
    <div class="row">

      @foreach ($categories as $key => $category)
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            {{-- <h4 class="card-header"><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></h4> --}}
            <h4 class="card-header">{{$category->name}}</h4>
            <div class="card-body">
              <p class="card-text"><img class="card-img-top" src="{{ asset('storage/'. $category->image) }}" alt=""></p>
            </div>
            <div class="card-footer">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Υποκατηγορίες
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  @foreach ($category->children as $child)
                    <a class="dropdown-item menu-item" href="{{route('categories.show', $child->id)}}">{{ $child->name }}</a>
                  @endforeach
                  {{-- <a class="dropdown-item" href="#">{{ $child->name }}</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a> --}}
                </div>
              </div>
              {{-- <a href="#" class="btn btn-primary">Learn More</a> --}}
            </div>
          </div>
        </div>
      {{-- @empty
        <div></div> --}}
      @endforeach


      {{-- <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Ζαχαροπλαστική</h4>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Ροφήματα</h4>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div> --}}
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2 class="headings">Πρόσφατες Συνταγές</h2>

    <div class="row">

        @foreach ($recents as $key => $recipe)
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="{{route('recipes.show',$recipe->slug)}}"><img class="card-img-top" src="{{ asset('storage/recipes/'. $recipe->photo) }}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{route('recipes.show',$recipe->slug)}}">{{$recipe->name}}</a>
              </h4>
              <p class="card-text">{!!Str::limit($recipe->description, 150, ' (...)') !!}</p>
            </div>
          </div>
        </div>
        {{-- @empty
          <div></div> --}}
        @endforeach
      {{-- <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Two</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Three</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Four</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Five</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Six</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div> --}}
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <h2 class="headings">Δημοφιλή Συνταγές</h2>
    <div class="row">
      @foreach ($populars as $key => $recipe)
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="{{route('recipes.show',$recipe->slug)}}"><img class="card-img-top" src="{{ asset('storage/recipes/'. $recipe->photo) }}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{route('recipes.show',$recipe->slug)}}">{{$recipe->name}}</a>
            </h4>
            <p class="card-text">{!!Str::limit($recipe->description, 150, ' (...)') !!}</p>
          </div>
        </div>
      </div>
      {{-- @empty
        <div></div> --}}
      @endforeach

        {{-- Δυσκολία:<strong>{{$popular->difficulty}}</strong> --}}
      </div>
      <div class="col-lg-6">
        {{-- <img class="img-fluid rounded" src="{{ asset('storage/recipes/'. $popular->photo) }}" alt=""> --}}
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    {{-- <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div> --}}

  </div>
  <!-- /.container -->

  <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
  <div class="height">
      {{-- <h3 class="text-center scroll">Scroll down </h3> --}}
  </div>
  <!-- Footer -->
  <footer class="py-4 " style="background-color: #649fed;">
    <div class="container">
      <p class="m-0 text-center text-white" >Copyright &copy; ΜΑΓΕΙΡΥΩ 2020</p>
    </div>
    <!-- /.container -->
  </footer>
@endsection
