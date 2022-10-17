@extends('frontend.layouts.master')
@section('style')
    <title>IGL GROUP | Board Of Officer/Staff </title>
@endsection
@section('content')

    <-Page Title / Style Two-->
    <section class="contact-banner-post" style="background-image:url('{{asset('front/images/background/9.jpg')}}')">
        <div class="auto-container">
            <div class="upper-box">
                <h2><span class="icon-box flaticon-mail"></span> Contact Our Team Staff Today! <br> and Discuss About What You Need.</h2>
            </div>

            <!--Contact Info Blocks-->
            <div class="contact-info-blocks">
                <div class="row clearfix">

                    <!--Info Branch Block-->
                    <div class="info-branch-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h3>Main Branch</h3>
                            <div class="text">DE 198 Tech Road <br> Bridge Str, Newyork 10026 <br> United States.</div>
                            <a href="#" class="direction">Get Direction</a>
                        </div>
                    </div>

                    <div class="quick-contact-info col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h3>Quick Contact</h3>
                            <ul class="branch-list-contact">
                                <li><span class="icon flaticon-technology-2"></span> <strong>Phone:</strong> 936.452.8005</li>
                                <li><span class="icon flaticon-note"></span> <strong>Email:</strong> Mailus@ikonteam.com</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--End Page Title-->!-
    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title">Our Team Staff</div>
                <h2>Team Behind Our Company</h2>
            </div>
            <div class="row clearfix">

                <!--Team Block-->
                <div class="team-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('front/images/resource/team-1.jpg')}}"  alt="" />
                        </div>
                        <div class="lower-box">
                            <h2>Donald T. Benjamin</h2>
                            <div class="designation">Chairman & CEO</div>
                        </div>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-content">
                                <h3><a href="#">Donald T. Benjamin</a></h3>
                                <div class="overlay-designation">Chairman & CEO</div>
                                <div class="text">Petercomb has over 20 years’ experience at multi-national companies.</div>
                                <ul class="social-icon-three">
                                    <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li class="vimeo"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="youtube"><a href="#"><span class="fa fa-youtube"></span></a></li>
                                </ul>
                            </div>
                            <div class="overlay-image" style="background-image:url('{{asset('front/images/resource/team-1.jpg')}}')"></div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('front/images/resource/team-3.jpg')}}" alt="" />
                        </div>
                        <div class="lower-box">
                            <h2>Nichel M. Petercomb</h2>
                            <div class="designation">Executive Leader</div>
                        </div>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-content">
                                <h3><a href="#">Nichel M. Petercomb</a></h3>
                                <div class="overlay-designation">Executive Leader</div>
                                <div class="text">Petercomb has over 20 years’ experience at multi-national companies.</div>
                                <ul class="social-icon-three">
                                    <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li class="vimeo"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="youtube"><a href="#"><span class="fa fa-youtube"></span></a></li>
                                </ul>
                            </div>
                            <div class="overlay-image" style="background-image:url('{{asset('front/images/resource/team-3.jpg')}}')"></div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('front/images/resource/team-2.jpg')}}" alt="" />
                        </div>
                        <div class="lower-box">
                            <h2>Markino Boucher</h2>
                            <div class="designation">Consultant</div>
                        </div>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-content">
                                <h3><a href="#">Markino Boucher</a></h3>
                                <div class="overlay-designation">Consultant</div>
                                <div class="text">Petercomb has over 20 years’ experience at multi-national companies.</div>
                                <ul class="social-icon-three">
                                    <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li class="vimeo"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="youtube"><a href="#"><span class="fa fa-youtube"></span></a></li>
                                </ul>
                            </div>
                            <div class="overlay-image" style="background-image:url('{{asset('front/images/resource/team-2.jpg')}}')"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Team Section--
@endsection

@section('js')

@endsection
