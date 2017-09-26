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
                            <h1 class="title">Portfolio</h1>
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
                            <h3>Project Categories</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/crearProfesores')?>">Información Personal<span class="pull-right">--</span></a></li>
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
                   <h2><b>Experiencia laboral</b></h2><br>
        

                    

                    <table class="table table-striped">
                                    <tr>
                                        <th>Institucion</th>
                                        <th>Profesion</th>
                                        <th>Ingreso</th>
                                        <th>Finalizacion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <?php foreach ($infoExperienciaProfe as $item_infoExperienciaProfe ){?>
                                    <tr>
                                        
                                        <td><?php echo $item_infoExperienciaProfe['institucion'] ;?> </td>
                                        <td><?php echo $item_infoExperienciaProfe['profesion'] ;?> </td>
                                        <td><?php echo $item_infoExperienciaProfe['ingreso'] ;?> </td>
                                        <td><?php echo $item_infoExperienciaProfe['finalizacion'] ;?> </td>
                                        <td><a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/editarExperienciaLaboralProfesor/'.$item_infoExperienciaProfe['ID']);?>"><button type="button" class="btn btn-success">Editar</button></a></td>
                                        <td><a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/eliminarExperienciaLaboralProfesor/'.$item_infoExperienciaProfe['ID']);?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                                    </tr>
                                    <?php }?>

                     </table>       
                         
                     <td><a  href="<?php echo site_url('ControladorUsuario/controladorPrincipal/experienciaLaboralProfe');?>"><button type="button" class="btn  btn-primary">Agregar Experiencia</button></a> </td>
                      <a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/crearEstudioProfe');?>"><button type="button" class="btn btn-info">Siguiente</button></a>
                  

        
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
          
        $(".select2").select2();
        $( "#datepickerIngreso" ).datepicker({
            changeMonth: true,
            changeYear: true
          });
          
        $(".select2").select2();
        $( "#datepickerFinalizacion" ).datepicker({
            changeMonth: true,
            changeYear: true
          });
    });
</script>
</body>
</html>









 

 
 
 