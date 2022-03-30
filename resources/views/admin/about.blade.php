@extends('layouts.admin')
@section('admin_content')
<main>
    <!-- form start -->
    <form action="{{route('admin.about.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">About US</h3>
                    </div>
                    @foreach($about as $about)
                    <!-- /.card-header -->
                    <div class="center">
                        <img src="{{asset($about->img)}}" width="280px" height="170px">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" class="form-control" id="img" placeholder="Enter Name" name="img">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" class="form-control" cols="20" rows="4">{{$about->description}}</textarea>
                        </div>
                        @endforeach
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