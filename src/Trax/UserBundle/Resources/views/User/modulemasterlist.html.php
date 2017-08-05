<?php 
	//$view->extend('::header.html.php'); 
$view->extend('::headernew.html.php'); 
if($type=='Category'){
?>

<div id="base">
		<!-- BEGIN CONTENT-->
		<div id="content">
				<section>
						<div class="section-header">
								<ol class="breadcrumb">
	<li class="active">Category List</li>
	</ol>

	</div>
	<div class="section-body">
	<div class="card">

	<!-- BEGIN SEARCH HEADER -->
	<div class="card-head style-primary">
	<div class="tools pull-left">
	<form class="navbar-search" role="search" action="" id="pstEditOrDeleteFrm">
	<div class="form-group">
	<input class="form-control" name="contactSearch" placeholder="Enter your keyword" type="text">


	</div>
	<button type="button" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
	</form>
	</div>
	<div class="tools">
	Add Category<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('modulemaster') ?>?type=Category"><i class="fa fa-plus"></i></a>
	</div>
	</div><!--end .card-head -->

	<!-- END SEARCH HEADER -->

	<!-- BEGIN SEARCH RESULTS -->
	<div class="card-body">
	<div class="row">

		<!-- BEGIN SEARCH RESULTS LIST -->
	<div class="margin-bottom-xxl">

	<button type="button" class="btn btn-default-light dropdown-toggle" data-toggle="dropdown">
	<!--<span class="glyphicon glyphicon-arrow-down"></span> Sort-->
	</button>
	<div class="list-results">
			<table id="example" class="table table-bordered data-table" cellspacing="0" width="100%">
			<thead>
			<tr>
			<th>S.NO</th>
			<th>Module Name</th>
			<th>Description</th>
			<th>Edit</th>
			<th>Delete</th>
			</tr>
			</thead>

				<tbody>

				<?php for($i=0;$i<count($ModuleCategory);$i++)
				{ 
				?>
				<tr>
				<td><?php echo $i+1; ?></td>
				<td><?php echo $ModuleCategory[$i]['modulecategory']; ?></td>
				<td><?php echo $ModuleCategory[$i]['description']; ?></td>
				<th><a href="<?php  echo $view['assets']->getUrl('modulemaster') ?>?type=Category&editId=<?php echo $ModuleCategory[$i]['cateid']; ?>">Edit</a></th>
				<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $ModuleCategory[$i]['cateid']; ?>,'ModuleCategory');">Delete</a></th>

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
function editFunction(id)
{
	var editId=id;

	$.get("?editId="+editId, function(data){
	});
	window.location.reload();


}

</script>

<?php }else if($type=='SubCategory'){ ?>
<div id="base">
		<!-- BEGIN CONTENT-->
		<div id="content">
				<section>
						<div class="section-header">
								<ol class="breadcrumb">
								<li class="active">Sub Category List</li>
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
							Add Sub Category<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('modulemaster') ?>?type=SubCategory"><i class="fa fa-plus"></i></a>
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
                <th>S.NO</th>
		<th> Module Category</th>
                <th>Sub Category</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php  for($i=0;$i<count($userListt);$i++)
		{ 

		



?>
            <tr>
                <td><?php echo $i+1; ?></td>

		<td> <?php echo $userListt[$i]['modulecategory']; ?></td>
                <td><?php echo $userListt[$i]['subcategory']; ?></td>
                <td><?php echo $userListt[$i]['description']; ?></td>
                <th><a href="<?php  echo $view['assets']->getUrl('modulemaster') ?>?type=SubCategory&editId=<?php echo $userListt[$i]['subcatid']; ?>">Edit</a></th>
                  
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $userListt[$i]['subcatid']; ?>,'ModuleSubCategory');">Delete</a></th>
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

<?php }else if($type=='ModuleList'){ ?>

<div id="base">
		<!-- BEGIN CONTENT-->
		<div id="content">
				<section>
						<div class="section-header">
								<ol class="breadcrumb">
													<li class="active">Module Files</li>
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
							Upload Module<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('modulemaster') ?>?type=UploadModule"><i class="fa fa-plus"></i></a>
						</div>
				</div><!--end .card-head -->

				<!-- END SEARCH HEADER -->

				<!-- BEGIN SEARCH RESULTS -->
				<div class="card-body">
					<div class="row">
		


							
								<!-- BEGIN SEARCH RESULTS LIST -->
								<div class="margin-bottom-xxl">
									
										<button type="button" class="btn btn-default-light dropdown-toggle" data-toggle="dropdown">
											<!--<span class="glyphicon glyphicon-arrow-down"></span> Sort-->
										</button>
<div class="list-results">
	<table id="example" class="table table-bordered data-table" cellspacing="0" width="100%">
       <thead>
            <tr>
                <th>S.NO</th>
                <th>Module Category</th>
		<th>Module Name</th>
                <th>Description</th>
		<th>File</th>
                <!--<th>Edit</th>-->
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php for($i=0;$i<count($modulefilelist);$i++)
		{ 
		
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $modulefilelist[$i]['modulecategory']; ?></td>
                <td><?php echo $modulefilelist[$i]['modulename']; ?></td>
                <td><?php echo $modulefilelist[$i]['description']; ?></td>
		<td><a target=_blank href="<?php if($modulefilelist[$i]['filetype']=='Story'){ $pathArray= explode("/", $modulefilelist[$i]['filepath']);  echo "../uploadfiles/".$pathArray[7]."/".$pathArray[8]."story.html"; }else{ $pathArray= explode("/", $modulefilelist[$i]['filepath']); echo "../uploadfiles/".$pathArray[7]."/".$modulefilelist[$i]['filename']; } ?>"><?php echo $modulefilelist[$i]['filename']; ?></a></td>
               	<!--<th><a href="" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php echo $modulefilelist[$i]['moduleid'];?>)">Edit</a></th>-->
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $modulefilelist[$i]['moduleid']; ?>);">Delete</a></th>
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
<?php }else if($type=='MappedModuletoUserList'){ ?>
<div id="base">
		<!-- BEGIN CONTENT-->
		<div id="content">
				<section>
						<div class="section-header">
								<ol class="breadcrumb">
													<li class="active">Mapped Trainee List</li>
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
							Map Module to Trainee<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('mapmoduletouser') ?>"><i class="fa fa-plus"></i></a>
						</div>
				</div><!--end .card-head -->

				<!-- END SEARCH HEADER -->

				<!-- BEGIN SEARCH RESULTS -->
				<div class="card-body">
				<div class="row">
					
								<!-- BEGIN SEARCH RESULTS LIST -->
								<div class="margin-bottom-xxl">
									
										<button type="button" class="btn btn-default-light dropdown-toggle" data-toggle="dropdown">
											<!--<span class="glyphicon glyphicon-arrow-down"></span> Sort-->
										</button>
<div class="list-results">
							<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Module Category</th>
                <th>Trainer</th>
		<th>Schedule Date</th>
                <th>Trainees</th>
			

            </tr>
        </thead>
        
        <tbody>

	<?php  for($i=0;$i<count($MapModuleList);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $MapModuleList[$i]['modulecategory']; ?></td>
                <td><?php echo $MapModuleList[$i]['name']; ?></td>
		 <td><a href="javascript:void(0);" data-toggle="modal" data-target="#myModalupdate" onclick="viewdatepicker(<?php echo $i+1; ?>,<?php echo $MapModuleList[$i]['subcatid'];?>);"><?php echo $MapModuleList[$i]['scheduledate'];?></a>
		</td>
                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" onclick="modalWindowemployee('loademployeelist',<?php echo $MapModuleList[$i]['subcatid']  ?>);">View Trainees</a></td>
               	
            </tr>
	<?php } ?>

            
        </tbody>
    </table></div><!--end .margin-bottom-xxl -->
								
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
 <div class="modal fade" id="myModal" role="dialog">
    		<div class="modal-dialog">
			
			<div class="row" id="DisplayModlaDiv"></div>
	
     		</div>
	</div>
<div class="modal fade" id="myModalupdate" role="dialog">
    		<div class="modal-dialog">
			
			<div class="row" id="DisplayModlaupdateDiv"></div>
	
     		</div>
	</div>	
<script type="text/javascript">
function modalWindowemployee(type,subcatid)
{

	 	$.get( "manage/LoadModalContent",{ type : type,subcatid : subcatid },function(data) {
		$( "#DisplayModlaDiv" ).html( data );
  		})

}
function viewdatepicker(id,subcatid)
{
var type ="updatescheduledate";

$.get( "manage/LoadModalContent",{ type : type,id: id,subcatid:subcatid},function(data) {
$( "#DisplayModlaupdateDiv" ).html( data );
App.init();
App.formElements();
})



}
function deleteFunctionemplooyee(deleteId,subcatid){
	var type='loademployeelist';
	
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
	$.get( "manage/adminMaster?master="+type,{ deleteId : deleteId,subcatid:subcatid},function(data) {
	})
	swal("Deleted!", "Your imaginary file has been deleted.", "success");
	dataTableFunction();
	});


}


