@extends('layouts.application')

@push('styles')
  <link href="{{ asset('css/foodstaff.css') }}" rel="stylesheet">
@endpush
{{-- @prepend('styles')
  <link href="{{ asset('css/foodstaff.css') }}" rel="stylesheet">
@endprepend --}}
@section('content')

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Portfolio 4
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Portfolio 4</li>
    </ol>

    <div class="row">

      {{-- <h1 class="title">Flip Menu. Clickable/Responsive/Pure CSS</h1>
		<p class="creds">Created by <a target="_blank" href="https://twitter.com/fornyhucker">fornyhucker</a></p> --}}
		<div class="flip-menu">
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
        <input type="checkbox" class="flipper" id="a">
				<label for="a" class="flip-item">
					<figure class="front"><img src="http://lorempixel.com/500/500/food/1" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/1" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="b">
				<label for="b" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/2" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/2" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="c">
				<label for="c" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/3" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/3" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="d">
				<label for="d" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/4" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/4" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="e">
				<label for="e" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/5" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/5" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="f">
				<label for="f" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/6" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/6" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="g">
				<label for="g" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/7" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/7" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="h">
				<label for="h" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/8" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/8" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="j">
				<label for="j" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/9" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/9" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="k">
				<label for="k" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/10" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/10" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="l">
				<label for="l" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/1" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/1" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
			<section class="flip-item-wrap">
				<img class="fake-image" src="http://lorempixel.com/500/500/food/1" alt=""><!-- this image will add height to parent element -->
				<input type="checkbox" class="flipper" id="m">
				<label for="m" class="flip-item">
				    <figure class="front"><img src="http://lorempixel.com/500/500/food/2" alt=""></img></figure>
				    <figure class="back">
				    	<img src="http://lorempixel.com/g/500/500/food/2" alt=""></img>
				    	<div class="flip-item-desc">
				    		<h4 class="flip-item-title">Lorem ipsum dolor</h4>
				    		<p>Dolor sit amet, consectetur adipiscing elit. Vestibulum posuere turpis lacus.</p>
				    	</div>
				    </figure>
				</label>
			</section>
		</div>
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
