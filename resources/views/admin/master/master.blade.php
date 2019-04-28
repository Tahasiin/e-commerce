<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.master.parts.links')

    <title>
       @yield('title')
    </title>

</head>

<body class="">

<div class="wrapper ">

    <!--Top Nav -->
    @include('admin.master.parts.side-nav')
    <!-- End Top Nav -->

    <div class="main-panel">

        <!-- Navbar -->
         @include('admin.master.parts.top-nav')
        <!-- End Navbar -->

        @yield('content')

        <!--- Footer --->
        @include('admin.master.parts.footer')
        <!---End Footer --->

    </div>
</div>
<!-- Plugins -->
@include('admin.master.parts.plugins')
<!--End Plugins -->

<!--   Core JS Files   -->
@include('admin.master.parts.scripts')
</body>


<!-- Mirrored from demos.creative-tim.com/material-dashboard/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Apr 2019 15:49:51 GMT -->
</html>
