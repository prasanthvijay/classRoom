<?php 
	$view->extend('::headernew.html.php'); 

        $depforEmp=$_GET['dprtid'];
?>
		     
<div id="base">
			
	<div id="content">
			<section>
			<div class="section-header">
				<ol class="breadcrumb">
				<li class="active">Map Content to Trainee</li>
				<li class="active"><a href="<?php echo $view['assets']->getUrl('modulemasterlist') ?>?type=MappedModuletoUserList" class="btn btn-sm btn-primary">Mapped Trainee List</a></li>
				</ol>

			</div>
			<div class="section-body contain-lg">

			<div class="row">
				
				<div class="col-lg-offset-1 col-md-10 col-sm-12">
					<div class="card">
						<div class="card-body">
                   <form action="" id="customerForms" name="customerForms" style="border-radius: 0px;" class="form-horizontal group-border-dashed">

		<div align="center" style="display:none;" id="updateSuccess"> 
					<h4 >Successfully Updated...</h4>
					</div>

					<div align="center" style="display:none;" id="insertSuccess"> 
					<h4 class="text-primary">Successfully Insert</h4>
					</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Category</label>
					<div class="col-sm-7">
					 <div id="CategoryDiv">
					 <select name="Category" id="Category" class="form-control" onchange="getsubCategory(this.value)">
						<option value="">Select Category </option>
						
					  </select>
					</div>
					</div>
<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:150px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('ModuleCategory');">Add category</button>
					
					</div>



					<div class="form-group">
					<label class="col-sm-2 control-label">Sub Category </label>

						<div class="col-sm-3">
							<select name="subCategory[]" id="subCategory" class="form-control" multiple="multiple" >
							
							</select>
						</div>
						<div class="col-sm-1">
							<button type="button" id="search_right" class="btn btn-block" onclick="getmodule()"><i class="glyphicon glyphicon-chevron-right"></i></button>
							<button type="button" id="search_left" class="btn btn-block" onclick="getmoduleremove()"><i class="glyphicon glyphicon-chevron-left"></i></button>
						</div>
						<div class="col-sm-3">
						<select name="subCategory_to[]" id="subCategory_to" class="form-control" multiple="multiple"  >

						</select><div id="errorsubCategory_to" style="color:red"></div>
					</div>
<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:150px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('ModuleSubCategory');">Add Sub Category</button><br><br>
<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:150px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('Module');">Add Content</button>				
				</div>
					<div class="form-group">
					<label class="col-sm-2 control-label">Content</label>
					<div id="ResourceDiv"></div>
					</div>

 					<div class="form-group">
                                        <label class="col-sm-2 control-label">Schedule Date</label>
                                        <div class="col-sm-8">
                                            <fieldset>
                                                    <div class="controls">
                                                        <div class="input-prepend input-group"><span class="add-on input-group-addon primary"><span class="glyphicon glyphicon-th"></span></span>
                                                            <input id="reservation"  name="reservation" value="" placeholder="" class="form-control" type="text">
                                                        <div id="errorreservation" style="color:red"></div></div>
                                                    </div>

                                            </fieldset>
                                        </div>
                                    </div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Department </label>

						<div class="col-sm-3">
							<select name="from[]" id="search" class="form-control" multiple="multiple" >
							
							</select>
						</div>
						<div class="col-sm-1">
							<button type="button" id="search_rightSelected" class="btn btn-block" onclick="getEmplist()"><i class="glyphicon glyphicon-chevron-right"></i></button>
							<button type="button" id="search_leftSelected" class="btn btn-block" onclick="getEmplistremove()"><i class="glyphicon glyphicon-chevron-left"></i></button>
						</div>
						<div class="col-sm-3">
						<select name="to[]" id="search_to" class="form-control" multiple="multiple"  >

						</select> <div id="errorsearch_to" style="color:red"></div>
					</div>
