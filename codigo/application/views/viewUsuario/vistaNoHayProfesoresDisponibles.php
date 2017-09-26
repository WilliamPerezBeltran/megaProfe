<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Coming Soon | Triangle</title>
    <link href="<?php echo base_url('public/plantillaUsuario/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/plantillaUsuario/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/plantillaUsuario/css/main.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/plantillaUsuario/css/responsive.css'); ?>" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('public/plantillaUsuario/images/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('public/plantillaUsuario/images/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('public/plantillaUsuario/images/ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('public/plantillaUsuario/images/ico/apple-touch-icon-57-precomposed.png'); ?>">
</head><!--/head-->

<body>
    <div class="logo-image">                                
        <a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/listarTemas')?>"><img class="img-responsive" src="<?php echo base_url('public/plantillaUsuario/images/logo.png'); ?>" alt=""> </a> 
    </div>
     <section id="coming-soon">        
         <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">                    
                    <div class="text-center coming-content">
                        <h1>LO SENTIMOS NO HAY PROFESORES<br> REGISTRADOS EN ESTA AREA </h1>
                        <p>No tenemos profesores registrados en nuestra base de datos porfavor intente de nuevo con otra area de estudio<br>
                            Lo invitamos a que se dirija de nuevo a la pagina principal a buscar el profesor que desea.<br />.</p>                           
                        <div class="social-link">
                            <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                            <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                        </div>
                    </div>                    
                </div>
                <div class="col-sm-12">
                    <div class="time-count">
                        <ul id="countdown">
                            <li class="angle-one">
                                <span class="days time-font">00</span>
                                <p>Days</p>
                            </li>
                            <li class="angle-two">
                                <span class="hours time-font">00</span>
                                <p>Hours</p>
                            </li>
                            <li class="angle-three">
                                <span class="minutes time-font">00</span>
                                <p class="minute">Mins</p>
                            </li>                            
                            <li class="angle-four">
                                <span class="seconds time-font">00</span>
                                <p>Secs</p>
                            </li>               
                        </ul>   
                    </div>
                </div>
            </div>
        </div>       
    </section>
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><i class="fa fa-envelope-o"></i> SUBSCRIBE TO OUR NEWSLETTER</h2>
                            <p>Quis filet mignon proident, laboris venison tri-tip commodo brisket aute ut. Tail salami pork belly, flank ullamco bacon bresaola do beef<br /> laboris venison tri-tip.</p>
                        </div>
                        <div class="col-sm-6 newsletter">
                            <form id="newsletter">
                                <input class="form-control" type="email" name="email"  value="" placeholder="Enter Your email">
                                <i class="fa fa-check"></i>
                            </form>
                            <p>Don't worry we will not use your email for spam</p>
                        </div>    
                    </div>
                </div>     
            </div>
        </div> 
    </section>

    <section id="coming-soon-footer" class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <p>&copy; Your Company 2014. All Rights Reserved.</p>
                    <p>Crafted by <a target="_blank" href="http://designscrazed.org/">Allie</a></p>
                </div>
            </div>
        </div>       
    </section>
    

    <script type="text/javascript" src="<?php echo base_url('public/plantillaUsuario/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/plantillaUsuario/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="js/"></script>
    <script type="text/javascript" src="<?php echo base_url('public/plantillaUsuario/js/coundown-timer.js'); ?>"></script>   

<script type="text/javascript" src="<?php echo base_url('public/plantillaUsuario/js/wow.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/plantillaUsuario/js/main.js'); ?>"></script>   
    
</body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script type="text/javascript">
            //Countdown js
         $("#countdown").countdown({
                date: "10 march 2015 12:00:00",
                format: "on"
            },      
            function() {
                // callback function
        });
    </script>
    
</body>
</html>