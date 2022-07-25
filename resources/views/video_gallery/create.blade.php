@extends('layouts.admin')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Video</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('videogal.store')}}" method="post" enctype="multipart/form-data">
                            @if(session('message'))
                                <script>

                                    //alert('Create Successful');
                                </script>
                            @endif

                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" value="{{old('title')}}" name="title" class="form-control" id="exampleInputTitle" placeholder="Enter Title">
                                    @error('title')
                                        <span class="note-help-block text-danger">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputDescription">Description</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>


                                </div>


                                <div class="form-group">
                                    <label for="exampleInputTitle">video input</label>
                                    <input type="text" value="{{old('file')}}" name="file" class="form-control" id="exampleInputTitle" placeholder="Enter Title">
                                    @error('file')
                                    <span class="note-help-block text-danger">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror

                                </div>




                                <div class="form-group">
                                    <label for="exampleInputTitle">Priority</label>
                                    <input type="number" value="{{old('priority')}}" name="priority" class="form-control" id="exampleInputTitle" placeholder="Enter priority">
                                    @error('priority')
                                    <span class="note-help-block text-danger">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror

                                </div>




                                <div class="form-group">
                                    <label for="exampleInputStatus">Status</label>
                                    <select class="form-control form-select" name="status" id="exampleInputStatus">
                                        <option value="">Chose</option>
                                        <option value="1">Active</option>
                                        <option value="2">De-Active</option>
                                    </select>

                                    @error('status')
                                    <span class="note-help-block text-danger">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->


                    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace( 'editor' );
                    </script>

                </div>

            </div><!-- /.container-fluid -->
    </section>
@endsection
