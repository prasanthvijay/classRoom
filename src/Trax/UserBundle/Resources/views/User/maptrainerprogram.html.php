<?php 
				$view->extend('::headernew.html.php'); 
?>
<div id="base">
			
	<div id="content">
			<section>
			<div class="section-header">
				<ol class="breadcrumb">
				<li class="active">Add Training Program</li>
				</ol>
					<input type="hidden" id="loginid" name="loginid" value="<?php echo $_SESSION['userid'];?>">
 			</div>
			<div class="section-body contain-lg">

			<!-- BEGIN INTRO -->
			

			<!-- BEGIN BASIC ELEMENTS -->
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
									<select id="batchName" name="batchName"  class="form-control">
								<option value="">Select Batch</option>
								<?php  for($i=0;$i<count($BatchList);$i++){ ?>
								<option value="<?php echo $BatchList[$i]['batchid']; ?>" ><?php echo $BatchList[$i]['batchname']; ?></option>

								<?php }?> 				
								</select>
									<label for="select1">Select Batch</label>
						</div>
						<div class="form-group">
<input class="form-control" id="Programname" name="Programname"  value="<?php echo $editdata[0]['programname'] ?>" type="email" onblur="employeeDetils(this.value);">
						<label for="regular1">Program Name</label>
						</div>
						<div class="form-group">
<input class="form-control" id="Description" name="Description" value="<?php echo $editdata[0]['description'] ?>" <?php// if($editId!=""){ echo "readonly";} ?> type="text" onblur="checkUserName(this.value);">
						<label for="regular1">Description <span class="text-danger" id="errorusername"></span></label>
						</div>
						<div class="form-group">
<button class="btn btn-success" style="text-align:center;" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm();"><?php if($editdata!=''){ echo "Update"; } else { echo "Submit"; }?></button>
						</div>
			<input type="hidden" name="editId" id="editId" value="<?php echo $editdata[0]['prgid']; ?>">
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

	var program = document.getElementById('Programname').value;
	if (program == "")
	{

	document.getElementById('Programname').focus();
	return false;
	}

	var Username = document.getElementById('Description').value;
	if (Username == "")
	{

	document.getElementById('Description').focus();
	return false;
	}

	var loginid=$("#loginid").val();
		
	$.ajax({
	url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type=TrainingProgram&loginid="+loginid,
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


function Redirect() {
               window.location="trainingprogram";
            }
			
	
}

</script>


