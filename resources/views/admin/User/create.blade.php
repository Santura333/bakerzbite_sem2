@extends('admin.admin_master')

@section('dashboard_content')

<section class="content">
    <div class="row">
        {{-- Add User Page --}}
        <div class="col-md-8 col-lg-8 offset-2">
            <div class="box">
                <div class="box-header with-border d-flex justify-content-between align-items-center">
                    <h3 class="box-title">Create User</h3>
                    <a href="{{ route('user.index') }}" class="btn btn-primary">Back To List User</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <h5>User Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="" name="name" class="form-control" required=""
                                    data-validation-required-message="This field is required">
                                <div class="help-block"></div>
                            </div>
                            @error('name')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h5>User Email <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="" name="email" class="form-control" required=""
                                    data-validation-required-message="This field is required">
                                <div class="help-block"></div>
                            </div>
                            @error('email')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection