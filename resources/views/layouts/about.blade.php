@extends('app')

@section('content')

<section class="banner-section">
    <div class="section-bg" style="background-image: url(&quot;assets/img/parallax.jpg&quot;); background-position: 50% 8px;"></div>
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">
                <h1 class="text-white">About Us</h1>
               
            </div>
        </div>
    </div>
</section>

<div class="section-space"></div>
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12">
    <div class="content-area">
        <h2>Advanced technologies for <span>modern, high-key medical education</span></h2>
        <p class="subtitle">MedVision is an innovative, fast-growing company, specializing in development and production of high-end medical simulators. The group of companies, established in 2014 through the partnership of K.K. DNAFORM and EIDOS-Medicine LLC, has its own unique solutions, IP, know-how and production.</p>
       
    </div>
</div>

<div class="col-lg-6">
  <img src="{{asset ('./img/models/about.jpg')}}" />
</div>
</div>
</div>

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