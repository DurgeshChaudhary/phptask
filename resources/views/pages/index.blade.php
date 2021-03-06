@extends('layouts.navbar')
@section('content')

        <!-- slider-area start -->
        <div class="slider-area">
            <div class="slider-active">
                <div class="slider-items">
                    <img src="{{asset('assets/images/slider/1.jpg')}}" alt="slider" class="slider">
                    <div class="single-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-10 col-xs-12">
                                    <h2>We Provide Forever.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue porttitor felis, iaculis consectetur tortor varius vitae. </p>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-items">
                    <img src="{{asset('assets/images/slider/2.jpg')}}" alt="slider" class="slider">
                    <div class="single-slider single-slider2">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-10 col-xs-12 col-md-7 col-md-offset-5 text-right">
                                    <h2>We Provide Forever.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue porttitor felis, iaculis consectetur tortor varius vitae. </p>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-items">
                    <img src="{{asset('assets/images/slider/3.jpg')}}" alt="slider" class="slider">
                    <div class="single-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-10 col-xs-12">
                                    <h2>We Provide Forever.</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue porttitor felis, iaculis consectetur tortor varius vitae. </p>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-area end -->
        
        <!-- about-area start -->
        <div class="about-area ptb-130 bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="section-title text-center">
                            <h2>About Us</h2>
                            <p> Sed vitae sem feugiat, condimentum ligula at, rhoncus purus. In volutpat in metus sit amet porta. 
Vestibulum eget lorem vitae lectus luctus consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="about-wrap">
                            <h3>Our Tattoos Last Longer Than Most Marriages.</h3>
                            <p>Praesent in erat risus. Cras bibendum orci pharetra vehicula hendrerit. Proin blandit lorem sed aliquet cursus. Pellentesque lobortis nunc et libero auctor, non tincidunt nisi molestie.</p>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus tincidunt pulvinar enim, eget dignissim felis facilisis ac. Sed quis vehicula nisi. Integer quis neque at sapien varius vehicula. Suspendisse auctor dapibus tempus.</p>
                            <a href="about.html">View All</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 hidden-xs">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 ">
                                <div class="about-img">
                                    <img src="{{asset('assets/images/about/1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 hidden-sm">
                                <div class="about-img">
                                    <img src="{{asset('assets/images/about/2.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end -->
        <!-- we-do-area start -->
        <div class="wedo-area ptb-130 bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="section-title text-center">
                            <h2>What We Do</h2>
                            <p> Sed vitae sem feugiat, condimentum ligula at, rhoncus purus. In volutpat in metus sit amet porta. 
Vestibulum eget lorem vitae lectus luctus consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="wedo-wrap mb-30">
                            <div class="wedo-icon">
                                <span class="flaticon-tatoo-machine"></span>
                            </div>
                            <div class="wedo-info">
                                <h3>Tattooing</h3>
                                <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                            </div>
                        </div>
                        <div class="wedo-wrap mb-30">
                            <div class="wedo-icon">
                                <span class="flaticon-needle"></span>
                            </div>
                            <div class="wedo-info">
                                <h3>Tattoo Design</h3>
                                <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                            </div>
                        </div>
                        <div class="wedo-wrap">
                            <div class="wedo-icon">
                                <span class="flaticon-cleaning-brush"></span>
                            </div>
                            <div class="wedo-info">
                                <h3>Tattoo Removal</h3>
                                <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="wedo-img">
                            <img src="assets/images/wedo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="wedo-wrap mb-30">
                            <div class="wedo-icon">
                                <span class="flaticon-chair"></span>
                            </div>
                            <div class="wedo-info">
                                <h3>Piercing</h3>
                                <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                            </div>
                        </div>
                        <div class="wedo-wrap mb-30">
                            <div class="wedo-icon">
                                <span class="flaticon-rose"></span>
                            </div>
                            <div class="wedo-info">
                                <h3>Laser Removal</h3>
                                <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                            </div>
                        </div>
                        <div class="wedo-wrap">
                            <div class="wedo-icon">
                                <span class="flaticon-soap-1"></span>
                            </div>
                            <div class="wedo-info">
                                <h3>Henna Design</h3>
                                <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- we-do-area end -->

        <!-- project-area start -->
        <div class="project-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Our Latest Tattoos</h2>
                            <p> Sed vitae sem feugiat, condimentum ligula at, rhoncus purus. In volutpat in metus sit amet porta. 
