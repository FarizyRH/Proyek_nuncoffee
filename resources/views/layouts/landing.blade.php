<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <title> Blog Grid || Billdins || Billdins HTML 5 Template </title> --}}
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('01-html-file/assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('01-html-file/assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('01-html-file/assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{ asset('01-html-file/assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="Billdins HTML 5 Template " />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/01-bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/02-animate.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/03-custom-animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/05-flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/06-font-awesome-all.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/07-jarallax.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/08-jquery.magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/09-nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/10-odometer.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/11-owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/12-owl.theme.default.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/13-jquery-ui.css') }}" type="text/css">

    <!-- Module CSS -->
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/01-slider.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/02-about.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/03-services.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/04-testimonial.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/05-team.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/06-blog.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/07-contact.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/08-counter.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/09-error.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/10-faq.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/11-footer.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/12-page-header.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/13-shop.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/14-video.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/coming-soon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/cta.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/feature.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/pricing.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/project.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/why-choose.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/appoinment.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/working-process.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/module-css/brand.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/swiper.min.css') }}" type="text/css">
    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('01-html-file/assets/css/responsive.css') }}" type="text/css">
    
</head>

<body class="custom-cursor">
    @include('components.header')
    @yield('content')
    @include('components.footer')

    <script src="{{ asset('01-html-file/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/wNumb.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/curved-text/jquery.circleType.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/curved-text/jquery.fittext.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/curved-text/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/gsap/gsap.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/gsap/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/gsap/SplitText.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/01-bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/02-countdown.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/03-jquery.appear.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/04-jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/05-owl.carousel.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/06-jarallax.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/07-odometer.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/08-jquery-ui.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/09-jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/10-wow.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/11-isotope.js') }}"></script>
    <script src="{{ asset('01-html-file/assets/js/script.js') }}"></script>

</body>

</html>
