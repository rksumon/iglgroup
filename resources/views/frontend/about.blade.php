@extends('frontend.layouts.master')
@section('style')
    <title>IGL GROUP | About Us </title>
@endsection
@section('content')


    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front/images/background/9.jpg')}})">
        <div class="auto-container">
            <h1>About Company</h1>
            <ul class="page-breadcrumb">
                <li><a href="#">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Consulting Section Two-->
    <section class="consulting-section-two">
        <div class="auto-container">
            <div class="inner-container">

                <!--Sec Title-->
                <div class="sec-title centered">
                    <div class="title">Who We Are</div>
                    <h2>We can help you from concept to design to all the way for deployment</h2>
                </div>
                <div class="title-text">Company vision is to enable people at all levels to reach the appropriate, advanced, ultimate computer-based technologies and solutions through an affordable and agreeable means.</div>
                <div class="row clearfix">

                    <!--Content Column-->
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2>World’s Best <span class="theme_color">Engineering & IT</span> <br> Solution Provider.</h2>
                            <div class="text">We have been serving IT services in the local & international markets with great fame. We can help you from concept to design to all the way for deployment.</div>
                            <div class="author">Md Moin Uddin, <span class="theme_color">CEO & Founder</span></div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="{{asset('front/images/resource/consulting.jpg')}}" alt="" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Consulting Section Two-->

    <!--Reason Section-->
    <section class="reason-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title light centered">
                <div class="title">Why Choose Us</div>
                <h2>Reason For Choose Us</h2>
            </div>

            <!--Reason Block-->
            <div class="reason-block">
                <div class="inner-block">
                    <div class="row clearfix">

                        <!--Title Column-->
                        <div class="title-column col-md-4 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <div class="icon-box">
                                    <span class="icon flaticon-target-1"></span>
                                </div>
                                <h2>Our Mission</h2>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-md-8 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <div class="text">Easily Business Solution using software and web application for business implement with software and web site/page. Developing all product standard and user friendly which product is easy to access to any kinds of user.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Reason Block-->
            <div class="reason-block">
                <div class="inner-block">
                    <div class="row clearfix">

                        <!--Title Column-->
                        <div class="title-column col-md-4 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <div class="icon-box">
                                    <span class="icon flaticon-mail"></span>
                                </div>
                                <h2>Our Vision</h2>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-md-8 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <div class="text">Our Vision is all of Bangladeshi small or large company IT (Software, Website, CCTV Camera, ERP Solution etc) development with friendly cost. Which cost is comport and easy to pay.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Reason Block-->
            <div class="reason-block">
                <div class="inner-block">
                    <div class="row clearfix">

                        <!--Title Column-->
                        <div class="title-column col-md-4 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <div class="icon-box">
                                    <span class="icon flaticon-startup"></span>
                                </div>
                                <h2>Core Values</h2>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-md-8 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <div class="row clearfix">
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <ul class="reason-list">
                                            <li><a href="#">Commitment and Accountability</a></li>
                                        </ul>
                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <ul class="reason-list">
                                            <li><a href="#">Mutually-Beneficial Relationships</a></li>
                                        </ul>
                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <ul class="reason-list">
                                            <li><a href="#">Excellence in All We Do</a></li>
                                        </ul>
                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <ul class="reason-list">
                                            <li><a href="#">Learning and Development</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
