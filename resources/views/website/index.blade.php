@extends('website/layout/layout')
@section('title', 'Beranda')

@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./asset/img/indische/bg.png');">
    <div class="container" style="margin-top: -100px">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Indische1931 Cafe</h1>
            <h3>Coffee Roastery HahaHihi</h3>
            <a class="nav-link" href="/order">
              <button class="btn btn-success btn-round mt-3">
                <i class="material-icons">assignment</i> Order Now
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised mb-5" style="margin-top: -200px">
    <!--         carousel  -->
    <div class="section" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mr-auto ml-auto">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{!! asset('asset/img/indische/carousel1.png') !!}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Indische1931 Cafe, Jl. Brigjend Katamso No.179 Sidoarjo
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{!! asset('asset/img/indische/carousel2.png') !!}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Indische1931 Cafe, Jl. Brigjend Katamso No.179 Sidoarjo
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{!! asset('asset/img/indische/carousel3.png') !!}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Indische1931 Cafe, Jl. Brigjend Katamso No.179 Sidoarjo
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{!! asset('asset/img/indische/carousel4.png') !!}" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Indische1931 Cafe, Jl. Brigjend Katamso No.179 Sidoarjo
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>
    </div>
    <!--         end carousel -->
    <div class="section" style="margin-top: -100px">
      <div class="container text-center">
        <div class="row">
          <div class="container">
            <h3>Promo Special</h3>
          </div>
        </div>
        <div class="row">
          <div class="container">
          <img src="{!! asset('asset/img/indische/promo.png') !!}" style="width: 30%;">
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="section section-download" id="downloadSection" style="margin-top: -150px">
      <div class="container">
        <div class="sharing-area text-center">
          <div class="row justify-content-center">
            <h3>Thank you for supporting us!</h3>
          </div>
          <a id="instagram" class="btn btn-raised btn-instagram" href="https://www.instagram.com/indische1931" rel="nofollow">
            <i class="fa fa-instagram"></i>
            Instagram
          </a>
          <a id="github" href="https://indischegroup.com/" target="_blank" class="btn btn-raised btn-github" rel="nofollow">
            <i class="fa fa-chrome"></i>
            Indischegroup
          </a>
        </div>
      </div>
    </div>
    <!-- Footer -->
  </div>
@endsection
  