function updatescheduledate(type,id)
{
$.get( "manage/getFunction?type="+type+"&id="+id, $( "#updatedate"+id).serialize(),function() {

					$('#updatedate'+id)[0].reset();	
					 location.reload(); 	
								
				})

	
}
            $(function () {
                $('#datetimepicker').datetimepicker({ autoclose: true });
			
            });
</script>


<?php }else if($type=='TraineeList'){ ?>

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
							Add Trainee<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('modulemaster') ?>?type=Trainee"><i class="fa fa-plus"></i></a>
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
			<li class=""><a href=""><?php echo $DepartmentList[$i]['department']; ?>
			<small class="pull-right text-bold opacity-75"></small></a></li>
	
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
													<a class="text-lg text-medium" href="#"><h3><?php echo $Employee[$i]['surename'].", ".$Employee[$i]['name']; ?> </h3></a>
												</div>
											</div>
			<div class="clearfix opacity-75">
				<div class="col-md-5">
					<span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;<?php echo $Employee[$i]['chorusid']; ?>
				</div>
				<div class="col-md-7">
					<span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;<?php echo $Employee[$i]['username']; ?>
				</div>
			</div>
			<div class="clearfix opacity-75">
				<div class="col-md-5">
<span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;<?php echo $Employee[$i]['location']; ?></span>
				</div>
				<div class="col-md-7">
<span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;<?php echo $Employee[$i]['department']; ?></span>
				</div>
				</div>
											
			<div class="stick-top-right small-padding">
				<a  href="javascript:void(0)" onclick="deleteFunction(<?php echo $Employee[$i]['userid']; ?>,'Employee')"><i class=" fa fa-trash-o  fa-fw text-success" data-toggle="tooltip" data-placement="left" data-original-title="Delete"></i></a>
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

<?php } ?>
<script>
function deleteFunction(deleteId,type){
	swal({
	title: "Are you sure?",
	text: "You will not be able to recover this imaginary file!",
	type: "warning",
	showCancelButton: true,
	confirmButtonColor: "#3AB9B1",
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
