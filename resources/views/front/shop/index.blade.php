@extends('front.layout.master')
@section('title', 'Shop')
@section('body')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Shop</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h3>Products</h3>
                                <ul>
                                    <li class="widget_sub_categories sub_categories1">
                                        <a href="javascript:void(0)">
                                            Plants Catalog
                                        </a>
                                        <ul class="widget_dropdown_categories dropdown_categories1">
                                            <li><a href="#">Flowering</a></li>
                                            <li><a href="#">Non-flowering</a></li>
                                            <li><a href="#">Indoor</a></li>
                                            <li><a href="#">Outdoor</a></li>
                                            <li><a href="#">Succulents</a></li>
                                            <li><a href="#">Medicinal</a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories sub_categories2">
                                        <a href="javascript:void(0)">
                                            Accessories
                                        </a>
                                        <ul class="widget_dropdown_categories dropdown_categories2">
                                            <li><a href="#">Soil</a></li>
                                            <li><a href="#">Fertilizers</a></li>
                                            <li><a href="#">Scissors</a></li>
                                            <li><a href="#">Spades</a></li>
                                            <li><a href="#">Pesticides</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h3>Filter by price</h3>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />

                                </form>
                            </div>

                            <div class="widget_list">
                                <h3>Compare</h3>
                                <div class="shop_sidebar_product">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html">
                                                    <img src="front/img/product/product10.jpg" alt="">
                                                </a>
                                                <a class="secondary_img" href="product-details.html">
                                                    <img src="front/img/product/product2.jpg" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="product-details.html">
                                                        Donec NonEst
                                                    </a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$80.00</span>
                                                    <span class="old_price">$20.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html">
                                                    <img src="front/img/product/product9.jpg" alt="">
                                                </a>
                                                <a class="secondary_img" href="product-details.html">
                                                    <img src="front/img/product/product3.jpg" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="product-details.html">
                                                        Cas Meque Metus
                                                    </a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$70.00</span>
                                                    <span class="old_price">$40.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html">
                                                    <img src="front/img/product/product8.jpg" alt="">
                                                </a>
                                                <a class="secondary_img" href="product-details.html">
                                                    <img src="front/img/product/product4.jpg" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="product-details.html">
                                                        Commodo Augue
                                                    </a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="current_price">$80.00</span>
                                                    <span class="old_price">$20.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip"
                                title="3"></button>

                            <button data-role="grid_4" type="button" class=" btn-grid-4" data-bs-toggle="tooltip"
                                title="4"></button>

                            <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip"
                                title="List"></button>
                        </div>
                        <div class=" niceselect_option">

                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <div class="row shop_wrapper">
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="./shop/product">
                                            <img src="front/img/product/product1.jpg" alt="">
                                        </a>
                                        <div class="label_product">
                                            <span class="label_sale">-7%</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">
                                                        <i class="icon-shopping-bag"></i>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#" title="Add to Compare">
                                                        <i class="icon-sliders"></i>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="wishlist.html" title="Add to Wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                        title="quick view">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action_links list_action">
                                            <ul>
                                                <li class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                        title="quick view">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_price_rating">
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
                                                <a href="product-details.html">
                                                    commodo augue nisi
                                                </a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$69.00</span>
                                                <span class="old_price">$74.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
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
                                            <a href="product-details.html">
                                                commodo augue nisi
                                            </a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price">$69.00</span>
                                            <span class="old_price">$74.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco…</p>
                                        </div>
                                        <div class="action_links list_action_right">
                                            <ul>
                                                <li class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">
                                                        Add to cart
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="wishlist.html" title="Add to Wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#" title="Add to Compare">
                                                        <i class="icon-sliders"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html">
                                            <img src="front/img/product/product2.jpg" alt="">
                                        </a>
                                        <div class="label_product">
                                            <span class="label_sale">-8%</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">
                                                        <i class="icon-shopping-bag"></i>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#" title="Add to Compare">
                                                        <i class="icon-sliders"></i>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="wishlist.html" title="Add to Wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                        title="quick view">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action_links list_action">
                                            <ul>
                                                <li class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                        title="quick view">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_price_rating">
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
                                                <a href="product-details.html">
                                                    adipiscing cursus
                                                </a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$69.00</span>
                                                <span class="old_price">$74.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
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
                                            <a href="product-details.html">
                                                adipiscing cursus
                                            </a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price">$69.00</span>
                                            <span class="old_price">$74.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco…</p>
                                        </div>
                                        <div class="action_links list_action_right">
                                            <ul>
                                                <li class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">
                                                        Add to cart
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="wishlist.html" title="Add to Wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#" title="Add to Compare">
                                                        <i class="icon-sliders"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html">
                                            <img src="front/img/product/product3.jpg" alt="">
                                        </a>
                                        <div class="label_product">
                                            <span class="label_sale">-9%</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">
                                                        <i class="icon-shopping-bag"></i>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#" title="Add to Compare">
                                                        <i class="icon-sliders"></i>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="wishlist.html" title="Add to Wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                        title="quick view">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action_links list_action">
                                            <ul>
                                                <li class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                        title="quick view">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_price_rating">
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
                                                <a href="product-details.html">
                                                    adipiscing elit
                                                </a>
                                            </h4>
                                            <div class="price_box">
                                                <span class="current_price">$69.00</span>
                                                <span class="old_price">$74.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
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
                                            <a href="product-details.html">
                                                adipiscing elit
                                            </a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price">$69.00</span>
                                            <span class="old_price">$74.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco…</p>
                                        </div>
                                        <div class="action_links list_action_right">
                                            <ul>
                                                <li class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">
                                                        Add to cart
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="wishlist.html" title="Add to Wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#" title="Add to Compare">
                                                        <i class="icon-sliders"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">Next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
@endsection
