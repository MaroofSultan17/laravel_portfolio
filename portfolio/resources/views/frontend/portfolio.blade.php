<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>work | {{ env('SITETITLE') }}</title>
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
    <link rel="stylesheet" href="{{ url('frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/swipper.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/main.css') }}">
    {{-- <style>
        .row {
            display: flex;
            flex-wrap: wrap;
        }
    </style> --}}
</head>

<body>
    <div class="page-wrapper home-1" data-background="frontend/img/bg/page-bg-1.jpg">
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
                                <a class="btn-1"href="{{ url($profile->resume) }}" download="Maroof Sultan">
                                    <span class="icon">
                                        <i class="fa-regular fa-download"></i>
                                    </span>
                                    download cv
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-9">
                    <div class="bostami-page-content-wrap">
                        <div class="section-wrapper pl-60 pr-60 pt-60">
                            <div class="bostami-page-title-wrap mb-15">
                                <h2 class="page-title">Portfolio</h2>
                            </div>
                        </div>
                        <div class="section-wrapper pr-60 pl-60 mb-60">
                            <div class="row">
                                <div class="col-12">
                                    <div id="fillter-item-active" class="fillter-item-wrap">
                                        <div class="grid-sizer"></div>
                                        @foreach ($works as $work)
                                            <div class="isotop-item design mockup">
                                                <div class="fillter-item bg-catkrill">
                                                    <a class="img" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#model-{{ $work->workid }}">
                                                        <img src="{{ url($work->image) }}" alt="">
                                                    </a>
                                                    <span class="item-subtitle">{{ $work->name }} ,
                                                        {{ $work->languages }} </span>
                                                    <h6 class="item-title">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#model-{{ $work->workid }}"></a>{{ $work->client }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-copyright text-center pt-25 pb-25 alert">
                            <span>© 2024 All Rights Reserved by <a href="{{ env('GITHUB ') }}" target="_blank"
                                    rel="noopener noreferrer" style="color: #1b74e4;">Maroof
                                    Sultan</a> Under the Supervision of<br><a style="color: #1b74e4;"
                                    href="{{ env('GITHUB ') }}" target="_blank" rel="noopener noreferrer">Mr.
                                    Muhammad Jamil</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-1 d-xxl-block d-none">
                    <div class="bostami-main-menu-wrap">
                        <nav class="bastami-main-menu main_menu">
                            <ul>
                                <li class="{{ request()->routeIs('home.maroof') ? 'active' : '' }}">
                                    <a href="{{ route('home.maroof') }}">
                                        <span>
                                            <i class="fa-light fa-address-card"></i>
                                        </span>
                                        about
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('resume.maroof') ? 'active' : '' }}">
                                    <a href="{{ route('resume.maroof') }}">
                                        <span>
                                            <i class="fa-light fa-file-user"></i>
                                        </span>
                                        Resume
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('works.maroof') ? 'active' : '' }}">
                                    <a href="{{ route('works.maroof') }}">
                                        <span>
                                            <i class="fa-light fa-briefcase"></i>
                                        </span>
                                        work
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('contact.maroof') ? 'active' : '' }}">
                                    <a href="{{ route('contact.maroof') }}">
                                        <span>
                                            <i class="fa-light fa-address-book"></i>
                                        </span>
                                        contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($works as $work)
            <div class="modal portfolio-modal-box fade" id="model-{{ $work->workid }}" tabindex="-1"
                role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal">
                                <i class="far fa-times"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6 class="blog-title">
                                {{ $work->name }}
                            </h6>
                            <div class="portfolio-modal-table">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="portfolio-modal-table-text">
                                            <i class="fa-regular fa-file-lines"></i>
                                            Project : <span>{{ $work->type }}</span>
                                        </h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="portfolio-modal-table-text">
                                            <i class="fa-regular fa-user "></i>
                                            Client : <span>{{ $work->client }}</span>
                                        </h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="portfolio-modal-table-text">
                                            <i class="fa-solid fa-code"></i>
                                            Langages : <span>{{ $work->languages }}</span>
                                        </h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="portfolio-modal-table-text">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            Preview : <a href="{{ $work->link }}">clickme to preview</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="h1-modal-paragraph">
                                <p>{{ $work->details }}</p>
                            </div>
                            <div class="h1-modal-img">
                                <img src="{{ url($work->image) }}" alt="portfolio">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ url('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('frontend/js/swipper-bundle.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ url('frontend/js/wow.min.js') }}"></script>
    <script src="{{ url('frontend/js/odometer.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.modal.min.js') }}"></script>
    <script src="{{ url('frontend/js/appear.min.js') }}"></script>
    <script src="{{ url('frontend/js/main.js') }}"></script>
</body>

</html>
