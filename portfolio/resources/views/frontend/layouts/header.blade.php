<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('sitetitle') | {{ env('SITETITLE') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('frontend/img/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('frontend/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('frontend/img/favicon/favicon-16x16.png') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/jquery.modal.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/swipper.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/main.css') }}">
</head>

<body>
    <div class="page-wrapper home-1" data-background="{{ url('frontend/img/bg/page-bg-1.jpg') }}">
        <div id="preloader">
            <div class="loader_line"></div>
        </div>
        <div class="bostami-header-area mb-30 z-index-5">
            <div class="container">
                <div class="bostami-header-wrap">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="bostami-header-logo">
                                <a class="site-logo" href="{{ route('home.maroof') }}">
                                    <img src="{{ url('frontend/img/logo/logo1.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bostami-header-menu-btn text-right">
                                <div class="dark-btn dark-btn-stored dark-btn-icon">
                                    <i class="fa-light fa-moon"></i>
                                    <i class="fa-light fa-sun"></i>
                                </div>
                                <div class="menu-btn toggle_menu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-wrap">
                    <div class="mobile-menu mobile_menu">
                    </div>
                </div>

            </div>
        </div>
        <div class="container z-index-3">
            <div class="row">
                <div class="col-xxl-3 col-xl-3">
                    <div class="bostami-parsonal-info-area">
                        <div class="bostami-parsonal-info-wrap">
                            <?php
                            $profile = App\Models\frontend\ProfileModel::first();
                            ?>
                            <div class="bostami-parsonal-info-img">
                                <img src="{{ url($profile->image) }}" alt="avatar">
                            </div>
                            <h4 class="bostami-parsonal-info-name">
                                <a href="#">{{ $profile->name }}</a>
                            </h4>
                            <span class="bostami-parsonal-info-bio mb-15">{{ $profile->skill }}</span>
                            <ul class="bostami-parsonal-info-social-link mb-30">
                                <li>
                                    <a href="{{ $profile->facebook }}" class="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $profile->github }}" class="twitter">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $profile->instagram }}" class="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $profile->linkedin }}" class="linkedin">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="bostami-parsonal-info-contact mb-30">
                                <div class="bostami-parsonal-info-contact-item phone">
                                    <div class="icon">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </div>
                                    <div class="text">
                                        <span>Phone</span>
                                        <p>{{ $profile->phoneno }}</p>
                                    </div>
                                </div>
                                <div class="bostami-parsonal-info-contact-item email">
                                    <div class="icon">
                                        <i class="fa-regular fa-envelope-open-text"></i>
                                    </div>
                                    <div class="text">
                                        <span>Email</span>
                                        <p>{{ $profile->email }}</p>
                                    </div>
                                </div>

                                <div class="bostami-parsonal-info-contact-item location">
                                    <div class="icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="text">
                                        <span>Location</span>
                                        <p>{{ $profile->address }}</p>
                                    </div>
                                </div>

                                <div class="bostami-parsonal-info-contact-item calendar">
                                    <div class="icon">
                                        <i class="fa-light fa-calendar-days"></i>
                                    </div>
                                    <div class="text">
                                        <span>Birthday</span>
                                        <p>{{ env('BIRTHDAY') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bostami-parsonal-info-btn">
                                <a class="btn-1" href="#">
                                    <span class="icon">
                                        <i class="fa-regular fa-download"></i>
                                    </span>
                                    download cv
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
