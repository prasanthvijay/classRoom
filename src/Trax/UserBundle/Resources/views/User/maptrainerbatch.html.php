<?php 
				$view->extend('::headernew.html.php'); 

?>
<div id="base">
			
	<div id="content">
			<section>
			<div class="section-header">
				<ol class="breadcrumb">
				<li class="active">Add Batch</li>
				</ol>

			</div><input type="hidden" id="loginid" name="loginid" value="<?php echo $_SESSION['userid'];?>">
				<input type="hidden" id="loginuserid" name="loginuserid" value="<?php echo $loginuserId;?>">
			<div class="section-body contain-lg">

			<div class="row">
				
					<div class="col-lg-offset-1 col-md-10 col-sm-12">
						<div class="card">
							<div class="card-body">
					<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form" enctype="multipart/form-data">
						<div class="row form-group" style="display:none;" id="updateSuccess"> 
						<div class="col-md-2"></div>
						<div class="col-md-6">
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							 	Successfully Updated...
						    	</div>
				     		</div>
		     				</div>

						<div class="row form-group" style="display:none;" id="insertSuccess"> 
						<div class="col-md-3"></div>
						<div class="col-md-5">
						    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							 Successfully Inserted...
						    </div>
				     		</div>
				     		</div>


						<div class="form-group">
<input class="form-control" id="batchName" name="batchName"  value="<?php echo $editdata[0]['batchname'] ?>" type="email" onblur="employeeDetils(this.value);">
						<label for="regular1">Batch Name</label>
						</div>
						<div class="form-group">
<input class="form-control" id="Description" name="Description" value="<?php echo $editdata[0]['description'] ?>" <?php// if($editdata!=""){ echo "readonly";} ?> type="text" onblur="checkUserName(this.value);">
						<label for="regular1">Description <span class="text-danger" id="errorusername"></span></label>
						</div>
						<div class="form-group">
<button class="btn btn-success" style="text-align:center;" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editdata!=''){ echo "Update"; } else { echo "Submit"; }?></button>
						</div>
	<input type="hidden" name="editId" id="editId" value="<?php echo $editdata[0]['batchid']; ?>">
					</form>
			</div>
		</div>
	</div>
</div></div>				

</section>
				
</div>
<script>
function submitForm() {
	$('#errorMobile').html("");
	var editId=$('#editId').val();	

	//alert(editId);
	var filePost = new FormData(document.getElementById('customerForm'));
		
	var Employeename = document.getElementById('batchName').value;
	if (Employeename == "")
	{

	document.getElementById('batchName').focus();
	return false;
	}

	var Username = document.getElementById('Description').value;
	if (Username == "")
	{

	document.getElementById('Description').focus();
	return false;
	}

	var loginid=$('#loginid').val();
	var loginuserid=$('#loginuserid').val();

	$.ajax({
	url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type=TrainingBatch&loginid="+loginid+"&loginuserid="+loginuserid,
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
	
}
</script>


