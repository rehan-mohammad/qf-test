@extends('layouts.default')
@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-black">Breadcrumb</a></li>
            <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
        </ol>
    </nav>
    <div class="container">
    <div class="main-product row">
        <div class="col-6 product-gallery">
            <div class="swiper gallery-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{url('storage/images/product/sofa-main.png')}}" alt="Sofa Main"/></div>
                    <div class="swiper-slide"><img src="{{url('storage/images/product/sofa-main.png')}}" alt="Sofa 2"/></div>
                    <div class="swiper-slide"><img src="{{url('storage/images/product/sofa-main.png')}}" alt="Sofa 3"/></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper gallery-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{url('storage/images/product/sofa-main.png')}}" alt="Sofa Main"/></div>
                    <div class="swiper-slide"><img src="{{url('storage/images/product/sofa-main.png')}}" alt="Sofa 2"/></div>
                    <div class="swiper-slide"><img src="{{url('storage/images/product/sofa-main.png')}}" alt="Sofa 3"/></div>
                </div>
            </div>
        </div>
        <div class="col-6 product-info">
            <h1>Product Title</h1>
        </div>
    </div>
    </div>

    <script>
        window.onload = function(){
            const swiper = new Swiper('.gallery-slider', {
                spaceBetween: 15,
                slidesPerView: 1,
                centeredSlides: true,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            const thumbs = new Swiper ('.gallery-thumbs', {
                slidesPerView: 3,
                spaceBetween: 10,
                centeredSlides: true,
                loop: true,
                slideToClickedSlide: true,
            });

            swiper.controller.control = thumbs;
            thumbs.controller.control = swiper;
        }
    </script>
@stop
