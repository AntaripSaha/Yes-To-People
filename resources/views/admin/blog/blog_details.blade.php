@extends('layouts.admin')
@section('admin_content')
<main>
    <!-- form start -->
    <form action="{{route('admin.blog.update', ['id'=>$blog->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">blog Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="center">
                        <img src="{{asset($blog->image)}}" width="280px" height="170px">
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <input type="hidden" class="custom-file-input" name="previous_image" value="{{$blog->image}}">
                            <label class="custom-file-label" style="margin-top: 20px" >Change Image</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input name="title" id="" class="form-control" value="{{$blog->title}}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" class="form-control" cols="20" rows="4">{{$blog->description}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-success btn-sm">
                            Submit
                        </button>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </form>
</main>
@endsection