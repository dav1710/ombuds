@extends('admin/layouts.admin_layout')

@section('title', 'Edit News')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit News: {{ $news['title'] }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">x</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">

                        <!-- form start -->
                        <form action="{{ route('news.update', $news['id']) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="old_image" value="{{ $news['img'] }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" value="{{ $news['title'] }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter name category" required>
                                </div>
                                    <div class="form-group">
                                        <input type="file" name="img" value="{{$news['img']}}" class="form-control" id="img" name="img" placeholder="Choose File">
                                        <img src="/{{$news['img']}}" alt="img">
                                        </div>
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save(Update)</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

