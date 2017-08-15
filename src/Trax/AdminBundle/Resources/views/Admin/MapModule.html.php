 <?php $view->extend('::Backendheader.html.php'); ?>
<br>
	<div id="cl-wrapper" class="container-fluid ">
		<div class="row">
                    <div class="col-md-12">
                        <div class="block-flat">
                            <div class="header">
                                <h3>Map Program to Trainee</h3></div>
				<br>
				<div><a class="btn btn-primary" href="<?php echo $view['assets']->getUrl('manage/adminMaster') ?>?master=MapModule">Mapped Trainee List</a></div>
                            <div class="content">
                   <form action="" id="customerForm" name="customerForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">

		<div align="center" style="display:none;" id="updateSuccess"> 
					<h4 >Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccessmap"> 
					<h4 class="text-primary">Successfully Inserted</h4>
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
					  </select><div id="errorcustomer" class="errorText"></div></div>
					
					</div>  
					<?php } ?>
					<div class="form-group">
					<label class="col-sm-4 control-label">Trainer</label>
					<div class="col-sm-5">
					 <select name="Trainer" id="TrainerId" class="form-control" onchange="getCategoryList(this.value);getDepart();">
						<option value="">Select Trainer </option>
						<?php for($i=0;$i<count($TrainerList);$i++) { ?>
						<option value="<?php echo $TrainerList[$i]['userid'];  ?>" ><?php  echo $TrainerList[$i]['name'];  ?></option>
						<?php  } ?>
					  </select><div id="errorTrainermoduler" class="errorText"></div>
					<div class="col-sm-2">
					<!--<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:115px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('TrainerNew');" >Add Trainer</button>-->
					
					</div>
					</div>
					</div>  

					<div class="form-group">
					<label class="col-sm-4 control-label">Module Category</label>
					<div class="col-sm-5">
					 <div id="CategoryDiv">
					 <select name="Category" id="CategoryIdNew" class="form-control" onchange="getsubCategory(this.value)">
						<option value="">Select Category </option>
						
					  </select><div id="errorCategory" class="errorText"></div>
					</div>
					</div>
<div class="col-sm-2">
					<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:115px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick="modalWindow('ModuleCategory');">Add Category</button>
					
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-4 control-label">Module Sub Category </label>

						<div class="col-sm-2">
							<select name="subCategory[]" id="subCategory" class="form-control" multiple="multiple" >
							
							</select>
						</div>
						<div class="col-xs-1">
							<button type="button" id="search_right" class="btn btn-block" onclick="getmodule()"><i class="glyphicon glyphicon-chevron-right"></i></button>
							<button type="button" id="search_left" class="btn btn-block" onclick="getmoduleremove()"><i class="glyphicon glyphicon-chevron-left"></i></button>
						</div>
						<div class="col-sm-2">
						<select name="subCategory_to[]" id="subCategory_to" class="form-control" multiple="multiple" >

						</select><div id="errorsubCategory_to" class="errorText"></div>
					</div>
<div class="col-sm-2">
					<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:115px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('ModuleSubCategory');">Add Sub-Category</button>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"  style="text-align:center; width:115px" onclick=" modalWindow('Module');">Add Content </button>
					
					</div>
				
				</div>

					<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-8">
					<div id="ResourceDiv"></div>
					</div>
					</div>

					<div class="form-group">
                                        <label class="col-sm-4 control-label">Schedule Dates</label>
                                        <div class="col-sm-5">
                                            <fieldset>
                                                    <div class="controls">
                                                        <div class="input-prepend input-group"><span class="add-on input-group-addon primary"><span class="glyphicon glyphicon-th"></span></span>
                                                            <input id="reservation"  name="reservation" value="" placeholder="" class="form-control" type="text">
                                                        </div><div id="errorreservation" class="errorText"></div>
                                                    </div>

                                            </fieldset>
                                        </div>
                                    </div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Department </label>

						<div class="col-sm-2">
							<select name="from[]" id="search" class="form-control" multiple="multiple" >
							
							</select>
						</div>
						<div class="col-xs-1">
							<button type="button" id="search_rightSelected" class="btn btn-block" onclick="getEmplist()"><i class="glyphicon glyphicon-chevron-right"></i></button>
							<button type="button" id="search_leftSelected" class="btn btn-block" onclick="getEmplistremove()"><i class="glyphicon glyphicon-chevron-left"></i></button>
						</div>
						<div class="col-sm-2">
						<select name="to[]" id="search_to" class="form-control" multiple="multiple"  >

						</select><div id="errorsearch_to" class="errorText"></div>
					</div>
