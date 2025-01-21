<?php

use App\Models\Footer;
$footerData = Footer::all()->keyBy('id');
?>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>


    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="fa fa-times"></i>
        </span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image">
                <img src="{{ asset('01-html-file/assets/images/logo/3.svg') }}" width="100" height="60"
                    alt="Logo" />
            </a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="{{$footerData[2]->gojek_link}}">{{$footerData[1]->gojek_link}}</a>
            </li>
            <li>
                <i class="fas fa-phone"></i>
                <a href="{{$footerData[2]->nomor_telepon}}">{{$footerData[1]->nomor_telepon}}</a>
            </li>
        </ul>
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">

                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
    </div>


</div>


<footer class="site-footer">
    <div class="shape1 float-bob-y"><img src="" alt=""></div>
    <div class="shape2 float-bob-y"><span class="icon-pattern"></span></div>
    <!--Start Site Footer Top-->
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer__logo">
                    <a href="index.html"><img src="{{ asset('storage/' . $footerData[1]->image) }}"
                            class="h-[75px] w-[100px]" alt=""></a>
                </div>
            </div>
        </div>

        <div class="site-footer">
            <div class="site-footer__top-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp animated animated animated animated"
                            data-wow-delay="300ms"
                            style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                            <div class="footer-widget__single footer-widget__contact">
                                <div class="title-box">
                                    <h2>Contact Us</h2>
                                    <div class="line"></div>
                                </div>

                                <ul class="footer-widget__contact-list">
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-maps-and-flags"></span>
                                        </div>
                                        <div class="text-box">
                                            <p><a href="{{$footerData[2]->alamat}}">{{$footerData[1]->alamat}}</a> <br> Indonesia</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-telephone-call"></span>
                                        </div>

                                        <div class="text-box">
                                            <p><a href="{{$footerData[2]->nomor_telepon}}">WA : {{$footerData[1]->nomor_telepon}}</a></p>
                                            <p><a href="{{$footerData[2]->nomor_telepon}}">Telp : {{$footerData[1]->nomor_telepon}}</a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-email"></span>
                                        </div>

                                        <div class="text-box">
                                            <p><a href="{{$footerData[2]->instagram_link}}">Instagram : {{$footerData[1]->instagram_link}}</a></p>
                                            <p><a href="{{$footerData[2]->gojec_link}}">Gojek : {{$footerData[1]->gojek_link}}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__copyright">
                            <p>Copyright@ 2024 <a href="index.html">Billdins</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
