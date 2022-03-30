@extends('layouts.admin')
@section('admin_content')

<main>
    <form action="{{route('admin.info.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card card-danger">
                    <div class="card-header">
                    <h3 class="card-title">Logo Dark</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" >
                        <div class="form-group">
                            <div class="center">
                                <img src="{{asset($contact->logo_dark)}}"  height="140px" width="190px">
                            </div>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" name="logo_dark">
                            <label class="custom-file-label" style="margin-top: 20px" >Choose Logo</label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card card-info">
                    <div class="card-header">
                    <h3 class="card-title">Social Media</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{$contact->facebook}}">
                        </div>
                        <div class="form-group">
                            <label for="">Twitter</label>
                            <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="{{$contact->twitter}}" >
                        </div>
                        <div class="form-group">
                            <label for="">LinkedIn</label>
                            <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn" value="{{$contact->linkedin}}">
                        </div>
                        <div class="form-group">
                            <label for="">Pinterest</label>
                            <input type="text" class="form-control" name="pinterest" placeholder="Pinterest" value="{{$contact->pinterest}}">
                        </div>
                        <div class="form-group">
                            <label for="">Instagram</label>
                            <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{$contact->instagram}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                    <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Logo White</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="background-color:black">
                        <div class="form-group">
                            <div class="center">
                                <img src="{{asset($contact->logo_white)}}" height="140px" width="190px">
                            </div>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" name="logo_white">
                            <label class="custom-file-label" style="margin-top: 20px">Choose Logo</label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card card-success">
                    <div class="card-header">
                    <h3 class="card-title">Contact Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="" placeholder="Enter Name" name="name" value="{{$contact->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <textarea name="title" id="" class="form-control" cols="20" rows="3">{{$contact->title}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Drop Us A Line</label>
                            <textarea name="description" id="" class="form-control" cols="20" rows="4">{{$contact->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Email address</label>
                            <input type="email" class="form-control" id="" placeholder="Enter Email" name="email" value="{{$contact->email}}">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control"  placeholder="Phone" name="phone" value="{{$contact->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tel.</label>
                            <input type="text" class="form-control"  placeholder="Telephone" name="tel" value="{{$contact->tel}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="center">
                <button type="submit" class="btn btn-outline-info btn-sm" style="width: 40% ; height:40px; margin-bottom:20px ">
                    SAVE ALL
                </button>
            </div>
        </div>

    </form>
</main>

@endsection