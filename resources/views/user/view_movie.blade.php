@extends('user/app')

@section('bg-img',asset('user/img/about-bg.jpg'))

@section('title','Movie World')

@section('main-content')

    <!-- Main Content -->

    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-4">
                    <div class="card" style="width: 20rem; height: 500px">
                        <h4 class="card-title" style="text-align: center;font-family: 'Times New Roman';padding-top: 15px">{{$movie->title}}</h4>
                        <hr>
                        <a href="{{ route('movie.show',$movie->id) }}"> <img src="{{$movie->poster}}" class="card-img-top" alt="..." height="320px" width="250px"></a>
                        <p class="card-text" style="padding: 5px">Released Year: {{$movie->release_year}}</p>
                        <a class="btn btn-info" href="{{ route('movie.show',$movie->id) }}" style="font-size: 15px;padding: 5px">Movie Details</a>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
@endsection
