@extends('frontend.layouts.master')
@section('style')
    <title>IGL GROUP | Sister Concern </title>
@endsection
@section('content')
    <!--Page Title / Style Two-->
    <section class="page-title style-two" style="background-image:url('{{asset('front/images/background/9.jpg')}}')">
        <div class="auto-container">
            <h1>IGL WEB</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="">{{$single->name}}</a></li>
                <li>IGL WEB</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Services Page Section-->
    <div class="services-single-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <!--Two Column-->
                        <div class="two-column">
                            <div class="row clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image">
                                        <img src="{{asset('image/concern/'.$single->logo)}}" alt="" />
                                    </div>
                                </div>
                                <!--Blocks Column-->
                            </div>
                        </div>
                        <h2>Explore Our Service</h2>
                        <div class="text">{{$single->long_description}}</div>
                        <span> <a target="_blank" href="{{$single->url}}">Visit Our Website</a> </span>
                    </div>
                </div>

                <!--Content Column-->
                <div class="sidebar-column col-md-4 col-sm-8 col-xs-12">
                    <div class="inner-column">

{{--                        <!--Service Widget-->--}}
{{--                        <div class="sidebar-widget-two service-widget">--}}
{{--                            <div class="widget-content">--}}
{{--                                <div class="sidebar-title-two">--}}
{{--                                    <h2>Our <br> Services</h2>--}}
{{--                                </div>--}}
{{--                                <ul class="service-list">--}}
{{--                                    <li class="active"><a href="#">Website Design and Development</a></li>--}}
{{--                                    <li><a href="#">Domain Hosting Services</a></li>--}}
{{--                                    <li><a href="#">Software Development.</a></li>--}}
{{--                                    <li><a href="#">Mail Hosting</a></li>--}}
{{--                                    <li><a href="#">Android App development</a></li>--}}
{{--                                    <li><a href="#">G-suite (Gmail Corporate Services)</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Services Page Section-->

@endsection

