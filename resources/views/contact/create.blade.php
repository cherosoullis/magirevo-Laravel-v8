@extends('layouts.application')

@section('content')
  @if (\Session::has('success'))
      <div class="alert alert-success">
          <ul>
              <li>{!! \Session::get('success') !!}</li>
          </ul>
      </div>
  @endif
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div><br />
  @endif
  <!-- Page Content -->
  <div class="container">

    {{-- <h1 class="my-4 headings">Επικοινωνία</h1> --}}

    <div class="row justify-content-center">
  		<div class="col-12 col-md-8 col-lg-6 pb-5">
        <!--Form with header-->
            <form class="contact-form" method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data">
              @method ('post')
              @csrf
                <div class="card border-primary rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-success text-white text-center py-2">
                            <h3><i class="fa fa-envelope"></i> Επικοινωνία</h3>
                            <p class="m-0">Θα θέλαμε να μάθουμε την άποψη σας</p>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!--Body-->
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-success"></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Όνομα" required value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-success"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-list text-success"></i></div>
                                </div>
                                <select name="category" class="form-control" id="category">
                                  <option value=""selected>Κατηγορία</option>
                                  <option value="comments" {{ old('category') == 'comments' ? 'selected' : '' }}>Εισηγήσεις</option>
                                  <option value="recipe" {{ old('category') == 'recipe' ? 'selected' : '' }}>Παρουσίαση Συνταγής</option>
                                  <option value="οther" {{ old('category') == 'οther' ? 'selected' : '' }}>Διάφορα Θέματα</option>
                                </select>
                                {{-- <input type="text" class="form-control" id="nombre" name="name" placeholder="Όνομα" required> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-pen text-success"></i></div>
                                </div>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Θέμα" required value="{{old('subject')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-success"></i></div>
                                </div>
                                <textarea class="form-control" name="comment" placeholder="Κείμενο" required >{{old('comment')}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                              <!-- actual upload which is hidden -->
                            <input type="file" id="actual-btn" name="file" hidden/>
                            <!-- our custom upload button -->
                            <label id="label-chosen" for="actual-btn">Επιλέξτε αρχείο</label>

                            <!-- name of file chosen -->
                            <span id="file-chosen">Δεν επιλέγηκε αρχείο</span>
                        </div>

                        <div class="form-group mt-4 mb-4">
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                                &#x21bb;
                            </button>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <input id="captcha" type="text" class="form-control" placeholder="Καταχωρήστε Captcha" name="captcha">
                    </div>

                        <div class="text-center">
                            <input type="submit" value="Αποστολή" class="btn btn-success btn-block rounded-0 py-2">
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