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
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input"  name="img">
                            <label class="custom-file-label" style="margin-top: 20px" >Choose Image</label>
                            </div>
                        </div>
                        <div class="card card-primary card-info" style="margin-top: 30px;">
                            <div class="card-header">
                                <h3 class="card-title">Description First Section</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <textarea class="form-control compose-textarea" style="height: 250px" name="first_description">{{$about->first_description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-info">
                            <div class="card-header">
                                <h3 class="card-title">Description Second Section</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <textarea class="form-control compose-textarea" style="height: 250px" name="second_description">{{$about->second_description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 25px">
                            <label for="des">Mission Vission Home Page</label>
                            <textarea name="mission" id="des" class="form-control" cols="20" rows="4">{{$about->mission}}</textarea>
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