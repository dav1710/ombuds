@extends('admin/layouts.admin_layout')

@section('title', 'Add News')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add News</h1>
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
                   <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="card-body">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Վեռնագիր Հայերեն</label>
                               <input type="text" name="title_am" class="form-control" id="exampleInputEmail1" placeholder="Enter name category" required>
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Վեռնագիր Անգլերեն</label>
                               <input type="text" name="title_en" class="form-control" id="exampleInputEmail1" placeholder="Enter name category" required>
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Նորություն</label>
                               <input type="text" name="content_am" class="form-control" id="exampleInputEmail1" placeholder="Enter name category" required>
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail1">Նորություն</label>
                               <input type="text" name="content_en" class="form-control" id="exampleInputEmail1" placeholder="Enter name category" required>
                           </div>
                           <div class="form-group">
                            <label for="file_am">Հայերեն Նկար</label>
                            <input type="file" name="file_am" class="form-control" id="file_am" placeholder="Choose File">

                            </div>
                           <div class="form-group">
                            <label for="file_en">Անգլերեն Նկար </label>
                            <input type="file" name="file_en" class="form-control" id="file_en" placeholder="Choose File">

                            </div>
                            <div class="form-group">
                                    <label for="tabs[]">Ենթաէջեր</label>
                                    <select id="tabs[]" class="selectpicker" name="tabs[]" multiple aria-label="Default select example" data-live-search="true">
                                      @foreach ($tabs as $item)
                                        <option value="{{ $item->id }}">{{ $item->name_am }}</option>
                                      @endforeach
                                    </select>
                            </div>
                       </div>


                       <div class="card-footer">
                           <button type="submit" class="btn btn-primary">+ Add News</button>
                       </div>
                   </form>

               </div>
               </div>
           </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
@section('scripts')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
@endsection
