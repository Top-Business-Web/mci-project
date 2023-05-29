@extends('Front.layouts.master')

@section('content')
    <style>
        div.heading-desc p {
            color: white;
        }
    </style>
    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input class="form-control" type="text" placeholder="type words then enter"/>
                            <button></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
    </div>

    <section class="slider slider-2" id="slider-2">
        <div class="container-fluid pe-0 ps-0">
            <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1"
                 data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                @foreach ($settings->sliders as $slider)
                    <div class="slide bg-overlay bg-overlay-dark-slider-2">
                        <div class="bg-section">
                            <img src="{{ asset($slider) }}" alt="Background"/>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="slide-content">
                                        <h1 class="slide-headline">
                                            {{ trans_model($settings, 'title') }}
                                        </h1>
                                        <p class="slide-desc">
                                            {{ trans_model($settings, 'desc') }}
                                        </p>
                                        <div class="slide-action">
                                            <a class="btn btn--primary" href="{{ route('service') }}">
                                                <span>@lang('site.our services')</span><i
                                                        class="energia-arrow-right"></i></a><a
                                                    class="btn btn--white justify-content-center"
                                                    href="{{ route('about_us') }}">@lang('site.more_about_us')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="features-bar bg-overlay bg-overlay-theme3" id="featuresBar-1">
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/3.jpg" alt="background"/>
        </div>

    </section>

    <div class="container mb-5">
        <div class="mt-5">
            <h2 class="heading-title text-center">
                @lang('site.brands')
            </h2>
        </div>
        <div class="row g-0 features-holder mb-4">

            <div class="carousel owl-carousel" data-slide="5" data-slide-rs="2" data-autoplay="1000"
                 data-nav="false" data-dots="false" data-space="15" data-loop="true" data-speed="1000">
                @foreach (DB::table('brands')->get() as $brand)
                    <div class="client">
                        <a href="javascript:void(0)"> </a><img src="{{ asset($brand->image) }}"
                                                               alt="{{ $brand->name }}" style="height:100px;"/>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

    <section class="services services-2 bg-grey" id="services-2">
        <div class="container">
            <div class="heading heading-2">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="heading-title">
                            {{ lang() == 'ar' ? 'MCI
جزء من عملك' : 'MCI
A Part of your business' }}
                        </h2>
                    </div>
                    <div class="col-12">

                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center">
                                <div class="card-services">
                                    <img src="{{ asset('assets/front/assets/images/vision.png') }}" height="80" loading="lazy">
                                    <div class="mt-3">
                                        <h5 class="text-center">{{ lang() == 'ar' ? 'رؤيتنا' : 'Vision' }}</h5>
                                        <ul class="ps-3 pe-3 lh-lg">{!! trans_model($about_us,'vision') !!}</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center">
                                <div class="card-services">
                                    <img src="{{ asset('assets/front/assets/images/missions.png') }}" height="80" loading="lazy">
                                    <div class="mt-3">
                                        <h5 class="text-center">{!! lang() == 'ar' ? 'مهمتنا' : 'Mission' !!}</h5>
                                        <ul class="ps-3 pe-3 lh-lg">{!! trans_model($about_us,'mission') !!}</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center">
                                <div class="card-services">
                                    <img src="{{ asset('assets/front/assets/images/goals.png') }}" height="80" loading="lazy">
                                    <div class="mt-3">
                                        <h5 class="text-center">{{ lang() == 'ar' ? 'أهدافنا' : 'Our Goals' }}</h5>
                                        <ul class="ps-3 pe-3 lh-lg">
                                            {!! trans_model($about_us,'goals') !!}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--                        eng aya--}}
                        <div class="actions-holder">
                            <a class="btn btn--primary" href="{{ route('about_us') }}">
                                @lang('site.read_more')<i class="energia-arrow-right"></i></a><a
                                    class="btn btn--bordered btn--white"
                                    href="{{ route('service') }}">@lang('site.our services')</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="row">--}}
            {{--                <div class="col-12 col-lg-5 offset-lg-7">--}}
            {{--                    <div class="more-services more-services-2">--}}
            {{--                        <div class="rating" style="margin-left:30px">--}}
            {{--                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i--}}
            {{--                                    class="fas fa-star"></i><i class="fas fa-star"></i>--}}
            {{--                        </div>--}}
            {{--                        <p>--}}
            {{--                            <a href="javascript:void(0)"></a>--}}
            {{--                            @lang('site.based_on') {{ \App\Models\Project::count() }} @lang('site.completed_projects')--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </section>


    <div class="about about-2" id="about-2" style="background-color: #F6F7F8;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading heading-light heading-light2" style="max-width: 700px;">
                        <p class="heading-subtitle">@lang('site.how it works!')</p>
                        <h2 class="heading-title" style="color: black;">
                            @lang('site.Our company has years of experience in industrial fluid control and metering facilities')
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-wrapper">
                        {{--                    <div class="video-wrapper">--}}
                        {{--                        <div class="video video-2" id="video-2">--}}
                        <div class="">
                            <img style="height: 650px;" src="{{ asset($about->image) }}" alt="background"/>
                        </div>
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div>
                        <img style="height: 650px;" src="{{ asset('assets/front') }}/assets/images/services/c.jpg"
                             alt="process"/>
                    </div>
                </div>
            </div>
        </div>
        {{--            <div class="video-wrapper">--}}
        {{--                <div class="video video-2" id="video-2">--}}
        {{--                    <div class="bg-section">--}}
        {{--                        <img src="{{ asset($about->image) }}" alt="background"/>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            aya--}}


        {{--            <div class="about-block-wrapper">--}}
        {{--                <div class="about-block">--}}
        {{--                    <div class="heading heading-1">--}}

        {{--                        <h2 class="heading-title">--}}
        {{--                            @lang('site.The Pioneers Industrial In Facilities Fluid Control, And Measurement')--}}
        {{--                        </h2>--}}
        {{--                        <p class="heading-desc">--}}
        {{--                            {!! trans_model($about,'desc') !!}--}}
        {{--                        </p>--}}
        {{--                        <div class="signature-block">--}}
        {{--                            <a class="btn btn--secondary" href="{{ route('about_us') }}">--}}
        {{--                                @lang('site.read_more')<i--}}
        {{--                                        class="energia-arrow-right"></i></a>--}}
        {{--                        </div>--}}
        {{--                        <div class="advantages-list-holder">--}}
        {{--                            <div class="row">--}}
        {{--                                <div class="col-12 col-md-6">--}}
        {{--                                    <p>--}}
        {{--                                        {{ lang() == 'ar' ? 'كيف يمكننا تلبية الطلب المتزايد ؟' : 'How can we meet the growing demand ?' }}--}}
        {{--                                    </p>--}}
        {{--                                </div>--}}
        {{--                                <div class="col-12 col-md-6">--}}
        {{--                                    <ul class="list-unstyled advantages-list">--}}
        {{--                                        <li>{{ lang() == 'ar' ? 'موثوقة والأداء' : 'Reliabe and performance' }}</li>--}}
        {{--                                        <li>{{ lang() == 'ar' ? 'التصنيع في الوقت المناسب' : 'In-time manufacturing' }}</li>--}}
        {{--                                        --}}{{----}}{{--                                        <li>{{ lang() == 'ar' ? 'تمويل مواد الطاقة الشمسية' : 'Solar material financing' }}</li>--}}
        {{--                                    </ul>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        </section>


        <section class="processes processes-1 bg-overlay bg-overlay-theme4" id="processes-1">
            <div class="bg-section">
                <img src="{{ asset('assets/front') }}/assets/images/background/wavy-pattern.png" alt="Background"/>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="block-right-holder">
                        <div class="heading heading-light heading-light2">
                            {{--   <p class="heading-subtitle">@lang('site.how it works!')</p> --}}
                            <h2 class="heading-title">
                                @lang('site.contact title 1')
                                {{--     @lang('site.Our company has years of experience in industrial fluid control and metering facilities') --}}
                            </h2>
                        </div>

                        {{--                    aya--}}
                        {{--                    <div class="counters-holder">--}}
                        {{--                        <div class="counter counter-3">--}}
                        {{--                            <div class="counter-holder">--}}
                        {{--                                <div class="counter-num">--}}
                        {{--                                    <!-- Loop to get Years of  Experience-->--}}


                        {{--                                    <span class="counting" data-counterup-nums="25"--}}
                        {{--                                          data-counterup-beginat="12">{{ $settings->year_of_experince }}</span>--}}


                        {{--                                </div>--}}
                        {{--                                <div class="counter-img">--}}
                        {{--                                    <div class="bg-section">--}}
                        {{--                                        <img src="{{ asset('assets/front') }}/assets/images/services/b.jpg"--}}
                        {{--                                             alt="image"/>--}}
                        {{--                                    </div>--}}
                        {{--                                    <i class="flaticon-020-factory"></i>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="counter-desc">--}}
                        {{--                                <p>@lang('site.years_of_experience')</p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
                <div class="col-12 col-lg-6" style="display: flex;
    align-items: center;">
                    <div class="counters-holder">
                        <div class="counter counter-3">
                            <div class="counter-holder">
                                <div class="counter-num">
                                    <!-- Loop to get Years of  Experience-->


                                    <span class="counting" data-counterup-nums="25"
                                          data-counterup-beginat="12">{{ $settings->year_of_experince }}</span>


                                </div>
                                <div class="counter-img">
                                    <div class="bg-section">
                                        <img src="{{ asset('assets/front') }}/assets/images/services/b.jpg"
                                             alt="image"/>
                                    </div>
                                    <i class="flaticon-020-factory"></i>
                                </div>
                            </div>
                            <div class="counter-desc">
                                <p>@lang('site.years_of_experience')</p>
                            </div>
                        </div>
                    </div>
                    {{--                <div class="processes-holder">--}}
                    {{--                    <div class="carousel owl-carousel carousel-dots process-content-carousel" data-slide="1"--}}
                    {{--                         data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0"--}}
                    {{--                         data-loop="turw" data-speed="800">--}}
                    {{--                        @foreach($questions as $question)--}}
                    {{--                            <div>--}}
                    {{--                                <div class="process-panel">--}}
                    {{--                                    <p class="process-number">{{ $loop->iteration }}.</p>--}}
                    {{--                                    <div class="process-body">--}}
                    {{--                                        <div class="process-content">--}}
                    {{--                                            <h5>--}}
                    {{--                                                {{ trans_model($question,'title') }}--}}
                    {{--                                            </h5>--}}
                    {{--                                            <p>--}}
                    {{--                                                {!!  trans_model($question,'desc')  !!}--}}
                    {{--                                            </p>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        @endforeach--}}
                    {{--                    </div>--}}
                    {{--    <div class="images-holder">--}}
                    {{--   <div class="carousel owl-carousel process-image-carousel" data-slide="1" data-slide-rs="1"
                            data-autoplay="true" data-drag="false" data-nav="false" data-dots="false" data-space="0"
                            data-loop="false" data-speed="800">
                           <img src="{{ asset('assets/front') }}/assets/images/services/c.jpg" alt="process"/>
                       </div>--}}
                    {{--       <div class="processes-panel">--}}
                    {{--           <h3 class="panel-title">--}}
                    {{--               @lang('site.contact title 1')--}}
                    {{--           </h3>--}}
                    {{--           <p class="panel-desc">--}}
                    {{--               @lang('site.contact title 2')--}}
                    {{--           </p>--}}
                    {{--           <a href="{{ route('contact') }}">@lang('site.schedule A Visit') <i--}}
                    {{--                       class="energia-arrow-right"></i></a>--}}
                    {{--       </div>--}}
                    {{--  </div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </section>

        <section class="contact contact-2" style="margin-top: 100px" id="contact-2">
            <div class="contact-overlay bg-overlay bg-overlay-theme5" style="top: 25%;">
                <div class="bg-section">
                    <img src="{{ asset('assets/front') }}/assets/images/background/4.jpg" alt="background"/>
                </div>
            </div>


            <div class="container">
                <div class="contact-panel contact-panel-3">
                    <div class="heading heading-light heading-10">
                        <h2 class="heading-title">
                            {{ trans_model($about,'title') }}
                        </h2>
                        <div class="heading-desc">
                            {!!   Str::limit(trans_model($about,'desc'),200) !!}
                        </div>
                        <div class="contact-action contact-action-2">
                            <a class="btn btn--white" href="{{ route('about_us') }}">@lang('site.read_more')<i
                                        class="energia-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="contact-card">
                        <div class="contact-body">
                            <h5 class="card-heading">@lang('site.Contact Us')</h5>
                            <p class="card-desc">
                                @lang('site.quote_desc')
                            </p>
                            <div class="col-12">
                                <a href="{{ route('contact') }}">
                                    <button class="btn btn--secondary w-100" type="submit">@lang('site.contact')<i
                                                class="energia-arrow-right"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="contact-result"></div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>

@endsection

