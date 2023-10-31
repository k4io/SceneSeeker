
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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  
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
    <section id="purchase-faq">
        <div class="container">
            <div class="row justify-content-center" style="margin-bottom: 9rem;">
                <section id="media-videos" style="width: 80vw; height: 70vh;
                    overflow: hidden;
                    padding: 5rem 0;
                    padding-bottom: 8rem;
                    position: relative;">
                    <div class="container">
                        <div class="row text-center justify-content-center mb-5">
                            <h2 style="color: #fff;">Add a Place</h2>
                            <form method="post" action="processnewplace.php">
                                <label style="color: #fff;" for="name">Name:</label>
                                <input type="text" name="name" required><br><br>

                                <label style="color: #fff;" for="description">Description:</label>
                                <textarea name="description" required></textarea><br><br>

                                <div id="map" style="width: 100%; height: 300px;"></div>
                                <button style="color:#fff;" class="button nav-btn account-btn d-flex justify-content-center align-items-center mt-md-0 mt-2 mb-md-0 mb-2 ml-4" class="fa-solid fa-location-dot" type="button" id="selectLocation">Select Location on Map</button>
                                <input type="hidden" id="latitude" name="latitude">
                                <input type="hidden" id="longitude" name="longitude">

                                <label style="color: #fff;" for="opening_times">Hourly Opening Times:</label>
                                <input type="text" name="opening_times" required><br><br>

                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
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
        var map = L.map('map').setView([53.7700981919597, -0.369093418121338], 15);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        myCustomColour = '#583470';

        markerHtmlStyles = `
          background-color: ${myCustomColour};
          width: 2rem;
          height: 2rem;
          display: block;
          left: -1.5rem;
          top: -1.5rem;
          position: relative;
          border-radius: 3rem 3rem 0;
          transform: rotate(45deg);
          border: 1px solid #FFFFFF`

        iconz = L.divIcon({
          className: "my-custom-pin",
          iconAnchor: [0, 24],
          labelAnchor: [-6, 0],
          popupAnchor: [0, -36],
          html: `<span style="${markerHtmlStyles}" />`
        })

        var marker = L.marker([53.7700981919597, -0.369093418121338], { draggable: true, icon: iconz }).addTo(map);

        marker.on('dragend', function (e) {
            updateLatLng(e.target.getLatLng().lat, e.target.getLatLng().lng);
        });

        document.getElementById('selectLocation').addEventListener('click', function () {
            var latLng = marker.getLatLng();
            updateLatLng(latLng.lat, latLng.lng);
            
            myCustomColour2 = '#7ba3fa';

            markerHtmlStyles2 = `
              background-color: ${myCustomColour2};
              width: 2rem;
              height: 2rem;
              display: block;
              left: -1.5rem;
              top: -1.5rem;
              position: relative;
              border-radius: 3rem 3rem 0;
              transform: rotate(45deg);
              border: 1px solid #FFFFFF`

            iconzz = L.divIcon({
              className: "my-custom-pin",
              iconAnchor: [0, 24],
              labelAnchor: [-6, 0],
              popupAnchor: [0, -36],
              html: `<span style="${markerHtmlStyles2}" />`
            })

            marker.setIcon(iconzz);
        });

        function updateLatLng(lat, lng) {
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;
        }
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