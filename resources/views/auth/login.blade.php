@extends('layouts.application')

@section('content')
  <div style="padding:20px;">
    <div class=" d-flex justify-content-center">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="card" style="width: 18rem;">
          <div class="card-body">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
              <label class="label" value="Email" for="email">Ηλεκτρονικό Ταχυρομείο</label>
              <input type="email" name="email"id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus value="{{old('email')}}">
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
                <button type="submit" class="btn btn-primary submit-btn hvr-grow m-5">Είσοδος</button>

            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
