<style>
.errorText{
 color: red;
}
.fileoutline { width:130%;margin-bottom:10px 10px 10px;margin-right:5px;height:40px;border:1px solid #000;position:relative; }
#uploadedFile { margin-top:8px;margin-left:10px; }
.modal-footer
{
border-top:none!important;
}
.modal-header
{
border-bottom:none!important;
}
</style>
<?php   if($mastertype=='Customer') { ?> 

			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Customer</h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed" enctype="multipart/form-data">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>

					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Customer Name </label>
							<div class="col-sm-4">
							<input class="form-control" id="Customername" name="Customername" value="<?php echo $editcustomerList[0]['customername'] ?>" type="email"><div id="errorcustomername" class="errorText"></div>
							</div>
						
					</div>

					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">User Name </label>
							<div class="col-sm-4">
							<input class="form-control" id="Username" name="Username" placeholder="Email" value="<?php echo $editcustomerList[0]['username'] ?>" <?php if($editId!=""){ echo "readonly";} ?> type="text" onblur="checkUserName(this.value);"><div id="errorusername" class="errorText"></div>
							</div>
						
					</div>
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Password</label>
							<div class="col-sm-4">
							<input class="form-control" <?php if($editId!=""){ echo "readonly";} ?> id="Password" name="Password" value="<?php echo $editcustomerList[0]['password'] ?>" type="password"><div id="errorPassword" class="errorText"></div>
							</div>
						
					</div>
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-4">
							<textarea class="form-control" id="Address" name="Address"><?php echo $editcustomerList[0]['address'] ?></textarea>
							</div>
					</div>

					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Mobile no</label>
						<div class="col-sm-4">
						<input class="form-control" id="Mobile" name="Mobile" value="<?php echo $editcustomerList[0]['mobileno'] ?>" type="text"><div id="errorMobile" class="errorText"></div>
							</div>

					</div>
					
				<?php if($editId==""){ ?>
					<div class="form-group"><div class="col-sm-1"></div>
					<label class="col-sm-3 control-label">Upload Logo</label>
					<div class="col-sm-4">
					<input class="" id="uploadedFile" name="uploadedFile" value="" type="file">
						</div><div id="errorUploadlogo" class="errorText"></div>
					</div>
					
					<?php } ?>
				<input type="hidden" name="editId" id="editId" value="<?php echo $editcustomerList[0]['userid']; ?>">
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-4" align="right">
					<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					
				</form>
			</div>
 

	

<?php }  if($mastertype=='Location') { ?> 	

<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> Location</h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed" enctype="multipart/form-data">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?>
					<div class="form-group"><div class="col-sm-2"></div>
					<label class="col-sm-3 control-label">Customer</label>
					<div class="col-sm-4">
					<select id="customer" name="customer" class="form-control" >
								<option value="">Select Customer</option>
								<?php  for($i=0;$i<count($customerList);$i++){ ?>
								<option value="<?php echo $customerList[$i]['userid']; ?>" <?php if($editLocation[0]['customerid'] == $customerList[$i]['userid']) echo "selected";  ?>  ><?php echo $customerList[$i]['customername']; ?></option>

								<?php }?> 				
								</select><div id="errorjobrole"  class="errorText"></div>	
					</div>
					</div>  
					<?php } ?>
					<div class="form-group"><div class="col-sm-2"></div>
					<label class="col-sm-3 control-label">Location </label>
					<div class="col-sm-4">
					<input class="form-control" id="Location" name="Location" value="<?php echo $editLocation[0]['location']; ?>" type="text"><div id="errorLocation"  class="errorText"></div>

					</div>

					</div>  
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $editLocation[0]['zoneid']; ?>">
				</form>
<div class="modal-footer"></div>
			</div> 
			
	

<?php }  if($mastertype=='Department') { ?> 	

<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForms" name="customerForms" style="border-radius: 0px;" class="form-horizontal group-border-dashed" enctype="multipart/form-data">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?>
					<div class="form-group"><div class="col-sm-2"></div>
					<label class="col-sm-3 control-label">Customer</label>
					<div class="col-sm-4">
					<select id="customer" name="customer" class="form-control" >
								<option value="">Select Customer</option>
								<?php  for($i=0;$i<count($customerList);$i++){ ?>
								<option value="<?php echo $customerList[$i]['userid']; ?>"  <?php if($editDepartment[0]['customerid'] == $customerList[$i]['userid']) echo "selected";  ?>><?php echo $customerList[$i]['customername']; ?></option>

								<?php }?> 				
								</select><div id="errorjobrole"  class="errorText"></div>	
					</div>
					</div>  
					<?php } ?>
					<div class="form-group"><div class="col-sm-2"></div>
					<label class="col-sm-3 control-label"><?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?> </label>
					<div class="col-sm-4">
					<input class="form-control" id="department" name="department" value="<?php echo $editDepartment[0]['department']; ?>" type="text"><div id="errorLocation"  class="errorText"></div>
					</div>
					</div>  
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm('<?php echo $mastertype; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $editDepartment[0]['dprtid']; ?>">
				</form>
<div class="modal-footer"></div>
			</div> 
<?php }  if($mastertype=='BasicMaster') { ?> 	

<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForms" name="customerForms" style="border-radius: 0px;" class="form-horizontal group-border-dashed" enctype="multipart/form-data">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h5 class="text-danger">Invalid File format</h5>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?>
					<div class="form-group"><div class="col-sm-2"></div>
					<label class="col-sm-3 control-label">Customer</label>
					<div class="col-sm-4">
					<select id="customer" name="customer" class="form-control" >
								<option value="">Select Customer</option>
								<?php  for($i=0;$i<count($customerList);$i++){ ?>
								<option value="<?php echo $customerList[$i]['userid']; ?>"  <?php if($editDepartment[0]['customerid'] == $customerList[$i]['userid']) echo "selected";  ?>><?php echo $customerList[$i]['customername']; ?></option>

								<?php }?> 				
								</select><div id="errorjobrole"  class="errorText"></div>	
					</div>
					</div>  
					<?php } ?>
					<div class="form-group"><div class="col-sm-2"></div>
					<label class="col-sm-3 control-label">Upload File </label>
					<div class="col-sm-4">
					
					<input class="" id="file" name="file" value="" type="file">
					<div id="errorfile"  class="errorText"></div>
						
					</div>
						<div id="image" style="display:none">
							<div class="col-sm-1">
							<img src="<?php echo $view['assets']->getUrl('assets/img/spinner.gif')?>">
							</div>
						</div>
					</div>  
					<div class="form-group">
					<label class="col-sm-5 control-label"></label>
					<div class="col-sm-5" >
					 <button type="button" class="btn btn-warning " onclick="submitForm()" id="submit" value="submit" name="submit" >Upload</button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $editDepartment[0]['dprtid']; ?>">
				</form>
