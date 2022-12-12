<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Utilities Rental</title>
    <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   <!-- Custom styles for this template -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/ui.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <link href="assets/css/all.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
      <div class="container">
          <ul class="navbar-nav d-none d-md-flex mr-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Renter</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Rentee</a></li>
          </ul>
          <ul class="navbar-nav">
          <li  class="nav-item"><a href="#" class="nav-link"> Call: +03-25357366 </a></li>
          
        </ul> <!-- list-inline //  -->
        
      </div> <!-- container //  -->
      </nav> <!-- header-top-light.// -->
</head>
<body>

    <div id="app">
    @include('layouts.adminnavigation')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    

    <!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top bg">
  <div class="container">
    <section class="footer-top  padding-y">
      <div class="row">
        <aside class="col-md col-6">
          <h6 class="title">FAQ</h6>
          <ul class="list-unstyled">
            <li> <a href="#">How to be renter?</a></li>
            <li> <a href="#">How to be rentee?</a></li>
            <li> <a href="#">Refund policy</a></li>
            <li> <a href="#">Payment term</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Company</h6>
          <ul class="list-unstyled">
            <li> <a href="#">About us</a></li>
            <li> <a href="#">Career</a></li>
            <li> <a href="#">Rules and terms</a></li>
            <li> <a href="#">Cover Area</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Help</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Contact us</a></li>
            <li> <a href="#">Order status</a></li>
            <li> <a href="#">Shipping info</a></li>
            <li> <a href="#">Open dispute</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Account</h6>
          <ul class="list-unstyled">
            <li> <a href="#"> User Login </a></li>
            <li> <a href="#"> User register </a></li>
            <li> <a href="#"> Account Setting </a></li>
            <li> <a href="#"> My Orders </a></li>
          </ul>
        </aside>
        
      </div> <!-- row.// -->
    </section>	<!-- footer-top.// -->

    <section class="footer-bottom row">
      <div class="col-md-2">
        <p class="text-muted">   2022 RentIT </p>
      </div>
      <div class="col-md-8 text-md-center">
        <span  class="px-2">RentIT@gmail.com</span>
        <span  class="px-2">+03-25357366</span>
        <span  class="px-2">Universiti Teknologi Malaysia,Skudai Johor</span>
      </div>
      <div class="col-md-2 text-md-right text-muted">
        <i class="fab fa-lg fa-cc-visa"></i>  
        <i class="fab fa-lg fa-cc-mastercard"></i>
      </div>
    </section>
  </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
</body>
</html>