<?php $view->extend('::Backendheader.html.php'); ?>
<style>
.fileoutline { width:100%;margin-bottom:10px 10px 10px;margin-right:5px;height:40px;border:1px solid #000;position:relative; }
#file { margin-top:8px;margin-left:10px; }
</style>
<br><div id="cl-wrapper" class="container-fluid ">
		<div class="row">
                    <div class="col-md-12">
                        <div class="block-flat">
                            <div class="header">
                                <h3>Basic Employee Master</h3></div>

				<div align="center" style="display:none;" id="updateSuccess"> 
					<h4 class="text-primary">  Uploaded Fail...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h4 class="text-primary">Successfully Uploaded...</h4>
					</div>
			<div class="container">

<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">	
				<?php  if($loginExeType==1) { ?>
					
				<div class="form-group">

							<div class="col-sm-3"></div>
							<label class="col-sm-2 control-label">Select Customer</label>
							<div class="col-sm-3">
							<select id="customer" name="customer" class="form-control" onchange="dataTableFunction();">
							<option value="">Select Customer</option>
							<?php  for($i=0;$i<count($customerList);$i++){ ?>
							<option value="<?php echo $customerList[$i]['userid']; ?>"><?php echo $customerList[$i]['customername']; ?></option>

							<?php }?> 				
							</select>
							</div>
					</div>
				
 				<?php } ?>	
          			
					<br><br>
					<div class="form-group">
					<div class="col-sm-1"></div>
					<label class="col-sm-2 control-label">Upload File: </label>
					<div class="col-sm-3">
					<input class="" id="file" name="file" value="" type="file"></div><div id="errorfile" class="errorText"></div>
					
					<div id="image" style="display:none">
					<div class="col-sm-1">
					<img src="<?php echo $view['assets']->getUrl('assets/img/spinner.gif')?>">
						</div>
					</div>
										
					</div>
					<div class="form-group">					
					<div class="col-sm-3"></div>
					<div class="col-sm-5">
					 <button type="button" class="btn btn-warning " onclick="uploadMaster()" id="submit" value="submit" name="submit" >upload</button>
					</div>
					<a href="../assets/img/sample.csv" >
					<img src="../assets/img/sample.jpg" style="width:30px;height:30px"/>
					Sample file</a>
										
            </form>
						
			</div>
		    </div>
		</div>

	</div>
	
	
<script>
function uploadMaster()
{

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
			var filePost = new FormData(document.getElementById('customerForm'));
   
			$.ajax({
			url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type=uploadMaster",
			type: "POST",
			data: filePost,
			processData: false,
			contentType: false,
			success: function(response) {
			$("#image").hide();
			if(response=='Sucess'){
				$('#insertSuccess').show();
			}
			else{
				$('#updateSuccess').show();	
			}
			}
			});
					
			}

		}

</script>	

	

