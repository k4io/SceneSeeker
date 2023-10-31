
<!DOCTYPE html>
<html lang="en">



<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scene Seeker</title>

    <!-- CSS / Bootstrap -->
    <link href="assets/css/imports_new.css" rel="stylesheet">

    <!-- AOS -->
    <link href="unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://cdn.sellix.io/static/js/embed.js" ></script>
    <!-- JQUERY -->
    <script src="https://kit.fontawesome.com/2b6984cf59.js" crossorigin="anonymous"></script>
  
    <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- AOS -->
    <script src="unpkg.com/aos%402.3.1/dist/aos.js"></script>

    <!-- REMIX ICONS -->
   

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo2.png">
    
    <!-- SEO -->
    <meta name="robots" content="index">
    <meta name="theme-color" content="#7ba3fa">
    <meta property="og:site_name" content="Scene Seeker">
    <meta property="og:url" content="https://planb.gay/">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://planb.gay/assets/img/logo2.png">
    <meta property="og:description" content="Student night life site project">
    <meta name="description" content="Student night life site project">
</head>

<body>
    <!-- HEADER -->
    <header id="navbar">
        <div class="overlay"></div>
        <div class="container">
            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-xl navbar-dark">
                <a class="navbar-brand" href="#"><img src="assets/img/logo2.png" alt="" style="width: 3.5rem;"></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link px-md-2 px-0" href="#home" onclick="change_nav(1)">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-2 px-0" href="#about" onclick="change_nav(2)">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-2 px-0" href="#pricing" onclick="change_nav(3)">Map</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-2 px-0" href="#faqs" onclick="change_nav(4)">FAQ</a>
                        </li>
                    </ul>
                    <div class="d-lg-flex d-block">
                        <a href="/inputplace.php" class="button nav-btn account-btn d-flex justify-content-center align-items-center mt-md-0 mt-2 mb-md-0 mb-2 ml-4"><i class="fa-solid fa-location-dot"></i> Add location</a>
                        <a href="/verifyplace.php" class="button nav-btn d-flex justify-content-center align-items-center mt-md-0 mt-2 mb-md-0 mb-2 ml-4"><i class="fa-solid fa-square-poll-vertical"></i> Admin</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- NAVBAR END -->
    </header>
    <!-- ~HEADER -->

    <section style="overflow: hidden;" id="landing">
        <div class="overlay-left"></div>
        <div class="overlay-right"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center text-center">
                <div class="col-12">
                    <div class="content">
                        <h1>The best student-rated venues<br> <span style="color: #7ba3fa">all in one place</span>.</h1>
                        <p>Look no further for a place to go on a night out. <br> We have you covered!
                        </p>
                        <a href="#0" onclick="change_nav(3)" class="button rounded-circle">Try it now <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="#0" onclick="change_nav(2)" class="button read">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 180">
            <path fill="#7ba3fa" fill-opacity="1" d="M0,128L120,138.7C240,149,480,171,720,170.7C960,171,1200,149,1320,138.7L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#007acc;"></path>
        </svg>
    </section>
    <section id="why-choose">
        <div class="overlay"></div>
        <div class="container">
            <div class="row text-center justify-content-center mb-5">
                <div class="col-12">
                    <div class="top-text">
                        <h2 data-aos="fade-down" data-aos-offset="100" data-aos-duration="1500">Why use Scene Seeker?</h2>
                        <p data-aos="fade-down" data-aos-offset="100" data-aos-duration="1000">We bring you a new experience with our places directory, <br> combining a free-to-use product with like-minded student developers.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos-offset="100" data-aos="fade" data-aos-duration="700">
                    <div class="box d-flex justify-content-center">
                        <div class="d-flex flex-column div-break" style="max-width: 80%;">
                            <div class="top d-flex align-items-center">
                                <i class="fa-solid fa-gear"></i>
                                <div class="feature">
                                    <span>Explore student</span>
                                    <span>approved spots</span>
                                </div>
                            </div>
                            <p>Looking for cool places to hang out with your friends? At SceneSeeker, we've got you covered. Our platform is a treasure trove of student-rated venues that are perfect for your next get-together. Whether it's a cozy café for a coffee date or an exciting game night at a local arcade, you'll find the ideal spot to chill with your pals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos-offset="100" data-aos="fade" data-aos-duration="700" data-aos-delay="400">
                    <div class="box d-flex justify-content-center">
                        <div class="d-flex flex-column div-break" style="max-width: 80%;">
                            <div class="top d-flex align-items-center">
                                <i class="fa-solid fa-feather"></i>
                                <div class="feature">
                                    <span>Simple and</span>
                                    <span>Convenient</span>
                                </div>
                            </div>
                            <p>Exploring new places with friends should be fun, not a hassle. SceneSeeker is designed to be user-friendly, making it a breeze to find the perfect spot for your next adventure.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos-offset="100" data-aos="fade" data-aos-duration="700" data-aos-delay="900">
                    <div class="box d-flex justify-content-center">
                        <div class="d-flex flex-column div-break" style="max-width: 80%;">
                            <div class="top d-flex align-items-center">
                                <i class="fa-solid fa-heart"></i>
                                <div class="feature">
                                    <span>Your friends'</span>
                                    <span>favorite spots</span>
                                </div>
                            </div>
                            <p>SceneSeeker is where you'll find those hidden gems that your friends have been raving about. We've gathered reviews and recommendations from students to help you choose the perfect place to connect, relax, and make memories.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="stats">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 order-md-1 order-2">
                    <h3 class="mb-0" data-aos="fade" data-aos-duration="2500">We are always looking <br> </h3>
                    <h3 data-aos="fade" data-aos-duration="2000">for <span style="color: #7ba3fa">improvements</span></h3>
                </div>
                <div class="col-md-4 order-md-2 order-1 text-right">
                    <img src="assets/img/logo2.png" alt="" style="width: 3.5rem;">
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="0">
                    <div class="box">
                        <span>In use</span>
                        <span>since 2023</span>
                        <p>Originated at the University of Hull, we have been serving students since 2023!<br> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="250">
                    <div class="box">
                        <span>+</span>
                        <span>100s</span>
                        <p>Places added to our <u>free</u> <br> directory!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="500">
                    <div class="box">
                        <span>+</span>
                        <span>5</span>
                        <p>Project developers on the team @ <br> SceneSeeker</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="750">
                    <div class="box">
                        <span>+</span>
                        <span>99%</span>
                        <p>Satisfied users with <br>our service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="purchase-faq">
        <div class="overlay-top"></div>
        <div class="overlay-bottom"></div>
        <div class="gui-left">
            <img src="assets/img/gui_new_compressed.png" alt="Plan B Interface" width="750rem">
        </div>
        <div class="gui-right">
            <img src="assets/img/gui_new_compressed.png" alt="Plan B Interface" width="750rem">
        </div>
        <div class="container">
            <div class="row text-center justify-content-center mb-5">
                <div class="col-12">
                    <div class="top-text">
                        <h2 data-aos="fade" data-aos-duration="2500">How about checking out<br>
                            <span style="color: #7ba3fa;">some places</span> right now?
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 9rem;">

                    <div class="container">
                        <div class="row text-center justify-content-center mb-5">
                        <?php
