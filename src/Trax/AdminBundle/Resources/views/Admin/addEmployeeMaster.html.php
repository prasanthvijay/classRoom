<?php $view->extend('::Backendheader.html.php');  ?>
<style>
.fileoutline { width:100%;margin-bottom:10px 10px 10px;margin-right:5px;height:40px;border:1px solid #000;position:relative; }
#uploadedFile { margin-top:8px;margin-left:10px; }
</style>
<br><div id="cl-wrapper" class="container-fluid ">
		<div class="row">
                    <div class="col-md-12">
                        <div class="block-flat">
                            <div class="header">
                                <h3><?php if($editId!=""){ echo "Edit"; } else{ echo "Add"; } ?> Trainee Master</h3></div>
<a href="<?php echo $view['assets']->getUrl('manage/adminMaster?master=Employee'); ?>" class="btn btn-primary" >Trainee List</a>
			
			<div class="container">
<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed" enctype="multipart/form-data">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h4>Successfully Inserted...</h4>
					</div>
					<?php if($editId!=""){ ?>
					<div class="form-group">	
					<div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Sure Name </label>
							<div class="col-sm-4">
							<input class="form-control" placeholder='Trainee Name' id="surename" name="surename" value="<?php echo $editEmployeeList[0]['surename'] ?>" type="text"><div id="errorEmployeename" class="errorText"></div>

							</div>
						
					</div>

					<?php } ?>
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Trainee Name </label>
							<div class="col-sm-4">
							<input class="form-control" placeholder='Trainee Name' id="Employeename" name="Employeename" value="<?php echo $editEmployeeList[0]['name'] ?>" type="text" <?php if($editId==""){ ?>onblur="employeeDetils(this.value);" <?php } ?>>
							<div style="color:red" id="errorEmployeename" class="errorText"></div>
							
							</div>
						
					</div>

					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">User Name </label>
							<div class="col-sm-4">
							<input class="form-control" id="gid" name="gid" placeholder="GID" value="<?php echo $editEmployeeList[0]['username'] ?>" <?php if($editId!=""){ echo "readonly";} ?> type="text" onblur="checkUserName(this.value);"><div id="errorUsername" class="errorText"></div>
							</div>
						
					</div>
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Password / Chorus Id</label>
							<div class="col-sm-4">
							<input class="form-control" placeholder='chorus Id' id="Password" name="Password" value="<?php echo $myownclass->encryptor('decrypt',$editEmployeeList[0]['password']); ?>" type="text"><div id="errorPassword" class="errorText"></div>
							</div>
						
					</div>
					<!--<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-4">
							<textarea class="form-control" id="Address" placeholder='Address' name="Address"><?php echo $editEmployeeList[0]['address'] ?></textarea><div id="errorAddress" class="errorText"></div>
							</div>
					</div>-->

<div class="form-group"><div class="col-sm-1"></div>
					<label class="col-sm-3 control-label">Trainer Type</label>
						<div class="col-sm-1">
							<div class="radio-inline">
								 <input type="radio" name="userTypeId" id="defaulttrainer" class="styled" value="Trainer" <?php if($editEmployeeList[0]['employeetype']=="Trainer"){ echo "checked"; } ?>>
								<label for="checkbox3">Trainer</label>
	    						</div>
						</div>
								
						<div class="col-sm-2">
							<div class="radio-inline">
								 <input type="radio" name="userTypeId" id="Guesttrainer" class="styled" value="Guest Trainer" <?php if($editEmployeeList[0]['employeetype']=="Guest Trainer"){ echo "checked"; } ?> >
								<label for="checkbox3">Guest Trainer</label><div id="errordefaulttrainer" class="errorText"></div>
							</div>
						</div>
						<?php if($editId!=""){ ?>
						<div class="col-sm-2">
							<div class="radio-inline">
								 <input type="radio" name="userTypeId" id="Trainee" class="styled" 						<?php if($editEmployeeList[0]['employeetype']=="Trainee"){ echo "checked"; } ?> value="Trainee"  >
								<label for="checkbox3">Trainee</label>
							</div>
						</div>
						<?php } ?>
						<div class="col-sm-2"><a href="javascript:void(0)" onclick="removeuserType()" class="control-label">Reset</a></div>

					</div> 
					<div class="form-group"><div class="col-sm-1"></div>
					<label class="col-sm-3 control-label">Gender</label>
						<div class="col-sm-1">
							<div class="radio-inline">
								 <input type="radio" name="gender" id="male" class="styled" value="Male" <?php if($editEmployeeList[0]['gender']=="Male"){ echo "checked"; } ?> >
								<label for="checkbox3">Male</label>
	    						</div>
						</div>
								
						<div class="col-sm-2">
							<div class="radio-inline">
								 <input type="radio" name="gender" id="female" class="styled" value="Female"  <?php if($editEmployeeList[0]['gender']=="Female"){ echo "checked"; } ?>>
								<label for="checkbox3">Female</label><div id="errormale" class="errorText"></div>
							</div>
						</div><div id="errorgender" class="errorText"></div>

					</div> 
					<div class="form-group"><div class="col-sm-1"></div>
						<label class="col-sm-3 control-label">Department</label>
						<div class="col-sm-4">
						<select id="department" name="department" class="form-control" >
								<option value="">Select Department</option>
								<?php  for($i=0;$i<count($DepartmentList);$i++){ ?>
								<option value="<?php echo $DepartmentList[$i]['dprtid']; ?>" <?php if($editEmployeeList[0]['dprtid']== $DepartmentList[$i]['dprtid']) echo "selected";  ?>><?php echo $DepartmentList[$i]['department']; ?></option>

								<?php }?> 				
								</select><div id="errordepartment" class="errorText"></div>
							</div>

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
				
				<input type="hidden" name="editId" id="editId" value="<?php echo $editEmployeeList[0]['userid']; ?>">
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
	
					<div class="col-sm-4" align ="right">
					<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>
<div id="image" style="display:none">
<div class="col-sm-1 "  >
					<img src="<?php echo $view['assets']->getUrl('assets/img/spinner.gif')?>">
						</div></div>
					</div>
					
				</form>	
					
			</div>
		    </div>
		</div>

	</div>
	
	
<script>
var xhr;
var customerId="<?php echo $loginuserId; ?>";
$('input[name="Employeename"]').autoComplete({
    source: function(term, response){
        try { xhr.abort(); } catch(e){}
        xhr = $.getJSON('getFunction', { employeename: term,customerId:customerId,type:"employeeDetails" }, function(data){ response(data); });
    }
});

function employeeDetils(employeeId){
var type="EmployeefullDetails";
$.get('getFunction', { employeeId: employeeId,customerId:customerId,type:type }, function(data){ 	
			var result=JSON.parse(data);
			if(result!=""){
				$('#Password').val(result[0]['chorusid']);
				$('#gid').val(result[0]['gid']);
				if(result[0]['gender']=='Male'){
					$('#male').attr('checked', true); 
				}else if(result[0]['gender']=='Female') {	
					$('#female').attr('checked', true);
				}				
				$("#department").val(result[0]['department']);
				$("#location").val(result[0]['location']);
			}
				
 });

} 
function removeuserType(){
	$('#defaulttrainer').attr('checked', false); // Checks it
	$('#Guesttrainer').attr('checked', false);
} 
function checkUserName(username){
			var type="checkUserName";
			$.get( "getFunction",{ type : type,username : username},function(data) {

				var result=JSON.parse(data);
				if(result!=""){
					$('#errorUsername').html("User Already Exists..!");
					$('#gid').focus();
				}
				else{
					$('#errorUsername').html("");
				}
					
  			});
}
function submitForm() {

			var Employeename=$('#Employeename').val();
			if(Employeename=="")
			{
			$('#errorEmployeename').html("Please enter the  Trainee Name");
			document.getElementById('Employeename').focus();
			return false; 
			}
			else
			{
			$('#errorEmployeename').html(" ");
			}
			var gid=$('#gid').val();
			if(gid=="")
			{
			$('#errorUsername').html("Please enter the  User Name");
			document.getElementById('gid').focus();
			return false; 
			}
			else
			{
			$('#errorUsername').html(" ");
			}

			var Password=$('#Password').val();
			if(Password=="")
			{
			$('#errorPassword').html("Please enter the  Password");
			document.getElementById('Password').focus();
			return false; 
			}
			else
			{
			$('#errorPassword').html(" ");
			}
	
			if($('input[name=gender]:checked').length<=0)
					{
					$('#errorgender').html("Please Select the  gender");
					document.getElementById('gender').focus();
					return false; 
					}
					else
					{
					$('#errorgender').html(" ");
					}

		var department=$('#department').val();
			if(department=="")
			{
			$('#errordepartment').html("Please enter the  department");
			document.getElementById('department').focus();
			return false; 
			}
			else
			{
			$('#errordepartment').html(" ");
			}

			var location=$('#location').val();
			if(location=="")
			{
			$('#errorLocation').html("Please enter the  Location");
			document.getElementById('location').focus();
			return false; 
			}
			else
			{
			$('#errorLocation').html(" ");
			}
			

	$('#errorcustomername').html("");
				 			
			var editId=$('#editId').val();
				 	
			/*var filePost = new FormData(document.getElementById('customerForm'));
   			$('#image').show();
			$.ajax({
			url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type=Employee",
			type: "GET",
			data: filePost,
			processData: false,
			contentType: false,
			success: function(response) {
   			$('#image').hide();
					$('#customerForm')[0].reset();
					$("#insertSuccess").show();
					}
				

			});*/

		$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type=Employee", $( "#customerForm" ).serialize(),function() {

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
</script>
	

