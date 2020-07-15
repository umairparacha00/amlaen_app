@extends('layouts.app1')
@section('head')
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact-Us | Amlaen.com</title>
        <meta
            name="description"
            content="Amlaen is one of the top advertisers which provides numerous options to boots and enhance your Viewership and Brading."
        />
        <meta
            name="Keywords"
            content="Amlaen contact-us, Amlaen.com, Digital Marketing, Amlaen Digital Marketing Agency"
        />
        <link rel="stylesheet" href="assets/css/api_648732.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
        <style>
            #jum{padding:4.3em 0}.p-contact-us{overflow:hidden}.p-contact-us .hero{position:relative}.p-contact-us .hero::before{background-image:url({{ asset('assets/images/banner3/hero.webp') }});background-position:left top;background-repeat:no-repeat;background-size:cover;content:"";display:block;height:300px;margin:0 0 1rem}.p-contact-us .hero h1{color:var(--secondary-color);font-weight:600;font-family:'Fira Sans',sans-serif;line-height:calc(1em + 8px)}.p-contact-us .hero .card{background:#fff;box-shadow:0 4px 12px rgba(102,102,102,.15);height:100%;padding:2rem 3rem 2.5rem;text-align:center;border-radius:0!important}p.center{margin-bottom:1.5em}.p-contact-us .hero .card a{margin-top:auto;background-color:var(--secondary-color);border-radius:0!important;color:#fff}.p-contact-us .hero .card a:hover{background-color:var(--secondary-color2);color:#fff}.span-row{text-align:center}.span-row span{background:var(--secondary-color);display:inline-block;width:80px;padding:20px 0;-webkit-box-shadow:0 0 20px #ccc;box-shadow:0 0 20px #ccc;border-radius:25px;margin-bottom:1em}.col-sm-12{margin-bottom:1.3em!important}.col-md-5{padding:0 .5em}.conatct-form-area h3{color:var(--secondary-color);font-size:3rem;text-align:center;text-transform:uppercase;margin:40px 0 20px}.publisher-banner-form{padding:0 15px}.publisher-banner-form .col-sm-12,.publisher-banner-form .col-sm-6{padding:0 10px}.input-textarea,input.input-field{border:1px solid #d0d1d2;padding:8px;width:100%;margin:0 0 20px;background:#f0f1f2}.select-option-area select{border:1px solid #d0d1d2;padding:8px;width:100%;margin:0 0 20px;color:#777;background:#f0f1f2}.conatct-form-area .check-box-area{margin:0 0 10px;color:#999;font-size:16px}#get_in{background:#fff;padding:25px 0;-webkit-box-shadow:0 0 20px #999;box-shadow:0 0 20px #999}input.submit-btn{background:var(--secondary-color);display:block;border:none;color:#fff;font-size:23px;font-weight:700;text-transform:uppercase;padding:10px 25px;-webkit-box-shadow:0 0 20px #999;box-shadow:0 0 20px #999;margin:20px 0 12px;cursor:pointer}.reCaptcha>div>div{margin:0 auto}.subn>input{margin:0 auto}@media only screen and (max-width:572px){.p-contact-us .hero{padding-top:2.4em}}@media (max-width:768px){.main-menu li a{margin-bottom:.6em}.about-us a{font-size:1rem}.hero{text-align:center}.p-contact-us .hero .card{margin-bottom:1em}}@media (max-width:470px){.login-area,.logo{text-align:center;float:none}}@media (min-width:992px){.main-menu li a{margin-left:3em}}@media only screen and (min-width:769px){.p-contact-us .hero::before{background-position:left center;height:100%;position:absolute;right:0;top:0;width:50%}.p-contact-us .hero h1{font-size:4rem;margin-bottom:.75em}article>section{padding-top:4.5em;padding-bottom:4.5em}.hero{min-height:550px}}
        </style>
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '262177634869634');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=262177634869634&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->
    </head>
