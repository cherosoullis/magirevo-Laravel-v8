@extends('layouts.application')


@section('content')

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Μηνύματα
      <small>Από επισκέπτες</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Αρχική</a>
      </li>
      <li class="breadcrumb-item active">Μηνύματα</li>
    </ol>

    <div class="row">

      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ημερομηνία</th>
            <th scope="col">Όνομα</th>
            <th scope="col">Ηλεκτρονικό Ταχυδρομείο</th>
            <th scope="col">Κατηγορία</th>
            <th scope="col">Θέμα</th>
            <th scope="col">Μήνυμα</th>
            <th scope="col">Συνημμένο</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($contact as $key => $message)
              <tr>
                <th scope="row">{{$message->id}}</th>
                <td class="font-weight-bold">{{$message->created_at}}</td>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->category}}</td>
                <td>{{$message->subject}}</td>
                <td>{{$message->comment}}</td>
                <td>@if($message->file)<a href={{asset($message->file)}}>{{Str::after(asset($message->file), 'http://127.0.0.1:8000/storage/contact/')}}</a>@endif</td>
                <td><a class="btn btn-success btn-sm" href="{{ route('contact.show', $message->id) }}" role="button"><i class="fas fa-eye"></i></a>
                  {{-- <a class="mr-2"href={{route('contact.show',$message->id)}}><i class="fas fa-eye text-success"></i></a> --}}
                <form style="display:inline" method="POST"  action="{{ route('contact.destroy', $message->id) }}" >
                   @method ('delete')
                    @csrf
                  <button class="btn btn-danger btn-sm ml-1" onclick="return confirm('Θέλετε να διαγράψετε αυτό το μήνυμα;')" type="submit"><i class="fas fa-trash-alt"></i></button>
                </form>

                  {{-- <a href={{route('contact.destroy',$message->id)}} onclick="return confirm('Θέλετε να διαγράψετε αυτό το μήνυμα;')"><i class="fas fa-trash-alt text-danger"></i></a> --}}
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>

    </div>


  </div>
  <!-- /.container -->

  @endsection
