<!DOCTYPE html>
<html lang="en">
<?php
$admin = App\Models\backend\AdminSignupModel::first();
?>

<head>
    <title>@yield('sitetitle') | {{ env('SITETITLE') }}</title>
    <meta charset="utf-8">
    <meta name="author" content="DexignZone">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('backend/images/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('backend/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('backend/images/favicon/favicon-16x16.png') }}">
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
                                <a href="{{ route('dashboard.show') }}" class="nav-link" href="javascript:void(0);"
                                    role="button" data-bs-toggle="dropdown">
                                    <img src="{{ url('backend/images/profile.png') }}" width="20" alt="/">
                                    <div class="header-info">
                                        <span class="fs-20 font-w500">{{ $admin->fullname }}</span>
                                        <small>Super Admin</small>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('profile.show') }}" class="dropdown-item ai-icon">
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
                            <i class="fa-solid fa-user"></i>
                            <span class="nav-text">Profile</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('profile.show') }}">Profile</a></li>
                            <li><a href="{{ route('profile_edit.show') }}">Edit Profile</a></li>
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
                </ul>
            </div>
        </div>
