@extends('layouts.application')

@push('styles')
  {{-- <link href="{{ asset('css/foodstaff.css') }}" rel="stylesheet"> --}}
@endpush
{{-- @prepend('styles')
  <link href="{{ asset('css/foodstaff.css') }}" rel="stylesheet">
@endprepend --}}
@section('content')

  <!-- Page Content -->
  <div class="container">

    <table data-toggle="table">
      <thead>
        <tr>
          <th>Item ID</th>
          <th>Item Name</th>
          <th>Item Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Item 1</td>
          <td>$1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Item 2</td>
          <td>$2</td>
        </tr>
      </tbody>
    </table>

  </div>
  <!-- /.container -->

  @endsection
