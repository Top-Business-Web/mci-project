<!DOCTYPE html>
<html>

<!--  head   -->
@include('Admin.layouts.head')
<!--  head   -->

<body class="g-sidenav-show  bg-gray-100">

<!--  aside   -->
@include('Admin.layouts.aside')
<!--  aside   -->

<!--  main   -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!--  main   -->
    <!-- Navbar -->
    @include('Admin.layouts.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <!--  content   -->
        @yield('content')
        <!--  content   -->
    </div>

</main>

@toastr_js
@toastr_render
@if((Route::currentRouteName() == 'adminHome'))
<div class="row">
    <div class="col-12">
        <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
            <canvas width="700" height="600" class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
        </div>
    </div>
</div>
@endif

<!--  script   -->
@include('Admin.layouts.script')
<!--  script   -->

@yield('js')

</body>


</html>
