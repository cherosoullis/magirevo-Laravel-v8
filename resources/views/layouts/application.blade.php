<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    <!-- Compine JS -->
    <script src="{{ asset('js/compine.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
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
                      <li class="nav-item">
                        <a class="nav-link navigation-item" href="{{ url('/') }}">Γλωσσάρι</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link navigation-item" href="{{ url('/') }}">Contact</a>
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
                                <a class="nav-link drop-menu navigation-item" href="{{ route('login') }}">Σύνδεση</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link drop-menu navigation-item" href="{{ route('register') }}">Εγγραφή</a>
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
                                  <a class="dropdown-item navigation-item" href="{{ url('favorite-recipes') }}">Αγαπημένες συνταγές</a>
                                  @role('super-admin')
                                  <a class="dropdown-item navigation-item" href="{{ url('categories') }}">Κατηγορίες</a>
                                  <a class="dropdown-item navigation-item" href="{{ url('foodstaffs') }}">Συστατικά</a>
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

    {{-- Summernote--}}
    <script src="{{ asset('js/summernote.js') }}" defer></script>
    <script src="{{ asset('js/dynamic.js') }}" defer></script>
    <script src="{{ asset('js/slug.js') }}" defer></script>
    <script src="{{ asset('js/slugconfig.js') }}" defer></script>
    <script src="{{ asset('js/previewPhoto.js') }}" defer></script>
    <script src="{{ asset('js/stepform.js') }}" defer></script>
    @stack('scripts')
    <livewire:scripts />


</body>
</html>
