<!--Main Footer-->
<footer class="main-footer">
    <div class="auto-container">
        <!--Upper Box-->
        <div class="upper-box">
            <div class="row clearfix">
                <!--Footer Logo-->
                <div class="logo-column col-md-6 col-sm-6 col-xs-12">
                    <div class="logo ">
                        <a href="#"><img src="{{asset('front/images/logo.png')}}"  height="60px" width="80px" alt="" /></a>
                    </div>
                </div>
                <!--Nav Column-->
                <div class="nav-column col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-column">
                        <ul class="footer-nav">
                            <li><a href="#">Private Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Legal</a></li>
                        </ul>
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="#">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Network Column-->
                <div class="column network-column col-md-5 col-sm-6 col-xs-12">
                    <span>About Us</span>
                    <ul class="links-footer">
                        <li><a href="{{url('about')}}">About Company</a></li>
                        <li><a href="{{url('team')}}">Board of Director</a></li>
                        <li><a href="{{'team/staff'}}">Our Staff</a></li>
                    </ul>
                </div>

                <!--Links Column-->
                <div class="column links-column col-md-3 col-sm-6 col-xs-12">
                    <span>Sister Concern</span>
                    <ul class="links-footer">
                        <li><a target="_blank" href="https://iglweb.com/">IGL Web</a></li>
                        <li><a target="_blank" href="https://iglweb.com/web/">IGL Host</a></li>
                        <li><a target="_blank" href="https://iglnet.com/">IGL Netrork</a></li>
                    </ul>
                </div>

                <!--Appointment Column-->
                <!--Links Column-->
                <div class="column links-column col-md-3 col-sm-6 col-xs-12">
                    <span>Sister Concern</span>
                    <ul class="links-footer">
                        <li><a target="_blank" href="https://studentvisabd.com/">Student Visa</a></li>
                        <li><a target="_blank" href="https://felnatech.com/">Felna Tech</a></li>
                        <li><a target="_blank" href="https://felnadma.com/">Felna DMA</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <div class="copyright">Copyright &copy; 2022 <a class="arial-black" href="https://iglgroup.org/">IGL Group</a> </br> <a target="_blank" href="https://client.iglweb.com/cart.php?a=add&domain=register">Domain Registration</a>,<a target="_blank" href="https://iglweb.com/web/">Web Hosting</a>, Web design & Developed by <a class="arial-black" target="_blank" href="https://iglweb.com/">IGL Web Ltd</a></div>
                </div>

                <!--Social Column-->
                <div class="social-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="social-icon-one">
                        <li><a target="_blank" href="https://www.facebook.com/iglgroupbd/"><span class="fa fa-facebook"></span></a></li>
                        <li><a target="_blank" href="#"><span class="fa fa-youtube"></span></a></li>
                        <li><a target="_blank" href="https://wa.me/01958666999"><span class="fa fa-whatsapp"></span></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


</footer>
</div>
<!--End pagewrapper-->
<!--End Main Footer-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="{{asset('front/js/jquery.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/script.js')}}"></script>

@yield('js')
</body>
</html>
