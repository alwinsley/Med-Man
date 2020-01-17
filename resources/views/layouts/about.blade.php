@extends('app')

@section('content')

{{-- <section class="banner-section">
    <div class="section-bg" style="background-image: url({{asset ('./img/gallery/gallery-interior1Home.jpg')}}); background-position: 50% 8px;"></div>
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">
                <h1 class="text-white">About Us</h1>
               
            </div>
        </div>
    </div>
</section> --}}

<div class="section-space dark-section"></div>
<div class="section-space"></div>
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12">
    <div class="content-area">
        <h2>About Us</span></h2>
        <p>MedVision was founded by K.K. DNAFORM and EIDOS-Medicine LLC in 2012.
                We specialize in innovative development and production of high-end medical
                simulators. We are caught in a constant cycle of designing, perfecting and
                inventing unique solutions and systems for modern high-end medical education.
                Being client-oriented is among our main goals we value and cherish all
                of our customers and partners, providing quick and professional support.
                We love what we do and through us at MedVision all is possible with our
                medical simulators and professional experience.
                Looking forward to working with you.
                About Us
                4</p>
       
    </div>
</div>

<div class="col-lg-6">
  <img src="{{asset ('./img/MedAboutpic.png')}}" />
</div>
<div class="section-space"></div>


</div>
</div>

<section class="bg-dark-grid section-block">
        <div class="container">
                <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
                <div class="section-space"></div>
            <p class="font-size-22 text-center text-white">We can swiftly deliver any module for our simulators, eliminating
                    delay risks when sourcing from external suppliers.</p>
            <img src="{{asset ('./img/employ.png')}}" />
            <div class="section-space"></div>
        </div>
        <div class="col-lg-2">
        </div>
                </div></div>
    </section>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <blockquote>
            <h4>Production</h4>
            
  <p>We employ more than 150 software developers, hardware developers, electronics specialists, quality service and customer service specialists, metalworks, casting and assembly specialists, employing such standards as Good Manufacturing Practice (GMP) and ISO9001.
  
  Production localization is as high as 95%, allowing us to have full control over the whole process. We can swiftly supply any spare part, unit or junction for our simulators, eliminating delay risks when sourcing from external suppliers.
  
  The main emphasis is with our quality control system and service system, which are provided by a set of proprietary software products such as PDM (Product Data Management), ERP (Enterprise Resource Planning) and CRM (Customer Relations Management), all developed together Japanese specialists with 20 years of experience in quality.</p>
             
          </blockquote>
          
    </div>
  </div>
</div>


<div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <img src="{{asset ('./img/history.png')}}" />
    </div>
    </div>
</div>
<div class="section-space"></div>

@endsection