<?php 
	//$view->extend('::header.html.php'); 
			$view->extend('::headernew.html.php'); 

if($type=='Category'){
?>
<div id="base">
	<div id="content">
			<section>
			<div class="section-header">
				<ol class="breadcrumb">
				<li class="active"><?php if($editId!=''){ echo "Edit"; }else { echo "Add"; }  ?> Category</li>
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
<input class="form-control" id="Category" name="Category" value="<?php echo $editmodcatlist[0]['modulecategory']; ?>" type="text">
									<label for="regular1">Module Category</label>
								</div>
								<div class="form-group">
<textarea class="form-control" id="Description" name="Description"><?php echo $editmodcatlist[0]['description']; ?></textarea>
									<label for="regular1">Module Description</label>
								</div>
																
<div class="form-group">
<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editmodcatlist!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>
				<input type="hidden" name="loginemployeeuserId" id="loginemployeeuserId" value="<?php echo $loginemployeeuserId; ?>">
				<input type="hidden" name="customerId" id="customerId" value="<?php echo $customerId; ?>">
				<input type="hidden" name="loginuserId" id="loginuserId" value="<?php echo $loginuserId; ?>">
				<input type="hidden" name="editId" id="editId" value="<?php echo $editmodcatlist[0]['cateid']; ?>">
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
	var type='ModuleCategory';
	if(type=="ModuleCategory")
		{
		var val="1";
		
		var Category = document.getElementById('Category').value;
		if (Category == "")
		{

		document.getElementById('Category').focus();
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

<?php 
	} else if($type=='SubCategory'){
?>
<div id="base">
			
	<div id="content">
			<section>
			<div class="section-header">
				<ol class="breadcrumb">
				<li class="active"><?php if($editId!=''){ echo "Edit"; }else { echo "Add"; }  ?> Sub Category</li>
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
<?php 	} else if($type=='UploadModule'){ ?>
<style>
.fileoutline { width:100%;margin-bottom:10px 10px 10px;margin-right:20px;height:40px;border:1px solid #000;position:relative; }
#uploadedFile { margin-top:8px;margin-left:10px; }
</style>
<div id="base">
			
	<div id="content">
			<section>
			<div class="section-header">
				<ol class="breadcrumb">
				<li class="active">Upload Module</li>
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
 <select name="CategoryId" id="CategoryId" class="form-control" onchange="getsubCategory(this.value)">
						<option value="">Select Category </option>
						<?php for($i=0;$i<count($ModuleCategory);$i++) { ?>
						<option value="<?php echo $ModuleCategory[$i]['cateid'];  ?>" <?php if($editmodulefilelist[0]['modulecategory'] == $ModuleCategory[$i]['cateid']) echo "selected"; ?>><?php  echo $ModuleCategory[$i]['modulecategory'];  ?></option>
						<?php  } ?>
					  </select>
									<label for="regular1">Category</label>
								</div>
					
						<div class="form-group"><div id="subCategoryDiv">
 						<select name="Category" id="Category" class="form-control" onchange="getsubCategory(this.value)">
						<option value="">Select Sub Category </option>
							  </select></div>
									<label for="regular1">Sub Category</label>
								</div>

								<div class="form-group">
<input type="text" id="ModuleName" name="ModuleName" class="form-control" value="<?php echo $editmodulefilelist[0]['modulename']; ?>">
									<label for="regular1">Module Name</label>
								</div>
<div class="form-group">
<textarea class="form-control" id="Description" name="Description"><?php echo $editmodulefilelist[0]['description']; ?></textarea>
									<label for="regular1">Module Description</label>
								</div>
<div class="form-group">
					<input class="" id="uploadedFile" name="uploadedFile" value="" type="file">
									<label for="regular1">Upload Files</label>
								</div>
																
<div class="form-group">
<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>
<input type="hidden" name="loginemployeeuserId" id="loginemployeeuserId" value="<?php echo $loginemployeeuserId; ?>">
			<input type="hidden" name="customerId" id="customerId" value="<?php echo $customerId; ?>">
				<input type="hidden" name="loginuserId" id="loginuserId" value="<?php echo $loginuserId; ?>">
							</form>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
							</div></div>

				

	</section>
				
		</div>





<script>
function submitForm() {

	var type='Module';
	if(type=="Module")
		{
	var val="1";
			
			$('#errorMobile').html("");
						
			var filePost = new FormData(document.getElementById('customerForm'));
   
	var Category = document.getElementById('CategoryId').value;
	if (Category == "")
	{

	document.getElementById('CategoryId').focus();
	return false;
	}
	
	var ModuleName = document.getElementById('ModuleName').value;
	if (ModuleName == "")
	{

	document.getElementById('ModuleName').focus();
	return false;
	}

	var uploadedFile = document.getElementById('uploadedFile').value;
	if (uploadedFile == "")
	{

	document.getElementById('uploadedFile').focus();
	return false;
	}

			$.ajax({
			url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type="+type+"&val="+val,
			type: "POST",
			data: filePost,
			processData: false,
			contentType: false,
			success: function(response) {

					$('#customerForm')[0].reset();	
					$('#insertSuccess').show();
					$('html, body').animate({scrollTop : 0},800);							
					}
				

			});

			
	}
}
function getsubCategory(catid){
	var type="getsubCategory";
	$.get( "userFunction",{ type : type,catid : catid},function(data) {
	$('#subCategoryDiv').html(data);
	});
}
</script>
<?php 	} else if($type=='Trainee'){ ?>
<style>
.fileoutline { width:100%;margin-bottom:10px 10px 10px;margin-right:20px;height:40px;border:1px solid #000;position:relative; }
#uploadedFile { margin-top:8px;margin-left:10px; }
</style>
<div id="base">
			
	<div id="content">
			<section>
			<div class="section-header">
				<ol class="breadcrumb">
				<li class="active">Add Trainee</li>
				</ol>

			</div>
			<div class="section-body contain-lg">

			<!-- BEGIN INTRO -->
			

			<!-- BEGIN BASIC ELEMENTS -->
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
<input class="form-control" id="Employeename" name="Employeename"  value="<?php echo $editEmployeeList[0]['employeename'] ?>" type="email" onblur="employeeDetils(this.value);">
									<label for="regular1">Trainee Name</label>
								</div>
								<div class="form-group">
<input class="form-control" id="gid" name="gid" placeholder="GId" value="<?php echo $editEmployeeList[0]['username'] ?>" <?php if($editId!=""){ echo "readonly";} ?> type="text" onblur="checkUserName(this.value);">
									<label for="regular1">User Name <span class="text-danger" id="errorusername"></span></label>
								</div>
								<div class="form-group">
<input class="form-control" <?php if($editId!=""){ echo "readonly";} ?> id="Password" name="Password" value="<?php echo $editEmployeeList[0]['password'] ?>" type="text">
									<label for="password1">Password / Chorus Id</label>
								</div>
								<!--<div class="form-group">
						<textarea class="form-control" id="Address" name="Address"><?php echo $editEmployeeList[0]['address'] ?></textarea>
									<label for="placeholder1">Address</label>
								</div>-->
								<div class="form-group">
									<div class="radio radio-styled">
											<label>
												<input name="gender" value="Male" checked="checked" type="radio">
												<span>Male</span>
											</label>
										</div>
										<div class="radio radio-styled">
											<label>
												<input name="gender" value="Female" type="radio">
												<span>Female</span>
											</label>
										</div>
							<label for="help1">Gender</label>
								</div>
																
								<div class="form-group">
									<select id="department" name="department" class="form-control" >
								<option value="">Select Department</option>
								<?php  for($i=0;$i<count($DepartmentList);$i++){ ?>
								<option value="<?php echo $DepartmentList[$i]['dprtid']; ?>" <?php if($editEmployeeList[0]['dprtid']== $DepartmentList[$i]['dprtid']) echo "selected";  ?>><?php echo $DepartmentList[$i]['department']; ?></option>

								<?php }?> 				
								</select>
									<label for="select1">Select Department</label>
								</div>
								<div class="form-group">
									<select id="location" name="location" class="form-control">
								<option value="">Select Location</option>
								<?php  for($i=0;$i<count($LocationList);$i++){ ?>
								<option value="<?php echo $LocationList[$i]['zoneid']; ?>" ><?php echo $LocationList[$i]['location']; ?></option>

								<?php }?> 				
								</select>
									<label for="select1">Select Location</label>
								</div>
								<!--<div class="form-group">
						<input class="" id="uploadedFile" name="uploadedFile" value="" type="file">
									<label for="textarea1">Trainee Image</label>
								</div>-->
								
<div class="form-group">
<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>

				<input type="hidden" name="editId" id="editId" value="<?php echo $editcustomerList[0]['userid']; ?>">
<input type="hidden" name="loginemployeeuserId" id="loginemployeeuserId" value="<?php echo $loginemployeeuserId; ?>">
				<input type="hidden" name="customerId" id="customerId" value="<?php echo $customerId; ?>">
				<input type="hidden" name="loginuserId" id="loginuserId" value="<?php echo $loginuserId; ?>">
							</form>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
							</div></div>

				

	</section>
				
		</div>


<script>
var xhr;
var customerId="<?php echo $customerId; ?>";
$('input[name="Employeename"]').autoComplete({
    source: function(term, response){
        try { xhr.abort(); } catch(e){}
        xhr = $.getJSON('manage/getFunction', { employeename: term,customerId:customerId,type:"employeeDetails" }, function(data){ response(data); });
    }
});
function employeeDetils(employeeId){
var type="EmployeefullDetails";
$.get('manage/getFunction', { employeeId: employeeId,customerId:customerId,type:type }, function(data){ 
	var result=JSON.parse(data);

	if(result!=""){
				$('#Password').val(result[0]['chorusid']);
				$('#gid').val(result[0]['gid']);				
				$("#department").val(result[0]['department']);
				$("#location").val(result[0]['location']);
			}	
 });

} 
function submitForm() {


	$('#errorMobile').html("");

	var editId=$('#editId').val();
	
	//var filePost = new FormData(document.getElementById('customerForm'));
	
	/*$.ajax({
	url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type=Employee&val=1",
	type: "POST",
	data: filePost,
	processData: false,
	contentType: false,
	success: function(response) {
	$('#customerForm')[0].reset();
	$('html, body').animate({scrollTop : 0},800);
	$("#insertSuccess").show();

	}


	});*/
	$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type=Employee&val=1", $( "#customerForm" ).serialize(),function() {

					$('#customerForm')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForm')[0].reset();	
					$('#updateSuccess').show();
					}

				})


			
	
}

function checkUserName(username){
			var type="checkUserName";
			$.get( "manage/getFunction",{ type : type,username : username},function(data) {

				var result=JSON.parse(data);
				if(result!=""){
					$('#errorusername').html("User Already Exists..!");
				document.getElementById('gid').focus();
				return false;
				}
				else{
					$('#errorusername').html("  ");
				}
				
					
  			});
}
</script>

<?php } ?>
