<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>


<!--Start Preloader-->
<div class="loader js-preloader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!--End Preloader-->



<div class="page-wrapper">

    <!--Start Main Header One-->
    <header class="main-header-one">
        <!--Start Main Header One Top-->
        <div class="main-header-one__top">
            <div class="container">
                <div class="main-header-one__top-inner">
                    <ul class="header-style1__contact">
                        <li>
                            <div class="icon">
                                <i class="icon-clock"></i>
                            </div>
                            <div class="text">
                                <p>10:00 am - 10: pm - Sat - Sun</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="icon-phone-call"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:1234567890">+62 823-8699-6665</a></p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="icon-placeholder"></i>
                            </div>
                            <div class="text">
                                <p>JL. Pramuka, No.14, Rumbai - Pekanbaru</p>
                            </div>
                        </li>
                    </ul>

                    <div class="main-header-one__top-right">
                        <div class="main-header__language-switcher">
                            <div class="icon">
                                <span class="icon-globe"></span>
                            </div>

                            <div class="language-switcher clearfix">
                                <form action="#" class="clearfix">
                                    <div class="select-box clearfix">
                                        <select class="selectmenu wide">
                                            <option selected="selected">English</option>
                                            <option>France</option>
                                            <option>Germany</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="header-style1__social-links">
                            <a href="#"><i class="icon-facebook-app-symbol"></i></a>
                            <a href="#"><i class="icon-twitter1"></i></a>
                            <a href="#"><i class="icon-linkedin-big-logo"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Main Header One Top-->

        <!--Start Main Header One Bottom-->
        <div class="main-header-one__bottom">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-header-one__bottom-left">
                                <div class="logo-one">
                                    <a href="index.html"><img src="{{ asset('01-html-file/assets/images/logo/2.png') }}" class="h-[75px] w-[100px]">

                                    </a>
                                </div>
                            </div>

                            <div class="main-header-one__bottom-middle">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li>
                                            <a href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="route('products')" :active="request()->routeIs('products')">Product</a>
                                        </li>
                                        <li>
                                            <a href="route('aboutus')" :active="request()->routeIs('abooutus')">AboutUs</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('feedback.index') }}" :active="request()->routeIs('feedback.index')">Feedback</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('testimoni.index') }}" :active="request()->routeIs('testimoni.index')">Testimoni</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="main-header-one__bottom-right">
                                <div class="header-search-box">
                                    <a href="#"
                                        class="main-menu__search search-toggler icon-search-interface-symbol"></a>
                                </div>

                                <div class="main-header__shop">
                                    <div class="icon-box">
                                        <a href="#"><i class="icon-shopping-bag"></i>
                                        </a>
                                        <div class="count">
                                            <span>0</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="main-header__btn">
                                    <a class="thm-btn" href="contact.html">Get a Quote
                                        <i class="icon-next"></i>
                                        <span class="hover-btn hover-bx"></span>
                                        <span class="hover-btn hover-bx2"></span>
                                        <span class="hover-btn hover-bx3"></span>
                                        <span class="hover-btn hover-bx4"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--End Main Header One Bottom-->
    </header>
    <!--End Main Header One-->
