<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="images/favicon.ico">
	
	<title>Medialoot Bootstrap 4 Dashboard Template</title>

    <!-- Bootstrap core CSS -->
    <?php echo Html::style('css/bootstrap.min.css'); ?>


    <!--Fonts-->
    <?php echo Html::style('https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i'); ?>

    
    <!-- Icons -->
    <?php echo Html::style('css/font-awesome.css'); ?>

    
    <!-- Custom styles for this template -->
    <?php echo Html::style('css/style.css'); ?>

    <?php echo HTML::style('css/estilos.css'); ?>

    
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Brand.name</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="../index"><em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo e(URL::get('crearAdo')); ?>"><em class="fa fa-calendar-o"></em> Crear ADO</a></li>
					<li class="nav-item"><a class="nav-link" href="../informes"><em class="fa fa-hand-o-up"></em>Buscar ADO</a></li>
					<li class="nav-item"><a class="nav-link" href="../buscarAdo"><em class="fa fa-clone"></em>Informes</a></li>
					<li class="nav-item"><a class="nav-link" href="../graficos"><em class="fa fa-bar-chart"></em> Gráficos</a></li>
				</ul>
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Menu Administrador</a></h1>

				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-calendar-o"></em> Dar Alta Usuario</a></li>
					<li class="nav-item"><a class="nav-link" href="elements.html"><em class="fa fa-hand-o-up"></em>Dar Baja usuario</a></li>
				</ul>

				<
				<a class="logout-button dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                   <em class="fa fa-power-off mr-1"></em>  <?php echo e(__('Cerrar Sesión')); ?>

                 </a>
			</nav>
			
			<main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Dashboard</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						
						<div class="username mt-1">

							<h4 class="mb-1"><?php echo e(Auth::user()->name); ?></h4>
							
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
						     <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <em class="fa fa-power-off mr-1"></em>  <?php echo e(__('Cerrar Sesión')); ?>

                                        	
                              </a>
                              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                              </form>
						</div>
					</div>
					
					<div class="clear"></div>
				</header>

				<?php echo $__env->yieldContent('content'); ?>

			</main>	
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(asset ('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('js/bootstrap.min.js')); ?>"></script>
    
	  </body>
</html>
