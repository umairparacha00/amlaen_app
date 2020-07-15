@extends('layouts.app1')
@section('head')
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Online Advertiser & Publisher Network | Amlaen.com</title>
        <meta
            name="description"
            content="Amlaen is one of the top advertisers which provides numerous options to boots and enhance your Viewership and Brading. Let's grow your business using our unique and latest technologies."
        />
        <meta
            name="Keywords"
            content="amlaen, amlaen.com, digital marketing, amlaen digital marketing agency"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/mini.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}"/>
        <style>
            .site-slider {
                position: relative
            }

            .position-top {
                position: absolute;
                top: 50%
            }

            .site-slider .slider-one img {
                width: 100%;
                height: 550px;
                object-fit: cover
            }

            .site-slider .slider-btn .next, .site-slider .slider-btn .prev {
                background-color: var(--secondary-color);
                padding: 1em 1.5em;
                border-radius: 10em;
                color: #fff;
                margin: 0 1em;
                opacity: 0;
                transition: opacity .7s ease
            }

            .site-slider:hover .slider-btn .next, .site-slider:hover .slider-btn .prev {
                opacity: 1
            }

            .right-0 {
                right: 0
            }

            .slick-dots {
                display: flex;
                justify-content: center;
                padding: 1.5em 0;
                margin: 0;
                list-style-type: none;
                position: absolute;
                bottom: 0;
                right: 50%;
                left: 50%
            }

            .slick-dots li {
                margin: 0 .6em
            }

            .slick-dots button {
                display: block;
                width: .6rem;
                height: .6rem;
                padding: 0;
                border: none !important;
                background-color: var(--secondary-color);
                text-indent: -99999px;
                border-radius: 100%
            }

            .slick-dots li.slick-active button {
                transform: scale(1.5)
            }

            .slick-dots li button:focus {
                outline: 0 !important
            }

            #services {
                padding-top: 4em !important
            }

            .services-title h1 {
                font-weight: 700;
                color: var(--main-color);
                font-style: italic;
                text-align: center
            }

            .align-ch {
                align-self: stretch !important
            }

            .services-div {
                text-align: center;
                background: #fff;
                min-height: 320px;
                border-left: 5px solid var(--secondary-color);
                margin: 0 0 30px;
                padding: 0 .4em;
                -webkit-box-shadow: 0 0 20px #ccc;
                box-shadow: 0 0 20px #ccc;
                transition: transform .7s ease, -webkit-transform .7s ease
            }

            .services-div h4 {
                color: var(--main-color);
                font-size: 23px
            }

            .services-div .services-tag {
                color: var(--para-color);
                font-size: 1rem;
                margin-bottom: .8em;
                letter-spacing: 1px
            }

            .services-div .contact-us-link {
                background: #f5f5f6;
                color: #626262
            }

            .contact-us-link {
                padding: .5em .93em;
                font-weight: 700;
                display: inline-block;
                font-size: 1rem;
                vertical-align: bottom;
                text-transform: uppercase
            }

            .services-div .contact-us-link:hover, .services-div:hover .contact-us-link {
                background: var(--secondary-color);
                color: #fff
            }

            .services-div:hover {
                cursor: pointer;
                transform: translate3D(0, -12px, 0)
            }

            .footer-wrap {
                background: var(--main-color);
                color: #fff;
                border-top: 6px solid var(--secondary-color)
            }

            .footer-content {
                padding: 2em 10px;
                font-size: 1rem
            }

            @media (max-width: 768px) {
                .site-slider .slider-one img {
                    width: 100%;
                    max-height: 250px
                }

                .main-menu li a {
                    margin-bottom: .6em
                }

                .site-slider .slider-btn .next, .site-slider .slider-btn .prev {
                    padding: .5em 1em
                }
            }

            @media (min-width: 767px) {
                .site-slider .slider-one img {
                    width: 100%;
                    max-height: 550px
                }
            }
        </style>
        <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lato|Proza+Libre:400,700i&display=swap');

            :root {
                --main-color: #10163a;
                --secondary-color: #7367f0;
                --secondary-color2: #645bd3;
                --heading-color: #001b41;
                --para-color: #777777
            }

            * {
                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                outline: 0;
                text-decoration: none
            }

            html {
                scroll-behavior: smooth;
                font-size: 16px;
                line-height: 1.5;
                letter-spacing: .01rem
            }

            body {
                color: #626262;
                background-color: #fff;
                font-family: lato, sans-serif;
                font-weight: 400;
                max-width: 100%
            }

            header {
                display: block !important
            }

            h2, h3, h4, h5, h6 {
                font-weight: 700;
                margin: 0 0 20px !important;
                line-height: calc(1em + 8px)
            }

            fieldset, form, h1, h2, h3, h4, h5, h6, input, p, ul {
                margin: 0;
                padding: 0;
                list-style: none
            }

            a, a:focus, a:hover {
                text-decoration: none;
                transition: all .3s ease
            }

            button:focus {
                outline: 0 !important
            }

            img, svg {
                vertical-align: middle
            }

            .logo-area {
                padding: .8em 1.25em;
                overflow: hidden
            }

            header {
                width: 100%;
                outline-style: none
            }

            .site-title {
                font-family: "Proza Libre", sans-serif !important;
                font-weight: 700;
                margin-left: .6em;
                color: var(--secondary-color);
                font-style: italic
            }

            .main-menu {
                background: #fff;
                box-shadow: 0 0 20px #ccc;
                padding: .312em 1.25em
            }

            .main-menu ul {
                text-align: center
            }

            .navbar-toggler {
                background: var(--secondary-color)
            }

            .navbar-toggler .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
                color: var(--secondary-color)
            }

            .right-menu li a:hover {
                color: #fff;
                background: 0 0
            }

            .main-menu li a:hover {
                color: var(--secondary-color);
                box-shadow: 0 4px 0 0 var(--secondary-color)
            }

            .main-menu li a {
                color: #626262;
                text-transform: uppercase;
                margin-left: 1em;
                padding: .3em 0;
                font-weight: 700;
                display: inline-block
            }

            .main-menu ul:last-child li:last-child a {
                border: 1px solid var(--secondary-color);
                padding-left: 1em;
                padding-right: 1em
            }

            .main-menu ul:last-child li:last-child a:hover {
                background-color: var(--secondary-color);
                color: #fff;
                box-shadow: none
            }

            .loading {
                overflow: hidden;
                height: 100vh
            }

            .spinner-wrapper {
                width: 100%;
                height: 100%;
                background-color: #fff;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 9999;
                display: flex;
                overflow: hidden;
                align-items: center;
                justify-content: center
            }

            .spinner {
                position: relative;
                width: 4rem;
                height: 4rem;
                border-radius: 50%
            }

            .spinner::after, .spinner::before {
                content: "";
                position: absolute;
                border-radius: 50%
            }

            .spinner:before {
                width: 100%;
                height: 100%;
                background-image: linear-gradient(90deg, #10163a 0, #645bd3 100%);
                animation: spin .5s infinite linear
            }

            .spinner:after {
                width: 90%;
                height: 90%;
                background-color: #fff;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%)
            }

            @keyframes spin {
                to {
                    transform: rotate(360deg)
                }
            }

            @media only screen and (max-width: 480px) {
                .site-title {
                    margin-left: 0
                }
            }

            @media (min-width: 1022px) {
                .main-menu li a {
                    margin-left: 3em
                }
            }
        </style>
        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '262177634869634');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=262177634869634&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->
