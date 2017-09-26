

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>MegaProfe</h1>
                        <p>Encuentra los profesores de música e idiomas a tu gusto a tu medida  en el confort de tu hogar.</p>
                        <?php foreach ($temas as $info_temas){?>
                        <a href="<?php echo site_url('controladorUsuario/controladorPrincipal/listarSubtemas/'.$info_temas['ID']);?>" class="btn btn-common"><?php echo $info_temas['Nombre'] ?></a>
                        <?php }?>
                    </div>
                    <img src="<?php echo base_url('public/plantillaUsuario/images/home/slider/hill.png'); ?>" class="slider-hill" alt="slider image">
                    <img src="<?php echo base_url('public/plantillaUsuario/images/home/slider/house.png'); ?>" class="slider-house" alt="slider image">
                    <img src="<?php echo base_url('public/plantillaUsuario/images/home/slider/sun.png'); ?>" class="slider-sun" alt="slider image">
                    <img src="<?php echo base_url('public/plantillaUsuario/images/home/slider/birds1.png'); ?>" class="slider-birds1" alt="slider image">
                    <img src="<?php echo base_url('public/plantillaUsuario/images/home/slider/birds2.png'); ?>" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="<?php echo base_url('public/plantillaUsuario/images/home/icon1.png'); ?>" alt="">
                        </div>
                        <h2> Cuentanos que quieres aprender</h2>
                        <p>Busca que instrumento o que idiomas quieres aprender haciendo clik  en la parte de arriba en el boton música o en idiomas.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="<?php echo base_url('public/plantillaUsuario/images/home/icon2.png'); ?>" alt="">
                        </div>
                        <h2>Escoge a megaprofe </h2>
                        <p>EScoge tu instrumento o tu idiomas favorito para inciar a prenderlo.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="<?php echo base_url('public/plantillaUsuario/images/home/icon3.png'); ?>" alt="">
                        </div>
                        <h2>Se feliz y aprende</h2>
                        <p>Aprende diviertete con megaprofe y sus profesores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

   
    <!--/#action-->

   
     <!--/#features-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="<?php echo base_url('public/plantillaUsuario/images/home/clients.png'); ?>" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url('public/plantillaUsuario/images/home/client1.png'); ?>" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url('public/plantillaUsuario/images/home/client2.png'); ?>" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url('public/plantillaUsuario/images/home/client3.png'); ?>" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url('public/plantillaUsuario/images/home/client4.png'); ?>" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url('public/plantillaUsuario/images/home/client5.png'); ?>" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url('public/plantillaUsuario/images/home/client6.png'); ?>" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->

  
