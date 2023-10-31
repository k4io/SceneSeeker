<!DOCTYPE html>
<html>
<head>
    <title>Rust Map Viewer</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        @font-face {
            font-family: 'Minecraft';
            src: url('Minecraft.ttf') format('truetype');
            /* Add additional font formats if needed (e.g., 'opentype') */
        }

        .text-with-border {
            font-family: 'Minecraft', sans-serif; /* Use the custom font */
            font-size: 10px;
            color: #000; /* Text color */
            text-shadow:
                -1px -1px 0 #fff, /* Top-left border */
                 1px -1px 0 #fff, /* Top-right border */
                -1px  1px 0 #fff, /* Bottom-left border */
                 1px  1px 0 #fff; /* Bottom-right border */
        }
        body {font-family: "ＭＳ Ｐゴシック";}
        img {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
        }
        #map-container {
            width: 800px;
            height: 600px;
            position: relative;
        }
        .map-icon {
            position: absolute;
            font-size: 16px;
            background-color: #ff5733;
            color: #4287f5;
            border-radius: 50%;
            padding: 5px;
        }
    </style>
</head>
<body>
    <p>Rust Map Viewer</p>
    <div style="width: 100%;height: 40vw;" id="map-container"></div>

    <label>
        <input type="checkbox" id="showText"> Show Text
    </label>
    <!-- Add JavaScript for interactive features here -->
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const mapid = urlParams.get('mapid');
        var map = L.map('map-container').setView([0, 0], 2); // Center and zoom level
        var imageUrl = `https://content.rustmaps.com/maps/240/${mapid}/map_raw.png`;
        var imageBounds = [[-90, -150], [90, 150]]; // Replace with actual bounds
        L.imageOverlay(imageUrl, imageBounds).addTo(map);

        // Function to create a custom DivIcon for players with the provided icon

        var minLat = -90; // Replace with the actual minimum latitude
        var maxLat = 90;  // Replace with the actual maximum latitude
        var minLng = -150; // Replace with the actual minimum longitude
        var maxLng = 150;  // Replace with the actual maximum longitude
        var centerX = 8250 / 2;
        var centerY = 8250 / 2;

        centerX = centerX * 1.18;

        // Calculate latitude and longitude for the center of the image
        var centerLat = (maxLat + minLat) / 2;
        var centerLng = (maxLng + minLng) / 2;

        // Calculate the scale factors for latitude and longitude based on half of the image dimensions
        var latScale = (maxLat - minLat) / centerY;
        var lngScale = (maxLng - minLng) / centerX;

        var showTextCheckbox = document.getElementById("showText");
        var textVisible = false;

        
        function createCustomIcon(player) {
            return L.divIcon({
                className: 'custom-icon text-with-border',
                html: (textVisible ? `<img style="transform: 25%; color: #4287f5;" src="https://i.imgur.com/OR9uuOs.png"/><br>${player.name}<br>${player.held_item}`: `<img style="transform: translate(0, 24px); color: #4287f5;" src="https://i.imgur.com/OR9uuOs.png"/>`),
                iconSize: [48, 48], // Adjust the icon size as needed
            });
        }

        // Function to update player positions on the map
        function updatePlayers(players) {
            // Remove existing player markers from the map
            map.eachLayer(layer => {
                if (layer instanceof L.Marker) {
                    map.removeLayer(layer);
                }
            });
        
            // Add markers for updated player positions with custom icons
            players.forEach(player => {
                var x = player.position_x / 1;
                var y = player.position_y / 1;

                // Calculate latitude and longitude based on the relative coordinates and scales
                var lat = 0;
                if(y < 0) {
                    lat = 0 - centerLat + (y * latScale);
                } else {
                    lat = centerLat + (y * latScale);
                }
                var lng = centerLng + (x * lngScale);

                var marker = L.marker([lat, lng], {
                    icon: createCustomIcon(player),
                }).addTo(map);

                var toggleText = function () {
                    if (textVisible) {
                        map.closePopup();
                    } else {
                        var text = player.name + "<br>Held Item: " + player.held_item;
                        marker.bindPopup(text).openPopup();
                    }
                    textVisible = !textVisible;
                };
            
                // Add a click event to the marker to toggle text
                marker.on("click", toggleText);
            
                // Optionally, add a mouseover event to display text on hover (if textVisible is false)
                marker.on("mouseover", function () {
                    if (!textVisible) {
                        var text = player.name + "<br>Held Item: " + player.held_item;
                        marker.bindPopup(text).openPopup();
                    }
                });
            
                // Optionally, add a mouseout event to close the text popup (if textVisible is false)
                marker.on("mouseout", function () {
                    if (!textVisible) {
                        map.closePopup();
                    }
                });
            });
        }

        // Create an EventSource to listen for updates from the server
        const eventSource = new EventSource(`sse.php?mapid=${mapid}`);


        // Add an event listener to the checkbox to toggle text visibility
        showTextCheckbox.addEventListener("change", function () {
            textVisible = this.checked;
            if (!textVisible) {
                map.closePopup();
            }
        });
        // Listen for SSE updates and update player positions when received
        eventSource.addEventListener('message', event => {
            const players = JSON.parse(event.data);
            updatePlayers(players);
        });
    </script>
</body>
</html>
