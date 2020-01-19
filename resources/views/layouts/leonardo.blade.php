@extends('app')

@section('content')


        
        <!-- model-area -->
        <div class="page-title-wrapper">
            <div class="section-bg" style="background-image: url({{url('./img/slider/sliderLeo.jpg')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="page-title-inner">
                            <div class="page-title-content">
                                <h1>LEONARDO</h1>
                                <p>Your high fidelity tool for high fidelity training</p>

                                <a href="#" id="model-feature" data-toggle="modal" data-target="#exampleModal" class="button margin-bottom-30 button-sliding-icon font-size-20">Request A Quote <i class="fa fa-angle-right"></i></a> 
                                <br />
                              
                                <a href="#" id="model-feature" data-toggle="modal" data-target="#exampleModal2" class="text-white border-white button-sliding-icon font-size-20 margin-top-40">Get More Info <i class="fa fa-angle-right"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- features-area -->
        <section class="bg-dark-grid section-block">

            <div class="section-space"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="features-entry">
                            

                                {{-- <h2 class="section-title">Leonardo (HF).</h2> --}}
                                <p class="text-white font-size-18"><strong>Leonardo HF</strong> is a High-Fidelity patient simulator of the highest standard
                                        of realism in form and function. It is design for cariopulmanary
                                        resuscitation performance training, intensive care, and life-support
                                        procedures using a large variaty of possible medical situations.</p>
                                <h2 class="text-white"><strong>Develop Major Medical Skills:</strong></h2>
                                <ul class="text-white">
                                        <li><strong>Perform CPR</strong> with or without use of acute care medication and
                                        a real defibrillator.</li>
                                        <li>Perform normal <strong>intubation procedures</strong> or with complications.
                                        Tongue swelling, laryngeal edema, laryngospasm, left/right
                                        bronchi obstruction and lockjaw.</li>
                                        <li>Decompression of <strong>tension pneumothorax</strong>, perform
                                        pleural cavity drainage and Urethral <strong>Catheterization</strong>.</li>
                                        <li>Perform <strong>intramuscular, intraosseous and intravenous
                                        injections</strong> with selection of administered medicine and
                                        amount of dose given with automatic software recognition.</li>
                                        <li>Perform cricoid pressure technique <strong>(Sellick’s maneuver)</strong></li>
                                                <li><strong>Auscultation </strong>and interpretation of heart, lungs and bowels
                                        sounds with <strong>Korotkoff tones</strong> which requires correct
                                        positioning of instrument.</li>
                                </ul>

                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="features-entry margin-bottom-0 wow fadeInRight">
                            <div class="image-holder margin-bottom-0" style="border-radius:100%;">

                                <img width="800" height="500" src="{{asset ('./img/post/post66.jpg')}}" alt="">
                               
                                <span class="project-overlay"></span>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-space"></div>

        </section>

        <!-- exterior-area -->
        <section class="padding-bottom-100">
            {{-- <div class="section-bg" style="background-image: url({{url('./img/slider/sliderLeo.jpg')}}); background-position: 50% -102px;">
            </div> --}}
            <div class="section-space"></div>
            <div class="">
                <div class="row">
                    <div class="col-md-12 text-center section-title-wrapper">
                        <h3 class="section-title">Features</h3>
                        <p><a href="#">Check catalog</a> to view full Feature list</p>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-gallery">
                            
                            <ul class="nav nav-tabs" role="tablist">
                                {{-- <li role="presentation" class="active"><a href="#feature" aria-controls="feature" role="tab" data-toggle="tab">Features</a></li> --}}
                                {{-- <li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab" data-action="gallery">Gallery</a></li> --}}
                            </ul>
                              
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="feature">
                                    <div class="car-interest">
                                        <div class="car-interest-wrapper-full">
                                            <img src="{{asset ('./img/models/leo.jpg')}}" alt="Model 1">
                                            <ul>
                                                <li class="interest-point" style="bottom: 24%;left: 72%;">
                                                    <a class="car-img-replace" href="#0"><i class="fa fa-search text-white"></i></a>
                                                    <div class="car-more-info car-top">
                                                        <img class="car-more-image" src="{{asset ('./img/box/boxLeo.jpg')}}" alt=""/>
                                                        <h3>Vital signs</h3>
                                                        <p>
                                                           <ul>
                                                             <li>- Pulse palpation (12 points)</li>
                                                             <li>- Monitoring blood pressure</li>
                                                             <li>- Pulse of the radial artery</li>
                                                           </ul>
                                                        </p>
                                                        <a href="#0" class="interest-close-info car-img-replace">Close</a>
                                                    </div>
                                                </li> 

                                                <li class="interest-point" style="top: 32%; left: 18%;">
                                                        <a class="car-img-replace" href="#0"><i class="fa fa-search text-white"></i></a>
                                                    <div class="car-more-info car-right">
                                                        <img class="car-more-image" src="{{asset ('./img/box/boxLeo2.jpg')}}" alt=""/>
                                                        <h3>Intubation</h3>
                                                        <ul>
                                                            <li>- BVM</li>
                                                            <li>- Laryngoscope</li>
                                                            <li>- Orotracheal Intubation</li>
                                                            <li>- ET tube</li>
                                                          </ul>
                                                        <a href="#0" class="interest-close-info car-img-replace">Close</a>
                                                    </div>
                                                </li> 

                                                <li class="interest-point" style="top: 38%;right: 61%;">
                                                        <a class="car-img-replace" href="#0"><i class="fa fa-search text-white"></i></a>
                                                    <div class="car-more-info car-left">
                                                        <img class="car-more-image" src="{{asset ('./img/box/boxLeo3.jpg')}}" alt=""/>
                                                        <h3>Cardiopulmonary resuscitation</h3>
                                                        <ul>
                                                            <li>- ECG monitoring</li>
                                                            <li>- Chest compressions</li>
                                                            <li>- Defibrillation</li>
                                                          </ul>
                                                        <a href="#0" class="interest-close-info car-img-replace">Close</a>
                                                    </div>
                                                </li> 
                                            </ul>
                                        </div> 
                                    </div> 
                                </div>
                                <div role="tabpanel" class="tab-pane gallery" id="gallery">
                                    <div class="row mosaic gallery">
                                        <div class="grid-sizer col-sm-4 col-md-3"></div>
                                        <div class="col-md-6 grid-item">
                                            <div class="image-holder">
                                                <a href="{{asset ('./img/gallery/gallery1.jpg')}}" class="image-link" data-lightbox-gallery="gallery1">
                                                    <img src="{{asset ('./img/gallery/gallery1.jpg')}}" alt="">
                                                    <div class="car-overlay">
                                                        <span class="link-holder">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-3 grid-item">
                                            <div class="image-holder">
                                                <a href="{{asset ('./img/gallery/gallery2.jpg')}}" class="image-link" data-lightbox-gallery="gallery2">
                                                    <img src="{{asset ('./img/gallery/gallery2.jpg')}}" alt="">
                                                    <div class="car-overlay">
                                                        <span class="link-holder">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-3 grid-item">
                                            <div class="image-holder">
                                                <a href="{{asset ('./img/gallery/gallery3.jpg')}}" class="image-link" data-lightbox-gallery="gallery3">
                                                    <img src="{{asset ('./img/gallery/gallery3.jpg')}}" alt="">
                                                    <div class="car-overlay">
                                                        <span class="link-holder">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-3 grid-item">
                                            <div class="image-holder">
                                                <a href="{{asset ('./img/gallery/gallery4.jpg')}}" class="image-link" data-lightbox-gallery="gallery4">
                                                    <img src="{{asset ('./img/gallery/gallery4.jpg')}}" alt="">
                                                    <div class="car-overlay">
                                                        <span class="link-holder">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-3 grid-item">
                                            <div class="image-holder">
                                                <a href="{{asset ('./img/gallery/gallery5.jpg')}}" class="image-link" data-lightbox-gallery="gallery5">
                                                    <img src="{{asset ('./img/gallery/gallery5.jpg')}}" alt="">
                                                    <div class="car-overlay">
                                                        <span class="link-holder">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>      
                </div>
            </div>

        </section>



        <!--  Round section -->

        <section class="white-section "> 

                <div class="interior-container">
                        <div class="mid-space"></div>
                        <div class="container content-flex">
                            

                            <div class="content-border-wrap fadeInRight">
                            <div class="content-rounded fadeInRight">
                                <h6>Paramount Realism</h6>
                                <hr class="faded-hr"/>
                                <p class="margin-bottom-80">We used a real person’s MRI
                                    images, consulted with
                                    independent specialist and
                                    clinics with HPS’S appearance
                                    and musculoskeletal structure to
                                    offer a lifelike full body mobility
                                    in all main joints.<br/></p>
                                </div>
                            </div>

                            <div class="content-border-wrap">
                                    <div class="content-rounded">
                                        <h6>Expansive Software</h6>
                                        <hr class="faded-hr"/>
                                        <p class="margin-bottom-50">Pharmacokinetics are added in
        
                                                order to simulate correct re-
                                                sponses to medication. Our ECG
                                                
                                                Constructor allows the user to
                                                create custom ECG graph and
                                                unique educational modules
                                                (Scenarios) tailored to your
                                                needs.<br/></p>
                                        </div>
                                    </div>

                                    <div class="content-border-wrap">
                                            <div class="content-rounded">
                                                <h6>Advance Simulation</h6>
                                                <hr class="faded-hr"/>
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
                                   
                        </div>
                        <div class="mid-space"></div>
                   
                </div>
        </section>




        <!-- interior-area -->
        <section class="bg-dark-grid"> 

            <div class="interior-container">

                <div class="section-title-wrapper" style="background:none">
                    <div class="container">
                        <div class="mid-space"></div>
                        <div class="row gallery">
                            <div class="col-md-12">
                                <h3 class="section-title font-size-28">Imitation of different clinical scenarios</h3>
                               
                                <ul class="text-white">
                                        <li>During Cardiac Complication: various pressure, heart rate , ECG rhythm and pulsation changes are all displayed on the bedside
                                        monitor. </li>
                                        <li>Respiratory complications: Changing BHD, capnogram, cyanosis, loss of consciousness, speech and various wheezing sounds. </li>
                                                <li>Respiratory introduction and monitoring: Maintenance of anesthesia, various complications and critical situations, drug overdose,
                                        inflammation, cessation of oxygen supply, failure of mechanical ventilation or NDA. </li>
                                        <li>In case of head trauma: internal injuries of the torso and limbs with various physiological reactionssuch as lack of pupils response,
                                        auscultatory pattern on left or right sides and pressure drop in case of blood loss. </li>
                                </ul>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3 wow fadeIn" data-wow-delay=".3s">
                                <div class="image-holder">
                                   
                                        <img src="{{asset ('./img/gallery/gallery-interior1.jpg')}}" alt="">
                                        <p class="text-white">Lifelike face (optional)</p>

                                </div>
                            </div>
                            <div class="col-md-3 wow fadeIn" data-wow-delay=".6s">
                                <div class="image-holder">
                                   
                                        <img src="{{asset ('./img/gallery/gallery-interior2.jpg')}}" alt="">
                                     <p class="text-white">Dark skin (optional)</p>
                                   
                                </div>
                            </div>
                            <div class="col-md-3 wow fadeIn" data-wow-delay=".9s">

                                <div class="image-holder">
                                   
                                        <img src="{{asset ('./img/gallery/gallery-interior3.jpg')}}" alt="">
                                       
                                   <p class="text-white">Various trauma modules (optional)</p>
                                </div>

                                <a href="{{asset ('./img/gallery/gallery-interior4.jpg')}}" class="image-link"></a>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                       
                    </div>
                </div>

                {{-- <div class="bg-white car-interest padding-bottom-80">
                    <div class="car-interest-wrapper">
                      
                        <img src="{{asset ('./img/gallery/interior-spacing.png')}}" alt="Interior">
                       
                        
                    </div>
                </div> --}}

            </div>

        </section>



        <!-- specs-area -->
        <section class="light-section section-block">
            <div class="section-bg-bottom" style="background-image: url({{url('./img/slider/sliderLeo.jpg')}}); background-position: 50% -102px;">
            </div>

                <div class="section-space"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center section-title-wrapper">
                            <h3 class="section-title">Key Features</h3>
                            
                        </div>
                    </div>
                    <div class="row">
                        <ul class="font-size-18">
                            <li>Wireless/Tetherless connection and up to 9 hours of Battery Life</li>
                                    <li>The most realistic face in the market</li>
                                            <li>Excellent joint mobility with realistic weight and full of articulation of extremities</li>
                                                    <li>Easy to clean/self sealing skin (perfect for moulage)</li>
                                                            <li>CT scan based airway and Highly durable</li>
                                                                    <li>Airway complications: tongue edema (2 levels), Tongue fallback, Pharyngeal obstruction, Laryngospasm)</li>
                                                                            <li>Automatic blinking, depending on the physiological state of the patient: pupils reacting to light</li>
                                                                                    <li>Use a live ECG monitor and a live defibrillator</li>
                                                                                            <li>Use a real ventilator (VCV, PCV, assist-control, SIMV, CPAP, BiPAP). 20 cm PEEP H2O, ARDS settings, realistic
                            compliance</li>
                            <li>Drug recognition system and real pharmacological responses</li>
                                    <li>Realistic chest compressions (over 1M compressions through just one torso skin)</li>
                                            <li>High quality CPR (ready for AHA 2020 guidlines)</li>
                                                    <li>Pulse synchronized with BP (14 pulses)</li>
                                                            <li>Secretions (sweat, tears, nose, mouth, ears, urine)</li>
                                                                    <li>Real-Time Tracking and analysis of CPR Performance</li>
                        </ul>
                    </div>             
                </div>
               
    
        </section>





        <div class="section-space"></div>
        <section class="page-title-wrapper">
            <div class="section-bg-bottom" style="background-image: url({{url('./img/gallery/interior-coverJunior.jpg')}});">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="page-title-inner page-title-inner-home">
                            <div class="page-title-content padding-top-75">
                                <h1>Request A Quote</h1>
                                <p>MedVision offers turnkey projects for simulation training organizations</p>
        
                                < <a href="#" id="model-feature" data-toggle="modal" data-target="#exampleModal" class="button button-sliding-icon font-size-20">Request A Quote <i class="fa fa-angle-right"></i></a> 
                                <br>
        
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

        <!-- specs-area -->
        {{-- <section class="light-section section-block">

            <div class="section-space"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center section-title-wrapper">
                        <h3 class="section-title">Features</h3>
                        <p>Key features</p>
                    </div>
                </div>
                <div class="row">
                    <div aria-multiselectable="true" class="panel-group" id="accordion_reg" role="tablist">
                        <div>
                            <table class="specs-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4>High Fidelity</h4>
                                        </th>
                                        <th>
                                            <h5>Essential</h5>
                                        </th>
                                        <th>
                                            <h5>Diesel Engine XDI 160 (115hp)</h5>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="Engine" role="tab">
                            <h4 class="panel-title"><a aria-controls="collapseOne_reg" aria-expanded="false" class="collapsed" data-parent="#accordion_reg" data-toggle="collapse" href="#Engine-view" role="button">Engine Specifications</a></h4></div>
                            <div aria-labelledby="Engine" class="panel-collapse collapse" id="Engine-view" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                <table class="specs-table">
                                    <colgroup>
                                        <col class="spec-title-col">
                                        <col>
                                        <col style="display: table-column;">
                                    </colgroup>
                                    <tbody>                                       
                                        <tr class="multi-child">
                                            <td>Engine Description</td>
                                            <td >
                                                <p>
                                                    Four-cylinder twin turbo-charged diesel engine
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    Four-cylinder twin turbo-charged diesel engine
                                                </p>
                                            </td>
                                           
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Drivetrain</td>
                                            <td >
                                                <p>
                                                    All wheel drive
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    All wheel drive
                                                </p>
                                            </td>
                                          
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Number of Cylinders</td>
                                            <td >
                                                <p>
                                                    4
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    4
                                                </p>
                                            </td>
                                           
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Displacement</td>
                                            <td >
                                                <p>
                                                    1969 cc
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    1969 cc
                                                </p>
                                            </td>
                                           
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Bore</td>
                                            <td >
                                                <p>
                                                    82 mm
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    82 mm
                                                </p>
                                            </td>
                                          
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Stroke</td>
                                            <td >
                                                <p>
                                                    93.2 mm
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    93.2 mm
                                                </p>
                                            </td>
                                           
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Max Engine Power (kW)</td>
                                            <td >
                                                <p>
                                                    165 kW
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    165 kW
                                                </p>
                                            </td>
                                           
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Horsepower</td>
                                            <td >
                                                <p>
                                                    225 hp
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    225 hp
                                                </p>
                                            </td>
                                           
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Rev at max engine power</td>
                                            <td >
                                                <p>
                                                    4250 rpm
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    4250 rpm
                                                </p>
                                            </td>
                                           
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Torque</td>
                                            <td>
                                                <p>
                                                    470 Nm
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    470 Nm
                                                </p>
                                            </td>
                                           
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Rev at max engine torque</td>
                                            <td >
                                                <p>
                                                    1750 - 2500 rpm
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    1750 - 2500 rpm
                                                </p>
                                            </td>
                                     
                                        </tr>

                                        <tr class="multi-child">
                                            <td>Fuel type</td>
                                            <td >
                                                <p>
                                                    Petrol
                                                </p>
                                            </td>
                                            <td >
                                                <p>
                                                    Diesel
                                                </p>
                                            </td>
                                          
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="Dimensions" role="tab">
                                <h4 class="panel-title"><a aria-controls="collapseOne_reg" aria-expanded="false" class="collapsed" data-parent="#accordion_reg" data-toggle="collapse" href="#Dimensions-view" role="button">Dimensions</a></h4>
                            </div>
                            <div aria-labelledby="Dimensions" class="panel-collapse collapse" id="Dimensions-view" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                <table class="specs-table">
                                    <colgroup>
                                        <col class="spec-title-col">
                                        <col>
                                        <col style="display: table-column;">
                                    </colgroup>
                                    <tbody>
                                        
                                        <tr class="multi-child">
                                            <td>Engine Description</td>
                                            <td>
                                                <p>
                                                    Four-cylinder twin turbo-charged diesel engine
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Four-cylinder twin turbo-charged diesel engine
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Drivetrain</td>
                                            <td>
                                                <p>
                                                    All wheel drive
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    All wheel drive
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Number of Cylinders</td>
                                            <td>
                                                <p>
                                                    4
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    4
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Displacement</td>
                                            <td>
                                                <p>
                                                    1969 cc
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    1969 cc
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Bore</td>
                                            <td>
                                                <p>
                                                    82 mm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    82 mm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Stroke</td>
                                            <td>
                                                <p>
                                                    93.2 mm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    93.2 mm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Max Engine Power (kW)</td>
                                            <td>
                                                <p>
                                                    165 kW
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    165 kW
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Horsepower</td>
                                            <td>
                                                <p>
                                                    225 hp
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    225 hp
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Rev at max engine power</td>
                                            <td>
                                                <p>
                                                    4250 rpm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    4250 rpm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Torque</td>
                                            <td>
                                                <p>
                                                    470 Nm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    470 Nm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Rev at max engine torque</td>
                                            <td>
                                                <p>
                                                    1750 - 2500 rpm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    1750 - 2500 rpm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Fuel type</td>
                                            <td>
                                                <p>
                                                    Petrol
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Diesel
                                                </p>
                                            </td>

                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="Weight" role="tab">
                                <h4 class="panel-title"><a aria-controls="collapseOne_reg" aria-expanded="false" class="collapsed" data-parent="#accordion_reg" data-toggle="collapse" href="#Weight-view" role="button">Weight</a></h4>
                            </div>
                            <div aria-labelledby="Weight" class="panel-collapse collapse" id="Weight-view" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                <table class="specs-table">
                                    <colgroup>
                                        <col class="spec-title-col">
                                        <col>
                                        <col style="display: table-column;">
                                    </colgroup>
                                    <tbody>

                                        <tr class="multi-child">
                                            <td>Engine Description</td>
                                            <td>
                                                <p>
                                                    Four-cylinder twin turbo-charged diesel engine
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Four-cylinder twin turbo-charged diesel engine
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Drivetrain</td>
                                            <td>
                                                <p>
                                                    All wheel drive
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    All wheel drive
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Number of Cylinders</td>
                                            <td>
                                                <p>
                                                    4
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    4
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Displacement</td>
                                            <td>
                                                <p>
                                                    1969 cc
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    1969 cc
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Bore</td>
                                            <td>
                                                <p>
                                                    82 mm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    82 mm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Stroke</td>
                                            <td>
                                                <p>
                                                    93.2 mm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    93.2 mm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Max Engine Power (kW)</td>
                                            <td>
                                                <p>
                                                    165 kW
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    165 kW
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Horsepower</td>
                                            <td>
                                                <p>
                                                    225 hp
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    225 hp
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Rev at max engine power</td>
                                            <td>
                                                <p>
                                                    4250 rpm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    4250 rpm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Torque</td>
                                            <td>
                                                <p>
                                                    470 Nm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    470 Nm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Rev at max engine torque</td>
                                            <td>
                                                <p>
                                                    1750 - 2500 rpm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    1750 - 2500 rpm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Fuel type</td>
                                            <td>
                                                <p>
                                                    Petrol
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Diesel
                                                </p>
                                            </td>

                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="Performance" role="tab">
                                <h4 class="panel-title"><a aria-controls="collapseOne_reg" aria-expanded="false" class="collapsed" data-parent="#accordion_reg" data-toggle="collapse" href="#Performance-view" role="button">Performance</a></h4>
                            </div>
                            <div aria-labelledby="Performance" class="panel-collapse collapse" id="Performance-view" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                <table class="specs-table">
                                    <colgroup>
                                        <col class="spec-title-col">
                                        <col>
                                        <col style="display: table-column;">
                                    </colgroup>
                                    <tbody>

                                        <tr class="multi-child">
                                            <td>Engine Description</td>
                                            <td>
                                                <p>
                                                    Four-cylinder twin turbo-charged diesel engine
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Four-cylinder twin turbo-charged diesel engine
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Drivetrain</td>
                                            <td>
                                                <p>
                                                    All wheel drive
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    All wheel drive
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Number of Cylinders</td>
                                            <td>
                                                <p>
                                                    4
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    4
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Displacement</td>
                                            <td>
                                                <p>
                                                    1969 cc
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    1969 cc
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Bore</td>
                                            <td>
                                                <p>
                                                    82 mm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    82 mm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Engine Stroke</td>
                                            <td>
                                                <p>
                                                    93.2 mm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    93.2 mm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Max Engine Power (kW)</td>
                                            <td>
                                                <p>
                                                    165 kW
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    165 kW
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Horsepower</td>
                                            <td>
                                                <p>
                                                    225 hp
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    225 hp
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Rev at max engine power</td>
                                            <td>
                                                <p>
                                                    4250 rpm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    4250 rpm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Torque</td>
                                            <td>
                                                <p>
                                                    470 Nm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    470 Nm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Rev at max engine torque</td>
                                            <td>
                                                <p>
                                                    1750 - 2500 rpm
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    1750 - 2500 rpm
                                                </p>
                                            </td>

                                        </tr>

                                        <tr class="multi-child">
                                            <td>Fuel type</td>
                                            <td>
                                                <p>
                                                    Petrol
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Diesel
                                                </p>
                                            </td>

                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>               
                </div>             
            </div>
            <div class="section-space"></div>

        </section> --}}



       <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Leonardo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" name="contactform" id="contactform" autocomplete="on">

                <div class="row">
                    <div class="col-md-6">
                        <input class="with-border" name="name" type="text" id="name" placeholder="Your Name"
                            required="required">
                    </div>

                    <div class="col-md-6">
                        <input class="with-border" name="email" type="email" id="email"
                            placeholder="Email Address"
                            pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"
                            required="required">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input class="with-border" name="subject" type="text" id="phone"
                            placeholder="Phone number" required="required">
                    </div>
                    <div class="col-md-6">
                            <select class="selectpicker with-border" tabindex="-98">
                                    <option>Location:</option>
                                    <option>USA</option>
                                    <option>Japan</option>
                                    <option>Europe</option>
                                    <option>Russian Federation</option>
                                </select>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                            <input class="with-border" name="institution" type="text" id="institution" placeholder="Institution"
                                required="required">
                        </div>
    
                        <div class="col-md-6">
                            <input class="with-border" name="title" type="text" id="title"
                                placeholder="Title"
                                required="required">
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="with-border" name="comments" cols="20" rows="3" id="comments"
                            placeholder="Comments" spellcheck="true" required="required"></textarea>
                    </div>
                </div>
                <div class="row margin-bottom-10">
                    <div class="col-md-12 content-between">
                            <div class="checkbox">
                                    <input type="checkbox" id="chekcboxLeo" checked="">
                                    <label for="chekcboxLeo"><span class="checkbox-icon"></span> Leonardo</label>
                                </div>
                                <div class="checkbox">
                                        <input type="checkbox" id="chekcboxArt" >
                                        <label for="chekcboxArt"><span class="checkbox-icon"></span> Arthur</label>
                                    </div>
                                    <div class="checkbox">
                                            <input type="checkbox" id="chekcboxMia" >
                                            <label for="chekcboxMia"><span class="checkbox-icon"></span> Mia</label>
                                        </div>
                                        <div class="checkbox">
                                                <input type="checkbox" id="chekcboxAus" >
                                                <label for="chekcboxAus"><span class="checkbox-icon"></span> Ausculatation</label>
                                            </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                                <img width="800" height="500" src="{{asset ('./img/post/post6.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h4 class="margin-bottom-0">Leonardo</h4>
                            <p>Human Patient Simulator</p>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="submit button margin-top-15" id="submit"
                            value="Submit Request">
                    </div>
                </div>

            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


       <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Leonardo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" name="contactform" id="contactform" autocomplete="on">

                <div class="row">
                    <div class="col-md-6">
                        <input class="with-border" name="name" type="text" id="name" placeholder="Your Name"
                            required="required">
                    </div>

                    <div class="col-md-6">
                        <input class="with-border" name="email" type="email" id="email"
                            placeholder="Email Address"
                            pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"
                            required="required">
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="with-border" name="comments" cols="20" rows="3" id="comments"
                            placeholder="Comments" spellcheck="true" required="required"></textarea>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                                <img width="800" height="500" src="{{asset ('./img/post/post6.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h4 class="margin-bottom-0">Leonardo</h4>
                            <p>Human Patient Simulator</p>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="submit button margin-top-15" id="submit"
                            value="Submit Request">
                    </div>
                </div>

            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


@endsection