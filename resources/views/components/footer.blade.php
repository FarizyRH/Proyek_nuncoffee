<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>


    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="fa fa-times"></i>
        </span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image">
                <img src="{{asset('01-html-file/assets/images/logo/3.png')}}" width="100" height="60"  alt="Logo" />
            </a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">needhelp@billdins</a>
            </li>
            <li>
                <i class="fas fa-phone"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul>

        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
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
                    <a href="index.html"><img src="{{ asset('01-html-file/assets/images/logo/2.png') }}" class="h-[75px] w-[100px]"></a>
                </div>




            </div>
        </div>

<div class="site-footer">
    <div class="site-footer__top-inner">
<div class="container">
            <div class="row">




                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated animated animated animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
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
                                    <p>JL. Pramuka, No.4, Lembah Sari<br> Rumbai, Pekanbaru</p>
                                </div>
                            </li>

                            <li>
                                <div class="icon-box">
                                    <span class="icon-telephone-call"></span>
                                </div>

                                <div class="text-box">
                                    <p><a href="tel:1234567890">+517 845 74589</a></p>
                                    <p><a href="tel:1234567890">+517 845 74589</a></p>
                                </div>
                            </li>

                            <li>
                                <div class="icon-box">
                                    <span class="icon-email"></span>
                                </div>

                                <div class="text-box">
                                    <p><a href="mailto:yourmail@email.com">nuncoffe@gmail.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                session_start();

                if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 'admin' || $_SESSION['user_role'] == 'super_admin')) {
                ?>
                <div class="col-xl-6">
                    <div class="contact-page__form">
                        <div class="title-box">
                            <h2 class="" style="color: white;">Get In Touch</h2>
                        </div>
                        <form class="contact-form-validated contact-page__form-box" action="assets/inc/sendemail.php" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="name" placeholder="Name" required="" aria-required="true">
                                        <div class="icon"><span class="icon-user"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="email" name="email" placeholder="Email" required="" aria-required="true">
                                        <div class="icon"><span class="icon-email"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="Phone" placeholder="Phone" required="" aria-required="true">
                                        <div class="icon"><span class="icon-telephone-call"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <div class="select-box">
                                            <select class="selectmenu wide" style="display: none;">
                                                <option selected="selected">Subject</option>
                                                <option>Freight Type 01</option>
                                                <option>Freight Type 02</option>
                                                <option>Freight Type 03</option>
                                                <option>Freight Type 04</option>
                                                <option>Freight Type 05</option>
                                            </select><div class="nice-select selectmenu wide" tabindex="0"><span class="current">Subject</span><ul class="list"><li data-value="Subject" class="option selected">Subject</li><li data-value="Freight Type 01" class="option">Freight Type 01</li><li data-value="Freight Type 02" class="option">Freight Type 02</li><li data-value="Freight Type 03" class="option">Freight Type 03</li><li data-value="Freight Type 04" class="option">Freight Type 04</li><li data-value="Freight Type 05" class="option">Freight Type 05</li></ul></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <div class="icon style2"><span class="fa fa-pencil"></span></div>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="contact-page__form-btn">
                                        <button type="submit" class="thm-btn">
                                            Submit Now
                                            <i class="icon-next"></i>
                                            <span class="hover-btn hover-bx"></span>
                                            <span class="hover-btn hover-bx2"></span>
                                            <span class="hover-btn hover-bx3"></span>
                                            <span class="hover-btn hover-bx4"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
</div>

</div>

    </div>
    <!--End Site Footer Top-->

    <!--Start Site Footer Middle-->

    <!--End Site Footer Middle-->

    <!--Start Site Footer Bottom-->
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__copyright">
                            <p>Copyright@ 2024 <a href="index.html">Billdins</a>. All Rights Reserved.</p>
                        </div>

                        <ul class="site-footer__bottom-menu">
                            <li><a href="about.html">Setting &amp; Privacy </a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="contact.html">Support</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Site Footer Bottom-->
</footer>
