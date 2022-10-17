@extends('frontend.layouts.master')
@section('style')
    <title>IGL GROUP | Homepage </title>
    <!-- Stylesheets -->

    <link href="{{'front/plugins/revolution/css/settings.css'}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{'front/plugins/revolution/css/layers.css'}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{'front/plugins/revolution/css/navigation.css'}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

@endsection
@section('content')
    <!--Main Slider-->
    <!--Main Slider-->
    <section class="main-slider">

        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('front/images/main-slider/image-1.jpg')}}">

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['950','750','750','550']"
                             data-whitespace="normal"
                             data-hoffset="['0','0','0','0']"
                             data-voffset="['-80','-120','-120','-120']"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="title"><span>Welcome To</span> <span class="igl">IGL</span><span class="group"> Group</span></div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['560','700','700','550']"
                             data-whitespace="normal"
                             data-hoffset="['0','0','0','0']"
                             data-voffset="['190','120','100','100']"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                        </div>

                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1698" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('front/images/main-slider/image-2.jpg')}}">

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['950','750','750','550']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['0','-90','-60','-60']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 class="alternate">Our <span>Mission</span> is <br> make the world to <br> more capable.</h2>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['560','700','700','550']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['185','90','80','60']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one">Our Services</a>
                            </div>
                        </div>

                    </li>


                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    <!--End Main Slider-->

    <!--Company Section-->
    <section class="company-section">
        <!--End Company Section-->
        <!--Services Section-->
        <section class="services-section" style="background-image:url('{{asset('front/images/background/100.jpg')}}')">
            <!--Upper Section-->
            <div class="upper-section" style="">
                <div class="auto-container">
                    <!--Sec Title / Light-->
                    <div class="sec-title centered light">
                        <div class="title">What We Do</div>
                        <h2>Our Main Concern</h2>
                    </div>
                    <!--Title Content-->
                    <div class="title-content">
                        <div class="text">We have proposed for the following business concepts of multiple services for multiple customers.</div>
                        <a href="#" class="theme-btn btn-style-two">Our Sister Concern</a>
                    </div>
                </div>
            </div>
            <!--Lower Section-->
            <div class="lower-section">
                <div class="outer-container">
                    <div class="four-item-carousel owl-carousel owl-theme">
                        @foreach($sisters as $sister)
                        <!--Services Block Two-->
                        <div class="services-block-two">
                            <div class="inner-box">
                                <div class="image-layer" style="background-image:url('{{asset('front/images/resource/service-2.jpg')}}')"></div>
                                <div class="round-image"><img src="{{asset('images/concern'.$sister->logo)}}" alt="" /></div>
                                <h3><a href="#">{{$sister->name}}</a></h3>
                                <div class="text"> {{$sister->short_description}}</div>
                                <div class="icon-box">
                                    <span class="icon flaticon-market"></span>
                                </div>
                                <a href="{{url('concern/single_view/'.$sister->id)}}" class="read-more">Read More</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--End Services Section-->

        <!--Testimonial Section-->
        <section class="testimonial-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Title Column-->
                    <div class="title-column col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <div class="title">Testimonials</div>
                                <h2>Customer Feedback</h2>
                            </div>
                            <div class="text">Great explorer the truth, the master builder of human happiness no one rejects dislikes our team. </div>
                            <a href="#" class="more">More Happy Words</a>
                        </div>
                    </div>

                    <!--Testimonail Column-->
                    <div class="testimonial-column col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="single-item-carousel owl-carousel owl-theme">

                                <!--Testimonial Block-->
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="content-box">
                                            <div class="content">
                                                <div class="quote-icon">
                                                    <span class="icon flaticon-left-quote-1"></span>
                                                </div>
                                                <div class="text">Idea of denouncing pleasure & praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</div>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <h3>Hardley Richardson</h3>
                                            <div class="location">Newyork City</div>
                                        </div>
                                        <div class="image">
                                            <img src="" alt="" />
                                        </div>
                                    </div>
                                </div>

                                <!--Testimonial Block-->
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="content-box">
                                            <div class="content">
                                                <div class="quote-icon">
                                                    <span class="icon flaticon-left-quote-1"></span>
                                                </div>
                                                <div class="text">Idea of denouncing pleasure & praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</div>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <h3>Hardley Richardson</h3>
                                            <div class="location">Newyork City</div>
                                        </div>
                                        <div class="image">
                                            <img src="" alt="" />
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Testimonial Section-->

        <!--Clients Section-->
        <section class="clients-section" style="background-image:url({{asset('front/images/background/4.jpg')}})">
            <div class="auto-container">
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/1.png'}}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/2.png'}}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/3.png'}}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/4.png'}}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/5.png'}}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/1.png'}}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/2.png'}}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/3.png'}}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/4.png'}}" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{'front/images/clients/5.png'}}" alt=""></a></figure></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Clients Section-->

@endsection

@section('js')


            <!--Revolution Slider-->
            <script src="{{'front/plugins/revolution/js/jquery.themepunch.revolution.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/jquery.themepunch.tools.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/extensions/revolution.extension.actions.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/extensions/revolution.extension.carousel.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/extensions/revolution.extension.migration.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/extensions/revolution.extension.navigation.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/extensions/revolution.extension.parallax.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js'}}"></script>
            <script src="{{'front/plugins/revolution/js/extensions/revolution.extension.video.min.js'}}"></script>
            <script src="{{'front/js/main-slider-script.js'}}"></script>

            <script src="{{'front/js/jquery.fancybox.pack.js'}}"></script>
            <script src="{{'front/js/owl.js'}}"></script>
            <script src="{{'front/js/wow.js'}}"></script>
            <script src="{{'front/js/appear.js'}}"></script>
            <script src="{{'front/js/jquery-ui.js'}}"></script>
            <script src="{{'front/js/script.js'}}"></script>
@endsection
