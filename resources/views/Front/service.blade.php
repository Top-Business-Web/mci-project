@extends('Front.layouts.master')

@section('content')
    <section class="page-title page-title-10" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section">
                <img src="{{ asset($slider->image_services) }}" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <div class="title-list">
                                <div class="icon">
                                    <i class="flaticon-040-green-energy"></i>
                                </div>
                                <div class="icon"><i class="flaticon-020-factory"></i></div>
                                <div class="icon">
                                    <i class="flaticon-031-nuclear-plant"></i>
                                </div>
                            </div>
                            <h1 class="title-heading">@lang('site.our services')</h1>
                            <p class="title-desc">
                                {{ lang() == 'ar' ? 'تقدم MCI الخدمات الفنية لمشاريع الصناعة بما في ذلك النفط والغاز والبتروكيماويات والتصنيع والمرافق في مصر وجميع أنحاء العالم. تشمل خدمة الدعم تصميم حلولنا وهندستها وتنفيذها.' : 'MCI provides Technical Services to the industry projects including Oil & Gas, Petrochemical, Manufacturing and Utilities in Egypt and worldwide. Support service includes design, engineering and implementation of our solutions.' }}
                            </p>
                            <div class="title-action">
                                <a class="btn btn--primary btn--inversed" href="{{ route('contact') }}">
                                    @lang('site.get started')<i class="energia-arrow-right"></i></a><a
                                    class="btn btn--bordered btn--white" href="{{ route('about_us') }}">@lang('site.explore_our_plans')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <ol class="breadcrumb breadcrumb-light d-flex">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">@lang('site.home')</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    @lang('site.services')
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services services-4 bg-grey" id="services-4">
        <div class="container">
            <div class="heading heading-3 text-center">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <p class="heading-subtitle">
                            {{ lang() == 'ar' ? 'تشمل خدمة الدعم تصميم حلولنا وهندستها وتنفيذها.' : 'Support service includes design and engineering . ' }}
                        </p>
                        <h2 class="heading-title">
                            {{ lang() == 'ar' ? 'لدينا الكفاءة والموارد لدعم الخدمات التالية:' : 'We have the proficiency and resources to support the following services:' }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $classServices = ['flaticon-024-energy', 'flaticon-028-greenhouse', 'flaticon-026-world', 'flaticon-008-plant', 'flaticon-024-energy', 'flaticon-004-solar-panel'];
                ?>
                @foreach ($services as $service)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="service-panel">
                            <div class="service-icon">
                                <i class="{{ $classServices[rand(0, 5)] }}"></i>
                            </div>
                            <div class="service-content">
                                <h4>
                                    <a href="{{ route('serviceProject',$service->id) }}">{{ trans_model($service,'title') }}</a>
                                </h4>
                                <h6>
                                    {!!  trans_model($service,'desc') !!}
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="features features-2 bg-overlay bg-overlay-theme2" id="features-2">
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/2.jpg" alt="Background" />
        </div>

        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">
                    <div class="col-12 col-lg-5 img-card-holder">
                        <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                            <div class="bg-section">
                                <img src="{{ asset('assets/front') }}/assets/images/contact/2.jpg" alt="image" />
                            </div>
                            <div class="card-content">
                                <div class="content-top">
                                    <p>
                                        @lang('site.As a world wide distributor of solar supplies we endeavor provide fast and knowledgeable service, we can get all the materials you need by sea or air.')
                                    </p>
                                    <a href="{{ route('contact') }}"><i class="energia-arrow-right"></i>@lang('site.global offic map')</a>
                                </div>
                                <div class="content-bottom">
                                    <ul class="list-unstyled contact-infos">
                                        <li class="contact-info">
                                            <i class="energia-phone-Icon"></i>
                                            <p>
                                                @lang('site.Emergency Line'):
                                                <a href="tel:123-456-7890">(002) 01061245741</a>
                                            </p>
                                        </li>
                                        <li class="contact-info">
                                            <i class="energia-location-Icon"></i>
                                            <p>
                                                @lang('site.Location')
                                                <a
                                                    href="../cdn-cgi/l/email-protection.html#c5acaba3aa85a0aba0b7a2aca4eba6aaa8">Brooklyn,
                                                    New York, USA
                                                </a>
                                            </p>
                                        </li>
                                        <li class="contact-info">
                                            <i class="energia-clock-Icon"></i>
                                            <p>Mon - Fri: 8:00 am - 7:00 pm</p>
                                        </li>
                                    </ul>
                                    <a class="btn btn--white" href="{{ route('contact') }}">@lang('site.Contact Us') <i
                                            class="energia-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="contact-card">
                            <div class="contact-body">
                                <h5 class="card-heading">@lang('site.request a quote')</h5>
                                <p class="card-desc">
                                    @lang('site.quote_desc')
                                </p>
                                <div class="col-12">
                                    <a href="{{ route('quoteIndex') }}">
                                        <button class="btn btn--secondary w-100" type="submit">
                                            @lang('site.send request') <i class="energia-arrow-right"></i>
                                        </button></a>
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
        </div>
    </section>

    <section class="testimonial testimonial-3 bg-overlay bg-overlay-white2">
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/wavy-pattern.png" alt="background" />
        </div>
    </section>
@endsection
