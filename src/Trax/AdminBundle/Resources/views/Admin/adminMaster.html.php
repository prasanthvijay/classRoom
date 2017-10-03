<?php $view->extend('::Backendheader.html.php'); ?>


<br><div id="cl-wrapper" class="container-fluid ">
		<div class="row">
                    <div class="col-md-12">
                        <div class="block-flat">
                            <div class="header">
                                <h3><?php if($master=='Employee'){ echo "Trainee"; }else{  echo preg_replace('/([A-Z])/', ' $1', $master); } ?></h3></div>

					<!--<div class="form-group">
                                        <label class="col-sm-4 control-label">Schedule Dates</label>
                                        <div class="col-sm-4">
                                            <fieldset>
                                                    <div class="controls">
                                                        <div class="input-prepend input-group"><span class="add-on input-group-addon primary"><span class="glyphicon glyphicon-th"></span></span>
                                                            <input id="reservation"  name="reservation" value="" placeholder="" class="form-control" type="text">
                                                        </div>
                                                    </div>

                                            </fieldset>
                                        </div>
                                    </div>
					<div class="container">
					<div class="row" id="DisplayTableDiv"></div>
					</div>-->
				<?php  if($loginExeType==1) { ?>	
						<div class="container">  
						<br>
						<?php if($master!='Customer'){ ?>				
						<div class="form-group">
							<div class="col-sm-3"></div>
							<label class="col-sm-2 control-label">Select Customer</label>
							<div class="col-sm-3">
							<select id="customer" name="customer" class="form-control" onchange="dataTableFunction();">
							<option value="">Select Customer</option>
							<?php  for($i=0;$i<count($customerList);$i++){ ?>
							<option value="<?php echo $customerList[$i]['userid']; ?>"><?php echo $customerList[$i]['name']; ?></option>

							<?php }?> 				
							</select>
							</div>
					</div>
						<?php } ?>
				   </div>
 					<div class="container">
		   				<div class="row" id="DisplayTableDiv"></div>
					</div>



				<?php  }  else { ?>	
				<div class="container">
					<div class="row" id="DisplayTableDiv"></div>
					</div>	

				<?php } ?>		
			</div>
		    </div>
		</div>

	</div>
	
	 <div class="modal fade colored-header" id="myModal" role="dialog">
    		<div class="modal-dialog">
			
			<div class="row" id="DisplayModlaDiv"></div>
	
     		</div>
	</div>
	
<div class="modal fade colored-header" id="myModalupdate" role="dialog">
    		<div class="modal-dialog">
			
			<div class="row" id="DisplayModlaupdateDiv"></div>
	
     		</div>
	</div>
	
<script>



dataTableFunction();
modalWindow();

function modalWindow()
{
	var type='<?php echo $master; ?>';
	 	$.get( "LoadModalContent",{ type : type},function(data) {
		$( "#DisplayModlaDiv" ).html( data );
		App.init();
		App.formElements();
  		})

}
function modalWindowemployee(type,mapid)
{
	 	$.get( "LoadModalContent",{ type : type,mapid : mapid },function(data) {
		$( "#DisplayModlaDiv" ).html( data );
  		})

}
function viewdatepicker(id,subcatid)
{
var type ="updatescheduledate";
$.get( "LoadModalContent",{ type : type,id: id,subcatid:subcatid},function(data) {
$( "#DisplayModlaupdateDiv" ).html( data );
App.init();
App.formElements();
})

}

