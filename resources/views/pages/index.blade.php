<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BARBERSHOP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="home_assets/img/favicon.png" rel="icon">
    <link href="home_assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="home_assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="home_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="home_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="home_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="home_assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="home_assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="home_assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="home_assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">Barbershop</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#products">Product</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    @guest
                        <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                    @endguest
                    @auth
                      <li><a class="getstarted scrollto" href="#">Hi, {{ auth()->user()->name }}</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>Shear. Shave. Shine.</h1>
            <h2>Traditional Service in Modern Manner</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Book Now</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row m-2 justify-content-end">
                    <div class="col-lg-11">
                        <div class="row justify-content-end">

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="235"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Customer</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="85"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Projects</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-clock"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="4"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Years of experience</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-award"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="12"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Awards</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row p-4 justify-content-center">

                    <div class="col-lg-6 mx-4 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                        <img src="home_assets/img/about-me.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 pt-3 pt-lg-0 content">
                        <h1>Who We Are</h1>
                        <p class="fst-italic">
                            Welcome to our barbershop website! We are a team of experienced and talented barbers
                            dedicated to providing top-notch grooming services to our valued clients. With a passion for
                            our craft and an eye for detail, we take pride in delivering exceptional haircuts, stylish
                            grooming, and an unforgettable barbershop experience. Our barbers are highly skilled in a
                            variety of cutting-edge techniques and styles, from classic barbering to the latest trends.
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row d-flex justify-content-center m-1">
                    <li class="nav-item col-4">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                            <i class="ri-gps-line"></i>
                            <h4 class="d-none d-lg-block">Haircut and Shave</h4>
                        </a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                            <i class="ri-body-scan-line"></i>
                            <h4 class="d-none d-lg-block">Hair Treatment</h4>
                        </a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                            <i class="ri-sun-line"></i>
                            <h4 class="d-none d-lg-block">Make Over</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content m-3">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row p-4 my-1">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 p-3">
                                <h2>Hair Cut.</h2>
                                <p class="fst-italic">
                                    Berikut ini adalah beberapa layanan yang tersedia
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Haircut Premium.</li>
                                    <li><i class="ri-check-double-line"></i> Full Trim.</li>
                                    <li><i class="ri-check-double-line"></i> Hair Vitamin.</li>
                                </ul>
                                <p>
                                    Kami menawarkan Hair Cut Premium untuk perubahan yang menarik, Full Trim untuk
                                    tatanan rambut yang rapi, dan Hair Vitamin untuk perawatan rambut yang sehat.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="home_assets/img/service-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane m-3" id="tab-2">
                        <div class="row p-4 my-1">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 p-3">
                                <h2>Hair Treatment</h2>
                                <p>
                                    Segera temukan pengalaman perawatan rambut terbaik dengan layanan kami yang memikat,
                                    Protein Hairmask dan Creambath. Dapatkan rambut yang sehat, kuat, dan indah, serta
                                    rasa santai yang menyegarkan.
                                </p>
                                <p class="fst-italic">
                                    Berikut ini adalah beberapa layanan yang tersedia
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Protein Hairmask.</li>
                                    <li><i class="ri-check-double-line"></i> Creambath.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="home_assets/img/service-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane m-3" id="tab-3">
                        <div class="row p-4 my-1">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 p-3">
                                <h2>Make Over</h2>
                                <p>
                                    Dengan layanan kami, Smoothing Pro akan melunakkan rambut Anda menjadi kelembutan
                                    yang menakjubkan, Top Perming akan memberikan tekstur dan gaya yang tak tertandingi,
                                    sedangkan Coloring Full Black, Coloring Hairlight, dan Coloring Peek A Boo akan
                                    memberikan warna yang menggoda imajinasi.
                                </p>
                                <p class="fst-italic">
                                    Berikut ini adalah beberapa layanan yang tersedia
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Smoothing Pro.</li>
                                    <li><i class="ri-check-double-line"></i> Top Perming.</li>
                                    <li><i class="ri-check-double-line"></i> Coloring Full Black.</li>
                                    <li><i class="ri-check-double-line"></i> Coloring Hairlight.</li>
                                    <li><i class="ri-check-double-line"></i> Coloring Peek A Boo</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="home_assets/img/service-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane m-3" id="tab-4">
                        <div class="row p-4 my-1">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                    non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="home_assets/img/features-4.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Product Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Products</h2>
                    <p>Check our Products</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Hair Styling</li>
                            <li data-filter=".filter-card">Hair & Body</li>
                            <li data-filter=".filter-web">Shave & Beard</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="home_assets/img/products/product-1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Lather Shave Cream</h4>
                            <p>Rp300.000</p>
                            <a href="home_assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="home_assets/img/products/product-2.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Medium Hold Spray Gel</h4>
                            <p>Rp220.000</p>
                            <a href="home_assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="home_assets/img/products/product-3.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Detox Shampoo</h4>
                            <p>Rp500.000</p>
                            <a href="home_assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="home_assets/img/products/product-4.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Beard Balm</h4>
                            <p>Rp300.000</p>
                            <a href="home_assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="home_assets/img/products/product-5.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pomade</h4>
                            <p>Rp250.000</p>
                            <a href="home_assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="home_assets/img/products/product-6.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Heavy Hold Pomade</h4>
                            <p>Rp350.000</p>
                            <a href="home_assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="home_assets/img/products/product-7.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Precision Shave Gel</h4>
                            <p>Rp270.000</p>
                            <a href="home_assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="home_assets/img/products/product-8.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Matte Clay Spray</h4>
                            <p>Rp280.000</p>
                            <a href="home_assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="home_assets/img/products/product-10.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ultra Gliding Shave Oil</h4>
                            <p>Rp280.000</p>
                            <a href="home_assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Check our Team</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="pic"><img src="home_assets/img/person-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Barber</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="pic"><img src="home_assets/img/person-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Lincoln Torff</h4>
                                <span>Barber</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="pic"><img src="home_assets/img/person-3.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Top Barber</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up"">

                <div class=" section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>Jl. Slamet Riyadi, Surakarta</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>bsbarbershop@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p> +62 853 7821 3246</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Bang Senjata Barbershop</h3>
                            <p>
                                Jl. Slamet Riyadi <br>
                                Surakarta<br><br>
                                <strong>Phone:</strong> +62 853 7821 3246<br>
                                <strong>Email:</strong> bsbarbershop@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Haircut and Shave</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Hair Treatment</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Make Over</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Silakan masukkan email anda untuk mendapatkan inforamasi terbaru dari kami</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="home_assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="home_assets/vendor/aos/aos.js"></script>
    <script src="home_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="home_assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="home_assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="home_assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="home_assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="home_assets/js/main.js"></script>

</body>

</html>
