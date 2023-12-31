@extends('front.layout.master')
@section('title', 'Home')
@section('body')

    <!--slider area start-->
    <section class="slider_section">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="front/img/slider/slider8.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>BIG SALE</h1>
                                <p>Discount <span>20% Off </span> For PlantNest Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="front/img/slider/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>TOP SALE</h1>
                                <p>Discount <span>20% Off </span> For PlantNest Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="front/img/slider/slider3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>Lovely Plants </h1>
                                <p>Discount <span>20% Off </span> For PlantNest Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--shipping area start-->
    <div class="shipping_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="front/img/about/shipping1.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Free Delivery</h3>
                            <p>Free shipping around the world for all <br> orders over $120</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col_2">
                        <div class="shipping_icone">
                            <img src="front/img/about/shipping2.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Safe Payment</h3>
                            <p>With our payment gateway, don’t worry <br> about your information</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col_3">
                        <div class="shipping_icone">
                            <img src="front/img/about/shipping3.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h3>Friendly Services</h3>
                            <p>You have 30-day return guarantee for <br> every single order</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->

    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="front/img/bg/banner1.jpg" alt=""></a>
                            <div class="banner_content">
                                <h3>Big Sale Products</h3>
                                <h2>Plants <br> For Interior</h2>
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="front/img/bg/banner2.jpg" alt=""></a>
                            <div class="banner_content">
                                <h3>Top Products</h3>
                                <h2>Plants <br> For Healthy</h2>
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <div class="product_area  mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <h2>All Products</h2>
                        </div>

                    </div>
                </div>
            </div>


            <div class="tab-content">

                <div class="product_items">
                    <?php
                    $i = 0;
                    ?>

                    @foreach ($products as $product)
                        <?php
                        $i++;
                        ?>

                        @if ($i <= 8)
                            <div class="items-products-vd">

                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="front/img/product/{{ $product->productImages[0]->path }}"
                                                    alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-7%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i
                                                                class="icon-shopping-bag"></i></a>
                                                    </li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i
                                                                class="icon-sliders"></i></a></li>
                                                    <li class="wishlist"><a href="#" title="Add to Wishlist"><i
                                                                class="icon-heart"></i></a>
                                                    </li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <i
                                                                class="icon-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h4 class="product_name">
                                                <a href="product-details.html"> {{ $product->name }}</a>

                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">${{ $product->price }}</span>
                                                <span class="old_price">$74.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>

                            </div>
                        @endif
                    @endforeach


                </div>



                <div class="tab-pane fade" id="plant2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product7.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-4%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">sapien
                                                        libero</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$69.00</span>
                                                    <span class="old_price">$74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product8.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">vulputate
                                                        rutrum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$64.00</span>
                                                    <span class="old_price">$72.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product9.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">adipiscing
                                                        cursus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$60.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Donec eu
                                                        cook</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$67.00</span>
                                                    <span class="old_price">$77.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product1.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-7%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">commodo augue
                                                        nisi</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$69.00</span>
                                                    <span class="old_price">$74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product2.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">eget
                                                        sagittis</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product3.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">fringilla
                                                        augue</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$68.00</span>
                                                    <span class="old_price">$75.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product4.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-5%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">massa massa</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">$75.00</span>
                                                    <span class="old_price">$80.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product5.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">placerat
                                                        vestibulum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product6.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Porro Cook</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">$62.00</span>
                                                    <span class="old_price">$68.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="plant3" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product3.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">fringilla
                                                        augue</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$68.00</span>
                                                    <span class="old_price">$75.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product4.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-5%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">massa massa</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">$75.00</span>
                                                    <span class="old_price">$80.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product5.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">placerat
                                                        vestibulum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product6.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Porro Cook</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">$62.00</span>
                                                    <span class="old_price">$68.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product7.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-4%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">sapien
                                                        libero</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$69.00</span>
                                                    <span class="old_price">$74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product8.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">vulputate
                                                        rutrum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$64.00</span>
                                                    <span class="old_price">$72.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product1.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-7%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">commodo augue
                                                        nisi</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$69.00</span>
                                                    <span class="old_price">$74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product2.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">eget
                                                        sagittis</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product9.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">adipiscing
                                                        cursus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$60.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="front/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i class="icon-shopping-bag"></i></a>
                                                        </li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box"
                                                                title="quick view"> <i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Donec eu
                                                        cook</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$67.00</span>
                                                    <span class="old_price">$77.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->


    <!--product sale start-->
    <div class="product_area product_deals ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Today Deals</h2>
                    </div>
                </div>
            </div>
            <div class="product_deals_container">
                <div class="row">
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="front/img/product/product1.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-7%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">commodo augue nisi</a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price">$69.00</span>
                                            <span class="old_price">$74.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="front/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-9%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">eget sagittis</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="front/img/product/product3.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-6%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">fringilla augue</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">$68.00</span>
                                            <span class="old_price">$75.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="front/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-5%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">massa massa</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">$75.00</span>
                                            <span class="old_price">$80.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>

                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="front/img/product/product5.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-8%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">placerat vestibulum</a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="front/img/product/product6.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-9%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">Porro Cook</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">$62.00</span>
                                            <span class="old_price">$68.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product sale end-->

    <!--testimonial area start-->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>What Our Customers Says ?</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial_container">
                <div class="row">
                    <div class="testimonial_carousel owl-carousel">
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="front/img/about/testimonials-icon.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                        it truly is an artwork. I love how my website operates and looks with this
                                        theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img src="front/img/about/testimonial1.png"
                                                alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Rebecka Filson</a> / <span>CEO of CSC</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="front/img/about/testimonials-icon.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                        it truly is an artwork. I love how my website operates and looks with this
                                        theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img src="front/img/about/testimonial2.png"
                                                alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Amber Laha</a> / <span>CEO of DND</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="front/img/about/testimonials-icon.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                        it truly is an artwork. I love how my website operates and looks with this
                                        theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img src="front/img/about/testimonial3.png"
                                                alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Lindsy Neloms</a> / <span>CEO of SFD</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->

    <!--blog area start-->
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Our Latest Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="front/img/blog/blog1.jpg"
                                            alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title"><a href="blog-details.html">Libero lorem</a></h4>
                                    <div class="articles_date">
                                        <p>By <span>admin / July 16, 2021</span></p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                        pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p><i class="icon-message-circle"></i> <span>0</span></p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="front/img/blog/blog2.jpg"
                                            alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title"><a href="blog-details.html">Blog image post</a></h4>
                                    <div class="articles_date">
                                        <p>By <span>admin / July 16, 2021</span></p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                        pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p><i class="icon-message-circle"></i> <span>0</span></p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="front/img/blog/blog3.jpg"
                                            alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title"><a href="blog-details.html">Post with Gallery</a></h4>
                                    <div class="articles_date">
                                        <p>By <span>admin / July 16, 2021</span></p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                        pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p><i class="icon-message-circle"></i> <span>0</span></p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="front/img/blog/blog2.jpg"
                                            alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title"><a href="blog-details.html">Post with Audio</a></h4>
                                    <div class="articles_date">
                                        <p>By <span>admin / July 16, 2021</span></p>
                                    </div>
                                    <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                        pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent</p>
                                    <footer class="blog_footer">
                                        <a href="blog-details.html">Continue Reading</a>
                                        <p><i class="icon-message-circle"></i> <span>0</span></p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->







@endsection
