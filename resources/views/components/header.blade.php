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
                                    <a href=""><img src="{{ asset('01-html-file/assets/images/logo/2.png') }}" class="h-[75px] w-[100px]">
                                    </a>
                                </div>
                            </div>

                            <div class="main-header-one__bottom-middle">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li>
                                            <a href="{{ route('dashboard') }}"class="{{ request()->routeIs('dashboard') ? 'text-orange-500 font-bold border-b-2 border-orange-500' : 'text-gray-700' }}">Dashboard</a>

                                        </li>
                                        <li>
                                            <a href="{{ route('products.index') }}"class="{{ request()->routeIs('products.index') ? 'text-orange-500 font-bold border-b-2 border-orange-500' : 'text-gray-700' }}">Product</a>

                                        </li>
                                        <li>
                                            <a href="{{ route('aboutus.index') }}"class="{{ request()->routeIs('aboutus.index') ? 'text-orange-500 font-bold border-b-2 border-orange-500' : 'text-gray-700' }}">About Us</a>

                                        </li>
                                        <li>
                                            <a href="{{ route('feedback.index') }}"class="{{ request()->routeIs('feedback.index') ? 'text-orange-500 font-bold border-b-2 border-orange-500' : 'text-gray-700' }}">Feedback</a>

                                        </li>
                                        <li>
                                            <a href="{{ route('testimoni.index') }}"class="{{ request()->routeIs('testimoni.index') ? 'text-orange-500 font-bold border-b-2 border-orange-500' : 'text-gray-700' }}">Testimoni</a>

                                        </li>
                                        <li>
                                            <a href="{{ route('galeris') }}"class="{{ request()->routeIs('galeris') ? 'text-orange-500 font-bold border-b-2 border-orange-500' : 'text-gray-700' }}">galery</a>
                                        </li>
                                        <li class="dropdown">
                                            <div class="icon">
                                                <span class="icon"></span>
                                            </div>
                                            <a class="" href="#">
                                                {{ Auth::check() ? Auth::user()->name : 'Login' }}
                                            </a>
                                            <ul class="shadow-box">
                                                @auth
                                                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                                                    <li>
                                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                            Logout
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                @else
                                                    <li><a href="{{ route('login') }}">Login</a></li>
                                                    <li><a href="{{ route('register') }}">Register</a></li>
                                                @endauth
                                            </ul>


                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-header-one__bottom-right">
                                <ul class="main-menu__list">

                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--End Main Header One Bottom-->
    </header>
    <!--End Main Header One-->
