@extends('layouts.admin')
@section('admin_content')

<main>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>S/L</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>Image</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @php
               $i = 1;   
              @endphp
              @foreach ($homes as $home)                       
              <tr>
                <td>{{$i}}</td>
                <td>{{$home->title}}</td>
                <td>{{$home->sub_title}}</td>
                <td>
                  <img src="{{asset($home->image)}}" width="80px" height="70px">
                </td>
                <td>
                  <a type="button" class="btn btn-outline-danger btn-sm" onclick="return myFunction();" href="{{route('admin.home.delete', ['id'=>$home->id])}}">
                    Delete
                  </a>
                </td>
              </tr>
              @php
                $i = $i+1;   
              @endphp
              @endforeach

            </tbody>
          </table>
          <button type="button" style="margin-top: 10px; margin-bottom: 10px; margin-left:10px" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#staticBackdrop">
            Add More
        </button>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <form action="{{route('admin.home.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="input-group">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Image</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <input type="text" class="form-control" name="title">
                        </td>
                        <td>
                          <input type="text" class="form-control" name="sub_title">
                        </td>
                        <td>
                          <div class="custom-file">
                            <label class="custom-file-label">Choose Image</label>
                            <input type="file" class="custom-file-input" name="img">
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
            </div>
          </div>
        </div>
      </div>
  </form>
</main>
<script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })
</script>

@endsection