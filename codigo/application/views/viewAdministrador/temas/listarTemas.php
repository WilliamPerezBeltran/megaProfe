
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Listar temas</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            
            
              <div class="col-xs-6 col-md-4" class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>temas</th>    
                  <th></th>    
                  <th></th>    
                </tr>  
                <?php foreach ($temas as $item_temas){ ?>
                <tr>
                  <td><?php echo $item_temas['ID']; ?></td>
                   <td><?php echo $item_temas['Nombre']; ?></td>  
                   <td><a  href="<?php echo site_url('controladorAdministrador/controladorTemas/eliminarTemas/').$item_temas['ID'] ;?>"><button type="button" class="btn  btn-danger">eliminar</button></a></td>  
                   <td><a href="http://www.w3schools.com"><button type="button" class="btn  btn-warning">editar</button></a></td>  
                     
                   
                </tr>
                <?php } ?>
              </table>
            </div>
            
            
            
            
            
            
            
            
            
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

  </section>
    <!-- /.content -->
  </div>

  