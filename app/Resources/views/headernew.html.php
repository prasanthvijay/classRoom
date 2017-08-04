
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Michelin</title>
		
		<!-- BEGIN META -->
		<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->


<link href="<?php echo $view['assets']->getUrl('admin/assets/css1/bootstrap.css') ?>" rel="stylesheet" type="text/css">

<link href="<?php echo $view['assets']->getUrl('admin/assets/css1/materialadmin.css') ?>" rel="stylesheet" type="text/css">

<link href="<?php echo $view['assets']->getUrl('admin/assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" type="text/css"  media="all">

<link href="<?php echo $view['assets']->getUrl('admin/assets/css1/material-design-iconic-font.css') ?>" rel="stylesheet" type="text/css">

<link href="<?php echo $view['assets']->getUrl('admin/assets/css1/rickshaw.css') ?>" rel="stylesheet" type="text/css">

	<link href="<?php echo $view['assets']->getUrl('admin/assets/css1/morris.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo $view['assets']->getUrl('admin/bootstrap/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <link href="<?php echo $view['assets']->getUrl('admin/bootstrap/responsive.bootstrap4.min.css') ?>" rel="stylesheet">	
	        <link href="<?php echo $view['assets']->getUrl('admin/assets/jquery.auto-complete.css') ?>" rel="stylesheet" type="text/css">
				


        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/select2.css') ?>" rel="stylesheet" type="text/css">

        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/dropzone.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap-slider.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">


    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('admin/datepicker/bootstrap-datetimepicker.css') ?>">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/jquery.auto-complete.css') ?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('admin/assets/css/sweetalert.css') ?>">
	<body class="menubar-hoverable header-fixed">
		<!-- BEGIN HEADER-->
	<header id="header">


<div class="headerbar">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="headerbar-left">
		<ul class="header-nav header-nav-options">
			<li class="header-nav-brand">
				<div class="brand-holder">
					<a href="javascript:void(0);">
						<span class="text-lg text-bold text-primary">Michelin</span>
					</a>
				</div>
			</li>
			<li>
				<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
					<i class="fa fa-bars"></i>
				</a>
			</li>
		</ul>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="headerbar-right">
		
		<ul class="header-nav header-nav-profile">
			<li class="dropdown">
				<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
					<img src="one_files/avatar1.jpg" alt="">
					<span class="profile-info">
						<?php echo $_SESSION['employeename']; ?>
						<small>	<?php echo $_SESSION['employeetype']; ?></small>
					</span>
				</a>
				<ul class="dropdown-menu animation-dock">
					<li class="dropdown-header">Config</li>
					
					<li class="divider"></li>
					<li><a href="javascript:void(0);"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
					<li><a href="<?php echo $view['assets']->getUrl('logout') ?>"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
				</ul><!--end .dropdown-menu -->
			</li><!--end .dropdown -->
		</ul><!--end .header-nav-profile -->
		<ul class="header-nav header-nav-toggle">
			<li>
				<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
					<i class="fa fa-ellipsis-v"></i>
				</a>
			</li>
		</ul><!--end .header-nav-toggle -->
	</div><!--end #header-navbar-collapse -->
</div>
			</header>
	<!-- END HEADER-->
<!-- BEGIN JAVASCRIPT -->
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/jquery-1.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/jquery-migrate-1.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/bootstrap.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/spin.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/jquery_004.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/moment.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/ec2c8835c9f9fbb7b8cd36464b491e73.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/jquery_002.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/jquery_003.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/jquery.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/43ef607ee92d94826432d1d6f09372e1.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/rickshaw.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/63d0445130d69b2868a8d28c93309746.js') ?>"></script>
		<script src="<?php echo $view['assets']->getUrl('admin/assets/js1/Demo.js') ?>"></script>


<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/dataTables.bootstrap4.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/dataTables.responsive.min.js') ?>" type="text/javascript"></script>



	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('admin/assets/js/cleanzone.js') ?>"></script>

	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/dropzone.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/select2.js') ?>" type="text/javascript"></script>



	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/daterangepicker.js') ?>" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('admin/assets/js/bootstrap-switch.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/moment.js') ?>" type="text/javascript"></script>

	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/sweetalert-dev.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/datepicker/bootstrap-datetimepicker.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/jquery.auto-complete.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		//initialize the javascript
		App.init();
		App.formElements();
	});
    </script>
