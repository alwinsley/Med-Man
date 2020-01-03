@extends('app')

@section('content')

<section class="banner-section">
    <div class="section-bg" style="background-image: url(&quot;assets/img/parallax.jpg&quot;); background-position: 50% 8px;"></div>
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">
                <h1 class="text-white">Contact Us</h1>
               
            </div>
        </div>
    </div>
</section>

@include('partials.contactForm')

<div class="container">
    <div class="row">
<div class="col-md-3">
   <h3> Global </h3>
    <h4>Japan</h4>
    Room 605, Nihonbashi Life Science Building 2 3-11-5, Nihonbashi Honcho, Chuo-ku, Tokyo 103-0023<br/>
    
     +8 (103) 682-17021<br/>
    
    Sales inquiries/Customer service<br/>
     mail@medvision.jp
</div>
<div class="col-md-3">
    <h3> North & South America </h3>
    <h4> USA</h4>
    6555 Sanger Road, Orlando, FL 32827<br/>
    
     +1 (888) 584-7119<br/>
     +1 (407) 362-7868<br/>
    
    Sales inquiries/Customer service<br/>
     mail@medvisiongroup.com
  </div>
  <div class="col-md-3">
      <h3>Europe </h3>
      <h4> Austria</h4>
      Albertgasse 35, 1080, Vienna<br/>
      
       +43 664 414 8288<br/>
      
      For general requests email us at<br/>
       europe@medvisiongroup.com
    </div>
    <div class="col-md-3">
        <h3>CIS </h3>
        <h4> Russia</h4>
        Office 426, Building 23, Peterburgskaya St. 50,<br/>
        Kazan, 420107<br/>
        
         +7 (843) 227-40-63<br/>
        
        Sales inquiries/Customer service<br/>
         mail@oooeidos.ru
      </div>
    </div>
</div>
@endsection