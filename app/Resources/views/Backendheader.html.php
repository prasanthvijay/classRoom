
<!DOCTYPE html>
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?php if($_SESSION['ExeType']==1){ echo "TraxPDS"; }else { echo $_SESSION['customername']; } ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="icon" href="<?php echo $view['assets']->getUrl('image/icon.png') ?>">
               <link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/style.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/select2.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/dropzone.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap-slider.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $view['assets']->getUrl('admin/assets/css/css_002.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $view['assets']->getUrl('admin/assets/css/css.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $view['assets']->getUrl('admin/assets/css/css_003.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('admin/assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('admin/assets/css/nanoscroller.css') ?>">
    <link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap-switch.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('admin/datatables/dataTables.bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('admin/datepicker/bootstrap-datetimepicker.css') ?>">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/jquery.auto-complete.css') ?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('admin/assets/css/sweetalert.css') ?>">
        <link href="<?php echo $view['assets']->getUrl('admin/assets/css/blue.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $view['assets']->getUrl('admin/assets/css/style.css') ?>" rel="stylesheet">
 <link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap-duallistbox.css') ?>" rel="stylesheet">

    <link href="<?php echo $view['assets']->getUrl('admin/bootstrap/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <link href="<?php echo $view['assets']->getUrl('admin/bootstrap/responsive.bootstrap4.min.css') ?>" rel="stylesheet">
<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $splitUrl=explode( '/', $actual_link );
	$status=explode('=',$splitUrl[6]);
?>


<body>
<!----------Nav Start-------------->
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="fa fa-gear"></span></button><a href="#" class="navbar-brand"><span><?php if($_SESSION['ExeType']==1){ echo "TraxPDS"; }else { echo $_SESSION['customername']; } ?></span></a></div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">

			
                    <li class="dropdown <?php if($status[1]=="Customer"||$status[1]=="Employee" || $status[1]=="Department" ||$status[1]=="Location") echo "active" ?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Master<b class="caret"></b></a>
                        <ul class="dropdown-menu">
			<?php if($_SESSION['ExeType']==1){?>	
                            <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=Customer">Customer</a></li>
			<?php } ?>
                            <li><a href="<?php echo $view['assets']->getUrl('manage/addEmployeeMaster') ?>">Employee</a></li>
                            <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=Department">Department</a></li>
                            <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=Location">Location</a></li>
                             <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=BasicMaster">Basic Master</a></li>
                        </ul>
			</li>	

                   <!--  <li class="dropdown <?php if($status[1]=="TrainingBatch"||$status[1]=="TrainingProgram" || $status[1]=="TrainingSchedule") echo "active" ?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Training Master <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=TrainingBatch">Training Batch</a></li>
                            <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=TrainingProgram">Training Program</a></li>
                            <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=TrainingSchedule">Training Schedule</a></li>

                       
                        </ul>
			</li>-->
		 <li class="dropdown <?php if($status[1]=="Module"||$status[1]=="ModuleCategory" || $status[1]=="MapModule") echo "active" ?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Module Master <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=ModuleCategory">Module Category</a></li>
                            <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=ModuleSubCategory">Module Sub Category</a></li>
                            <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=Module">Upload Module</a></li>
                    		 <li><a href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=Viewfilehistory">View History</a></li>
                        </ul>
			</li>
 			<li class=""><a href="<?php echo $view['assets']->getUrl('manage/MapModule') ?>">Map Module</a></li>	
                 </ul>

                <ul class="nav navbar-nav navbar-right user-nav">
                    <li class="dropdown profile_menu">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Extra</span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Messages</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo $view['assets']->getUrl('manage/logout') ?>">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
              
            </div>
        </div>
    </div>
	
<!----------Nav end-------------->
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('admin/assets/js/jquery_002.js') ?>"></script>
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('admin/assets/js/jquery_003.js') ?>"></script>
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('admin/assets/js/cleanzone.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/bootstrap.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/dropzone.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/select2.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/jquery.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/jquery-ui.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/bootstrap-switch.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/icheck.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/bootstrap-slider.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/daterangepicker.js') ?>" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('admin/assets/js/bootstrap-switch.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/datepicker/bootstrap-datetimepicker.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/moment.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/sweetalert-dev.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/js/jquery.bootstrap-duallistbox.js') ?>"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/dataTables.bootstrap4.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/dataTables.responsive.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('admin/assets/js/daterangepicker.js') ?>" type="text/javascript"></script>
	<script src="<?php echo $view['assets']->getUrl('admin/assets/jquery.auto-complete.js') ?>" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		//initialize the javascript
		App.init();
		App.formElements();
		$('#example').DataTable();

	});
    </script>
<?php $view['slots']->output('_content') ?>

   
