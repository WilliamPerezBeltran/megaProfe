<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>MegaProfe</title>
        <link href="<?php echo base_url('public/plantillaUsuario/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public/plantillaUsuario/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public/plantillaUsuario/css/animate.min.css'); ?>" rel="stylesheet"> 
        <link href="<?php echo base_url('public/plantillaUsuario/css/lightbox.css'); ?>" rel="stylesheet"> 
        <link href="<?php echo base_url('public/plantillaUsuario/css/main.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public/plantillaUsuario/css/responsive.css'); ?>" rel="stylesheet">

        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('public/plantillaUsuario/images/ico/apple-touch-icoUsuario/on-144-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('public/plantillaUsuario/images/ico/apple-touch-icon-114-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('public/plantillaUsuario/images/ico/apple-touch-icon-72-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('public/plantillaUsuario/images/ico/apple-touch-icon-57-precomposed.png'); ?>">
        <style type="text/css">
            #map { height: 100%; }
        </style>
    </head><!--/head-->

    <body>
        <header id="header">      
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 overflow">
                        <div class="social-icons pull-right">
                            <ul class="nav nav-pills">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="<?php echo site_url('ControladorUsuario/controladorPrincipal/listarTemas')?>">
                            <h1><img src="<?php echo base_url('public/plantillaUsuario/images/logo.png'); ?>" alt="logo"></h1>
                        </a>

                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/listarTemas')?>">Home</a></li>
                            <li class="dropdown"><a href="#">Registro <i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/crearEstudiantes')?>">Estudiante</a></li>
                                    <li><a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/crearProfesores')?>">Profesor</a></li>
                                </ul>
                            </li>                    


                            <li><a href="file:/C:/xampp/htdocs/megaProfe/prototipo/prototipoUsuario/6.login.html"  >Login</a></li>                    
                        </ul>
                    </div>
                    <div class="search">
                        <form role="form">
                            <i class="fa fa-search"></i>
                            <div class="field-toggle">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!--/#header-->

<link rel="stylesheet" href="<?php echo base_url('public/plantillaUsuario/select2Admin/select2.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('public/plantillaUsuario/datepicker/style.css'); ?>">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Registro de profesor</h1>
                            <p>Be Creative</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="projects" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3>Información general</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="#">Información Personal<span class="pull-right">--</span></a></li>
                                <li class="active"><a href="#">Experiencia laboral<span class="pull-right"></span></a></li>
                                <li><a href="#">Estudios<span class="pull-right"></span></a></li>
                                <li><a href="#">Logos<span class="pull-right"></span></a></li>
                                <li><a href="#">Mobile<span class="pull-right"></span></a></li>
                                <li><a href="#">Mockup<span class="pull-right"></span></a></li>
                                <li><a href="#">Php<span class="pull-right"></span></a></li>
                                <li><a href="#">Wordpress<span class="pull-right"></span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item  recent">
                            <h3>Recent Projects</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project2.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project3.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item popular">
                            <h3>Popular Projects</h3>
                            <ul class="gallery">
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6">
                    
                    
                    
                    
                    
                    <div class="contact-form bottom">
        <h2><b>Datos del profesor</b></h2><br>
        <?php echo validation_errors(); ?> 
        <?php
        $attributes = array('autocomplete' => 'off');
        echo form_open_multipart('ControladorUsuario/controladorPrincipal/crearProfesores', $attributes);
        ?>


        <div class="form-group   ">
            <input name="nombre" type="text" class="form-control" required="required" placeholder="Nombre" value="<?php echo set_value('nombre'); ?>">
        </div>
        <div class="form-group">
            <input name="celular" type="text" class="form-control" required="required" placeholder="Celular" value="<?php echo set_value('celular'); ?>">
        </div>
        <div class="form-group">
            <input name="dirección" type="text"  class="form-control" required="required" placeholder="Direccion" value="<?php echo set_value('dirección'); ?>">
        </div>

        <div class="form-group">
            <input name="fecha" type="text" id="datepicker" class="form-control" required="required" placeholder="Fecha de nacimiento" value="<?php echo set_value('fecha'); ?>">
        </div>
        <div class="form-group">
            <select name="tema[]" class="form-control select2"class="form-control " multiple="multiple" data-placeholder="Seleccione el area el cual desea enseñar " style="width: 100%;">
                <?php foreach ($temas as $item_temas){?>
                <option value="<?php echo $item_temas['ID'] ;?>"  <?php echo  set_select('tema[]', $item_temas['ID']); ?>><?php echo $item_temas['Nombre'] ;?></option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <select name="subtema[]" class="form-control select2"class="form-control " multiple="multiple" data-placeholder="Seleccione el subarea el cual desea enseñar " style="width: 100%;">
                <?php foreach ($subtemas as $item_subtemas){?>
                <option value="<?php echo $item_subtemas['ID'] ;?>"<?php echo  set_select('subtema[]', $item_subtemas['ID']); ?>><?php echo $item_subtemas['Nombre'] ;?></option>
                <?php }?>
            </select>
        </div>
        
        
        <div class="form-group">
            <input name="tarifa" type="text" class="form-control" required="required" placeholder="Precio de la clase" value="<?php echo set_value('tarifa'); ?>">
        </div>
        <div class="form-group" >
            Foto:
            <input name="foto" id="foto" type="file"  class="form-control" required="required" placeholder="Tarifa de la clase" value="">
        </div>
        <div class="form-group">
            Hoja de vida:
            <input name="cv" id="cv" type="file"  class="form-control" required="required" placeholder="Hoja de vida Hoja de vida Hoja de vida" value="">
        </div>
        <input name="Latitud" id="Latitud" type="hidden" class="form-control" required="required" placeholder="Latitud" readonly> <!-- Se debe poner type="hidden" -->
        <input name="Longitud" id="Longitud" type="hidden" class="form-control" required="required" placeholder="Longitud" readonly><!--y solo sirve con el id no con el name ,, readonly: solo para leer y queda en gris -->
        <div class="form-group">
            Perfil:
            <textarea name="description" id="message" required="required" class="form-control" rows="15"  cols="50" placeholder="Cuentanos de ti.... tienes 140caracteres" ></textarea>
        </div>
        
        <div class="form-group">
            <h2><b>Disponibilidad</b></h2><br>

            <label>Lunes</label>
            <select name="idDisponibilidad[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccione la jornada de estudio " style="width: 100%;">
                <option value="1">Mañana</option>
                <option value="2">Tarde</option>
                <option value="3">Noche</option>
            </select>

            <label>Martes</label>
            <select name="idDisponibilidad[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccione la jornada de estudio " style="width: 100%;">
                <option value="4">Mañana</option>
                <option value="5">Tarde</option>
                <option value="6">Noche</option>
            </select>

            <label>Miercoles</label>
            <select name="idDisponibilidad[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccione la jornada de estudio " style="width: 100%;">
                <option value="7">Mañana</option>
                <option value="8">Tarde</option>
                <option value="9">Noche</option>
            </select>

            <label>Jueves</label>
            <select name="idDisponibilidad[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccione la jornada de estudio " style="width: 100%;">
                <option value="10">Mañana</option>
                <option value="11">Tarde</option>
                <option value="12">Noche</option>
            </select>

            <label>Viernes</label>
            <select name="idDisponibilidad[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccione la jornada de estudio " style="width: 100%;">
                <option value="13">Mañana</option>
                <option value="14">Tarde</option>
                <option value="15">Noche</option>
            </select>

            <label>Sabado</label>
            <select name="idDisponibilidad[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccione la jornada de estudio " style="width: 100%;">
                <option value="16">Mañana</option>
                <option value="17">Tarde</option>
                <option value="18">Noche</option>
            </select>
        </div>
<!--/mapa-->
          <section id="map-section">
                <h1>Seleccione la ubicación en donde dictara la clase:</h1>
                <div class="col-md-7 col-sm-12" class="container">
                    <div id="map" style="width: 500px; height: 500px;"></div>
                </div>
          </section> 

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-submit" value="Registrar">
        </div>

        </form>
    </div>
    
                      
                                </div>
                                
                            </div>
                        </div>
                        
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#projects-->




<script>

    var map;
    var ubicacionProfesor;
    var marker;
    function initMap() {
        ubicacionProfesor = {lat: 4.684629, lng: -74.052050}
        map = new google.maps.Map(document.getElementById('map'), {
            center: ubicacionProfesor,
            zoom: 15
        });
        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function (event) {
            marker.setMap(null);
            addMarker(event.latLng, map);
        });

// Add a marker at the center of the map.
        addMarker(ubicacionProfesor, map);
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="<?php echo base_url('public/plantillaUsuario/select2Admin/select2.full.min.js'); ?>"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true
          });
    });
</script>
</body>
</html>









 

 
 
 