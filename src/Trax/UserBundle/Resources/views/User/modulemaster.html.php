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
				<li class="active"><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=Category" class="btn btn-sm btn-primary">Category List</a></li>
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
<input class="form-control" id="Category" name="Category" value="<?php echo $editmodcatlist[0]['modulecategory']; ?>" type="text"><div style="color:red" id="errorCategory"></div>
									<label for="regular1">Module Category</label>
								</div>
								<div class="form-group">
<textarea class="form-control" id="Description" name="Description"><?php echo $editmodcatlist[0]['description']; ?></textarea>
									<label for="regular1">Module Description</label>
								</div>
																
<div class="form-group">
<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editmodcatlist!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>
				<input type="hidden" id="Trainer" name="Trainer" value="<?php echo $loginemployeeuserId; ?>">
				<input type="hidden" name="customerId" id="customerId" value="<?php echo $customerId; ?>">
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
                $('#errorCategory').html("Please enter the Module Category");
		document.getElementById('Category').focus();
		return false;
		}
		else
		{
		$('#errorCategory').html(" ");
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
<li class="active"><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=SubCategory" class="btn btn-sm btn-primary">Sub Category List</a></li>
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
					  </select><div style="color:red" id="errorCategoryId"></div>
									<label for="regular1">Category</label>
								</div>

								<div class="form-group">
<input class="form-control" id="SubCategory" name="SubCategory" value="<?php echo $editModuleCategory[0]['subcategory']; ?>" type="text">
<div style="color:red" id="errorSubCategory"></div>
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
<input type="hidden" name="Trainer" id="Trainer" value="<?php echo $loginemployeeuserId; ?>">
<input type="hidden" name="customerId" id="customerId" value="<?php echo $customerId; ?>">
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
                 $('#errorCategoryId').html("Please select  the Module Category");
		document.getElementById('CategoryId').focus();
		return false;
		}
		else
		{
		 $('#errorCategoryId').html(" ");
		}

		var subCategory = document.getElementById('SubCategory').value;
		if (subCategory == "")
		{
                $('#errorSubCategory').html("Please enter  the SubCategory");
		document.getElementById('SubCategory').focus();
		return false;
		}
		
		else
		{
		 $('#errorSubCategory').html(" ");
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
				<li class="active">Upload Content</li>
<li class="active"><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=ModuleList" class="btn btn-sm btn-primary">Upload Content List</a></li>
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
					  </select><div style="color:red" id="errorCategoryId"></div>
									<label for="regular1">Category</label>
								</div>
					
						<div class="form-group"><div id="subCategoryDiv">
 						<select name="Category" id="Category" class="form-control" onchange="getsubCategory(this.value)">
						<option value="">Select Sub Category </option>
							  </select></div>
									<label for="regular1">Sub Category</label>
								</div>

								<div class="form-group">
<input type="text" id="ModuleName" name="ModuleName" class="form-control" value="<?php echo $editmodulefilelist[0]['modulename']; ?>"><div style="color:red" id="errorModuleName"></div>
									<label for="regular1">Content Name</label>
								</div>
<div class="form-group">
<textarea class="form-control" id="Description" name="Description"><?php echo $editmodulefilelist[0]['description']; ?></textarea>
									<label for="regular1">Description</label>
								</div>
<div class="form-group">
					<div id="uploadedFilehide"><input class="" id="uploadedFile" name="uploadedFile" value="" type="file"><div style="color:red" id="erroruploadedFile"></div></div>
									<label for="regular1">Upload Files</label>

			
			<div class="col-sm-10">
					<div class="progress" id="progress" style="display:none">
				            <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%">0%</div>

				        </div>
			</div>
			<input type="text" name="Urlname" id="Urlname" style="display:none"  class="form-control"  >
					<div id="errorUrlname" style="color:red" ></div> 

					
					
					
					<div class="col-sm-1"><div id="fileCancel" style="display:none">
					<img style="width:20px;height:20px;" id="cancel_all"  src="<?php echo $view['assets']->getUrl('assets/img/Remove.png')?>">					
					</div></div>
					
					
					<br><div class="col-sm-4">
					<input name="checkbox" type="checkbox" id="checkbox" />
					<label class="control-label">Url</label>
					</div>
								</div>
			
																
<div class="form-group">
<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>
			<input type="hidden" name="Trainer" id="Trainer" value="<?php echo $loginemployeeuserId; ?>">
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
$(document).ready(function(){
  $(checkbox).click(function() {
    if ($('#checkbox').is(':checked')) {
	$("#Urlname").show();
	$("#cancel_all").hide();
	$("#uploadedFilehide").hide();
	$("#fileCancel").hide();
	$("#validateFun").val("URL");
    } else {
	$("#Urlname").hide();
	$("#uploadedFilehide").show();
	$("#fileCancel").hide();
	$("#errorUrlname").html(" ");
    }
  });
});
</script>


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
           $('#errorCategoryId').html("Please select the Category");
	document.getElementById('CategoryId').focus();
	return false;
	}
	
	else
	{
	$('#errorCategoryId').html(" ");
	}
	var SubCategory = document.getElementById('SubCategory').value;
	if (SubCategory == "")
	{
       $('#errorSubCategory').html("Please select the SubCategory");
	document.getElementById('SubCategory').focus();
	return false;
	}
	
	else
	{
	$('#errorSubCategory').html(" ");
	}
	
	var ModuleName = document.getElementById('ModuleName').value;
	if (ModuleName == "")
	{
	$('#errorModuleName').html("Please enter the Content Name ");
	document.getElementById('ModuleName').focus();
	return false;
	}
	else
	{
	$('#errorModuleName').html(" ");
	}

	var uploadedFile = document.getElementById('uploadedFile').value;
	var Urlname = document.getElementById('Urlname').value;
	if($('#checkbox').is(':checked'))
	{
	if (Urlname == "")
	{
        $('#errorUrlname').html("Please enter the Url ");
	document.getElementById('Urlname').focus();
	return false;
	}
	
	else{
		$('#erroruUrlname').html(" ");
		}
	}
	else
	{
	if (uploadedFile == "")
	{
        $('#erroruploadedFile').html("Please upload File ");
	document.getElementById('uploadedFile').focus();
	return false;
	}
	
	else{
		$('#erroruploadedFile').html(" ");
		$('#progress').show();
                        $('#fileCancel').show();
		}
	}
			//var editId=$('#editId').val();
			
			$('#homemenu').prop('disabled', true);
			var vFD = new FormData(document.getElementById('customerForm'));			
			var hrx= $.ajax({
			url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type="+type+"&val="+val,
			data: vFD,
			processData: false,
			contentType: false,
			type: 'POST',
			// this part is progress bar
			xhr: function () {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener("progress", function (evt) {
			if (evt.lengthComputable) {
			var percentComplete = evt.loaded / evt.total;
			percentComplete = parseInt(percentComplete * 100);
			$('.myprogress').text(percentComplete + '%');
			$('.myprogress').css('width', percentComplete + '%');
			}
			}, false);
			return xhr;			
			},
			success: function (response) {
			$('#homemenu').prop('disabled', false);


				if(response=='Success'){
				$('#customerForm')[0].reset();
				
						$("#Urlname").hide();
						$("#uploadedFilehide").show();
						$("#fileCancel").hide();
						$("#errorUrlname").html(" ");
						
						
						 $('#progress').hide();
			                     $('.myprogress').css('width', '0%');
		       				$('#fileCancel').hide();
						$('#customerForm')[0].reset();
						$("#insertSuccess").show();

						}
						

						
										
					else{
                      				  $('#progress').hide();
			$('.myprogress').css('width', '0%');
                       				 $('#fileCancel').hide();
						$('#erroruploadedFile').html(response);
					}	
				}
			});

			$('#cancel_all').on('click',function(evt){
			hrx.abort();
			$('#homemenu').prop('disabled', false);
			$('#uploadedFile').val("");
                      				  $('#progress').hide();
			$('.myprogress').css('width', '0%');
                       				 $('#fileCancel').hide();
			});
			

			

			/*$.ajax({
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
				

			});*/

			
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
<li class="active"><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=TraineeList" class="btn btn-sm btn-primary">Trainee List</a></li>
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
<input class="form-control" id="Employeename" name="Employeename"  value="<?php echo $editEmployeeList[0]['employeename'] ?>" type="email" onblur="employeeDetils(this.value);"><div style="color:red" id="errorEmployeename"></div>
									<label for="regular1">Trainee Name</label>
								</div>
								<div class="form-group">
