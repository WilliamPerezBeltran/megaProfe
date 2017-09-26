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