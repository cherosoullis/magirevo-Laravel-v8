@extends('layouts.application')


@section('content')

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Συνταγές
      <small>Οι Συνταγές μου</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Αρχική</a>
      </li>
      <li class="breadcrumb-item active">Οι συνταγές μους</li>
    </ol>

    <div class="row">

      @foreach ($recipes as $key => $recipe)
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ asset('storage/recipes/'. $recipe->photo) }}" alt=""></a>
            {{-- <a href="#"><img class="card-img-top" src="{{ asset('storage/recipes/thumbnail/'. $recipe->photo) }}" alt=""></a> --}}

            <div class="card-body">
              <h4 class="card-title">
                <a href="{{route('recipes.show',$recipe->slug )}}">{{$recipe->name}}</a>
              </h4>
              <p class="card-text">{!!Str::limit($recipe->description, 150, ' (...)') !!}</p>

              @if (Auth::check())
                <div class="panel-footer">
                    <favorite
                        :recipe={{ $recipe->id }}
                        :favorited={{ $recipe->favorited() ? 'true' : 'false' }}
                    ></favorite>
                </div>
            @endif
            </div>
          </div>
        </div>

      @endforeach

    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.container -->

  @endsection