<input class="form-control" id="gid" name="gid" placeholder="GId" value="<?php echo $editEmployeeList[0]['username'] ?>" <?php if($editId!=""){ echo "readonly";} ?> type="text" onblur="checkUserName(this.value);"><div style="color:red" id="errorgid"></div>
									<label for="regular1">User Name <span class="text-danger" id="errorusername"></span></label>
								</div>
								<div class="form-group">
<input class="form-control" <?php if($editId!=""){ echo "readonly";} ?> id="Password" name="Password" value="<?php echo $editEmployeeList[0]['password'] ?>" type="text"><div style="color:red" id="errorPassword"></div>
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
								</select><div style="color:red" id="errordepartment"></div>
									<label for="select1">Select Department</label>
								</div>
								<div class="form-group">
									<select id="location" name="location" class="form-control">
								<option value="">Select Location</option>
								<?php  for($i=0;$i<count($LocationList);$i++){ ?>
								<option value="<?php echo $LocationList[$i]['zoneid']; ?>" ><?php echo $LocationList[$i]['location']; ?></option>

								<?php }?> 				
								</select><div style="color:red" id="errorlocation"></div>
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

     if ($('#Employeename').val()=='')
	{
	$('#errorEmployeename').html("Please enter the Trainee Name");
	document.getElementById('Employeename').focus();

	return false;
	}
	else
	{
	$('#errorEmployeename').html("");
	}
	
	if ($('#gid').val()=='')
	{
	$('#errorgid').html("Please enter the User Name");
	document.getElementById('gid').focus();

	return false;
	}
	
	else
	{
	$('#errorgid').html("");
	}
	
	if ($('#Password').val()=='')
	{
	$('#errorPassword').html("Please enter the Password / Chorus Id");
	document.getElementById('Password').focus();

	return false;
	}
	else
	{
	$('#errorPassword').html("");
	}
	
	if ($('#department').val()=='')
	{
	$('#errordepartment').html("Please select the Department");
	document.getElementById('departments').focus();

	return false;
	}
	else
	{
	$('#errordepartment').html("");
	}
	
	if ($('#location').val()=='')
	{
	$('#errorlocation').html("Please select the Location");
	document.getElementById('location').focus();

	return false;
	}
	else
	{
	$('#errorlocation').html("");
	}

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
