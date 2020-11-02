<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate(true) !!}

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <title>@yield('title')</title> --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js" defer></script>
    {{-- Bootstrap slider
    <script src="{{ asset('js/slider.js') }}" defer></script>
    Select2
    <script src="{{ asset('js/select.js') }}" defer></script> --}}
    <livewire:styles />


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
    {{-- For Select2 --}}
    <link href="{{ asset('css/select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div id="app">
      <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm menu">
      {{-- <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm" style="background-color: #649fed;"> --}}
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <h1>  {{ config('app.name', 'Laravel') }}  </h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link navigation-item" href="{{ url('/') }}">Αρχική</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link navigation-item" href="{{route('recipes.index')}}">Συνταγές</a>
                      </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link navigation-item" href="{{ url('/') }}">Γλωσσάρι</a>
                      </li> --}}
                      <li class="nav-item">
                        <a class="nav-link navigation-item" href="{{ route('contact.create') }}">Επικοινωνία</a>
                      </li>
                      {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Συνταγές
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                          <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                          <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                          <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                          <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                          <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                        </div>
                      </li> --}}
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link drop-menu navigation-item" data-toggle="modal" data-target="#loginModal" href="{{ route('login') }}">Σύνδεση</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link drop-menu navigation-item" data-toggle="modal" data-target="#registerModal" href="{{ route('register') }}">Εγγραφή</a>
                                </li>
                            @endif
                        @else
                          <li class="nav-item">
                            <a class="nav-link drop-menu navigation-item" href="{{route('recipes.create')}}">Καραχώρηση</a>
                          </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle drop-menu navigation-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right submenu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item navigation-item" href="{{ route('my-recipes') }}">Οι συνταγές μου</a>
                                  <a class="dropdown-item navigation-item" href="{{ url('favorite-recipes') }}">Αγαπημένες συνταγές</a>
                                  @role('super-admin')
                                    <a class="dropdown-item navigation-item" href="{{ route('recipes.unapproved') }}">Μη Αποδεκτές</a>
                                    <a class="dropdown-item navigation-item" href="{{ url('categories') }}">Κατηγορίες</a>
                                    <a class="dropdown-item navigation-item" href="{{ url('foodstaffs') }}">Συστατικά</a>
                                    <a class="dropdown-item navigation-item" href="{{ route('contact.index') }}">Μηνύματα</a>

                                  {{-- @else
                                      I am not a writer... --}}
                                  @endrole


                                    <a class="dropdown-item navigation-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{-- {{ __('Logout') }} --}}Αποσύνδεση
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="pt-4">
            @yield('content')
        </main>

    </div>
    <!-- Compine JS -->
    <script src="{{ asset('js/compine.js') }}" defer></script>
    {{-- Summernote--}}
    <script src="{{ asset('js/summernote.js') }}" defer></script>
    <script src="{{ asset('js/dynamic.js') }}" defer></script>
    <script src="{{ asset('js/slug.js') }}" defer></script>
    <script src="{{ asset('js/slugconfig.js') }}" defer></script>
    <script src="{{ asset('js/previewPhoto.js') }}" defer></script>
    <script src="{{ asset('js/stepform.js') }}" defer></script>
    @stack('scripts')
    <livewire:scripts />
  {{-- @include('cookieConsent::index') --}}


  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Σύνδεση</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{-- <div style="padding:20px;">
            <div class=" d-flex justify-content-center"> --}}
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                {{-- <div class="card" style="width: 18rem;">
                  <div class="card-body"> --}}

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                      <label class="label" value="Email" for="email">Ηλεκτρονικό Ταχυρομείο</label>
                      <input type="email" name="email"id="email" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required autofocus value="{{old('email')}}">
                      <small id="emailHelp" class="form-text text-muted">Δεν θα αποκαλύψουμε το Ηλ. Ταχυδρομείο σας σε κανένα</small>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label class="label" value="Password" for="password">Κωδικός</label>
                      <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required autocomplete="current-password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        {{-- <button type="submit" class="btn btn-primary submit-btn hvr-grow m-5">Είσοδος</button> --}}
                        <div class="modal-footer">
                          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Κλείσιμο</button> --}}
                          <button type="submit" class="btn btn-primary submit-btn">Είσοδος</button>
                        </div>
                    </div>
                </form>
              {{-- </div>
            </div>
          </div>
        </div> --}}
        </div>

      </div>
    </div>
  </div>

  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Εγγραφή</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{-- <div style="padding:20px;">
            <div class=" d-flex justify-content-center"> --}}
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                {{-- <div class="card" style="width: 18rem;">
                  <div class="card-body"> --}}

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                      <label class="label" value="Name" for="name">Όνομα</label>
                      <input type="text" name="name"id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus value="{{old('name')}}">
                      <small id="emailHelp" class="form-text text-muted">Δεν θα αποκαλύψουμε το Ηλ. Ταχυδρομείο σας σε κανένα</small>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label class="label" value="Email" for="email">Ηλεκτρονικό Ταχυρομείο</label>
                      <input type="email" name="email"id="email" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required autofocus value="{{old('password')}}">
                      <small id="emailHelp" class="form-text text-muted">Δεν θα αποκαλύψουμε το Ηλ. Ταχυδρομείο σας σε κανένα</small>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label class="label" value="Password" for="password">Κωδικός</label>
                      <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required autocomplete="current-password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label class="label" value="Password" for="password">Επιβεβαίωση Κωδικού</label>
                      <input type="password" name="password_confirmation" id="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" required autocomplete="current-password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <button type="submit" class="btn btn-primary submit-btn hvr-grow m-5">Είσοδος</button>

                    </div>
                </form>
              {{-- </div>
            </div>
          </div>
        </div> --}}
        </div>

      </div>
    </div>
  </div>
</body>
</html>
