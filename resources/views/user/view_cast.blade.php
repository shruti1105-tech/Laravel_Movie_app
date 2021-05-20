@extends('user.app')

@section('bg-img',asset('user/img/about-bg.jpg'))

@section('title','Movie World')

@section('main-content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($casts as $cast)
                    <div class="movie-title">
                        <a href="#">
                            <h3 class="movie-title">
                                {{ $cast->name }}
                            </h3>
                            <h5>
                                {{ $cast->bio }}
                            </h5>
                            <p>{{ $cast->birth_date }}</p>
                            <p>{{ $cast->list_of_movies }}</p>

                        </a>
                        <p class="post-meta">Posted by
                            <a href="#">Movie World</a>
                            {{ $cast->created_at->diffForHumans() }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
@endsection