<div class="col-sm-2">
					<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:115px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('Department');">Add Department</button>
					<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:115px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('Trainees');">Add Trainees</button>
					</div>
				
				</div>
										
					<div class="form-group">
                                        <label class="col-sm-4 control-label">Trainees </label>
                                        <div class="col-sm-5"><div id="employeediv">
					<select aria-hidden="true" tabindex="-1" multiple="multiple"  name="employeelist[]" id="employeelist" class="select2 select2-hidden-accessible"><div id="erroremployeelist" class="errorText"></div>
                                       
                                    </select>
					</div>
                                        </div><div class="checkbox-warning">	<input class="styled" type="checkbox" name="select_All" id="select_All">
						<label for="checkbox3">&nbsp; Select All Trainee</label></div>
                                    </div>                                   							
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"></label>
                                        <div class="col-sm-4" align="right">
                                           	<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm('Mapping');">Submit</button>
                                        </div>
                                    </div>
				<input type="hidden" id="editId" name="editId" value="">
				<input type="hidden" id="arrayvalue1" name="arrayvalue1" value="">
				<input type="hidden" id="arrayvaluenew1" name="arrayvaluenew1" value="">
				<input type="hidden" id="arrayvalue" name="arrayvalue" value="">
				<input type="hidden" id="arrayvaluenew" name="arrayvaluenew" value="">
				<input type="hidden" id="selectallEmployee" name="selectallEmployee" value="">
					
                                </form>
                            </div>
                        </div>

   </div>
                        </div>
<div class="modal fade colored-header" id="myModal" role="dialog">
    		<div class="modal-dialog">
			
			<div class="row" id="DisplayModlaDiv"></div>	
	
     		</div>
	</div>

<script src="<?php echo $view['assets']->getUrl('select2/multiselect.min.js') ?>"></script>


<script>
modalWindow();
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
var customerId="<?php echo $loginuserId; ?>";
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
function modalWindow(type)
{

 	$.get( "LoadModalContent",{ type : type},function(data) {
	$( "#DisplayModlaDiv" ).html( data );
	App.init();
	App.formElements();
	})


}

function getsubCategory(catid){
	var i;
	$.get( "getFunction",{type:"getsubCategoryMultiple",catid:catid} ,function( data ) {

	var result=JSON.parse(data);

	$("#subCategory").empty();
	$("#subCategory_to").empty();

	for(i=0;i<result['subCategoryList'].length;i++)
	{
	$("#subCategory").append($('<option></option>').attr("value", result['subCategoryList'][i]['subcatid']).text(result['subCategoryList'][i]['subcategory']));
	}

	});

}

function getCategoryList(trainerId)
{
	var type="getCategoryListNew";
	$.get( "getFunction",{ type : type,trainerId : trainerId},function(data) {
	$('#CategoryDiv').html(data);
	});
}

function getDepart()
{
	var i;
	$.get( "getFunction",{type:"getDepartment"} ,function( data ) {

	var result=JSON.parse(data);

	$("#search").empty();
	$("#search_to").empty();

	for(i=0;i<result['departmList'].length;i++)
	{
	$("#search").append($('<option></option>').attr("value", result['departmList'][i]['dprtid']).text(result['departmList'][i]['department']));
	}

	});
}

