@extends('frontend.layouts.main')
@section('sitetitle', 'Contact-us')
@section('main-container')
    <div class="col-xxl-8 col-xl-9">
        <div class="bostami-page-content-wrap">
            <div class="section-wrapper pl-60 pr-60 pt-60">
                <div class="bostami-page-title-wrap mb-15">
                    <h2 class="page-title">contact</h2>
                </div>
            </div>
            <div class="section-wrapper pr-60 pl-60 mb-60">
                <div class="contact-area bg-light-white-2">
                    <h5 class="contact-title">I'm always open to discussing produuct</h5>
                    <h5 class="contact-title-b">Feel Free to contact.</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning" style="background-color:#1b74e4; opacity:1">
                            <strong>
                                <h4 style="color:#ffffff">{{ $message }}</h4>
                            </strong>
                        </div>
                    @endif
                    <form class="contact-form" method="POST" action="{{ route('contact.submit') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-input-item mb-60">
                            <label class="input-lebel name">Name *</label>
                            <input name="name" class="input-box name" type="text">
                            @if ($errors->has('name'))
                                <span class="text-danger">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-input-item mb-60">
                            <label class="input-lebel gmail">Email *</label>
                            <input name="email" class="input-box gmail" type="Email">
                            @if ($errors->has('email'))
                                <span class="text-danger">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-input-item mb-40">
                            <label class="input-lebel message">Message *</label>
                            <textarea name="message" class="input-box message" cols="30" rows="10"></textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">
                                    {{ $errors->first('message') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-btn-wrap">
                            <button type="submit" class="form-btn" name="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