try {
    // Create or open the SQLite database
    $db = new PDO('sqlite:places.db');

    // Create the 'places' table if it doesn't exist (you can use the same table structure as mentioned before)
    $createTableQuery = "CREATE TABLE IF NOT EXISTS places (
        id INTEGER PRIMARY KEY,
        name TEXT,
        description TEXT,
        location TEXT,
        opening_times TEXT,
        created_at DATETIME,
        verified INTEGER DEFAULT 0,
        latitude REAL,
        longitude REAL
    )";
    $db->exec($createTableQuery);

    // Retrieve verified places from the database
    $getVerifiedPlacesQuery = "SELECT * FROM places WHERE verified = 1";
    $verifiedPlaces = $db->query($getVerifiedPlacesQuery);

    // Create a Leaflet map to display locations
    echo '
    <html>
    <head>
        <title>View Places</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <style>
            #map {
                width: 100%;
                height: 400px;
            }
        </style>
    </head>
    <body>
        <div id="map"></div>
    </body>
    </html>';

    echo '
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        const map = L.map("map").setView([53.7700981919597, -0.369093418121338], 15);
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png").addTo(map);

        const markers = [';

    foreach ($verifiedPlaces as $place) {
        $latitude = $place['latitude'];
        $longitude = $place['longitude'];
        $name = $place['name'];
        $description = $place['description'];
        $openingTimes = $place['opening_times'];

        echo "
        {
            lat: $latitude,
            lng: $longitude,
            name: '$name',
            description: '$description',
            openingTimes: '$openingTimes'
        },";
    }

    echo '];

        markers.forEach(marker => {
            L.marker([marker.lat, marker.lng])
                .addTo(map)
                .bindPopup(
                    `<b>Name:</b> ${marker.name}<br>` +
                    `<b>Opening Times:</b> ${marker.openingTimes}<br>` +
                    `<b>Description:</b> ${marker.description}`
                );
        });
    </script>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
                        </div>
                    </div>
                </section>
        </div>
    </div>
</div>

            <div class="row text-center justify-content-center faq">
                <div class="col-12">
                    <div class="top-text">
                        <h2 data-aos="fade-up" data-aos-duration="1000">Frequently Asked Questions</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">Here are some common questions people ask us.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="accordion" id="accordionPanelsStayOpen">
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                    What do we provide?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                SceneSeeker provides venue discovery and ratings for hangout spots.</strong>
                                    <ul class="mb-0 mt-2">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    How does your website work?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    We allow anyone to create a ticket to verify a place, these are then filtered through a basic spam filter and administrators manually verify the legitimate ones and they get published to the map.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="2500">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                    I want to suggest a module idea or a new version, what do I do?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body">
                                    To suggest a module idea or a new version, please contact our support team through the provided contact channels.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 data-aos="fade" data-aos-duration="600">Looking for contact?</h2>
                    <p data-aos="fade" data-aos-duration="600">Check out some ways to contact us</p>
                    <a data-aos="fade" data-aos-duration="600" href="mailto:k.carter-2018@hull.ac.uk" class="button rounded-circle px-5">Email</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ~CONTACT -->

    <!-- FOOTER -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="items d-flex">
                        <div>
                            <h5>SceneSeeker Directory</h5>
                            <p>Everywhere all at once</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 text-right">
                    <div class="items d-flex justify-content-md-end justify-content-start">
                        <ul>
                            <li><a onclick="change_nav(1)" href="#home">Home</a></li>
                            <li><a onclick="change_nav(2)" href="#about">About us</a></li>
                            <li><a onclick="change_nav(3)" href="#pricing">Map</a></li>
                            <li><a onclick="change_nav(4)" href="#faqs">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center">Copyright 2023-2023 SceneSeeker Team. All rights reserved.</p>
    </footer>

    <!-- ~FOOTER -->

    <!-- BOOTSTRAP JS -->
    <script src="assets/js/bootstrap.js"></script>

    <!-- TYPED JS -->
    <script src="../npm/typed.js%402.0.12"></script>

    <!-- Start AOS -->
    <script>
        AOS.init({
            disable: 'mobile',
            once: true,
        });
    </script>

    <script>
        var typed = new Typed('.span-off', {
            strings: ['Hello user', 'Take your plan b!', 'A plan b a day keeps camomo away'],
            loop: true,
            typeSpeed: 60,
            backSpeed: 30,
        });
    </script>

    <script>
        function remove_hash() {
            setTimeout(() => {
                history.replaceState({}, document.title, ".");
            }, 5);
        }

        var scroll = $(window).scrollTop();
        if (scroll > 70) {
            $("#navbar").addClass("active");
        } else {
            $("#navbar").removeClass("active");
        }

        function change_nav(tab) {
            remove_hash();
            if (tab == 1) {
                $(window).scrollTop(0);
            } else if (tab == 2) {
                $(window).scrollTop($("#why-choose").offset().top - 200);
            } else if (tab == 3) {
                $(window).scrollTop($("#purchase-faq").offset().top - 100);
            } else if (tab == 4) {
                $(window).scrollTop($("#purchase-faq .faq").offset().top - 300);
            } else if (tab == 5) {
                $(window).scrollTop($("body").height());
            }
        }

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 70) {
                $("#navbar").addClass("active");
            } else {
                $("#navbar").removeClass("active");
            }
        });
    </script>
</body>



</html>