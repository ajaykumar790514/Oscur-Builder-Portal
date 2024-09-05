 <!--Page Header Start-->
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?=base_url();?>assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Two Start-->
        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-two__left">
                            <div class="contact-two__img">
                                <img src="<?=base_url();?>assets/images/resources/contact-two-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-two__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">contact with us</span>
                                <h2 class="section-title__title">Get in touch now</h2>
                            </div>
                            <p class="contact-two__text-1">We are happy to hear from you.</p>
                            <ul class="list-unstyled contact-two__list">
                            <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>Have any question?</p>
                                        <h4>  <a href="tel:+91 9044811100">+91 9044811100, 9831171074</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <p>Write email</p>
                                        <h4><a href="mailto:enquiry@raghukul.co.in">enquiry@raghukul.co.in</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="content">
                                        <p>Visit anytime</p>
                                        <h4>126/26, S block, Govind Nagar, Kanpur-208011</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Two End-->

        <!--Google Map Start-->
        <section class="contact-page-google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.3130992439114!2d80.31129297520738!3d26.445634676928673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c47cf87eee56d%3A0x3b5bb56010c6277d!2sRaghukul!5e0!3m2!1sen!2sin!4v1708781423779!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>
        <!--Google Map End-->

        <!--Contact Three Start-->
        <section class="contact-three">
            <div class="container">
                <div class="contact-three__inner">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">write a message</span>
                        <h2 class="section-title__title">Feel free to write</h2>
                        <h5 class="error text-danger"></h5>
                        <h5 class="success text-success"></h5>
                    </div>
                    <div class="contact-three__form-box">
                        <form action="<?=base_url();?>Home/SubmitContactForm" class="contact-three__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="Your phone number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="contact-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-form__input-box text-message-box mb-5">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                   
                                    <div class="contact-form__btn-box">
                                    <div class="form-group mb-2 mt-5">
                                <div class="g-recaptcha" data-sitekey="6LdqK4wpAAAAAIEu6fprfpOXDf0jsxNUWb43Au8q"></div>
                                </div>
                                        <button type="submit" class="thm-btn contact-form__btn">Send a Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Three End-->

    <!--Brand One Start-->
    <section class="brand-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="brand-one__inner">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 150, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 2
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 3
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 4                        }
                    }}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/finance/hdfc.jpg" alt="" height="120px" width="auto">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/finance/axis.jpg" alt="" height="120px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/finance/icici.jpg" alt="" height="120px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/finance/lic.jpg" alt="" height="120px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/finance/pnb.jpg" alt="" height="120px">
                                    </div>
                                    <!-- <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/brand/brand-1-6.png" alt="" height="120px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/brand/brand-1-1.png" alt="" height="120px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/brand/brand-1-2.png" alt="" height="120px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/brand/brand-1-3.png" alt="" height="120px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/brand/brand-1-4.png" alt="" height="120px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/brand/brand-1-5.png" alt="" height="120px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?=base_url();?>assets/images/brand/brand-1-6.png" alt="" height="120px">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->