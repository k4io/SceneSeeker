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

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verify'])) {
        $placeId = $_POST['place_id'];
        $verifyQuery = "UPDATE places SET verified = 1 WHERE id = :id";
        $stmt = $db->prepare($verifyQuery);
        $stmt->bindParam(':id', $placeId);
        $stmt->execute();
    }

    // Retrieve unverified places from the database
    $getUnverifiedPlacesQuery = "SELECT * FROM places WHERE verified = 0";
    $unverifiedPlaces = $db->query($getUnverifiedPlacesQuery);

    // Create a Leaflet map to display locations
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Verify Places</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <style>
            .map-container {
                display: none;
            }
        </style>
    </head>
    <body>
        <h2 style="color:#FFF;">Unverified Places</h2>
        <ul>';

    foreach ($unverifiedPlaces as $place) {
        $latitude = $place['latitude'];
        $longitude = $place['longitude'];
        $name = $place['name'];
        $description = $place['description'];
        $openingTimes = $place['opening_times'];
        $placeId = $place['id'];
        $mapId = "map-$placeId";

        echo "
        <li style='color:#FFF;'>
            <b>Name:</b> $name<br>
            <b>Opening Times:</b> $openingTimes<br>
            <b>Description:</b> $description<br>
            <button class='show-map-button' data-latitude='$latitude' data-longitude='$longitude' data-map-id='$mapId'>Show Map</button>
            <form method='post'>
                <input type='hidden' name='place_id' value='$placeId'>
                <input type='submit' name='verify' value='Verify'>
            </form>
            <div class='map-container' id='$mapId' style='width: 100%; height: 400px;'></div>
        </li>";
    }

    echo '
        </ul>
    </body>
    </html>';

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    const showMapButtons = document.querySelectorAll('.show-map-button');

    showMapButtons.forEach((button) => {
        button.addEventListener('click', function () {
            const mapContainer = document.getElementById(this.getAttribute('data-map-id'));
            if (mapContainer.style.display === 'block') {
                mapContainer.style.display = 'none';
            } else {
                mapContainer.style.display = 'block';
                const latitude = this.getAttribute('data-latitude');
                const longitude = this.getAttribute('data-longitude');
                showMap(this.getAttribute('data-map-id'), latitude, longitude);
            }
        });
    });

    function showMap(mapId, latitude, longitude) {
        const map = L.map(mapId).setView([latitude, longitude], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        L.marker([latitude, longitude]).addTo(map);
    }
</script>