function dataTableFunction()
{
var loginExeType="<?php echo $loginExeType; ?>";
	var type='<?php echo $master; ?>';
	if(type=='Customer'){
	$( "#DisplayTableDiv" ).html( "<div align='center'><img src='/assets/load2.gif'></div>" );	
		$.get( "dataTableMaster",{ type : type},function(data) {
		$( "#DisplayTableDiv" ).html( data );
		$('#example').DataTable();
	})
	}
	else{
	
	var customer="";
		if(loginExeType==1){
		customer=$('#customer').val();	
		}
		else {
		
		customer="<?php echo $loginuserId; ?>";
		}
	
		$( "#DisplayTableDiv" ).html( "<div align='center'><img src='/assets/load2.gif'></div>" );	
		$.get( "dataTableMaster",{ type : type,customer:customer},function(data) {
		$( "#DisplayTableDiv" ).html( data );
		$('#example').DataTable();
	})		
	}	
}
</script>
<script>
function submitFormnew(type,mapid) {
		$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForm" ).serialize(),function(data) {

		if(data=="Success"){
		$('#customerForm')[0].reset();	
		$('#insertSuccess').show();
		$('#emply').hide();	
		}
		modalWindowemployee(type,mapid);
		})
}
function submitForm(type) {
	var type='<?php echo $master; ?>';
		
	
	if(type=="Customer")
		{
	
			var Customername=document.getElementById('Customername').value;
			var Mobile=document.getElementById('Mobile').value;
			var Address=document.getElementById('Address').value;
			var uploadedFile=document.getElementById('uploadedFile').value;
			
			if(Customername=="")
		    	{
				$('#errorcustomername').html("Enter Employee Name ");
				document.getElementById('Employeename').focus();
				return false;
		    	}
			else
			{
			$('#errorcustomername').html("");
			}
			if(Address=="")
		    	{
				$('#erroradd').html("Enter Address ");
				document.getElementById('Address').focus();
				return false;
		    	}
			else
			{
			$('#erroradd').html("");
			}
			if(Password=="")
		    	{
				$('#errorPassword').html("Enter Password ");
				document.getElementById('Password').focus();
				return false;
		    	}
			else
			{
			$('#errorPassword').html("");
			}
			if(Mobile=="")
		    	{
				$('#errorMobile').html("Enter Mobile Number ");
				document.getElementById('Mobile').focus();
				return false;
		    	}
			if (isNaN(Mobile))
			{	
				$('#errorMobile').html("Enter Number only");
				document.getElementById('Mobile').focus();
				return false;	
			}
			else
			{

			$('#errorMobile').html("");

			}
						
			if($('#uploadedFile').val()==""){
				$('#errorUploadlogo').html("Choose Image File");
				document.getElementById('uploadedFile').focus();
				return false;
			}
			else{

			$('#errorUploadlogo').html("");
			
			var editId=$('#editId').val();
		 	var filePost = new FormData(document.getElementById('customerForm'));
   
			$.ajax({
			url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type="+type,
			type: "POST",
			data: filePost,
			processData: false,
			contentType: false,
			success: function(response) {

					$('#customerForm')[0].reset();
					$("#insertSuccess").show();
					dataTableFunction();				
					}
				

			});

			}
	}

		if(type=="Department"){
				
							
				if($('#department').val()==""){
					$('#errordepartment').html("Enter Department ");
					document.getElementById('department').focus();
					return false;
				}
				else{
				$('#errordepartment').html("");
			
					var editId=$('#editId').val();

				 	 $('button').prop('disabled', true);
				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForms" ).serialize(),function() {
						$('button').prop('disabled', false);	
						$('#customerForms')[0].reset();	
						if(editId==""){
						$('#insertSuccess').show();
						}
						else{
						$('#customerForms')[0].reset();	
						$('#updateSuccess').show();
						}
						dataTableFunction();				
				  		})

				}
			
			}

		if(type=="Location"){
				
				var Location=document.getElementById('Location').value;
				if(Location=="")
			    	{
					$('#errorLocation').html("Enter Location ");
					document.getElementById('Location').focus();
					return false;
			    	}
				else
				{
				$('#errorLocation').html("");
			
					var editId=$('#editId').val();

				 	 $.post( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster'); ?>?type=Location", $( "#customerForm" ).serialize(),function() {
						$('button').prop('disabled', false);
				
						$('#customerForm')[0].reset();	
						if(editId==""){
						$('#insertSuccess').show();
						}
						else{
						$('#customerForm')[0].reset();	
						$('#updateSuccess').show();
						}
						dataTableFunction();				
				  		})

				}
			
			}

		if(type=="Employee"){
			
			
					

					$('#errorcustomername').html("");
							 			
					var editId=$('#editId').val();
				 	
			var filePost = new FormData(document.getElementById('customerForm'));
   
			$.ajax({
			url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type="+type,
			type: "POST",
			data: filePost,
			processData: false,
			contentType: false,
			success: function(response) {

					$('#customerForm')[0].reset();
					$("#insertSuccess").show();
					dataTableFunction();				
					}
				

			});

			
		}
		if(type=="TrainingProgram")
		{
		var Programname=document.getElementById('Programname').value;
		var batchName=document.getElementById('batchName').value;
		var Description=document.getElementById('Description').value;
			
			if($('#batchName').val()== "")
			{		
				$('#errorMenu').html("Select Batch");
				document.getElementById('batchName').focus();
				return false;
		    	}
			else
			{
				$('#errorMenu').html("");
			}
			if(Programname=="")
			{		
				$('#errorprg').html("Select Program Name");
				document.getElementById('Programname').focus();
				return false;
		    	}
			else
			{
				$('#errorprg').html("");
			}
			if(Description=="")
			{		
				$('#errords').html("Enter Description");
				document.getElementById('Description').focus();
				return false;
		    	}
			else
			{
				$('#errorprg').html("");
				var editId=$('#editId').val();

				$('button').prop('disabled', true);
				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForm" ).serialize(),function() {
						$('button').prop('disabled', false);

					$('#customerForm')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForm')[0].reset();	
					$('#updateSuccess').show();
					}
					dataTableFunction();				
				})
			}


		}
		if(type=="TrainingBatch")
		{
			var Description=document.getElementById('Description').value;
			
			if($('#batchName').val()== "")
			{		
				$('#errorMenu').html("Enter Batch Name");
				document.getElementById('batchName').focus();
				return false;
		    	}
			else
			{
				$('#errorMenu').html("");
			}
			if(Description=="")
			{		
				$('#errords').html("Enter Description");
				document.getElementById('Description').focus();
				return false;
		    	}
			else
			{
				$('#errords').html("");
				var editId=$('#editId').val();

				$('button').prop('disabled', true);
				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForm" ).serialize(),function() {
						$('button').prop('disabled', false);

					$('#customerForm')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForm')[0].reset();	
					$('#updateSuccess').show();
					}
					dataTableFunction();				
				})
			}


		}
		if(type=="TrainingSchedule")
		{
			
			if($('#batchName').val()== "")
			{		
				$('#errorMenu').html("Select Batch Name");
				document.getElementById('batchName').focus();
				return false;
		    	}
			else
			{
				$('#errorMenu').html("");
			}
			if($('#ProgramName').val()== "")
			{		
				$('#errorprg').html("Select Program Name");
				document.getElementById('ProgramName').focus();
				return false;
		    	}
			else
			{
				$('#errorprg').html("");
			}
			if($('#Trainername').val()== "")
			{		
				$('#errortr').html("Select Program Name");
				document.getElementById('Trainername').focus();
				return false;
		    	}
			else
			{
				$('#errortr').html("");
			}
			/*if($('#datevalue').val()== "")
			{		
				$('#errordt').html("Select Date");
				document.getElementById('datevalue').focus();
				return false;
		    	}
			else
			{
				$('#errordt').html("");
			}*/
			if($('#Department').val()== "")
			{		
				$('#errordepart').html("Select Department");
				document.getElementById('Department').focus();
				return false;
		    	}
			else
			{
				$('#errordepart').html("");
				var editId=$('#editId').val();

				$('button').prop('disabled', true);
				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForm" ).serialize(),function() {
						$('button').prop('disabled', false);

					$('#customerForm')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForm')[0].reset();	
					$('#updateSuccess').show();
					}
					dataTableFunction();				
				})
			}


		}
		if(type=="ModuleCategory")
		{
			var Trainer=document.getElementById('Trainer').value;
			var Category=document.getElementById('Category').value;
			var Description=document.getElementById('Description').value;


			if(Trainer=="")
			{		

				$('#errorTrainer').html("Please select Trainer");
				document.getElementById('Trainer').focus();
				return false;
		    	}
			else
			{
				$('#errorTrainer').html("");
			}

			if(Category=="")
			{		

				$('#errorMenu').html("Please select subCategory");
				document.getElementById('Category').focus();
				return false;
		    	}
			else
			{
				$('#errorMenu').html("");
			
			
				var editId=$('#editId').val();

				$('button').prop('disabled', true);
				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForms" ).serialize(),function() {
						$('button').prop('disabled', false);

					$('#customerForms')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForms')[0].reset();	
					$('#updateSuccess').show();
					}
					dataTableFunction();				
				})
			}


		}
		if(type=="ModuleSubCategory")
		{
				var Trainer=document.getElementById('Trainer').value;
			


			if(Trainer=="")
			{		

				$('#errorTrainer').html("Please select Trainer");
				document.getElementById('Trainer').focus();
				return false;
		    	}
			else
			{
				$('#errorTrainer').html("");
			}

			var CategoryId=document.getElementById('CategoryId').value;

			if(CategoryId=="")
			{		

				$('#ErrCategoryId').html("Please Select Category");
				document.getElementById('CategoryId').focus();
				return false;
		    	}
			else
			{
				$('#ErrCategoryId').html("");
			}
var SubCategory=document.getElementById('SubCategory').value;
			


			if(SubCategory=="")
			{		

				$('#errorSubCategory').html("Please enter subCategory");
				document.getElementById('SubCategory').focus();
				return false;
		    	}
			else
			{
				$('#errorSubCategory').html("");
			}
		
				
				var editId=$('#editId').val();
				$('button').prop('disabled', true);
				$('button').prop('disabled', true);
				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForms" ).serialize(),function() {
						$('button').prop('disabled', false);

					$('#customerForms')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForms')[0].reset();	
					$('#updateSuccess').show();
					}
					dataTableFunction();				
				})
			


		}
		if(type=="Module")
		{
			var Trainer=document.getElementById('Trainer').value;
			if(Trainer=="")
			{		

				$('#errorTrainer').html("Please select Trainer");
				document.getElementById('Trainer').focus();
				return false;
		    	}
			else
			{
				$('#errorTrainer').html("");
			}


			var CategoryId=document.getElementById('CategoryId').value;
			


			if(CategoryId=="")
			{		

				$('#errorCategoryId').html("Please Select Category");
				document.getElementById('CategoryId').focus();
				return false;
		    	}
			else
			{
				$('#errorCategoryId').html("");
			}
			var SubCategory=document.getElementById('SubCategory').value;
			


			if(SubCategory=="")
			{		

				$('#errorSubCategory').html("Please Select SubCategory");
				document.getElementById('SubCategory').focus();
				return false;
		    	}
			else
			{
				$('#errorSubCategory').html("");
			}

			var ModuleName=document.getElementById('ModuleName').value;
			


			if(ModuleName=="")
			{		

				$('#errorModuleName').html("Please enter ModuleName");
				document.getElementById('ModuleName').focus();
				return false;
		    	}
			else
			{
				$('#errorModuleName').html("");
			}
			var Urlname=document.getElementById('Urlname').value;
			var uploadedFile=document.getElementById('uploadedFile').value;
	if($('#checkbox').is(':checked'))
	{
	if (Urlname == "")
	{
        $('#errorurlText').html("Please enter the Url ");
	document.getElementById('Urlname').focus();
	return false;
	}
	
	else{
		$('#errorurlText').html(" ");
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
			var editId=$('#editId').val();
			
			$('#homemenu').prop('disabled', true);
			var vFD = new FormData(document.getElementById('customerForms'));			
			var hrx= $.ajax({
			url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type="+type,
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
						$('#progress').hide();
		       				$('#fileCancel').hide();
						$('#customerForms')[0].reset();
						$("#insertSuccess").show();
						$("#inserturlfile").hide();
						$("#insertimagefile").show();
						$("#fileCancel").hide();
						$("#erroruploadedFile").html(" ");
						dataTableFunction();
					}					
					else{
                      				  $('#progress').hide();
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
                       				 $('#fileCancel').hide();
			});


			/*var filePost = new FormData(document.getElementById('customerForm'));
   
			$.ajax({
			url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type="+type,
			type: "POST",
			data: filePost,
			processData: false,
			contentType: false,
			success: function(response) {
					//alert(response);
					$("#image").hide();
					$('#customerForm')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForm')[0].reset();	
					$('#updateSuccess').show();
					}
					dataTableFunction();								
					}
				

			});*/

				
			
			
		}
		if(type=='BasicMaster'){
			var file = document.getElementById('file').value;
			if (file == "")
			{
				$('#errorfile').html("Please uploded file");
				document.getElementById('file').focus();
				return false;
			}
			else
			{ 
					$('#errorfile').html(" ");
					$("#image").show();
					var filePost = new FormData(document.getElementById('customerForms'));

					$.ajax({
					url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type=uploadMaster",
					type: "POST",
					data: filePost,
					processData: false,
					contentType: false,
					success: function(response) {
					$("#image").hide();
							$('#customerForms')[0].reset();	
							if(response=='Success'){
								$('#insertSuccess').show();
							}
							else{
								$('#updateSuccess').show();	
							}
					dataTableFunction();				
						}
					});
	
			}

		}
		if(type=="MapModule")
		{
			var Description=document.getElementById('Description').value;
			if($('#Category').val()== "")
			{		
				$('#errorMenu').html("Select Category");
				document.getElementById('Category').focus();
				return false;
		    	}
			else
			{
				$('#errorMenu').html("");
			}
			if($('#Department').val()== "")
			{		
				$('#errordes').html("Select Department");
				document.getElementById('Department').focus();
				return false;
		    	}
			else
			{
				$('#errordes').html("");
			}
			if(Description=="")
			{
				$('#errords').html("enter Description");
				document.getElementById('Description').focus();
				return false;
			}
			else
			{
				$('#errords').html("");
				var editId=$('#editId').val();

				$('button').prop('disabled', true);
				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForm" ).serialize(),function() {
						$('button').prop('disabled', false);

					$('#customerForm')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForm')[0].reset();	
					$('#updateSuccess').show();
					}
					dataTableFunction();				
				})
			}


		}

}

