@extends('app')

@section('content')

<section class="banner-section">
    <div class="section-bg" style="background-image: url(&quot;assets/img/parallax.jpg&quot;); background-position: 50% 8px;"></div>
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">
                <h1 class="text-white">Products</h1>
                <span>Our simulator catalog</span>
            </div>
        </div>
    </div>
</section>

<!-- listings-area -->
<section class="car-listing white-section section-block">
    <div class="container">
        <div class="section-space"></div>
        <div class="row">
            <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                <h3 class="section-title">All Products</h3>
            </div>
        </div>
        <div class="row car-row-class">

            <div class="col-lg-4 col-md-12">
                <div class="car">
                  <a href="leonardo"><img src="{{asset ('./img/slider/sliderLeo.jpg')}}" alt=""></a>
                  <div class="car-description">

                    <h5 class="car-name"><a href="leonardo">LEONARDO</a></h5>

                    <div class="car-area">

                      <div class="car-price">
                      High Fidelity
                      </div>
                    </div>
                  </div>                 
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="car">
                  <a href="junior"><img src="{{asset ('./img/slider/sliderJunior.jpg')}}" alt=""></a>
                  <div class="car-description">

                    <h5 class="car-name"><a href="junior">JUNIOR</a></h5>

                    <div class="car-area">

                      <div class="car-price">
                        Pediatric
                      </div>
                    </div>
                  </div>                 
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="car">
                  <a href="mia"><img src="{{asset ('./img/slider/sliderMia.jpg')}}" alt=""></a>
                  <div class="car-description">

                    <h5 class="car-name"><a href="mia">MIA</a></h5>

                    <div class="car-area">

                      <div class="car-price">
                        Baby
                      </div>
                    </div>
                  </div>                 
                </div>
            </div>

        </div> 
        <div class="row car-row-class">
            <div class="col-lg-4 col-md-12">
                <div class="car">
                  <a href="lapvision"><img src="{{asset ('./img/slider/sliderLap.jpg')}}" alt=""></a>
                  <div class="car-description">

                    <h5 class="car-name"><a href="lapvision">LapVision</a></h5>

                    <div class="car-area">

                      <div class="car-price">
                       Laparoscopy
                      </div>
                    </div>
                  </div>                 
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="car">
                  <a href="angiovision"><img src="{{asset ('./img/slider/sliderAngio.jpg')}}" alt=""></a>
                  <div class="car-description">

                    <h5 class="car-name"><a href="angiovision">AngioVision</a></h5>

                    <div class="car-area">

                      <div class="car-price">
                        Angiography
                      </div>
                    </div>
                  </div>                 
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="car">
                  <a href="hystvision"><img src="{{asset ('./img/slider/sliderHyst.jpg')}}" alt=""></a>
                  <div class="car-description">

                    <h5 class="car-name"><a href="hystvision">HystVision</a></h5>

                    <div class="car-area">

                      <div class="car-price">
                       Hysteroscopy
                      </div>
                    </div>
                  </div>                 
                </div>
            </div>
          </div> 
            <div class="row car-row-class">
            <div class="col-lg-4 col-md-12">
                <div class="car">
                  <a href="endovision"><img src="{{asset ('./img/slider/sliderEndo.jpg')}}" alt=""></a>
                  <div class="car-description">

                    <h5 class="car-name"><a href="endoVision">EndoVision</a></h5>

                    <div class="car-area">

                      <div class="car-price">
                        Endoscopy
                      </div>
                    </div>
                  </div>                 
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="car">
                  <a href="auscultation"><img src="{{asset ('./img/slider/sliderAus1.jpg')}}" alt=""></a>
                  <div class="car-description">

                    <h5 class="car-name"><a href="auscultation-adult">Auscultation</a></h5>

                    <div class="car-area">

                      <div class="car-price">
                        Adult
                      </div>
                    </div>
                  </div>                 
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="car">
                  <a href="auscultation"><img src="{{asset ('./img/slider/sliderAus2.jpg')}}" alt=""></a>
                  <div class="car-description">

                    <h5 class="car-name"><a href="auscultation-child">Auscultation</a></h5>

                    <div class="car-area">

                      <div class="car-price">
                        Child
                      </div>
                    </div>
                  </div>                 
                </div>
            </div>
          </div>
            
        <div class="section-space"></div>
    </div>
  </section>

@endsection