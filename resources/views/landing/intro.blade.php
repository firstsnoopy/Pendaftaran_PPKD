@extends('landing.base')
@section('content')

    <body class="index-page">
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

                <a href="https://ppkdjakpus.com/" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">PPKD Jakarta Pusat</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#why-us">Why Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>
        </header>

        <main class="main">

            <!-- Hero Section -->
            <section id="hero" class="hero section">

                <img src="{{ asset('daftar/images/background.jpg') }}" alt="" data-aos="fade-in" class="">

                <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <p class="fs-1 fw-bolder badge bg-warning text-wrap">Selamat Datang</p>
                            <p class="fs-3 fw-bolder badge bg-warning text-wrap">Calon Peserta Pelatihan PPKD Jakarta Pusat
                                Tahun 2024</p>
                            <a href="{{ url('pendaftaran') }}" class="btn-get-started">Daftar Pelatihan Reguler PPKD Jakarta
                                Pusat 2024</a>
                        </div>
                    </div>
                </div>

            </section><!-- /Hero Section -->

            {{-- <!-- About Section -->
            <section id="about" class="about section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>About Us</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 content">
                            <h3>Voluptatem dignissimos provident</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident
                            </p>
                        </div>
                    </div>

                </div>

            </section><!-- /About Section -->

            <!-- Why Us Section -->
            <section id="why-us" class="why-us section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Why Us</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-md-4">
                            <div class="card">
                                <div class="img">
                                    <img src="assets/img/why-us-1.jpg" alt="" class="img-fluid">
                                    <div class="icon"><i class="bi bi-hdd-stack"></i></div>
                                </div>
                                <h2 class="title"><a href="#" class="stretched-link">Our Mission</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <div class="img">
                                    <img src="assets/img/why-us-2.jpg" alt="" class="img-fluid">
                                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                                </div>
                                <h2 class="title"><a href="#" class="stretched-link">Our Plan</a></h2>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium,
                                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                    beatae vitae dicta sunt explicabo.
                                </p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card">
                                <div class="img">
                                    <img src="assets/img/why-us-3.jpg" alt="" class="img-fluid">
                                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                                </div>
                                <h2 class="title"><a href="#" class="stretched-link">Our Vision</a></h2>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores
                                    eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum
                                    quia dolor sit amet.
                                </p>
                            </div>
                        </div><!-- End Card Item -->

                    </div>

                </div>

            </section><!-- /Why Us Section -->

            <!-- Services Section -->
            <section id="services" class="services section light-background">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item  position-relative">
                                <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Nesciunt Mete</h3>
                                </a>
                                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                                    iure perferendis tempore et consequatur.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-broadcast"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Eosle Commodi</h3>
                                </a>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                                    hic non ut nesciunt dolorem.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-easel"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Ledo Markt</h3>
                                </a>
                                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                    voluptas adipisci eos earum corrupti.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Asperiores Commodit</h3>
                                </a>
                                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga
                                    sit provident adipisci neque.</p>
                                <a href="service-details.html" class="stretched-link"></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Velit Doloremque</h3>
                                </a>
                                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                                    animi at autem alias eius labore.</p>
                                <a href="service-details.html" class="stretched-link"></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-chat-square-text"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Dolori Architecto</h3>
                                </a>
                                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                    Corrupti recusandae ducimus enim.</p>
                                <a href="service-details.html" class="stretched-link"></a>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>

            </section><!-- /Services Section -->

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div
                                class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="300">

                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form><!-- End Contact Form -->

                </div>

            </section><!-- /Contact Section --> --}}

        </main>

        <footer id="footer" class="footer light-background">
            <div class="container">
                <h3 class="sitename">PPKD Jakarta Pusat</h3>
                <p>Kunjungi Laman Sosial Media Kami</p>
                <div class="social-links d-flex justify-content-center">
                    <a href="https://x.com/i/flow/login"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://id-id.facebook.com/login.php/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/ppkdjp/?igsh=MWxsaTliY3ZvaW9sNg=="><i
                            class="bi bi-instagram"></i></a>
                </div>
                <div class="container">
                    <div class="copyright">
                        <span>Copyright</span> <strong class="px-1 sitename">Siimple</strong> <span>All Rights
                            Reserved</span>
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you've purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>



    </body>
@endsection