Vestibulum eget lorem vitae lectus luctus consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="project-menu">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".cat1">Body Design</button>
                            <button data-filter=".cat2">Hand Design</button>
                            <button data-filter=".cat3">Lag Design</button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-2  cat3 cat2 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{asset('assets/images/project/1.jpg')}}" alt="">
                            <a href="{{asset('assets/images/project/1.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat2 cat3 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{asset('assets/images/project/2.jpg')}}" alt="">
                            <a href="{{url('assets/images/project/2.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat1 cat2 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{asset('assets/images/project/3.jpg')}}" alt="">
                            <a href="{{url('assets/images/project/3.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat3 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{asset('assets/images/project/4.jpg')}}" alt="">
                            <a href="{{url('assets/images/project/4.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat2 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{asset('assets/images/project/5.jpg')}}" alt="">
                            <a href="{{url('assets/images/project/5.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat1 cat3 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{asset('assets/images/project/6.jpg')}}" alt="">
                            <a href="{{url('assets/images/project/6.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat3 cat1 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{asset('assets/images/project/7.jpg')}}" alt="">
                            <a href="{{url('assets/images/project/7.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat1 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{asset('assets/images/project/8.jpg')}}" alt="">
                            <a href="{{url('assets/images/project/8.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- project-area end -->

        <!-- team-area strat -->
        <div class="team-area bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Our Latest Tattoos</h2>
                            <p> Sed vitae sem feugiat, condimentum ligula at, rhoncus purus. In volutpat in metus sit amet porta. 
Vestibulum eget lorem vitae lectus luctus consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{asset('assets/images/team/1.jpg')}}" alt="">
                                <div class="team-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Marshal Jcob</h3>
                                <p>Tattoo Design Expart</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{asset('assets/images/team/2.jpg')}}" alt="">
                                <div class="team-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Aundre Alexa</h3>
                                <p>Tattoo Design Expart</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="assets/images/team/3.jpg" alt="">
                                <div class="team-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Xavir Flintof</h3>
                                <p>Tattoo Design Expart</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{asset('assets/images/team/4.jpg')}}" alt="">
                                <div class="team-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Micky Frade</h3>
                                <p>Tattoo Design Expart</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team-area end -->

        <!-- discount-area start -->
        <div class="discount-area parallax black-opacity"  data-speed="5" data-bg-image="assets/images/bg/5.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="discount-wrap text-center">
                            <h2>Get 30% Off Your Body Massage</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, ratione odio, quis voluptatem aperiam natus iure aliquam illo et in culpa harum. Dicta hic, eos.</p>
                            <a href="#">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- discount-area end -->

        <!-- pricing-area start -->
        <div class="pricing-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Our Pack</h2>
                            <p> Sed vitae sem feugiat, condimentum ligula at, rhoncus purus. In volutpat in metus sit amet porta. 
