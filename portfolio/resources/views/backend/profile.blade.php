@extends('backend.layouts.main')
@section('sitetitle', 'Profile')
@section('main-container')
    <div class="content-body">
        <div class="container-fluid" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning text-center"
                            style="background-color:#f25521; opacity:1">
                            <strong>
                                <h1 style="color:#ffffff">{{ $message }}</h1>
                            </strong>
                        </div>
                    @endif
                    <h2 class="text-center mb-2">Profile</h2>
                    <div class="card mb-4 rounded">
                        <div class="card-body text-center">
                            <img src="{{ url($profiledata->image) }}" alt="avatar" class="rounded img-fluid"
                                style="width: 300px;">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $profiledata->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Skill</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $profiledata->skill }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $profiledata->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $profiledata->phoneno }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $profiledata->address }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Links</p>
                                </div>
                                <div class="col-sm-9">
                                    <ul class="list-inline">
                                        <li class="list-inline-item m-2">
                                            <a href="{{ $profiledata->facebook }}" class="facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item m-2">
                                            <a href="{{ $profiledata->github }}" class="github">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item m-2">
                                            <a href="{{ $profiledata->instagram }}" class="instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item m-2">
                                            <a href="{{ $profiledata->linkedin }}" class="linkedin">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
