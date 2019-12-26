@extends('app')

@section('content')

@include('partials.homeSlider')

<section class="white-section section-block">
    <div class="container">
        <div class="section-space"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="content-area text-center">
                    <h2 class="margin-bottom-10">Advanced technologies for <span>modern, high-key medical
                            education.</span></h2>
                    <p class="txt-grey">The Medvision experience brings you: High fidelity, Intuitive
                        software, and highly
                        realistic simulations.</p>
                </div>

                <div class="row gallery margin-top-55">
                    <div class="col-md-1">
                    </div>
                    <div class="border-right col-md-5 wow fadeIn" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <h3 class="text-center">Human Patient Simulators</h3>
                        <div class="image-holder">
                            <a href="products">
                                <img src="{{asset ('./img/gallery/gallery-interior1Home.jpg')}}" alt="">
                                <div class="car-overlay">
                                    <span class="link-holder">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <p>Our Human Patient simulators represent the highest standard of realism in for and function.</p>
                    </div>
                    <div class="col-md-5 wow fadeIn" data-wow-delay=".6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                        <h3 class="text-center">Minimally Invasive Surgery</h3>
                        <div class="image-holder">
                            <a href="products">
                                <img src="{{asset ('./img/gallery/gallery-interior2Home.jpg')}}" alt="">
                                <div class="car-overlay">
                                    <span class="link-holder">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <p>We provide instrument imitations for every instrument manufacturer brand out there, available by special order.</p>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>


        </div>
        <div class="section-space"></div>
    </div>
</section>


 <!-- View Products Section -->
 <section class="page-title-wrapper">
    <div class="section-bg"
        style="background-image: url({{asset ('./img/slider/slider-model.jpg')}}); background-position: 50% 8px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="page-title-inner page-title-inner-home">
                    <div class="page-title-content padding-top-75">
                        <h1>View All Products</h1>
                        <p>MedVision offers turnkey projects for simulation training organizations</p>

                        <a href="products" id="model-feature" class="margin-bottom-50 button button-sliding-icon"
                            style="width: 136px;">View Products <i class="fa fa-angle-right"></i></a>
                        <br />

                        <a href="#" class="big text-white"> <i class="fa fa-2x fa-download"></i>
                            <h4 class="text-white">Download Product
                                Catalog</h4>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- brands-area -->
{{-- <div class="white-section section-block">

    <div class="section-space"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="partners" data-auto="false" data-loop="false" data-column="5" data-column2="3"
                    data-column3="2" data-gap="60">
                    <div class="owl-carousel owl-theme">

                        <div class="partner-item clearfix">
                            <div class="inner">
                                <a target="_blank" href="#">
                                    <div class="thumb">
                                        <img src="{{asset ('./img/partner/logo-1.png')}}" alt="Image">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item clearfix">
                            <div class="inner">
                                <a target="_blank" href="#">
                                    <div class="thumb">
                                        <img src="{{asset ('./img/partner/logo-2.png')}}" alt="Image">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item clearfix">
                            <div class="inner">
                                <a target="_blank" href="#">
                                    <div class="thumb">
                                        <img src="{{asset ('./img/partner/logo-3.png')}}" alt="Image">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item clearfix">
                            <div class="inner">
                                <a target="_blank" href="#">
                                    <div class="thumb">
                                        <img src="{{asset ('./img/partner/logo-4.png')}}" alt="Image">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item clearfix">
                            <div class="inner">
                                <a target="_blank" href="#">
                                    <div class="thumb">
                                        <img src="{{asset ('./img/partner/logo-5.png')}}" alt="Image">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item clearfix">
                            <div class="inner">
                                <a target="_blank" href="#">
                                    <div class="thumb">
                                        <img src="{{asset ('./img/partner/logo-6.png')}}" alt="Image">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item clearfix">
                            <div class="inner">
                                <a target="_blank" href="#">
                                    <div class="thumb">
                                        <img src="{{asset ('./img/partner/logo-7.png')}}" alt="Image">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item clearfix">
                            <div class="inner">
                                <a target="_blank" href="#">
                                    <div class="thumb">
                                        <img src="{{asset ('./img/partner/logo-8.png')}}" alt="Image">
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="section-space"></div>
    
    @include('partials.contactForm')

</div>


@endsection