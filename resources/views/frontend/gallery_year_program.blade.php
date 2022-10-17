@extends('frontend.layouts.master')
@section('style')
    <title>IGL GROUP | Photo Gallery </title>
@endsection
@section('content')

    <!--Page Title / Style Two-->
    <section class="page-title style-two" style="background-image:url('{{asset('front/images/background/9.jpg')}}')">
        <div class="auto-container">
            <h1>Photo Gallery</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Photo Gallery</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <!--Services Page Section-->
    <div class="services-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                @if(!$programs->isEmpty())
                    <!--Services Block Four-->
                    @foreach($programs as $program)
                        <div class="services-block-four col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="">
                                        <img src="{{asset('image/year.jpg')}}" alt="" />
                                    </a>

                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{url('program/photo/'.$program->id)}}">{{$program->name}}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h2>Opps! No Program Here</h2>
                @endif



            </div>

        </div>
    </div>
    <!--End Services Page Section-->

@endsection

@section('js')

@endsection