@endsection
@section('content')
    <div class="jumbotron pl-0 pr-0" style="background-color: transparent;">
        <article class="p-contact-us">
            <section class="hero">
                <div class="bg"></div>
                <div class="container" id="my_container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8" id="my_mb-0">
                            <h1 class="strong">Contact us</h1>
                        </div>
                        <div class="col-sm-12 col-md-4"></div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 col-md-5">
                            <div class="card">
                                <div class="span-row">
                    <span>
                      <img src="{{ asset('assets/images/contact-us/icon-1.png') }}" alt="Adders icon" />
                    </span>
                                </div>
                                <h3 class="center">Office Address</h3>
                                <p class="center">
                                    Office 168 Stylish Plaza Kohinoor City Faisalabad
                                </p>
                                <a href="#" class="btn btn-lg">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5">
                            <div class="card">
                                <div class="span-row">
                    <span>
                      <img src="{{ asset('assets/images/contact-us/icon-2.png') }}" alt="Contact phone icon" />
                    </span>
                                </div>
                                <h3 class="center">Email</h3>
                                <p class="center">support@amlaen.com</p>
                                <a href="#" class="btn btn-lg">Email Us</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2"></div>
                    </div>
                </div>
            </section>
            <section>
                <div class="conatct-form-area">
                    <h3>Get in Touch</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="publisher-banner-form">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <input
                                                type="text"
                                                placeholder="Full Name"
                                                class="input-field form-control"
                                            />
                                        </div>

                                        <div class="col-md-6 col-sm-12 form-group">
                                            <input
                                                type="email"
                                                placeholder="Email"
                                                class="input-field form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <input
                                                type="text"
                                                placeholder="Phone"
                                                class="input-field form-control"
                                            />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="select-option-area form-group">
                                                <select class="form-control">
                                                    <option selected="selected" disabled="disabled"
                                                    >Select Purpose</option
                                                    >
                                                    <option>Services</option>
                                                    <option>Project Analysis</option>
                                                    <option>Report a bug</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-12 col-sm-12 form-group">
                        <textarea
                            placeholder="Message"
                            class="input-textarea form-control"
                            style="height: 8rem;"
                        ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="reCaptcha col-xl-12 text-center col col-md-12 col-sm-12"
                                        >
                                            <div value="" class="m-auto">
                                                <div style="width: 304px; height: 78px;">
                                                    <div>
                                                        <iframe
                                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeUCq4UAAAAAM-wFMpIQR94RUgB86YrVaUTJeDu&amp;co=aHR0cHM6Ly93d3cucHJwYWwuY29tOjQ0Mw..&amp;hl=en&amp;v=-wV2EAWEOTlEtZh4vNQtn3H1&amp;size=normal&amp;cb=hr02g0jlcp2q"
                                                            width="304"
                                                            height="78"
                                                            role="presentation"
                                                            name="a-r1q87utc81ix"
                                                            frameborder="0"
                                                            scrolling="no"
                                                            sandbox="allow-forms
                                allow-popups
                                allow-same-origin
                                allow-scripts
                                allow-top-navigation
                                allow-modals
                                allow-popups-to-escape-sandbox"
                                                        ></iframe>
                                                    </div>
                                                    <textarea
                                                        id="g-recaptcha-response"
                                                        name="g-recaptcha-response"
                                                        class="g-recaptcha-response"
                                                        style="
                                width: 250px;
                                height: 40px;
                                border: 1px solid rgb(193, 193, 193);
                                margin: 10px 25px;
                                padding: 0px;
                                resize: none;
                                display: none;
                              "
                                                    ></textarea>
                                                </div>
                                                <iframe style="display: none;"></iframe>
                                            </div>
                                        </div>
                                        <div class="subn text-center col col-md-12 col-sm-12">
                                            <input
                                                type="submit"
                                                value="Submit"
                                                class="submit-btn"
                                            />
                                        </div>
                                    </div>
                                    <div class="row"></div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </div>
@endsection
