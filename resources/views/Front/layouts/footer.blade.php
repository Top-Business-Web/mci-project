<footer class="footer footer-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>@lang('site.company')</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('about_us') }}">@lang('site.About Us')</a></li>
                                <li><a href="{{ route('product') }}">@lang('site.Our Product')</a></li>
                                <li><a href="{{ route('contact') }}">@lang('site.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>@lang('site.services')</h5>
                        </div>
                        <div class="widget-content">
                            <!-- Get 5 Latest for Model Services -->
                            @php
                                $services = App\Models\Service::latest()->take(5)->get();
                            @endphp
                            @foreach ($services as $service)

                                <ul>
                                    <li><a href="{{ route('service') }}">{{ trans_model($service,'title') }}</a></li>
                                </ul>

                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="footer-widget widget-links widget-icon">
                        <div class="footer-widget-title">
                            <h5>@lang('site.support')</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                @foreach($questions as $question)
                                    <li>
                                        <a href="{{ route('faqs') }}">{{ trans_model($question,'title') }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-content">
                            <ul>


                                <li class="email" style="color:white;">
                                    @lang('site.phone')
                                    <a href="#" style="color:white;">{{ $settings->phone }}</a>
                                </li>


                                <li class="email" style="color: white;">

                                    @lang('site.Email'):
                                    <a
                                        href="mailto:{{ $settings->email }}" style="color: white;"
                                    ><span
                                            class="__cf_email__"
                                            data-cfemail="e1888f878ea1848f8493868880cf828e8c"
                                        >{{ $settings->email }}</span
                                        ></a>
                                </li>


                                <li class="address">
                                    @lang('site.address')
                                    <p>{{ $settings->address_en }}</p>


                                </li>
                                <li class="directions">
                                    <a href="{{ route('contact') }}"
                                    ><i class="energia-location-Icon"></i>@lang('site.get directions')</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-copyright">
                        <div class="copyright">
                <span
                >
                  @lang('site.all rights reserved') @lang('site.by')
                  <a href="https://topbusiness.io/contact3.html"> Top Business</a>.
                    &copy; {{ date('Y') }}
                </span>
                            <ul class="list-unstyled social-icons">

                                <li>
                                    <a class="share-facebook" href="{{ $settings->facebook }}"
                                    ><i class="fa-brands fa-facebook m-2"></i> @lang('site.facebook')
                                    </a>
                                </li>
                                <li>
                                    <a class="share-linkedin" href="{{ $settings->linked_in }}"
                                    ><i class="fa-brands fa-linkedin m-2"></i> {{ lang() == 'ar' ? 'لينكدان' : 'linkedin' }}
                                    </a>
                                </li>
                                <li>
                                    <a class="share-linkedin" href="https://wa.me/+{{ $settings->whatsapp }}"
                                    ><i class="fa-brands fa-whatsapp m-2"></i> {{ lang() == 'ar' ? 'واتساب' : 'whatsapp' }}
                                    </a>
                                </li>
                                {{-- <li>
                                    <a class="share-twitter" href="{{ $settings->twitter }}"
                                    ><i class="energia-twitter"></i>twitter</a
                                    >
                                </li>
                                <li>
                                    <a class="share-youtube" href="{{ $settings->youtube }}"
                                    ><i class="energia-youtube"></i>youtube</a
                                    >
                                </li> --}}


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
