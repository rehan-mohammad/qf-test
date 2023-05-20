@extends('layouts.default')
@section('content')
    <div class="container px-5 py-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-black">Breadcrumb</a></li>
            <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
        </ol>
    </nav>
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
            <h1 class="product-title">Montreal Leather Sofa</h1>
            <span class="price"><span class="current-price">£649.00</span>&nbsp;<span class="old-price">£949.00</span></span>
            <div class="colour-options">
                <div class="mt-4 mb-2">Colour: <span class="selected-colour fw-semibold"></span></div>
                <ul class="nav nav-pills">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" href="#">Tan</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">Black</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">Grey</a>
                    </li>
                </ul>
            </div>
            <div class="size-selection">
                <div class="mt-4 mb-2">Size:</div>
                <select id="sizeDropdown" class="form-select rounded-4 py-2 px-4" aria-label="Size">
                    <option value="2-seater" selected>2 Seater</option>
                    <option value="3-seater">3 Seater</option>
                    <option value="corner">Corner</option>
                </select>
            </div>
            <div class="size-guide mt-4 mb-2">
                <a id="sizeGuideLink" class="text-black" href="#sizeGuide">Size Guide</a>
            </div>
            <div class="add-to-cart mt-4">
                <button id="addToCart" class="btn btn-dark py-3 px-4 w-100">Add to Basket</button>
            </div>
        </div>
    </div>
    </div>
    <div class="px-5 py-4 product-info-nav">
        <ul class="nav nav-underline justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-black" href="#">Product Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-black" href="#">Size Guide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#">Delivery & Returns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="#">Reviews</a>
            </li>
        </ul>
    </div>
    <div class="px-5 py-5" id="sizeGuide">
        <div class="row">
            <div class="col-6 size-info my-0 mx-auto">
                <div class="size-info-item my-1"><span class="size-info-bullet me-2">A</span>Width: <b>189 cm</b></div>
                <div class="size-info-item my-1"><span class="size-info-bullet me-2">B</span>Depth: <b>98 cm</b></div>
                <div class="size-info-item my-1"><span class="size-info-bullet me-2">C</span>Height under furniture: <b>7 cm</b></div>
                <div class="size-info-item my-1"><span class="size-info-bullet me-2">D</span>Seat width: <b>141 cm</b></div>
                <div class="size-info-item my-1"><span class="size-info-bullet me-2">E</span>Backrest height: <b>76 cm</b></div>
            </div>
            <div class="col-6 size-image">
                <img class="w-100" src="{{url('storage/images/product/size-guide.png')}}" alt="Size Guide Diagram"/>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
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

            const thumbs = new Swiper('.gallery-thumbs', {
                slidesPerView: 3,
                spaceBetween: 10,
                centeredSlides: true,
                loop: true,
                slideToClickedSlide: true,
            });

            swiper.controller.control = thumbs;
            thumbs.controller.control = swiper;

            $('.colour-options .nav-link').each(function(){
                var colourOption = $(this);
                if(colourOption.hasClass('active')){
                    var colourText = colourOption.text();
                    $('.selected-colour').html(colourText);
                }
            });

            $('.colour-options .nav-link').click(function() {
                $('.colour-options .nav-link.active').removeClass('active');
                $(this).addClass('active');

                $('.selected-colour').html($(this).text());
            });

            $('#addToCart').click(function(){
                var selectedColour = '';
                $('.colour-options .nav-link').each(function(){
                    var colourOption = $(this);
                    if(colourOption.hasClass('active')){
                        selectedColour = colourOption.text();
                    }
                });

                var selectedSize = $('#sizeDropdown').find(":selected").text();

                alert("Selected Colour: "+selectedColour+"\nSelected Size:"+selectedSize);
            });
        });
    </script>
@stop
