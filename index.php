<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];





?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H-motor</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link href="css/plugin.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>

<body>

    <div id="preloader">
        <div id="status"></div>
    </div>


    <header class="main_header_area">
        <div class="header-content py-1 bg-theme">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="links">
                    <ul>
                        <li><a href="#" class="white"><i class="icon-calendar white"></i> العمل طوال ايام الاسبوع</a>
                        </li>
                        <li><a href="#" class="white"><i class="icon-location-pin white"></i> الجيزة امبابة احمد
                                عرابي</a>
                        </li>
                        <li><a href="#" class="white"><i class="icon-clock white"></i> من الساعة 7 صباحا الي 7 مساء</a>
                        </li>
                    </ul>
                </div>
                <div class="links float-right">
                    <ul>
                        <li><a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-tripadvisor " aria-hidden="true"></i></a></li>


                    </ul>
                </div>
            </div>
        </div>

        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3" style="height: 97px;">

                        <div class="navbar-header">
                            <a class="navbar-brand" href="index">
                                <img src="logo.png" alt="image" style="max-width: 40%;">
                            </a>
                        </div>

                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="dropdown submenu active">
                                    <a href="index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 23px;">الصفحة
                                        الرئيسية </a>

                                </li>


                                <li class="submenu dropdown">
                                    <a href="prod-list" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 23px;">المنتجات</a>

                                </li>



                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 23px;">الصيانة </a>

                                </li>
                                <li class="submenu dropdown">
                                    <a href="contact.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 23px;">تواصل
                                        معنا</a>

                                </li>
                                <li>
                                    <a href="about" style="font-size: 23px;">من نحن </a>
                                </li>


                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>


                                </li>

                                <li class="search-main"><a href="#search1" class="mt_search"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="register-login d-flex align-items-center">

                        </div>
                        <div id="slicknav-mobile"></div>
                    </div>
                </div>
            </nav>
        </div>

    </header>


    <section class="banner overflow-hidden">
        <div class="slider top50">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(images/slider/1.jpg)"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-2">
                                    <!-- <h5 class="entry-category mb-0 white">Amazing Places</h5> -->
                                </div>
                                <h1 class="mb-2"><a href="tour-single.html" class="white">H-Motor</a>
                                </h1>
                                <p class="white mb-4" style="font-size: 22px;">لبيع وصيانة جميع انواع مواتير المياه</p>
                                <a href="tour-single.html" class="nir-btn">شراء موتور جديد</a>
                                <a href="tour-single.html" class="nir-btn-black">طلب صيانة موتور </a>
                            </div>
                            <div class="dot-overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(images/slider/2.jpg)"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-2">
                                    <h5 class="entry-category mb-0 white">Explore Travel</h5>
                                </div>
                                <h1 class="mb-2"><a href="tour-single.html" class="white">Start Planning Your Dream
                                        Trip</a></h1>
                                <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                <div class="slider-button d-flex justify-content-center">
                                    <a href="tour-single1.html" class="nir-btn me-4">Read More</a>
                                    <a href="tour-single.html" class="nir-btn-black">Contact Us</a>
                                </div>
                            </div>
                            <div class="dot-overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(images/slider/3.jpg)"></div>
                            <div class="swiper-content">
                                <div class="entry-meta mb-2">
                                    <h5 class="entry-category mb-0 white">Road To Travel</h5>
                                </div>
                                <h1 class="mb-2"><a href="tour-single.html" class="white">Begin your adventure with
                                        us</a></h1>
                                <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                <a href="tour-single.html" class="nir-btn">Make An Enquiry</a>
                            </div>
                            <div class="dot-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>


    <!-- عداد  -->

    <section class="counter-main pt-6">
        <div class="container">
            <div class="counter p-4 pb-0 box-shadow bg-white rounded m-0">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="counter-item border-end pe-4 d-flex align-items-center">
                            <i class="icon-trophy bg-theme p-3 rounded me-3 white fs-4"></i>
                            <div class="counter-content">
                                <h2 class="value mb-0">25</h2>
                                <span class="m-0">سنه من الخبرة</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="counter-item border-end pe-4 d-flex align-items-center">
                            <i class="icon-magnifier bg-theme p-3 rounded me-3 white fs-4"></i>
                            <div class="counter-content">
                                <h2 class="value mb-0">7</h2>
                                <span class="m-0">من المنتجات</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="counter-item border-end pe-4 d-flex align-items-center">
                            <i class="icon-user-following bg-theme p-3 rounded me-3 white fs-4"></i>
                            <div class="counter-content">
                                <h2 class="value mb-0">850</h2>
                                <span class="m-0">عملاء سعداء بخدمتنا</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="counter-item d-flex align-items-center">
                            <i class="icon-trophy bg-theme p-3 rounded me-3 white fs-4"></i>
                            <div class="counter-content">
                                <h2 class="value mb-0">320</h2>
                                <span class="m-0">Award Winning</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="trending pb-6" style="background-image: url(images/shape4.png);">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-6 ">
                <div class="col-lg-7">
                    <div class="section-title text-center text-lg-start">
                        <h2 class="mb-1"> <span class="theme">المنتجات</span></h2>
                        <p> يمكنك الضغط علي المنتج لعرض تفاصيله بالكامل</p>
                    </div>
                </div>
                <div class="col-lg-5">
                </div>
            </div>
            <div class="trend-box">
                <div class="row item-slider">
                    <!-- prod -->
                    <?php
                        include('config.php');
                        $result = mysqli_query($conn, "SELECT * FROM products");
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="col-lg-4">
                            <div class="trend-item1 rounded box-shadow bg-white mb-4">
                                <div class="trend-image position-relative">
                                    <img src="admin/<?php echo $row['image']; ?>" alt="image" class="">
                                    <div class="trend-content1 p-4">
                                        <h3 class="mb-1 white"><a href="tour-grid.html" class="white"><?php echo $row['name']; ?></a>
                                        </h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>

                                        </div>
                                        <div class="entry-meta d-flex align-items-center justify-content-between">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0 white">
                                                    <a href="<?php echo $row['link']; ?>" class="nir-btn" style="font-size:22px ;">تفاصيل اكثر</a>

                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        </form>
                    <?php
                    };
                    ?>
                    <!-- prod3 -->
                    <!-- <div class="col-lg-4">
                        <div class="trend-item1 rounded box-shadow bg-white mb-4">
                            <div class="trend-image position-relative">
                                <img src="images/products/prod3/prod3.jpeg" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h3 class="mb-1 white"><a href="tour-grid.html" class="white">موتور سعفان</a>
                                    </h3>
                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>

                                    </div>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white">
                                                <a href="tour-single.html" class="nir-btn" style="font-size:22px ;">تفاصيل اكثر</a>

                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- prod4 -->
                    <!-- <div class="col-lg-4">
                        <div class="trend-item1 rounded box-shadow bg-white mb-4">
                            <div class="trend-image position-relative">
                                <img src="images/products/prod4/metabo (1).jpeg" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h3 class="mb-1 white"><a href="tour-grid.html" class="white">موتور  ميتابو</a>
                                    </h3>
                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>

                                    </div>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white">
                                                <a href="tour-single.html" class="nir-btn" style="font-size:22px ;">تفاصيل اكثر</a>

                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- prod5 -->
                    <!-- <div class="col-lg-4">
                        <div class="trend-item1 rounded box-shadow bg-white mb-4">
                            <div class="trend-image position-relative">
                                <img src="images/products/prod5/folomak1.jpg" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h3 class="mb-1 white"><a href="tour-grid.html" class="white">موتور  فولو ماك</a>
                                    </h3>
                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>

                                    </div>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white">
                                                <a href="tour-single.html" class="nir-btn" style="font-size:22px ;">تفاصيل اكثر</a>

                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- prod6 -->
                    <!-- <div class="col-lg-4">
                        <div class="trend-item1 rounded box-shadow bg-white mb-4">
                            <div class="trend-image position-relative">
                                <img src="images/products/prod6/Arko1.jpg" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h3 class="mb-1 white"><a href="tour-grid.html" class="white">موتور أركو</a>
                                    </h3>
                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>

                                    </div>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white">
                                                <a href="tour-single.html" class="nir-btn" style="font-size:22px ;">تفاصيل اكثر</a>

                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </section>









    <!-- اراء العملاء  -->
    <section class="testimonial pt-2 pb-2" style="background-image:url(images/testimonial.png)">
        <div class="container">
            <div class="section-title mb-6 text-center w-75 mx-auto">
                <h4 class="mb-1 theme1">Our Testimonails</h4>
                <h2 class="mb-1">Good Reviews By <span class="theme">Clients</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-4 mb-4">
                    <div class="row review-slider">
                        <div class="col-sm-4 item">
                            <div class="testimonial-item1 rounded text-lg-start text-center">
                                <div class="author-info d-lg-flex align-items-center mb-4">
                                    <img src="images/testimonial/img1.jpg" alt="">
                                    <div class="author-title ms-3">
                                        <h5 class="m-0 theme">Jared Erondu</h5>
                                        <span>Supervisor</span>
                                    </div>
                                </div>
                                <div class="details">
                                    <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i>Lorem Ipsum is simply dummy
                                        text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
                                        has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
                                        unde inventore quasi vero dolorem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 item">
                            <div class="testimonial-item1 rounded text-lg-start text-center">
                                <div class="author-info d-lg-flex align-items-center mb-4">
                                    <img src="images/testimonial/img1.jpg" alt="">
                                    <div class="author-title ms-3">
                                        <h5 class="m-0 theme">Jared Erondu</h5>
                                        <span>Supervisor</span>
                                    </div>
                                </div>
                                <div class="details">
                                    <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i>Lorem Ipsum is simply dummy
                                        text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
                                        has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
                                        unde inventore quasi vero dolorem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-4 mb-4">
                    <div class="testimonial-image text-lg-start text-center">
                        <img src="images/testi.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="trending recent-articles pb-6 pt-0">
        <div class="container">


        </div>
    </section>


    <footer class="pt-20 pb-4" style="background-image: url(images/background_pattern.png);">
        <div class="section-shape top-0" style="background-image: url(images/shape8.png);"></div>

        

        <div class="footer-upper pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                        <div class="footer-about">
                            <img src="images/logo-white.png" alt="">
                            <h3 class="white">Need help?</h3>
                            <ul>
                                <li class="white"><strong><i class="icon-phone"></i>ارقام الهواتف: <br></strong> <a
                                        href="tel:+ +201010232888"> +201010232888</a></li>
                                <li class="white"><strong><i class="icon-location-pin white"></i>Location:
                                        <br></strong><a href="https://goo.gl/maps/KBpBnmTGEjmn6HgJ6"> Egypt-Giza-Faisal-
                                        3, El-Eshreen Street, in front of Raslan Juices</a></li>
                                <li class="white"><a href=""><strong><i class="icon-envelope"></i>Email:
                                            <br></strong></a>
                                    <a href="mailto:info@H-motor.com" class="__cf_email__"
                                        data-cfemail="">info@H-motor.com</a>
                                </li>
                                <li class="white"><a href="">
                                        <i class="fa-duotone fa-browse" aria-hidden="true"></i>
                                        <strong><i class="icon-globe"></i> Website: <br></strong></a>

                                    <a href="http://www.H-motor.com"> www.H-motor.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">روابط الموقع</h3>
                            <ul>
                                <li><a href="about-us.html">الصفحة الرئيسية</a></li>
                                <li><a href="about-us.html">المنتجات</a></li>
                                <li><a href="about-us.html">الصيانة</a></li>
                                <li><a href="about-us.html">تواصل معنا</a></li>
                                <li><a href="about-us.html">من نحن</a></li>

                            </ul>
                        </div>
                    </div>
                   

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">اشترك في خدمة البريد الإلكتروني لدينا</h3>
                            <div class="newsletter-form ">
                                <p class="mb-3">اشترك في بريدنا الإلكتروني ليصلك كل جديد.</p>
                                <form action="#" method="get" accept-charset="utf-8"
                                    class="border-0 d-flex align-items-center">
                                    <input type="text" placeholder="ادخل بريدك">
                                    <button class="nir-btn ms-2">اشتراك</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white"> 2022H-Motor  جميع الحقوق محفوظة ل </p>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            <a href="#"> <p class="m-0 white"> Media Worldتصميم وبرمجه </p></a><br>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </footer>



    <div id="back-to-top">
        <a href="#"></a>
    </div>


    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="post-tabs">

                        <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button aria-controls="login" aria-selected="false" class="nav-link active" data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab" type="button">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button aria-controls="register" aria-selected="true" class="nav-link" data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab" type="button">Register</button>
                            </li>
                        </ul>

                        <div class="tab-content blog-full" id="postsTabContent">

                            <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image rounded">
                                            <a href="#" style="background-image: url(images/trending/trending5.jpg);"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-center border-b pb-2">Login</h4>
                                        <div class="log-reg-button d-flex align-items-center justify-content-between">
                                            <button type="submit" class="btn btn-fb">
                                                <i class="fab fa-facebook"></i> Login with Facebook
                                            </button>
                                            <button type="submit" class="btn btn-google">
                                                <i class="fab fa-google"></i> Login with Google
                                            </button>
                                        </div>
                                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                        <form method="post" action="#" name="contactform" id="contactform">
                                            <div class="form-group mb-2">
                                                <input type="text" name="user_name" class="form-control" id="fname" placeholder="User Name or Email Address">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="password" name="password_name" class="form-control" id="lpass" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck">
                                                <label class="custom-control-label mb-0" for="exampleCheck1">Remember
                                                    me</label>
                                                <a class="float-end" href="#">Lost your password?</a>
                                            </div>
                                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                <input type="submit" class="nir-btn w-100" id="submit" value="Login">
                                            </div>
                                            <p class="text-center">Don't have an account? <a href="#" class="theme">Register</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image rounded">
                                            <a href="#" style="background-image: url(images/trending/trending5.jpg);"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-center border-b pb-2">Register</h4>
                                        <div class="log-reg-button d-flex align-items-center justify-content-between">
                                            <button type="submit" class="btn btn-fb">
                                                <i class="fab fa-facebook"></i> Login with Facebook
                                            </button>
                                            <button type="submit" class="btn btn-google">
                                                <i class="fab fa-google"></i> Login with Google
                                            </button>
                                        </div>
                                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                        <form method="post" action="#" name="contactform1" id="contactform1">
                                            <div class="form-group mb-2">
                                                <input type="text" name="user_name" class="form-control" id="fname1" placeholder="User Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="user_name" class="form-control" id="femail" placeholder="Email Address">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="password" name="password_name" class="form-control" id="lpass1" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="password" name="password_name" class="form-control" id="lrepass" placeholder="Re-enter Password">
                                            </div>
                                            <div class="form-group mb-2 d-flex">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck1">I
                                                    have read and accept the Terms and Privacy Policy?</label>
                                            </div>
                                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                <input type="submit" class="nir-btn w-100" id="submit1" value="Register">
                                            </div>
                                            <p class="text-center">Already have an account? <a href="#" class="theme">Login</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particlerun.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-swiper.js"></script>
    <script src="js/custom-nav.js"></script>
</body>

</html>