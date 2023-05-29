<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/admin/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset($settings->logo) }}">
    <title> MCI MISR - Dashboard </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/admin/assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/assets/css/nucleo-svg.css') }}" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/admin/assets/css/nucleo-svg.css') }}" rel="stylesheet"/>

    {{--  ckeditor  --}}
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

    {{--  ckeditor  --}}


    {{--   dropify  --}}
    <link href="{{ asset('assets/admin/dist/css/dropify.min.css')}}" rel="stylesheet">
    <script src="{{ asset('assets/admin/dist/js/dropify.min.js')}}" crossorigin="anonymous"></script>
    {{--   dropify  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{--    <link id="pagestyle" href="{{ asset('assets/admin/assets/css/soft-ui-dashboard.min.css') }}" rel="stylesheet" />--}}
    <link id="pagestyle" href="{{ asset('assets/admin/assets/css/soft-ui-dashboard.min.css?v=1.0.5') }}"
          rel="stylesheet"/>
    @toastr_css
    <style>
        .add-btn {
            position: absolute;
            top: 30px;
            right: 70px
        }

        #toast-container > .toast-success {
            background-color: white;
            color: black;
        }
    </style>
</head>
