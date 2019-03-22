<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ndalambi Group</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<header>
@section('header')
<div class="container">
  <div class="navbar navbar-expand-lg navbar-light" role="navigation">
    <div class="navbar-brand">
      <a class="" href="/"><img src="img/logo.png" height="60"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTargeted"
      aria-controls="navBarTargeted" aria-expanded="false" aria-label="Toggle Navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="navbar-collapse collapse justify-content-end" id="navbarTargeted">
      <ul class="navbar-nav">
        <li class="nav-item @yield('home')"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item @yield('services')"><a class="nav-link" href="/services" >Services</a></li>
        <li class="nav-item @yield('about')"><a class="nav-link" href="/about">About Us</a></li>
        <li class="nav-item @yield('contact')"><a class="nav-link" href="/contact-us">Contact</a></li>
      </ul>
    </div>
  </div>
</div>
@yield('header')
</header>

<main>
@yield('content')
</main>

<footer>
@section('footer')
<section class="bg-primary text-dark pt-5">
<div class="container">
  <div class="row py-4">
    
    <div class="col-sm-6 col-md-4">
    <div class="widget">
      <h4>Ndalambi Group</h4>
      <p>
        World Tour and Travel Agents<br>
        VISA Express (VISA Service)<br>
        Car Imports and hire<br>
        Printing Services
      </p>
      <p>
        <a href="mailto:ndalambigroup@gmail.com">ndalambigroup@gmail.com</a><br>
        <a href="">www.ndalambi.co.za</a>
      </p>
    </div> 
    </div>

    <div class="col-sm-6 col-md-4">
    <div class="widget">
      <h4>Uganda Office</h4>
      <p>Plot 1, Portal Avenue<br>
      Span House Suite 409<br>
      P.O BOX 7718 Kampala (U)</p>
      <h4>Call</h4>
      <ul class="list-unstyled">
        <li>+256 414 341 770</li>
        <li>+256 782 178 936</li>
        <li>+256 701 164 856</li>
        </li>
      </ul>
    </div>
    </div>

  </div>

  <div>
    <div class="row pt-4 pb-2">           
      <p class="small col text-center">© 2018 Ndalambi Group of Companies. All Rights Reserved.</p>
      <p class="small col text-center"><b>Design</b> Kairanya Paul.</p>
    </div>
  </div> 

</div>
</section>
@yield('footer')
</footer>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>