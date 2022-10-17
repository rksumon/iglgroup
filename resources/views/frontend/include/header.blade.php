
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('image/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('image/logo.png')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('front/js/respond.js')}}"></script><![endif]-->
    @yield('style')

</head>
<!-- Main Header-->
<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">

                <!--Top Left-->
                <div class="top-left">
                    <ul class="links clearfix">
                        <li>Need help?</li>
                        <li><a href="#"><span class="icon flaticon-envelope-1"></span>query@iglgroup.com</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
    <!-- Header Top End -->

    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="{{url('/')}}"><img src="{{asset('front/images/logo.png')}}" height="50" width="60"  alt="IGL GROUP LOGO"></a></div>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{url('/')}}">Home</a></li>
                                <li class="{{ Request::is('about') ? 'current' : '' }}"><a href="{{url('/about')}}">About Us</a></li>
                                <li class="dropdown"><a href="{{url('/sister_concern')}}">Sister Concern</a>
                                    <ul>
                                        @foreach($sisters as $sister)
                                        <li class=""><a class="arial-black" href="{{url('/sister_concern/'.$sister->id)}}">{{$sister->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
{{--                                <li class="{{ Request::is('/team') ? 'current' : '' }}"><a href="{{url('/team')}}">Our Team</a></li>--}}
                                <li class="dropdown {{ Request::is('/team') ? 'current' : '' }}"><a href="{{url('/team')}}">Our Team</a>
                                    <ul>
                                            <li class=""><a href="{{url('team')}}">Bord of Director</a></li>
                                            <li class=""><a href="{{url('team/staff')}}">Board of Officer/Staff</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('gallery') ? 'current' : '' }}"><a href="{{url('gallery')}}">Photo Gallery</a></li>
                                <li class="{{ Request::is('contact') ? 'current' : '' }}"><a href="{{url('/contact')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                </div>
                <!--Nav Outer End-->

            </div>
        </div>
    </div>

</header>
<!--End Main Header -->
<body>

<div class="page-wrapper">
</div>
