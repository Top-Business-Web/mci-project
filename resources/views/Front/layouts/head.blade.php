<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Ayman Fikry"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="description" content="MCI Misr For Control and Instrumentation"/>
    <title>
        MCI
    </title>
    <link href="{{ asset($settings->logo) }}" rel="icon"/>

    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- slick plugin -->
    <link href="{{ asset('assets/front/') }}/assets/css/slick-theme.css" rel="stylesheet"/>
    <link href="{{ asset('assets/front/') }}/assets/css/slick.css" rel="stylesheet"/>
{{--    <link href="{{ asset('dist/css/select2.min.css') }}" rel="stylesheet"/>--}}
    <link href="{{ asset('assets/front/') }}/assets/css/vendor.min.css" rel="stylesheet"/>




@if(@lang() == 'en')
    {{--  en  --}}
    <link href="{{ asset('assets/front/assets/css/style.css') }}" rel="stylesheet"/>

    <link href="{{ asset('assets/front/assets/css/edit.css') }}" rel="stylesheet"/>

    {{--  en  --}}
    @else
    {{-- ar  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N"
          crossorigin="anonymous">
    <link href="{{ asset('assets/front/assets/css/rtl.css') }}" rel="stylesheet"/>
    {{-- ar  --}}
    @endif


    @toastr_css
    {{--    <link href="{{ asset('assets/front/') }}/assets/css/edit.css" rel="stylesheet" />--}}

    <style>
        .footer-1{
            background: #007893;
        }
        /* aya */

        .btn-order{
            width: 150px;
            height: 50px;
            border: none;
            border-radius: 10px;
            color: white;
        }
    </style>

    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({"gtm.start": new Date().getTime(), event: "gtm.js"});
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-MDF43VH");
    </script>



</head>


