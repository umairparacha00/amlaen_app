@extends('layouts.app1')
@section('head')
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About-Us | Amlaen.com</title>
        <meta
            name="description"
            content="Amlaen is one of the top advertisers which provides numerous options to boots and enhance your Viewership and Branding."
        />
        <meta
            name="Keywords"
            content="Amlaen about us, Amlaen.com, Digital Marketing, Amlaen Digital Marketing Agency"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/api_648732.min.css') }}" />
        <style>
           .about-us{margin-top:3em;margin-bottom:3em}.about-us h3{color:var(--main-color);font-size:2.5rem;text-transform:uppercase}.about-us p{color:#555;font-size:1.125rem;line-height:1.62em;margin:0 0 1.87em}.about-us a{background:var(--secondary-color);color:#fff;padding:.68em 1.56em;display:inline-block;font-size:1.37rem;font-weight:700;text-transform:uppercase;-webkit-box-shadow:0 0 15px #ddd;box-shadow:0 0 15px #ddd;margin-top:1em}.about-us a:hover{color:var(--main-color)}.amw-a-spot-banner{margin-bottom:3.75em;width:100%;margin-bottom:0;position:relative}.amw-a-spot-banner__text-container{width:100%;text-align:left}.amw-a-spot-banner__content{align-self:center;background:0 0;display:flex;flex-direction:column;height:100%;justify-content:center;min-height:100%;padding:0;position:absolute;top:0;width:38%}.amw-a-spot-banner--left-align .amw-a-spot-banner__content{margin-left:10%}#ban-h1{margin-top:20px;margin-bottom:10px;font-family:inherit;font-weight:500;line-height:1.1;font-size:36px}.ser_154jk-title{color:var(--main-color);text-align:center}.ser_154jk-title h3{font-size:2.25rem}.ser_154jk-div{text-align:center;background:#fff;min-height:290px;border-left:5px solid var(--secondary-color);margin:0 0 30px;padding:0 .4em;box-shadow:0 0 20px rgba(0,0,0,.2);transition:transform .7s ease,-webkit-transform .7s ease}.ser_154jk-div h4{color:var(--main-color);font-size:23px}.icon span{width:60px;height:60px;background:var(--secondary-color);display:inline-block;padding:.92em 0;border-radius:45px;text-align:center;margin:3em 0 2em 0}.ser_154jk-div .ser_154jk-tag{color:var(--para-color);font-size:1rem;padding:.2em 0 1.5em 0}.er-main{background-color:var(--secondary-color);text-align:center;padding:3em 1.3em;color:#fff}.er-main h1{margin-bottom:1em;font-weight:700}.er-main a{color:var(--secondary-color);background-color:#fff;font-size:1.2rem;font-weight:700;padding:.7em 1.4em}.er-main a:hover{color:var(--main-color);background-color:#fff;-webkit-box-shadow:0 0 15px #888;box-shadow:0 0 15px #888}.footer-wrap{background:var(--main-color);color:#fff;border-top:6px solid var(--secondary-color)}.footer-content{padding:2em 10px;font-size:1rem}@media (max-width:767px){.main-menu li a{margin-bottom:.6em}.amw-a-spot-banner{margin-left:-15px;width:calc(100% + 30px)}.amw-a-spot-banner__content{text-align:center;width:100%}.amw-a-spot-banner__content{text-align:center;width:100%}.amw-a-spot-banner--left-align .amw-a-spot-banner__content{margin-left:0}.amw-a-spot-banner__text-container{text-align:center}.about-us h3{font-size:2rem}.about-us a{font-size:16px}.er-main h1{font-size:1.44rem}}@media (max-width:470px){.login-area,.logo{text-align:center;float:none}}@media (min-width:1px){.xss-width-100{width:100%!important}.xss-display-none{display:none}.xss-mb-20{margin-bottom:20px}}@media (min-width:992px){.main-menu li a{margin-left:3em}}@media (min-width:769px){.md-display-inline-block{display:inline-block}.md-display-none{display:none}.md-mb-15{margin-bottom:15px}.md-display-block{display:block}.md-mt-10{margin-top:10px}}
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
    <div class="jumbotron mb-0 pb-0" style="background-color: transparent;">
      <div class="row">
        <div class="col-12">
          <section id="about-banner">
            <div class="container">
              <div class="about-us text-center">
                <h3>About Amlaen</h3>
                <div
                  class="amw-a-spot-banner amw-a-spot-banner--left-align js-section-block"
                >
                  <div class="amw-a-spot-banner__image-container">
                    <img
                      class="xss-width-100 xss-display-none md-display-inline-block"
                      src="{{ asset('assets/images/banner3/about-1.webp') }}"
                      alt="Man standing on a hilltop overlooking a city at sunrise."
                    />
                    <img
                      class="xss-width-100 md-display-none"
                      src="{{ asset('assets/images/banner3/about-2.webp') }}"
                      height="auto"
                      width="100%"
                      alt="Man standing on a hilltop overlooking a city at sunrise."
                    />
                  </div>
                  <div class="amw-a-spot-banner__content">
                    <div class="amw-a-spot-banner__text-container">
                      <div class="xss-mb-20 md-mb-15">
                        <h1 id="ban-h1">
                          <span style="color: #ffffff;"
                            >Let’s Build this Thing Together!</span
                          >
                        </h1>
                        <div class="md-mt-10 md-display-block">
                          <span class="amw-text"
                            ><span style="color: #ffffff;"
                              >Our Approach to Digital Marketing is Centered
                              Around Learning & Growing With Your Users</span
                            ></span
                          >
                        </div>
                      </div>
                    </div>

                    <div class="amw-a-spot-banner__cta-container">
                      <div></div>
                    </div>
                  </div>
                </div>
                <!-- <p>AT&R is a dynamic one place solution marketing firm with clients across Pakistan and abroad. We work with businesses from a range of industries but we take the same approach to every challenge – working closely with our clients to create and deliver a plan that is squarely focused on their goals..</p> -->
                <a href="contact_us.blade.php">Let's Discuss Your Project</a>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- Service Section -->
      <div class="container">
        <div class="ser_154jk-title mb-5 text-uppercase">
          <h3>quick Steps</h3>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="ser_154jk-div">
              <div class="icon">
                <span>
                  <img src="{{ asset('assets/images/abouts-us/about-icon-8.png') }}" />
                </span>
              </div>
              <h4>Contact</h4>
              <p class="ser_154jk-tag">
                Feel free to contact us and tell us about your project and
                difficulties your facing in technological field.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="ser_154jk-div">
              <div class="icon">
                <span>
                  <img src="{{ asset('assets/images/abouts-us/about-icon-9.png') }}" />
                </span>
              </div>
              <h4>Project Analysis</h4>
              <p class="ser_154jk-tag">
                Our professionals will stay connected with you to explore and
                analyze your project and set of requirements in depth.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="ser_154jk-div">
              <div class="icon">
                <span>
                  <img src="{{ asset('assets/images/abouts-us/about-icon-10.png') }}" />
                </span>
              </div>
              <h4>Proposal Delivery</h4>
              <p class="ser_154jk-tag">
                Using the information that you provided during the project
                analysis we provide a productive project proposal for your
                review.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="container-fluid p-0">
        <div class="er-main">
          <h1><i>TAKE YOUR EARNING TO THE NEXT LEVEL</i></h1>
          <a href="register.blade.php">SIGN UP NOW</a>
        </div>
      </div>
    </section>
@endsection