<div class="modal-footer"></div>
			</div> 
<?php  } if($mastertype=='Employee') { ?> 

			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed" enctype="multipart/form-data">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>

					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Employee Name </label>
							<div class="col-sm-4">
							<input class="form-control" id="name" name="name" value="<?php echo $editEmployeeList[0]['name'] ?>" type="email">
							</div>
						<div id="errorcustomername" class="errorText"></div>
					</div>

					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">User Name </label>
							<div class="col-sm-4">
							<input class="form-control" id="Username" name="Username" placeholder="Email" value="<?php echo $editEmployeeList[0]['username'] ?>" <?php if($editId!=""){ echo "readonly";} ?> type="text" onblur="checkUserName(this.value);">
							</div>
						<div id="errorusername" class="errorText"></div>
					</div>
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Password</label>
							<div class="col-sm-4">
							<input class="form-control" <?php if($editId!=""){ echo "readonly";} ?> id="Password" name="Password" value="<?php echo $editEmployeeList[0]['password'] ?>" type="password">
							</div>
						<div id="errorPassword" class="errorText"></div>
					</div>
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-4">
							<textarea class="form-control" id="Address" name="Address"><?php echo $editEmployeeList[0]['address'] ?></textarea>
							</div><div id="erroradd" class="errorText"></div>
					</div>
<div class="form-group "><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Employee Type</label>
<div class="col-sm-4">	
							<div class="checkbox-warning">
							<input class="styled" type="checkbox" name="userTypeId[]" value="Trainer" <?php if($editEmployeeList[0]['employeetype']=='Trainer') echo 'checked'; ?>>
							<label for="checkbox3">&nbsp; Trainer</label>
							<input class="styled" type="checkbox" name="userTypeId[]" value="Employee" <?php if($editEmployeeList[0]['employeetype']=='Trainee') echo 'checked'; ?> >
							<label for="checkbox3">&nbsp;  Trainee</label>
	</div>

						</div><div id="errorUsertype" class="errorText"></div>
					</div>
					<div class="form-group"><div class="col-sm-1"></div>
					<label class="col-sm-3 control-label">Gender</label>
						<div class="col-sm-2">
							<div class="radio-inline">
								 <input type="radio" name="gender" id="male" class="styled" value="Male" >
								<label for="checkbox3">Male</label>
	    						</div>
						</div>
								
						<div class="col-sm-2">
							<div class="radio-inline">
								 <input type="radio" name="gender" id="female" class="styled" value="Female"  >
								<label for="checkbox3">Female</label>
							</div>
						</div>

					</div> 
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Mobile no</label>
						<div class="col-sm-4">
						<input class="form-control" id="Mobile" name="Mobile" value="<?php echo $editEmployeeList[0]['mobileno'] ?>" type="text">
							</div><div id="errorMobile" class="errorText"></div>

					</div>
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Department</label>
						<div class="col-sm-4">
						<select id="department" name="department" class="form-control" >
								<option value="">Select Department</option>
								<?php  for($i=0;$i<count($DepartmentList);$i++){ ?>
								<option value="<?php echo $DepartmentList[$i]['dprtid']; ?>" <?php if($editEmployeeList[0]['dprtid']== $DepartmentList[$i]['dprtid']) echo "selected";  ?>><?php echo $DepartmentList[$i]['department']; ?></option>

								<?php }?> 				
								</select>
							</div><div id="errorDepar" class="errorText"></div>

					</div>
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Location</label>
						<div class="col-sm-4">
						<select id="location" name="location" class="form-control">
								<option value="">Select Location</option>
								<?php  for($i=0;$i<count($locationList);$i++){ ?>
								<option value="<?php echo $locationList[$i]['zoneid']; ?>" <?php if($editEmployeeList[0]['zoneid']== $locationList[$i]['zoneid']) echo "selected";  ?>><?php echo $locationList[$i]['location']; ?></option>

								<?php }?> 				
								</select><div id="errorLocation" class="errorText"></div>
							</div>

					</div>
				<?php if($editId==""){ ?>
					<div class="form-group"><div class="col-sm-1"></div>
					<label class="col-sm-3 control-label">Employee Image</label>
					<div class="col-sm-4">
					<input class="" id="uploadedFile" name="uploadedFile" value="" type="file">
						</div><div id="errorUploadlogo" class="errorText"></div>
					</div>
					
					<?php } ?>
				<input type="hidden" name="editId" id="editId" value="<?php echo $editcustomerList[0]['userid']; ?>">
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-4" align="right">
					<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>
					</div>
					
				</form>
			</div>
<?php } else if($mastertype=='TrainingBatch') { ?>

<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?> 
					<div class="form-group">
					<label class="col-sm-4 control-label">Customer </label>
					<div class="col-sm-5">
					 <select name="customer" id="customer" class="form-control" onchange="">
						<option value="">Select Customer </option>
						<?php for($i=0;$i<count($customerList);$i++) { ?>
						<option value="<?php echo $customerList[$i]['userid'];  ?>" <?php if($editbatch[0]['customerid'] == $customerList[$i]['userid']) echo "selected"; ?>><?php  echo $customerList[$i]['customername'];  ?></option>
						<?php  } ?>
					  </select></div>
					<div id="errorType" class="errorText"></div>
					</div>  
					<?php } ?>
					<div class="form-group">
					<label class="col-sm-4 control-label">Training Batch Name</label>
					<div class="col-sm-5">
					<input class="form-control" id="batchName" name="batchName" value="<?php echo $editbatch[0]['batchname']; ?>" type="text">
					</div><div id="errorMenu" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Description</label>
					<div class="col-sm-5">
					<textarea class="form-control" id="Description" name="Description"><?php echo $editbatch[0]['description']; ?></textarea>
					</div><div id="errords" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $editbatch[0]['batchid']; ?>">
				</form>

			</div> 
 <?php } else if($mastertype=='TrainingProgram') {?>

<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?> 
					<div class="form-group">
					<label class="col-sm-4 control-label">Customer </label>
					<div class="col-sm-5">
					 <select name="customer" id="customer" class="form-control" onchange="getBatchList(this.value)">
						<option value="">Select Customer </option>
						<?php for($i=0;$i<count($customerList);$i++) { ?>
						<option value="<?php echo $customerList[$i]['userid'];  ?>" <?php if($edittrainingProgram[0]['adminid'] == $customerList[$i]['userid']) echo "selected"; ?>><?php  echo $customerList[$i]['customername'];  ?></option>
						<?php  } ?>
					  </select></div>
					<div id="errorType" class="errorText"></div>
					</div>  
					<?php } ?>


					<div class="form-group">
					<label class="col-sm-4 control-label">Training Batch </label>
					<div class="col-sm-5">
					<div id="batchDiv">
					<select class="form-control" id="batchName" name="batchName">
						<option value="">Select Batch</option>
						<?php  for($i=0;$i<count($batchlist);$i++){ ?>
						<option value="<?php echo $batchlist[$i]['batchid']; ?>" <?php if($edittrainingProgram[0]['batchid']==$batchlist[$i]['batchid']) echo "selected"; ?>><?php echo $batchlist[$i]['batchname']; ?></option>
						<?php }?> 				
					</select>
					</div>
					</div><div id="errorMenu" class="errorText"></div>
					</div>

					<div class="form-group">
					<label class="col-sm-4 control-label">Program Name</label>
					<div class="col-sm-5">
					<input class="form-control" id="Programname" name="Programname" value="<?php echo $edittrainingProgram[0]['programname']; ?>" type="text">
					</div><div id="errorprg" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Description</label>
					<div class="col-sm-5">
					<textarea class="form-control" id="Description" name="Description"><?php echo $edittrainingProgram[0]['description']; ?></textarea>
					</div><div id="errords" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $edittrainingProgram[0]['prgid']; ?>">
				</form>

			</div> 

 <?php } else if($mastertype=='TrainingSchedule') {?>

<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?> 
					<div class="form-group">
					<label class="col-sm-4 control-label">Customer </label>
					<div class="col-sm-5">
					 <select name="customer" id="customer" class="form-control" onchange="getBatchList(this.value)">
						<option value="">Select Customer </option>
						<?php for($i=0;$i<count($customerList);$i++) { ?>
						<option value="<?php echo $customerList[$i]['userid'];  ?>" <?php if($edittrainingProgram[0]['adminid'] == $customerList[$i]['userid']) echo "selected"; ?>><?php  echo $customerList[$i]['customername'];  ?></option>
						<?php  } ?>
					  </select></div>
					<div id="errorType" class="errorText"></div>
					</div>  
					<?php } ?>


					<div class="form-group">
					<label class="col-sm-4 control-label">Training Batch </label>
					<div class="col-sm-5">
					<div id="batchDiv">
					<select class="form-control" id="batchName" name="batchName" onchange="getTrainingProgram(this.value);">
						<option value="">Select Batch</option>
						<?php  for($i=0;$i<count($batchlist);$i++){ ?>
						<option value="<?php echo $batchlist[$i]['batchid']; ?>" <?php if($edittrainingProgram[0]['batchid']==$batchlist[$i]['batchid']) echo "selected"; ?>><?php echo $batchlist[$i]['batchname']; ?></option>
						<?php }?> 				
					</select>
					</div>
					</div><div id="errorMenu" class="errorText"></div>
					</div>

					<div class="form-group">
					<label class="col-sm-4 control-label">Program Name</label>
					<div class="col-sm-5"><div id="trainingProgramDiv">
						<select class="form-control" id="ProgramName" name="ProgramName" >
						<option value="">Select Program</option>
										
					</select>
					</div>
					</div><div id="errorprg" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Module Category</label>
					<div class="col-sm-5">
					<select class="form-control" id="ModuleCategory" name="ModuleCategory" >
						<option value="">Select Module Category</option>
						<?php  for($i=0;$i<count($moduleCateList);$i++){ ?>
						<option value="<?php echo $moduleCateList[$i]['cateid']; ?>" <?php if($edittrainingProgram[0]['batchid']==$moduleCateList[$i]['cateid']) echo "selected"; ?>><?php echo $moduleCateList[$i]['modulecategory']; ?></option>
						<?php }?> 				
					</select>
					</div><div id="errordepart" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Trainer Name</label>
					<div class="col-sm-5"><div id="ExistEmployeeDiv">
					<input type="text" id="Trainername" name="Trainername" class="form-control">
					</div></div><div id="errortr" class="errorText"></div>
					<div class="checkbox-warning">	
					<input class="styled" type="checkbox" name="checkAll" id="checkAll" onclick="ExistEmployee(this.id)">
					<label for="checkbox3">&nbsp; Exist Employee</label></div>
                                    
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Date </label>
					<div class="col-sm-5">
					<div data-min-view="2" data-date-format="yyyy-mm-dd" id="datevalue" class="input-group date datetime ">
                                                <input size="16" id="date" name="date" readonly="readonly" class="form-control" type="text" value=""><span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>
                                            </div>
					</div><div id="errordt" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Department</label>
					<div class="col-sm-5">
					<select class="form-control" id="Department" name="Department" onchange="getEmployeeList(this.value);">
						<option value="">Select Department</option>
						<?php  for($i=0;$i<count($departList);$i++){ ?>
						<option value="<?php echo $departList[$i]['dprtid']; ?>" <?php if($edittrainingProgram[0]['batchid']==$departList[$i]['dprtid']) echo "selected"; ?>><?php echo $departList[$i]['department']; ?></option>
						<?php }?> 				
					</select>
					</div><div id="errordepart" class="errorText"></div>
					</div>
					
					<div class="form-group">
					<label class="col-sm-4 control-label">Employees</label>
					<div class="col-sm-5"><div id="employeeDiv"> 
					<select multiple size="3" class="form-control" name="employeelist[]" id="employeelist" >

					  </select></div>
					</div><div id="errorMenu" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $edittrainingProgram[0]['prgid']; ?>">
				</form>

			</div> 
