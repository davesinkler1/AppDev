@extends('layouts.app')

@section('content')

<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i>    All category</strong></a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Dry Foods</a>
              <a class="dropdown-item" href="#">Room interior</a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clothing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sport Equipment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Electronics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Toys</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Furnitures</a>
          </li>
        </ul>
      </div> <!-- collapse .// -->
    </div> <!-- container .// -->
  </nav>
  <br>
<a href='\utility' class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded" type="button">
         Manage Utility
</a><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status') == "two-factor-authentication-disabled")
                        <div class="alert alert-success" role="alert">
                            Two factor Authentication has been disabled !!
                        </div>
                    @endif

                    @if (session('status') == "two-factor-authentication-enabled")
                        <div class="alert alert-success" role="alert">
                            Two factor Authentication has been enabled.
                        </div>
                    @endif

                    {{ __('You are logged in as USER') }}

                    <br><br>

                    <form method="POST" action="/user/two-factor-authentication">
                        @csrf

                        @if (auth()->user()->two_factor_secret)
                            @method('DELETE')
                            
                            <div>
                              {!! request()->user()->twoFactorQrCodeSvg(); !!}
                            </div>
                            
                              <br><br>

                            <button class="bg-red text-white font-bold py-2 px-4 rounded">
                              Disable 2FA
                            </button>
                          
                        @else
                            <button class="bg-blue text-white font-bold py-2 px-4 rounded">
                              Enable 2FA
                            </button>
                          
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section-content">
    <div class="container">
    
    <header class="section-heading">
      <h3 class="section-title">Popular Items</h3>
    </header><!-- sect-heading -->
    
      
    <div class="row">
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/1.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Electric Kettle</a>
            
            
            <div class="price mt-1">RM2.50/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Table Fans</a>
            
            
            <div class="price mt-1">RM5.00/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Football Boots</a>
            
            
            <div class="price mt-1">RM6.00/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Mug</a>
            
            
            <div class="price mt-1">RM0.50/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
    </div> <!-- row.// -->
    
    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
    
    
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content">
    <div class="container">
    
    <header class="section-heading">
      <h3 class="section-title">New utilities</h3>
    </header><!-- sect-heading -->
    
    <div class="row">
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/5.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Laptop Bag</a>
            
            
            <div class="price mt-1">RM4.00/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/6.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Water Bottle</a>
            
            
            <div class="price mt-1">RM2.00/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/7.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Healing Chair</a>
            
            
            <div class="price mt-1">RM10.00/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/9.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Motorcycle Helmet</a>
            
            
            <div class="price mt-1">RM8.00/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
    </div> <!-- row.// -->
    
    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
    
    
    <!-- ========================= SECTION CONTENT ========================= -->
    <br>
    <br>
    <br>
    <section class="section-content padding-bottom-sm">
    <div class="container">
    
    <header class="section-heading">
      <a href="#" class="btn btn-outline-primary float-right">See all</a>
      <h3 class="section-title">Recommended for you!</h3>
    </header><!-- sect-heading -->
    
    <div class="row">
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/10.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Sport Shoes</a>
            <div class="price mt-1">RM3.00/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/11.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Hanger</a>
            <div class="price mt-1">RM0.20/day per 1 item</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/12.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Electric Pot</a>
            <div class="price mt-1">RM5.00/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
      <div class="col-md-3">
        <div href="#" class="card card-product-grid">
          <a href="#" class="img-wrap"> <img src="assets/images/items/13.jpg"> </a>
          <figcaption class="info-wrap">
            <a href="#" class="title">Electric Shaver</a>
            <div class="price mt-1">RM3.00/day</div> <!-- price-wrap.// -->
          </figcaption>
        </div>
      </div> <!-- col.// -->
    </div> <!-- row.// -->
    
    </div> <!-- container .//  -->
    </section>
@endsection
