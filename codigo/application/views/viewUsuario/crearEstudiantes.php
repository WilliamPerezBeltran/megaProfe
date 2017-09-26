<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">REGISTRAR ESTUDIANTE</h1>
                        <p>Ingrese su datos:</p>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->




<div class="col-md-4 col-sm-12">
    <div class="contact-form bottom">
        <h2>Datos del estudiante:</h2>
        <form  method="post"  >
            <?php echo validation_errors(); ?>
            <div class="form-group">
                <label>Nombre:</label>
                <input name="nombre" type="text" class="form-control" required="required" placeholder="Nombre" value="<?php echo set_value('nombre'); ?>">
            </div>
            <div class="form-group">
                <label>Dirección:</label>
                <input name="direccion" type="text" class="form-control" required="required" placeholder="Nombre" value="<?php echo set_value('direccion'); ?>">
            </div>
            <div class="form-group">
                <label>Correo:</label>
                <input name="correo" type="email" class="form-control" required="required" placeholder="Nombre" value="<?php echo set_value('correo'); ?>">
            </div>
            <div class="form-group">
                <label>Celular:</label>
                <input name="celular" type="text" class="form-control" required="required" placeholder="Nombre" value="<?php echo set_value('celular'); ?>">
            </div>
            <input name="Latitud" id="Latitud" type="text" class="form-control" required="required" placeholder="Latitud" readonly> <!-- Se debe poner type="hidden" -->
            <input name="Longitud" id="Longitud" type="text" class="form-control" required="required" placeholder="Longitud" readonly>



            <input type="submit" name="submit" class="btn btn-submit" value="Registrar">
            </div>
        </form>
    </div>
</div>

<section id="map-section">
    <h1>Seleccione la ubicación más adecuada:</h1>
    <div class="col-md-7 col-sm-12" class="container">
        <div id="map" style="width: 500px; height: 500px;"></div>
    </div>
</section> <!--/#map-section-->        

<script>

    var map;
    var ubicacionEstudiante;
    var marker;
    function initMap() {
        ubicacionEstudiante = {lat: 4.684629, lng: -74.052050}
        map = new google.maps.Map(document.getElementById('map'), {
            center: ubicacionEstudiante,
            zoom: 15
        });
        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function (event) {
            marker.setMap(null);
            addMarker(event.latLng, map);
        });

// Add a marker at the center of the map.
        addMarker(ubicacionEstudiante, map);
        // Adds a marker to the map.
    }
    function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
        $('#Latitud').val(location.lat);  // carga la latitud en el value del input de id="Latitud", el pide que se haga con el id por q se uso #
        $('#Longitud').val(location.lng);
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT9IomwALrEivH3102HRk3K1k6sHxeJU0&callback=initMap"
async defer></script>
<script type="text/javascript" src="<?php echo base_url('public/plantillaUsuario/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/plantillaUsuario/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/plantillaUsuario/js/wow.min.js'); ?>"></script>
<script type="text/javafcsript" src="<?php echo base_url('public/plantillaUsuario/js/main.js'); ?>"></script>  

</body>
</html>
