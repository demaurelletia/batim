
@extends('layouts.app')
@section('content')

<div class="cartmini__area">
    <div class="modal fade" id="cartMiniModal" tabindex="-1" aria-labelledby="cartMiniModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="cartmini__wrapper">
                <div class="cartmini__top d-flex align-items-center justify-content-between">
                    <h4>Your Cart</h4>
                    <div class="cartminit__close">
                        <button type="button" data-bs-dismiss="modal" data-bs-target="#cartMiniModal" class="cartmini__close-btn"> <i class="fal fa-times"></i></button>
                    </div>
                </div>
                <div class="cartmini__list">
                    <ul>
                        <li class="cartmini__item p-relative d-flex align-items-start">
                            <div class="cartmini__thumb mr-15">
                                <a href="product-details.html">
                                    <img src="assets/img/products/product-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h3 class="cartmini__title">
                                    <a href="product-details.html">Form Armchair Walnut Base</a>
                                </h3>
                                <span class="cartmini__price">
                                    <span class="price">1 × $70.00</span>
                                </span>
                            </div>
                            <a href="#" class="cartmini__remove">
                                <i class="fal fa-times"></i>
                            </a>
                        </li>
                        <li class="cartmini__item p-relative d-flex align-items-start">
                            <div class="cartmini__thumb mr-15">
                                <a href="product-details.html">
                                    <img src="assets/img/products/product-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h3 class="cartmini__title">
                                    <a href="product-details.html">Form Armchair Simon Legald</a>
                                </h3>
                                <span class="cartmini__price">
                                    <span class="price">1 × $95.99</span>
                                </span>
                            </div>
                            <a href="#" class="cartmini__remove">
                                <i class="fal fa-times"></i>
                            </a>
                        </li>
                        <li class="cartmini__item p-relative d-flex align-items-start">
                            <div class="cartmini__thumb mr-15">
                                <a href="product-details.html">
                                    <img src="assets/img/products/product-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h3 class="cartmini__title">
                                    <a href="product-details.html">Antique Chinese Armchairs</a>
                                </h3>
                                <span class="cartmini__price">
                                    <span class="price">1 × $120.00</span>
                                </span>
                            </div>
                            <a href="#" class="cartmini__remove">
                                <i class="fal fa-times"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="cartmini__total d-flex align-items-center justify-content-between">
                    <h5>Total</h5>
                    <span>$180.00</span>
                </div>
                <div class="cartmini__bottom">
                    <a href="cart.html" class="b-btn w-100 mb-20">view cart</a>
                    <a href="checkout.html" class="b-btn-2 w-100">checkout</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- cart mini area end -->
<div class="body-overlay"></div>
<!-- cart mini area end -->

<!-- sidebar area start -->
<section class="offcanvas__area">
    <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                        <div class="logo">
                            <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas__close-btn" data-bs-dismiss="modal" data-bs-target="#offCanvasModal">
                                <svg viewBox="0 0 22 22">
                                    <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                                    s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                                    C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="sidebar__search mb-25">
                        <form action="#">
                           <input type="text" placeholder="What are you searching for?">
                           <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                     </div>
                    <div class="offcanvas__content p-relative z-index-1">
                        <div class="canvas__menu">
                            <div class="mobile-menu fix"></div>
                        </div>
                        <div class="offcanvas__action mt-40 mb-15">
                            <a href="contact.html">Login</a>
                            <a href="wishlist.html" class="has-tag">
                                <svg viewBox="0 0 22 22">
                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                    L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                    c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                    C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                    c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                    c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                    c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                    c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                    c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                </svg>
                                <span class="tag">2</span>
                            </a>
                            <a href="cart.html" class="has-tag">
                                <i class="far fa-shopping-bag"></i>
                                <span class="tag">3</span>
                            </a>
                            <div class="header__select header__select-d d-flex align-items-center mt-10">
                                <div class="header__lang header__select-item mr-15">
                                    <select>
                                        <option>EN</option>
                                        <option>BN</option>
                                        <option>IN</option>
                                        <option>CH</option>
                                        <option>AM</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">EN</span><ul class="list list-2"><li data-value="EN" class="option selected focus">EN</li><li data-value="BN" class="option">BN</li><li data-value="IN" class="option">IN</li><li data-value="CH" class="option">CH</li><li data-value="AM" class="option">AM</li></ul></div>
                                </div>
                                <div class="header__currency header__select-item">
                                    <select>
                                        <option>USD</option>
                                        <option>Euro</option>
                                        <option>Yen</option>
                                        <option>Rupee</option>
                                        <option>Sterlin</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">USD</span><ul class="list list-2"><li data-value="USD" class="option selected focus">USD</li><li data-value="Euro" class="option">Euro</li><li data-value="Yen" class="option">Yen</li><li data-value="Rupee" class="option">Rupee</li><li data-value="Sterlin" class="option">Sterlin</li></ul></div>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas__social mt-15">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- sidebar area end -->

