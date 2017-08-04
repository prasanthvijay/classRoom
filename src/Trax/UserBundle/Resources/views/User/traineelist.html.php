<?php 
	//$view->extend('::header.html.php'); 
			$view->extend('::headernew.html.php'); 

?>
<input type="hidden" name="customerId" id="customerId" value="<?php echo $customerId; ?>">







	<!-- BEGIN BASE-->
	<div id="base">
		<!-- BEGIN CONTENT-->
		<div id="content">
				<section>
		<div class="section-header">
				<ol class="breadcrumb">
									<li class="active">Trainee List</li>
						</ol>

		</div>
		<div class="section-body">
			<div class="card">

				<!-- BEGIN SEARCH HEADER -->
				<div class="card-head style-primary">
					<div class="tools pull-left">
						<form class="navbar-search" role="search">
							<div class="form-group">
								<input class="form-control" name="contactSearch" placeholder="Enter your keyword" type="text">
							</div>
							<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
						</form>
					</div>
											<div class="tools">
							<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('trainer') ?>"><i class="fa fa-plus"></i></a>
						</div>
									</div><!--end .card-head -->
				<!-- END SEARCH HEADER -->

				<!-- BEGIN SEARCH RESULTS -->
				<div class="card-body">
					<div class="row">

						<!-- BEGIN SEARCH NAV -->
						<div class="col-sm-4 col-md-3 col-lg-2">
							<ul class="nav nav-pills nav-stacked">
								<li><small>CATEGORIES</small></li>
									<li class="active"><a href="">All Trainee's <small class="pull-right text-bold opacity-75"><?php echo count($Employee); ?></small></a></li>
								<?php for($i=0;$i<count($DepartmentList);$i++){ ?>  
<li class=""><a href=""><?php echo $DepartmentList[$i]['department']; ?><small class="pull-right text-bold opacity-75"></small></a></li>
	
								<?php } ?>
								
								<li class="hidden-xs"><small>LAST VIEWED</small></li>
								
								
							</ul>
						</div><!--end .col -->
						<!-- END SEARCH NAV -->

						<div class="col-sm-8 col-md-9 col-lg-10">
							
								<!-- BEGIN SEARCH RESULTS LIST -->
								<div class="margin-bottom-xxl">
									<span class="text-light text-lg">Trainee </span>
									<div class="btn-group btn-group-sm pull-right">
										<button type="button" class="btn btn-default-light dropdown-toggle" data-toggle="dropdown">
											<span class="glyphicon glyphicon-arrow-down"></span> Sort
										</button>
										<ul class="dropdown-menu dropdown-menu-right animation-dock" role="menu">
											<li><a href="#">First name</a></li>
											<li><a href="#">Last name</a></li>
											<li><a href="#">Email address</a></li>
										</ul>
									</div>
								</div><!--end .margin-bottom-xxl -->
								<div class="list-results">
<?php 
 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$link= explode( '/', $actual_link );
 $link1=$link[0]."/".$link[1]."/".$link[2]."/".$link[3]."/".$link[4];

for($i=0;$i<count($Employee);$i++)
	{ 

?>
	
									<div class="col-xs-12 col-lg-6 hbox-xs">
										<div class="hbox-column width-2">
											<img class="img-circle img-responsive pull-left" src="<?php echo $link1.'/'.$Employee[$i]['filename']; ?>" alt="">
										</div><!--end .hbox-column -->
										<div class="hbox-column v-top">
											<div class="clearfix">
												<div class="col-lg-12 margin-bottom-lg">
													<a class="text-lg text-medium" href="#"><h3><?php echo $Employee[$i]['employeename']; ?></h3></a>
												</div>
											</div>
											<div class="clearfix opacity-75">
												<div class="col-md-5">
													<span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;<?php echo $Employee[$i]['mobileno']; ?>
												</div>
												<div class="col-md-7">
													<span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;<?php echo $Employee[$i]['username']; ?>
												</div>
											</div>
											<div class="clearfix">
												<div class="col-lg-12">
													<span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;<?php echo $Employee[$i]['address']; ?></span>
												</div>
											</div>
											<div class="stick-top-right small-padding">
												<a  href="javascript:void(0)" onclick="deleteFunction(<?php echo $Employee[$i]['userid']; ?>)"><i class=" fa fa-trash-o  fa-fw text-success" data-toggle="tooltip" data-placement="left" data-original-title="Delete"></i></a>
											</div>
										</div><!--end .hbox-column -->


									</div><!--end .hbox-xs -->
	<?php } ?>
								</div><!--end .list-results -->
								<!-- BEGIN SEARCH RESULTS LIST -->

								<!-- BEGIN SEARCH RESULTS PAGING -->
								<div class="text-center">
									<ul class="pagination">
										<li class="disabled"><a href="#">«</a></li>
										<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">»</a></li>
									</ul>
								</div><!--end .text-center -->
								<!-- BEGIN SEARCH RESULTS PAGING -->

													</div><!--end .col -->
					</div><!--end .row -->
				</div><!--end .card-body -->
				<!-- END SEARCH RESULTS -->

			</div><!--end .card -->
		</div><!--end .section-body -->
	</section>

		</div><!--end #content-->		
		<!-- END CONTENT -->
<script>
function deleteFunction(deleteId){
	var type='Employee';

	swal({
	title: "Are you sure?",
	text: "You will not be able to recover this imaginary file!",
	type: "warning",
	showCancelButton: true,
	confirmButtonColor: "#DD6B55",
	confirmButtonText: "Yes, delete it!",
	closeOnConfirm: false
	},
	function(){
	$.get( "manage/adminMaster?master="+type,{ deleteId : deleteId},function(data) {
	})
	swal("Deleted!", "Your imaginary file has been deleted.", "success");
	        window.location.reload();
	});


}
</script>
