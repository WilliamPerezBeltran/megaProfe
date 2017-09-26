<style>
    #foto{
         border-radius: 25%;
    }
</style> 
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Información profesor</h1>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</section>

<section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <?php foreach ($infoProfe as $item_infoProfe){?>
                <div class="col-sm-3">
                    <img id="foto" src="<?php echo base_url('public/plantillaUsuario/images/infoProfesores/'.$item_infoProfe['foto']);?>" height="300" width="300" class="img-responsive" alt="">
                </div>
                
                <div class="col-sm-6 ">
                    <div class="single-price price-one">
                        <div class="table-heading">
                            <p class="plan-name">Información del profesor</p>
                        </div>
                        <ul> 
                            <li>Nombre:<br><?php echo $item_infoProfe['Nombre'];?> <span><i></i></span></li>
                            <li>Celular:<br><?php echo $item_infoProfe['Celular'];?> <span><i ></i></span> </li>
                            <li>Dirección:<br><?php echo $item_infoProfe['Direccion'];?><span><i ></i></span></li>
                            <li>Tarifa:<br>$<?php echo $item_infoProfe['tarifa'];?><span><i></i></span></li>
                            <li>Descripción:<br> <br><php echo $item_infoProfe['description'];?><span><i></i></span></li>
                            <li><a href="<?php echo base_url('public/plantillaUsuario/images/infoProfesores/'.$item_infoProfe['HojaDeVida']);?>"><button class="btn btn-primary" type="button" data-toggle="" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Hoja de vida</button></a><span><i></i></span></li>
                        </ul>
                    </div>
                </div>
                <?php }?>
            </div>    
            <!--/#accordion-container-->
            <div id="accordion-container">
                <h2 class="page-header"></h2>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Experiencia Personal
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <?php foreach ($infoExperienciaProfe as $item_infoExperienciaProfe){?>
                            <div class="panel-body" >
                                 <table class="table table-striped">
                                    <tr>
                                        <th>Empresa</th>
                                        <th>Profesión</th>
                                        <th>Ingreso</th>
                                        <th>Finalización</th>
                                    </tr>
                                    <tr>
                                        
                                        <td width="30%"><?php echo $item_infoExperienciaProfe['institucion'] ;?> </td>
                                        <td width="30%"><?php echo $item_infoExperienciaProfe['profesion'] ;?> </td>
                                        <td width="30%"><?php echo $item_infoExperienciaProfe['ingreso'] ;?> </td>
                                        <td width="30%"><?php echo $item_infoExperienciaProfe['finalizacion'] ;?> </td>
                                    </tr>

                                 </table>       
                             </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Estudios realizados
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                             <?php foreach ($infoEstudioProfe as $item_infoEstudioProfe){?>
                            <div class="panel-body" >
                                 <table class="table table-striped">
                                    <tr>
                                        <th>Institución</th>
                                        <th>Estudio</th>
                                        <th>Ingreso</th>
                                        <th>Finalizacion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        
                                        <td width="30%"><?php echo $item_infoEstudioProfe['institucion'] ;?> </td>
                                        <td width="30%"><?php echo $item_infoEstudioProfe['profesion'] ;?> </td>
                                        <td width="30%"><?php echo $item_infoEstudioProfe['ingreso'] ;?> </td>
                                        <td width="30%"><?php echo $item_infoEstudioProfe['finalizacion'] ;?> </td>
                                    </tr>

                                 </table>       
                             </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Disponibilidad Del Profesor
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div><!--/#accordion-->
            </div><!--/#accordion-container-->
            
         
            
            
          
            
            
        </div>
    </section>

