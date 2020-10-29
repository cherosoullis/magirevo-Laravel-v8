@extends('layouts.application')

@section('content')
  {{-- @if (\Session::has('success'))
      <div class="alert alert-success">
          <ul>
              <li>{!! \Session::get('success') !!}</li>
          </ul>
      </div>
  @endif --}}
  <!-- Page Content -->
  <div class="container">

    {{-- <h1 class="my-4 headings">Επικοινωνία</h1> --}}

    <div class="row justify-content-center">
  		<div class="col-12 col-md-8 col-lg-6 pb-5">
        <!--Form with header-->
            <form class="contact-form" method="POST" action="{{route('contact.destroy', $contact->id)}}" enctype="multipart/form-data">
              @method ('post')
              @csrf
                <div class="card border-primary rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-success text-white text-center py-2">
                            <h3><i class="fa fa-envelope"></i>Μήνυμα</h3>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!--Body-->
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-success"></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" disabled value={{$contact->name}}>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-success"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" disabled value={{$contact->email}}>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-list text-success"></i></div>
                                </div>
                                <select name="category" class="form-control" id="category" disabled>
                                  <option value="{{$contact->category}}" selected>{{$contact->category}}</option>
                                </select>
                                {{-- <input type="text" class="form-control" id="nombre" name="name" placeholder="Όνομα" required> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-pen text-success"></i></div>
                                </div>
                                <input type="text" class="form-control" id="subject" name="subject" disabled value={{$contact->subject}}>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-success"></i></div>
                                </div>
                                <textarea class="form-control" name="comment" placeholder="Κείμενο" rows="5" disabled>{{$contact->comment}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">

                          @if($contact->file)<a href={{asset($contact->file)}}>{{Str::after(asset($contact->file), 'http://127.0.0.1:8000/storage/contact/')}}</a>@endif
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Διαγραφή" class="btn btn-danger btn-block rounded-0 py-2">
                        </div>
                    </div>
                </div>
            </form>
            <!--Form with header-->
          </div>
  	</div>

    <hr>

  </div>
  <!-- /.container -->

  <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

@endsection
