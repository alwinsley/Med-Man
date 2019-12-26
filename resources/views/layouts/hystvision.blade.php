@extends('app')

@section('content')


        
        <!-- model-area -->
        <div class="page-title-wrapper">
            <div class="section-bg" style="background-image: url({{url('./img/slider/slider-model.jpg')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="page-title-inner">
                            <div class="page-title-content">
                                <h1>LEONARDO</h1>
                                <p>The adventure was never so attractive.</p>

                                <div class="stats">
                                    <div class="stat">
                                        <div class="value">3,9 <small>l/100km</small></div>
                                        <div class="label">FUEL CONSUMPTION</div>
                                        <div class="divide"></div>
                                    </div>
                                    <div class="stat">
                                        <div class="value"><small>$</small>21.300</div>
                                        <div class="label">START PRICE</div>
                                        <div class="divide"></div>
                                    </div>
                                    <div class="stat">
                                        <div class="value">101 <small>g/km</small></div>
                                        <div class="label">AVERAGE CO2 SWING</div>
                                    </div>
                                </div>

                                <a href="#" id="model-feature" class="button button-sliding-icon">Discover <i class="fa fa-angle-right"></i></a> 

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
                            <div class="image-holder">

                                <h2 class="section-title">Fasten your belt! <br>Model 1 is ready to take you to places you've never been before.</h2>
                                <p><strong>He seduces you with his provocative look.</strong></p>
                                <p>Offers a dynamic driving experience for those with a lively design and high-end safety features. .</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="features-entry margin-bottom-0 wow fadeInRight">
                            <div class="image-holder margin-bottom-0">

                                <img width="800" height="500" src="{{asset ('./img/post/post6.jpg')}}" alt="">
                               
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
                        <h3 class="section-title">Exterior Design</h3>
                        <p>He seduces you with his provocative look.</p>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-gallery">
                             
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#feature" aria-controls="feature" role="tab" data-toggle="tab">Features</a></li>
                                <li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab" data-action="gallery">Gallery</a></li>
                            </ul>
                              
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="feature">
                                    <div class="car-interest">
                                        <div class="car-interest-wrapper">
                                            <img src="{{asset ('./img/models/exterior.png')}}" alt="Model 1">
                                            <ul>
                                                <li class="interest-point" style="bottom: 62%;left: 38%;">
                                                    <a class="car-img-replace" href="#0">More</a>
                                                    <div class="car-more-info car-top">
                                                        <img class="car-more-image" src="{{asset ('./img/box/box2.jpg')}}" alt=""/>
                                                        <h3>Performance</h3>
                                                        <p>
                                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        </p>
                                                        <a href="#0" class="interest-close-info car-img-replace">Close</a>
                                                    </div>
                                                </li> 

                                                <li class="interest-point" style="top: 44%; left: 46%;">
                                                    <a class="car-img-replace" href="#0">More</a>
                                                    <div class="car-more-info car-right">
                                                        <img class="car-more-image" src="{{asset ('./img/box/box3.jpg')}}" alt=""/>
                                                        <h3>Comfort</h3>
                                                        <p>
                                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        </p>
                                                        <a href="#0" class="interest-close-info car-img-replace">Close</a>
                                                    </div>
                                                </li> 

                                                <li class="interest-point" style="top: 32%;right: 1%;">
                                                    <a class="car-img-replace" href="#0">More</a>
                                                    <div class="car-more-info car-left">
                                                        <img class="car-more-image" src="{{asset ('./img/box/box1.jpg')}}" alt=""/>
                                                        <h3>Headlight</h3>
                                                        <p>
                                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        </p>
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
                            <div class="col-md-6">
                                <h3 class="section-title">Hidden in his intelligence.</h3>
                                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                            </div>
                            <div class="col-md-2 wow fadeIn" data-wow-delay=".3s">
                                <div class="image-holder">
                                    <a href="{{asset ('./img/gallery/gallery-interior1.jpg')}}" class="image-link">
                                        <img src="{{asset ('./img/gallery/gallery-interior1.jpg')}}" alt="">
                                        <div class="car-overlay">
                                            <span class="link-holder">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 wow fadeIn" data-wow-delay=".6s">
                                <div class="image-holder">
                                    <a href="{{asset ('./img/gallery/gallery-interior2.jpg')}}" class="image-link">
                                        <img src="{{asset ('./img/gallery/gallery-interior2.jpg')}}" alt="">
                                        <div class="car-overlay">
                                            <span class="link-holder">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 wow fadeIn" data-wow-delay=".9s">

                                <div class="image-holder active">
                                    <a href="{{asset ('./img/gallery/gallery-interior3.jpg')}}" class="image-link">
                                        <img src="{{asset ('./img/gallery/gallery-interior3.jpg')}}" alt="">
                                        <div class="car-overlay">
                                            <span class="link-holder">
                                                View Gallery
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <a href="{{asset ('./img/gallery/gallery-interior4.jpg')}}" class="image-link"></a>
                            </div>
                        </div>
                        <div class="mid-space"></div>
                    </div>
                </div>

                <div class="car-interest">
                    <div class="car-interest-wrapper">
                        <div class="interior-bg" style="background-image: url('{{asset ('./img/gallery/interior-cover.jpg')}}');"></div>
                        <img src="{{asset ('./img/gallery/interior-spacing.png')}}" alt="Interior">
                        <ul>
                            <li class="interest-point" style="top: 20%; left: 77%;">
                                <a class="car-img-replace" href="#0">More</a>
                                <div class="car-more-info car-bottom">
                                    <img class="car-more-image" src="{{asset ('./img/gallery/gallery-interior2.jpg')}}" alt=""/>
                                    <h3>Comfort</h3>
                                    <p>
                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                    </p>
                                    <a href="#0" class="interest-close-info car-img-replace">Close</a>
                                </div>
                            </li>

                            <li class="interest-point" style="top: 29%; left: 50%;">
                                <a class="car-img-replace" href="#0">More</a>
                                <div class="car-more-info car-bottom">
                                    <img class="car-more-image" src="{{asset ('./img/gallery/gallery-interior1.jpg')}}" alt=""/>
                                    <h3>Performance</h3>
                                    <p>
                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                    </p>
                                    <a href="#0" class="interest-close-info car-img-replace">Close</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <!-- specs-area -->
        <section class="light-section section-block">

            <div class="section-space"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center section-title-wrapper">
                        <h3 class="section-title">Technicial Specifications</h3>
                        <p>He seduces you with his provocative look.</p>
                    </div>
                </div>
                <div class="row">
                    <div aria-multiselectable="true" class="panel-group" id="accordion_reg" role="tablist">
                        <div>
                            <table class="specs-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4>MODEL</h4>
                                        </th>
                                        <th>
                                            <h5>Gasoline XCI 160 (128hp)</h5>
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

        </section>



@endsection