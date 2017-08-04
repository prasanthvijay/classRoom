<?php 
	//$view->extend('::header.html.php'); 
			$view->extend('::headernew.html.php'); 


?>
<div id="base">
		<!-- BEGIN CONTENT-->
		<div id="content">
				<section>
						<div class="section-header">
								<ol class="breadcrumb">
													<li class="active">Mapped Trainer List</li>
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
					</div><div class="tools">
						Map Traning Schedule	<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('maptrainingschedule') ?>"> <i class="fa fa-plus"></i> </a>
						</div>
											
				</div><!--end .card-head -->

				<!-- END SEARCH HEADER -->

				<!-- BEGIN SEARCH RESULTS -->
				<div class="card-body">
					<div class="row">

						<!-- BEGIN SEARCH NAV -->
						<div class="col-sm-4 col-md-3 col-lg-2">
							<ul class="nav nav-pills nav-stacked">

									<!--<li class="active"><a href="">Module List<small class="pull-right text-bold opacity-75"><?php echo count($ModuleCategory); ?></small></a></li>-->
								<?php for($i=0;$i<count($DepartmentList);$i++){ ?>  
<li class=""><a href=""><?php echo $DepartmentList[$i]['department']; ?><small class="pull-right text-bold opacity-75"></small></a></li>
<?php 	print_r($DepartmentList); ?>
								<?php } ?>
								
								
								
								
							</ul>
						</div><!--end .col -->
						<!-- END SEARCH NAV -->


							
								<!-- BEGIN SEARCH RESULTS LIST -->
								<div class="margin-bottom-xxl">
									
										<button type="button" class="btn btn-default-light dropdown-toggle" data-toggle="dropdown">
											<!--<span class="glyphicon glyphicon-arrow-down"></span> Sort-->
										</button>
<div class="list-results">
	<table id="example" class="table table-bordered data-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="centered-cell" data-class="expand">S.NO</th>
				<th class="centered-cell" data-class="expand">Training Batch</th>
				<th class="centered-cell" data-class="expand">Program Name</th>
				<th class="centered-cell" data-class="expand">Training Name</th>
				<th class="centered-cell" data-class="expand">Date</th>
				<th class="centered-cell" data-class="expand">Employees</th>
				<!--<th class="centered-cell" data-class="expand">Edit</th>--->
				<th class="centered-cell" data-class="expand">Delete</th>
            </tr>
        </thead>
        
        <tbody>
			<?php  for($i=0;$i<count($TrainingSchedulelist);$i++) { ?>



			<tr>
				<td class="centered-cell"><?php echo $i+1;?> </td>
				<td class="centered-cell"><?php echo $TrainingSchedulelist[$i]['batchname']; ?></td>
				<td class="centered-cell"><?php echo $TrainingSchedulelist[$i]['programname']; ?></td>
				<td class="centered-cell"><?php echo $TrainingSchedulelist[$i]['trainername']; ?></td>
				<td class="centered-cell"><?php echo date_format($TrainingSchedulelist[$i]['scheduledate'],"d/m/Y"); ?></td>
				<td class="centered-cell"><?php echo $TrainingSchedulelist[$i]['employeename']; ?></td>
				<!--<th ><a href="javascript:void(0);" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php  echo $TrainingSchedulelist[$i]['scheid']; ?>);" >Edit </a></th>-->
				<th ><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $TrainingSchedulelist[$i]['scheid']; ?>);" >Delete </a></th>

			</tr>
			<?php } ?>
		</tbody>
    </table>

								</div><!--end .margin-bottom-xxl -->
								
								<!-- BEGIN SEARCH RESULTS LIST -->

								

													</div><!--end .col -->
					</div><!--end .row -->
				</div><!--end .card-body -->
				<!-- END SEARCH RESULTS -->

			</div><!--end .card -->
		</div><!--end .section-body -->
	</section>

		</div><!--end #content-->		
		<!-- END CONTENT -->


</div>
<script>
function deleteFunction(deleteId){
	var type='TrainingSchedule';

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

	});

 location.reload(); 
}
</script>