Vestibulum eget lorem vitae lectus luctus consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="pricing-wrap text-center">
                            <div class="pricing-content">
                                <h2>Silver</h2>
                                <h3>$52</h3>
                            </div>
                            <ul>
                                <li>Body Design </li>
                                <li>Hand Design</li>
                                <li>Leg Design</li>
                                <li>Henna Design</li>
                                <li><del>Tattoo In Ear </del></li>
                                <li><del>Tattoo In Lips</del></li>
                                <li><del>Body Modification </del></li>
                                <li><del>Tattoo Removing</del></li>
                            </ul>
                            <button>Choose Your Pack</button>
                        </div>
                    </div>
                    <div class="col-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="pricing-wrap text-center active">
                            <div class="pricing-content">
                                <h2>Dimond</h2>
                                <h3>$125</h3>
                            </div>
                            <ul>
                                <li>Body Design </li>
                                <li>Hand Design</li>
                                <li>Leg Design</li>
                                <li>Henna Design</li>
                                <li>Tattoo In Ear </li>
                                <li>Tattoo In Lips</li>
                                <li>Body Modification</li>
                                <li>Tattoo Removing</li>
                            </ul>
                            <button>Choose Your Pack</button>
                        </div>
                    </div>
                    <div class="col-2 col-md-4 col-sm-6 col-xs-12">
                        <div class="pricing-wrap text-center">
                            <div class="pricing-content">
                                <h2>Golden</h2>
                                <h3>$95</h3>
                            </div>
                            <ul>
                                <li>Body Design </li>
                                <li>Hand Design</li>
                                <li>Leg Design</li>
                                <li>Henna Design</li>
                                <li><del>Tattoo In Ear </del></li>
                                <li><del>Tattoo In Lips</del></li>
                                <li><del>Body Modification </del></li>
                                <li><del>Tattoo Removing</del></li>
                            </ul>
                            <button>Choose Your Pack</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pricing-area end -->


        <!-- booknow-area start -->
        <div class="book-now-area black-opacity bg-img-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="booknow-wrap">
                            <div class="section-title">
                                <h2>Book Your Pack</h2>
                                <p> Sed vitae sem feugiat, condimentum ligula at, rhoncus purus. 
In volutpat in metus sit amet porta.</p>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                        <p>First Name</p>
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                        <p>Last Name</p>
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                        <p>Select Date</p>
                                        <select>
                                            <option value="Select Date">Select Date</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                        <p>Time</p>
                                        <select>
                                            <option value="Select Time">Select Time</option>
                                            <option value="12.30">12.30</option>
                                            <option value="1.30">1.30</option>
                                            <option value="2.30">2.30</option>
                                            <option value="3.30">3.30</option>
                                            <option value="4.30">4.30</option>
                                            <option value="5.30">5.30</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                        <p>Email</p>
                                        <input type="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                        <p>Choose Your Pack</p>
                                        <select>
                                            <option value="Choose Your Pack">Choose Your Pack</option>
                                            <option value="Tattooing">Tattooing</option>
                                            <option value="Piercing">Piercing</option>
                                            <option value="Tattoo Design">Tattoo Design</option>
                                            <option value="Laser Removal">Laser Removal</option>
                                            <option value="Tattoo Removal">Tattoo Removal</option>
                                            <option value="Henna Design">Henna Design</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12">
                                        <button>Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1 hidden-sm hidden-xs">
                        <div class="booknow-img">
                            <img src="{{asset('assets/images/img1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- booknow-area end -->

        <!-- blog-area start -->
        <div class="blog-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Latest News</h2>
                            <p> Sed vitae sem feugiat, condimentum ligula at, rhoncus purus. In volutpat in metus sit amet porta. 
Vestibulum eget lorem vitae lectus luctus consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="blog-wrap">
                            <div class="blog-img">
                                <img src="{{asset('assets/images/blog/1.png')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> June, 23, 2017</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 4</a></li>
                                </ul>
                                <h3>teger eget erat</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="blog-wrap">
                            <div class="blog-img">
                                <img src="{{asset('assets/images/blog/2.png')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> June, 23, 2017</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 10</a></li>
                                </ul>
                                <h3>mi vehicula dapibus</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="blog-wrap">
                            <div class="blog-img">
                                <img src="assets/images/blog/3.png" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> June, 23, 2017</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 4</a></li>
                                </ul>
                                <h3>tincidunt ante teger</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="blog-wrap">
                            <div class="blog-img">
                                <img src="{{asset('assets/images/blog/4.png')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> June, 23, 2017</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 4</a></li>
                                </ul>
                                <h3>condimentum ligula</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area end -->
        @endsection

       