<script>
$("#datevalue").datetimepicker({format: 'yyyy-mm-dd',
     autoclose: true
});
</script>
<?php } else if($mastertype=='ModuleCategory') { ?>

<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForms" name="customerForms" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?> 
					<div class="form-group">
					<label class="col-sm-4 control-label">Customer </label>
					<div class="col-sm-5">
					 <select name="customer" id="customer" class="form-control" onchange="">
						<option value="">Select Customer </option>
						<?php for($i=0;$i<count($customerList);$i++) { ?>
						<option value="<?php echo $customerList[$i]['userid'];  ?>" <?php if($editModuleCategory[0]['customerid'] == $customerList[$i]['userid']) echo "selected"; ?>><?php  echo $customerList[$i]['customername'];  ?></option>
						<?php  } ?>
					  </select></div>
					<div id="errorType" class="errorText"></div>
					</div>  
					<?php } ?>
					<div class="form-group">
					<label class="col-sm-4 control-label">Trainer</label>
					<div class="col-sm-5">
					 <select name="Trainer" id="Trainer" class="form-control" onchange="">
						<option value="">Select Trainer </option>
						<?php for($i=0;$i<count($TrainerList);$i++) { ?>
						<option value="<?php echo $TrainerList[$i]['userid'];  ?>" ><?php  echo $TrainerList[$i]['name'];  ?></option>
						<?php  } ?>
					  </select><div id="errorTrainer" class="errorText"></div></div>
					
					</div>  

					<div class="form-group">
					<label class="col-sm-4 control-label">Module Category</label>
					<div class="col-sm-5">
					<input class="form-control" id="Category" name="Category" value="<?php echo $editModuleCategory[0]['modulecategory']; ?>" type="text"><div id="errorMenu" class="errorText"></div>
					</div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Module Description</label>
					<div class="col-sm-5">
					<textarea class="form-control" id="Description" name="Description"><?php echo $editModuleCategory[0]['description']; ?></textarea>
					</div><div id="errordes" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm('<?php echo $mastertype; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $editModuleCategory[0]['cateid']; ?>">
				</form>

			</div> 
<?php } else if($mastertype=='ModuleSubCategory') { ?>

<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForms" name="customerForms" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?> 
					<div class="form-group">
					<label class="col-sm-4 control-label">Customer </label>
					<div class="col-sm-5">
					 <select name="customer" id="customer" class="form-control" onchange="">
						<option value="">Select Customer </option>
						<?php for($i=0;$i<count($customerList);$i++) { ?>
						<option value="<?php echo $customerList[$i]['userid'];  ?>" <?php if($editModuleCategory[0]['customerid'] == $customerList[$i]['userid']) echo "selected"; ?>><?php  echo $customerList[$i]['customername'];  ?></option>
						<?php  } ?>
					  </select></div>
					<div id="errorType" class="errorText"></div>
					</div>  
					<?php } ?>
					<div class="form-group">
					<label class="col-sm-4 control-label">Trainer</label>
					<div class="col-sm-5">
					 <select name="Trainer" id="Trainer" class="form-control" onchange="getCategoryList(this.value);">
						<option value="">Select Trainer </option>
						<?php for($i=0;$i<count($TrainerList);$i++) { ?>
						<option value="<?php echo $TrainerList[$i]['userid'];  ?>" ><?php  echo $TrainerList[$i]['name'];  ?></option>
						<?php  } ?>
					  </select><div id="errorTrainer" class="errorText"></div></div>
					
					</div>  


					<div class="form-group">
					<label class="col-sm-4 control-label">Module Category</label>
					<div class="col-sm-5">
					<div id="CategoryDiv">
					 <select name="CategoryId" id="CategoryId" class="form-control" onchange="">
						<option value="">Select Category </option>
						<?php for($i=0;$i<count($Categorylist);$i++) { ?>
						<option value="<?php echo $Categorylist[$i]['cateid'];  ?>" ><?php  echo $Categorylist[$i]['modulecategory'];  ?></option>
						<?php  } ?>
					  </select>
					</div></div><div id="errorMenu" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Module Sub Category</label>
					<div class="col-sm-5">
					<input class="form-control" id="SubCategory" name="SubCategory" value="<?php echo $editModuleCategory[0]['modulecategory']; ?>" type="text"><div id="errorSubCategory" class="errorText"></div>
					</div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Module Description</label>
					<div class="col-sm-5">
					<textarea class="form-control" id="Description" name="Description"><?php echo $editModuleCategory[0]['description']; ?></textarea>
					</div><div id="errordes" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm('<?php echo $mastertype; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $editModuleCategory[0]['cateid']; ?>">
				</form>

			</div> 
<script>
function getCategoryList(trainerId){
	var type="getCategoryList";
	$.get( "getFunction",{ type : type,trainerId : trainerId},function(data) {
	$('#CategoryId').html(data);
	});
}
</script>
<?php } else if($mastertype=='Module') { ?>
<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit Content"; } else { echo "Add Content"; }?> </h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForms" name="customerForms" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?> 
					<div class="form-group">
					<label class="col-sm-4 control-label">Customer </label>
					<div class="col-sm-5">
					 <select name="customer" id="customer" class="form-control" onchange="">
						<option value="">Select Customer </option>
						<?php for($i=0;$i<count($customerList);$i++) { ?>
						<option value="<?php echo $customerList[$i]['userid'];  ?>" <?php if($editModuleCategory[0]['customerid'] == $customerList[$i]['userid']) echo "selected"; ?>><?php  echo $customerList[$i]['customername'];  ?></option>
						<?php  } ?>
					  </select></div>
					<div id="errorType" class="errorText"></div>
					</div>  
					<?php } ?>
						<div class="form-group">
					<label class="col-sm-4 control-label">Trainer</label>
					<div class="col-sm-5">
					 <select name="Trainer" id="Trainer" class="form-control" onchange="getCategoryList(this.value);">
						<option value="">Select Trainer </option>
						<?php for($i=0;$i<count($TrainerList);$i++) { ?>
						<option value="<?php echo $TrainerList[$i]['userid'];  ?>" ><?php  echo $TrainerList[$i]['name'];  ?></option>
						<?php  } ?>
					  </select><div id="errorTrainer" class="errorText"></div></div>
					
					</div>  

					<div class="form-group">
					<label class="col-sm-4 control-label">Module Category</label>
					<div class="col-sm-5">
					<div id="CategoryDive">
					 <select name="Category" id="Category" class="form-control" onchange="getsubCategory(this.value)">
						<option value="">Select Category </option>
						
					  </select>
					</div>
					</div><div id="errorMenu" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Module Sub Category</label>
					<div class="col-sm-5">
					<div id="subCategoryDiv"> 
					 <select name="SubCategory" id="SubCategory" class="form-control" >
						<option value="">Select Category </option>
					 </select>
					</div>
					</div><div id="errorMenu" class="errorText"></div>
					</div>


					<div class="form-group">
					<label class="col-sm-4 control-label">Content Name</label>
					<div class="col-sm-5">
					<input type="text" id="ModuleName" name="ModuleName" class="form-control" value="<?php echo $editmodulefilelist[0]['modulename']; ?>"><div id="errorModuleName" class="errorText"></div>
					</div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Content Description</label>
					<div class="col-sm-5">
					<textarea class="form-control" id="Description" name="Description"><?php echo $editmodulefilelist[0]['description']; ?></textarea>
					</div><div id="errordes" class="errorText"></div>
					</div>
					<div class="form-group"><div class="col-sm-1"></div>
					<label class="col-sm-3 control-label">Upload Files</label>
					<div class="col-sm-5">

						<input class="" id="uploadedFile" name="uploadedFile" value="" type="file">
					<div id="erroruploadedFile" class="errorText"></div>
					<div class="col-sm-10">
					<div class="progress" id="progress" style="display:none">
				            <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%">0%</div>

				        </div></div>
					
					<div id="fileCancel">
					<img style="width:20px;height:20px;display:none" id="cancel_all"  src="<?php echo $view['assets']->getUrl('assets/img/Remove.png')?>">					
					</div>
					
					</div>
					</div>
					
