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
<li class=""><a href="<?php echo $view['assets']->getUrl('modulemaster') ?>?type=Category" class="btn btn-sm btn-primary">Add Category</a></li>
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
<li class=""><a href="<?php echo $view['assets']->getUrl('modulemaster') ?>?type=SubCategory" class="btn btn-sm btn-primary">Add Sub Category</a></li>
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
													<li class="active">Content Files</li>
				<li class=""><a href="<?php echo $view['assets']->getUrl('modulemaster') ?>?type=UploadModule" class="btn btn-sm btn-primary">Add Content</a></li>
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
		<th>File</th>
                <!--<th>Edit</th>-->
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php for($i=0;$i<count($modulefilelist);$i++)
		{ 
		$pathArray= explode("/", $modulefilelist[$i]['filepath']);
//print_r($pathArray);
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $modulefilelist[$i]['modulecategory']; ?></td>
                <td><?php echo $modulefilelist[$i]['modulename']; ?></td>
		<td><a target=_blank class="text-warning" href="<?php if($modulefilelist[$i]['filetype']=='Story'){  echo "uploadfiles/".$pathArray[7]."/".$pathArray[8]."/story.html"; }else if($modulefilelist[$i]['filetype']=='url'){ echo $modulefilelist[$i]['filename']; }else{  echo "uploadfiles/".$pathArray[7]."/".$modulefilelist[$i]['filename']; } ?>"><?php if($modulefilelist[$i]['filetype']=='url'){ echo "View Url"; }else{ echo $modulefilelist[$i]['filename']; } ?></a></td>
               	<!--<th><a href="" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php echo $modulefilelist[$i]['moduleid'];?>)">Edit</a></th>-->
		<th><a href="javascript:void(0);" class="text-danger" onclick="deleteFunction(<?php  echo $modulefilelist[$i]['moduleid']; ?>);">Delete</a></th>
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
<li class=""><a href="<?php echo $view['assets']->getUrl('mapmoduletouser') ?>" class="btn btn-sm btn-primary">Map Content to Trainee</a></li>
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
							Map Content to Trainee<a class="btn btn-floating-action btn-default-light" href="<?php echo $view['assets']->getUrl('mapmoduletouser') ?>"><i class="fa fa-plus"></i></a>
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
                <th>Edit Content</th>
		<th>Delete</th>		

            </tr>
        </thead>
        
        <tbody>

	<?php  for($i=0;$i<count($MapModuleList);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $MapModuleList[$i]['modulecategory']; ?></td>
                <td><?php echo ucfirst($MapModuleList[$i]['name']); ?></td>
		 <td><a href="javascript:void(0);" data-toggle="modal" class="text-primary" data-target="#myModalupdate" onclick="viewdatepicker(<?php echo $MapModuleList[$i]['mapid']  ?>);"><?php echo $MapModuleList[$i]['scheduledate'];?></a>
		</td>
                <th><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" class="text-warning" onclick="modalWindowemployee('loademployeelist',<?php echo $MapModuleList[$i]['mapid']  ?>);">View Trainees</a></th>
			<th><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" class="text-warning" onclick="modalWindowContent('editContent',<?php echo $MapModuleList[$i]['mapid']  ?>);">Edit Content</a></th>
               	<th><a href="javascript:void(0);" class="text-danger" onclick="deleteFunction(<?php  echo $MapModuleList[$i]['mapid']; ?>,'MapModule');">Delete</a></th>
               	
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
function modalWindowemployee(type,mapid)
{

	 	$.get( "manage/LoadModalContent",{ type : type,mapid : mapid },function(data) {
		$( "#DisplayModlaDiv" ).html( data );
  		})

}
function modalWindowContent(type,mapid)
{

	 	$.get( "userFunction",{ type : type,mapid : mapid },function(data) {
		$( "#DisplayModlaDiv" ).html( data );
  		})

}
function getsubCategory(){

	var catid=$('#CategoryIdModule').val();
	$.get( "manage/getFunction",{type:"getsubCategoryMultiple",catid:catid} ,function( data ) {

	var result=JSON.parse(data);

	$("#subCategory").empty();
	$("#subCategory_to").empty();

	for(var i=0;i<result['subCategoryList'].length;i++)
	{
	$("#subCategory").append($('<option></option>').attr("value", result['subCategoryList'][i]['subcatid']).text(result['subCategoryList'][i]['subcategory']));
	}

	});
}
function LoadTrainee(mapid){
	$.get( "manage/getFunction?type=mapExtraTrainee",{ mapid : mapid},function(data) {

		$('#emply').show();
		$('#employeelist').html(data);
		App.formElements();		
	})
}

function submitFormnew(type,mapid) {	 			
		var customerId="<?php echo $customerId; ?>";
		var Trainer="<?php echo $loginemployeeuserId; ?>";				
	
		$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type+"&val=1&customerId="+customerId+"&Trainer="+Trainer, $( "#customerForm" ).serialize(),function(data) {

		if(data=="Success"){
		$('#customerForm')[0].reset();	
		$('#insertSuccess').show();
		$('#emply').hide();	
		}
		modalWindowemployee(type,mapid);
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
function deleteFunctionemplooyee(deleteId,mapid){
	var type='loademployeelist';
	
	swal({
	title: "Are you sure?",
	text: "Remove this Trainee to this program!",
	type: "warning",
	showCancelButton: true,
	confirmButtonColor: "#3AB9B1",
	confirmButtonText: "Yes, Remove it!",
	closeOnConfirm: false
	},
	function(){
	$.get( "manage/adminMaster?master="+type,{ deleteId : deleteId,mapid:mapid},function(data) {
	})
	swal("Removed!", "Remove this Trainee to this program.", "success");
	modalWindowemployee(type,mapid);

	});


}


function updatescheduledate(type,id)
{
$.get( "manage/getFunction?type="+type+"&id="+id, $( "#updatedate"+id).serialize(),function() {

					$('#updatedate'+id)[0].reset();	
					 location.reload(); 	
								
				})

	
}

function getmodule() 
{
var origin="#subCategory";
 var dest="#subCategory_to";

	var catid="";
	var tnl = document.getElementById("subCategory");
		
		for(i=0;i<tnl.length;i++){
			if(tnl[i].selected == true)
			{
			//alert(tnl[i].value);
			catid += tnl[i].value+',';
			
			}
		}
		catid = catid.replace(/,\s*$/, "");
		document.getElementById("arrayvalue1").value=catid;

		var category_New=$('#arrayvaluenew1').val();
		var catidnew=$('#arrayvaluenew1').val(category_New+','+catid);
		var catid_new = $('#arrayvaluenew1').val().slice( 1 );
		var type="getModuleFileNew";	
		$.get( "manage/getFunction",{ type : type, subCategory:catid_new},function(data) {
		$('#ResourceDiv').html(data);
		App.formElements();
		})
		$(origin).find(':selected').appendTo(dest);
	
}
function getmoduleremove() {
var origin="#subCategory";
 var dest="#subCategory_to";

	var selectedid =[];
	selectedid=document.getElementById("arrayvalue1").value
	var catid='';
	var tnl = document.getElementById("subCategory_to");

		for(i=0;i<tnl.length;i++){
	
			if(tnl[i].selected == true){
				//catid += tnl[i].value+',';
			}
			else{
				catid += tnl[i].value+',';
				}
		}
		catid = catid.replace(/,\s*$/, "");
		$('#arrayvaluenew1').val(","+catid);
		if(catid!=''){
			var type="getModuleFileNew";	
			$.get( "manage/getFunction",{ type : type, subCategory:catid},function(data) {
			$('#ResourceDiv').html(data);
			App.formElements();
			})
		}

		else{
			$('#arrayvaluenew1').val('');
			var type="getModuleFileNew";	
			$.get( "manage/getFunction",{ type : type, subCategory:0},function(data) {
			$('#ResourceDiv').html(data);
		App.formElements();
			})	
		}
		$(dest).find(':selected').appendTo(origin);
		
}
function submitForm(type,mapid){

			if($('#CategoryIdModule').val()==""){
				$('#CategoryIdModule').focus();
				$('#errorCategoryIdModule').html("Please select a category");	
				return false;
			}
			else{
				$('#errorCategoryIdModule').html("");	
			}
			if($('#subCategory_to').val()==null){
				$('#errorsubCategory_to').focus();
				$('#errorsubCategory_to').html("Please select a Sub category");	
				return false;
			}
			else{
					$('#errorsubCategory_to').html("");	
			}
			$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type+"&val=1&mapid="+mapid, $( "#customerForm" ).serialize(),function() {

					$('#customerForm')[0].reset();	

					})
	modalWindowContent(type,mapid);

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
<li class=""><a href="<?php echo $view['assets']->getUrl('modulemaster') ?>?type=Trainee" class="btn btn-sm btn-primary">Add Trainee</a></li>
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

<table id="example" class="table table-bordered data-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
		<th>Name</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php  for($i=0;$i<count($Employee);$i++)
		{ 


?>
            <tr>
                <td><?php echo $i+1; ?></td>

		<td> <h3><?php echo $Employee[$i]['surename'].", ".$Employee[$i]['name']; ?> </h3></td>
                <td><?php echo $Employee[$i]['username']; ?></td>
                <td><?php echo $Employee[$i]['chorusid']; ?></td>
                <th><a href="<?php  echo $view['assets']->getUrl('modulemaster') ?>?type=Trainee&editId=<?php echo $Employee[$i]['userid']; ?>">Edit</a></th>
                  
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $Employee[$i]['userid']; ?>,'Employee');">Delete</a></th>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>
								</div><!--end .list-results -->
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
