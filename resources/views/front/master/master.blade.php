<!DOCTYPE HTML>
<html>
<head>
    <link rel="icon" href="{{asset('/front/icon/icon.png')}}" />
    <title>@yield('title')</title>
    @include('front.master.parts.head-section')
</head>
<body>
<!--header-->
@include('front.master.parts.header')
<!--header-->
<!--banner-->
@include('front.master.parts.banner')
<!--banner-->

<!--content-->
@yield('content')
<!--content-->

<!---footer--->
@include('front.master.parts.footer')
<!---footer--->

<!--copy-->
@include('front.master.parts.copy');
<!--copy-->


{{--Modals--}}
@include('front.master.parts.modals');
{{--End Modals--}}

</body>
</html>