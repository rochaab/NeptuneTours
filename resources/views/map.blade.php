<!DOCTYPE html>
<html>
<head>
    <title>El Nido Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map {
            height: 60vh; /* Map height */
            width: 60vw; /* Map width */
            margin: 20px auto;
            border: 2px solid #333;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Set the center of the map to be around El Nido (with zoom level 12 for detail)
        var elNidoCenter = [11.1579, 119.3901];

        // Set map bounds to focus only on the El Nido islands area
        var bounds = [
            [11.0500, 119.3000], // Southwest corner
            [11.2500, 119.5000]  // Northeast corner
        ];

        // Initialize the map
        var map = L.map('map', {
            zoomControl: true, // Enable zoom control
            dragging: true,
            scrollWheelZoom: true,
            doubleClickZoom: true,
            touchZoom: true,
            keyboard: true
        }).setView(elNidoCenter, 12); // Set center and zoom level

        // Constrain the map's view to the bounds to focus on El Nido islands only
        map.setMaxBounds(bounds);

        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
    </script>
</body>
</html>
