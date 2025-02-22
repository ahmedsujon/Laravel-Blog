<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lara Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('app/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('app/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/style.css') }}">
  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="index.html" class="text-black h2 mb-0">Lara Blog</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="category.html">Home</a></li>
                <li><a href="category.html">Politics</a></li>
                <li><a href="category.html">Tech</a></li>
                <li><a href="category.html">Entertainment</a></li>
                <li><a href="category.html">Travel</a></li>
                <li><a href="category.html">Sports</a></li>
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>

    @yield('content')

    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Subscribes</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Nature</a></li>
            </ul>
          </div>
          <div class="col-md-4">


            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                <a href="#"><span class="icon-twitter p-2"></span></a>
                <a href="#"><span class="icon-instagram p-2"></span></a>
                <a href="#"><span class="icon-rss p-2"></span></a>
                <a href="#"><span class="icon-envelope p-2"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Sujon Ahmed <i class="icon-heart text-danger" aria-hidden="true"></i>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="{{ asset('app/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('app/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('app/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('app/js/popper.min.js') }}"></script>
  <script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('app/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('app/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('app/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('app/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('app/js/aos.js') }}"></script>

  <script src="{{ asset('app/js/main.js') }}"></script>


  </body>
</html>
