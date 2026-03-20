<!DOCTYPE html>
<html>
<head>
    <title>Search Garages</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Search Garages</h1>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([51.505, -0.09], 13);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Example data for garages (replace with your data source)
        var garages = [
            { "name": "Garage 1", "lat": 51.505, "lng": -0.09 },
            { "name": "Garage 2", "lat": 51.51, "lng": -0.1 },
            { "name": "Garage 3", "lat": 51.49, "lng": -0.08 }
        ];

        // Add markers for each garage
        garages.forEach(function(garage) {
            L.marker([garage.lat, garage.lng]).addTo(map)
                .bindPopup(garage.name);
        });
    </script>
</body>
</html>