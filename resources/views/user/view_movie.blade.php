@extends('user/app')

@section('bg-img',asset('user/img/about-bg.jpg'))

@section('title','Movie World')

@section('main-content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($movies as $movie)
                    <div class="movie-title">
                        <a href="#">
                            <h2 class="movie-title">
                                {{ $movie->title }}
                            </h2>
                            <h4 class="movie-date">
                                {{ $movie->	release_year }}
                            </h4>
                        </a>
                        <a href="#"><img width="200" src="{{ $movie->poster }}"></a>

                        <p class="post-meta">Posted by
                            <a href="#">Movie World</a>
                            {{ $movie->created_at->diffForHumans() }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
@endsection
