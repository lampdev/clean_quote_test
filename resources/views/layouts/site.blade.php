<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>

    <script src="https://js.stripe.com/v3/"></script>

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <!-- Google web fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet'/>
    {{-- CDN Fontawesome Needed for icons --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'/>
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/business-casual.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    @yield('style')

</head>

<body>
<!-- Navigation -->

@yield('header')


@yield('content')


<!-- Bootstrap core JavaScript -->
{{--<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>--}}
<script src="{{asset('assets/vendor/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- main JS file -->
<script src="{{asset('assets/vendor/jquery/my-jquery.js')}}"></script>
<!-- Include Payment Method  Stripe -->
<script src="{{asset('assets/vendor/jquery/payment-method-stripe.js')}}"></script>
</body>
</html>