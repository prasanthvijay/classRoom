<?php 
				$view->extend('::headernew.html.php'); 
?>
<div id="base">
			
	<div id="content">
			<section>
			<div class="section-header">
				<ol class="breadcrumb">
				<li class="active">Add Training Schedule</li>
				</ol>

			</div>
			<div class="section-body contain-lg">

			<!-- BEGIN INTRO -->
			

			<!-- BEGIN BASIC ELEMENTS -->
			<div class="row">
				
					<div class="col-lg-offset-1 col-md-10 col-sm-12">
						<div class="card">
							<div class="card-body">
					<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h4>Successfully Inserted...</h4>
					</div>
					


					<div class="form-group">
					<label class="col-sm-2 control-label">Training Batch </label>
					<div class="col-sm-8">
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
					<label class="col-sm-2 control-label">Program Name</label>
					<div class="col-sm-8"><div id="trainingProgramDiv">
						<select class="form-control" id="ProgramName" name="ProgramName" >
						<option value="">Select Program</option>
										
					</select>
					</div>
					</div><div id="errorprg" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Module Category</label>
					<div class="col-sm-8">
					<select class="form-control" id="ModuleCategory" name="ModuleCategory" >
						<option value="">Select Module Category</option>
						<?php  for($i=0;$i<count($moduleCateList);$i++){ ?>
						<option value="<?php echo $moduleCateList[$i]['cateid']; ?>" <?php if($edittrainingProgram[0]['batchid']==$moduleCateList[$i]['cateid']) echo "selected"; ?>><?php echo $moduleCateList[$i]['modulecategory']; ?></option>
						<?php }?> 				
					</select>
					</div><div id="errordepart" class="errorText"></div>
					</div>
					
					<div class="form-group">
					<label class="col-sm-2 control-label">Date </label>
					<div class="col-sm-8">
					<div data-min-view="2" data-date-format="yyyy-mm-dd" id="datevalue" class="input-group date datetime ">
                                                <input size="16" id="date" name="date" readonly="readonly" class="form-control" type="text" value=""><span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>
                                            </div>
					</div><div id="errordt" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Department</label>
					<div class="col-sm-8">
					<select class="form-control" id="Department" name="Department" onchange="getEmployeeList(this.value);">
						<option value="">Select Department</option>
						<?php  for($i=0;$i<count($departList);$i++){ ?>
						<option value="<?php echo $departList[$i]['dprtid']; ?>" <?php if($edittrainingProgram[0]['batchid']==$departList[$i]['dprtid']) echo "selected"; ?>><?php echo $departList[$i]['department']; ?></option>
						<?php }?> 				
					</select>
					</div><div id="errordepart" class="errorText"></div>
					</div>
					
					<div class="form-group">
					<label class="col-sm-2 control-label">Employees</label>
					<div class="col-sm-8"><div id="employeeDiv"> 
					<select multiple size="3" class="form-control" name="employeelist[]" id="employeelist" >

					  </select></div>
					</div><div id="errorMenu" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-4" align="right">
					<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm();"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>

                </div>
					<input type="hidden" name="Trainername" id="Trainername" value="<?php echo $userid; ?>">
					<input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>">
					<input type="hidden" name="customid" id="customid" value="<?php echo $customerId; ?>">
					<input type="hidden" name="editId" id="editId" value="<?php echo $edittrainingProgram[0]['prgid']; ?>">
				</form>
			</div>
		</div>
	</div>
</div></div>				

</section>
				
</div>



    </div>
<script>
function getTrainingProgram(batchId){
var loginid=<?php echo $userid; ?>;
	var type="getTrainingProgramtrainer";
	$.get( "manage/getFunction",{ type : type,batchId : batchId,loginid : loginid},function(data) {
	$('#trainingProgramDiv').html(data);
	});
}
function getEmployeeList(departId){
	var type="getEmployeeList";
	$.get( "manage/getFunction",{ type : type,departId : departId},function(data) {
	$('#employeeDiv').html(data);
	});
}
function submitForm() {

	var type='TrainingSchedule';
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

				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForm" ).serialize(),function() {

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
</script>