<input type="hidden" name="editId" id="editId" value="<?php echo $editmodulefilelist[0]['moduleid']; ?>">
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm('<?php echo $mastertype; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					</div>
					</div>

				</form>

			</div> 
<script>
function getCategoryList(trainerId){
	var type="getCategoryList";
	$.get( "getFunction",{ type : type,trainerId : trainerId},function(data) {
	$('#CategoryDive').html(data);
	});
}
function getsubCategory(catid){
	var type="getsubCategory";
	$.get( "getFunction",{ type : type,catid : catid},function(data) {
	$('#subCategoryDiv').html(data);
	});
}
</script>

			<?php } else if($mastertype=='MapModule') {?>

				<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>
					<?php if($loginExeType==1){ ?> 
					<div class="form-group">
					<label class="col-sm-4 control-label">Customer </label>
					<div class="col-sm-5">
					 <select name="customer" id="customer" class="form-control" onchange="getBatchList(this.value)">
						<option value="">Select Customer </option>
						<?php for($i=0;$i<count($customerList);$i++) { ?>
						<option value="<?php echo $customerList[$i]['userid'];  ?>" <?php if($edittrainingProgram[0]['adminid'] == $customerList[$i]['userid']) echo "selected"; ?>><?php  echo $customerList[$i]['customername'];  ?></option>
						<?php  } ?>
					  </select></div>
					<div id="errorType" class="errorText"></div>
					</div>  
					<?php } ?>


					<div class="form-group">
					<label class="col-sm-4 control-label">Module Category</label>
					<div class="col-sm-5">
					 <select name="Category" id="Category" class="form-control" onchange="">
						<option value="">Select Category </option>
						<?php for($i=0;$i<count($ModuleCategory);$i++) { ?>
						<option value="<?php echo $ModuleCategory[$i]['cateid'];  ?>" <?php if($editmodulefilelist[0]['modulecategory'] == $ModuleCategory[$i]['cateid']) echo "selected"; ?>><?php  echo $ModuleCategory[$i]['modulecategory'];  ?></option>
						<?php  } ?>
					  </select>
					</div><div id="errorMenu" class="errorText"></div>
					</div>

					<div class="form-group">
					<label class="col-sm-4 control-label">Department</label>
					<div class="col-sm-5">
					<select class="form-control" id="Department" name="Department" onchange="getEmployeeList(this.value);">
						<option value="">Select Department</option>
						<?php  for($i=0;$i<count($departList);$i++){ ?>
						<option value="<?php echo $departList[$i]['dprtid']; ?>" <?php if($edittrainingProgram[0]['batchid']==$departList[$i]['dprtid']) echo "selected"; ?>><?php echo $departList[$i]['department']; ?></option>
						<?php }?> 				
					</select>
					</div><div id="errordes" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Employees</label>
					<div class="col-sm-5"><div id="employeeDiv"> 
					<select multiple size="3" class="form-control" name="employeelist[]" id="employeelist" >

					  </select></div>
					</div><div id="errorMenu" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Description</label>
					<div class="col-sm-5">
					<textarea class="form-control" id="Description" name="Description"><?php echo $edittrainingProgram[0]['description']; ?></textarea>
					</div><div id="errords" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $edittrainingProgram[0]['prgid']; ?>">
				</form>

			</div> 
<?php } else if($mastertype=='TrainerNew') { ?>

<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" align="center"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> Trainer</h4>
				</div>
							       <div class="modal-body form">
				<div class="modal-body form">
				<form action="" id="batchForm" name="batchForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<label class="control-label"><h5 class="text-primary"><strong>Successfully updated.</strong></h5></label>
					</div>
					
					
				<div align="center" style="display:none;" id="insertSuccess"> 
					<label class="control-label"><h5 class="text-primary"><strong>Successfully inserted.</strong></h5></label>
					</div>
					<?php if($loginExeType==1){ ?> 
					<div class="form-group">
					<label class="col-sm-4 control-label">Customer </label>
					<div class="col-sm-5">
					 <select name="customerid" id="customerid" class="form-control" onchange="">
						<option value="">Select Customer </option>
						<?php for($i=0;$i<count($customerList);$i++) { ?>
						<option value="<?php echo $customerList[$i]['userid'];  ?>" <?php if($editbatch[0]['customerid'] == $customerList[$i]['userid']) echo "selected"; ?>><?php  echo $customerList[$i]['customername'];  ?></option>
						<?php  } ?>
					  </select><div id="errorType" class="errorText"></div></div>
					
					</div>  
					<?php } ?>
					<?php if($loginExeType==2){ ?>
					<div class="form-group">
					<label class="col-sm-4 control-label">Company</label>
					<div class="col-sm-5">
					<select id="customer1" name="customer" class="form-control" onchange="">
								<option value="">Select Company</option>
								<?php  for($i=0;$i<count($companyList);$i++){ ?>
								<option value="<?php echo $companyList[$i]['userid']; ?>"  <?php if($editDepartment[0]['customerid'] == $companyList[$i]['userid']) echo "selected";  ?>><?php echo $companyList[$i]['customername']; ?></option>

								<?php }?> 				
								</select><div id="errorcustomer1"  class="errorText"></div>	
					</div>
					</div>  
					<?php } ?>
					<div class="form-group">
					<label class="col-sm-4 control-label">Add Trainer * </label>
					<div class="col-sm-5">
					<input class="form-control" id="batchName" name="batchName" value="<?php echo $editbatch[0]['batchname']; ?>" type="text"><div id="errorMenu" class="errorText"></div>
					</div>
					</div>
					
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<img id="Loading" style="display:none" src="<?php echo $view['assets']->getUrl('assets/spinner.gif')?>">	
					<button class="btn btn-success" type="button" id="submit" name="submit"  value="homemenu"  onclick="submitForm('<?php echo $mastertype; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $editbatch[0]['batchid']; ?>">
				</form>
			</div>

			</div> 
			<script>
	document.getElementById('batchName').addEventListener('keypress', function(event) {
	if (event.keyCode == 13) {
	event.preventDefault();
	}
	});
	
	</script> 

<?php } else if($mastertype=='resource') { ?>

<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" align="center"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> Resource</h4>
				</div>
							       <div class="modal-body form">
				<form action="" id="batchForm" name="batchForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<label class="control-label"><h5 class="text-primary"><strong>Successfully updated.</strong></h5></label>
					</div>
					
					
				<div align="center" style="display:none;" id="insertSuccess"> 
					<label class="control-label"><h5 class="text-primary"><strong>Successfully inserted.</strong></h5></label>
					</div>
					<?php if($loginExeType==1){ ?> 
					<div class="form-group">
					<label class="col-sm-4 control-label">Customer </label>
					<div class="col-sm-5">
					 <select name="customerid" id="customerid" class="form-control" onchange="">
						<option value="">Select Customer </option>
						<?php for($i=0;$i<count($customerList);$i++) { ?>
						<option value="<?php echo $customerList[$i]['userid'];  ?>" <?php if($editbatch[0]['customerid'] == $customerList[$i]['userid']) echo "selected"; ?>><?php  echo $customerList[$i]['customername'];  ?></option>
						<?php  } ?>
					  </select><div id="errorType" class="errorText"></div></div>
					
					</div>  
					<?php } ?>
					<?php if($loginExeType==2){ ?>
					<div class="form-group">
					<label class="col-sm-4 control-label">Company</label>
					<div class="col-sm-5">
					<select id="customer1" name="customer" class="form-control" onchange="">
								<option value="">Select Company</option>
								<?php  for($i=0;$i<count($companyList);$i++){ ?>
								<option value="<?php echo $companyList[$i]['userid']; ?>"  <?php if($editDepartment[0]['customerid'] == $companyList[$i]['userid']) echo "selected";  ?>><?php echo $companyList[$i]['customername']; ?></option>

								<?php }?> 				
								</select><div id="errorcustomer1"  class="errorText"></div>	
					</div>
					</div>  
					<?php } ?>
					<div class="form-group">
					<label class="col-sm-4 control-label">Add resource * </label>
					<div class="col-sm-5">
					<input class="form-control" id="batchName" name="batchName" value="<?php echo $editbatch[0]['batchname']; ?>" type="text"><div id="errorMenu" class="errorText"></div>
					</div>
					</div>
					
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
					<img id="Loading" style="display:none" src="<?php echo $view['assets']->getUrl('assets/spinner.gif')?>">	
					<button class="btn btn-success" type="button" id="submit" name="submit"  value="homemenu"  onclick="submitForm('<?php echo $mastertype; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $editbatch[0]['batchid']; ?>">
				</form>
			</div>

			</div> 
			<script>
	document.getElementById('batchName').addEventListener('keypress', function(event) {
	if (event.keyCode == 13) {
	event.preventDefault();
	}
	});
	
	</script>

<?php }  if($mastertype=='loademployeelist') { ?> 	

				<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Mapped Trainee List</h4>
				</div>
				<div class="form-group">

					<?php for($j=0;$j<count($getemployeevalue);$j++){ ?>
					<div align="center"><label class="control-label"><?php echo $getemployeevalue[$j]['name']." Chorus id :".$getemployeevalue[$j]['chorusid']." GId : ".$getemployeevalue[$j]['gid']; ?></label>		
					<span id="dismiss" class="dismiss" style="color:#EB7A75; font-weight:bold; cursor:pointer;" onclick="deleteFunctionemplooyee(<?php  echo $getemployeevalue[0]['userid']; ?>)">
					<i class="fa fa-trash-o" style="color:#EB7A75;" aria-hidden="true"></i>
					</span></div>

					<?php } ?>
						
				</div>	
<div class="modal-footer"></div>	
			</div>	
			
		
	

<?php }  else if($mastertype=='updatescheduledate') { ?> 	

				<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Change Date</h4>
				</div>
				<div class="form-group">
				<div class="modal-body form">
				<form action="" id="updatedate<?php echo $id; ?>" name="updatedate<?php echo $id; ?>">
			<div id="calendershow<?php echo $id; ?>"  class="calendershow"> 
			<div class="col-sm-3"></div><div class="col-sm-5">
			<fieldset><div class="controls">
                        <div class="input-prepend input-group"><span class="add-on input-group-addon primary"><span class="glyphicon glyphicon-th"></span></span>
                        <input id="reservation"  name="reservation<?php echo $id; ?>" value="" placeholder="" class="form-control" type="text">
                        </div>
                        </div>
			</fieldset>
			</div>
			<div class="col-sm-4"></div>
			<div class="col-sm-4" >	<input type="hidden" name="subcatid<?php echo $id; ?>" id="subcatid<?php echo $id; ?>" value="<?php echo $subcatid;?>">
			<button align="center" class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="updatescheduledate('updatedatepicker',<?php echo $id; ?>);">Submit</button>
			</div>
			</div>
			</form>	
				</div>	
<div class="modal-footer"></div>
			</div>	
			
		
	

<?php } ?>



