<?php if($getFunctionType=="getsubCategory") { ?>

		<select name="SubCategory" id="SubCategory" class="form-control" >
		<option value="">Select Sub Category </option>
		<?php  for($i=0;$i<count($subCategoryList);$i++){ ?>
		<option value="<?php echo $subCategoryList[$i]['subcatid']; ?>"><?php echo $subCategoryList[$i]['subcategory']; ?></option>
		<?php }?> 
		</select><div style="color:red" id="errorSubCategory"></div>




<?php } else if($getFunctionType=='ModuleCategory') { ?>

				
			
			
			
<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $getFunctionType);  ?></h4>
				</div>  
				
				
<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form" enctype="multipart/form-data">
 <div class="modal-body">
				<div align="center" style="display:none;" id="updateSuccess"> 
					<h4 >Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccesss"> 
					<h4 class="text-primary">Successfully Inserted...</h4>
					</div>


								<div class="form-group">
<input class="form-control" id="Category" name="Category" value="<?php echo $editModuleCategory[0]['modulecategory']; ?>" type="text"><div style="color:red" id="errorCategory"></div>
									<label for="regular1">Category Name</label>
								</div>
								
								<div class="form-group">
<textarea class="form-control" id="Description" name="Description"><?php echo $editModuleCategory[0]['description']; ?></textarea><div style="color:red" id="errorEmployeename"></div>
									<label for="regular1">Category Description</label>
								</div>
								
								<input type="hidden" id="Trainer" name="Trainer" value="<?php echo $_SESSION['userid'] ?>">
 				<input type="hidden"  value="<?php echo $customerId ?>" name="customerId" id="customerId">
								
								
								
<div class="form-group">
<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm('<?php echo $getFunctionType; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>

				<input type="hidden" name="editId" id="editId" value="<?php echo $editModuleCategory[0]['cateid']; ?>">
				</div>
							</form>
							
											</div>
 
					
<?php } else if($getFunctionType=='ModuleSubCategory') { ?>



			
<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $getFunctionType);  ?></h4>
				</div>  
				
				
<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form" enctype="multipart/form-data">
 <div class="modal-body">
				<div align="center" style="display:none;" id="updateSuccess"> 
					<h4 >Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccesss"> 
					<h4 class="text-primary">Successfully Inserted...</h4>
					</div>
                         <div class="form-group">
                             <div id="CategoryDivm">
					 <select name="CategoryId" id="CategoryIdm" class="form-control" >
						<option value="">Select Category </option>
						<?php for($i=0;$i<count($Categorylist);$i++) { ?>
						<option value="<?php echo $Categorylist[$i]['cateid'];  ?>" ><?php  echo $Categorylist[$i]['modulecategory'];  ?></option>
						<?php  } ?>
					  </select>
					</div><div style="color:red" id="errorCategorych"></div>
									<label for="regular1">Module Category</label>
								</div>

								<div class="form-group">
<input class="form-control" id="SubCategoryt" name="SubCategory" value="<?php echo $editModuleCategory[0]['modulecategory']; ?>" type="text"><div style="color:red" id="errorSubCategorych"></div>
									<label for="regular1">Module Sub Category</label>
								</div>
								
								<div class="form-group">
<textarea class="form-control" id="Description" name="Description"><?php echo $editModuleCategory[0]['description']; ?></textarea><div style="color:red" id="errorEmployeename"></div>
									<label for="regular1">Module Description</label>
								</div>
								
								<input type="hidden" id="Trainer" name="Trainer" value="<?php echo $_SESSION['userid'] ?>">
 				<input type="hidden"  value="<?php echo $customerId ?>" name="customerId" id="customerId">
								
								
								
<div class="form-group">
<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm('<?php echo $getFunctionType; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>

					<input type="hidden" name="editId" id="editId" value="<?php echo $editModuleCategory[0]['cateid']; ?>">
				</div>
							</form>
							
											</div>
 
			


<script>

function getCategoryListm(){
var trainerId = <?php echo $loginemployeeuserId; ?>;

var type="getCategoryListM";
	$.get( "manage/getFunction",{ type : type,trainerId : trainerId},function(data) {
	$('#CategoryDivm').html(data);

	});

}
</script>

<?php } else if($getFunctionType=='Module') { ?>

<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $getFunctionType);  ?></h4>
				</div>  
				
				
