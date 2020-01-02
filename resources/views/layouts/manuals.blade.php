@extends('app')

@section('content')
<section class="banner-section">
    <div class="section-bg" style="background-image: url(&quot;assets/img/parallax.jpg&quot;); background-position: 50% 8px;"></div>
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">
                <h1 class="text-white">MedVision Product Manuals</h1>
                <span>Our manuals</span>
            </div>
        </div>
    </div>
</section>

<div class="row gallery content-center  margin-top-55">
    <div class="col-md-3 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">

        <div class="image-holder active">
            <a href="manuals">
                <img src="{{asset ('./img/gallery/gallery-interior1Home.jpg')}}" alt="">
                <div class="car-overlay">
                    <span class="link-holder">
                        <h3 class="text-white">BronchoVision manual</h3>
                    </span>
                </div>
            </a>
        </div>

        <a href="assets/img/gallery/gallery-interior4.jpg" class="image-link"></a>
    </div>
    <div class="col-md-3 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">

        <div class="image-holder active">
            <a href="manuals">
                <img src="{{asset ('./img/gallery/gallery-interior1Home.jpg')}}" alt="">
                <div class="car-overlay">
                    <span class="link-holder">
                        <h3 class="text-white"> EndoVision manual</h3>
                    </span>
                </div>
            </a>
        </div>

        <a href="assets/img/gallery/gallery-interior4.jpg" class="image-link"></a>
    </div>

    <div class="col-md-3 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">

        <div class="image-holder active">
            <a href="manuals">
                <img src="{{asset ('./img/gallery/gallery-interior1Home.jpg')}}" alt="">
                <div class="car-overlay">
                    <span class="link-holder">
                        <h3 class="text-white"> LapVision manual</h3>
                    </span>
                </div>
            </a>
        </div>

        <a href="assets/img/gallery/gallery-interior4.jpg" class="image-link"></a>
    </div>

</div>

<div class="row gallery content-center  margin-top-55">
    <div class="col-md-3 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">

        <div class="image-holder active">
            <a href="manuals">
                <img src="{{asset ('./img/gallery/gallery-interior1Home.jpg')}}" alt="">
                <div class="car-overlay">
                    <span class="link-holder">
                        <h3 class="text-white">AngioVision manual</h3>
                    </span>
                </div>
            </a>
        </div>

        <a href="assets/img/gallery/gallery-interior4.jpg" class="image-link"></a>
    </div>
    <div class="col-md-3 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">

        <div class="image-holder active">
            <a href="manuals">
                <img src="{{asset ('./img/gallery/gallery-interior1Home.jpg')}}" alt="">
                <div class="car-overlay">
                    <span class="link-holder">
                        <h3 class="text-white">HystVision manual</h3>
                    </span>
                </div>
            </a>
        </div>

        <a href="assets/img/gallery/gallery-interior4.jpg" class="image-link"></a>
    </div>

    <div class="col-md-3 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">

        <div class="image-holder active">
            <a href="manuals">
                <img src="{{asset ('./img/gallery/gallery-interior1Home.jpg')}}" alt="">
                <div class="car-overlay">
                    <span class="link-holder">
                        <h3 class="text-white">Leonardo.HF manual</h3>
                    </span>
                </div>
            </a>
        </div>

        <a href="assets/img/gallery/gallery-interior4.jpg" class="image-link"></a>
    </div>

</div>

@endsection