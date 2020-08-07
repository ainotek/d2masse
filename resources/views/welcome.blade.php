<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <base href="/">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>D2messe</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    {{--<link rel="shortcut icon" type="image/x-icon" href="{{asset('front/assets/img/favicon.ico')}}">--}}
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
</head>

<body>

<!-- Preloader Start -->
{{--
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('front/assets/img/logo/logo.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
--}}
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent ">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html">D2messe
                                <img src="{{asset('front/assets/img/logo/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class="active"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
                                    <li><a href="#">{{__('Demande de messe')}}</a></li>
                                    <li><a href="#mobile-app">{{__('S\'inscrire')}}</a></li>
                                    <li><a href="#">{{{__('Contact')}}}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>

<main>

    <!-- Slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">App Landing Page</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Get things done<br>with Appco</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">Dorem ipsum dolor sitamet, consectetur
                                    adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.</p>
                                <!-- Slider btn -->
                                <div class="slider-btns">
                                    <!-- Hero-btn -->
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="#mobile-app"
                                       class="btn radius-btn">{{__('Telecharger l\'application')}}</a>
                                    <!-- Video Btn -->
                                    <a data-animation="fadeInRight" data-delay="1.0s"
                                       class="popup-video video-btn ani-btn"
                                       href="https://www.youtube.com/watch?v=1aP-TXUpNoU"
                                       data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                        <i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight"
                                 data-delay="1s">
                                <img src="{{asset('front/assets/img/hero/hero_right.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">App Landing Page</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Get things done<br>with Appco</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">Dorem ipsum dolor sitamet, consectetur
                                    adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.</p>
                                <!-- Slider btn -->
                                <div class="slider-btns">
                                    <!-- Hero-btn -->
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html"
                                       class="btn radius-btn">Download</a>
                                    <!-- Video Btn -->
                                    <a data-animation="fadeInRight" data-delay="1.0s"
                                       class="popup-video video-btn ani-btn"
                                       href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight"
                                 data-delay="1s">
                                <img src="{{asset('front/assets/img/hero/hero_right.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->
    <!-- Best Features Start -->
    <section class="best-features-area section-padd4">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 col-lg-10">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <div class="section-tittle">
                                <h2>Some of the best features Of Our App!</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Section caption -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Easy to Costomize</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Extreme Security</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Customer Support</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Creative Design</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shpe -->
        <div class="features-shpae d-none d-lg-block">
            <img src="{{asset('front/assets/img/shape/best-features.png')}}" alt="">
        </div>
    </section>
    <!-- Best Features End -->
    <!-- Services Area Start -->
    <section class="service-area sky-blue section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center">
                        <h2>How Can We HelpYour<br>with Appco!</h2>
                    </div>
                </div>
            </div>
            <!-- Section caption -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-businessman"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Easily Manage</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption active text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Get Payments Easily</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-plane"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Quick Messaging</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->
    <!-- Available App  Start-->
    <div id="mobile-app" class="available-app-area">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="app-caption">
                        <div class="section-tittle section-tittle3">
                            <h2>Our App Available For Any Device Download now</h2>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fug.</p>
                            <div class="app-btn">
                                <a href="#" class="app-btn1"><img src="{{asset('front/assets/img/shape/app_btn1.png')}}"
                                                                  alt=""></a>
                                <a href="#" class="app-btn2"><img src="{{asset('front/assets/img/shape/app_btn2.png')}}"
                                                                  alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="app-img">
                        <img src="{{asset('front/assets/img/shape/available-app.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="app-shape">
            <img src="{{asset('front/assets/img/shape/app-shape-top.png')}}" alt=""
                 class="app-shape-top heartbeat d-none d-lg-block">
            <img src="{{asset('front/assets/img/shape/app-shape-left.png')}}" alt=""
                 class="app-shape-left d-none d-xl-block">
        <!-- <img src="{{asset('front/assets/img/shape/app-shape-right.png')}}" alt="" class="app-shape-right bounce-animate "> -->
        </div>
    </div>
    <!-- Available App End-->
    <!-- Say Something Start -->
    <div class="say-something-aera pt-90 pb-90 fix">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                    <div class="say-something-cap">
                        <h2>Say Hello To The Collaboration Hub.</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="say-btn">
                        <a href="#" class="btn radius-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- shape -->
        <div class="say-shape">
            <img src="{{asset('front/assets/img/shape/say-shape-left.png')}}" alt=""
                 class="say-shape1 rotateme d-none d-xl-block">
            <img src="{{asset('front/assets/img/shape/say-shape-right.png')}}" alt=""
                 class="say-shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Say Something End -->
    <section class="contact-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 say-something-cap text-center">
                    <h1 class="contact-title">{{__('Nous contacter')}}</h1>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                          novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                              onfocus="this.placeholder = ''"
                                              onblur="this.placeholder = 'Enter Message'"
                                              placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                           placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                           placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 text-center">
                            <button type="submit" class="button button-contactForm boxed-btn rounded">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 253 565 2365</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<footer>

    <!-- Footer Start-->
    <div class="footer-main">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row  justify-content-between">
                    <div class="col-lg-3 col-md-4 col-sm-8">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="{{asset('front/assets/img/logo/logo2_footer.png')}}" alt="">
                                </a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                                        eiusmod tempor incididunt ut labore.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Download</a></li>
                                    <li><a href="#">Reviews</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Report a bug</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                    <p>Heaven fruitful doesn't over lesser in days. Appear </p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                              method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email"
                                                   placeholder=" Email Address " class="placeholder hide-on-focus"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                        class="email_icon newsletter-submit button-contactForm bg-purple">
                                                    <img
                                                        src="{{asset('front/assets/img/shape/form_icon.png')}}" alt="">
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copy-Right -->
                <div class="row align-items-center d-none">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | This template is made with
                                <i class="ti-heart" aria-hidden="true"></i> by
                                <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->

</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{asset('front/./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('front/./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('front/./assets/js/popper.min.js')}}"></script>
<script src="{{asset('front/./assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('front/./assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('front/./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/./assets/js/slick.min.js')}}"></script>
<!-- Date Picker -->
<script src="{{asset('front/./assets/js/gijgo.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('front/./assets/js/wow.min.js')}}"></script>
<script src="{{asset('front/./assets/js/animated.headline.js')}}"></script>
<script src="{{asset('front/./assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{asset('front/./assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('front/./assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('front/./assets/js/jquery.sticky.js')}}"></script>

<!-- contact js -->
<script src="{{asset('front/./assets/js/contact.js')}}"></script>
<script src="{{asset('front/./assets/js/jquery.form.js')}}"></script>
<script src="{{asset('front/./assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('front/./assets/js/mail-script.js')}}"></script>
<script src="{{asset('front/./assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('front/./assets/js/plugins.js')}}"></script>
<script src="{{asset('front/./assets/js/main.js')}}"></script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
