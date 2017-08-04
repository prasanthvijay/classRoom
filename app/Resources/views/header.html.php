

<?php include '/var/www/html/MichelinClassroom/web/user/db_class.php'; 
$db=new DB();

$db->query="SELECT * FROM `tbl_User` WHERE `userid`='".$_SESSION['userid']."' ";
	$db->runQuery();
	$userlist = $db->returnArrays();
$db->query="SELECT * FROM `tbl_employee` WHERE `userId`='".$userlist[0]['userid']."' ";
	$db->runQuery();
	$employeelist = $db->returnArrays();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Michelin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo $view['assets']->getUrl('admin/assets/css/bootstrap.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('admin/datatables/dataTables.bootstrap.min.css') ?>">
<link href="<?php echo $view['assets']->getUrl('admin/bootstrap/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
<link href="<?php echo $view['assets']->getUrl('admin/bootstrap/responsive.bootstrap4.min.css') ?>" rel="stylesheet">
<link href="<?php echo $view['assets']->getUrl('headerFiles/style.css') ?>" rel="stylesheet" type="text/css"  media="all">
<script src="<?php echo $view['assets']->getUrl('headerFiles/jquery-2.1.1.min.js') ?>"></script>
<link href="<?php echo $view['assets']->getUrl('headerFiles/font-awesome.css') ?>" rel="stylesheet" type="text/css"  media="all">
<link href="<?php echo $view['assets']->getUrl('headerFiles/fontawesome-webfont.woff2') ?>" rel="stylesheet" type="text/css"  media="all">
<link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('admin/datepicker/bootstrap-datetimepicker.css') ?>">
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<style>
#main
{
 margin-top: 5px;
}
</style>
</head>

<body>	

<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
	<div class="header-main">
	<div class="header-left">
	<div class="logo-name" id="imgdiv">
	<a href="#"> 
	<img id="logo" class="img" src="images/logo1.png" alt="Logo"/>
	</a> 								
	</div>

	<div class="clearfix"> </div>
	</div>
	<div class="header-right">
	<div class="profile_details_left"><!--notifications of menu start -->
	<ul class="nofitications-dropdown">
	<li class="dropdown head-dpdn">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
	<ul class="dropdown-menu">
	<li>
	<div class="notification_header">
	<h3>You have 3 new messages</h3>
	</div>
	</li>
	<li><a href="#">
	<div class="user_img"><img src="images/p4.png" alt=""></div>
	<div class="notification_desc">
	<p>Lorem ipsum dolor</p>
	<p><span>1 hour ago</span></p>
	</div>
	<div class="clearfix"></div>	
	</a></li>
	<li class="odd"><a href="#">
	<div class="user_img"><img src="images/p2.png" alt=""></div>
	<div class="notification_desc">
	<p>Lorem ipsum dolor </p>
	<p><span>1 hour ago</span></p>
	</div>
	<div class="clearfix"></div>	
	</a></li>
	<li><a href="#">
	<div class="user_img"><img src="images/p3.png" alt=""></div>
	<div class="notification_desc">
	<p>Lorem ipsum dolor</p>
	<p><span>1 hour ago</span></p>
	</div>
	<div class="clearfix"></div>	
	</a></li>
	<li>
	<div class="notification_bottom">
	<a href="#">See all messages</a>
	</div> 
	</li>
	</ul>
	</li>
	<li class="dropdown head-dpdn">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
	<ul class="dropdown-menu">
	<li>
	<div class="notification_header">
	<h3>You have 3 new notification</h3>
	</div>
	</li>
	<li><a href="#">
	<div class="user_img"><img src="images/p5.png" alt=""></div>
	<div class="notification_desc">
	<p>Lorem ipsum dolor</p>
	<p><span>1 hour ago</span></p>
	</div>
	<div class="clearfix"></div>	
	</a></li>
	<li class="odd"><a href="#">
	<div class="user_img"><img src="images/p6.png" alt=""></div>
	<div class="notification_desc">
	<p>Lorem ipsum dolor</p>
	<p><span>1 hour ago</span></p>
	</div>
	<div class="clearfix"></div>	
	</a></li>
	<li><a href="#">
	<div class="user_img"><img src="images/p7.png" alt=""></div>
	<div class="notification_desc">
	<p>Lorem ipsum dolor</p>
	<p><span>1 hour ago</span></p>
	</div>
	<div class="clearfix"></div>	
	</a></li>
	<li>
	<div class="notification_bottom">
	<a href="#">See all notifications</a>
	</div> 
	</li>
	</ul>
	</li>	
	<li class="dropdown head-dpdn">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
	<ul class="dropdown-menu">
	<li>
	<div class="notification_header">
	<h3>You have 8 pending task</h3>
	</div>
	</li>
	<li><a href="#">
	<div class="task-info">
	<span class="task-desc">Database update</span><span class="percentage">40%</span>
	<div class="clearfix"></div>	
	</div>
	<div class="progress progress-striped active">
	<div class="bar yellow" style="width:40%;"></div>
	</div>
	</a></li>
	<li><a href="#">
	<div class="task-info">
	<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
	<div class="clearfix"></div>	
	</div>
	<div class="progress progress-striped active">
	<div class="bar green" style="width:90%;"></div>
	</div>
	</a></li>
	<li><a href="#">
	<div class="task-info">
	<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
	<div class="clearfix"></div>	
	</div>
	<div class="progress progress-striped active">
	<div class="bar red" style="width: 33%;"></div>
	</div>
	</a></li>
	<li><a href="#">
	<div class="task-info">
	<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
	<div class="clearfix"></div>	
	</div>
	<div class="progress progress-striped active">
	<div class="bar  blue" style="width: 80%;"></div>
	</div>
	</a></li>
	<li>
	<div class="notification_bottom">
	<a href="#">See all pending tasks</a>
	</div> 
	</li>
	</ul>
	</li>	
	</ul>
	<div class="clearfix"> </div>
	</div>
	<!--notification menu end -->
	<div class="profile_details">		
	<ul>
	<li class="dropdown profile_details_drop">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
	<div class="profile_img">	
	<span class="prfil-img"><img src="images/new.png" alt=""> </span> 
	<div class="user-name">
	<p><?php echo $_SESSION['employeename']; ?></p>
	<span><?php echo $_SESSION['employeetype']; ?></span>
	</div>
	<i class="fa fa-angle-down lnr"></i>
	<i class="fa fa-angle-up lnr"></i>
	<div class="clearfix"></div>	
	</div>	
	</a>
	<ul class="dropdown-menu drp-mnu">
	<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
	<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
	<li> <a href="<?php echo $view['assets']->getUrl('logout') ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
	</ul>
	</li>
	</ul>
	</div>
	<div class="clearfix"> </div>				
	</div>
	<div class="clearfix"> </div>	
	</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<?php $view['slots']->output('_content') ?>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 TraXERP. All Rights Reserved | Design by  <a href="http://www.traxerp.com/" target="_blank">TraXERP</a> </p>
</div>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="#"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-calendar-check-o"></i><span>Training Calendar</span></span></a>
		        <!--  <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Buttons</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="typography.html">Typography</a></li>
		             <li id="menu-arquivos" ><a href="icons.html">Icons</a></li>
		          </ul>-->
		        </li>
		         <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Traniee</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         <ul>

		            <li><a href="traineelist">Traniee List</a></li>
			    <li><a href="mappedtranieelist">Mapped Traniee Mapping</a></li>		            
		          </ul>
		        </li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Modules</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         <ul>

		            <li><a href="modulemasterlist">Module List</a></li>
			    <li><a href="mappingmodulelist">Mapped  Mapping List</a></li>		            
		          </ul>
		        </li>
		        
		      
		       
		         <li><a href="#"><i class="fa fa-cog"></i><span>Settings</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="#">404</a></li>
			            <li id="menu-academico-boletim" ><a href="#">Blank</a></li>
		             </ul>
		         </li>
		         <li><a href="#"><i class="fa fa-archive"></i><span>Feedback</span></a>
		         	
		         </li>
		      </ul>
		    </div>
	 </div>

	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="<?php echo $view['assets']->getUrl('headerFiles/jquery.nicescroll.js') ?>"></script>
<script src="<?php echo $view['assets']->getUrl('headerFiles/scripts.js') ?>"></script>

<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/dataTables.bootstrap4.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/dataTables.responsive.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('admin/bootstrap/responsive.bootstrap4.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('admin/datepicker/bootstrap-datetimepicker.js') ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('admin/datepicker/bootstrap-datetimepicker.js') ?>" type="text/javascript"></script>
		<!--//scrolling js-->
<script src="<?php echo $view['assets']->getUrl('headerFiles/bootstrap.js'); ?>"> </script>
<!-- mother grid end here-->
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		//initialize the javascript
		
		$('#example').DataTable();

	});
    </script>
                      
<script>
$("#datevalue").datetimepicker({format: 'yyyy-mm-dd',
     autoclose: true
});
</script>

                      
						
