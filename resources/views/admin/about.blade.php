@extends('layouts.admin')
@section('admin_content')

<main>
    <form action="{{route('admin.home.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
             
                <div class="card card-success">
                    <div class="card-header">
                    <h3 class="card-title">Contact Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div style="margin-left: 250px; margin-top:30px !important" >
                        <img src="{{asset('/assets/images/logo/logo-img.png')}}" width="80px" height="70px">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" id="" placeholder="Enter Name" name="img">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="title" id="" class="form-control" cols="20" rows="4"></textarea>
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