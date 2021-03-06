<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><meta charset="windows-1252">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '21kclass.com')</title>

    <meta name="author" content="21kclass.com"/>
    <!--<meta name="description" content="21kclass.com"/>-->
    <!--<meta name="keywords" content="21kclass.com"/>-->
    <meta name="description" content="Personalised learning direct to you home"/>
    <meta name="keywords" content="Personalised learning direct to you home"/>
    <meta name="format-detection" content="telephone=no"/>

    <meta property="og:type" content="website"/>
    <meta property="og:title" content="21kclass.com"/>
    <meta property="og:description" content="21kclass.com"/>
    {{--    <meta property="og:image" content="{{ cdn_mix('/images/og.jpg') }}" />--}}
    <meta property="og:url" content="http://21kclass.com/"/>
    <meta property="fb:app_id" content=""/>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <link href="/css/vendor.min.css" rel="stylesheet">
    @if(request()->routeIs('tutoring.*'))
        <link href="/css/tutoring-theme.min.css" rel="stylesheet">
    @elseif(request()->routeIs('commerce.*'))
        <link href="/css/commerce-theme.min.css" rel="stylesheet">
    @else
        <link href="/css/coaching-theme.min.css" rel="stylesheet">
    @endif
    <link href="/css/custom.css" rel="stylesheet">

    @yield('css')
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5JC8S45');</script>
    <!-- End Google Tag Manager -->
    
    
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WCKV49P');</script>
    <!-- End Google Tag Manager -->
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DW12DQ8QXQ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-DW12DQ8QXQ');
    </script>

</head>
<noscript>
    <div class="jsnotice">
        <div class="msg">In order to utilize all the features of TeachZe<br><strong>you need to enable JavaScript.</strong><a href="https://www.enable-javascript.com/" target="_blank">Read more</a></div>
    </div>
</noscript>
<body>
@if(request()->routeIs('tutoring.*'))
    @yield('nav-tutoring')
@elseif(request()->routeIs('commerce.*'))
    @yield('nav-commerce')
@else
    @yield('nav-coaching')
@endif
@yield('content')

<script src="/js/vendor.min.js"></script>

<script src="/js/theme.min.js"></script>

<script type="text/javascript">

    $(function () {

        // TODO - check and confirm below line with Front Theme
        @if(!Request::is('course/*'))
            var header = new HSHeader($('#header')).init();
        @endif


        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
                position: 'left'
            }
        }).init();

        var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

        var typed = $.HSCore.components.HSTyped.init(".js-text-animation");

        AOS.init({
            duration: 650,
            once: true
        });

        $('.js-validate').each(function () {
            $.HSCore.components.HSValidation.init($(this), {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });
        });

        $('.js-animation-link').each(function () {
            var showAnimation = new HSShowAnimation($(this)).init();
        });

        $('.js-counter').each(function () {
            var counter = new HSCounter($(this)).init();
        });

        $('.js-go-to').each(function () {
            var goTo = new HSGoTo($(this)).init();
        });
    });

</script>

<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?70576';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled":true,
        "chatButtonSetting":{
            "backgroundColor":"#4dc247",
            "ctaText":"",
            "borderRadius":"25",
            "marginLeft":"0",
            "marginBottom":"50",
            "marginRight":"50",
            "position":"right"
        },
        "brandSetting":{
            "brandName":"TeachZe",
            "brandSubTitle":"Typically replies within few hours",
            "brandImg":"https://www.21kclass.in/css/themes/1/152744538_104126428396092_118279928940288905_n.png",
            "welcomeText":"Hey, there! ???? \n\nWelcome to TeachZe. How can we help you?",
            "messageText":"Hello, I have a question about {{ Request::fullurl() }}",
            "backgroundColor":"#0a5f54",
            "ctaText":"Start Chat",
            "borderRadius":"25",
            "autoShow":false,
            "phoneNumber":"919741133636"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCKV49P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@yield('script')
</body>
</html>
