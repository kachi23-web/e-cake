@extends('layouts.frontend')

@section('title')
{{-- {{ $cate->name }} --}}
@endsection

@section('content')

<!-- Hero Section Begin -->
{{--  <section class="hero"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Cakes Gallery</span>
                    </div>
                    <ul>
                        <li><a href="view-category/Wedding%20Cakes">Wedding Cakes</a></li>
                        <li><a href="view-category/Birthday%20Cakes">celebration Cakes</a></li>
                        {{-- <ul>
                            <li><a hrf="#">Birthday Cakes</a></li>
                            <li><a hrf="#">Anniversary Cakes</a></li>
                            <li><a hrf="#">Graduation Cakes</a></li>
    
                        </ul> 
                        
                        <li><a href="view-category/Queens%20Cakes">Queens Cakes</a></li>
                        <li><a href="view-category/Small%20Chops">Small Chops</a></li>
                        <li><a href="view-category/Desert">Desert </a></li>
                        <li><a href="view-category/parfait">parfait</a></li>
                        <li><a href="view-category/Drinks">Drinks</a></li>
                        <li><a href="view-category/Snack">Snack</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                           
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                 <div class="container">
                        
                  <div class="hero__item set-bg" data-setbg="{{ asset('frontend/image/cake.jpg') }}">
                    <div class="row">
                    <h3><b><div class="col-md-8 centered"> LILIANS CAKE</div></b></h3>
                </div>
                
                    <div class="col-md-2 hero__text">  
                        <a href="#" class="primary-btn">ORDER NOW</a>
                    </div>
                </div>
                </div> 
             </div>
            </div>
        </div>
    </div>
</section>--}}
<section class="hero"> 

    @include('layouts.partials.sidebar')
</section>
<!-- Hero Section End -->



        <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($trending_category as $cate)
                            <div class="col-lg-3">
                                {{-- <a href="{{ url('category/'.$cate->slug.'/'.$prod->slug ) }}"> --}}
                                <a href="{{ url('category/'.$cate->slug) }}">
                            <div class="categories__item set-bg " data-setbg="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="product image">
                            <h5>{{ $cate->name }}</a></h5>
                        </div>
                
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 style="color: #dd1f58;">Cake Varieties</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".weddingCake">Wedding Cake</li>
                            <li data-filter=".birthdayCake">Birthday Cake</li>
                            <li data-filter=".deserts">Deserts</li>
                            <li data-filter=".chops">Small chops</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix weddingCake birthdayCake">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/image/cake.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">delicious cakes</a></h6>
                            <h5>&#8358 12000.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix deserts chops">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/image/pinkcake.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">delicious cakes</a></h6>
                            <h5>&#8358 13500.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix deserts birthdayCake">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/image/chocolate.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">delicious cakes</a></h6>
                            <h5>&#8358 17000.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix chops weddingCake">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/image/cake-ideas-19.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">delicious cakes</a></h6>
                            <h5>&#8358 2000.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm6 mix birthdayCake deserts">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/image/pumpkin.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">delicious cakes</a></h6>
                            <h5>&#8358 12000.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix weddingCake chops">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/image/Meringue-Cake.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">delicious cakes</a></h6>
                            <h5>&#8358 45000.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm6 mix birthdayCake deserts">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/image/butter.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">delicious cakes</a></h6>
                            <h5>&#8358 4000.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix chops deserts">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/image/raspberry.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">delicious cakes</a></h6>
                            <h5>&#8358 30000.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('frontend/image/banner/banner-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('frontend/image/banner/banner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    {{-- <div class="py-5"> 
        <div class="container">
            <div class="row">
                <h2>Trending Category</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $category)
                    <div class="item col-md-6">
                       <div class="col-md-3 mt-3"> 
                        <div class="card">
                            <img src="{{ asset('assets/uploads/products/'.$category->image) }}"  alt="category image">
                            <div class="card-body">
                                <h5>{{ $category->name }}</h5>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    {{-- </div>
    </div> --}}
    
    

    @endsection