<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:150px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('Department');">Add Department</button><br><br>
				<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:150px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('trainer');">Add Trainee</button>
				</div>
										
					<div class="form-group">
                                        <label class="col-sm-2 control-label">Trainees </label>
                                        <div class="col-sm-7"><div id="employeediv">
					<select aria-hidden="true" tabindex="-1" multiple="multiple"  name="employeelist[]" id="employeelist" class="select2 select2-hidden-accessible">
                                       
                                    </select> 
					</div>
					
                                        </div><div class="checkbox-warning">	<input class="styled" type="checkbox" name="select_All" id="select_All">
						<label for="checkbox3">&nbsp; Select All Trainees</label></div>
						
						<!--<button type="button" class="btn btn-info btn-sm" style="text-align:center; width:150px" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" onclick=" modalWindow('trainer');">Add Trainee</button>-->
                                    </div> 
                                   						
                                    <div class="form-group">

                                        <div class="col-sm-2" align="right"></div> 
                                       <div class="col-sm-7" align="right">
                                           	<button class="btn btn-success" type="button" id="homemenu" name="homemenu" value="homemenu"  onclick="submitForm('Mapping');">Submit</button>
                                        </div>
                                    </div>

				<input type="hidden" id="editId" name="editId" value="">
				<input type="hidden" id="arrayvalue" name="arrayvalue" value="">
				<input type="hidden" id="arrayvalue1" name="arrayvalue1" value="">
				<input type="hidden" id="arrayvaluenew1" name="arrayvaluenew1" value="">
				<input type="hidden" id="arrayvaluenew" name="arrayvaluenew" value="">
				<input type="hidden" id="selectallEmployee" name="selectallEmployee" value="">
				<input type="hidden" id="Trainer" name="Trainer" value="<?php echo $_SESSION['userid'] ?>">
				  <input type="hidden"  value="<?php echo $customerId ?>" name="customerId" id="customerId">
		       <input type="hidden"  value="<?php echo $_SESSION['userid'] ?>" name="loginuserId" id="loginuserId">	
                                </form>
                          </div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
							</div></div>

				

	</section>
				
		</div>
<div class="modal fade colored-header" id="myModal" role="dialog">
    		<div class="modal-dialog">
			
			<div class="row" id="DisplayModlaDiv"></div>	
	
     		</div>
	</div>

<script src="<?php echo $view['assets']->getUrl('select2/multiselect.min.js') ?>"></script>


<script>


function modalWindow(type)
{
	$.get( "userFunction",{ type : type},function(data) {
	$( "#DisplayModlaDiv" ).html( data );
		//App.formElements();
	})


}
</script>


<script type="text/javascript">
	$(document).ready(function() {
		//initialize the javascript
		App.init();
		App.formElements();
		$('#example').DataTable();

	});
    </script>
<script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker();
});
</script>
<script src="<?php echo $view['assets']->getUrl('select2/multiselect.min.js') ?>"></script>


<script>
getCategoryList();
getDepart();
function getsubCategory(catid){
	var i;
	$.get( "manage/getFunction",{type:"getsubCategoryMultiple",catid:catid} ,function( data ) {

	var result=JSON.parse(data);

	$("#subCategory").empty();
	$("#subCategory_to").empty();

	for(i=0;i<result['subCategoryList'].length;i++)
	{
	$("#subCategory").append($('<option></option>').attr("value", result['subCategoryList'][i]['subcatid']).text(result['subCategoryList'][i]['subcategory']));
	}

	});
}
function getCategoryList(){
var trainerId = <?php echo $loginemployeeuserId; ?>;

var type="getCategoryList";
	$.get( "manage/getFunction",{ type : type,trainerId : trainerId},function(data) {
	$('#CategoryDiv').html(data);

	});

}

function getmodule() 
{
var origin="#subCategory";
 var dest="#subCategory_to";

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
		$.get( "manage/getFunction",{ type : type, subCategory:catid_new},function(data) {
		$('#ResourceDiv').html(data);
		App.formElements();
		})
		$(origin).find(':selected').appendTo(dest);
	
}
function getmoduleremove() {
var origin="#subCategory";
 var dest="#subCategory_to";

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
			$.get( "manage/getFunction",{ type : type, subCategory:catid},function(data) {
			$('#ResourceDiv').html(data);
			App.formElements();
			})
		}

		else{
			$('#arrayvaluenew1').val('');
			var type="getModuleFile";	
			$.get( "manage/getFunction",{ type : type, subCategory:0},function(data) {
			$('#ResourceDiv').html(data);
		App.formElements();
			})	
		}
		$(dest).find(':selected').appendTo(origin);
		
}