<script type="text/javascript">
	$(document).ready(function() {

	$('#example').DataTable();

	});

    </script>

<?php $view['slots']->output('_content') ?>
		<!-- BEGIN MENUBAR-->
		<div id="menubar" class="menubar-inverse  animate">
			<div class="menubar-fixed-panel">
				<div>
					<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
						<i class="fa fa-bars"></i>
					</a>
				</div>
				<div class="expanded">
					<a href="javascript:void(0);">
						<span class="text-lg text-bold text-primary "></span>
					</a>
				</div>
			</div>
			<div style="height: 557px;" class="nano has-scrollbar"><div style="right: -15px;" tabindex="0" class="nano-content"><div style="padding-bottom: 33px;" class="menubar-scroll-panel">
				<!-- BEGIN MAIN MENU -->
				



<ul id="main-menu" class="gui-controls">
	<!-- BEGIN Module -->

	<?php if($_SESSION['employeetype']=='Employee'){ ?>  	
	<li class="active expanding">
		<a href="<?php echo $view['assets']->getUrl('portlet') ?>" class="active">
			<div class="gui-icon"><i class="fa fa-laptop"></i></div>
			<span class="title">Module List</span>
		</a>
	</li>

	<!--<li class="">
		<a href="<?php echo $view['assets']->getUrl('trainingCalendar') ?>" class="">
			<div class="gui-icon"><i class="fa fa-calendar"></i></div>
			<span class="title">Training Calendar</span>
		</a>
	</li>-->
	<?php } if($_SESSION['employeetype']=='Trainer'){  ?>
	<!--<li class="">
		<a href="javascript:void(0);" class="">
			<div class="gui-icon"><i class="fa fa-calendar"></i></div>
			<span class="title">Training Calendar</span>
		</a>
	</li>-->
		<li class="gui-folder">
		<a>
		<div class="gui-icon"><i class="fa fa-user" aria-hidden="true"></i></div>

		<span class="title">Trainee Master</span>
		</a>

		<ul style="">
			<li><a href="<?php echo $view['assets']->getUrl('modulemaster') ?>?type=Trainee"><span class="title">Add Trainee</span></a></li>

			<li><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=TraineeList"><span class="title">Trainee List</span></a></li>

			<!--<li><a href="<?php echo $view['assets']->getUrl('maptraniee') ?>"><span class="title">Map Trainee</span></a></li>
			<li><a href="<?php echo $view['assets']->getUrl('trainingbatch') ?>"><span class="title">Add Training Batch</span></a></li>
			<li><a href="<?php echo $view['assets']->getUrl('trainingprogram') ?>"><span class="title">Add Training Program</span></a></li>
			<li><a href="<?php echo $view['assets']->getUrl('mappedtranieelist') ?>"><span class="title">Add Training Schedule</span></a></li>-->

		</ul>
		</li>

		<li class="gui-folder">
		<a>
		<div class="gui-icon"><i class="fa fa-folder-open fa-fw" aria-hidden="true"></i></div>

		<span class="title">Module Master</span>
		</a>

		<ul style="">
		<li><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=Category"><span class="title">Category</span></a></li>
		<li><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=SubCategory"><span class="title">Sub Category list</span></a></li>
		<li><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=ModuleList"><span class="title">Upload Module List</span></a></li>
		

		</ul>
		</li><!--end /menu-li -->
		<li class="gui-folder">
		<a>
		<div class="gui-icon"><i class="fa fa-file" aria-hidden="true"></i></div>

		<span class="title">Map Module</span>
		</a>

		<ul style="">
			<li><a href="<?php echo $view['assets']->getUrl('mapmoduletouser') ?>"><span class="title">Map Module to User</span></a></li>
		<li><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=MappedModuletoUserList"><span class="title">Mapped Module List</span></a></li>
			<!--<li><a href="<?php echo $view['assets']->getUrl('maptraniee') ?>"><span class="title">Map Trainee</span></a></li>
			<li><a href="<?php echo $view['assets']->getUrl('trainingbatch') ?>"><span class="title">Add Training Batch</span></a></li>
			<li><a href="<?php echo $view['assets']->getUrl('trainingprogram') ?>"><span class="title">Add Training Program</span></a></li>
			<li><a href="<?php echo $view['assets']->getUrl('mappedtranieelist') ?>"><span class="title">Add Training Schedule</span></a></li>-->

		</ul>
		</li>
	<?php } ?>

	<!--end /menu-li -->
	<!-- END Module -->
	
	<!-- BEGIN EMAIL 
	<li class="gui-folder">
		<a>
			<div class="gui-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>

			<span class="title">Email</span>
		</a>

		<ul style="">
			<li><a href="/inbox"><span class="title">Inbox</span></a></li>

			<li><a href="/compose"><span class="title">Compose</span></a></li>

			<li><a href="/reply"><span class="title">Reply</span></a></li>

			<li><a href="/message"><span class="title">View message</span></a></li>

		</ul>
	</li><!--end /menu-li -->
	<!-- END EMAIL -->
	
	
	
	
	
	
	<!-- BEGIN LEVELS 
	<li class="gui-folder">
		<a>
			<div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
			<span class="title">Menu levels demo</span>
		</a>

		<ul style="">
			<li><a href="#"><span class="title">Item 1</span></a></li>
			<li><a href="javascript:void(0);"><span class="title">Item 1</span></a></li>
			<li class="gui-folder">
				<a href="javascript:void(0);">
					<span class="title">Open level 2</span>
				</a>

				<ul>
					<li><a href="#"><span class="title">Item 2</span></a></li>
					<li class="gui-folder">
						<a href="javascript:void(0);">
							<span class="title">Open level 3</span>
						</a>

						<ul>
							<li><a href="javascript:void(0);"><span class="title">Item 3</span></a></li>
							<li><a href="javascript:void(0);"><span class="title">Item 3</span></a></li>
							<li class="gui-folder">
								<a href="javascript:void(0);">
									<span class="title">Open level 4</span>
								</a>

								<ul>
									<li><a href="javascript:void(0);"><span class="title">Item 4</span></a></li>
									<li class="gui-folder">
										<a href="javascript:void(0);">
											<span class="title">Open level 5</span>
										</a>

										<ul>
											<li><a href="javascript:void(0);"><span class="title">Item 5</span></a></li>
											<li><a href="javascript:void(0);"><span class="title">Item 5</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<!-- END LEVELS -->
	
