@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">

    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

@endsection
@section('main-content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>


                    <div class="text-center">
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('movie_detail.create')}}"> Add New
                            post</a>
                    </div>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Movie title</th>
                                    <th>Movie Overview</th>
                                    <th>Release Year</th>
                                    <th>Runtime</th>
                                    <th>Cast</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($movie_details as $film)
                                    <tr>
                                        <td>{{$loop->index +1}}</td>
                                        <td>{{$film->title}}</td>
                                        <td>{{$film->overview}}</td>
                                        <td>{{$film->release_year}}</td>
                                        <td>{{$film->runtime}}</td>
                                        <td>{{$film->cast}}</td>
                                        <td><a href="{{route('movie_detail.edit',$film->id)}}"> Edit</td>
                                        {{--                                            <td><a href="{{route('movies.edit',$film->id)}}"> Update--}}
                                        {{--                                                    <i class="far fa-edit"></i></a></td>--}}


                                        <td>
                                            <form id="delete-form-{{$film->id}}"
                                                  method="post"
                                                  action="{{route('movie_detail.destroy',$film->id)}}"
                                                  style="display: none">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                            </form>
                                            <a href="" onclick="if(confirm('ARE YOU SURE ,YOU WANT TO DELETE THIS?'))
                                                {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{$film->id}}').submit();
                                                }else
                                                {
                                                event.preventDefault();
                                                }"> Delete</a>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Movie title</th>
                                    <th>Movie Overview</th>
                                    <th>Release Year</th>
                                    <th>Runtime</th>
                                    <th>Cast</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
