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
							<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('maptrainingschedule') ?>"><i class="fa fa-plus"></i></a>
						</div>
					</div>
				<div class="list-results">
	<table id="example" class="table table-bordered data-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
		<th>Training Batch</th>
		<th>Program Name</th>
                <th>Training Name</th>
                <th>Date</th>
                <th>Employees</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>	
		<!-- <tbody>

	<?php  for($i=0;$i<count($LocationList);$i++)
		{ 

?>
            <tr>
                <td><?php echo $i+1; ?></td>

		<td> <?php echo $LocationList[$i]['batchname']; ?></td>
                <td><?php echo $LocationList[$i]['description']; ?></td>
               	<th>edit</th>
		<th>delete</th>
            </tr>
	<?php } ?>

            
        </tbody>-->
        	
       
    </table>

								</div>
   				</div>
			</div>
		</section>
	</div>
</div>