function getmodule() 
{


	var catid="";
	var tnl = document.getElementById("subCategory");
		
		for(i=0;i<tnl.length;i++){
			if(tnl[i].selected == true)
			{
			//alert(tnl[i].value);
			catid += tnl[i].value+',';
			
			}
		}
		catid = catid.replace(/,\s*$/, "");
		document.getElementById("arrayvalue1").value=catid;

		var category_New=$('#arrayvaluenew1').val();
		var catidnew=$('#arrayvaluenew1').val(category_New+','+catid);
		var catid_new = $('#arrayvaluenew1').val().slice( 1 );
		var type="getModuleFile";	
		$.get( "getFunction",{ type : type, subCategory:catid_new},function(data) {
		$('#ResourceDiv').html(data);
		App.formElements();
		})

		$("#subCategory").find(':selected').appendTo("#subCategory_to");
	
}
function getmoduleremove() {



	var selectedid =[];
	selectedid=document.getElementById("arrayvalue1").value
	var catid='';
	var tnl = document.getElementById("subCategory_to");

		for(i=0;i<tnl.length;i++){
	
			if(tnl[i].selected == true){
				//catid += tnl[i].value+',';
			}
			else{
				catid += tnl[i].value+',';
				}
		}
		catid = catid.replace(/,\s*$/, "");
		$('#arrayvaluenew1').val(","+catid);
		if(catid!=''){
			var type="getModuleFile";	
			$.get( "getFunction",{ type : type, subCategory:catid},function(data) {
			$('#ResourceDiv').html(data);
			App.formElements();
			})
		}
		else{
			$('#arrayvaluenew1').val('');
			var type="getModuleFile";	
			$.get( "getFunction",{ type : type, subCategory:0},function(data) {
			$('#ResourceDiv').html(data);

			})	
		}
		$("#subCategory_to").find(':selected').appendTo("#subCategory");

		
}

function getEmplist() 
{
var origin="#search";
 var dest="#search_to";

	var catid="";
	var tnl = document.getElementById("search");
		
		for(i=0;i<tnl.length;i++){
			if(tnl[i].selected == true)
			{
			//alert(tnl[i].value);
			catid += tnl[i].value+',';
			
			}
		}
		catid = catid.replace(/,\s*$/, "");
		document.getElementById("arrayvalue").value=catid;

		var category_New=$('#arrayvaluenew').val();
		var catidnew=$('#arrayvaluenew').val(category_New+','+catid);
		var catid_new = $('#arrayvaluenew').val().slice( 1 );
		var type="getEmplist";	
		$.get( "getFunction",{ type : type, deprtId:catid_new},function(data) {
		$('#employeediv').html(data);
		App.formElements();
		})
		$( origin).find(':selected').appendTo(dest);
	
}

function getEmplistremove() {
var origin="#search";
 var dest="#search_to";

	var batcid= $('#batchName').val();	
	var selectedid =[];
	selectedid=document.getElementById("arrayvalue").value
	var catid='';
	var tnl = document.getElementById("search_to");

		for(i=0;i<tnl.length;i++){
	
			if(tnl[i].selected == true){
				//catid += tnl[i].value+',';
			}
			else{
				catid += tnl[i].value+',';
				}
		}
		catid = catid.replace(/,\s*$/, "");
		$('#arrayvaluenew').val(","+catid);
		if(catid!=''){
			var type="getEmplist";	
			$.get( "getFunction",{ type : type, deprtId:catid},function(data) {
			$('#employeediv').html(data);
			App.formElements();
			})
		}
		else{
			$('#arrayvaluenew').val('');
			var type="getEmplist";	
			$.get( "getFunction",{ type : type, deprtId:0},function(data) {
			$('#employeediv').html(data);

			})	
		}
		$(dest).find(':selected').appendTo(origin);
		
}

