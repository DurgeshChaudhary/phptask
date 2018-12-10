  @extends('layouts.navbar')
  @section('content')


 <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>Blog</h2>
                            <ul>
                                <li><a href="{{url('pages/index')}}">Home</a></li>
                                <li>/</li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- blog-area start -->
        <div class="blog-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-6">
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
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="blog-wrap">
                            <div class="blog-img">
                                <img src="{{asset('assets/images/blog/1.png')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> June, 23, 2017</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 10</a></li>
                                </ul>
                                <h3>mi vehicula dapibus</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
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
                                <h3>tincidunt ante teger</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="{{url('pages/blog-details')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
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
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="blog-wrap">
                            <div class="blog-img">
                                <img src="{{asset('assets/images/blog/3.png')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> June, 23, 2017</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 4</a></li>
                                </ul>
                                <h3>tincidunt ante teger</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
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
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="{{url('pages/blog-details')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="pagination-wrap text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li> <span>3</span></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area end -->

        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>Blog</h2>
                            <ul>
                                <li><a href="{{url('pages/index')}}">Home</a></li>
                                <li>/</li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- blog-area start -->
        <div class="blog-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="blog-wrap">
                            <div class="blog-img">
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 4</a></li>
                                </ul>
                                <h3>teger eget erat</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="blog-wrap">
                            <div class="blog-img">
                                <img src="{{asset('assets/images/blog/2.png')}}" alt="">
                                <img src="" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> June, 23, 2017</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 10</a></li>
                                </ul>
                                <h3>mi vehicula dapibus</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="blog-wrap">
                                <img src="{{asset('assets/images/blog/3.png')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> June, 23, 2017</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 4</a></li>
                                </ul>
                                <h3>tincidunt ante teger</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="{{url('pages/blog-details')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
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
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="{{url('pages/blog-details')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="blog-wrap">
                            <div class="blog-img">
                                <img src="{{asset('assets/images/blog/3.png')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> June, 23, 2017</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 4</a></li>
                                </ul>
                                <h3>tincidunt ante teger</h3>
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
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
                                <p>Condimentum tincidunt ante. teger eget erat ut mi vehicula dapibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="{{url('pages/blog-details')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="pagination-wrap text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li> <span>3</span></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area end -->
@endsection
       