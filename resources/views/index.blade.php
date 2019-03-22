@extends('layouts/main')

@section('header')
@parent
@section('home', 'active')
@endsection

@section('content')
@parent
<section>
  <div id="carouselBanner" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
    <li data-target="#carouselBanner" data-slide-to="1"></li>
    <li data-target="#carouselBanner" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item bg-essentials active" style="background-image: url(img/photo-70912.jpeg);">
      <!-- <img class="d-block w-100" src="img/photo-70912.jpeg" alt="" /> -->
      <div class="jumbotron jumbotron-fluid my-0 bg-transparent">
        <div class="container py-5 invisible">
          <h2>Car Imports, Sales and Hire</h2>
          <p class="lead"></p>
          <a href="#" class="btn btn-info btn-lg">Learn More</a>
        </div>
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h2>Car Imports, Sales and Hire</h2>
        <p class="lead">Get Yours</p>
      </div>
    </div>
    <div class="carousel-item bg-essentials" style="background-image: url(img/photo-1271135.jpeg);">
      <!-- <img class="d-block w-100" src="img/photo-1271135.jpeg" alt="" /> -->
      <div class="jumbotron jumbotron-fluid my-0 bg-transparent">
        <div class="container py-5 invisible">
          <h2>Tours and Travel</h2>
          <p class="lead"></p>
          <a href="#"  class="btn btn-info btn-lg">Learn More</a>
        </div>      
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h2>Tours and Travel</h2>
        <p class="lead">Tours and Travel</p>
      </div>
    </div>
    <div class="carousel-item bg-essentials" style="background-image: url(img/photo-global-travel.jpg);">
      <!-- <img class="d-block w-100" src="img/photo-global-travel.jpg" alt="" /> -->
      <div class="jumbotron jumbotron-fluid my-0 bg-transparent">
        <div class="container py-5 invisible">
          <h2>Express VISA</h2>
          <p class="lead"></p>       
          <a href="#" class="btn btn-info btn-lg">Learn More</a>
        </div>      
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h2>Express VISA</h2>
        <p class="lead">Express VISA</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</section>
<section class="jumbotron jumbotron-fluid bg-transparent pb-4 my-0">
  <div class="container">
    <h1>Our Services</h1>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
    <div class="col-sm-4 mb-4">
      <div class="card">
        <img class="card-img-top" src="img/ph_.jpg" alt="Image">
        <div class="card-body">
          <h4 class="card-title">Tour & Travel</h4>
          <p class="card-text">
            We offer affordable, yet professional tour and travel services. Book and buy your tickets from us at very affordable rates.
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mb-4 d-none">
      <div class="card">
        <img class="card-img-top" src="img/ph_.jpg" alt="Image">
        <div class="card-body">
          <h4 class="card-title">Car Imports</h4>
          <p class="card-text">
            You can pick from our stock in Johannesburg and Kampala or let us find for you the vehicle that you need We can also import for you the car of your specification, ship it from the source (Japan or South Africa) and deliver it to you.
          </p>
        </div>
      </div>
    </div>
    <div class="w-100 d-none"></div>
    <div class="col-sm-4 mb-4">
      <div class="card">
        <img class="card-img-top" src="img/ph_.jpg" alt="Image">
        <div class="card-body">
          <h4 class="card-title">Express VISA</h4>
          <p class="card-text">
            Avoid the hassle of moving up and down. We can do this for you at a fee, for these countries: South Africa, Turkey, Thailand, China, Cyprus, Vietnam, Myanmar, UAE, Schengen states, and many others.
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mb-4">
      <div class="card">
        <img class="card-img-top" src="img/ph_.jpg" alt="Image">
        <div class="card-body">
          <h4 class="card-title">Graphic Design</h4>
          <p class="card-text">
            We cater for all your printing needs ranging from business cards, payment vouchers, stickers, receipt books, invoices etc.
          </p>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<section>
  <div class="py-5"></div>
</section>
@endsection



