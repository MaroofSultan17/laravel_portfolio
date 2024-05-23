<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('sitetitle') | {{ env('SITETITLE') }}</title>
    <meta charset="utf-8">
    <meta name="author" content="DexignZone">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('backend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ url('backend/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}">
</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="{{ route('dashboard.show') }}" class="brand-logo">
                <div class="logo-abbr" width="64" height="64">
                    <img src="{{ url('backend/images/logo/logo1.png') }}" alt="Logo Image">
                </div>
                </svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <form>
                                    <div class="input-group search-area d-xl-inline-flex d-none" style="width: 500px;">
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                                    </div>
                                </form>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ url('backend/images/profile/pic1.jpg') }}" width="20"
                                        alt="/">
                                    <div class="header-info">
                                        <span class="fs-20 font-w500">Robertos Jr.</span>
                                        <small>Super Admin</small>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ms-2">Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        {{-- Side-Bar --}}
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('dashboard.show') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-briefcase"></i>
                            <span class="nav-text">Works</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('works.show') }}">Works Management</a></li>
                    </li>
                </ul>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        <span class="nav-text">Profile</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('profile.show') }}">Profile</a></li>
                        <li><a href="{{ route('profile_edit.show') }}">Edit Profile</a></li>
                    </ul>
                </li>
                {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-086-star"></i>
                        <span class="nav-text">Bootstrap</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="ui-accordion.html">Accordion</a></li>
                        <li><a href="ui-alert.html">Alert</a></li>
                        <li><a href="ui-badge.html">Badge</a></li>
                        <li><a href="ui-button.html">Button</a></li>
                        <li><a href="ui-modal.html">Modal</a></li>
                        <li><a href="ui-button-group.html">Button Group</a></li>
                        <li><a href="ui-list-group.html">List Group</a></li>
                        <li><a href="ui-media-object.html">Media Object</a></li>
                        <li><a href="ui-card.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-dropdown.html">Dropdown</a></li>
                        <li><a href="ui-popover.html">Popover</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-tab.html">Tab</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>

                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-045-heart"></i>
                        <span class="nav-text">Plugins</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="uc-select2.html">Select 2</a></li>
                        <li><a href="uc-nestable.html">Nestedable</a></li>
                        <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                        <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                        <li><a href="uc-toastr.html">Toastr</a></li>
                        <li><a href="map-jqvmap.html">Jqv Map</a></li>
                        <li><a href="uc-lightgallery.html">Light Gallery</a></li>
                    </ul>
                </li>
                <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-013-checkmark"></i>
                        <span class="nav-text">Widget</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-038-gauge"></i>
                        <span class="nav-text">Icons</span>
                        <span class="badge badge-sm badge-danger ms-3">New</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="flat-icons.html">Flaticons</a></li>
                        <li><a href="svg-icons.html">SVG Icons</a></li>

                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-007-bulleye"></i>
                        <span class="nav-text">CMS</span>
                        <span class="badge badge-sm badge-danger ms-3">New</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="content.html">Content</a></li>
                        <li><a href="menu.html">Menus</a></li>
                        <li><a href="email-template.html">Email Template</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-072-printer"></i>
                        <span class="nav-text">Forms</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="form-element.html">Form Elements</a></li>
                        <li><a href="form-wizard.html">Wizard</a></li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Editor</a>
                            <ul aria-expanded="false">
                                <li><a href="form-editor-ckeditor.html">Ckeditor</a></li>
                                <li><a href="form-editor-summernote.html">Summernote</a></li>
                            </ul>
                        </li>
                        <li><a href="form-pickers.html">Pickers</a></li>
                        <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-043-menu"></i>
                        <span class="nav-text">Table</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                        <li><a href="table-datatable-basic.html">Datatable</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-022-copy"></i>
                        <span class="nav-text">Pages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="login.html">Login 1</a></li>
                        <li><a href="page-login.html">Login 2</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                            <ul aria-expanded="false">
                                <li><a href="page-error-400.html">Error 400</a></li>
                                <li><a href="page-error-403.html">Error 403</a></li>
                                <li><a href="page-error-404.html">Error 404</a></li>
                                <li><a href="page-error-500.html">Error 500</a></li>
                                <li><a href="page-error-503.html">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        <li><a href="empty-page.html">Empty Page</a></li>
                    </ul>
                </li> --}}
                </ul>
                <div class="copyright">
                    <p><strong>Portfolio Admin</strong> © 2024 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> by Maroof Sultan</p>
                </div>
            </div>
        </div>