</ul><!--end .main-menu -->
				<!-- END MAIN MENU -->

				<div class="menubar-foot-panel">
					<small class="no-linebreak hidden-folded">
						<span class="opacity-75">Copyright © 2017</span> <strong>dotCue</strong>
					</small>
				</div>


			</div>
</div>
		
<div style="display: none;" class="nano-pane"><div style="height: 542px; transform: translate(0px, 0px);" class="nano-slider"></div>

</div>
</div>

<!--end .menubar-scroll-panel-->
		</div><!--end #menubar-->

		<!-- END MENUBAR -->

		<!-- BEGIN OFFCANVAS RIGHT -->
	
	</div><!--end #base-->	
	<!-- END BASE -->


	



	
	<!-- END JAVASCRIPT -->

	
	
	
<div id="device-breakpoints"><div class="device-xs visible-xs" data-breakpoint="xs"></div><div class="device-sm visible-sm" data-breakpoint="sm"></div><div class="device-md visible-md" data-breakpoint="md"></div><div class="device-lg visible-lg" data-breakpoint="lg"></div></div><div title="" data-original-title="" style="left: 557px; top: 360px; position: absolute;"></div><div title="" data-original-title="" style="left: 554px; top: 354px; position: absolute;"></div><div title="" data-original-title="" style="left: 494px; top: 368px; position: absolute;"></div><div title="" data-original-title="" style="left: 488px; top: 360px; position: absolute;"></div><div title="" data-original-title="" style="left: 470px; top: 367px; position: absolute;"></div><div title="" data-original-title="" style="left: 455px; top: 375px; position: absolute;"></div><div title="" data-original-title="" style="left: 440px; top: 385px; position: absolute;"></div><div title="" data-original-title="" style="left: 426px; top: 395px; position: absolute;"></div><div title="" data-original-title="" style="left: 370px; top: 405px; position: absolute;"></div><div title="" data-original-title="" style="left: 364px; top: 414px; position: absolute;"></div><div title="" data-original-title="" style="left: 358px; top: 422px; position: absolute;"></div><div title="" data-original-title="" style="left: 381px; top: 386px; position: absolute;"></div></body></html>