function submitForm(type) {
		if(type=="ModuleCategory"){
			var Trainermodul=$('#Trainer').val();
			if(Trainermodul=="")
			{
			$('#errorTrainer').html("Please Select the Trainer");
			document.getElementById('Trainer').focus();
			return false; 
			}
			else
			{
			$('#errorTrainer').html(" ");
			}
			
			var Categorymod=$('#Category').val();
			if(Categorymod=="")
			{
			$('#errorMenu').html("Please Select the  Category Name");
			document.getElementById('Category').focus();
			return false; 
			}
			else
			{
			$('#errorMenu').html(" ");
			
			var Trainer=document.getElementById('Trainer').value;
			var Category=document.getElementById('Category').value;
				var editId=$('#editId').val();

				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForms" ).serialize(),function() {

					$('#customerForms')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();

					}
getCategoryList(Trainer);
					

				})
				}
			}
	if(type=="ModuleSubCategory"){
			var Trainermodul=$('#Trainer').val();
			if(Trainermodul=="")
			{
			$('#errorTrainer').html("Please  Select the Trainer");
			document.getElementById('Trainer').focus();
			return false; 
			}
			else
			{
			$('#errorTrainer').html(" ");
			}
			
			var Categorymod=$('#CategoryId').val();
			if(Categorymod=="")
			{
			$('#ErrCategoryId').html("Please Select the  Category Name");
			document.getElementById('CategoryId').focus();
			return false; 
			}
			else
			{
			$('#ErrCategoryId').html(" ");
			}
			var SubCategory=$('#SubCategory').val();
			if(SubCategory=="")
			{
			$('#errorSubCategory').html("Please Enter the  SubCategory Name");
			document.getElementById('SubCategory').focus();
			return false; 
			}
			else
			{
			$('#errorSubCategory').html(" ");
			}
			var Trainer=document.getElementById('Trainer').value;
			var CategoryId=document.getElementById('CategoryId').value;
			var SubCategory=document.getElementById('SubCategory').value;				
			var editId=$('#editId').val();

				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForms" ).serialize(),function() {

					$('#customerForms')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					
				})


}
		if(type=="Department"){ 
					var department=$('#department').val();
					if(department=="")
					{
					$('#errordepartment').html("Please Enter the  Department");
					document.getElementById('department').focus();
					return false; 
					}
					else
					{
					$('#errordepartment').html(" ");
					}
					var department=document.getElementById('department').value;
		
						var editId=$('#editId').val();

						$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type, $( "#customerForms" ).serialize(),function() {

							$('#customerForms')[0].reset();	
							if(editId==""){
							$('#insertSuccess').show();
							}
							
							
						})
	

		}
		if(type=="Module")
		{	var Trainer=$('#Trainer').val();
			if(Trainer=="")
			{
			$('#errorTrainer').html("Please Select the  Trainer Name");
			document.getElementById('Trainer').focus();
			return false; 
			}
			else
			{
			$('#errorTrainer').html(" ");
			}
			var Categorymod=$('#CategoryId').val();
			if(Categorymod=="")
			{
			$('#errorCategoryId').html("Please Select the  Category Name");
			document.getElementById('CategoryId').focus();
			return false; 
			}
			else
			{
			$('#errorCategoryId').html(" ");
			}
			
			var SubCategory=$('#SubCategory').val();
			if(SubCategory=="")
			{
			$('#errorSubCategory').html("Please Select the  SubCategory Name");
			document.getElementById('SubCategory').focus();
			return false; 
			}
			else
			{
			$('#errorSubCategory').html(" ");
			}
			var ModuleName=$('#ModuleName').val();
			if(ModuleName=="")
			{
			$('#errorModuleName').html("Please Enter the  Module Name");
			document.getElementById('ModuleName').focus();
			return false; 
			}
			else
			{
			$('#errorModuleName').html(" ");
			}
			var uploadedFile=document.getElementById('uploadedFile').value;	
			if(uploadedFile=="")
			{		

				$('#erroruploadedFile').html("Please uploaded File");
				document.getElementById('uploadedFile').focus();
				return false;
		    	}
			else
			{
			$('#erroruploadedFile').html("");
			var Trainer=document.getElementById('Trainer').value;

			var CategoryId=document.getElementById('CategoryId').value;
		
			var SubCategory=document.getElementById('SubCategory').value;
			
			var ModuleName=document.getElementById('ModuleName').value;
			

			var uploadedFile=document.getElementById('uploadedFile').value;	
			
			
				$('#erroruploadedFile').html("");
				var editId=$('#editId').val();
				$('#progress').show();
		                $('#fileCancel').show();
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
			
		}

	if(type=='Mapping'){
			var Trainer = document.getElementById('TrainerId').value;
			if (Trainer == "")
			{
			$('#errorTrainermoduler').html("Please select Trainer");
			document.getElementById('TrainerId').focus();
			return false;
			}
			 else
			 { 
		 	$('#errorTrainermoduler').html(" ");
			 }
			if($('#CategoryIdNew').val()== "")
			{		
				$('#errorCategoryId').html("Please select Category");
				document.getElementById('CategoryIdNew').focus();
				return false;
		    	}
			else
			{
				$('#errorCategoryId').html("");
			}
			if($('#subCategory_to').val()==null || $('#subCategory_to').val()=="" )
			{		
				$('#errorsubCategory_to').html("Please  select subCategory");
				document.getElementById('subCategory_to').focus();
				return false;
		    	}
			else
			{
			$('#errorsubCategory_to').html("");
					
                         }
            		 var checking=0;
			var chks = document.getElementsByName('elearningModule[]');
			for(var i=0; i<chks.length; i++)
			{
				if(chks[i].checked)
				{
					checking++;
				}
			}
			if(checking==0)
			{
				$('#errorelearningModule').html("Please select Resources file");
				document.getElementById('elearningModule').focus();
				return false;
			}
			else
			{
                            $('#errorelearningModule').html("");

			}
			if($('#reservation').val()== "")
			{		
				$('#errorreservation').html("Please  select Date");
				document.getElementById('reservation').focus();
				return false;
		    	}
			else
			{
				$('#errorreservation').html("");
				}


            		 if($('#search_to').val()==null || $('#search_to').val()=="" )
			{		
				$('#errorsearch_to').html("Please  select Department");
				document.getElementById('search_to').focus();
				return false;
		    	}
			else
			{
				$('#errorsearch_to').html("");
			}
                   	if($('#select_All').prop("checked") == false){
		       		if($('#employeelist').val()==null || $('#employeelist').val()=="")
				{		
					$('#erroremployeelist').html("Please select a Trainee");
					document.getElementById('employeelist').focus();
					return false;
			    	}

            		}    
				
				var editId=$('#editId').val();
				$('#erroremployeelist').html("");
				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type=MapModule", $( "#customerForm" ).serialize(),function() {
					$('html, body').animate({scrollTop : 0},800);
					$("#search_to").empty();
					$("#subCategory_to").empty();
					$("#search").empty();
					$("#employeelist").empty();
					$('#customerForm')[0].reset();
					$("#ResourceDiv").html("");
					if(editId==""){
					$('#insertSuccessmap').show();
					}
					else{
					$('#customerForm')[0].reset();	
					$('#updateSuccess').show();
					}
				})
			
			
		}

		if(type=='Employee'){

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

		$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type=Employee", $( "#customerForms" ).serialize(),function() {

					$('#customerForms')[0].reset();	
					if(editId==""){
					$('#insertSuccess').show();
					}
					else{
					$('#customerForms')[0].reset();	
					$('#updateSuccess').show();
					}

				})


		}	

}
</script>

         <script type="text/javascript">
jQuery(document).ready(function($) {
    $('#search').multiselect({
        search: {
            left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
            right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
        }
    });
});

</script>    
<script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({ autoclose: true });
			
            });

	var select_ids = [];
$(document).ready(function () {
		$('select#employeelist option').each(function(index, element) {
		select_ids.push($(this).val());

		})

	var ckbox = $('#select_All');

		$('#select_All').on('click',function () {
			if(ckbox.is(':checked')) 
			{
				var catid_new = $('#arrayvaluenew').val().slice( 1 );
				$('#selectallEmployee').val(catid_new);
            			$("#employeelist").attr("disabled", "disabled"); 
				$("#employeelist").removeAttr("selected");
			} 
	else {
				$('#selectallEmployee').val(" ");
           			 $("#employeelist").removeAttr("disabled"); 
			}
		});
	});


        </script>               
