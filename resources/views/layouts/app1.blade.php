<!DOCTYPE html>
<html lang="en">
@yield('head')
<style>
    @import url('https://fonts.googleapis.com/css?family=Lato|Proza+Libre:400,700i&display=swap');:root{--main-color: #10163a;--secondary-color:#645bd3;--secondary-color2: #5148ad;--heading-color:#001b41;--para-color:#777777}  *{margin:0;padding:0;-webkit-box-sizing:border-box;box-sizing:border-box;outline:0;text-decoration:none}  html{scroll-behavior:smooth;font-size:16px;line-height:1.5;letter-spacing:.01rem}  body{color:#626262;background-color:#fff;font-family:lato,sans-serif;font-weight:400;max-width:100%}  header{display:block!important}  h2,h3,h4,h5,h6{font-weight:700;margin:0 0 20px!important;line-height:calc(1em + 8px)}  fieldset,form,h1,h2,h3,h4,h5,h6,input,p,ul{margin:0;padding:0;list-style:none}  a,a:focus,a:hover{text-decoration:none;transition:all .3s ease}  button:focus{outline:0!important}  img,svg{vertical-align:middle}  .logo-area{padding:.8em 1.25em;overflow:hidden}  header{width:100%;outline-style:none}  .site-title{font-family:"Proza Libre",sans-serif!important;font-weight:700;margin-left:.6em;color:var(--secondary-color);font-style:italic}  .main-menu{background:#fff;box-shadow:0 0 20px #ccc;padding:.312em 1.25em}  .main-menu ul{text-align:center}  .navbar-toggler{background:var(--secondary-color)}  .navbar-toggler .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");color:var(--secondary-color)}  .right-menu li a:hover{color:#fff;background:0 0}  .main-menu li a:hover{color:var(--secondary-color);box-shadow:0 4px 0 0 var(--secondary-color)}  .main-menu li a{color:#626262;text-transform:uppercase;margin-left:1em;padding:.3em 0;font-weight:700;display:inline-block}  .main-menu ul:last-child li:last-child a{border:1px solid var(--secondary-color);padding-left:1em;padding-right:1em}.active{color: var(--secondary-color) !important;box-shadow: 0 4px 0 0 var(--secondary-color)}  .main-menu ul:last-child li:last-child a:hover{background-color:var(--secondary-color);color:#fff;box-shadow:none}  .loading{overflow:hidden;height:100vh}  .spinner-wrapper{width:100%;height:100%;background-color:#fff;position:absolute;top:0;left:0;z-index:9999;display:flex;overflow:hidden;align-items:center;justify-content:center}  .spinner{position:relative;width:4rem;height:4rem;border-radius:50%}  .spinner::after,.spinner::before{content:"";position:absolute;border-radius:50%}  .spinner:before{width:100%;height:100%;background-image:linear-gradient(90deg,#10163a 0,#645bd3 100%);animation:spin .5s infinite linear}  .spinner:after{width:90%;height:90%;background-color:#fff;top:50%;left:50%;transform:translate(-50%,-50%)}  @keyframes spin{to{transform:rotate(360deg)}}@media only screen and (max-width:480px){.site-title{margin-left:0}}@media (min-width:1022px){.main-menu li a{margin-left:3em}}
</style>
</head>
<body class="loading">
<!-- Pre Loader -->
<div class="spinner-wrapper">
    <div class="spinner"></div>
</div>
<header>
    <nav class="navbar navbar-expand-md main-menu fixed-top">
        <a href="/index" class="navbar-brand">
            <h1 class="site-title">Amlaen</h1>
        </a>
        <button
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                class="navbar-toggler"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto ko">
                <li>
                    <a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="/services" class="{{ Request::path() === 'services' ? 'active' : '' }}">Services</a>
                </li>
                <li><a href="/about-us" class="{{ Request::path() === 'about-us' ? 'active' : '' }}">About Us </a></li>
                <li><a href="/contact-us" class="{{ Request::path() === 'contact-us' ? 'active' : '' }}">Contact US</a></li>
                <li><a href="/login">login</a></li>
                <li><a href="/register">Sign Up</a></li>
            </ul>
        </div>
    </nav>
</header>
@yield('content')
<footer class="footer footer-wrap">
    <div class="container">
        <div class="footer">
            <div class="container-fluid">
                <div class="row footer-content">
                    <div class="col-sm-12 text-center">
                        <div class="copy-right">
                            © Copyright 2019-2025. Amlaen.com. All right reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--<script type="text/javascript" src="{{ asset('assets/scripts/main.js') }}"></script>--}}

<script>
    $(window).on("load", function () {
        $(".spinner-wrapper").fadeOut(1200, function () {
            $('body').removeClass('loading');
        });
    });
</script>
@yield('script')
<script src="assets/js/bootstrap.min.js"></script>
@include('sweetalert::alert')
</body>
</html>
