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
													<li class="active">Sub ModuleMaster List</li>
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
							Upload Module<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('mapmodule') ?>"><i class="fa fa-plus"></i></a>
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
		<td><a href="<?php if($modulefilelist[$i]['filetype']=='Story'){ $pathArray= explode("/", $modulefilelist[$i]['filepath']);  echo "../web/uploadfiles/".$pathArray[7]."/".$pathArray[8]."story.html"; }else{ echo "../web/uploadfiles/".$modulefilelist[$i]['filename']; } ?>"><?php echo $modulefilelist[$i]['filename']; ?></a></td>
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
<script>
function deleteFunction(id)
{
	var delsubmodulemasterlist=id;

	$.get("?delsubmodulemasterlist="+delsubmodulemasterlist, function(data){
		alert(data);
	});
	window.location.reload();


}
</script>