<main>
    <!-- slider area start -->
   <!-- slider area start -->
   <section class="slider__area">
    <div class="slider__active swiper-container">
        <div class="swiper-wrapper">
            <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="assets/img/slider/slider-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-5">
                            <div class="slider__content p-relative z-index-11">
                                <span data-animation="fadeInUp" data-delay=".3s">SUMMER ‘21</span>
                                <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">Office Style</h3>
                                <div class="slider__btn" data-animation="fadeInUp" data-delay=".4s">
                                    <a href="shop.html" class="slider-btn">Discover Now <i class="fal fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="assets/img/slider/slider-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-5">
                            <div class="slider__content p-relative z-index-11">
                                <span data-animation="fadeInUp" data-delay=".3s">SUMMER ‘21</span>
                                <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">Living Luxury</h3>
                                <div class="slider__btn" data-animation="fadeInUp" data-delay=".4s">
                                    <a href="shop.html" class="slider-btn">Discover Now <i class="fal fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-pagination">
            <button class="main-slider-button-prev"><i class="fal fa-angle-left"></i></button>
            <button class="main-slider-button-next"><i class="fal fa-angle-right"></i></button>
        </div>
    </div>
</section>
    <!-- slider area end -->

    <!-- product hot area start -->
    <section class="product__hot-area pt-65 pb-30">
        <div class="container">
            <div class="section__title-line section__title-line-2">
                <div class="row">
                    <div class="col-xxl-6 col-sm-8 col-6">
                        <div class="section__title-wrapper d-flex align-items-center">
                            <span class="section__title-icon mr-15">
                                <img src="assets/img/icon/section-icon-1.png" alt="">
                            </span>
                            <h2 class="section__title-3">Latest Hot Deals</h2>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-sm-4 col-6">
                        <div class="product__hot-more d-flex justify-content-end">
                            <a href="shop.html" class="more-btn">View All Deals <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-30">



                <div class="">
                    <div class="product__hot-slider owl-carousel">
                        <div class="product__item-3">
                            <div class="product__thumb-3 fix p-relative">
                                <a href="product-details.html">
                                    <img src="assets/img/products/2/product-1.jpg" alt="">
                                </a>
                                <div class="product__flash-3">
                                    <span>15%</span>
                                </div>
                                <div class="product__action product__action-3 transition-3">
                                    <ul>
                                       <li>
                                          <a href="#">
                                            <i class="fas fa-heart"></i>
                                          </a>
                                       </li>
                                       <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <i class="fas fa-signal-4"></i>
                                            </a>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content-3">
                                <div class="product__tag-3">
                                    <span>
                                        <a href="#">Wooden</a>
                                    </span>
                                </div>
                                <h3 class="product__title-3">
                                    <a href="product-details.html">Matin Small Table Lamp</a>
                                </h3>
                                <div class="product__price-3 fix">
                                    <span class="price">$180.00</span>
                                    <div class="product__add-cart-3 transition-3">
                                        <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="product__item-3">
                            <div class="product__thumb-3 fix p-relative">
                                <a href="product-details.html">
                                    <img src="assets/img/products/2/product-1.jpg" alt="">
                                </a>
                                <div class="product__flash-3">
                                    <span>1%</span>
                                </div>
                                <div class="product__action product__action-3 transition-3">
                                    <ul>
                                       <li>
                                          <a href="#">
                                            <i class="fas fa-heart"></i>
                                          </a>
                                       </li>
                                       <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <i class="fas fa-signal-4"></i>
                                            </a>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content-3">
                                <div class="product__tag-3">
                                    <span>
                                        <a href="#">Wooden</a>
                                    </span>
                                </div>
                                <h3 class="product__title-3">
                                    <a href="product-details.html">Matin Small Table Lamp</a>
                                </h3>
                                <div class="product__price-3 fix">
                                    <span class="price">$180.00</span>
                                    <div class="product__add-cart-3 transition-3">
                                        <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="product__item-3">
                            <div class="product__thumb-3 fix p-relative">
                                <a href="product-details.html">
                                    <img src="assets/img/products/2/product-3.jpg" alt="">
                                </a>
                                <div class="product__action product__action-3 transition-3">
                                    <ul>
                                       <li>
                                          <a href="#">
                                            <i class="fas fa-heart"></i>
                                          </a>
                                       </li>
                                       <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <i class="fas fa-signal-4"></i>
                                            </a>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content-3">
                                <div class="product__tag-3">
                                    <span>
                                        <a href="#">Living Room</a>
                                    </span>
                                </div>
                                <h3 class="product__title-3">
                                    <a href="product-details.html">Plain Side Table White</a>
                                </h3>
                                <div class="product__price-3 fix">
                                    <span class="price">$180.00</span>
                                    <div class="product__add-cart-3 transition-3">
                                        <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-3">
                            <div class="product__thumb-3 fix p-relative">
                                <a href="product-details.html">
                                    <img src="assets/img/products/2/product-4.jpg" alt="">
                                </a>
                                <div class="product__action product__action-3 transition-3">
                                    <ul>
                                       <li>
                                          <a href="#">
                                            <i class="fas fa-heart"></i>
                                          </a>
                                       </li>
                                       <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <i class="fas fa-signal-4"></i>
                                            </a>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content-3">
                                <div class="product__tag-3">
                                    <span>
                                        <a href="#">Living Room</a>
                                    </span>
                                </div>
                                <h3 class="product__title-3">
                                    <a href="product-details.html">Gravida Condimentum</a>
                                </h3>
                                <div class="product__price-3 fix">
                                    <span class="price">$180.00</span>
                                    <div class="product__add-cart-3 transition-3">
                                        <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product hot area end -->

    <!-- banner area start -->
    <section class="banner__area mb-30">
        <div class="container">
            <div class="section__title-line section__title-line-2 mb-30">
                <div class="row">
                    <div class="col-xxl-6 col-sm-8 col-6">
                        <div class="section__title-wrapper d-flex align-items-center">
                            <span class="section__title-icon mr-15">
                                <img src="assets/img/icon/section-icon-2.png" alt="">
                            </span>
                            <h2 class="section__title-3">Trending Offers</h2>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-sm-4 col-6">
                        <div class="product__hot-more d-flex justify-content-end">
                            <a href="shop.html" class="more-btn">View All Offers <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner__slider-active owl-carousel">
                <div class="banner__slider-item">
                    <div class="row">
                        <div class="col-xxl-6 col-lg-6">
                            <div class="banner__item-2 p-relative fix mb-30">
                                <div class="banner__thumb w-img">
                                    <img src="assets/img/products/banner/2/product-banner-1.jpg" alt="">
                                </div>
                                <div class="banner__content-2">
                                    <h3 class="banner__title-2">
                                        <a href="shop.html">A Chair Set For <br> Holidays</a>
                                    </h3>
                                    <p>Go to place where you're not going stresed</p>
                                    <a href="shop.html" class="b-btn-3">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6">
                            <div class="banner__item-2 p-relative fix mb-30">
                                <div class="banner__thumb w-img">
                                    <img src="assets/img/products/banner/2/product-banner-2.jpg" alt="">
                                </div>
                                <div class="banner__content-2">
                                    <h3 class="banner__title-2">
                                        <a href="shop.html">Living For The <br>Little Things</a>
                                    </h3>
                                    <p>Go to place where you're not going stresed</p>
                                    <a href="shop.html" class="b-btn-3">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner__slider-item">
                    <div class="row">
                        <div class="col-xxl-6 col-lg-6">
                            <div class="banner__item-2 p-relative fix mb-30">
                                <div class="banner__thumb w-img">
                                    <img src="assets/img/products/banner/2/product-banner-3.jpg" alt="">
                                </div>
                                <div class="banner__content-2">
                                    <h3 class="banner__title-2">
                                        <a href="shop.html">A Cushion Set For <br> Holidays</a>
                                    </h3>
                                    <p>Go to place where you're not going stresed</p>
                                    <a href="shop.html" class="b-btn-3">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6">
                            <div class="banner__item-2 p-relative fix mb-30">
                                <div class="banner__thumb w-img">
                                    <img src="assets/img/products/banner/2/product-banner-4.jpg" alt="">
                                </div>
                                <div class="banner__content-2">
                                    <h3 class="banner__title-2">
                                        <a href="shop.html">Living For The <br>Enjoyable Things</a>
                                    </h3>
                                    <p>Go to place where you're not going stresed</p>
                                    <a href="shop.html" class="b-btn-3">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- product area start -->
    <section class="product__area pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-line section__title-line-2">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-5">
                                <div class="section__title-wrapper">
                                    <span class="section__title-icon mr-15">
                                        <img src="assets/img/icon/section-icon-3.png" alt="">
                                    </span>
                                    <h2 class="section__title-3">Popular Products</h2>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-7">
                                <div class="product__tab product__tab-2">
                                    <ul class="nav nav-tabs" id="trendingTab" role="tablist">
                                        <li class="nav-item nav-item-2" role="presentation">
                                        <button class="nav-link active" id="new" data-bs-toggle="tab" data-bs-target="#new-2" type="button" role="tab" aria-controls="new-2" aria-selected="true">Furniture</button>
                                        </li>
                                        <li class="nav-item nav-item-2" role="presentation">
                                        <button class="nav-link" id="featured" data-bs-toggle="tab" data-bs-target="#featured-2" type="button" role="tab" aria-controls="featured-2" aria-selected="false">Decor</button>
                                        </li>
                                        <li class="nav-item nav-item-2" role="presentation">
                                        <button class="nav-link" id="top" data-bs-toggle="tab" data-bs-target="#top-2" type="button" role="tab" aria-controls="top-2" aria-selected="false">Lighting</button>
                                        </li>
                                        <li class="nav-item nav-item-2" role="presentation">
                                            <button class="nav-link" id="top-t" data-bs-toggle="tab" data-bs-target="#top-3" type="button" role="tab" aria-controls="top-3" aria-selected="false">Rungs</button>
                                        </li>
                                        <li class="nav-item nav-item-2" role="presentation">
                                            <button class="nav-link" id="topp" data-bs-toggle="tab" data-bs-target="#top-4" type="button" role="tab" aria-controls="top-4" aria-selected="false">Bathroom</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="product__item-wrapper-2 pt-30">
                        <div class="product__tab-content">
                            <div class="tab-content" id="trendingTabContent">
                                <div class="tab-pane fade show active" id="new-2" role="tabpanel" aria-labelledby="new-2">
                                    <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Table Lamp</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Mog</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Plain Side Table White</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wooden Single Drawer</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Smart Watches Wood</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Panton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Eames Lounge Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wine Bottle Lantern</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Cotton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Porsalin Plate</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$150.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="featured-2" role="tabpanel" aria-labelledby="featured-2">
                                    <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Panton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Eames Lounge Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wine Bottle Lantern</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Cotton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Table Lamp</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Mog</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Plain Side Table White</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wooden Single Drawer</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Smart Watches Wood</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Porsalin Plate</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$150.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-2" role="tabpanel" aria-labelledby="top-2">
                                    <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Cotton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Table Lamp</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Mog</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Plain Side Table White</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wooden Single Drawer</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Panton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Eames Lounge Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wine Bottle Lantern</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Smart Watches Wood</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Porsalin Plate</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$150.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-3" role="tabpanel" aria-labelledby="top-3">
                                    <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Panton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Eames Lounge Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wine Bottle Lantern</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Smart Watches Wood</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Porsalin Plate</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$150.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Cotton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Table Lamp</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Mog</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Plain Side Table White</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wooden Single Drawer</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-4" role="tabpanel" aria-labelledby="top-4">
                                    <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Mog</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Plain Side Table White</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wooden Single Drawer</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Stell</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Panton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Eames Lounge Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Wine Bottle Lantern</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Cotton Tunior Chair</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Matin Small Table Lamp</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>15%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Wooden</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Smart Watches Wood</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$180.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="product__item-3 mb-40">
                                                <div class="product__thumb-3 fix p-relative w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/products/2/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="product__flash-3">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action product__action-3 transition-3">
                                                        <ul>
                                                           <li>
                                                              <a href="#">
                                                                <i class="fas fa-heart"></i>
                                                              </a>
                                                           </li>
                                                           <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                           </li>
                                                           <li>
                                                                <a href="#">
                                                                    <i class="fas fa-signal-4"></i>
                                                                </a>
                                                           </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <div class="product__tag-3">
                                                        <span>
                                                            <a href="#">Living Room</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="product__title-3">
                                                        <a href="product-details.html">Porsalin Plate</a>
                                                    </h3>
                                                    <div class="product__price-3 fix">
                                                        <span class="price">$150.00</span>
                                                        <div class="product__add-cart-3 transition-3">
                                                            <a href="cart.html" class="add-to-cart-btn-2">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- banner area start -->
    <section class="banner__area-2 pb-70">
        <div class="container-fluid">
            <div class="row gx-0">
                <div class="col-xl-12">
                    <div class="banner__content-3 text-center" data-background="assets/img/products/banner/2/offer_banner.jpg" >
                        <div class="banner__content-wrapper">
                            <h5>Fancy $50 Off Your First Order?</h5>
                            <span class="banner-text mb-45">Join Our Mailing List!</span>
                            <form action="#" class="d-flex justify-content-center">
                                <input type="text" name="email" id="email" placeholder="Enter Email ID...">
                                <button type="submit" class="b-btn-3 ml-5">Send</button>
                            </form>
                            <div class="save-info mt-15">
                                <input class="p-0" type="checkbox" aria-label="Checkbox for following text input">
                                <p class="mb-0 pl-10">We’ll never spam you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- product trending area start -->
    <section class="product__area-trending pb-40">
        <div class="container">
            <div class="section__title-line section__title-line-2 mb-30">
                <div class="row">
                    <div class="col-xxl-6 col-sm-8 col-6">
                        <div class="section__title-wrapper d-flex align-items-center">
                            <span class="section__title-icon mr-15">
                                <img src="assets/img/icon/section-icon-2.png" alt="">
                            </span>
                            <h2 class="section__title-3">Featured Categories</h2>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-sm-4 col-6">
                        <div class="product__hot-more d-flex justify-content-end">
                            <a href="shop.html" class="more-btn">View All Categories <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-xxl-12">
                    <div class="product__tb-slider owl-carousel">
                        <div class="product__item mb-20">
                            <div class="product__thumb w-img fix">
                                <a href="product-details.html">
                                    <img src="assets/img/products/product-13.jpg" alt="">
                                </a>
                                <div class="product__action transition-3">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg viewBox="0 0 22 22">
                                                    <g>
                                                    <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                    l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                    C18.83,18.71,18.44,19,18,19z"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg viewBox="0 0 22 22">
                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                    L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                    c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                    C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                    c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                    c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                    c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                    c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                    c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                <svg viewBox="0 0 22 22">
                                                    <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                    C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                    C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                    s2-0.9,2-2S12.1,9,11,9z"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content text-center">
                                <h3 class="product__title mt-10">
                                    <a href="product-details.html">Haiku 2-Seater Sofa</a>
                                </h3>
                                <div class="product__store">
                                    <span>
                                        <a href="shop.html">02 Items</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mb-20">
                            <div class="product__thumb w-img fix">
                                <a href="product-details.html">
                                    <img src="assets/img/products/product-14.jpg" alt="">
                                </a>
                                <div class="product__action transition-3">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg viewBox="0 0 22 22">
                                                    <g>
                                                    <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                    l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                    C18.83,18.71,18.44,19,18,19z"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg viewBox="0 0 22 22">
                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                    L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                    c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                    C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                    c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                    c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                    c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                    c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                    c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                <svg viewBox="0 0 22 22">
                                                    <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                    C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                    C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                    s2-0.9,2-2S12.1,9,11,9z"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content text-center">
                                <h3 class="product__title mt-10">
                                    <a href="product-details.html">Basket With Handles</a>
                                </h3>
                                <div class="product__store">
                                    <span>
                                        <a href="shop.html">05 Items</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mb-20">
                            <div class="product__thumb w-img fix">
                                <a href="product-details.html">
                                    <img src="assets/img/products/product-15.jpg" alt="">
                                </a>
                                <div class="product__action transition-3">
                                    <ul>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                                <g>
                                                <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                C18.83,18.71,18.44,19,18,19z"/>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                                <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <svg viewBox="0 0 22 22">
                                                <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                s2-0.9,2-2S12.1,9,11,9z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content text-center">
                                <h3 class="product__title mt-10">
                                    <a href="product-details.html">Deco Accessory</a>
                                </h3>
                                <div class="product__store">
                                    <span>
                                        <a href="shop.html">08 Items</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mb-20">
                            <div class="product__thumb w-img fix">
                                <a href="product-details.html">
                                    <img src="assets/img/products/product-16.jpg" alt="">
                                </a>
                                <div class="product__action transition-3">
                                    <ul>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                                <g>
                                                <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                C18.83,18.71,18.44,19,18,19z"/>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                                <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <svg viewBox="0 0 22 22">
                                                <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                s2-0.9,2-2S12.1,9,11,9z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content text-center">
                                <h3 class="product__title mt-10">
                                    <a href="product-details.html">Newspaper Storage</a>
                                </h3>
                                <div class="product__store">
                                    <span>
                                        <a href="shop.html">08 Items</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mb-20">
                            <div class="product__thumb w-img fix">
                                <a href="product-details.html">
                                    <img src="assets/img/products/product-17.jpg" alt="">
                                </a>
                                <div class="product__action transition-3">
                                    <ul>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                                <g>
                                                <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                C18.83,18.71,18.44,19,18,19z"/>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                                <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <svg viewBox="0 0 22 22">
                                                <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                s2-0.9,2-2S12.1,9,11,9z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content text-center">
                                <h3 class="product__title mt-10">
                                    <a href="product-details.html">Pottery Vase</a>
                                </h3>
                                <div class="product__store">
                                    <span>
                                        <a href="shop.html">12 Items</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mb-20">
                            <div class="product__thumb w-img fix">
                                <a href="product-details.html">
                                    <img src="assets/img/products/product-5.jpg" alt="">
                                </a>
                                <div class="product__action transition-3">
                                    <ul>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                                <g>
                                                <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                C18.83,18.71,18.44,19,18,19z"/>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                                <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <svg viewBox="0 0 22 22">
                                                <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                s2-0.9,2-2S12.1,9,11,9z"/>
                                            </svg>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content text-center">
                                <h3 class="product__title mt-10">
                                    <a href="product-details.html">Table Lamp</a>
                                </h3>
                                <div class="product__store">
                                    <span>
                                        <a href="shop.html">07 Items</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product trending area end -->


    <!-- features__area-2-start -->
    <section class="features__area-2 footer-bg pt-35">
        <div class="container">
            <div class="features__wrapper">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="features__item features__item-2 mb-20">
                            <div class="features__icon mr-20">
                                <i class="flaticon-truck"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title features__title-2">Free Shipping Orders $60+</h3>
                                <p>Moves so quickly that</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="features__item features__item-2 mb-20">
                            <div class="features__icon mr-20">
                                <i class="flaticon-credit-card"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title features__title-2">24/7 Customer Support</h3>
                                <p>Moves so quickly that</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="features__item features__item-2 mb-20">
                            <div class="features__icon mr-20">
                                <i class="flaticon-exchange"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title features__title-2">100% Secure Payments</h3>
                                <p>PayPal / MasterCard </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features__area-2-end -->

    <!-- shop modal start -->
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product__modal" role="document">
            <div class="modal-content">
                <div class="product__modal-wrapper p-relative">
                    <div class="product__modal-close p-absolute">
                        <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="product__modal-inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-box">
                                    <div class="tab-content" id="modalTabContent">
                                        <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-1.jpg" alt="">
                                        </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                            <img src="assets/img/products/quick-view/nav/quick-nav-2.jpg" alt="">
                                        </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                            <img src="assets/img/products/quick-view/nav/quick-nav-3.jpg" alt="">
                                        </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                            <img src="assets/img/products/quick-view/nav/quick-nav-4.jpg" alt="">
                                        </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-content">
                                <h4 class="product__modal-title"><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                <div class="product__modal-des mb-40">
                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
                                </div>
                                <div class="product__modal-stock">
                                    <span>Availability :</span>
                                    <span>In Stock</span>
                                </div>
                                <div class="product__modal-stock sku mb-30">
                                    <span>SKU:</span>
                                    <span>Samsung C49J89: £875, Debenhams Plus</span>
                                </div>
                                <div class="product__modal-review d-sm-flex">
                                    <div class="rating mb-15 mr-35">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    </div>
                                    <div class="product__modal-add-review mb-15">
                                    <span><a href="#">1 Review</a></span>
                                    <span><a href="#">Add Review</a></span>
                                    </div>
                                </div>
                                <div class="product__modal-price">
                                    <span>$560.00</span>
                                </div>
                                <div class="product__modal-form mb-30">
                                    <form action="#">
                                    <div class="pro-quan-area d-lg-flex align-items-center">
                                        <div class="product-quantity mr-20 mb-25">
                                            <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                        </div>
                                        <div class="pro-cart-btn mb-25">
                                            <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="product__modal-links">
                                    <ul>
                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                    <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal end -->

</main>

@endsection
