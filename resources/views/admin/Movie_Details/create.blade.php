@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Movie Detail
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- /.box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Titles</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                        <form role="form" action="{{route('movie_detail.store')}}" method="post"
                              enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Movie Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label for="subtitle">Movie overview</label>
                                    <input type="text" class="form-control" id="overview" name="overview"
                                           placeholder="Overview">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Release Year</label>
                                    <input type="number" class="form-control" id="year" name="release_year"
                                           placeholder="Release Year">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Runtime</label>
                                    <input type="text" class="form-control" id="runtime" name="runtime"
                                           placeholder="runtime">
                                </div>

                                <div class="form-group">
                                    <label for="image">Movie Poster</label>
                                    <input type="file" name="poster" id="poster">
                                </div>


                                <div class="form-check">
                                    <label>Movie</label><br>
                                    <input type="radio" name="status" value="1" class="form-check-input"
                                           id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Treading Movie</label><br>
                                    <input type="radio" name="status" value="1" class="form-check-input"
                                           id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Pending Movie</label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="cast">Movie casts</label>
                                    <input type="text" class="form-control" id="cast" name="cast" placeholder="cast">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button" href="{{route('movie_detail.index')}}" class="btn btn-warning">Back</a>
                            </div>
                        </form>
                    </div>


                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('footerSection')
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".select2").select2();
        });

    </script>
@endsection
