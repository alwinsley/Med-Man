@extends('app')

@section('content')

@include('partials.homeSlider')

<section class="white-section section-block">
    <div class="container">
        <div class="section-space"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="content-area text-center">
                    <h2 class="margin-bottom-10">Advanced Technologies </h2>
                    <p class="txt-grey">Our Human Patient simulators represent the highest standard of realism in form and function.</p>
                </div>

                <div class="row gallery margin-top-55">
                    
                  
                    <div class="col-md-6 wow fadeIn" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                     
                       
                        <div class="image-holder">
                                <div class="section-bg-bottom"
                                style="background-image: url({{asset ('./img/gallery/gallery-interior12.jpg')}});background-size: contain; border-radius:100%; opacity:1;padding: 300px;">
                            </div>
                            <a href="products">
                                   
                                {{-- <img src="{{asset ('./img/gallery/gallery-interior1.jpg')}}" alt=""> --}}
                                <div class="car-overlay">
                                    {{-- <span class="link-holder" style="top:300px">
                                            <span type="" class="button">View</span>
                                    </span> --}}
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="col-md-5 wow fadeIn" data-wow-delay=".6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn; padding-bottom:0px;">
                    <h2 class="text-left margin-bottom-10">Human Patient Simulators</h2>
                    
                    <p>Our Human Patient simulators represent the highest standard of realism in for and function.</p>
<br/>

                    <div class="margin-left-40">
                        <h3 class="margin-bottom-5"><strong><span class="txt-orange">Lifelike</span> Body</strong></h3>
                        <p>We used a real person’s MRI

                        images and consulted with sev-
                        eral independent specialist and

                        clinics with HPS’S appearance
                        and musculoskeletal structure is
                        lifelike offering full body mobility
                        in all main joints.</p>
                    </div>
                    <br/>
                        <div class="margin-left-60">
                        <h3 class="margin-bottom-5"><strong><span class="txt-orange">Extensive</span> Software</strong></h3>
                        <p>Pharmacokinetics are added in

                            order to simulate correct respons-
                            es to medication. Our ECG Con-
                            structor allows the user to create

                            custom ECG graph and unique
                            educational modules (Scenarios)
                            tailored to their needs.</p>
                        </div>
                        <br/>
                        <div class="margin-left-10">
                                <h3 class="margin-bottom-5"><strong><span class="txt-orange">Advance</span> Simulation</strong></h3>
                                <p>Our Next Generation of Human
                                        Patient Simulation has drastically
                                        improved automatic tracking and
                                        evaluation, intuitively simple and
                                        
                                        elegant software. Interchange-
                                        able trauma limbs, wound and
                                        
                                        amputation modules which
                                        containt main biological fluid
                                        capability.</p>
                                </div>
                </div>
                  
                    {{-- <div class="col-md-5 wow fadeIn" data-wow-delay=".6s"
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
                    </div> --}}
                    <div class="col-md-1">
                    </div>
                </div>
            </div>


        </div>
        <div class="section-space"></div>

        
        <div class="divider-1"> <span></span></div>
        
        <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="text-center">
                            <h2 class="text-center margin-bottom-5">Minimally Invasive Surgery</h2>
                        <p class="txt-grey">We provide instrument imitations for every instrument manufacturer brand out there, available by special order.</p>
                    </div>
                    <div class="margin-top-60">
                    <img src="{{asset ('./img/slider/sliderLap.jpg')}}" alt="">
                    </div>
                </div>
        </div>
    </div>
    <div class="section-space"></div>
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
    

    <section class="white-section section-block">
        <div class="section-space"></div>
    <div class="section-bg"
    style="background-image: url({{asset ('./img/slider/slider1.jpg')}}); background-position: 50% 8px;">
</div>
    <div class="container">
        <div class="row">
                <h1>Events</h1>
        </div>
            <div class="row">
               
                    <div class="col-lg-6">
                        <article class="post-entry">
                                <div class="post-image">
                                    <a href="#">
                                        <img width="600" height="430" src="{{asset ('./img/post/post4.jpg')}}" alt="">
                                        <span class="filter-grayscale"></span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-title"><a href="#">IMSH 20th Anniversary</a></h4>
                                    <p>18-22 January 2020</p>
                                    
                                    {{-- <div class="description">
                                        <p>
                                        Podcasting operational change management inside of workflows to establish a framework....
                                        </p>
                                    </div> --}}
                                </div>
                            </article>
                    </div>
                    <div class="col-lg-6">
                            <article class="post-entry">
                                    <div class="post-image">
                                        <a href="#">
                                            <img width="600" height="430" src="{{asset ('./img/post/post1.jpg')}}" alt="">
                                            <span class="filter-grayscale"></span>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="#">ASPiH 2019 BELFAST</a></h4>
                                        <p>4-6 November 2019</p>
                                        
                                        {{-- <div class="description">
                                            <p>
                                            Podcasting operational change management inside of workflows to establish a framework....
                                            </p>
                                        </div> --}}
                                    </div>
                                </article>
                    </div>
            </div>
        </div>
    </div>

        <div class="section-space"></div>
    
    @include('partials.contactForm')

</div>


@endsection