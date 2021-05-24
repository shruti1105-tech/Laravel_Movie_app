
@extends('user/app')

@section('bg-img',asset('user/img/about-bg.jpg'))
{{--@section('sub-heading','keep learning keep going')--}}
@section('title','Cast')

@section('main-content')
    <a href="/home" class="btn btn-primary" style="float: right;margin-right: 100px;border-radius: 5px;padding: 12px">Back</a>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            @foreach($casts as $cast)

                <section class="text-gray-600 body-font" style="border-radius: 10px;border: solid grey 1px;padding: 10px">
                    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                            <img class="object-cover object-center rounded" alt="hero" style="width: 300px; height: 400px;" src="{{$cast->cast_poster}}" />
                        </div>
                        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$cast->name}}

                            </h1>
                            <p class="mb-8 leading-relaxed">Biography: {{$cast->bio}}</p>
                            <p class="mb-8 leading-relaxed">BirthDate: {{$cast->birth_date}}</p>
                            <p class="mb-8 leading-relaxed text-gray-900">Movies: {{$cast->list_of_movies }}</p>
                        </div>
                    </div>
                </section>

            @endforeach
        </div>
        <hr>
@endsection
