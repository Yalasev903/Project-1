@include('partials.header')

    <!-- Sidebar area start here -->
    <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="logo mb-30">
            <img src="{{ asset('images/logo/logo.svg') }}" alt="logo">
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
        <section class="page-banner bg-image pt-130 pb-130" data-background="{{ asset('images/banner/inner-banner.jpg') }}">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Shop Details</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="{{ url('index') }}" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <a href="{{ url('shop') }}" class="primary-hover"> shop <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>Shop Details</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Shop single area start here -->
        <section class="shop-single pt-130 pb-130">
            <div class="container">
                <!-- product-details area start here -->
                <div class="product-details-single pb-40">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="image img">
                                <div class="swiper shop-single-slide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{ asset('images/shop/01.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('images/shop/01.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('images/shop/01.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('images/shop/01.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 swiper shop-slider-thumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide slide-smoll">
                                            <img src="{{ asset('images/shop/01.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide slide-smoll">
                                            <img src="{{ asset('images/shop/01.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide slide-smoll">
                                            <img src="{{ asset('images/shop/01.jpg') }}" alt="image">
                                        </div>
                                        <div class="swiper-slide slide-smoll">
                                            <img src="{{ asset('images/shop/01.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content h24">
                                <h3 class="pb-2 primary-color">POP Extra Strawberry</h3>
                                <div class="star primary-color pb-2">
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star-half-stroke sm-font"></i></span>
                                </div>
                                <h2 class="pb-3">$440.00</h2>
                                <h4 class="pb-2 primary-color">Product Description</h4>
                                <p class="text-justify mb-10">Rapidiusly transform corporate expertise whereas
                                    enterprise-wide
                                    web
                                    services.
                                    Progressively whiteboard multifunctional
                                    networks for pandemic total linkage a Synergistically recaptiualize client and based
                                    methods of empowerment with
                                    sustainable bandwidth.</p>
                                <p class="text-justify">Progressively whiteboard multifunctional
                                    networks for pandemic total linkage a Synergistically recaptiualize client and based
                                    methods of empowerment with
                                    sustainable bandwidth.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="details-area">
                                        <div class="category flex-wrap mt-4 d-flex py-3 bor-top bor-bottom">
                                            <h4 class="pe-3">Categories :</h4>
                                            <a href="#0" class="primary-hover">Woman</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Man</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Kids</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Accessories</a>
                                        </div>
                                        <div class="d-flex flex-wrap py-3 bor-bottom">
                                            <h4 class="pe-3">Tags :</h4>
                                            <a href="#0" class="primary-hover">Fashion</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Lifestyle</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Travel</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Video</a>
                                            <span class="px-2">|</span>
                                            <a href="#0" class="primary-hover">Audio</a>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center py-3 bor-bottom">
                                            <h4 class="pe-3">Share:</h4>
                                            <div class="social-media">
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                                <a href="#" class="mx-2 primary-color secondary-hover"><i
                                                        class="fa-brands fa-pinterest-p"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-wrp py-4">
                                            <div class="cart-quantity">
                                                <form id='myform' method='POST' class='quantity' action='#'>
                                                    <input type='button' value='-' class='qtyminus minus'>
                                                    <input type='text' name='quantity' value='0' class='qty'>
                                                    <input type='button' value='+' class='qtyplus plus'>
                                                </form>
                                            </div>
                                            <div class="discount">
                                                <input type="text" placeholder="Enter Discount Code">
                                            </div>
                                        </div>
                                        <a href="#0" class="d-block text-center btn-two mt-40"><span><i
                                                    class="fa-solid fa-basket-shopping pe-2"></i>
                                                add
                                                to
                                                cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-details area end here -->

                <!-- description review area start here -->
                <div class="shop-singe-tab">
                    <ul class="nav nav-pills mb-4 bor-top bor-bottom py-2">
                        <li class="nav-item">
                            <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 pe-3 active">
                                <h4 class="text-uppercase">description</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#review" data-bs-toggle="tab" class="nav-link">
                                <h4 class="text-uppercase">reviews (4)</h4>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active">
                            <p class="pb-4 text-justify">Proactively disseminate impactful mindshare without technically
                                sound web
                                services.
                                Distiively harness
                                compelling
                                innovation before high payoff testing procedures. Uniquely fashion customized web
                                services
                                with cross
                                functional
                                internal or "organic" sources. Uniquely restore error-free e-commerce via
                                multidisciplinary
                                antailers.
                                Completely whiteboard user friendly quality vectors rather than synergistic technologi
                                Professionally
                                evisculate
                                enterprise wide metrics without resource maximizing interfaces. Synergistically
                                benchmark
                                enterprise-wide e-tailers
                                through optimal paradigms. Phosfluorescently foster cutting-edge was and benefits
                                without
                                magnetic</p>
                            <p class="pb-4 text-justify">Completely build emerging ideas through covalent applications.
                                Distinctively
                                synthesize user
                                friendly
                                collaboration and
                                idsharing with superior content. Energistically incentivize user friendly models rather
                                than
                                timely
                                convergence.
                                Objectively disintermediate high standards in paradigms before state the art process
                                improvements.
                                Interactively
                                orchestrate plug-and-play human capital whereas customer directed initiatives.</p>
                            <p class="text-justify">Intrinsicly provide access to team driven information without
                                adaptive content.
                                Collaboratively embrace
                                reliable supply
                                chains via extensible benefits. Enthusiastically visualize accurate human capital before
                                backend
                                meta-services.
                                Continually reinvent interdependent schemas through mission-critical benefits.
                                Competently
                                leverage
                                existing parallel
                                action items through end-to-end "outside the box" thinking.</p>
                        </div>
                        <div id="review" class="tab-pane fade">
                            <div class="review-wrp">
                                <div class="abmin d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="img pb-4 pb-md-0 me-4">
                                        <img src="{{ asset('images/about/comment3.png') }}" alt="image">
                                    </div>
                                    <div class="content position-relative p-4 bor">
                                        <div class="head-wrp pb-1 d-flex flex-wrap justify-content-between">
                                            <a href="#0">
                                                <h4 class="text-capitalize primary-color">Janaton Doe <span
                                                        class="sm-font ms-2 fw-normal">27
                                                        March 2023
                                                        at
                                                        3.44
                                                        pm</span>
                                                </h4>
                                            </a>
                                            <div class="star primary-color">
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke sm-font"></i></span>
                                            </div>
                                        </div>
                                        <p class="text-justify">Globally leverage existing sticky testing procedures
                                            whereas
                                            timely
                                            alignments. Appropriately leverage existing cross unit human a capital
                                            Globally
                                            distributed
                                            process improvements and empowered
                                            internal or sources. </p>
                                    </div>
                                </div>
                                <div class="abmin d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="img pb-4 pb-md-0 me-4">
                                        <img src="{{ asset('images/about/comment3.png') }}" alt="image">
                                    </div>
                                    <div class="content position-relative p-4 bor">
                                        <div class="head-wrp pb-1 d-flex flex-wrap justify-content-between">
                                            <a href="#0">
                                                <h4 class="text-capitalize primary-color">kawser ahemd<span
                                                        class="sm-font ms-2 fw-normal">27
                                                        March 2023
                                                        at
                                                        3.44
                                                        pm</span>
                                                </h4>
                                            </a>
                                            <div class="star primary-color">
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke sm-font"></i></span>
                                            </div>
                                        </div>
                                        <p class="text-justify">Globally leverage existing sticky testing procedures
                                            whereas
                                            timely
                                            alignments. Appropriately leverage existing cross unit human a capital
                                            Globally
                                            distributed
                                            process improvements and empowered
                                            internal or sources. </p>
                                    </div>
                                </div>
                                <div class="abmin d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="img pb-4 pb-md-0 me-4">
                                        <img src="{{ asset('images/about/comment3.png') }}" alt="image">
                                    </div>
                                    <div class="content position-relative p-4 bor">
                                        <div class="head-wrp pb-1 d-flex flex-wrap justify-content-between">
                                            <a href="#0">
                                                <h4 class="text-capitalize primary-color">famad sami<span
                                                        class="sm-font ms-2 fw-normal">27
                                                        March 2023
                                                        at
                                                        3.44
                                                        pm</span>
                                                </h4>
                                            </a>
                                            <div class="star primary-color">
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke sm-font"></i></span>
                                            </div>
                                        </div>
                                        <p class="text-justify">Globally leverage existing sticky testing procedures
                                            whereas
                                            timely
                                            alignments. Appropriately leverage existing cross unit human a capital
                                            Globally
                                            distributed
                                            process improvements and empowered
                                            internal or sources. </p>
                                    </div>
                                </div>
                                <div class="abmin d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="img pb-4 pb-md-0 me-4">
                                        <img src="{{ asset('images/about/comment3.png') }}" alt="image">
                                    </div>
                                    <div class="content position-relative p-4 bor">
                                        <div class="head-wrp pb-1 d-flex flex-wrap justify-content-between">
                                            <a href="#0">
                                                <h4 class="text-capitalize primary-color">Abu rayhan <span
                                                        class="sm-font ms-2 fw-normal">27
                                                        March 2023
                                                        at
                                                        3.44
                                                        pm</span>
                                                </h4>
                                            </a>
                                            <div class="star primary-color">
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star sm-font"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke sm-font"></i></span>
                                            </div>
                                        </div>
                                        <p class="text-justify">Globally leverage existing sticky testing procedures
                                            whereas
                                            timely
                                            alignments. Appropriately leverage existing cross unit human a capital
                                            Globally
                                            distributed
                                            process improvements and empowered
                                            internal or sources. </p>
                                    </div>
                                </div>
                                <div class="section-title mt-5 py-15 mb-30">
                                    <h2 class="text-capitalize primary-color mb-10">add a review</h2>
                                    <p class="mb-20">Your email address will not be published. Required fields are
                                        marked *
                                    </p>
                                    <div class="shop-single__rate-now">
                                        <p>Rate this product? *</p>
                                        <div class="star">
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <input type="text" class="w-100 mb-4 bor px-4 py-2"
                                                    placeholder="Your Name*">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="w-100 mb-4 bor px-4 py-2"
                                                    placeholder="Your Email*">
                                            </div>
                                        </div>
                                        <textarea class="w-100 mb-4 bor p-4" placeholder="Message"></textarea>
                                    </form>
                                    <div class="btn-wrp">
                                        <button class="btn-one"><span>Submit Now</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- description review area end here -->
        </section>
        <!-- Shop single area end here -->
    </main>

    @include('partials.footer')
