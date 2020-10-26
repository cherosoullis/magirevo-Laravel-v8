@extends('layouts.application')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h3>Αγαπημένες Συνταγές</h3>
            </div>
@if (!empty($myFavorites))

  @forelse ($myFavorites as $myFavorite)
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h1><a href="{{route('recipes.show', $myFavorite->slug)}}">{{ $myFavorite->name }}</a> </h1>
                    </div>

                    <div class="panel-body">
                        {!! $myFavorite->description !!}
                    </div>
                    @if (Auth::check())
                        <div class="panel-footer">
                            <favorite
                                :recipe={{ $myFavorite->id }}
                                :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }}
                            ></favorite>
                        </div>
                    @endif
                </div>
            @empty
                <p>Δεν έχετε επιλάξει συνταγές για αγαπημένες</p>
            @endforelse
          @else
            <p>Δεν έχετε επιλάξει συνταγές για αγαπημένες</p>
      @endif

         </div>
    </div>
</div>
@endsection
