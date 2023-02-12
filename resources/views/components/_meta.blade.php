<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet">
<link href="{{ asset('assets/owlcarousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/owlcarousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/fontawesome/css/brands.min.css') }}" rel="stylesheet">
<style>
  body {
      font-family: 'Lato', sans-serif;
  }
  .main-content .owl-theme .custom-nav {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
  }
  .main-content .owl-theme .custom-nav .owl-prev,
  .main-content .owl-theme .custom-nav .owl-next {
    position: absolute;
    color: inherit;
    background: none;
    border: none;
    z-index: 100;
  }
  .main-content .owl-theme .custom-nav .owl-prev {
    left: 0;
  }
  .main-content .owl-theme .custom-nav .owl-next {
    right: 0;
  }
  .video .owl-carousel .owl-video-wrapper {
    background: transparent !important;
    height: 500px
  }
  .video .owl-carousel {
    background-image: url('https://voyage.qodeinteractive.com/wp-content/uploads/2016/04/parallax-1.jpg');
    height: 500px;
    position: static;
    padding: 0;
    background-repeat: no-repeat;
    background-color: transparent;
    background-position: center 0;
    background-attachment: fixed;
    overflow: hidden;
    background-position: 50% -65px;
  }
</style>