<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Discover prime properties with Space Hunt, a trusted platform for all your real estate needs.">
    <meta name="author" content="Space Hunt">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Space Hunt - About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-DyZ88mC6Up2uqSruKHxE3Y9RyVYvh9aA4f3Yu7zRsF0/r0cKGxj5X9lPxsBM6qN4" crossorigin="anonymous"> -->


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <style>
        .best-features {
            margin-bottom: 100px;
        }

        .height{
            height: 620px;
        }
    </style>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        @include('user.navbar')
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>About Us</h4>
                        <h2>Welcome to Space Hunt</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Background</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img class="height" src="assets/images/feature-image.jpg" alt="About Space Hunt">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Who We Are & What We Do</h4>
                        <p>Space Hunt is a trusted platform designed to connect buyers, sellers, and renters with a wide array of real estate options, from residential homes and apartments to commercial spaces. Our mission is to simplify the complex world of property transactions, offering a seamless experience from search to settlement. We believe that finding your ideal property should be as straightforward and enjoyable as possible.</p>
                        <p>With Space Hunt, you can access up-to-date listings, detailed property information, and an intuitive interface that makes it easy to search, filter, and compare options tailored to your needs. Our platform offers powerful tools to assist you in making informed decisions, whether you’re a first-time homebuyer, a seasoned investor, or looking for a rental property.</p>
                        <p>Our team is committed to providing trustworthy market insights, valuable resources, and professional support at every step of the way. As a Space Hunt user, you can rely on us to guide you through the property landscape with transparency, integrity, and dedication to helping you reach your real estate goals.</p>
                        <a href="about.html" class="filled-button">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="down-content">
                            <h4>Property Listings</h4>
                            <p>Browse a wide selection of real estate options tailored to your needs.</p>
                            <a href="#" class="filled-button">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                        <i class="fa-solid fa-phone-square"></i>
                        </div>
                        <div class="down-content">
                            <h4>Customer Support</h4>
                            <p>We provide round-the-clock support to assist with all your property needs.</p>
                            <a href="{{url('/contactus')}}" class="filled-button">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-chart-line"></i>
                        </div>
                        <div class="down-content">
                            <h4>Market Insights</h4>
                            <p>Get the latest market trends and insights to make informed decisions.</p>
                            <a href="#" class="filled-button">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Trusted Partners</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel">
                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="1">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="2">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="3">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="4">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="5">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>&copy; 2024 Space Hunt. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0;

        function clearField(t) {
            if (!cleared[t.id]) {
                cleared[t.id] = 1;
                t.value = '';
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>