<?php include 'utils/constants.php'; ?>
<?php


include('services/db_service.php');
//get id from url params
$user_id = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$home_path = "home_page.php?" . $user_id;

include('utils/user_details.php');


// print_r($user_details[0]);
// print_r($professions);
// print_r($services);
// print_r($skills);
print_r($resume);




//split resume array into 2 for the ui
$resume_split = array_chunk($resume, ceil(count($resume) / 2));

// print_r($resume_split[0]);

//profession string for the animation
$profession_string = "";

$i = 0;
foreach ($professions as $x => $val) {

    if ($i == count($professions) - 1) {
        $profession_string = $profession_string . $val['type'];
    } else {
        $profession_string = $profession_string . $val['type'] . ", ";
    }
    $i++;
}





// close connection
mysqli_close($conn);
?>

<!-- UI -->

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

                <img src="<?php echo $user_details[0]['profile_photo_url']; ?>" alt="" class="img-fluid rounded-circle">

                <h1 class="text-light"><a href="home_page.html"><?php echo $user_details[0]['name']; ?></a></h1>
                <div class="social-links mt-3 text-center">
                    <!-- change to github icon -->
                    <a href="<?php echo $user_details[0]['github_url']; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="<?php echo $user_details[0]['instagram_url']; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="<?php echo $user_details[0]['linkedin_url']; ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>

                    <li class="active"><a href="<?php echo $home_path; ?>"> <i class="bx bx-home"></i> <span>Home</span>
                        </a></li>
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
            <h1><?php echo $user_details[0]['name']; ?></h1>
            <p>I'm <span class="typed" data-typed-items="<?php echo $profession_string; ?>"></span></p>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!--  About Section  -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p><?php echo $user_details[0]['about_1']; ?></p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="<?php echo $user_details[0]['profile_photo_url']; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3> <?php echo $user_details[0]['main_profession']; ?></h3>
                        <p class="font-italic">
                            <?php echo $user_details[0]['about_2']; ?>
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> <?php echo $user_details[0]['birthday']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong><?php echo $user_details[0]['website']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong><?php echo $user_details[0]['phone']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong><?php echo $user_details[0]['city']; ?></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> <?php echo $user_details[0]['age']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong><?php echo $user_details[0]['degree']; ?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong><?php echo $user_details[0]['email']; ?></li>
                                    <!-- <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li> -->
                                </ul>
                            </div>
                        </div>
                        <p>
                            <?php echo $user_details[0]['about_3']; ?>
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
                    <p><?php echo $user_details[0]['facts']; ?></p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span data-toggle="counter-up"><?php echo $user_details[0]['clients']; ?></span>
                            <p><strong>Happy Clients</strong> Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span data-toggle="counter-up"><?php echo $user_details[0]['projects']; ?></span>
                            <p><strong>Projects</strong> <br> Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="icofont-live-support"></i>
                            <span data-toggle="counter-up"><?php echo $user_details[0]['hours']; ?></span>
                            <p><strong>Hours Of Support</strong> Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="count-box">
                            <i class="icofont-users-alt-5"></i>
                            <span data-toggle="counter-up"><?php echo $user_details[0]['workers']; ?></span>
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
                    <p><?php echo $user_details[0]['skills']; ?></p>
                </div>
                <div class="row skills-content">
                    <div class="col-lg-6" data-aos="fade-up">
                        <?php foreach ($skills as $skill) { ?>
                            <div class="progress">
                                <span class="skill"><?php echo $skill['skill']; ?> <i class="val"><?php echo $skill['percentage'] . "%"; ?></i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill['percentage']; ?>" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

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
                    <p><?php echo $user_details[0]['resume']; ?></p>
                </div>

                <div class="row">
                    <?php foreach ($resume_split as $resume) { ?>

                        <div class="col-lg-6" data-aos="fade-up">
                            <?php foreach ($resume as $data) { ?>
                                <!-- <h3 class="resume-title">Education</h3> -->
                                <div class="resume-item">
                                    <h4><?php echo $data['title']; ?></h4>
                                    <h5><?php echo $data['start_year']; ?> - <?php echo $data['end_year']; ?></h5>
                                    <p><em><?php echo $data['place']; ?></em></p>
                                    <p><?php echo $data['description']; ?></p>
                                </div>
                            <?php } ?>

                        </div>
                    <?php } ?>
                </div>

            </div>
        </section>
        <!-- End Resume Section -->

        <!--  Portfolio Section  -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p><?php echo $user_details[0]['portfolio']; ?></p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <!-- <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-web">Web</li> -->
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <?php foreach ($projects as $project) { ?>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="<?php echo $project['image_url']; ?>" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="<?php echo $project['image_url']; ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="<?php echo $project['link']; ?>" title=" More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>


            </div>
        </section>
        <!-- End Portfolio Section -->

        <!--  Services Section  -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p><?php echo $user_details[0]['services']; ?></p>
                </div>

                <div class="row">
                    <?php foreach ($services as $service) { ?>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                            <div class="icon"><i class="icofont-computer"></i></div>
                            <h4 class="title"><a href=""><?php echo $service['service']; ?></a></h4>
                            <p class="description"><?php echo $service['description']; ?></p>
                        </div>
                    <?php } ?>
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