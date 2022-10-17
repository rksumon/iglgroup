@extends('frontend.layouts.master')
@section('style')
    <title>IGL GROUP | Contact Us</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <style>
        html, body { border: 0; margin: 0; padding: 0; }
        #map { height: 70vh; width: 100vw; }
    </style>


@endsection
@section('content')

    <!--Page Title / Style Two-->
    <section class="contact-banner-post" style="background-image:url('{{asset('front/images/background/9.jpg')}}')">
        <div class="auto-container">
            <div class="upper-box">
                <h2><span class="icon-box flaticon-mail"></span> Contact Our Team Today! <br> and Discuss About What You Need.</h2>
            </div>

            <!--Contact Info Blocks-->
            <div class="contact-info-blocks">
                <div class="row clearfix">

                    <!--Info Branch Block-->
                    <div class="info-branch-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h3>Main Branch</h3>
                            <div class="text">	House # 33(4th Floor), Road # 4, Dhanmondi, Dhaka-1205, <br> Bangladesh.</div>
                            <a href="#" class="direction">Get Direction</a>
                        </div>
                    </div>

                    <div class="quick-contact-info col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h3>Quick Contact</h3>
                            <ul class="branch-list-contact">
                                <li><span class="icon flaticon-note"></span> <strong>Email:</strong> query@iglgroup.com</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--End Page Title-->



    <div id="map"></div>
    <!--Map Section-->
{{--    <section class="map-section ">--}}
{{--        <!--Map Outer-->--}}
{{--        <div class="map-outer">--}}
{{--            <div class="google-map"--}}
{{--                 id="contact-google-map"--}}
{{--                 data-map-lat="23.74065"--}}
{{--                 data-map-lng="90.37852"--}}
{{--                 data-icon-path="images/icons/map-marker.png"--}}
{{--                 data-map-title="IGL Group , BD"--}}
{{--                 data-map-zoom="12"--}}
{{--               >--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--End Map Section-->


@endsection
@section('js')

    <script src="{{asset('front/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('front/js/owl.js')}}"></script>
    <script src="{{asset('front/js/wow.js')}}"></script>
    <script src="{{asset('front/js/appear.js')}}"></script>
    <script src="{{asset('front/js/jquery-ui.js')}}"></script>
    <!--Google Map APi Key-->
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>--}}
{{--    <script src="{{asset('front/js/gmaps.js')}}"></script>--}}
{{--    <script src="{{asset('front/js/map-script-2.js')}}"></script>--}}
    <!--End Google Map APi-->

    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <script>
        const platform = new H.service.Platform({ apikey: 'jUnIhqvbN_AjVbHIk5XmrTsrNT7x5qOvkk56fjIG8bk' });
        const defaultLayers = platform.createDefaultLayers();
        const map = new H.Map(document.getElementById('map'),
            defaultLayers.vector.normal.map, {
                center: { lat: 23.740808624070315, lng: 90.37853572556165 },
                zoom: 15,
                pixelRatio: window.devicePixelRatio || 1
            });
        window.addEventListener('resize', () => map.getViewPort().resize());
        const behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
        const ui = H.ui.UI.createDefault(map, defaultLayers);

        //Begin geocoding
        const searchText = 'Road 4';
        const geocoder = platform.getGeocodingService();
        geocoder.geocode({ searchText }, result => {
            const location = result.Response.View[0].Result[0].Location.DisplayPosition;
            const { Latitude : lat, Longitude: lng } = location;
            const marker = new H.map.Marker({ lat, lng });
            map.addObject(marker);
        });
    </script>
@endsection
