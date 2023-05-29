<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <!-- Styles link -->
    <link rel="stylesheet" href="{{asset('new-assets/style.css')}}">
{{--    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/all.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">--}}


    <!-- Favicon links -->
    <link rel="shortcut icon" href="{{asset('new-assets/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('new-assets/favicon.ico')}}" type="image/x-icon">

    <!-- Icon font styles -->
    <link type="text/css" href="{{asset('new-assets/mci-icon-font/styles.css')}}" rel="stylesheet">

    <title>Misr for Control and Instrumentation - MCI</title>
    <style>
        .about__image {
            background: url({{asset('new-assets/about-image.jpg')}}) no-repeat;
        }

        {{--.slider-body .slide1, .slider .slide1, .slide-content .slide1 {--}}
        {{--    display: block;--}}
        {{--    background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(21, 23, 28, 0.4)), url({{asset('new-assets/banner-slide01.jpg')}});--}}
        {{--}--}}
        {{--.slider-body .slide2, .slider .slide2, .slide-content .slide2 {--}}
        {{--    background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(21, 23, 28, 0.4)), url({{asset('new-assets/banner-slide02.jpg')}});--}}
        {{--}--}}
        {{--.slider-body .slide3, .slider .slide3, .slide-content .slide3 {--}}
        {{--    background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(21, 23, 28, 0.4)), url({{asset('new-assets/banner-slide03.jpg')}});--}}
        {{--}--}}
        {{--.slider-body .slide4, .slider .slide4, .slide-content .slide4 {--}}
        {{--    background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(21, 23, 28, 0.4)), url({{asset('new-assets/banner-slide04.jpg')}});--}}
        {{--}--}}

          .menu1{
            box-shadow: 0px 0px 10px gainsboro;
            position: absolute;
            right: 0px;
            display: flex;
            flex-direction: column;
            background-color: white;
            width: 90px;
            min-height: 60px;
            padding: 5px 10px;
            border-radius: 5px;
            display: none;
        }
        .menu1.show{
            display: block;
        }
        .main-header__nav{
            display: flex;
        }

        @media only screen and (max-width: 920px){

            .menu1{
                right: 67px;
            }
        }




    </style>

    @if(lang() == 'ar')
        <style>
            .about{
                direction: rtl;
            }

            .footer{
                direction: rtl;
            }
        </style>
    @endif

</head>

<body>

<!-- The Page Starts Here -->

