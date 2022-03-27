@extends('layouts.admin')
@section('admin_content')

<main>
    <form action="{{route('admin.home.store')}}" method="post" enctype="multipart/form-data">
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
                            <div class="">
                                <img src="{{asset('/assets/images/logo/logo-img.png')}}">
                            </div>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" name="logo">
                            <label class="custom-file-label" style="margin-top: 20px" >Choose Logo</label>
                            </div>
                        </div>
                        </div>
                        <button type="button" style="margin-top: 20px" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                            Add More
                        </button>
                    </div>
                </div>
                
                    <!-- /.card -->
            </div>
           
        </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
          </div>
        </div>
      </div>
</main>
<script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })
</script>

@endsection