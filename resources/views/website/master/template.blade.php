<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="website/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="website/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="website/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="website/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="website/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="website/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="website/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="website/styles/news_responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
     <!-- Bootstrap core CSS -->
     <link href="website/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="website/css/full-slider.css" rel="stylesheet">
    
</head>
<body>
<div class="super_container">
    @include('website.partial.header')
    @yield('content')
    @include('website.partial.footer')
</div>
</body>
    <script src="website/js/jquery-3.2.1.min.js"></script>
    <script src="website/styles/bootstrap-4.1.2/popper.js"></script>
    <script src="website/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="website/plugins/greensock/TweenMax.min.js"></script>
    <script src="website/plugins/greensock/TimelineMax.min.js"></script>
    <script src="website/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="website/plugins/greensock/animation.gsap.min.js"></script>
    <script src="website/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="website/plugins/masonry/masonry.js"></script>
    <script src="website/plugins/easing/easing.js"></script>
    <script src="website/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="website/js/news.js"></script>
    <script src="website/js/function.js"></script>
    <script src="website/vendor/jquery/jquery.min.js"></script>
    <script src="website/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>