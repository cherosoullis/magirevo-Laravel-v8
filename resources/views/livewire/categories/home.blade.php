@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Καταχώρηση Κατηγοριών</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('categories.categories')
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endsection

    {{-- @livewireScripts
</body>
</html> --}}
