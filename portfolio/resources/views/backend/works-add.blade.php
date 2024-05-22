@extends('backend.layouts.main')
@section('sitetitle', 'Works')
@section('main-container')
    <div class="content-body" >
        <div class="container-fluid">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
                <a href="{{ route('works.show') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #f25521; color: white;"
                        type="button">Show Works</button>
                </a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-block p-4 border-left-warning text-center"
                    style="background-color:#f25521; opacity:1">
                    <strong>
                        <h1 style="color:#ffffff">{{ $message }}</h1>
                    </strong>
                </div>
            @endif
            <form action="{{ route('works_add.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Project Name"
                        value="{{ old('name') }}">
                    <label for="name">Project Name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="type" name="type" placeholder="Website/App/etc"
                        value="{{ old('type') }}">
                    <label for="type">Project Type</label>
                    @if ($errors->has('type'))
                        <span class="text-danger">{{ $errors->first('type') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="client" placeholder="Client" name="client"
                        value="{{ old('client') }}">
                    <label for="client">Client Name</label>
                    @if ($errors->has('client'))
                        <span class="text-danger">{{ $errors->first('client') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="languages" placeholder="languages" name="languages"
                        value="{{ old('languages') }}">
                    <label for="languages">Languages Used</label>
                    @if ($errors->has('languages'))
                        <span class="text-danger">{{ $errors->first('languages') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="link" placeholder="link" name="link"
                        value="{{ old('link') }}">
                    <label for="link">Project Preview Link</label>
                    @if ($errors->has('link'))
                        <span class="text-danger">{{ $errors->first('link') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                        <label>Project Image</label>
                        <div class="input-group mt-2">
                            <input type="file" class="form-control  file-upload-browse" id="image" name="image"
                                accept=".png,.jpeg,.jpg">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                <div class="form-floating mb-3">
                        <textarea class="form-control" id="details" rows="5" placeholder="Project Details" name="details">{{ old('details') }}</textarea>
                        <label for="details">Project Details</label>
                        @if ($errors->has('details'))
                            <span class="text-danger">{{ $errors->first('details') }}</span>
                        @endif
                    </div>
                <div class="d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success w-20 mb-3  rounded"
                        style="font-size: 18px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
