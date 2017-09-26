
<style>
    #foto{
         border-radius: 15%;
    }
    #william{
        border: 0px solid black;
         
    }
</style> 
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">PROFESORES DE <?php echo strtoupper($nombreSubtemas); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->
<section id="blog" class="padding-top">
    <div class="container">
        <div class="row">
            <?php foreach ($profesores as $item_profesores) { ?>
            <div class="col-xs-6 col-sm-3  portfolio-item branded logos">
                <div class="row">
                    <div class="col-md-9 col-sm-9 blog-padding-right">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="blogdetails.html"><img id="foto" src="<?php echo base_url('public/plantillaUsuario/images/infoProfesores/'.$item_profesores['foto']);?>"  class="img-responsive" alt="" ></a>
                                <div class="post-overlay">
                                    <span ><a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/detalleProfe/'.$item_profesores['ID']);?>  "><small>Detalles</small></span>

                                </div>
                            </div>
                            <div class="post-content overflow">
                                <h2 class="post-title bold"><a href="blogdetails.html"><?php echo $item_profesores['Nombre'] ?></a></h2>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="<?php echo site_url('ControladorUsuario/controladorPrincipal/detalleProfe/'.$item_profesores['ID']);?> " class="fa fa-tag"></i>Ver detalles</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><?php echo $item_profesores['tarifa'] ?></a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>Calificación</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--/#blog-->

</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>   
</body>
</html>



