@extends('layouts.admin')
@section('admin_content')


<main>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Logo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                        <div class="">
                            <img src="{{asset('/assets/images/logo/logo-img.png')}}">
                        </div>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="logo">
                          <label class="custom-file-label" >Choose Logo</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
                  </div>
                </form>
            </div>
            <!-- /.card -->
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Social Media</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                        <label for="">Facebook</label>
                        <input type="email" class="form-control" name="facebook" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="">Twitter</label>
                        <input type="text" class="form-control" name="twitter" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="">LinkedIn</label>
                        <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn">
                    </div>
                    <div class="form-group">
                        <label for="">Pinterest</label>
                        <input type="text" class="form-control" name="pinterest" placeholder="Pinterest">
                    </div>
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control" name="instagram" placeholder="Instagram">
                    </div>
                   
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Submit</button>
                  </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Contact Information</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control"  placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control"  placeholder="Phone">
                    </div>
                   
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-info btn-sm">Submit</button>
                  </div>
                </form>
            </div>
            <!-- /.card -->
        </div>



    </div>
</main>


@endsection