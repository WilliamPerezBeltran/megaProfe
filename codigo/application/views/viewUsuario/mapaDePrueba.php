<html>
    <head>
        <title>Simple Map</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <style>
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            #map {
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div id="map"></div>
        <script>

            var map;
            var prueba;
            function initMap() {
                prueba = {lat: 4.6845296, lng: 74.0515299}
                map = new google.maps.Map(document.getElementById('map'), {
                    center: prueba,
                            zoom: 8
                });
                // This event listener calls addMarker() when the map is clicked.
                google.maps.event.addListener(map, 'click', function (event) {
                    addMarker(event.latLng, map);
                });
                // Add a marker at the center of the map.
                addMarker(prueba, map);

            }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT9IomwALrEivH3102HRk3K1k6sHxeJU0&callback=initMap"
        async defer></script>
    </body>
</html>