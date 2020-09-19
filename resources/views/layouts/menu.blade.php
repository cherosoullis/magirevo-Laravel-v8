<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="{{ url('/') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Αρχική
      </a>
      <a href="{{route('recipes.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Συνταγές
      </a>
      <a href="{{ url('/') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
        Γλωσσάρι
      </a>
      <a href="{{ url('/') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
        Επικοινωία
      </a>
      @if (Route::has('login'))
          {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
            {{-- @include('layouts.menu') --}}
              @auth
                <a href="{{ url('/dashboard') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                  Dashboard
                </a>
              @else
                <a href="{{ route('login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                  Σύνδεση
                </a>
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                      Εγγραφή
                    </a>
                  @endif
              @endif
          {{-- </div> --}}
      @endif
    </div>
    <div>
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
    </div>
  </div>
</nav>

          {{-- <!--Bootstrap Navigation links -->
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
          </ul>
          <!-- End Bootstrap navigation links --> --}}

                  {{-- <ul class="flex">
                    <li class="mr-6">
                      <a class="text-blue-500 hover:text-blue-800" href="{{ url('/') }}">Αρχική</a>
                    </li>
                    <li class="mr-6">
                      <a class="text-blue-500 hover:text-blue-800" href="{{route('recipes.index')}}">Συνταγές</a>
                    </li>
                    <li class="mr-6">
                      <a class="text-blue-500 hover:text-blue-800" href="{{ url('/') }}">Γλωσσάρι</a>
                    </li>
                    <li class="mr-6">
                      <a class="text-gray-400 cursor-not-allowed" href="{{ url('/') }}">Contact</a>
                    </li>
                  </ul> --}}
