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
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Contact Us</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="index.html" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>Contact Us</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Contact form area start here -->
        <section class="contact pt-130 pb-130">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="content radius-10 bg-image">
                            <h2>Have something in mind? <br>
                                Let's talk.</h2>
                            <p>Adipiscing elit, sed do eiusmod tempor incididunt ut labore <br> et dolore magna
                                aliqua.
                                Ut enim ad minim.</p>
                            <div class="arry"><img src="assets/images/contact/arry.png" alt=""></div>
                            <ul>
                                <li><a href="https://www.google.com/maps/d/viewer?mid=1UZ57Drfs3SGrTgh6mrYjQktu6uY&amp;hl=en_US&amp;ll=18.672105000000013%2C105.68673800000003&amp;z=17"
                                        target="_blank"><i class="fa-solid fa-location-dot"></i>785 15h Street,
                                        Office
                                        478
                                        Berlin </a>
                                </li>
                                <li><a href="tel:1-732-798-0976"><i class="fa-solid fa-phone-volume"></i>+1 800
                                        555 45
                                        65</a>
                                </li>
                                <li><a href="mailto:company.info@mail.com"><i
                                            class="fa-solid fa-envelope"></i>info.stoky@company.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-area">
                            <form action="#0">
                                <input type="text" placeholder="Name">
                                <input type="email" placeholder="Email">
                                <select name="subject" id="subject">
                                    <option value="0">Select Subject</option>
                                    <option value="0">Account</option>
                                    <option value="0">Service</option>
                                    <option value="0">Pricing</option>
                                    <option value="0">Support</option>
                                </select>
                                <textarea name="Your Review" id="massage" placeholder="Message..."></textarea>
                                <div class="radio-btn mt-2">
                                    <span></span>
                                    <p>I accept your terms & conditions</p>
                                </div>
                                <button class="mt-40 btn-one"><span>Submit Now</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact form area end here -->

        <!-- Contact map area start here -->
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059445134!2d-74.2598661379975!3d40.697149417741365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1670395681365!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Contact map area end here -->
    </main>

@include('partials.footer')