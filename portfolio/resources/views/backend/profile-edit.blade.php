@extends('backend.layouts.main')
@section('sitetitle', 'Profile')
@section('main-container')
    <div class="content-body">
        <div class="container-fluid">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
                <a href="{{ route('profile.show') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #f25521; color: white;"
                        type="button">Show Profile</button>
                </a>
            </div>
            <form action="{{ route('profile_edit.edit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                        value="{{ old('name') }}">
                    <label for="name">Full Name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="type" name="skill" placeholder="Laravel/WEB"
                        value="{{ old('skill') }}">
                    <label for="skill">Skill</label>
                    @if ($errors->has('skill'))
                        <span class="text-danger">{{ $errors->first('skill') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="facebook" placeholder="facebook" name="facebook"
                        value="{{ old('facebook') }}">
                    <label for="facebook">Facebook Link</label>
                    @if ($errors->has('facebook'))
                        <span class="text-danger">{{ $errors->first('facebook') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="github" placeholder="github" name="github"
                        value="{{ old('github') }}">
                    <label for="github">Github Link</label>
                    @if ($errors->has('github'))
                        <span class="text-danger">{{ $errors->first('github') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="instagram" placeholder="instagram" name="instagram"
                        value="{{ old('instagram') }}">
                    <label for="instagram">Instagram Link</label>
                    @if ($errors->has('instagram'))
                        <span class="text-danger">{{ $errors->first('instagram') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="linkedin" placeholder="linkedin" name="linkedin"
                        value="{{ old('linkedin') }}">
                    <label for="linkedin">Linkedin Link</label>
                    @if ($errors->has('linkedin'))
                        <span class="text-danger">{{ $errors->first('linkedin') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phoneno" placeholder="phoneno" name="phoneno"
                        value="{{ old('phoneno') }}">
                    <label for="phoneno">Phone Number</label>
                    @if ($errors->has('phoneno'))
                        <span class="text-danger">{{ $errors->first('phoneno') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="email" name="email"
                        value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="address" placeholder="address" name="address"
                        value="{{ old('address') }}">
                    <label for="address">Address</label>
                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label>Upload Resume</label>
                    <div class="input-group mt-2">
                        <input type="file" class="form-control  file-upload-browse" id="resume" name="resume"
                            accept=".pdf,.txt,.doc,.docx">
                        @if ($errors->has('resume'))
                            <span class="text-danger">{{ $errors->first('resume') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Upload Image</label>
                    <div class="input-group mt-2">
                        <input type="file" class="form-control  file-upload-browse" id="image" name="image"
                            accept=".png,.jpg,,.jpeg">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
                <div class="d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success w-20 mb-3  rounded"
                        style="font-size: 18px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
