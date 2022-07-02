@extends('layouts.app')
@section('content')

 <!-- cart mini area start -->
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
    <!-- page__title-start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Contact Us</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page__title-end -->

    <!-- contact-area start -->
    <section class="contact-area pt-120 pb-50 fix">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-lg-6">
                    <div class="sec-wrapper">
                        <h5>Contact With Us</h5>
                        <h2 class="absection-title">Speak with our Expert.</h2>
                     </div>
                    <div class="contact-info mr-50 mr-xs-0  mr-md-0 mb-30">
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-info-icon">
                                <a href="#"><i class="fal fa-phone-alt"></i></a>
                            </div>
                            <div class="contact-info-text mt-10">
                                <span>Call Anytime</span>
                                <h5><a href="tell:926668880000">92 666 888 0000</a></h5>
                            </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-info-icon">
                                <a href="#"><i class="fal fa-envelope"></i></a>
                            </div>
                            <div class="contact-info-text mt-10">
                                <span>send email</span>
                                <h5><a href="mailto:needhelp@company.com">needhelp@company.com</a> </h5>
                            </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-info-icon">
                                <a href="#"><i class="fal fa-map-marker-alt"></i></a>
                            </div>
                            <div class="contact-info-text mt-10">
                                <span>visit office</span>
                                <h5><a target="_blank" href="https://www.google.com/maps/place/Peter+Cooper+Village/@40.7348141,-73.9790254,17z/data=!4m13!1m7!3m6!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!2sNew+York,+NY,+USA!3b1!8m2!3d40.7127753!4d-74.0059728!3m4!1s0x89c259e57464e6fb:0x537c7117719c8f74!8m2!3d40.7353483!4d-73.9772081">350 New York, United States</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6">
                    <form id="contacts-form" class="conatct-post-form mb-30" action="#">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-icon p-relative contacts-name">
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-icon p-relative contacts-name">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-icon p-relative contacts-Phone">
                                    <input type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-icon p-relative contacts-email">
                                    <input type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-icon p-relative contacts-message">
                                    <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your message"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="post-check">
                                      <input type="checkbox">
                                      <span>Save my name, email, and website in this browser for the next time I comment.</span>
                                </div>
                             </div>
                            <div class="col-xl-12">
                                <div class="contact- mt-15">
                                    <button class="btn-tp mt-15" type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area end -->

    <!-- map-area start -->
    <section class="map-area">
        <div class="contact-map">
            <div id="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.236826211894!2d-73.97902538431153!3d40.73481409415593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259e57464e6fb%3A0x537c7117719c8f74!2sPeter%20Cooper%20Village!5e0!3m2!1sen!2sbd!4v1645068006928!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
         </div>
    </section>
    <!-- map-area end -->

    <!-- brand-area-2 start -->
    <div class="brand-area-2 mt-35 mb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="col-xxl-12">
                        <div class="brand__slider-2 owl-carousel">
                            <div class="brand__item">
                                <a href="#"><img src="assets/img/brand/brand-1.png" alt=""></a>
                            </div>
                            <div class="brand__item swiper-slide">
                                <a href="#"><img src="assets/img/brand/brand-2.png" alt=""></a>
                            </div>
                            <div class="brand__item swiper-slide">
                                <a href="#"><img src="assets/img/brand/brand-3.png" alt=""></a>
                            </div>
                            <div class="brand__item swiper-slide">
                                <a href="#"><img src="assets/img/brand/brand-4.png" alt=""></a>
                            </div>
                            <div class="brand__item swiper-slide">
                                <a href="#"><img src="assets/img/brand/brand-5.png" alt=""></a>
                            </div>
                            <div class="brand__item swiper-slide">
                                <a href="#"><img src="assets/img/brand/brand-6.png" alt=""></a>
                            </div>
                            <div class="brand__item swiper-slide">
                                <a href="#"><img src="assets/img/brand/brand-2.png" alt=""></a>
                            </div>
                            <div class="brand__item swiper-slide">
                                <a href="#"><img src="assets/img/brand/brand-4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- brand-area-2 end -->

    <!-- quality-area start -->
    <section class="quality-area pt-120 pb-90 fix">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-lg-8 col-md-9">
                    <div class="kquality mb-30 aos-init aos-animate" data-aos="zoom-in-right">
                       <div class="kquality-icon">
                         <i class="fal fa-truck"></i>
                       </div>
                       <div class="kquality-text fix">
                          <h3 class="mb-20 kquality-text-title">We Deliver the Best Quality</h3>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some form, by injected words.</p>
                       </div>
                    </div>
              </div>
              <div class="col-lg-4 col-md-3">
                    <div class="text-lg-end mb-30 aos-init aos-animate" data-aos="zoom-in-left">
                       <div class="kquality-img">
                          <img src="assets/img/author/cta-img.jpg" class="img-fluid" alt="cta-img">
                       </div>
                    </div>
              </div>
           </div>
        </div>
    </section>
    <!-- quality-area end -->

</main>
@endsection
