
<header id="header" class="main-header fullwidth">
                <div class="container">
                    <a class="main-logo" href="index.php"><img src="{{ asset('./img/medVisionlogo.png') }}"
                            data-sticky-logo="{{ asset ('./img/medVisionlogo.png') }}"
                            data-transparent-logo="{{ asset ('./img/medVisionlogo_wht.png') }}" alt=""></a>
                    <ul class="header-buttons">
                        <li class="dropdown">
                            <a class="user-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i
                                    class="fa fa-user-circle" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile Settings</a></li>
                                <li><a href="#">My Appointment</a></li>
                                <li><a href="#">Sign Out</a></li>
                            </ul>
                        </li>
                        <li><a class="search-trigger">Search<span></span></a></li>
                        <li><a class="nav-trigger">Menu<span></span></a></li>
                    </ul>
                    <nav class="nav">
                        <ul id="primary-nav" class="primary-nav is-fixed">
                            <li class="has-children">
                                <a>The Family</a>
                                <ul class="nav-gallery is-hidden">
                                    <li class="nav-drop-close"></li>
                                    <li class="go-back"><a href="#0">Menu</a></li>
                                    <li class="see-all"><a href="products">All Products</a></li>

                                    <li>
                                        <a class="nav-item" href="leonardo">
                                            <img class="image-holder" src="{{asset ('./img/models/model1-menu.png') }}"
                                                alt="LEONARDO">
                                            <h3>LEONARDO</h3>
                                            <p class="price">High Fidelity<br /><small> Simulator of a
                                                    male adult.</small></p>
                                            <p class="tech">
                                                View LEONARDO
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item" href="junior">
                                            <img class="image-holder" src="{{asset ('./img/models/model2-menu.png') }}"
                                                alt="JUNIOR">
                                            <h3>JUNIOR</h3>
                                            <p class="price">Pediatric<br /><small>Simulator of a 5 - 8 yr old</small>
                                            </p>
                                            <p class="tech">
                                                View JUNIOR
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-item" href="mia">
                                            <img class="image-holder" src="{{asset ('./img/models/model3-menu.png') }}" alt="MIA">
                                            <h3>MIA</h3>
                                            <p class="price">Baby<br /><small>Simulator of small infant </small></p>
                                            <p class="tech">
                                                View MIA
                                            </p>
                                        </a>
                                    </li>

                                    <li>
                                            <a class="nav-item" href="auscultation">
                                                <img class="image-holder" src="{{asset ('./img/models/model8-menu.png') }}" alt="auscultation">
                                                <h3>AUSCULTATION</h3>
                                                <p class="price">Auscultation
                                                    <br /><small>Auscultation simulator</small></p>
                                                <p class="tech">
                                                    View MIA
                                                </p>
                                            </a>
                                        </li>
                                </ul>
                            </li>





                            <li class="has-children">
                                    <a>Surgical</a>
                                    <ul class="nav-gallery is-hidden">
                                        <li class="nav-drop-close"></li>
                                        <li class="go-back"><a href="#0">Menu</a></li>
                                        <li class="see-all"><a href="listings.html">All Products</a></li>
    
                                        <li>
                                            <a class="nav-item" href="lapvision">
                                                <img class="image-holder" src="{{asset ('./img/models/model4-menu.png') }}"
                                                    alt="LapVision">
                                                <h3>LapVision</h3>
                                                <p class="price">Laparoscopic Instruments</p>
                                                <p class="tech">
                                                    View LapVision
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-item" href="angiovision">
                                                <img class="image-holder" src="{{asset ('./img/models/model5-menu.png') }}"
                                                    alt="AngioVision">
                                                <h3>AngioVision</h3>
                                                <p class="price">Endovascular procedures
                                                </p>
                                                <p class="tech">
                                                    View AngioVision
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-item" href="hystvision">
                                                <img class="image-holder" src="{{asset ('./img/models/model6-menu.png') }}" alt="HystVision">
                                                <h3>HystVision</h3>
                                                <p class="price">Resectoscope for hysteroscopy</p>
                                                <p class="tech">
                                                    View HystVision
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                                <a class="nav-item" href="endovision">
                                                    <img class="image-holder" src="{{asset ('./img/models/model7-menu.png') }}" alt="EndoVision">
                                                    <h3>EndoVision</h3>
                                                    <p class="price">Endoscopy instruments</p>
                                                    <p class="tech">
                                                        View EndoVision
                                                    </p>
                                                </a>
                                            </li>
                                    </ul>
                                </li>


                           
                            <li><a href="manuals">Manuals</a></li>
                            {{-- <li><a href="pages-about.html">Events</a></li> --}}
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </nav>
                    <div id="search" class="search">
                        <form>
                            <input type="search" placeholder="Search keywords">
                        </form>
                    </div>

                </div>
            </header>