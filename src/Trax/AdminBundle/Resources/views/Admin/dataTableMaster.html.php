
<br>
<?php if($mastertype=="MapModule" || $mastertype=="Employee" ){ ?>
 <a href="<?php if($mastertype=="MapModule") { echo $view['assets']->getUrl('manage/MapModule'); }else{ echo $view['assets']->getUrl('manage/addEmployeeMaster'); } ?>" type="button" class="btn btn-primary" >

<?php if($mastertype=="MapModule"){ 
		echo preg_replace('/([A-Z])/', ' $1', $mastertype); 
	}else if($mastertype=="Employee"){ echo "Add Trainee";
	}
	else{ 
		echo "Add".preg_replace('/([A-Z])/', ' $1', $mastertype); 
	} ?></a>
<?php }else if($mastertype=="ViewReadingHistory"){ }	 else{ ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="modalWindow();">Add <?php echo preg_replace('/([A-Z])/', ' $1', $mastertype);  ?></button>

<?php } ?>
<?php if($mastertype=='Customer'){?>
 <div class="widget-box">

          <div class="widget-content nopadding">
            <table id="example" class="table table-bordered data-table">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Customer Name</th>
                <th>User Name</th>
                <th>Password</th>

                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>
<?php for($i=0;$i<count($customerList);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $customerList[$i]['name']; ?></td>
                <td><?php echo $customerList[$i]['username']; ?></td>
                <td><?php echo $myownclass->encryptor('decrypt',$customerList[$i]['password']); ?></td>

                <td><?php echo $customerList[$i]['address']; ?></td>
		<th><a href="" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php echo $customerList[$i]['userid'];?>)">Edit</a></th>
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $customerList[$i]['userid']; ?>);">Delete</a></th>
            </tr>
	<?php } ?>
            
        </tbody>
    </table>
	</div> </div>

