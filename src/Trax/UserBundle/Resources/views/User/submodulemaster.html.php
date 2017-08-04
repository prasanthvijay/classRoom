<?php 
	//$view->extend('::header.html.php'); 
			$view->extend('::headernew.html.php'); 
?>
<div id="base">
			
	<div id="content">
			<section>
			<div class="section-header">
				<ol class="breadcrumb">
				<li class="active">Add Module Sub Category</li>
				</ol>

			</div>
			<div class="section-body contain-lg">

			<div class="row">
				
				<div class="col-lg-offset-1 col-md-10 col-sm-12">
					<div class="card">
						<div class="card-body">
				<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form" enctype="multipart/form-data">
				<div align="center" style="display:none;" id="updateSuccess"> 
					<h4 >Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h4 class="text-primary">Successfully Inserted...</h4>
					</div>
								


<div class="form-group">
 <select name="CategoryId" id="CategoryId" class="form-control" onchange="">
						<option value="">Select Module Category </option>
						<?php for($i=0;$i<count($ModuleCategory);$i++) { ?>
						<option value="<?php echo $ModuleCategory[$i]['cateid'];  ?>" <?php if($editModuleCategory[0]['cateid'] == $ModuleCategory[$i]['cateid']) echo "selected"; ?>><?php  echo $ModuleCategory[$i]['modulecategory'];  ?></option>
						<?php  } ?>
					  </select>
									<label for="regular1">Category</label>
								</div>

								<div class="form-group">
<input class="form-control" id="SubCategory" name="SubCategory" value="<?php echo $editModuleCategory[0]['subcategory']; ?>" type="text">
									<label for="regular1">Module Sub Category
</label>
								</div>
								<div class="form-group">
<textarea class="form-control" id="Description" name="Description"><?php echo $editModuleCategory[0]['description']; ?></textarea>
									<label for="regular1">Module Description</label>
								</div>
																
<div class="form-group">
<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editModuleCategory!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>
<input type="hidden" name="loginemployeeuserId" id="loginemployeeuserId" value="<?php echo $loginemployeeuserId; ?>">
<input type="hidden" name="customerId" id="customerId" value="<?php echo $customerId; ?>">
				<input type="hidden" name="loginuserId" id="loginuserId" value="<?php echo $loginuserId; ?>">
<input type="hidden" name="editId" id="editId" value="<?php echo $editModuleCategory[0]['subcatid']; ?>">
							</form>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
							</div></div>

				

	</section>
				
		</div>


<script>
function submitForm() {
	var editId=$("#editId").val();

	var type='ModuleSubCategory';
	if(type=="ModuleSubCategory")
		{
	
		var Category = document.getElementById('CategoryId').value;
		if (Category == "")
		{

		document.getElementById('CategoryId').focus();
		return false;
		}

		var subCategory = document.getElementById('SubCategory').value;
		if (subCategory == "")
		{

		document.getElementById('SubCategory').focus();
		return false;
		}


		var Description = document.getElementById('Description').value;
		if (Description == "")
		{

		document.getElementById('Description').focus();
		return false;
		}
		$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type+"&val=1", $( "#customerForm" ).serialize(),function() {

		$('#customerForm')[0].reset();	
		$('html, body').animate({scrollTop : 0},800);
		$('#insertSuccess').show();

		})

			
	}
}
</script>
