<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <?php include 'utils/constants.php'; ?>
    <title><?php echo $page_title ?></title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!--  Mobile nav toggle button  -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!--  Header  -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="home_page.html">John Smith</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class="active"><a href="home_page.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                    <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>

                </ul>
            </nav>


        </div>
    </header>
    <!-- End Header -->

    <!--  Hero Section  -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>John Smith</h1>
            <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!--  About Section  -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique eos maxime ipsum modi iusto veritatis eligendi nulla aperiam quidem, sequi voluptatum esse, blanditiis magni iure dignissimos officia tempore? Maxime, veritatis.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>UI/UX Designer &amp; Web Developer.</h3>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 1 May 1995</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +123 456 7890</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> New York, USA</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 30</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> email@example.com</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, quod tenetur, autem, a neque itaque odit aspernatur doloremque consectetur veniam esse optio debitis cum alias libero. Officia quisquam omnis illo.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!--  Facts Section  -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim commodi hic et voluptates sed, fugit mollitia perferendis aut tenetur aperiam veniam ad rem ipsam eius. Odit rerum veniam voluptatem eligendi?</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span data-toggle="counter-up">232</span>
                            <p><strong>Happy Clients</strong> Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span data-toggle="counter-up">521</span>
                            <p><strong>Projects</strong> <br> Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="icofont-live-support"></i>
                            <span data-toggle="counter-up">1,463</span>
                            <p><strong>Hours Of Support</strong> Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="count-box">
                            <i class="icofont-users-alt-5"></i>
                            <span data-toggle="counter-up">15</span>
                            <p><strong>Hard Workers</strong> Hard Workers</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Facts Section -->

        <!--  Skills Section  -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime cupiditate numquam autem eum porro fugit ad cumque perferendis harum. Necessitatibus consequuntur eius quibusdam adipisci quam voluptas eos rem impedit sint.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Skills Section -->

        <!--  Resume Section  -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur cupiditate iusto dolorem itaque fuga aliquam, vitae tempora! Quod officiis atque molestiae soluta debitis aut officia quasi nemo ipsum enim!</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>John Smith</h4>
                            <p><em>Innovative Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                            <ul>
                                <li>Portland par 127,Orlando, FL</li>
                                <li>(123) 456-7891</li>
                                <li>alice.barkley@example.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Master of Fine Arts &amp; Graphic Design</h4>
                            <h5>2015 - 2016</h5>
                            <p><em>ABC COLLEGE, NY</em></p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quidem delectus consectetur sequi. Sed fugit inventore quod officia quas eum facere itaque cumque repellendus blanditiis, veniam, aliquam provident aliquid odit.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                            <h5>2010 - 2014</h5>
                            <p><em>ABC COLLEGE, NY</em></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde accusamus facere pariatur magnam quia at? Perferendis eligendi excepturi hic cum dolores illum amet aliquam itaque, molestias vitae sunt eveniet repellendus!</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Senior graphic design specialist</h4>
                            <h5>2019 - Present</h5>
                            <p><em>Experion, New York, NY </em></p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Graphic design specialist</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Resume Section -->

        <!--  Portfolio Section  -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatibus quia vero illo maiores sint, perferendis labore totam iste, consequatur necessitatibus porro corporis deserunt quas cum omnis cumque asperiores officiis.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!--  Services Section  -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                        quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="icofont-computer"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="icofont-earth"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="icofont-image"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="icofont-settings"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class="icofont-tasks-alt"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Services Section -->

    </main>
    <!-- End #main -->

    <!-- Footer -->
    <footer>
        <div class="_footer">

            <h6 class="text-center font-weight-bold " style="margin-top:10px;">Vineeth V. Pai - 4MT17CS121 <br>Shashan Ram K. - 4MT17CS097</h3>
                <p class="_copyright text-center"><sup>&#9400</sup>Copyright CV. All rights reserved
                    <p>
        </div>
    </footer>
    </footer>
    <!-- End  Footer -->

    <!-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>


    <script src="assets/js/main.js"></script>

</body>

</html>