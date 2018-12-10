      @extends('layouts.navbar')
      @section('content')

        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>ABOUT US</h2>
                            <ul>
                                <li><a href="{{url('pages/index')}}">Home</a></li>
                                <li>/</li>
                                <li class="active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->
        <!-- about-area start -->
        <div class="about-area ptb-100 bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="about-wrap">
                            <h3>Our Tattoos Last Longer Than Most Marriages.</h3>
                            <p>Praesent in erat risus. Cras bibendum orci pharetra vehicula hendrerit. Proin blandit lorem sed aliquet cursus. Pellentesque lobortis nunc et libero auctor, non tincidunt nisi molestie.</p>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus tincidunt pulvinar enim, eget dignissim felis facilisis ac. Sed quis vehicula nisi. Integer quis neque at sapien varius vehicula. Suspendisse auctor dapibus tempus.</p>
                            <a href="{{url('pages/about')}}">View All</a>
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
        <!-- about-area start -->
        <div class="about-area ptb-100 bg-2 about-area2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div class="about-img">
                            <img src="{{asset('assets/images/about/3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="about-wrap">
                            <h3>Our Tattoos Last Longer Than Most Marriages.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis nibh dapibus lectus pharetra, eu pellentesque quam iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis nibh dapibus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, aliquam.consectetur adipisicing elit. Vero, aliquam.dipiscing elit. Etiam mattis nibh dapibus</p>
                            <p>Integer quis sem lectus. Suspendisse ultrices odio elit. Praesent rhoncus, magna sed pulvinar aliquet, libero ligula ornare risus, eu viverra orci lorem fringilla velit. Curabitur a felis efficitur, tincidunt magna eu, accumsan eros. Nullam eget sapien dapibus, condimentum mi vitae, dapibus ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut facilisis enim velit. Integer hendrerit nisl id nulla vestibulum, eget vestibulum orci fermentum. Phasellus urna leo, auctor in elit sed, rhoncus viverra est. Integer nec venenatis mauris, nec aliquam magna.</p>
                            <a href="{{url('pages/about')}}">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end -->
        <!-- fanfact-area start -->
        <div class="fanfact-area black-opacity bg-img-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-2">
                        <div class="fanfact-wrap">
                            <div class="fanfact-content">
                                <h2>AWARD </h2>
                                <h3 class="counter">2498</h3>
                            </div>
                            <div class="fanfact-icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-2">
                        <div class="fanfact-wrap">
                            <div class="fanfact-content">
                                <h2>REVIEWS</h2>
                                <h3 class="counter">1937</h3>
                            </div>
                            <div class="fanfact-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-2">
                        <div class="fanfact-wrap">
                            <div class="fanfact-content">
                                <h2>TATTOOS </h2>
                                <h3 class="counter">5471</h3>
                            </div>
                            <div class="fanfact-icon">
                                <i class="fa fa-database"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fanfact-area end -->

        <!-- about-area start -->
        <div class="about-area ptb-100 bg-1 about-area3 about-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="about-wrap">
                            <h3>Tattoo Shop Mission </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis nibh dapibus lectus pharetra, eu pellentesque quam iaculis.</p>
                            <p>Our Tattoo And Piercing Salon Is A Real Highlight Of The Whole Industry In The American Midwest! We’ve Been Opened As A Tattoo-Centric Institution For Years. During This Period Of Time We Were Able To Create Thousands Of Awesome Tattoos And Piercing For Thousands Of Happy Clients!</p>
                            <div class="faq-wrap">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    General Inquiries
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading"   id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    How To Use
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading"   id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Shipping & Delivery
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading"   id="headingfour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                    Additional Information
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapsefour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading"   id="headingfive">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                    Additional Information
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapsefive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div class="about-img">
                            <img src="{{asset('assets/images/about/4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end -->
        <!-- testmonial-area start -->
        <div class="tetsmonial-area bg-2 ptb-130">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="test-active">
                            <div class="test-items text-center">
                                <div class="test-img">
                                    <img src="{{asset('assets/images/test/1.png')}}" alt="">
                                </div>
                                <h2>Dele Herera</h2>
                                <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum metus quis condimentum auctor. Maecenas eu urna vel turpis lacinia consectetur. Proin ornare convallis erat. <i class="fa fa-quote-right"></i> </p>
                            </div>
                            <div class="test-items text-center">
                                <div class="test-img">
                                    <img src="{{asset('assets/images/test/2.png')}}" alt="">
                                </div>
                                <h2>Alex Smit</h2>
                                <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum metus quis condimentum auctor. Maecenas eu urna vel turpis lacinia consectetur. Proin ornare convallis erat. <i class="fa fa-quote-right"></i> </p>
                            </div>
                            <div class="test-items text-center">
                                <div class="test-img">
                                    <img src="{{asset('assets/images/test/3.png')}}" alt="">
                                </div>
                                <h2>Pedro Herera</h2>
                                <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum metus quis condimentum auctor. Maecenas eu urna vel turpis lacinia consectetur. Proin ornare convallis erat. <i class="fa fa-quote-right"></i> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testmonial-area end -->

        <!-- .brand-area start -->
        <div class="brand-area bg-1 ptb-100">
            <div class="container">
                <div class="row">
                    <div class="brand-active">
                        <div class="col-xs-12">
                            <a href="#">
                                <img src="{{asset('assets/images/test/1.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12">
                            <a href="#">
                                <img src="{{asset('assets/images/test/2.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12">
                            <a href="#">
                                <img src="{{asset('assets/images/test/3.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12">
                            <a href="#">
                                <img src="{{asset('assets/images/test/4.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .brand-area end -->

        @endsection