function deleteFunction(deleteId){
	var type='<?php echo $master; ?>';

	swal({
	title: "Are you sure?",
	text: "You will not be able to recover this imaginary file!",
	type: "warning",
	showCancelButton: true,
	confirmButtonColor: "#052E51",
	confirmButtonText: "Yes, delete it!",
	closeOnConfirm: false
	},
	function(){
	$.get( "adminMaster?master="+type,{ deleteId : deleteId},function(data) {
	})
	swal("Deleted!", "Your imaginary file has been deleted.", "success");
	dataTableFunction();
	});


}
 function deleteFunctionemplooyee(deleteId,mapid){
	var type='loademployeelist';
	
	swal({
	title: "Are you sure?",
	text: "Remove this Trainee to this program!",
	type: "warning",
	showCancelButton: true,
	confirmButtonColor: "#052E51",
	confirmButtonText: "Yes, Remove it!",
	closeOnConfirm: false
	},
	function(){
	$.get( "adminMaster?master="+type,{ deleteId : deleteId,mapid:mapid},function(data) {
	})
	swal("Removed!", "Remove this Trainee to this program.", "success");
	dataTableFunction();
	modalWindowemployee(type,mapid);
	});


}
function modalWindowContent(type,mapid)
{

	 	$.get( "LoadModalContent",{ type : type,mapid : mapid },function(data) {
		$( "#DisplayModlaDiv" ).html( data );
  		})

}
function editFunction(editId)
{
	var type='<?php echo $master; ?>';
	$.get( "LoadModalContent",{ type : type, editId : editId},function(data) {
	$( "#DisplayModlaDiv" ).html( data );
	})
			
}

