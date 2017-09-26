
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('public/plantillaAdmin/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>MegaProfe</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Temas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('controladorAdministrador/controladorTemas/listarTemas');?>"><i class="fa fa-circle-o"></i> listar</a></li>
            <li><a href="<?php echo site_url('controladorAdministrador/controladorTemas/crearTemas');?>"><i class="fa fa-circle-o"></i> Crear</a></li>
            <li><a href="<?php echo site_url('controladorAdministrador/controladorTemas/editarTemas');?>"><i class="fa fa-circle-o"></i> Editar</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Estadisticas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo site_url('controladorAdministrador/controladorEstadisticas/estadisticas');?>"><i class="fa fa-circle-o"></i> estadistica 1</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index2.html');?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"> 
           <i class="fa fa-dashboard"></i> <span>Profesores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('public/plantillaAdmin/index.html');?>"><i class="fa fa-circle-o"></i> Listar</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index.html');?>"><i class="fa fa-circle-o"></i> Eliminar</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Estudiantes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('public/plantillaAdmin/index.html');?>"><i class="fa fa-circle-o"></i> Listar</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index2.html');?>"><i class="fa fa-circle-o"></i> Eliminar</a></li>
          </ul>
        </li>

        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Subtemas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('public/plantillaAdmin/index.html');?>"><i class="fa fa-circle-o"></i> listar</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index2.html');?>"><i class="fa fa-circle-o"></i> Eliminar</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index.html');?>"><i class="fa fa-circle-o"></i> Editar</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index2.html');?>"><i class="fa fa-circle-o"></i> Crear</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Horarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('public/plantillaAdmin/index.html');?>"><i class="fa fa-circle-o"></i> listar</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index2.html');?>"><i class="fa fa-circle-o"></i> Eliminar</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index.html');?>"><i class="fa fa-circle-o"></i> Editar</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index2.html');?>"><i class="fa fa-circle-o"></i> Crear</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Clases</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('public/plantillaAdmin/index.html');?>"><i class="fa fa-circle-o"></i> listar</a></li>
            <li><a href="<?php echo base_url('public/plantillaAdmin/index2.html');?>"><i class="fa fa-circle-o"></i> Eliminar</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Login</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('controladorAdministrador/controladorLogin');?>"><i class="fa fa-circle-o"></i> Login</a></li>
          </ul>
        </li>


        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
