<?php if($getFunctionType=="getsubCategory") { ?>

		<select name="SubCategory" id="SubCategory" class="form-control" >
		<option value="">Select Sub Category </option>
		<?php  for($i=0;$i<count($subCategoryList);$i++){ ?>
		<option value="<?php echo $subCategoryList[$i]['subcatid']; ?>"><?php echo $subCategoryList[$i]['subcategory']; ?></option>
		<?php }?> 
		</select>




<?php } else if($getFunctionType=='ModuleCategory') { ?>

<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php if($editId!=''){ echo "Edit"; } else { echo "Add"; }?> <?php echo preg_replace('/([A-Z])/', ' $1', $getFunctionType);  ?></h4>
				</div>
				<div class="modal-body form">
				<form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					<div align="center" style="display:none;" id="updateSuccess"> 
					<h4>Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccesss"> 
					<h5 class="text-info">Successfully Inserted</h5>
					</div>					
					<div class="form-group">
					<label class="col-sm-3 control-label"> Category Name</label>
					<div class="col-sm-7">
					<input class="form-control" id="Category" name="Category" value="<?php echo $editModuleCategory[0]['modulecategory']; ?>" type="text"><div id="errorMenu" class="errorText"></div>
					</div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label">Category Description</label>
					<div class="col-sm-5">
					<textarea class="form-control" id="Description" name="Description"><?php echo $editModuleCategory[0]['description']; ?></textarea>
					</div><div id="errordes" class="errorText"></div>
					</div>
					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-5" align="right">
				<input type="hidd en" id="Trainer" name="Trainer" value="<?php echo $_SESSION['userid'] ?>">
 				<input type="hid den"  value="<?php echo $customerId ?>" name="customerId" id="customerId">

					<button class="btn btn-success" type="button" id="submit" name="submit" value="homemenu"  onclick="submitForm('<?php echo $getFunctionType; ?>');"><?php if($editId!=''){ echo "Update"; } else { echo "Submit"; }?></button>
					
					</div>

					</div>
					<input type="hidden" name="editId" id="editId" value="<?php echo $editModuleCategory[0]['cateid']; ?>">
				</form>

			</div> 
<?php } ?>