<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form" enctype="multipart/form-data">
 <div class="modal-body">
				<div align="center" style="display:none;" id="updateSuccess"> 
					<h4 >Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccesss"> 
					<h4 class="text-primary">Successfully Inserted...</h4>
					</div>
					
					<div class="form-group">	
						 <select name="CategoryId" id="CategoryIdModule" class="form-control" onchange="getsubcategory(this.value)">
						<option value="">Select Category </option>
						<?php for($i=0;$i<count($Categorylist);$i++) { ?>
						<option value="<?php echo $Categorylist[$i]['cateid'];  ?>" ><?php  echo $Categorylist[$i]['modulecategory'];  ?></option>
						<?php  } ?>
					  </select><div style="color:red" id="errorCategoryIdModule"></div>
						<label for="regular1">Category</label>
						</div>
                        <div class="form-group">	
						<div id="subCategoryDiv"> 
					 <select name="SubCategory" id="SubCategory" class="form-control" >
						<option value="">Select Sub Category </option>
					 </select>
					</div>
						<label for="regular1">Sub Category</label>
						</div>
                        
                        <div class="form-group">	
						<input type="text" id="ModuleName" name="ModuleName" class="form-control" value="<?php echo $editmodulefilelist[0]['modulename']; ?>"><div style="color:red" id="errorModuleName"></div>
						<label for="regular1">Content Name</label>
						</div>
						<div class="form-group">	
						<textarea class="form-control" id="Description" name="Description"><?php echo $editmodulefilelist[0]['description']; ?></textarea>
						<label for="regular1">Content Description</label>
						</div>
						<div class="form-group">
								<div id="erroruploadedFile" class="errorText"></div>
					<div class="col-sm-10">
					<div class="progress" id="progress" style="display:none">
				            <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%">0%</div>

				        </div></div>
					
					<div id="fileCancel" style="display:none">
					<img style="width:20px;height:20px;" id="cancel_all"  src="<?php echo $view['assets']->getUrl('assets/img/Remove.png')?>">					
					</div>
<input class="" id="uploadedFile" name="uploadedFile" value="" type="file"><div style="color:red" id="errorEmployeename"></div>
									<label for="regular1">Upload Files</label><div style="color:red" id="errorfile"></div>
								</div>
								
								<input type="hidden" id="Trainer" name="Trainer" value="<?php echo $_SESSION['userid'] ?>">
 				<input type="hidden"  value="<?php echo $customerId ?>" name="customerId" id="customerId">
<input type="hidden" name="editId" id="editId" value="<?php echo $editmodulefilelist[0]['moduleid']; ?>">
								
								
								
<div class="form-group">
<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm('<?php echo $getFunctionType; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>

					<input type="hidden" name="editId" id="editId" value="<?php echo $editDepartment[0]['dprtid']; ?>">
				</div>
							</form>
							
											</div>
 
<script>
function getsubcategory(catid){
	var type="getsubCategory";
	$.get( "manage/getFunction",{ type : type,catid : catid},function(data) {
	$('#subCategoryDiv').html(data);
	});
}
</script>

<?php }  if($getFunctionType=='Department') { ?> 	

<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $getFunctionType);  ?></h4>
				</div>  
				
				
<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form" enctype="multipart/form-data">
 <div class="modal-body">
				<div align="center" style="display:none;" id="updateSuccess"> 
					<h4 >Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccesss"> 
					<h4 class="text-primary">Successfully Inserted...</h4>
					</div>
                        
								
								<div class="form-group">
<input class="form-control" id="department" name="department" value="<?php echo $editDepartment[0]['department']; ?>" type="text"><div style="color:red" id="errordepartment"></div>
									<label for="regular1"><?php echo preg_replace('/([A-Z])/', ' $1', $getFunctionType);  ?></label>
								</div>
								
								<input type="hidden" id="Trainer" name="Trainer" value="<?php echo $_SESSION['userid'] ?>">
 				<input type="hidden"  value="<?php echo $customerId ?>" name="customerId" id="customerId">
								
								
								
<div class="form-group">
<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm('<?php echo $getFunctionType; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>

					<input type="hidden" name="editId" id="editId" value="<?php echo $editDepartment[0]['dprtid']; ?>">
				</div>
							</form>
							
											</div>
 
			
<?php }  if($getFunctionType=='trainer') { ?> 

<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $getFunctionType);  ?></h4>
				</div>  
				
				
<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form" enctype="multipart/form-data">
 <div class="modal-body">
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
<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm('<?php echo $getFunctionType; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
								</div>

				<input type="hidden" name="editId" id="editId" value="<?php echo $editcustomerList[0]['userid']; ?>">
<input type="hidden" name="loginemployeeuserId" id="loginemployeeuserId" value="<?php echo $loginuserId; ?>">
				<input type="hidden" name="customerId" id="customerId" value="<?php echo $customerId; ?>">
				<input type="hidden" name="loginuserId" id="loginuserId" value="<?php echo $loginuserId; ?>">
				</div>
	</form>
							
	</div>
<script>
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
</script>						
<?php }?>