<section class="slider-body">

    <header class="main-header">

        <a href="/" class="main-header__logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="140" height="72" viewbox="0 0 140 72"><image id="_2000px-MCI_Logo-old.svg" data-name="2000px-MCI_Logo-old.svg" width="140" height="72" xlink:href="data:img/png;base64,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"/>
            </svg>
        </a>

        <nav class="main-header__nav">
            <a href="{{ route('home') }}" class="main-header__nav--item active">@lang('site.home')</a>
            <a href="{{ route('about_us') }}" class="main-header__nav--item">@lang('site.about us')</a>
            <a href="{{ route('service') }}" class="main-header__nav--item">@lang('site.services')</a>
            <a href="{{ route('product') }}" class="main-header__nav--item">@lang('site.products')</a>
            <a href="{{ route('joinUs') }}" class="main-header__nav--item">{{ lang() == 'ar' ? 'انضم الينا' : 'Join Us' }}</a>
            <a href="{{ route('contact') }}" class="main-header__nav--item">@lang('site.contact')</a>
            <a href="{{ route('stock') }}" class="main-header__nav--item">@lang('site.stock')</a>
            <a href="{{ route('clients') }}" class="main-header__nav--item">@lang('site.Our Clients')</a>
            <div class="main-header__nav--item dropdown" style="position: relative; cursor: pointer;">language
                <ul class="menu1">


                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
{{--            <a class="dropdown-toggle main-header__nav--item" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                languages--}}
{{--            </a>--}}
{{--            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">--}}

{{--                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                    <li>--}}
{{--                        <a class="dropdown-item"  rel="alternate" hreflang="{{ $localeCode }}"--}}
{{--                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                            {{ $properties['native'] }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--            <a class="dropdown-toggle main-header__nav--item" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                language--}}
{{--            </a>--}}
{{--            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                <li><a class="dropdown-item" href="#">arabic</a></li>--}}
{{--                <li><a class="dropdown-item" href="#">english</a></li>--}}
{{--            </ul>--}}


            <span class="icon-close"></span>
        </nav>

        <span class="icon-menu"></span>

    </header>
    <span class="icon-left"></span>

    <!-- Edit slider images here add "slide div and change css" -->

    <div class="slider">

        @foreach($settings->sliders as  $slider)
            <div style="background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(21, 23, 28, 0.4)), url({{asset($slider)}})" class="slide slide1">
                <div class="slide-content col-md-8">

                    <h1 class="slide-content__main-heading"><span class="slide-content__main-heading--greeting">Welcome to</span><br><span class="slide-content__main-heading--oletter">M</span>isr for <span class="slide-content__main-heading--oletter">C</span>ontrol and <span class="slide-content__main-heading--oletter">I</span>nstrumentation</h1>
                </div>
            </div>
        @endforeach


{{--        <div class="slide slide2">--}}
{{--            <div class="slide-content col-md-8">--}}

{{--                <h1 class="slide-content__main-heading"><span class="slide-content__main-heading--greeting">Welcome to</span><br><span class="slide-content__main-heading--oletter">M</span>isr for <span class="slide-content__main-heading--oletter">C</span>ontrol and <span class="slide-content__main-heading--oletter">I</span>nstrumentation</h1>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="slide slide3">--}}
{{--            <div class="slide-content col-md-8">--}}

{{--                <h1 class="slide-content__main-heading"><span class="slide-content__main-heading--greeting">Welcome to</span><br><span class="slide-content__main-heading--oletter">M</span>isr for <span class="slide-content__main-heading--oletter">C</span>ontrol and <span class="slide-content__main-heading--oletter">I</span>nstrumentation</h1>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="slide slide4">--}}
{{--            <div class="slide-content col-md-8">--}}

{{--                <h1 class="slide-content__main-heading"><span class="slide-content__main-heading--greeting">Welcome to</span><br><span class="slide-content__main-heading--oletter">M</span>isr for <span class="slide-content__main-heading--oletter">C</span>ontrol and <span class="slide-content__main-heading--oletter">I</span>nstrumentation</h1>--}}

{{--            </div>--}}
{{--        </div>--}}


    </div>

    <span class="icon-right"></span>
</section>

<section class="about">

    <h2 class="about__heading"> {{ trans_model($about,'title') }}</h2>

    <div class="row">
        <div class="col-sm-7">
            <p class="about__describtion">

                <!-- about discribtion -->

                {!!   Str::limit(trans_model($about,'desc'),200) !!}
            </p>

            <a class="about__btn" href="{{ route('about_us') }}">@lang('site.read_more')</a>
        </div>

        <div class="col-sm-5">
            <div class="about__image"></div>
        </div>
    </div>

</section>

<section class="services hide-services">

    <h2 class="services__heading">@lang('site.all_services')</h2>

    <div class="row">

        @foreach ($services as $service)
        <div class="col-md-4">

            <div class="services__box service-1">
                <a class="services__box--headline" href="{{ route('serviceProject',$service->id) }}">{{ trans_model($service,'title') }}</a>
                <p class="services__box--describtion">
                    {!!  trans_model($service,'desc') !!}
                </p>
            </div>
        </div>
        @endforeach


    </div>

    <a class="services__btn" href="{{ route('service') }}">@lang('site.more_services')</a>

</section>

<section class="products hide-products">

    <h2 class="products__heading">@lang('site.all_products')</h2>

    <span class="iconleft"></span>

    <div class="scroll">
        <div class="row">

            @foreach ($products as $product)
            <div class="products__box product-1">
                <a href="#">
                    <img class="products__box--img" src="{{ asset($product->images[0]) }}" alt="flowmeter" height="" width="">
                </a>
                <span class="products__box--name"><a style="color: white" href="{{ route('get.product', $product->id) }}">@lang('site.product_details')</a></span>
            </div>
            @endforeach

            <span class="icon-right"></span>

        </div>
    </div>

</section>





<section class="partners">

    <h2 class="partners__heading">@lang('site.partners')</h2>

    <div class="row">
        <div class="partners__logo">
            @foreach ($partners as  $partner)

                <img src="{{$partner->image}}" alt="fmt-steel-logo" height="100px" width="100px">
            @endforeach
        </div>


    </div>

</section>

<footer class="footer" id="contact-us">

    <div class="footer__to-top">
        <span class="icon-long-arrow"></span>
    </div>

    <div class="row">

        <div class="col-md-6 col-12">

            <h3 class="footer__heading">@lang('site.contact')</h3>

            <div class="footer__info">

                <div class="footer__info--phone">
                    <span class="icon-phone"></span> <div style="display: inline-block; width: 85%;">{{ $settings->phone }}</div>
                </div>

                <div class="footer__info--email">
                    <span class="icon-mail-solid"></span> <div style="display: inline-block; width: 85%;">{{ $settings->email }}</div>


                </div>

                <div class="footer__info--social">
                    <a href="{{ $settings->facebook }}" target="_blank"><span class="icon-social-facebook"></span></a>
                    <a href="{{ $settings->twitter }}" target="_blank"><span class="icon-social-twitter"></span></a>
                    <a href="{{ $settings->linked_in }}" target="_blank"><span class="icon-social-linkedin"></span></a>
                </div>

            </div>

        </div>

        <div class="col-md-6 col-12">

            <h3 class="footer__heading">@lang('site.visit')</h3>

            <iframe class="footer__map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3453.0072419135627!2d31.3330734!3d30.0653269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e69882f2061%3A0x8e42e23f28083710!2zTUNJLNmF2LXYsSDZhNin2KzZh9iy2Kkg2KfZhNmC2YrYp9izINmI2KfZhNiq2K3Zg9mF!5e0!3m2!1sen!2seg!4v1518871619887" width="100%" height="220" frameborder="0" style="border:0"></iframe>

        </div>


        <div class="footer__copyright">
            <p>Copyright © 2018 | <a href="/">Misr for Control and Instrumentation</a> | All rights reserved</p>
        </div>
    </div>

</footer>


<script src="{{asset('new-assets/main.js')}}"></script>
<noscript style="
    width: 100%;
    background: #007893;
    color: #fff;
    position: fixed;
    top: 0;
    text-align: center;
    padding: 10px 0;
    z-index: 9999;">
    <p><strong>This web page requires JavaScript to be enabled.</strong></p>
    <p>JavaScript is an object-oriented computer programming language
        commonly used to create interactive effects within web browsers.</p>
    <p><a href="https://goo.gl/koeeaJ">How to enable JavaScript?</a></p>
</noscript>

<script src="{{asset('new-assets/new-carousel/js/jquery-1.10.1.min.js')}}"></script>

<script>

    $(document).ready(function(){

        // jQuery methods go here...

        $('.dropdown').click(function(){
            $('.menu1').toggleClass('show');
        });
    });
</script>
{{--<script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}
</body>

</html>