@endsection
@section('content')
    <main>
        <div class="jumbotron mb-0 pb-0" style="background-color: #ffffff;">
            <div class="container mb-0">
                <div class="site-slider">
                    <div class="slider-one">
                        <div>
                            <img
                                src="{{ asset('assets/images/banner3/banner-1.webp') }}"
                                alt="Seo is written on the image with some symbols around it."
                                class="img-fluid"
                            />
                        </div>
                        <div>
                            <img
                                src="{{ asset('assets/images/banner3/banner-2.webp') }}"
                                alt="Seo is written on the image with some symbols around it."
                                class="img-fluid" alt=""
                            />
                        </div>
                        <div>
                            <img
                                src="{{ asset('assets/images/banner3/banner-3.webp') }}"
                                alt="Seo is written on the image with some symbols around it."
                                class="img-fluid"
                            />
                        </div>

                        <div>
                            <img
                                src="{{ asset('assets/images/banner3/banner-4.webp') }}"
                                alt="Seo is written on the image with some symbols around it."
                                class="img-fluid"
                            />
                        </div>

                        <div>
                            <img
                                src="{{ asset('assets/images/banner3/banner-5.webp') }}"
                                alt="Seo is written on the image with some symbols around it."
                                class="img-fluid"
                            />
                        </div>
                        <div>
                            <img
                                src="{{ asset('assets/images/banner3/banner-6.webp') }}"
                                alt="Seo is written on the image with some symbols around it."
                                class="img-fluid"
                            />
                        </div>
                    </div>
                    <div class="slider-btn">
                <span class="position-top prev">
                  <i class="fal fa-chevron-left"></i>
                </span>
                        <span class="position-top next right-0">
                  <i class="fal fa-chevron-right"></i>
                </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Section -->
        <section id="services">
            <div class="container">
                <div class="services-title mb-5 text-uppercase">
                    <h1>Services</h1>
                </div>
                <div class="row">
                    <div
                        class="align-ch col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4"
                    >
                        <div class="services-div">
                            <div class="services-div-icon">
                                <img src="{{ asset('assets/images/home/image-1.png') }}"/>
                            </div>
                            <h4>Web Development</h4>
                            <div class="p_ali_12">
                                <p class="services-tag">
                                    Build your perfect website. We create powerful
                                    brand-centric and functional sites
                                </p>
                            </div>
                            <a href="contact_us.blade.php" class="contact-us-link"
                            >Contact Us</a
                            >
                        </div>
                    </div>
                    <div
                        class="align-ch col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4"
                    >
                        <div class="services-div">
                            <div class="services-div-icon">
                                <img src="{{ asset('assets/images/home/image-2.png') }}"/>
                            </div>
                            <h4>Social Media Marketing</h4>
                            <div class="p_ali_12">
                                <p class="services-tag">
                                    Let's grow your business using the powerful platforms of
                                    social media marketing and engage with your users.
                                </p>
                            </div>
                            <a href="contact_us.blade.php" class="contact-us-link"
                            >Contact Us</a
                            >
                        </div>
                    </div>
                    <div
                        class="align-ch col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4"
                    >
                        <div class="services-div">
                            <div class="services-div-icon">
                                <img src="{{ asset('assets/images/home/image-3.png') }}"/>
                            </div>
                            <h4>Search Engine Optimization</h4>
                            <div class="p_ali_12">
                                <p class="services-tag">
                                    We provide best SEO solution for the scaling of your
                                    website.
                                </p>
                            </div>
                            <a href="contact_us.blade.php" class="contact-us-link"
                            >Contact Us</a
                            >
                        </div>
                    </div>
                    <div
                        class="align-ch col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4"
                    >
                        <div class="services-div">
                            <div class="services-div-icon">
                                <img src="{{ asset('assets/images/home/image-4.png') }}"/>
                            </div>
                            <h4>PPC Management</h4>
                            <div class="p_ali_12">
                                <p class="services-tag">
                                    Get real traffic to your website or blog through our wider
                                    PTC Paid To Click network.
                                </p>
                            </div>
                            <a href="contact_us.blade.php" class="contact-us-link"
                            >Contact Us</a
                            >
                        </div>
                    </div>
                    <div
                        class="align-ch col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4"
                    >
                        <div class="services-div">
                            <div class="services-div-icon">
                                <img src="{{ asset('assets/images/home/image-5.png') }}"/>
                            </div>
                            <h4>UI /UX</h4>
                            <div class="p_ali_12">
                                <p class="services-tag">
                                    Want to make your website app’s user experience more
                                    engaging? We can help. We are the experts.
                                </p>
                            </div>
                            <a href="contact_us.blade.php" class="contact-us-link"
                            >Contact Us</a
                            >
                        </div>
                    </div>
                    <div
                        class="align-ch col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4"
                    >
                        <div class="services-div">
                            <div class="services-div-icon">
                                <img src="{{ asset('assets/images/home/image-6.png') }}"/>
                            </div>
                            <h4>Analytics</h4>
                            <div class="p_ali_12">
                                <p class="services-tag">
                                    We are highly capable of observing and finding the reasons
                                    for your business problems along with potential solutions.
                                </p>
                            </div>
                            <a href="contact_us.blade.php" class="contact-us-link"
                            >Contact Us</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.slider-one').not('.slick-intialized').slick({
                autoplay: true,
                autoplaySpeed: 1800,
                dots: true,
                prevArrow: ".site-slider .slider-btn .prev",
                nextArrow: ".site-slider .slider-btn .next"
            });
        });
    </script>
@endsection
