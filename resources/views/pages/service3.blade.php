        @extends('layouts.navbar')
        @section('content')


        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>Service Three</h2>
                            <ul>
                                <li><a href="{{url('pages/index')}}">Home</a></li>
                                <li>/</li>
                                <li class="active">Service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- service-page start -->
        <div class="service-page-area bg-1 ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="service-page-wrap">
                            <h3>Starting the Linework</h3>
                            <p>Integer vel laoreet erat, sed pharetra lorem. Donec suscipit dui in tempus accumsan. Morbi interdum purus purus, in vestibulum nisl accumsan pellentesque. Suspendisse maximus varius diam in tempus. Sed pellentesque fringilla tortor, vitae ullamcorper ex convallis consectetur. Vestibulum</p>
                            <p>lacinia ante. Nam in lacinia ligula. Pellentesque feugiat dolor in nulla ultrices vestibulum. Etiam imperdiet dictum sem ut ullamcorper. Nulla at libero facilisis urna cursus lacinia sed sit amet justo. Quisque auctor volutpat orci a elementum. Morbi tristique eleifend neque, id ultrices ipsum mattis at. Aliquam erat volutpat. Vivamus ornare nulla ligula, quis pretium urna auctor rhoncus.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="service-page-wrap">
                            <h3>Dressing and Bandaging</h3>
                            <p>Integer vel laoreet erat, sed pharetra lorem. Donec suscipit dui in tempus accumsan. Morbi interdum purus purus, in vestibulum nisl accumsan pellentesque. Suspendisse maximus varius diam in tempus. Sed pellentesque fringilla tortor, vitae ullamcorper ex convallis consectetur. Vestibulum</p>
                            <p>lacinia ante. Nam in lacinia ligula. Pellentesque feugiat dolor in nulla ultrices vestibulum. Etiam imperdiet dictum sem ut ullamcorper. Nulla at libero facilisis urna cursus lacinia sed sit amet justo. Quisque auctor volutpat orci a elementum. Morbi tristique eleifend neque, id ultrices ipsum mattis at. Aliquam erat volutpat. Vivamus ornare nulla ligula, quis pretium urna auctor rhoncus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service-page end -->

        <!-- we-do-area start -->
        <div class="wedo-area bg-2 wedo-area2 wedo-area3 pt-100">
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
                    <div class="hidden-md col-lg-6 hidden-sm hidden-xs">
                        <div class="wedo-img">
                            <img src="{{asset('assets/images/img3.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-2 col-sm-6 col-xs-12">
                                <div class="wedo-wrap">
                                    <div class="wedo-icon">
                                        <span class="flaticon-tatoo-machine"></span>
                                    </div>
                                    <div class="wedo-info">
                                        <h3>Tattooing</h3>
                                        <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-2 col-sm-6 col-xs-12">
                                <div class="wedo-wrap">
                                    <div class="wedo-icon">
                                        <span class="flaticon-needle"></span>
                                    </div>
                                    <div class="wedo-info">
                                        <h3>Tattoo Design</h3>
                                        <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-2 col-sm-6 col-xs-12">
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
                            <div class="col-lg-6 col-md-4 col-2 col-sm-6 col-xs-12">
                                <div class="wedo-wrap">
                                    <div class="wedo-icon">
                                        <span class="flaticon-chair"></span>
                                    </div>
                                    <div class="wedo-info">
                                        <h3>Piercing</h3>
                                        <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-2 col-sm-6 col-xs-12">
                                <div class="wedo-wrap">
                                    <div class="wedo-icon">
                                        <span class="flaticon-rose"></span>
                                    </div>
                                    <div class="wedo-info">
                                        <h3>Laser Removal</h3>
                                        <p>Aliquam pulvinar, leo ac onvallis dictum, eros ex euismod lacus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-2 col-sm-6 col-xs-12">
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
            </div>
        </div>
        <!-- we-do-area end -->

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

        <!-- work-proces-area start -->
        <div class="work-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Our Working Process</h2>
                            <p> Sed vitae sem feugiat, condimentum ligula at, rhoncus purus. In volutpat in metus sit amet porta. 
Vestibulum eget lorem vitae lectus luctus consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 col-2">
                        <div class="work-wrap">
                            <i class="fa fa-paint-brush"></i>
                            <h3>Choose A Design</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col-2">
                        <div class="work-wrap">
                            <i class="fa fa-plane"></i>
                            <h3>Think About Placement</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col-2">
                        <div class="work-wrap">
                            <i class="fa fa-users"></i>
                            <h3>Get The Tattoo</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col-2">
                        <div class="work-wrap">
                            <i class="fa fa-rocket"></i>
                            <h3>The Finished Tattoo</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- work-proces-area end -->
        @endsection