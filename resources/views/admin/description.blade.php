@extends('layouts.admin')
@section('admin_content')
<main>
    <div class="col-md-12">
        <form action="{{route('admin.mission.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card card-primary card-info">
                <div class="card-header">
                    <h3 class="card-title">Mission & Vission</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group">
                        <textarea class="form-control compose-textarea" style="height: 250px" name="mission">{{$mission->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-sm">
                        Save
                    </button>
                </div>
            </div>
        </form>
        <form action="{{route('admin.privacy.store')}}" method="POST" enctype="multipart/form-data">
            @csrf   
            <div class="card card-primary card-success">
                <div class="card-header">
                    <h3 class="card-title">Privacy Policy</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group">
                        <textarea class="form-control compose-textarea" style="height: 250px" name="privacy">{{$privacy->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-info btn-sm">
                        Save
                    </button>
                </div>
            </div>
        </form>
        <form action="{{route('admin.terms.store')}}" method="POST" enctype="multipart/form-data">
            @csrf  
            <div class="card card-primary card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Terms & Conditions</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group">
                        <textarea class="form-control compose-textarea" style="height: 250px" name="terms">{{$term->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-sm">
                        Save
                    </button>
                </div>
            </div>
        </form>    
    </div>
</main>

@endsection