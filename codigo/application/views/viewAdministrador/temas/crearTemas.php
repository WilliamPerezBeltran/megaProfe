
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear temas</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
             <?php echo validation_errors();?> 
            <form  method="POST" role="form">
              <div  class="form-group  <?php echo(form_error('tema')==null)?'': 'has-error';  ?>">
                  <label>Tema</label>
                  <input name="tema" type="text" class="form-control" placeholder="Enter ..." value="">
                  <?php echo '<span class="help-block">'.form_error('tema').'</span>';?>
              </div>
                <button type="submit" class="btn  btn-primary">enviar</button>
            </form>
            
          
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

  