@include('partials.header')

    <!-- Sidebar area start here -->
    <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="logo mb-30">
            <img src="assets/images/logo/logo.svg" alt="logo">
        </div>
        <p class="text-justify">The foundation of any road is the subgrade, which provides a stable base for the road
            layers above. Proper compaction of
            the subgrade is crucial to prevent settling and ensure long-term road stability.</p>
        <ul class="info py-4 mt-65 bor-top bor-bottom">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">example@example.com</a>
            </li>
            <li class="py-4"><i class="fa-solid primary-color fa-phone-volume"></i> <a href="tel:+912659302003">+91 2659
                    302 003</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info.company@gmail.com</a></li>
        </ul>
        <div class="social-icon mt-65">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-twitter"></i></a>
            <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->

    <!-- Preloader area start -->
    <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div>
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->


    <main>
        <!-- Page banner area start here -->
        <section class="page-banner bg-image pt-130 pb-130" data-background="assets/images/banner/inner-banner.jpg">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">
                    {{ $category->name ?? 'All categories' }}
                </h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="{{ url('/') }}" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>{{ $category->name ?? 'All categories' }}</span>
                </div>
            </div>
        </section>

        <!-- Page banner area end here -->

        <!-- Product area start here -->
        <section class="product-area pt-130 pb-130">
            <div class="container">
                <div class="pb-20 bor-bottom shop-page-wrp d-flex justify-content-between align-items-center mb-65">
                    <p class="fw-600">Showing {{ $categories->count() }} results</p>
                    <div class="short">
                        <select name="shortList" id="shortList">
                            <option value="0">Short by popularity</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->slug }}" {{ $cat->slug == ($category->slug ?? '') ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4">
                        <div class="product__left-item sub-bg">
                            <h4 class="mb-30 left-title">Special Offer</h4>
                            <div class="image mb-30">
                                <img src="assets/images/coundown/coundown-image1.png" alt="image">
                            </div>
                            <div class="product__content p-0">
                                <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">Mango Nic Salt
                                        E-Liquidt</a></h4>
                                <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                <div class="star mt-20">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="image pt-40 mb-30 bor-top mt-40">
                                <img src="assets/images/coundown/coundown-image2.png" alt="image">
                            </div>
                            <div class="product__content p-0">
                                <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">Watermelon Nic
                                        Salt</a></h4>
                                <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                <div class="star mt-20">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="product__coundown pt-30 bor-top mt-40">
                                <h4>Hurry Up!</h4>
                                <span>offer ends in</span>
                                <div class="d-flex align-items-center gap-3 flex-wrap mt-25">
                                    <div class="coundown-item">
                                        <span id="day"></span>
                                        <h6>Day</h6>
                                    </div>
                                    <div class="coundown-item">
                                        <span id="hour"></span>
                                        <h6>hour</h6>
                                    </div>
                                    <div class="coundown-item">
                                        <span id="min"></span>
                                        <h6>min</h6>
                                    </div>
                                    <div class="coundown-item">
                                        <span id="sec"></span>
                                        <h6>Sec</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row g-4">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-single.html" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image1.png"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image3.png"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">Menthol
                                                E-Cigarette Kit</a></h4>
                                        <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="#0"><i
                                            class="fa-regular fa-cart-shopping primary-color me-1"></i> <span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-single.html" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image2.png"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image4.png"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">Disposable
                                                Sub-Ohm Tank</a></h4>
                                        <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="#0"><i
                                            class="fa-regular fa-cart-shopping primary-color me-1"></i> <span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-single.html" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image3.png"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image5.png"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">POP Extra
                                                Strawberry</a></h4>
                                        <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="#0"><i
                                            class="fa-regular fa-cart-shopping primary-color me-1"></i> <span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-single.html" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image4.png"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image6.png"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">Battery And
                                                Charger Kit</a></h4>
                                        <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="#0"><i
                                            class="fa-regular fa-cart-shopping primary-color me-1"></i> <span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-single.html" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image5.png"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image3.png"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">Pods Sold
                                                Separately</a></h4>
                                        <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="#0"><i
                                            class="fa-regular fa-cart-shopping primary-color me-1"></i> <span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-single.html" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image6.png"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image4.png"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">100ml Nic
                                                Salt Juice</a></h4>
                                        <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="#0"><i
                                            class="fa-regular fa-cart-shopping primary-color me-1"></i> <span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-single.html" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image7.png"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image8.png"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">Disposable
                                                Sub-Ohm Tank</a></h4>
                                        <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="#0"><i
                                            class="fa-regular fa-cart-shopping primary-color me-1"></i> <span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-single.html" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image8.png"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image1.png"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">Battery And
                                                Charger Kit</a></h4>
                                        <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="#0"><i
                                            class="fa-regular fa-cart-shopping primary-color me-1"></i> <span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-single.html" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image4.png"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image3.png"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html">POP Extra
                                                Strawberry</a></h4>
                                        <del>$74.50</del><span class="primary-color ml-10">$49.50</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="#0"><i
                                            class="fa-regular fa-cart-shopping primary-color me-1"></i> <span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="pagi-wrp mt-65">
                            <a href="#0" class="pagi-btn">01</a>
                            <a href="#0" class="pagi-btn active">02</a>
                            <a href="#0" class="pagi-btn ">03</a>
                            <a href="#0" class="fa-regular ms-2 primary-hover fa-angle-right"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product area end here -->
    </main>

    @include('partials.footer')
