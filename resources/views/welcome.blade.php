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
    <link rel="shortcut icon" href="{{asset('img/logo.jpg')}}">

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"
            crossorigin="anonymous" async></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css"
          crossorigin="anonymous"/>
    <script charset="utf-8" src="https://cinetpay.com/cdn/seamless_sdk/latest/cinetpay.prod.min.js"
            type="text/javascript"></script>
    <script src="{{asset('payments.js')}}" type="text/javascript" defer></script>
</head>
<style>
    #top_bar_fixed {
        background-color: #f4feff;
    }

    #top_bar_fixed {
        background-color: #f4feff;
    }
</style>
<body onload="init()">

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('front/assets/img/logo/logo.jpg')}}" alt="" height="65px">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent ">
        <div id="top_bar_fixed" class="main-header header-sticky sticky-bar">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html">D2messe
                                <img src="{{asset('front/assets/img/logo/logo.jpg')}}" alt="" height="55px">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class="active">
                                        <a href="{{route('home')}}">{{__('Accueil')}}</a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#massRequestModal">
                                            {{__('Demande de messe')}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#mobile-app">{{__('S\'inscrire')}}</a>
                                    </li>
                                    <li>
                                        <a href="#contactSection">{{{__('Contact')}}}</a>
                                    </li>
                                    <li>
                                        <a class="donation" href="#donation">{{{__('Faire un don')}}}</a>
                                    </li>
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
                                <h1 data-animation="fadeInUp" data-delay=".6s">D2Messe</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">
                                    {{__('Avec D2Messe ne vous deplacer plus pour éffectuer vos demandes de messes')}}
                                </p>
                                <!-- Slider btn -->
                                <div class="slider-btns">
                                    <!-- Hero-btn -->
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="#mobile-app"
                                       class="btn radius-btn">{{__('Telecharger l\'application')}}</a>
                                    <!-- Video Btn -->
                                    <a data-animation="fadeInRight" data-delay="1.0s"
                                       class="popup-video video-btn ani-btn"
                                       href="#" data-toggle="modal" data-target="#massRequestModal"
                                       data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                        <i class="fa fa-paper-plane"></i></a>
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
    <!-- Services Area Start -->
    <section class="service-area sky-blue section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center">
                        <h2>{{__("Ce que D2messe vous apporte")}}</h2>
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
                            <h4><a href="#">{{__("Une application simple à utiliser")}}</a></h4>
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
                            <h4><a href="#">{{__("Un paiement simplifier via votre mobile money")}}</a></h4>
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
                            <h4><a href="#">{{__('Enovoyer vos demandes de messe Rapidement')}}</a></h4>
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
                            <h2>{{__("Application disponible gratuitement dans les stores")}}</h2>
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
    <!-- Say Something End -->
    <span id="contactSection"></span>
    <section id="" class="contact-section mt-5">
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
                                              placeholder=" {{__('Message...')}} Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                           placeholder="{{__('Entrer votre nom')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter email address'"
                                           placeholder="{{__('Entrer votre addresse email')}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                           placeholder="{{__('Objet')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 text-center">
                            <button type="submit"
                                    class="button button-contactForm boxed-btn rounded ">{{__('Envoyer')}}</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Abidjan, Côte d'Ivooire.</h3>
                            <p>Cocody, Angre</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+225 07 00 00 00</h3>
                            <p>{{__('Lundi - Vendredi, 8h - 20h')}}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@d2messe.com</h3>
                            <p>{{__('Envoyez-nous vos demandes à tout moment!')}}</p>
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
                                    <img src="{{asset('front/assets/img/logo/logo.jpg')}}" alt="" height="65px">
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
                    <div class="col-lg-2 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>{{__('Support')}}</h4>
                                <ul>
                                    <li><a href="#contactSection">{{__('Signaler un bug')}}</a></li>
                                    <li><a href="#">{{__('Politique de confidentialite')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>{{__('Newsletter')}}</h4>
                                <div class="footer-pera footer-pera2">
                                    <p>{{__('Inscrivez vous à notre newsletter pour ne rien manquer')}} </p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                              action=""
                                              method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email"
                                                   placeholder="{{__('Addresse Email')}}"
                                                   class="placeholder hide-on-focus"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = '{{__('Addresse Email')}}'">
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
                {{--<div class="row align-items-center d-none">
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
                </div>--}}
            </div>
        </div>
    </div>
    <!-- Footer End-->

</footer>


<!-- Modal -->
<div class="modal fade" id="massRequestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg mt-0" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('Faire une demande de messe')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="" class="contact-section">
                    <div class="container">
                        <form id="requestForm" action="{{ route('parishioners-request.store') }}" method="post"
                              data-masses-url="{{route('getMassesByParish', ["id"=> "#id"])}}"
                              data-templates-url="{{route('getTemplatesById', ["id"=> "#id"])}}">
                            @csrf
                            <div class="modal-body">
                                <fieldset class="form-group">
                                    <div>
                                        <label for="select2-2">{{__('Paroisse')}} <span style="color: red">*</span></label>
                                    </div>
                                    <select name="parish_id" id="select2-2" class="select2-single form-control">
                                        <option value="">---Choisir la Paroisse---</option>
                                        @foreach($parishes as $parish)
                                            <option value="{{ $parish->id }}">{{ $parish->name }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                                <div class="form-group">
                                    <label for="receiver">{{__('Demandeur')}}
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="receiver" class="form-control" id="receiver"
                                               placeholder="Nom et Prénoms">
                                        <input type="hidden" name="return_url" class="form-control" id="receiver"
                                               value="{{route('home')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="request_type_id">{{__('Type de demande')}}
                                    </label>
                                    <div class="input-group">
                                        <select name="request_type_id" id="request_type_id" class="form-control">
                                            <option value="">---{{ __('Type de demande') }}---</option>
                                            @foreach($requestTypes as $requestType)
                                                <option value="{{ $requestType->id }}">{{ $requestType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mass_id">{{__('Messe')}}
                                    </label>
                                    <div class="input-group">
                                        <select name="mass_id" id="mass_id" class="form-control" autocomplete="off">
                                            <option value="" selected>---Choisir la Messe---</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <label class="mr-2" for="use-template">{{__('Utiliser un Template?')}}</label>
                                        <input class="ml-2 mt-1" id="use-template" type="checkbox">
                                    </div>
                                </div>
                                <div id="template-select-div" class="form-group d-none">
                                    <label for="template-select-input">{{__('Template')}}
                                    </label>
                                    <div class="input-group">
                                        <select name="request_template_id" id="template-select-input"
                                                class="form-control">
                                            <option value="">---{{ __('Template de demande') }}---</option>
                                            @foreach($requestTemplates as $requestTemplate)
                                                <option
                                                    value="{{ $requestTemplate->id }}">{{ $requestTemplate->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message-textarea">{{__('Message')}}</label>
                                    <div class="input-group">
                                        <textarea name="message" id="message-textarea" cols="30" rows="5"
                                                  class="form-control"
                                                  placeholder="{{ __('Ecrire la demande (texte limité à 120 charactere)') }}"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right m-0 p-3">
                                    <button type="submit"
                                            class="payment btn btn-primary text-light font-weight-bold rounded">{{__('Enregistrer')}}
                                    </button>
                                    <button type="reset" data-dismiss="modal" aria-label="Close"
                                            class="btn btn-danger font-weight-bold text-light rounded">{{__('Annuler')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src="{{asset('front/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('front/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('front/assets/js/popper.min.js')}}"></script>
<script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('front/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/assets/js/slick.min.js')}}"></script>
<!-- Date Picker -->
<script src="{{asset('front/assets/js/gijgo.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('front/assets/js/wow.min.js')}}"></script>
<script src="{{asset('front/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{asset('front/assets/js/jquery.scrollUp.min.js')}}"></script>
{{--<script src="{{asset('front/assets/js/jquery.nice-select.min.js')}}"></script>--}}
<script src="{{asset('front/assets/js/jquery.sticky.js')}}"></script>

<!-- contact js -->
<script src="{{asset('front/assets/js/contact.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('front/assets/js/mail-script.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('front/assets/js/plugins.js')}}"></script>
<script src="{{asset('front/assets/js/main.js')}}"></script>
<script src="{{ asset('js/customVue.js') }}"></script>
<script>

</script>
</body>
</html>
