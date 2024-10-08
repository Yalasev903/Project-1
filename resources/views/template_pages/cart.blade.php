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
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Cart Page</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="index.html" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>Cart</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- cart page area start here -->
        <section class="cart-page pt-130 pb-130">
            <div class="container">

                <div class="shopping-cart radius-10 bor sub-bg">

                    <div
                        class="column-labels py-3 px-4 d-flex justify-content-between align-items-center fw-bold text-white text-uppercase">
                        <label class="product-details">Product</label>
                        <label class="product-price">Price</label>
                        <label class="product-quantity">Quantity</label>
                        <label class="product-line-price">Total</label>
                        <label class="product-removal">Edit</label>
                    </div>

                    <div class="product p-4 bor-top bor-bottom d-flex justify-content-between align-items-center">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/01.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">NebulaVape</h4>
                        </div>
                        <div class="product-price">12.99</div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>
                        <div class="product-line-price">25.98</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>

                    <div class="product p-4 bor-bottom d-flex justify-content-between align-items-center">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/02.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">VaporRift</h4>
                        </div>
                        <div class="product-price">50.00</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">50.00</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 bor-bottom d-flex justify-content-between align-items-center">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/03.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">ZenithVapor</h4>
                        </div>
                        <div class="product-price">45.99</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">45.99</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 bor-bottom d-flex justify-content-between align-items-center">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/04.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">GravityGlide</h4>
                        </div>
                        <div class="product-price">99.99</div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>

                        <div class="product-line-price">199.99</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 d-flex justify-content-between align-items-center">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/02.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">VortexVape
                            </h4>
                        </div>
                        <div class="product-price">25.98</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>
                        <div class="product-line-price">25.98</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>

                    <div class="totals">
                        <div class="totals-item theme-color float-end mt-20">
                            <span class="fw-bold text-uppercase py-2">cart total =</span>
                            <div class="totals-value d-inline py-2 pe-2" id="cart-subtotal">399.97</div>
                        </div>
                    </div>

                </div>
                <!-- shopping-cart-mobile -->
                <div class="shopping-cart mobile-view bor sub-bg">

                    <div class="product p-4 bor-top bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/01.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">VortexVape</h4>
                        </div>
                        <div class="product-price">12.99</div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>
                        <div class="product-line-price">25.98</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>

                    <div class="product p-4 bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/02.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">EnigmaVapor</h4>
                        </div>
                        <div class="product-price">50.00</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">50.00</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/03.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">ZenithVapor</h4>
                        </div>
                        <div class="product-price">45.99</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">45.99</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/04.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">RadiantVape</h4>
                        </div>
                        <div class="product-price">99.99</div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>

                        <div class="product-line-price">199.99</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/02.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">SerenitySmoke</h4>
                        </div>
                        <div class="product-price">25.98</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>
                        <div class="product-line-price">25.98</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>

                    <div class="totals">
                        <div class="totals-item theme-color float-end">
                            <span class="fw-bold text-uppercase py-2">cart total =</span>
                            <div class="totals-value d-inline py-2 pe-2">399.97</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- cart page area end here -->
    </main>

@include('partials.footer')