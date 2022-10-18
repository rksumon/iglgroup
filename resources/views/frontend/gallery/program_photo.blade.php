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
    <div class="container">
        <div class="row el-element-overlay">
            <br>
            <div class="col-md-12">
            @foreach($galleries as $gallery)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class=" el-overlay-1"><img src="{{asset('image/gallery/'.$gallery->image)}}" alt="user" />
                                <div class="">
                                    <ul class="el-info">
                                        <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{asset('image/gallery/'.$gallery->image)}}"><i class="bi bi-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title">{{$gallery->caption}}</h3>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    </div>

@endsection

@section('js')

@endsection
