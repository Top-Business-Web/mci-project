@extends('Front.layouts.master')

@section('content')

    <section class="page-title page-title-9" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section">
                <img src="{{ asset($slider->image_product) }}" alt="Background"/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="title text-center">
                            <h1 class="title-heading">@lang('site.products')</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="index.html">@lang('site.home')</a></li>
                    <li class="breadcrumb-item"><a href="">@lang('site.company')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('site.shop')</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="">
        <div class="mt-5">
            <h2 class="heading-title text-center">
                {{ lang() == 'ar' ? 'انضم إلى فريقنا' : 'Join Our Team' }}
            </h2>
            <div class="d-flex justify-content-center">
                <p class="text-center" style="max-width: 500px;">
                    {{ lang() == 'ar' ? 'إذا كنت مستعدًا للانضمام إلى فريقنا ، فيرجى إرسال سيرتك الذاتية على البريد الإلكتروني التالي' : 'If you are ready to join our team kindly send us your C.V to the following e-mail' }}
                    <a href="mailto:{{ $settings->email }}" class="text-decoration-none fw-bold" style="color: #EF4423;">{{ $settings->email }}</a>
                    {{ lang() == 'ar' ? 'وسوف نتصل بك في حالة توفر وظائف شاغرة.' : 'and we will call you if there is available vacancies.' }}
                </p>
            </div>
        </div>
    </section>

    <section class="clients clients-carousel clients-1" id="clients-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    {{--                    <h3 class="text-center mt-5">@lang('site.brands')</h3>--}}
                </div>
                <div class="col-12">
                    <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="true"
                         data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="1000">
                        @foreach (DB::table('partners')->get() as $brand)
                            <div class="client">
                                <a href="javascript:void(0)"> </a><img src="{{ asset($brand->image) }}"
                                                                       alt="{{ $brand->name }}"/>
                            </div>
                        @endforeach
                    </div>
                </div>
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
                       {{ trans_model($about_us,'title') }}
                    </h2>
                    <div class="heading-desc">
                        {!!   Str::limit(trans_model($about_us,'desc'),200) !!}
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
