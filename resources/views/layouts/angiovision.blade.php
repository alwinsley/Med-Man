@extends('app')

@section('content')


        
        <!-- model-area -->
        <div class="page-title-wrapper">
            <div class="section-bg" style="background-image: url({{url('./img/slider/sliderAngio.jpg')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="page-title-inner">
                            <div class="page-title-content">
                                <h1>LapVision</h1>
                                <p>Simulator for laparoscopy</p>

                              

                                <a href="#" id="model-feature" class="button button-sliding-icon font-size-20">Request A Quote <i class="fa fa-angle-right"></i></a> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- features-area -->
        <section class="dark-section section-block">

            <div class="section-space"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="features-entry">
                            

                                {{-- <h2 class="section-title">Leonardo (HF).</h2> --}}
                                <p><strong>Leonardo HF is a Human Patient Simulator of a male adult. Created in order to solve most diﬃcult tasks in specialist training: vital signs, realistic feel and feedback, increased durability are only a few of his many traits.</strong></p>
                                <p>
                                  <ul class="text-white">
                                  <li>tetherless connection (with up to 8 hours of battery life)</li>
                                  <li>rechargeable, swappable battery</li>
                                      <li> smart accessories</li>
                                      <li> a steady supply of durable consumables</li>
                                       <li>realistic, seamless skin, easy to clean and with no protruding parts</li>
                                       <li> increased durability, reliable construction</li>
                                  </ul>
                                  </p>

                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="features-entry margin-bottom-0 wow fadeInRight">
                            <div class="image-holder margin-bottom-0">

                                <img width="800" height="500" src="{{asset ('./img/post/postAngio.jpg')}}" alt="">
                               
                                <span class="project-overlay"></span>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-space"></div>

        </section>

        <!-- exterior-area -->
        <section class="white-section section-block">

            <div class="section-space"></div>
            <div class="container">
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
                                        <div class="car-interest-wrapper">
                                            <img src="{{asset ('./img/models/exteriorAngio.png')}}" alt="Model 1">
                                            <ul>
                                                <li class="interest-point" style="bottom: 24%;left: 72%;">
                                                    <a class="car-img-replace" href="#0">More</a>
                                                    <div class="car-more-info car-top">
                                                        <img class="car-more-image" src="{{asset ('./img/box/boxAngio.jpg')}}" alt=""/>
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
                                                    <a class="car-img-replace" href="#0">More</a>
                                                    <div class="car-more-info car-right">
                                                        <img class="car-more-image" src="{{asset ('./img/box/boxAngio2.jpg')}}" alt=""/>
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
                                                    <a class="car-img-replace" href="#0">More</a>
                                                    <div class="car-more-info car-left">
                                                        <img class="car-more-image" src="{{asset ('./img/box/boxAngio3.jpg')}}" alt=""/>
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

        <!-- interior-area -->
        <section class="dark-section"> 

            <div class="interior-container">

                <div class="section-title-wrapper">
                    <div class="container">
                        <div class="mid-space"></div>
                        <div class="row gallery">
                            <div class="col-md-3">
                                <h3 class="section-title font-size-28">Innovations for life</h3>
                                <p>Craft your own scenarios using our intuitive software or choose from many others, carefully created by our own simulation specialists.</p>
                            </div>
                            <div class="col-md-3 wow fadeIn" data-wow-delay=".3s">
                                <div class="image-holder">
                                   
                                        <img src="{{asset ('./img/gallery/gallery-interiorAngio.jpg')}}" alt="">

                                </div>
                            </div>
                            <div class="col-md-3 wow fadeIn" data-wow-delay=".6s">
                                <div class="image-holder">
                                   
                                        <img src="{{asset ('./img/gallery/gallery-interiorAngio2.jpg')}}" alt="">
                                     
                                   
                                </div>
                            </div>
                            <div class="col-md-3 wow fadeIn" data-wow-delay=".9s">

                                <div class="image-holder">
                                   
                                        <img src="{{asset ('./img/gallery/gallery-interiorAngio3.jpg')}}" alt="">
                                       
                                   
                                </div>

                                <a href="{{asset ('./img/gallery/gallery-interiorAngio.jpg')}}" class="image-link"></a>
                            </div>
                        </div>
                        <div class="mid-space"></div>
                    </div>
                </div>

                <div class="car-interest">
                    <div class="car-interest-wrapper">
                        <div class="interior-bg" style="background-image: url('{{asset ('./img/gallery/interior-cover.jpg')}}');"></div>
                        <img src="{{asset ('./img/gallery/interior-spacing.png')}}" alt="Interior">
                       
                    </div>
                </div>

            </div>

        </section>
        <div class="section-space"></div>
        <section class="page-title-wrapper">
            <div class="section-bg" style="background-image: url({{url('./img/slider/sliderAngio.jpg')}}); background-position: 10% 71px;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="page-title-inner page-title-inner-home">
                            <div class="page-title-content padding-top-75">
                                <h1>Request A Quote</h1>
                                <p>MedVision offers turnkey projects for simulation training organizations</p>
        
                                <a href="quote" id="model-feature" class="margin-bottom-50 button button-sliding-icon" style="width: 166px;">Get Quote <i class="fa fa-angle-right"></i></a>
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



@endsection