function getDepart()
{
	var i;
	$.get( "manage/getFunction",{type:"getDepartmenttrainer"} ,function( data ) {

	var result=JSON.parse(data);

	$("#search").empty();
	$("#search_to").empty();

	for(i=0;i<result['departmList'].length;i++)
	{
	$("#search").append($('<option></option>').attr("value", result['departmList'][i]['dprtid']).text(result['departmList'][i]['department']));
	}

	});
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
		var type="getEmplisttrainer";	
		$.get( "manage/getFunction",{ type : type, deprtId:catid_new},function(data) {
		$('#employeediv').html(data);
		App.formElements();
		})
		$(origin).find(':selected').appendTo(dest);
	
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
			$.get( "manage/getFunction",{ type : type, deprtId:catid},function(data) {
			$('#employeediv').html(data);
			App.formElements();
			})
		}
		else{
			$('#arrayvaluenew').val('');
			var type="getEmplist";	
			$.get( "manage/getFunction",{ type : type, deprtId:0},function(data) {
			$('#employeediv').html(data);
		App.formElements();
			})	
		}
		$(dest).find(':selected').appendTo(origin);
		
}
		function submitForm(type) {

				if(type=='Mapping')
				{
				var getCategoryList = document.getElementById('CategoryId').value;
				if (getCategoryList == "")
				{
				$('#errorCategoryId').html("Please select a Category");
				document.getElementById('CategoryId').focus();
				return false;
				}
				else
				{
				$('#errorCategoryId').html(" ");
				}
                              var getCategoryList = document.getElementById('subCategory_to').value;
				if (getCategoryList == "")
				{
				$('#errorsubCategory_to').html("Please select a subCategory");
				document.getElementById('subCategory_to').focus();
				return false;
				}
				else
				{
				$('#errorsubCategory_to').html(" ");
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

								
				var reservation = document.getElementById('reservation').value;
				if (reservation == "")
				{
				$('#errorreservation').html("Please enter Date");
				document.getElementById('reservation').focus();
				return false;
				}
				else
				{
				$('#errorreservation').html(" ");
				}


                    var reservation = document.getElementById('search_to').value;
				if (reservation == "")
				{
				$('#errorsearch_to').html("Please select Department");
				document.getElementById('search_to').focus();
				return false;
				}
				else
				{
				$('#errorsearch_to').html(" ");
				}
			 if($('#select_All').prop("checked") == false){
				var employeelist = document.getElementById('employeelist').value;
				if (employeelist == "")
				{
				$('#erroremployeelist').html("Please select Trainees");
				document.getElementById('employeelist').focus();
				return false;
			
					}
				}
				else
				{
				$('#erroremployeelist').html(" ");

				var editId=$('#editId').val();

				$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type=MapModule", $( "#customerForms" ).serialize(),function() {
					$('html, body').animate({scrollTop : 0},800);
					$("#search_to").empty();
					$("#search").empty();
					$("#employeelist").empty();
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
		 if(type=="ModuleCategory"){
		 

			if ($('#Category').val()=='')
			{
			$('#errorCategory').html("Please enter the Category Name");
			document.getElementById('Category').focus();

			return false;
			}
			else
			{
			$('#errorCategory').html("");
			}

			var editId=$('#editId').val();
			$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type+"&val=1", $( "#customerForm" ).serialize(),function() {

			$('#customerForm')[0].reset();	
			if(editId==""){
			$('#insertSuccesss').show();

			}
			})
			}
		 if(type=="ModuleSubCategory"){
		 

		     if ($('#CategoryIdm').val()=='')
			{
			$('#errorCategorych').html("Please selec the Category");
			document.getElementById('CategoryIdm').focus();

			return false;
			}
			else
			{
			$('#errorCategorych').html("");
			}
		        
		        
		        if ($('#SubCategoryt').val()=='')
			{
			$('#errorSubCategorych').html("Please enter the subCategory");
			document.getElementById('SubCategoryt').focus();

			return false;
			}
			else
			{
			$('#errorSubCategorych').html("");
			}

		        

			var editId=$('#editId').val();
			$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type+"&val=1", $( "#customerForm" ).serialize(),function() {

			$('#customerForm')[0].reset();	
			if(editId==""){
			$('#insertSuccesss').show();

			}
			})
			}
			if(type=="Department"){
			
			if ($('#department').val()=='')
			{
			$('#errordepartment').html("Please enter the Department");
			document.getElementById('department').focus();

			return false;
			}
			else
			{
			$('#errordepartment').html("");
			}
			
			

			var editId=$('#editId').val();
			$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type="+type+"&val=1", $( "#customerForm" ).serialize(),function() {

			$('#customerForm')[0].reset();	
			if(editId==""){
			$('#insertSuccesss').show();

			}
			})
			}
		 if(type=="Module"){
		 
		 
		     if ($('#CategoryIdModule').val()=='')
			{
			$('#errorCategoryIdModule').html("Please select the Category");
			document.getElementById('CategoryIdModule').focus();

			return false;
			}
			else
			{
			$('#errorCategoryIdModule').html("");
			}
			
			if ($('#SubCategory').val()=='')
			{
			$('#errorSubCategory').html("Please select the SubCategory");
			document.getElementById('SubCategory').focus();

			return false;
			}
			else
			{
			$('#errorSubCategory').html("");
			}
			
			
			if ($('#ModuleName').val()=='')
			{
			$('#errorModuleName').html("Please enter the ContentName");
			document.getElementById('ModuleName').focus();

			return false;
			}
			else
			{
			$('#errorModuleName').html("");
			}
			
			
			
			if ($('#uploadedFile').val()=='')
			{
			$('#errorfile').html("Please upload File");
			document.getElementById('uploadedFile').focus();

			return false;
			}
			else
			{
			$('#errorfile').html("");
			}

			$('#progress').show();
                        $('#fileCancel').show();
			$('#homemenu').prop('disabled', true);
			var vFD = new FormData(document.getElementById('customerForm'));			
			var hrx= $.ajax({
			url: "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster')?>?type="+type+"&val=1",
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
						$('#customerForm')[0].reset();
						$("#insertSuccesss").show();
						$('#erroruploadedFile').html("");
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
			}
			
if(type=="trainer")
{

	
if ($('#Employeename').val()=='')
	{
	$('#errorEmployeename').html("Please enter the Trainee Name");
	document.getElementById('Employeename').focus();

	return false;
	}
	else
	{
	$('#errorEmployeename').html("");
	}
	
	if ($('#gid').val()=='')
	{
	$('#errorgid').html("Please enter the User Name");
	document.getElementById('gid').focus();

	return false;
	}
	
	else
	{
	$('#errorgid').html("");
	}
	
	if ($('#Password').val()=='')
	{
	$('#errorPassword').html("Please enter the Password / Chorus Id");
	document.getElementById('Password').focus();

	return false;
	}
	else
	{
	$('#errorPassword').html("");
	}
	
	if ($('#department').val()=='')
	{
	$('#errordepartment').html("Please select the Department");
	document.getElementById('departments').focus();

	return false;
	}
	else
	{
	$('#errordepartment').html("");
	}
	
	if ($('#location').val()=='')
	{
	$('#errorlocation').html("Please select the Location");
	document.getElementById('location').focus();

	return false;
	}
	else
	{
	$('#errorlocation').html("");
	}

	$('#errorMobile').html("");

	var editId=$('#editId').val();
	
	//var filePost = new FormData(document.getElementById('customerForm'));
	
	/*$.ajax({
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


	});*/
	$.get( "<?php echo $view['assets']->getUrl('manage/InsertAdminMaster');?>?type=Employee&val=1", $( "#customerForm" ).serialize(),function() {

					$('#customerForm')[0].reset();	
					if(editId==""){
					$('#insertSuccesss').show();
					$('#search_to').val("");
					getDepart();
					}
					else{
					$('#customerForm')[0].reset();	
					$('#updateSuccesss').show();
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
