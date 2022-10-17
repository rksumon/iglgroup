@extends('frontend.layouts.master')
@section('style')
    <title>IGL GROUP | Sister Concern </title>

@endsection
@section('content')

    <!--Page Title / Style Two-->
    <section class="page-title style-two" style="background-image:url('{{asset('front/images/background/9.jpg')}}')">
        <div class="auto-container">
            <h1>Our Sister Concern</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Sister Concern</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Services Page Section-->
    <div class="services-page-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Services Block Four-->
                @foreach($sisters as $sister)
                <div class="services-block-four col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{url('sister_concern/'.$sister->id)}}">
                                <img src="{{asset('image/concern/'.$sister->logo)}}" alt="" />
                            </a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{url('sister_concern/'.$sister->id)}}">{{$sister->name}}</a></h3>
                            <div class="text">{{$sister->short_description}}.</div>
                            <a href="{{url('sister_concern/'.$sister->id)}}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>

        </div>
    </div>
    <!--End Services Page Section-->

@endsection

@section('js')
    <script src="{{asset('front/js/appear.js')}}"></script>
@endsection
