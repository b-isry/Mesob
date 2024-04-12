
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Mesob</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="../index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                
                <h1>Mesob<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="../user_login.html">User Login</a></li>
                            <li><a href="../admin_login.html">Restaurant Login</a></li>
                        </ul>
                    </li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#order">Order</a></li>
                    <li><a href="#review">Rating and Reviews</a></li>
                    <li><a href="#contact">Contact Us</a></li>                    
                </ul>
            </nav>
            <!-- .navbar -->

            <a class="btn-book-a-table" href="../rest_signin.html">Add Restaurant</a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- End Header -->

    <main>
        <!-- HERO SECTION -->
        <section id="hero" class="hero d-flex align-items-center section-bg">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h2 data-aos="fade-up">Restaurant Name</h2>
                        <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="stars d-flex">
                                <p class="mx-1">Rating </p>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <img src="../assets/img/mesob-removebg-preview.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                    </div>
                </div>
            </div>
        </section>

        <!-- MENU SECTION -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Menu</h2>
                    <p>Check Out Our <span>Menu</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#appetizers">
                            <h4>Appetizers</h4>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="tab" data-bs-target="#main-course">
                            <h4>Main Course</h4>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="tab" data-bs-target="#desserts">
                            <h4>Desserts</h4>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="tab" data-bs-target="#drinks">
                            <h4>Drinks</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="appetizers">
                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Appetizers</h3>
                        </div>
                        <div class="row gy-5">
                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-1.png" class="glightbox"><img src="../assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">12$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-1.png" class="glightbox"><img src="../assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">12$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-1.png" class="glightbox"><img src="../assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">12$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-1.png" class="glightbox"><img src="../assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">12$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-1.png" class="glightbox"><img src="../assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">12$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="main-course">
                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Main course</h3>
                        </div>
                        <div class="row gy-5">
                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-2.png" class="glightbox"><img src="../assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">13$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-2.png" class="glightbox"><img src="../assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">13$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-2.png" class="glightbox"><img src="../assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">13$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-2.png" class="glightbox"><img src="../assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">13$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-2.png" class="glightbox"><img src="../assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">13$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="desserts">
                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Desserts</h3>
                        </div>
                        <div class="row gy-5">
                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-3.png" class="glightbox"><img src="../assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-3.png" class="glightbox"><img src="../assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-3.png" class="glightbox"><img src="../assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-3.png" class="glightbox"><img src="../assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-3.png" class="glightbox"><img src="../assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="drinks">
                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Drinks</h3>
                        </div>
                        <div class="row gy-5">
                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-4.png" class="glightbox"><img src="../assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-4.png" class="glightbox"><img src="../assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-4.png" class="glightbox"><img src="../assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-4.png" class="glightbox"><img src="../assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="../assets/img/menu/menu-item-4.png" class="glightbox"><img src="../assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Lorem ipsum</h4>
                                <p class="ingredients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sequi.
                                </p>
                                <p class="price">21$</p>
                                <p><i class="fa-thin fa-cart-plus" style="color: #eb1e0f;"></i></p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!--  About Section  -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Learn More <span>About Us</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img" style="background-image: url(../assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                    </div>
                    <div class="col-lg-5 d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, nihil! Esse, aut! Maxime, perspiciatis repellat ipsa fugit deserunt totam aliquam!
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!--  Review Section  -->
        <section id="review" class="review">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Rate and Review</h2>
                    <p>Give Us Your <span>Comments</span></p>
                </div>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                    <div class="row">
                        <div class="col-xl-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-xl-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <!-- <div class="col-xl-6 form-group">
                            <input type="range" class="form-control" name="rating" id="rating" min="0" max="5">
                        </div> -->
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form><!--End Contact Form -->

            </div>
        </section>

        <!--  Contact Section  -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Need Help? <span>Contact Us</span></p>
                </div>

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                                    <strong>Sunday:</strong> Closed
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>

    <!--  Footer  -->
    <footer id="footer" class="footer">


        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-4 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022 - US<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Mesob</span></strong>. All Rights Reserved
            </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>