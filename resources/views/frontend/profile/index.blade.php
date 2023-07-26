@extends('dashboard')

@section('userdashboard_content')
<div class="login-box bg-dark ">
    <form action="{{ route('user.profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="user-box">
            <input type="name" name="name" class="" id="" value={{ $user->name }}>
            <label class="" for="">Name <span>*</span></label>

        </div>
        @error('name')
        <span class="alert text-danger">{{ $message }}</span>
        @enderror
        <div class="user-box">
            <input type="email" name="email" class="" id="" value="{{ $user->email }}">
            <label class="" for="">Email Address <span>*</span></label>
        </div>
        @error('email')
        <span class="alert text-danger">{{ $message }}</span>
        @enderror

        <div class="user-box">
            <input type="text" name="phone_number" class="" id="" value="{{ $user->phone_number }}">
            <label class="" for="">Phone Number <span>*</span></label>
        </div>
        @error('phone_number')
        <span class="alert text-danger">{{ $message }}</span>
        @enderror

        <div class="user-box">
            <input type="text" name="address" class="" id="" value="{{ $user->address }}">
            <label class="" for="">Address <span>*</span></label>
        </div>
        @error('address')
        <span class="alert text-danger">{{ $message }}</span>
        @enderror

        <div class="user-box">
            <p style="color: white;">Profile Picture <span class="text-danger">*</span></p>
            <div class="controls">
                <input type="file" name="image" id="image" class="form-control">
                <div class="help-block"></div>
            </div>
        </div>
        <div class="col-md-12 widget-user-image">
            <img id="show-image" class="rounded-circle"
                src="{{ !empty($user->profile_photo_path) ? url('storage/profile-photos/'.$user->profile_photo_path) : url('storage/profile-photos/blank_profile_photo.jpg') }}"
                alt="User Avatar" style="float: right; width:auto !important;" height="100px">
        </div>
        <div class="racing-effect">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button name="submit" type="submit">
                Update Profile
            </button>
        </div>
    </form>



</div>
@section('frontend_script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#show-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
@endsection