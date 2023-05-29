@extends('Front.layouts.master')
@section('css')

    <style>
        .partners__logo {
            margin: 0 auto; }
        .partners__logo img {

            /* aya */
            height: 100px;
            width: 150px !important;

            vertical-align: middle;
            margin: 1rem 2.25rem;
            opacity: 0.5;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
            -o-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out; }
        .partners__logo img:hover {
            opacity: 1;

        }


        section {
            background-color: var(--global--color-white);
             padding: 0;
            overflow: hidden;
        }

        .one {

            padding: 20px;
            border: none;
            border-radius: 10px;
            color: white;
        }


        @media only screen and (max-width: 920px){

            .one {

                display: block;
                margin-bottom: 8px;
                text-align: center;

            }

            form{

                width: 100%;
            }
        }
    </style>

    @if(lang() =='ar')

        <style>
            .partners__logo{

                direction: ltr;
            }

        </style>
    @endif
@endsection
@section('content')
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>--}}


    {{--    <section class="page-title page-title-9" id="page-title">--}}
    {{--        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">--}}
    {{--            <div class="bg-section">--}}
    {{--                <img src="{{ asset($slider->image_product) }}" alt="Background" />--}}
    {{--            </div>--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-12 col-lg-6 offset-lg-3">--}}
    {{--                        <div class="title text-center">--}}
    {{--                            <h1 class="title-heading">@lang('site.stock')</h1>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="breadcrumb-wrap">--}}
    {{--            <div class="container">--}}
    {{--                <ol class="breadcrumb d-flex">--}}
    {{--                    <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('site.home')</a></li>--}}
    {{--                    <li class="breadcrumb-item active" aria-current="page">@lang('site.shop')</li>--}}
    {{--                </ol>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <section class="slider-stocks" style="padding: 0px">

        {{--       eng aya--}}

        <div class="carousel owl-carousel" data-slide="4" data-slide-rs="2" data-autoplay="true"
             data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="1000"
             data-autoplaySpeed="2000">
            @foreach ($products as $product)
                <div class="client">
                    <a href="javascript:void(0)"> </a><img style="height: 350px" src="{{ asset($product->images[0]) }}" alt="Product"/>
                </div>
            @endforeach
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
                         data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="1000">
                        @foreach ($brands as $brand)
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

    <section class="shop" id="shop">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-categories">
                            <div class="widget-title">
                                <h5>@lang('site.categories')</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a data-id="all" class="category-sort">
                                            @lang('site.All products')
                                        </a>
                                        <span>{{ $products->count() }}</span>
                                    </li>
                                </ul>
                            </div>
                            @foreach ($categories as $category)
                                <div class="widget-content">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a data-id="{{ $category->id }}" class="category-sort">
                                                {{ trans_model($category, 'title') }}
                                            </a>
                                            <span>{{ $category->product->count() }}</span>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>

                        <div class="widget widget-search">
                            <div class="widget-title">
                                <h5>@lang('site.search')</h5>
                            </div>
                            <div class="widget-content">
                                <form class="form-search">
                                    <div class="input-group">
                                        <input class="form-control search" type="text"
                                               placeholder="Search for products or SKU" name="search" id="search" /><span
                                                class="input-group-btn">
                                            <button class="btn" id="btn-search" type="button">
                                                <i class="energia-search-Icon"></i></button></span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="widget widget-recent-products">
                            <div class="widget-title">
                                <h5>@lang('site.recent products')</h5>
                                <?php $recents = \App\Models\Product::where('stock','1')->latest()
                                    ->take(3)
                                    ->get(); ?>
                            </div>
                            <div class="widget-content">
                                @foreach ($recents as $recent)
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{ asset($recent->images[0]) }}" alt="product" />
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title">
                                                <a
                                                        href="{{ route('getStock', $recent->id) }}">{{ trans_model($recent, 'title') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-options">
                                <div class="products-show">
                                    <p>@lang('site.showing') {{ $products->count() }} @lang('site.of') {{ \App\Models\Product::count() }}
                                        @lang('site.products')</p>
                                </div>
                                <div class="products-sort">
                                    <div class="select-holder">
                                        <select class="product-sort" id="product-sort">
                                            <option value="default" selected>@lang('site.default')</option>
                                            <option value="new">@lang('site.Newest Products')</option>
                                            <option value="old">@lang('site.oldest Products')</option>
                                        </select>
                                        <button style="width: 100px;height: 60px;" class="btn btn-sm btn--primary"
                                                type="button" id="sort-btn">@lang('site.filter')
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-search">

{{--                        @foreach ($products as $product)--}}
{{--                            <div class="col-12 col-md-6 col-lg-4">--}}
{{--                                <div class="product-item" data-hover="">--}}
{{--                                    <div class="product-img-wrap">--}}
{{--                                        <div class="product-img">--}}
{{--                                            <img src="{{ asset($product->images[0]) }}" alt="Product" />--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product-content">--}}
{{--                                        <div class="product-title">--}}
{{--                                            <a href="{{ route('getStock', $product->id) }}">{{ trans_model($product,'title') }}</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}



                        {{--start style of products----------------}}
                        <section class="products hide-inner-products">


                            @foreach ($products as $product)
                            <div style="padding: 30px" class="row justify-content-center element">

                                <div class="col-lg-3 col-12">
                                    <div class="products__imgs">
                                        <img src="{{ asset($product->images[0]) }}" alt="allen-bradly" height="200px" width="200px">
                                    </div>
                                </div>

                                <div class="col-lg-7 col-12">
                                    <div class="products__section">
                                        <h3 class="products__section--headline"><a href="{{ route('getStock', $product->id) }}">{{ trans_model($product,'title') }}</a></h3>

                                        <p style="padding: 15px" class="products__section--desc">
                                            Today, MCI controls engineering systems enable industrial and manufacturing companies to reach a higher level of automation, safety and efficiency.</p>

                                        <form style="display:inline-block;" action="{{ route('quoteIndex') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                        <button type="submit" class="one w-100" style="background-color: #253745;"><i class="fa-solid fa-file-lines me-3"></i> {{ lang() == 'ar' ? 'اطلب الان' : 'Order Now' }}</button>
                                        </form>
                                        <a  href="https://wa.me/+{{ $settings->whatsapp }}?text=اريد الاستفسار عن المنتج [{{ $product->title_ar }}]" class="one" style="background-color: #198754;"><i class="fa-brands fa-whatsapp me-3"></i>  {{ lang() == 'ar' ? 'اطلب الان واتساب' : 'Order by Whatsapp ' }}</a>
                                        <a href="mailto:{{ $settings->email }}?subject=استفسار عن منتج&body=اريد الاستفسار عن المنتج [{{ $product->title_ar }}]" class="one" style="background-color: #FFC107;"><i class="fa-solid fa-envelope me-3"></i> {{ lang() == 'ar' ? 'اطلب عن طريق الايميل' : 'Order by email' }}</a>
                                    </div>
                                </div>

                            </div>
                            @endforeach




                        </section>
                        {{--end style of products----------------}}



                    </div>


                </div>


            </div>
        </div>
    </section>




    <section class="partners mb-5">

        <div class="container">
            <h2 class="partners__heading text-center">Our Happy Partners</h2>

            <div class="partners__logo owl-carousel owl-theme">

                @foreach ($partners as $partner)

                    <img src="{{asset($partner->image)}}" alt="fmt-steel-logo" height="" width="">

                @endforeach
            </div>
        </div>

    </section>


    <script type="text/javascript">

        var loader = $('<div class="preloader"><div class="dual-ring"></div></div>');

        $('.search').on('keyup', function() {
            $value = $(this).val();

            $.ajax({
                type: 'get',
                url: '{{ route('stock-search') }}',
                data: {
                    'search': $value
                },
                beforeSend: function(data) {
                    $('.product-search').html(loader);
                },
                success: function(data) {
                    // alert(data)
                    $('.product-search').html(data);
                },
                error: function(data) {
                    $('.product-search').html('<h2 class="error">{{ lang() == 'ar' ? 'لا يوجد منتجات' : 'NO PROJECT FOUND' }}</h2>');
                }
            });
        });

        $('#sort-btn').on('click', function(e) {
            e.preventDefault();
            // alert($('#product-sort option:selected').val());
            var filter = $('#product-sort option:selected').val();
            $.ajax({
                type: 'get',
                url: '{{ route('stock-filter') }}',
                data: {
                    'filter': filter
                },
                beforeSend: function(data) {
                    $('.product-search').html(loader);
                },
                success: function(data) {
                    // alert(data)
                    $('.product-search').html(data);
                },
                error: function(data) {
                    $('.product-search').html('<h2 class="error">{{ lang() == 'ar' ? 'لا يوجد منتجات' : 'NO PROJECT FOUND' }}</h2>');
                }
            });
        });

        $('.category-sort').on('click', function(e) {
            e.preventDefault();


            var id = $(this).data('id');
            // alert(id);

            $.ajax({
                type: 'get',
                url: '{{ route('categorySortStock') }}',
                data: {
                    'id': id
                },
                beforeSend: function(data) {
                    $('.product-search').html(loader);
                },
                success: function(data) {
                    // alert(data)
                    $('.product-search').html(data);
                },
                error: function(data) {
                    $('.product-search').html('<h2 class="error">{{ lang() == 'ar' ? 'لا يوجد منتجات' : 'NO PROJECT FOUND' }}</h2>');
                }
            });
        });

        {{-- $.ajax({ --}}
        {{--    type: 'get', --}}
        {{--    url: '{{ route('product-search') }}', --}}
        {{--    data: {'search': $value}, --}}
        {{--    beforeSend: function (data) { --}}
        {{--        $('.product-search').html(loader); --}}
        {{--    }, --}}
        {{--    success: function (data) { --}}
        {{--        // alert(data) --}}
        {{--        $('.product-search').html(data); --}}
        {{--    }, --}}
        {{--    error: function (data) { --}}
        {{--        $('.product-search').html('<h2 class="error">{{ lang() == 'ar' ? 'لا يوجد منتجات' : 'NO PROJECT FOUND' }}</h2>'); --}}
        {{--    } --}}
        {{-- }); --}}
    </script>

@endsection

