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
    <!-- page__title-start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg" style="background-image: url(&quot;assets/img/page-title/page-title-1.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Product Details</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                            </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page__title-end -->

    <!-- product-details-start -->
    <section class="product-details pt-90 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-box d-flex">
                        <div class="product__modal-nav mr-20">
                            <nav>
                                <div class="nav nav-tabs" id="product-details" role="tablist">
                                    <a class="nav-item nav-link active" id="pro-one-tab" data-bs-toggle="tab" href="#pro-one" role="tab" aria-controls="pro-one" aria-selected="true">
                                    <div class="product__nav-img w-img">
                                        <img src="assets/img/products/quick-view/nav/quick-nav-02-1.jpg" alt="">
                                    </div>
                                    </a>
                                    <a class="nav-item nav-link" id="pro-two-tab" data-bs-toggle="tab" href="#pro-two" role="tab" aria-controls="pro-two" aria-selected="false">
                                    <div class="product__nav-img w-img">
                                        <img src="assets/img/products/quick-view/nav/quick-nav-02-2.jpg" alt="">
                                    </div>
                                    </a>
                                    <a class="nav-item nav-link" id="pro-three-tab" data-bs-toggle="tab" href="#pro-three" role="tab" aria-controls="pro-three" aria-selected="false">
                                    <div class="product__nav-img w-img">
                                        <img src="assets/img/products/quick-view/nav/quick-nav-02-3.jpg" alt="">
                                    </div>
                                    </a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content mb-20" id="product-detailsContent">
                            <div class="tab-pane fade active show" id="pro-one" role="tabpanel" aria-labelledby="pro-one-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="assets/img/products/quick-view/quick-view-02-1.jpg" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-20%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-two" role="tabpanel" aria-labelledby="pro-two-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="assets/img/products/quick-view/quick-view-02-2.jpg" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-13%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-three" role="tabpanel" aria-labelledby="pro-three-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="assets/img/products/quick-view/quick-view-02-3.jpg" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-15%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-content-2">
                        <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                        <div class="rating rating-shop mb-15">
                            <ul>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fal fa-star"></i></span></li>
                            </ul>
                            <span class="rating-no ml-10 rating-left">
                                3 rating(s)
                            </span>
                            <span class="review rating-left"><a href="#">Add your Review</a></span>
                        </div>
                        <div class="product__price mb-25">
                            <span>$96.00</span>
                            <span class="old-price">$96.00</span>
                        </div>
                        <div class="product__modal-des mb-30">
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                        </div>
                        <div class="product__details-color d-sm-flex align-items-center mb-25">
                            <span>Color:</span>
                            <ul>
                                <li><a href="#" class="black"></a></li>
                                <li><a href="#" class="active brown"></a></li>
                                <li><a href="#" class="blue"></a></li>
                                <li><a href="#" class="red"></a></li>
                                <li><a href="#" class="white"></a></li>
                            </ul>
                        </div>
                        <div class="product__details-size d-sm-flex align-items-center mb-30">
                            <span>Size: </span>
                            <ul class="mr-30">
                                <li>
                                    <a href="#" class="unavailable">S</a>
                                </li>
                                <li>
                                    <a href="#">M</a>
                                </li>
                                <li>
                                    <a href="#">L</a>
                                </li>
                                <li>
                                    <a href="#">XL</a>
                                </li>
                                <li>
                                    <a href="#">2XL</a>
                                </li>
                                <li>
                                    <a href="#">3XL</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-quan-area d-sm-flex align-items-center">
                            <div class="product-quantity-title mb-20">
                                <label>Quantity</label>
                            </div>
                            <div class="product-quantity mr-20 mb-20">
                                <div class="cart-plus-minus"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                            </div>
                            <div class="pro-cart-btn">
                                <a href="cart.html" class="add-cart-btn mb-20">+ Add to Cart</a>
                            </div>
                        </div>
                        <div class="product__tag mb-25">
                            <span class="ct mr-20">Category:</span>
                            <span><a href="#">Accessories,</a></span>
                            <span><a href="#">Gaming,</a></span>
                            <span><a href="#">PC Computers,</a></span>
                            <span><a href="#">Ultrabooks</a></span>
                        </div>
                        <div class="product__share">
                            <span>Share :</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-xl-12">
                    <div class="product__details-tab">
                        <div class="product__details-tab-nav text-center mb-45">
                            <nav>
                                <div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
                                    <a class="nav-item nav-link active" id="des-tab" data-bs-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="add-tab" data-bs-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Additional Information</a>
                                    <a class="nav-item nav-link" id="review-tab" data-bs-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (3)</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="pro-detailsContent">
                            <div class="tab-pane fade active show" id="des" role="tabpanel">
                                <div class="product__details-des mb-20">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>

                                    <div class="product__details-des-list mb-20">
                                        <ul>
                                            <li><span>Claritas est etiam processus dynamicus.</span></li>
                                            <li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
                                            <li><span>Claritas est etiam processus dynamicus.</span></li>
                                            <li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
                                            <li><span>Claritas est etiam processus dynamicus.</span></li>
                                            <li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
                                        </ul>
                                    </div>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release. Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add" role="tabpanel">
                                <div class="product__desc-info mb-35">
                                    <ul>
                                       <li>
                                          <h6>Weight</h6>
                                          <span>2 lbs</span>
                                       </li>
                                       <li>
                                          <h6>Dimensions</h6>
                                          <span>12 × 16 × 19 in</span>
                                       </li>
                                       <li>
                                          <h6>Product</h6>
                                          <span>Purchase this product on rag-bone.com</span>
                                       </li>
                                       <li>
                                          <h6>Color</h6>
                                          <span>Gray, Black</span>
                                       </li>
                                       <li>
                                          <h6>Size</h6>
                                          <span>S, M, L, XL</span>
                                       </li>
                                       <li>
                                          <h6>Model</h6>
                                          <span>Model	</span>
                                       </li>
                                       <li>
                                          <h6>Shipping</h6>
                                          <span>Standard shipping: $5,95</span>
                                       </li>
                                       <li>
                                          <h6>Care Info</h6>
                                          <span>Machine Wash up to 40ºC/86ºF Gentle Cycle</span>
                                       </li>
                                       <li>
                                          <h6>Brand</h6>
                                          <span>Kazen</span>
                                       </li>
                                    </ul>
                                 </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel">
                                <div class="product__details-review mb-35">
                                    <div class="postbox__comments">
                                        <div class="postbox__comment-title mb-30">
                                            <h3>Reviews (03)</h3>
                                        </div>
                                        <div class="latest-comments mb-30">
                                            <ul>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/author/avater-1.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Siarhei Dzenisenka</h5>
                                                                <span> - 3 months ago </span>
                                                            </div>
                                                            <div class="user-rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                            <a class="reply-2" href="#">Leave Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="children">
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/author/avater-2.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Julias Roy</h5>
                                                                <span> - 6 months ago </span>
                                                            </div>
                                                            <div class="user-rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. </p>
                                                            <a class="reply-2" href="#">Leave Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/author/avater-3.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Arista Williamson</h5>
                                                                <span> - 6 months ago </span>
                                                            </div>
                                                            <div class="user-rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                            <a class="reply-2" href="#">Leave Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post-comments-form">
                                        <div class="post-comments-title mb-30">
                                            <h3>Your Review</h3>
                                            <div class="post-rating">
                                                <span>Your Rating :</span>
                                                <ul class="ml-5">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <form id="contacts-form" class="conatct-post-form" action="#">
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
                                                <div class="col-xl-12">
                                                    <div class="contact-icon p-relative contacts-email">
                                                        <input type="text" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-icon p-relative contacts-message">
                                                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Comments"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <button class="add-cart-btn" type="submit">Post comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-xl-12">
                    <div class="trending__info text-center">
                        <h5>Trending Products</h5>
                        <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
                    </div>
                </div>
            </div>
            <div class="row mt-40">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="product__item mb-20">
                        <div class="product__thumb w-img fix">
                            <a href="product-details.html">
                                <img src="assets/img/products/product-2/product-3.jpg" alt="">
                            </a>
                            <div class="product__flash-4">
                                <span>20%</span>
                            </div>
                            <div class="product__action transition-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                            <g>
                                                <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                C18.83,18.71,18.44,19,18,19z"></path>
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
                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <svg viewBox="0 0 22 22">
                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                            s2-0.9,2-2S12.1,9,11,9z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product__content">
                            <div class="product__tag product__tag-4">
                                <span>
                                    <a href="shop.html">Furniture</a>
                                </span>
                            </div>
                            <h3 class="product__title">
                                <a href="product-details.html">Wooden Single Drawer</a>
                            </h3>
                            <div class="product__price product__price-4 mb-10">
                                <span class="price">$125.00</span>
                            </div>
                            <div class="product__select-button">
                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="product__item mb-20">
                        <div class="product__thumb w-img fix">
                            <a href="product-details.html">
                                <img src="assets/img/products/product-2/product-1.jpg" alt="">
                            </a>
                            <div class="product__action transition-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                            <g>
                                                <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                C18.83,18.71,18.44,19,18,19z"></path>
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
                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <svg viewBox="0 0 22 22">
                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                            s2-0.9,2-2S12.1,9,11,9z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product__content">
                            <div class="product__tag product__tag-4">
                                <span>
                                    <a href="shp.html">LIVING ROOM</a>
                                </span>
                            </div>
                            <h3 class="product__title">
                                <a href="product-details.html">Smart Watches Wood</a>
                            </h3>
                            <div class="product__price product__price-4 mb-10">
                                <span class="price"><del>$155.00</del>  $140.00</span>
                            </div>
                            <div class="product__select-button">
                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="product__item mb-20">
                        <div class="product__thumb w-img fix">
                            <a href="product-details.html">
                                <img src="assets/img/products/product-2/product-2.jpg" alt="">
                            </a>
                            <div class="product__action transition-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                            <g>
                                                <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                C18.83,18.71,18.44,19,18,19z"></path>
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
                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <svg viewBox="0 0 22 22">
                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                            s2-0.9,2-2S12.1,9,11,9z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product__content">
                            <div class="product__tag product__tag-4">
                                <span>
                                    <a href="shop.html">Wooden</a>
                                </span>
                            </div>
                            <h3 class="product__title">
                                <a href="product-details.html">Panton Tunior Chair</a>
                            </h3>
                            <div class="product__price product__price-4 mb-10">
                                <span class="price">$199.00</span>
                            </div>
                            <div class="product__select-button">
                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="product__item mb-20">
                        <div class="product__thumb w-img fix">
                            <a href="product-details.html">
                                <img src="assets/img/products/product-2/product-4.jpg" alt="">
                            </a>
                            <div class="product__action transition-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <svg viewBox="0 0 22 22">
                                            <g>
                                                <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                C18.83,18.71,18.44,19,18,19z"></path>
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
                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <svg viewBox="0 0 22 22">
                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                            s2-0.9,2-2S12.1,9,11,9z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product__content">
                            <div class="product__tag product__tag-4">
                                <span>
                                    <a href="shp.html">LIVING ROOM</a>
                                </span>
                            </div>
                            <h3 class="product__title">
                                <a href="product-details.html">Smart Watches Wood</a>
                            </h3>
                            <div class="product__price product__price-4 mb-10">
                                <span class="price"><del>$155</del>  $140.00</span>
                            </div>
                            <div class="product__select-button">
                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-details-end -->

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
