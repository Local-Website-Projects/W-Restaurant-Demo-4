<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg">
    <title>Home - The Henley Southlake</title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-5.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/css/plugins/metismenu.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/timepickers.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/hover-revel.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="home-three">

    <!-- header style two -->
    <!-- header area start -->
    <?php include ('include/header.php');?>
    <!-- header style two End -->

    <!-- banner start -->
    <div class="rts-banner-main-area-swiper banner-three">
        <div class="banner-shape-1">
            <img src="assets/images/banner/victor-13.webp" alt="shape">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-one-wrapper pt--100">
                        <h1 class="title-banner">
                            Delicious Foods
                        </h1>
                        <div class="button-area-banner">
                            <a href="about.php" class="rts-btn btn-primary">View More</a>
                            <a href="menu.php" class="rts-btn btn-seconday">Food Menu</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-section-area">
                        <img src="assets/images/banner/banner-img2.webp" alt="hero-image">
                    </div>
                </div>
            </div>
            <div class="rts-reservation-area">
                <form action="#" class="appoinment-form">
                    <div class="single-input">
                        <h3 class="title">Book A Table</h3>
                    </div>
                    <div class="single-input">
                        <input type="number" placeholder="Person" required>
                    </div>
                    <div class="single-input">
                        <input type="number" placeholder="Kids" required>
                    </div>
                    <div class="single-input">
                        <input placeholder="Date" type="text" name="checkIn" id="datepicker" value="" class="calendar" required>
                    </div>
                    <div class="single-input">
                        <input type="text" id="timepicker" placeholder="Time" />
                    </div>
                    <div class="single-input">
                        <button type="submit" class="rts-btn btn-primary">BOOK TABLE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- menu area start -->
    <div class="rts-menu-area3 rts-section-gap" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
        <div class="container">
            <div class="menu-area-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="thumbnail-2">
                            <div class="reveal-item overflow-hidden aos-init">
                                <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end"></div>
                                <img src="assets/images/about/about3.webp" alt="about">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="banner-one-wrapper">
                            <div class="title-img" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <img src="assets/images/about/title-shape.png" alt="about">
                            </div>
                            <h1 class="title-banner" data-sal="slide-up" data-sal-delay="170" data-sal-duration="800">
                                Welcome To Our <br> Luxury Restaurant
                            </h1>
                            <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                                <span class="shape"></span>
                                <span class="shape"></span>
                                <span class="shape"></span>
                            </div>
                            <p class="desc" data-sal="slide-up" data-sal-duration="800">It’s the story of an everlasting love affair, Dieter Delicioz and <br> the Atlantic Ocean. Our proximity to the abundant riches of <br> the sea and Portugal’s excellent produce.</p>
                            <div class="button-area-banner" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                                <a href="menu.php" class="rts-btn btn-secondary">More Foods</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="menu-wrapper-inner">
                            <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <div class="menu-image"><a href="#"><img src="assets/images/project/sm-01.jpg" alt="item"></a></div>
                                <div class="content">
                                    <h4 class="p-title"><a href="#">Chicha Morada</a></h4>
                                    <div class="price-tag"><a href="#">$33.00</a></div>
                                </div>
                            </div>
                            <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <div class="menu-image"><a href="#"><img src="assets/images/project/sm-02.jpg" alt="item"></a></div>
                                <div class="content">
                                    <h4 class="p-title"><a href="#">Tommy’s Margarita</a></h4>
                                    <div class="price-tag"><a href="#">$30.00</a></div>
                                </div>
                            </div>
                            <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <div class="menu-image"><a href="#"><img src="assets/images/project/sm-03.jpg" alt="item"></a></div>
                                <div class="content">
                                    <h4 class="p-title"><a href="#">Prickly Pear Tonic</a></h4>
                                    <div class="price-tag"><a href="#">$15.00</a></div>
                                </div>
                            </div>
                            <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <div class="menu-image"><a href="#"><img src="assets/images/project/sm-04.jpg" alt="item"></a></div>
                                <div class="content">
                                    <h4 class="p-title"><a href="#">Crispy Skin Chicken</a></h4>
                                    <div class="price-tag"><a href="#">$16.00</a></div>
                                </div>
                            </div>
                            <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <div class="menu-image"><a href="#"><img src="assets/images/project/sm-05.jpg" alt="item"></a></div>
                                <div class="content">
                                    <h4 class="p-title"><a href="#">Wild Mushroom Arancini</a></h4>
                                    <div class="price-tag"><a href="#">$12.00</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu area end -->


    <!-- menu area start -->
    <div class="rts-menu-area3 area-2 rts-section-gap" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
        <div class="container">
            <div class="menu-area-inner">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="banner-one-wrapper">
                            <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                                <span class="shape"></span>
                                <span class="shape"></span>
                                <span class="shape"></span>
                            </div>
                            <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                                Our Set Menus
                            </h1>
                            <p class="desc" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">A restaurant is a business that prepares and serves food and <br> drinks to customers meals are generally served</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="portfolio-wrapper2 mb-30" data-sal="slide-up" data-sal-delay="1000" data-sal-duration="800">
                            <a href="#" class="image">
                                <img class="img-fluid" src="assets/images/project/01.jpg" alt="Portfolio Img">
                            </a>
                            <div class="portfolio-content">
                                <div class="content">
                                    <p class="title"><a href="#">Chicha Morada</a></p>
                                    <span class="price">$33.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="portfolio-wrapper2 mb-30" data-sal="slide-up" data-sal-delay="1000" data-sal-duration="800">
                            <a href="#" class="image">
                                <img class="img-fluid" src="assets/images/project/02.jpg" alt="Portfolio Img">
                            </a>
                            <div class="portfolio-content">
                                <div class="content">
                                    <p class="title"><a href="#">Tommy’s Margarita</a></p>
                                    <span class="price">$33.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="portfolio-wrapper2 mb-30" data-sal="slide-up" data-sal-delay="1000" data-sal-duration="800">
                            <a href="#" class="image">
                                <img class="img-fluid" src="assets/images/project/03.jpg" alt="Portfolio Img">
                            </a>
                            <div class="portfolio-content">
                                <div class="content">
                                    <p class="title"><a href="#">Prickly Pear Tonic</a></p>
                                    <span class="price">$33.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="portfolio-wrapper2 mb-30" data-sal="slide-up" data-sal-delay="1000" data-sal-duration="800">
                            <a href="#" class="image">
                                <img class="img-fluid" src="assets/images/project/04.jpg" alt="Portfolio Img">
                            </a>
                            <div class="portfolio-content">
                                <div class="content">
                                    <p class="title"><a href="#">Crispy Skin Chicken</a></p>
                                    <span class="price">$33.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-area-banner" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800">
                    <a href="menu.php" class="rts-btn btn-secondary">More Dishes <i class="fa-light fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- menu area end -->

    <!-- Video area start -->
    <div class="rts-video-area rts-section-gap">
        <div class="container">
            <div class="video-area-inner">
                <div class="vedio-icone">
                    <a id="play-video" class="video-play-button" href="#">
                        <span></span>
                        <p class="text">
                            Play Vedio
                        </p>
                    </a>
                    <div id="video-overlay" class="video-overlay">
                        <a class="video-overlay-close">×</a>
                    </div>
                </div>
                <div class="video-section-bottom">
                    <div class="rts-brand-area">
                        <div class="swiper-brand-main-wrapper">
                            <div class="swiper mySwiper-brand">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/brand/01.webp" alt="brand"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/brand/02.webp" alt="brand"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/brand/03.webp" alt="brand"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/brand/04.webp" alt="brand"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/brand/05.webp" alt="brand"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-testimonial-area ">
                        <div class="container">
                            <div class="testimonial-area-inner">
                                <div class="swiper-testimonial-main-wrapper">
                                    <div class="swiper swiper-testimonials-1">
                                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                        </div>
                                        <div class="left-quote">
                                            <img src="assets/images/testimonials/quote-3.webp" alt="testimonial">
                                        </div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial-wrapper">
                                                    <div class="content">
                                                        <h3>
                                                            <em>“ Customer feedback is the information, insights, issues, & input shared by your community about their experiences with your company, product, or services. ”</em>
                                                        </h3>
                                                    </div>
                                                    <div class="author">
                                                        <h5 class="title">Alonso D. Dowson</h5>
                                                        <p class="sub-title">ceo of Alonso co.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-wrapper">
                                                    <div class="content">
                                                        <h3>
                                                            <em>“ Customer feedback is the information, insights, issues, & input shared by your community about their experiences with your company, product, or services. ”</em>
                                                        </h3>
                                                    </div>
                                                    <div class="author">
                                                        <h5 class="title">Alonso D. Dowson</h5>
                                                        <p class="sub-title">ceo of Alonso co.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-wrapper">
                                                    <div class="content">
                                                        <h3>
                                                            <em>“ Customer feedback is the information, insights, issues, & input shared by your community about their experiences with your company, product, or services. ”</em>
                                                        </h3>
                                                    </div>
                                                    <div class="author">
                                                        <h5 class="title">Alonso D. Dowson</h5>
                                                        <p class="sub-title">ceo of Alonso co.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-quote">
                                            <img src="assets/images/testimonials/quote-4.webp" alt="testimonial">
                                        </div>
                                    </div>
                                    <div class="next-prev-btn">
                                        <div class="swiper-button-prevs"><i class="fa-solid fa-arrow-left-long"></i></div>
                                        <div class="swiper-button-nexts"><i class="fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video area end -->

    <!-- Faq area start -->
    <div class="rts-faq-area bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pr--10 first">
                    <div class="banner-one-wrapper">
                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="170" data-sal-duration="800">
                            Get Solid Answer
                        </h1>
                        <p class="desc" data-sal="slide-up" data-sal-duration="800">A restaurant is a business that prepares and serves food and <br> drinks to customers meals are generally.</p>
                    </div>
                    <div class="accordion-two" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How much does a home remodeling cost?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="disc">Fusce lacinia nulla consequat porta et viverra velit etiam, varius per condimentum lacus ultricies a placerat venatis semper donec id accumsan augue eleifend facili sis. Lectus arcu odio erat congue sociosqu ultricies</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How we build our construction site for you?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="disc">Fusce lacinia nulla consequat porta et viverra velit etiam, varius per condimentum lacus ultricies a placerat venatis semper donec id accumsan augue eleifend facili sis. Lectus arcu odio erat congue sociosqu ultricies</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is included with a free remodeling estimate?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="disc">Fusce lacinia nulla consequat porta et viverra velit etiam, varius per condimentum lacus ultricies a placerat venatis semper donec id accumsan augue eleifend facili sis. Lectus arcu odio erat congue sociosqu ultricies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl--60 mt_md--50 mt_sm--50 pl_md--0 pl_sm--0 pr_sm--0 pb_md--100 pb_sm--100">
                    <div class="about-one-img">
                        <div class="thumbnail-1">
                            <img src="assets/images/about/about5.webp" alt="about">
                            <div class="line">
                                <img src="assets/images/about/line-shape-1.webp" alt="about">
                            </div>
                        </div>
                        <div class="thumbnail-2">
                            <div class="reveal-item overflow-hidden aos-init">
                                <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end"></div>
                                <img src="assets/images/about/about6.webp" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq area end -->

    <!-- Contact area start -->
    <div class="rts-contact-area2 rts-section-gapTop">
        <div class="rts-contact-area-inner">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd" width="600" height="900" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <form action="#" class="appoinment-form">
                <div class="banner-one-wrapper">
                    <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                        <span class="shape"></span>
                        <span class="shape"></span>
                        <span class="shape"></span>
                    </div>
                    <h1 class="title-banner" data-sal="slide-up" data-sal-delay="170" data-sal-duration="800">
                        Make Reservations
                    </h1>
                    <p class="desc" data-sal="slide-up" data-sal-duration="800">A restaurant is a business that prepares and serves food and <br> drinks to customers meals are generally.</p>
                </div>
                <div class="single-input">
                    <label for="guest2">Number of Guest <span class="indicator">*</span></label>
                    <input type="number" id="guest2" placeholder="Person" required>
                </div>
                <div class="single-input">
                    <label for="datepicker2">Select Date <span class="indicator">*</span></label>
                    <input placeholder="Date" type="text" name="checkIn" id="datepicker2" value="" class="calendar" required>
                </div>
                <div class="single-input">
                    <label for="timepicker2">Select Date <span class="indicator">*</span></label>
                    <input type="text" id="timepicker2" placeholder="Time" />
                </div>
                <div class="single-input">
                    <button type="submit" class="rts-btn btn-primary">BOOK RESERVATION</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact area end -->

    <!-- Team area start -->
    <div class="rts-team-area2 rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="170" data-sal-duration="800">
                            Our Popular Chefs
                        </h1>
                        <p class="desc" data-sal="slide-up" data-sal-duration="800">A restaurant is a business that prepares and serves food and <br> drinks to customers meals are generally.</p>
                    </div>
                </div>
            </div>
            <div class="slider-div team-slider" data-sal="slide-up" data-sal-delay="700" data-sal-duration="800">
                <div class="swiper rts-team-slider2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-wrapper">
                                <div class="image">
                                    <a href="#"><img src="assets/images/team/01.webp" alt="team"></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3 class="team-name"><a href="#">Alice Capsey</a></h3>
                                    <p class="team-title">Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wrapper">
                                <div class="image">
                                    <a href="#"><img src="assets/images/team/02.webp" alt="team"></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3 class="team-name"><a href="#">Danni Wyatt</a></h3>
                                    <p class="team-title">Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wrapper">
                                <div class="image">
                                    <a href="#"><img src="assets/images/team/03.webp" alt="team"></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3 class="team-name"><a href="#">Joe Root</a></h3>
                                    <p class="team-title">Finance Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wrapper">
                                <div class="image">
                                    <a href="#"><img src="assets/images/team/04.webp" alt="team"></a>
                                    <ul class="social-area">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3 class="team-name"><a href="#">Herry Brook</a></h3>
                                    <p class="team-title">Cook</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team area end -->

    <!-- Cta area start -->
    <div class="rts-cta-area">
        <div class="container">
            <div class="cta-inner">
                <h2 class="title">
                    <span class="first-title">Book Your Table Today.</span>
                    <span class="second-title"> Book Now!</span>
                </h2>
                <a href="#" class="rts-btn btn-primary"><i class="fa-solid fa-table"></i>BOOK A TABLE</a>
            </div>
        </div>
    </div>
    <!-- Cta area end -->

    <!-- blog area start -->
    <div class="rts-blog-area rts-blog-area-2 rts-section-gap home-three">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Blog & Insights
                        </h1>
                        <p class="desc" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">It’s the story of an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.</p>
                    </div>
                </div>
            </div>
            <div class="rts-blog-inner" data-sal="slide-up" data-sal-delay="1500" data-sal-duration="800">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-wrapper">
                            <div class="image-part">
                                <img src="assets/images/blog/blog-01.jpg" alt="blog">
                            </div>
                            <div class="blog-badge">
                                <span class="date">12</span>
                                <span class="month">APR</span>
                            </div>
                            <div class="content">
                                <p class="tag"><a href="#">Fast Food</a></p>
                                <h3 class="title"><a href="#">Love and food: It is all about dinenos restaurant</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-wrapper">
                            <div class="image-part">
                                <img src="assets/images/blog/blog-03.jpg" alt="blog">
                            </div>
                            <div class="blog-badge">
                                <span class="date">12</span>
                                <span class="month">APR</span>
                            </div>
                            <div class="content">
                                <p class="tag"><a href="#">Dinner</a></p>
                                <h3 class="title"><a href="#">Enjoy an exceptional journey of taste of joy.</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-wrapper">
                            <div class="image-part">
                                <img src="assets/images/blog/blog-04.jpg" alt="blog">
                            </div>
                            <div class="blog-badge">
                                <span class="date">12</span>
                                <span class="month">APR</span>
                            </div>
                            <div class="content">
                                <p class="tag"><a href="#">Restaurant</a></p>
                                <h3 class="title"><a href="#">The opportunity to work abroad is a prospect, one</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->

    <!-- rts footer area start -->
    <!-- rts footer area start -->
    <?php include ('include/footer.php');?>
    <!-- rts footer area end -->
    <!-- rts footer area end -->

    <!-- header style two -->

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- progress area end -->

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>


    <div id="anywhere-home" class="">
    </div>

    <!-- pre loader start -->
    <div id="dinenos-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->


    <!-- jquery js -->
    <script src="assets/js/plugins/jquery.min.js"></script>
    <!-- jquery ui -->
    <script src="assets/js/vendor/jqueryui.js"></script>
    <!-- counter up -->
    <script src="assets/js/plugins/counter-up.js"></script>
    <script src="assets/js/plugins/swiper.js"></script>
    <!-- twinmax -->
    <script src="assets/js/vendor/twinmax.js"></script>
    <!-- twinmax -->
    <script src="assets/js/vendor/aos.js"></script>
    <!-- twinmax -->
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <!-- split text js -->
    <script src="assets/js/vendor/split-text.js"></script>
    <!-- text plugins -->
    <script src="assets/js/plugins/text-plugins.js"></script>
    <!-- waypoint js -->
    <script src="assets/js/plugins/metismenu.js"></script>
    <!-- metismenu js -->
    <script src="assets/js/plugins/waypoint.js"></script>
    <!-- metismenu js -->
    <script src="assets/js/vendor/metisMenu.min.js"></script>
    <!-- waw -->
    <script src="assets/js/vendor/wow.js"></script>
    <!-- jquery ui js -->
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <!-- jquery ui js -->
    <script src="assets/js/plugins/jquery-timepicker.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <!-- sal animation -->
    <script src="assets/js/vendor/sal.min.js"></script>
    <!-- bootstrap JS -->
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <!-- easing JS -->
    <script src="assets/js/plugins/jquery-slideNav.js"></script>
    <!-- easing JS -->
    <script src="assets/js/vendor/hover-revel.js"></script>
    <!-- easing JS -->
    <script src="assets/js/plugins/swip-img.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
    <!-- header style two End -->


</body>


<!-- Mirrored from themewant.com/products/html/dinenos/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 11:07:33 GMT -->
</html>