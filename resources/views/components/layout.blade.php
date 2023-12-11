<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset("assets/img/apple-icon.png")}} ">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/img/favicon.ico")}} ">

    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}} ">
    <link rel="stylesheet" href="{{asset("assets/css/templatemo.css")}} ">
    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}} ">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset("assets/css/fontawesome.min.css") }}">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/slick-theme.css")}}">
    <!-- Slick -->
</head>

<body>
<x-header/>
{{ $slot }}

<x-footer />
<!-- Start Script -->
<script src="{{asset("assets/js/jquery-1.11.0.min.js")}} "></script>
<script src="{{asset("assets/js/jquery-migrate-1.2.1.min.js")}} "></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}} "></script>
<script src="{{asset("assets/js/templatemo.js")}} "></script>
<script src="{{asset("assets/js/custom.js")}} "></script>
<!-- End Script -->


<!-- Start Slider Script -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script>
    $('#carousel-related-product').slick({
        infinite: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 3,
        dots: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            }
        ]
    });
</script>
<!-- End Slider Script -->
</body>

</html>
