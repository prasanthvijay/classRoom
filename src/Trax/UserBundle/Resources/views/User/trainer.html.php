<?php 
				$view->extend('::headernew.html.php'); 
?>
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
<input class="form-control" id="Employeename" name="Employeename"  value="<?php echo $editEmployeeList[0]['employeename'] ?>" type="email" onblur="employeeDetils(this.value);"><div id="errorEmployeename" style="color:red"></div>
									<label for="regular1">Employee Name</label>
								</div>
								<div class="form-group">
<input class="form-control" id="Username" name="Username" placeholder="Email" value="<?php echo $editEmployeeList[0]['username'] ?>" <?php if($editId!=""){ echo "readonly";} ?> type="text" onblur="checkUserName(this.value);"><div id="errorUsername" style="color:red"></div>
									<label for="regular1">User Name <span class="text-danger" id="errorusername"></span></label>
								</div>
<div class="form-group">
<input class="form-control" <?php if($editId!=""){ echo "readonly";} ?> id="chorusId" name="chorusId" value="<?php echo $editEmployeeList[0]['password'] ?>" type="text"><div id="errorchorusId" style="color:red"></div>
									<label for="password1">Choruse Id</label>
								</div>
								<div class="form-group">
<input class="form-control" <?php if($editId!=""){ echo "readonly";} ?> id="Password" name="Password" value="<?php echo $editEmployeeList[0]['password'] ?>" type="text">
									<label for="password1">Password</label><div id="errorPassword" style="color:red"></div>
								</div>
								<div class="form-group">
						<textarea class="form-control" id="Address" name="Address"><?php echo $editEmployeeList[0]['address'] ?></textarea>
									<div id="errorAddress" style="color:red"></div><label for="placeholder1">Address</label>
								</div>
								<div class="form-group">
									<div class="radio radio-styled">
											<label>
												<input id="genderMale" name="gender" value="Male" checked="checked" type="radio">
												<span>Male</span>
											</label>
										</div>
										<div class="radio radio-styled">
											<label>
												<input id="genderFemale" name="gender" value="Female" type="radio">
												<span>Female</span>
											</label><div id="errorgender" style="color:red"></div>
										</div>
							<label for="help1">Gender</label>
								</div>
																
								<div class="form-group">
									<select id="department" name="department" class="form-control" >
								<option value="">Select Department</option>
								<?php  for($i=0;$i<count($DepartmentList);$i++){ ?>
								<option value="<?php echo $DepartmentList[$i]['dprtid']; ?>" <?php if($editEmployeeList[0]['dprtid']== $DepartmentList[$i]['dprtid']) echo "selected";  ?>><?php echo $DepartmentList[$i]['department']; ?></option>

								<?php }?> 				
								</select><div id="errordepartment" style="color:red"></div>
									<label for="select1">Select Department</label>
								</div>
								<div class="form-group">
									<select id="location" name="location" class="form-control">
								<option value="">Select Location</option>
								<?php  for($i=0;$i<count($LocationList);$i++){ ?>
								<option value="<?php echo $LocationList[$i]['zoneid']; ?>" ><?php echo $LocationList[$i]['location']; ?></option>

								<?php }?> 				
								</select><div id="errorlocation" style="color:red"></div>
									<label for="select1">Select Location</label>
								</div>
								<div class="form-group">
									<div class="fileoutline"><input class="" id="uploadedFile" name="uploadedFile" value="" type="file"><div id="erroruploadedFile" style="color:red"></div></div>
									<label for="textarea1">Employee Image</label>
								</div>
								
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
$.getJSON('manage/getFunction', { employeeId: employeeId,customerId:customerId,type:type }, function(data){ 

$('#Username').val(data[1]);
$('#chorusId').val(data[0]);
$('#Password').val(data[0]);
		
 });

} 
function submitForm() {


	$('#errorMobile').html("");

	var editId=$('#editId').val();
		var filePost = new FormData(document.getElementById('customerForm'));
		
	var Employeename = document.getElementById('Employeename').value;
	if (Employeename == "")
	{
	$('#errorEmployeename').html("Please enter Employee Name");
	document.getElementById('Employeename').focus();
	return false;
	}
        else
         { 
 	$('#errorEmployeename').html(" ");
         }

	var Username = document.getElementById('Username').value;
	if (Username == "")
	{
	$('#errorUsername').html("Please enter Username Name");
	document.getElementById('Username').focus();
	return false;
	}

	var atpos = Username.indexOf("@");
	var dotpos = Username.lastIndexOf(".");

	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=Username.length) 
	{
	$('#errorUsername').html("Please enter a valid Email address");
	document.getElementById('Username').focus();
	return false;
	}
	else
	{
	$('#errorUsername').html("");
	}		
	var chorusId = document.getElementById('chorusId').value;
	if (chorusId=="")
	{	
	$('#errorchorusId').html("Please enter choruse 	Id");
	document.getElementById('chorusId').focus();
	return false; 
	}
	else
	{
	$('#errorchorusId').html("");
	}
      

	var Password = document.getElementById('Password').value;
	if (Password == "")
	{
	$('#errorPassword').html("Please enter Password");
	document.getElementById('Password').focus();
	return false;
	}
        else
         { 
 	$('#errorPassword').html(" ");
         }



	var Address = document.getElementById('Address').value;
	if (Address == "")
	{
	$('#errorAddress').html("Please enter Address");
	document.getElementById('Address').focus();
	return false;
	}
         else
         { 
 	$('#errorAddress').html(" ");
         }


	var checkboxmale = $('#genderMale').is(':checked');
	var checkboxfemale = $('#gendermale').is(':checked');
	if((checkboxmale==false)&&(checkboxfemale==false))
	{
		$('#errorgender').html("Please Select Gender");
		document.getElementById('genderMale').focus();
		return false;
	}  

	else
	{
	 $('#errorgender').html("");
	}

	var department = document.getElementById('department').value;
	if (department == "")
	{
	$('#errordepartment').html("Please select Department");
	document.getElementById('department').focus();
	return false;
	}
        else
         { 
 	$('#errordepartment').html(" ");
         }

	var location = document.getElementById('location').value;
	if (location == "")
	{
	$('#errorlocation').html("Please select Location");
	document.getElementById('location').focus();
	return false;
	}
	
     else
         { 
 	$('#errorlocation').html(" ");
         }
	var location = document.getElementById('uploadedFile').value;
     if (location == "")
	{
	$('#erroruploadedFile').html("Please upload Image");
	document.getElementById('uploadedFile').focus();
	return false;
	}
	
     else
         { 
 	$('#erroruploadedFile').html(" ");
         }

	
	$.ajax({
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


	});
	/*$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type=Employee&val=1", $( "#customerForm" ).serialize(),function() {

					$('#customerForm')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForm')[0].reset();	
					$('#updateSuccess').show();
					}
					dataTableFunction();				
				})*/


			
	
}

function checkUserName(username){
			var type="checkUserName";
			$.get( "manage/getFunction",{ type : type,username : username},function(data) {

				var result=JSON.parse(data);
				if(result!=""){
					$('#errorusername').html("User Already Exists..!");
				document.getElementById('Username').focus();
				return false;
				}
				else{
					$('#errorusername').html("  ");
				}
				
					
  			});
}
</script>
