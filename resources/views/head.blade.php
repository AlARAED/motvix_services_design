<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$setting->name}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('uploads/fabicon.png') }}">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">

    <!-- Font Family CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/cerebrisans.css')}}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-all.min.css')}}">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css')}}">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate-text.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css')}}">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css')}}">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
        <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script>
        @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}"

    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':


            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
<style type="text/css">

    .whats-app {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 15px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }

</style>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

{!! htmlScriptTagJsApi() !!}


</head>