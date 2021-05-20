@extends('user/app')

{{--@section('bg-img',Storage::disk('local')->url($post->image))--}}

{{--@section('title',$post->title)--}}

{{--@section('sub-heading',$post->subtitle)--}}


@section('main-content')

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0&appId=271757984481444&autoLogAppEvents=1" nonce="CUYRc1kP"></script>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @foreach($movies as $movie)
                        <h2 class="movie-title">
                            {{ $movie->title }}
                        </h2>
                    @endforeach
                </div>
                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="10"></div>
            </div>
        </div>
    </article>

    <hr>

@endsection