<?php } if($mastertype=='Department'){?>

<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Department</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php for($i=0;$i<count($DepartmentList);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $DepartmentList[$i]['department']; ?></td>
               	<th><a href="" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php echo $DepartmentList[$i]['dprtid'];?>)">Edit</a></th>
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $DepartmentList[$i]['dprtid']; ?>);">Delete</a></th>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>
<?php } if($mastertype=='BasicMaster'){?>

<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Name</th>
                <th>Manager Name</th>
                <th>Chorus Id</th>
                <th>GId</th>
            </tr>
        </thead>
        
        <tbody>

	<?php for($i=0;$i<count($BasicMaster);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
               <td><?php echo $BasicMaster[$i]['name']; ?></td>
                <td><?php echo $BasicMaster[$i]['managername']; ?></td>
                <td><?php echo $BasicMaster[$i]['chorusid']; ?></td>
                <td><?php echo $BasicMaster[$i]['gid']; ?></td>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>
<?php } if($mastertype=='Location'){?>

<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Location</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php for($i=0;$i<count($LocationList);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $LocationList[$i]['location']; ?></td>
               	<th><a href="" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php echo $LocationList[$i]['zoneid'];?>)">Edit</a></th>
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $LocationList[$i]['zoneid']; ?>);">Delete</a></th>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>
<?php } if($mastertype=='Employee'){?>


<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Name</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Employee Type</th>
		<th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php for($i=0;$i<count($EmployeeList);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $EmployeeList[$i]['name']; ?></td>
                <td><?php echo $EmployeeList[$i]['username']; ?></td>
                <td><?php echo $myownclass->encryptor('decrypt',$EmployeeList[$i]['password']); ?></td>
                <td ><?php echo $EmployeeList[$i]['employeetype']; ?> </td>
		<td> <?php if($EmployeeList[$i]['employeetype']=='Trainee'|| $EmployeeList[$i]['employeetype']=='Guest User'){ $type='Trainer'; $classcss='blue'; }else { $type="Trainee"; $classcss='red'; }  ?>


<a style="color:<?php echo $classcss; ?>" href='javascript:void(0);' onclick="makeOption(<?php echo "'".$EmployeeList[$i]['userid']."','".$type."','".$EmployeeList[$i]['employeetype']."'"; ?>);">Make <?php if($EmployeeList[$i]['employeetype']=='Trainee'|| $EmployeeList[$i]['employeetype']=='Guest User' ){ echo 'Trainer'; }else { echo "Trainee"; }  ?></a></td>
               	<th><a href="addEmployeeMaster?editId=<?php echo $EmployeeList[$i]['userid']; ?>">Edit</a></th>
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $EmployeeList[$i]['userid']; ?>);">Delete</a></th>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>
<?php } if($mastertype=='TrainingBatch') { ?>


	<table id="example" class="table table-striped table-bordered dt-responsive nowrap dt-responsive nowrap dynamicexample" cellspacing="0" width="100%">

		<thead>

			<tr> 
				<th class="centered-cell" data-class="expand">S.NO</th>
				<th class="centered-cell" data-class="expand">Training Batch </th>
				<th class="centered-cell" data-class="expand">Description</th>
				<th class="centered-cell" data-class="expand">Edit</th>
				<th class="centered-cell" data-class="expand">Delete</th>

			</tr>
		</thead>
		<tbody>
			<?php  for($i=0;$i<count($trainingbatchlist);$i++) { ?>



			<tr>
				<td class="centered-cell"><?php echo $i+1; ?></td>
				<td class="centered-cell"><?php echo $trainingbatchlist[$i]['batchname']; ?></td>
				<td class="centered-cell"><?php if($trainingbatchlist[$i]['description']!=''){ echo $trainingbatchlist[$i]['description'];} else{ echo $trainingbatchlist[$i]['description']; } ?></td>
				<th ><a href="javascript:void(0);" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php  echo $trainingbatchlist[$i]['batchid']; ?>);" >Edit </a></th>
				<th ><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $trainingbatchlist[$i]['batchid']; ?>);" >Delete </a></th>

			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } if($mastertype=='TrainingProgram') { ?>


	<table id="example" class="table table-striped table-bordered dt-responsive nowrap dt-responsive nowrap dynamicexample" cellspacing="0" width="100%">

		<thead>

			<tr> 
				<th class="centered-cell" data-class="expand">S.NO</th>
				<th class="centered-cell" data-class="expand">Training Program</th>
				<th class="centered-cell" data-class="expand">Batch Name</th>
				<th class="centered-cell" data-class="expand">Description</th>
				<th class="centered-cell" data-class="expand">Edit</th>
				<th class="centered-cell" data-class="expand">Delete</th>

			</tr>
		</thead>
		<tbody>
			<?php  for($i=0;$i<count($trainingprogramlist);$i++) { ?>



			<tr>
				<td class="centered-cell"><?php echo $i+1; ?></td>
				<td class="centered-cell"><?php echo $trainingprogramlist[$i]['programname']; ?></td>
				<td class="centered-cell"><?php echo $trainingprogramlist[$i]['batchname']; ?></td>
				<td class="centered-cell"><?php if($trainingprogramlist[$i]['description']!=''){ echo $trainingprogramlist[$i]['description'];} else{ echo $trainingprogramlist[$i]['description']; } ?></td>
				<th ><a href="javascript:void(0);" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php  echo $trainingprogramlist[$i]['prgid']; ?>);" >Edit </a></th>
				<th ><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $trainingprogramlist[$i]['prgid']; ?>);" >Delete </a></th>

			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } if($mastertype=='TrainingSchedule') { ?>


	<table id="example" class="table table-striped table-bordered dt-responsive nowrap dt-responsive nowrap dynamicexample" cellspacing="0" width="100%">

		<thead>

			<tr> 
				<th class="centered-cell" data-class="expand">S.NO</th>
				<th class="centered-cell" data-class="expand">Training Batch</th>
				<th class="centered-cell" data-class="expand">Program Name</th>
				<th class="centered-cell" data-class="expand">Training Name</th>
				<th class="centered-cell" data-class="expand">Date</th>
				<th class="centered-cell" data-class="expand">Employees</th>
				<!--<th class="centered-cell" data-class="expand">Edit</th>--->
				<th class="centered-cell" data-class="expand">Delete</th>

			</tr>
		</thead>
		<tbody>
			<?php  for($i=0;$i<count($TrainingSchedulelist);$i++) { ?>



			<tr>
				<td class="centered-cell"><?php echo $i+1;?> </td>
				<td class="centered-cell"><?php echo $TrainingSchedulelist[$i]['batchname']; ?></td>
				<td class="centered-cell"><?php echo $TrainingSchedulelist[$i]['programname']; ?></td>
				<td class="centered-cell"><?php echo $TrainingSchedulelist[$i]['trainername']; ?></td>
				<td class="centered-cell"><?php echo date_format($TrainingSchedulelist[$i]['scheduledate'],"d/m/Y"); ?></td>
				<td class="centered-cell"><?php echo $TrainingSchedulelist[$i]['employeename']; ?></td>
				<!--<th ><a href="javascript:void(0);" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php  echo $TrainingSchedulelist[$i]['scheid']; ?>);" >Edit </a></th>-->
				<th ><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $TrainingSchedulelist[$i]['scheid']; ?>);" >Delete </a></th>

			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } if($mastertype=='ModuleCategory'){?>

<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Module Category</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php for($i=0;$i<count($CategoryList);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $CategoryList[$i]['modulecategory']; ?></td>
                <td><?php echo $CategoryList[$i]['description']; ?></td>
               	<th><a href="" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php echo $CategoryList[$i]['cateid'];?>)">Edit</a></th>
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $CategoryList[$i]['cateid']; ?>);">Delete</a></th>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>
<?php } if($mastertype=='ModuleSubCategory'){?>

<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Module Sub Category</th>
                <th>Description</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php for($i=0;$i<count($SubCategoryList);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $SubCategoryList[$i]['subcategory']; ?></td>
                <td><?php echo $SubCategoryList[$i]['description']; ?></td>
              
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $SubCategoryList[$i]['subcatid']; ?>);">Delete</a></th>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>
<?php } if($mastertype=='Module'){?>
<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Module Category</th>
		<th>Module Name</th>
                <th>Description</th>
		<th>File</th>
                <!--<th>Edit</th>-->
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>

	<?php for($i=0;$i<count($modulefilelist);$i++)
		{ 
		
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $modulefilelist[$i]['modulecategory']; ?></td>
                <td><?php echo $modulefilelist[$i]['modulename']; ?></td>
                <td><?php echo $modulefilelist[$i]['description']; ?></td>
		<td><a href="<?php if($modulefilelist[$i]['filetype']=='Story'){ $pathArray= explode("/", $modulefilelist[$i]['filepath']);  echo "../uploadfiles/".$pathArray[7]."/".$pathArray[8]."/story.html"; }else{ echo "../uploadfiles/".$modulefilelist[$i]['filename']; } ?>"><?php echo $modulefilelist[$i]['filename']; ?></a></td>
               	<!--<th><a href="" data-toggle="modal"  data-target="#myModal" onclick="editFunction(<?php echo $modulefilelist[$i]['moduleid'];?>)">Edit</a></th>-->
		<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $modulefilelist[$i]['moduleid']; ?>);">Delete</a></th>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>
<?php } if($mastertype=='MapModule'){?>

<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Module Category</th>
                <th>Trainer Name</th>
		<th>Schedule Date</th>
                <th>Mapped Trainee</th>
	        <th>Delete</th>	

            </tr>
        </thead>
        
        <tbody>

	<?php  for($i=0;$i<count($MapModuleList);$i++)
		{ 
?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $MapModuleList[$i]['modulecategory']; ?></td>
                <td><?php echo ucfirst($MapModuleList[$i]['name']); ?></td>
		 <td>

<a href="javascript:void(0);" data-toggle="modal" data-target="#myModalupdate" onclick="viewdatepicker(<?php echo $i+1; ?>,<?php echo $MapModuleList[$i]['subcatid'];?>);"><?php echo $MapModuleList[$i]['scheduledate'];?></a>

			
		</td>
                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" onclick="modalWindowemployee('loademployeelist',<?php echo $MapModuleList[$i]['mapid']  ?>);">View Trainee</a></td>
               	<th><a href="javascript:void(0);" onclick="deleteFunction(<?php  echo $MapModuleList[$i]['mapid']; ?>);">Delete</a></th>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>


<?php } if($mastertype=='ViewReadingHistory'){?>

<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Trainee Name</th>
                <th>Module Name</th>
		<th>View  Date</th>

			

            </tr>
        </thead>
        
        <tbody>

	<?php   for($i=0;$i<count($historylist);$i++)
		{ 
$employeelist = $em->createQuery("SELECT j.userid,j.employeename,j.chorusid FROM TraxAdminBundle:TblEmployee j where j.userid='".$historylist[$i]['userid']."'")->getArrayResult();

$filenamelist = $em->createQuery("SELECT j.modulename,j.filename,j.filepath,j.filetype FROM TraxAdminBundle:TblModulefiles j where j.moduleid='".$historylist[$i]['moduleId']."'")->getArrayResult();




?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $employeelist[0]['employeename'].'-('.$employeelist[0]['chorusid'].')' ; ?></td>
		 <td><a href="<?php if($filenamelist[0]['filetype']=='Story')      { $pathArray= explode("/", $filenamelist[0]['filepath']);  echo "../uploadfiles/".$pathArray[7]."/".$pathArray[8]."story.html"; }else{ echo "../uploadfiles/".$filenamelist[0]['filename']; } ?>"><?php echo $filenamelist[0]['filename']; ?></a></td>
		<td><?php echo date_format($historylist[$i]['viewDate'], 'Y-m-d H:i:s'); ?></td>
            </tr>
	<?php } ?>

            
        </tbody>
    </table>


<?php } ?>