function getTrainingProgram(batchId){
	var type="getTrainingProgram";
	$.get( "getFunction",{ type : type,batchId : batchId},function(data) {
	$('#trainingProgramDiv').html(data);
	});
}

function getsubCategory(catid){
	var type="getsubCategory";
	$.get( "getFunction",{ type : type,catid : catid},function(data) {
	$('#subCategoryDiv').html(data);
	});
}
function getCategoryList(trainerId){
	var type="getCategoryList";
	$.get( "getFunction",{ type : type,trainerId : trainerId},function(data) {
	$('#CategoryDiv').html(data);
	});
}
function getEmployeeList(departId){
	var type="getEmployeeList";
	$.get( "getFunction",{ type : type,departId : departId},function(data) {
	$('#employeeDiv').html(data);
	});
}
function ExistEmployee(checkId){
		var chk = document.getElementById(checkId).checked;
                if(chk==true)
                {
			var type="ExistEmployee";
			$.get( "getFunction",{ type : type},function(data) {
			$('#ExistEmployeeDiv').html(data);
			});
      		}
		else
		{ 
			$('#ExistEmployeeDiv').html('<input type="text" id="Trainername" name="Trainername" class="form-control">');
		}
} 	
function checkUserName(username){
			var type="checkUserName";
			$.get( "getFunction",{ type : type,username : username},function(data) {
				var result=JSON.parse(data);
				if(result!=""){
					$('#errorusername').html("User Already Exists..!");
				}
				else{
					$('#errorusername').html("");
				}
					
  			});
}
   
function makeOption(empId,currentType,employeetype){

	var type="makeOption";

swal({
	title: "Are you sure?",
	text: "This "+employeetype+" make to "+currentType,
	type: "warning",
	showCancelButton: true,
	confirmButtonColor: "#052E51",
	confirmButtonText: "Yes, Make it!",
	closeOnConfirm: false
	},
	function(){
	$.get( "getFunction",{ type : type,empId : empId,currentType:currentType,employeetype:employeetype},function(data) {
	})
	swal("Success!", "This "+employeetype+" make to "+currentType, "success");
	dataTableFunction();
	});

	
}     
</script>

<script type="text/javascript">

function LoadTrainee(mapid){
	$.get( "getFunction?type=mapExtraTrainee",{ mapid : mapid},function(data) {

		$('#emply').show();
		$('#employeelist').html(data);
		App.formElements();		
	})
}
function updatescheduledate(type,id)
{
$.get( "getFunction?type="+type+"&id="+id, $( "#updatedate"+id).serialize(),function(data) {

					$('#updatedate'+id)[0].reset();	
					dataTableFunction();
				})

	
}
            $(function () {
                $('#datetimepicker').datetimepicker({ autoclose: true });
			
            });
</script>
