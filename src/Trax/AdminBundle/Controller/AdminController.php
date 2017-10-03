<?php

namespace Trax\AdminBundle\Controller;
use Trax\AdminBundle\ExtraFunction\myownclass;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Trax\AdminBundle\Entity\TblUser;
use Trax\AdminBundle\Entity\TblLocation;
use Trax\AdminBundle\Entity\TblDepartment;
use Trax\AdminBundle\Entity\TblTrainingprogram;
use Trax\AdminBundle\Entity\TblTrainingschedule;
use Trax\AdminBundle\Entity\TblEmployee;
use Trax\AdminBundle\Entity\TblBatch;
use Trax\AdminBundle\Entity\TblModulecategory;
use Trax\AdminBundle\Entity\TblModulefiles;
use Trax\AdminBundle\Entity\TblMapmodule;
use Trax\AdminBundle\Entity\TblBasicdetails;
use Trax\AdminBundle\Entity\TblModulesubcategory;
use Trax\AdminBundle\Entity\TblViewHistory;
use Trax\AdminBundle\Entity\TblMapbatchtoemployee;
use Trax\AdminBundle\Entity\TblMapprogramtocategory;

class AdminController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('TraxAdminBundle:Admin:index.html.php');
    }
	public function getFunctionAction(Request $request)
    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$getFunctionType=$request->get('type'); 
		$loginuserId = $session->get('loginuserId');
		$frmoapp=$request->get('frmoapp'); 
		$myownclass = new myownclass();
		if($getFunctionType=="LoginCheck"){
			$username=$request->get('username');
			$password=$request->get('password');
			
			$userList = $em->createQuery("SELECT j.userid,j.usertypeid,j.name FROM TraxAdminBundle:TblUser j  where j.username='".$username."' and j.password='".$myownclass->encryptor('encrypt',$password)."'")->getArrayResult();
//print_r($userList);
			if($userList[0]['usertypeid']=='1')
			{		
				$session->set('loginId', $userList[0]['userid']);
				$session->set('loginuserId', $userList[0]['userid']);
				$session->set('loginExeType', $userList[0]['usertypeid']);
				$_SESSION['ExeType']= $userList[0]['usertypeid'];
				$_SESSION['customername']= $userList[0]['name'];
				echo trim($userList[0]['usertypeid']);
				
			}
			else if($userList[0]['usertypeid']=='2'){
				$session->set('loginId', $userList[0]['userid']);
				$session->set('loginuserId', $userList[0]['userid']);
				$session->set('loginExeType', $userList[0]['usertypeid']);
				$_SESSION['ExeType']= $userList[0]['usertypeid'];
				$_SESSION['customername']= $userList[0]['name'];
				echo trim($userList[0]['usertypeid']);
			}
			

		}
		if($getFunctionType=="LoginCheckApp"){
			$username=$request->get('username');
			$password=$request->get('password');

			$userList = $em->createQuery("SELECT j FROM TraxAdminBundle:TblUser j where j.username='".$username."' and j.password='".$myownclass->encryptor('encrypt',$password)."'")->getArrayResult();


				if($userList[0]['usertypeid']=='4')
				{		

					$userListarray[0]['surename']=(string)$userList[0]['surename'];
					$userListarray[0]['name']=(string)$userList[0]['name'];
					$userListarray[0]['chorusid']=(string)$userList[0]['chorusid'];
					$userListarray[0]['gid']=(string)$userList[0]['gid'];
					$userListarray[0]['userid']=(string)$userList[0]['userid'];
				}
				
				
		}
		if($getFunctionType=="getcontentdoclist"){
		$countprogram=0;
		$empid=$request->get('empid');			
		$CheckDate=$em->createQuery("SELECT k.scheduledate,k.mapid FROM TraxAdminBundle:TblMapbatchtoemployee j INNER JOIN TraxAdminBundle:TblMapmodule k with k.mapid=j.mapmoduleid where j.employeeid='".$empid."'")->getArrayResult();
//print_r($CheckDate);

		if(count($CheckDate)>0){
			 $todayDate=date("Y/m/d");
			for($i=0;$i<count($CheckDate);$i++){
		
				$scheldate=explode('-',$CheckDate[$i]['scheduledate']);

				$date=date_create($scheldate[0]);
				 $scheldateStart =date_format($date,"Y/m/d");
				$dateend=date_create($scheldate[1]);
				 $scheldateEnd =date_format($dateend,"Y/m/d");
						if($todayDate >= $scheldateStart && $todayDate <= $scheldateEnd){
							$mapId.=$CheckDate[$i]['mapid'].',';				
						}
						else{
							
						}						
					}	
				$mappedId=rtrim($mapId,',');
			
		if($mappedId!=""){
		$mapemploeelist = $em->createQuery("SELECT j.mapid,j.scheduledate,o.modulecategory,m.name as trainerName,o.description FROM TraxAdminBundle:TblMapmodule j INNER JOIN TraxAdminBundle:TblMapprogramtocategory k with k.mapmoduleid=j.mapid INNER JOIN TraxAdminBundle:TblModulecategory o with o.cateid=k.categoryid INNER JOIN TraxAdminBundle:TblUser m with m.userid=j.trainerid where j.mapid in (".$mappedId.")")->getArrayResult();
			}
			$mapmodulelistarray=$mapemploeelist;
			}
		}
		if($getFunctionType=="getTrainingProgram"){	
			$batchId=$request->get('batchId'); 	
			$trainingprogramList = $em->createQuery("SELECT j.prgid,j.programname FROM TraxAdminBundle:TblTrainingprogram j where j.adminid='".$loginuserId."' and j.batchid='".$batchId."'")->getArrayResult();
		}
		if($getFunctionType=="ModuleFile"){	
			$empid=$request->get('empid'); 	
			$mapId=$request->get('mapId'); 
			$mapModuleFileArray=array();
			
			$mapModule = $em->createQuery("SELECT j FROM TraxAdminBundle:TblMapprogramtocategory j where j.mapmoduleid='".$mapId."'")->getArrayResult();
			$mapModuleFileArr = $em->createQuery("SELECT j FROM TraxAdminBundle:TblModulefiles j where j.moduleid IN (".$mapModule[0]['moduleid'].")")->getArrayResult();
			//print_r($mapModuleFileArr);
			for($i=0;$i<count($mapModuleFileArr);$i++){
			
						$path=explode('/',$mapModuleFileArr[$i]['filepath']);
						$Reversextension=strrev($mapModuleFileArr[$i]['filename']);
						$extension=explode('.',$Reversextension);

						if($mapModuleFileArr[$i]['filetype']=="Story"){	
							$filename="story.html";
							$extensionName="story";
						}else if($mapModuleFileArr[$i]['filetype']=="story"){
							$filename=$mapModuleFileArr[$i]['filename'];
						}  else{					
							$filename=$mapModuleFileArr[$i]['filename'];
								$extensionName=strrev($extension[0]);
						}		

			$mapModuleFileArray[$i]['moduleid']=$mapModuleFileArr[$i]['moduleid'];
			$mapModuleFileArray[$i]['modulename']=$mapModuleFileArr[$i]['modulename'];
			$mapModuleFileArray[$i]['filetype']=$mapModuleFileArr[$i]['filetype'];
			$mapModuleFileArray[$i]['filename']=$mapModuleFileArr[$i]['filename'];
			$mapModuleFileArray[$i]['extension']=$extensionName;
			$mapModuleFileArray[$i]['filepath']=$path[7]."/".$path[8];
						
			}
		}
		if($getFunctionType=="getEmployeeList"){	
			$departId=$request->get('departId'); 
			$EmployeeList = $em->createQuery("SELECT j.empid,j.employeename FROM TraxAdminBundle:TblEmployee j where j.customerid='".$loginuserId."' and j.department='".$departId."' and j.employeetype='Employee'")->getArrayResult();	
			
		}
		if($getFunctionType=="ExistEmployee"){	
			$trainerNamelist = $em->createQuery("SELECT j.empid,j.employeename FROM TraxAdminBundle:TblEmployee j where j.customerid='".$loginuserId."' and j.employeetype='Trainer'")->getArrayResult();	
			
		}
		if($getFunctionType=="getsubCategory"){	
			$catid=$request->get('catid'); 	
			$subCategoryList = $em->createQuery("SELECT j.subcatid,j.subcategory FROM TraxAdminBundle:TblModulesubcategory j where j.catid='".$catid."' ")->getArrayResult();	
			
		}
		if($getFunctionType=="checkUserName"){
			$username=$request->get('username');
			$userlist = $em->createQuery("SELECT j.username FROM TraxAdminBundle:TblUser j  where j.username='".$username."'")->getArrayResult();
		}
		if($getFunctionType=="SessionList"){

			 $empid=$request->get('empid');
			$sessionList = $em->createQuery("SELECT j.scheduledate FROM TraxAdminBundle:TblTrainingschedule j  where j.employeeid='".$empid."'")->getArrayResult();
			for($i=0;$i<count($sessionList);$i++){
			$sessionListarray[$i]=date_format($sessionList[$i]['scheduledate'],'Y-m-d');
			}

		}
		if($getFunctionType=="SessionListEmp"){

			 $empid=$request->get('empid');
			$date=explode('T',$request->get('date'));
			$newdate=$date[0]." 00:00:00";
			
			$sessionList = $em->createQuery("SELECT k.batchname,l.programname,j.trainername FROM TraxAdminBundle:TblTrainingschedule j INNER JOIN TraxAdminBundle:TblBatch k with k.batchid=j.batchid INNER JOIN TraxAdminBundle:TblTrainingprogram l with l.prgid=j.programid where j.employeeid='".$empid."' and j.scheduledate='".$newdate."'")->getArrayResult();
			for($i=0;$i<count($sessionList);$i++){

			$sessionListEmparray[$i]['batchname']=$sessionList[$i]['batchname'];
			$sessionListEmparray[$i]['programname']=$sessionList[$i]['programname'];
			$sessionListEmparray[$i]['trainername']=$sessionList[$i]['trainername'];
			}

		}

		if($getFunctionType=="getfileinfo"){

			$empid=$request->get('empid');
			$moduleid=$request->get('id');

$mapmodulefileslist = $em->createQuery("SELECT j.moduleid,j.modulename,j.filename FROM TraxAdminBundle:TblModulefiles j where j.moduleid='".$moduleid."'")->getArrayResult();

		}
		if($getFunctionType=="getCategoryList"){
			
			$trainerId=$request->get('trainerId');
			$Categorylist=$em->createQuery("SELECT j.cateid,j.modulecategory,j.description  FROM TraxAdminBundle:TblModulecategory j  where j.trainerid='".$trainerId."'")->getArrayResult();
		}
		
		if($getFunctionType=="getCategoryListM"){
			
			$trainerId=$request->get('trainerId');
			$Categorylist=$em->createQuery("SELECT j.cateid,j.modulecategory,j.description  FROM TraxAdminBundle:TblModulecategory j  where j.trainerid='".$trainerId."'")->getArrayResult();
		}
		if($getFunctionType=="getCategoryListNew"){
			
			$trainerId=$request->get('trainerId');
			$Categorylist=$em->createQuery("SELECT j.cateid,j.modulecategory,j.description  FROM TraxAdminBundle:TblModulecategory j  where j.trainerid='".$trainerId."'")->getArrayResult();
		}
		if($getFunctionType=="getCategoryListmap"){
			
			$trainerId=$request->get('trainerId');
			$Categorylist=$em->createQuery("SELECT j.cateid,j.modulecategory,j.description  FROM TraxAdminBundle:TblModulecategory j  where j.trainerid='".$trainerId."'")->getArrayResult();
		}
		if($getFunctionType=="employeeDetails"){

			$customerId=$request->get('customerId');
			$employeename=$request->get('employeename');
			$employeeArray="";
			$employeeList = $em->createQuery("SELECT j.name,j.chorusid,j.managername FROM TraxAdminBundle:TblBasicdetails j  where j.name like '%".$employeename."%'")->getArrayResult();
			for($i=0;$i<count($employeeList);$i++){
				$employeeArray[$i]=$employeeList[$i]['name']." - (".$employeeList[$i]['managername'].")";
			}

		}
		if($getFunctionType=="getEmplist"){

			$deprtId=$request->get('deprtId');
			$departList=$em->createQuery("SELECT j.department,j.dprtid  FROM TraxAdminBundle:TblDepartment j where j.dprtid in (".$deprtId.")")->getArrayResult();
				
		}

if($getFunctionType=="getEmplisttrainer"){

			$deprtId=$request->get('deprtId');
			$departList=$em->createQuery("SELECT j.department,j.dprtid  FROM TraxAdminBundle:TblDepartment j where j.dprtid in (".$deprtId.")")->getArrayResult();

			
		}

		if($getFunctionType=="EmployeefullDetails"){

			$customerId=$request->get('customerId');
			$employeeId=explode('- ',$request->get('employeeId'));
			$employeeArray="";

			$employeeList = $em->createQuery("SELECT j.name,j.chorusid,j.gid,j.location,j.department,j.gender FROM TraxAdminBundle:TblBasicdetails j  where j.customerid='".$customerId."' and j.name='".$employeeId[0]."'")->getArrayResult();

					$employeeArray=$employeeList;
		}
		if($getFunctionType=="getDepartment"){	


			$departList = $em->createQuery("SELECT j.dprtid,j.department  FROM TraxAdminBundle:TblDepartment j  where j.customerid ='".$loginuserId."'")->getArrayResult();

			$deptListarray['departmList']=$departList;
			
		}
		if($getFunctionType=="getsubCategoryMultiple"){	

			$catid=$request->get('catid');
			$subCategoryList = $em->createQuery("SELECT j.subcatid,j.subcategory FROM TraxAdminBundle:TblModulesubcategory j where j.catid='".$catid."' ")->getArrayResult();
			$deptListarray['subCategoryList']=$subCategoryList;
			
		}

		if($getFunctionType=="getModuleFile"){	
			$subCategoryListarray=array();
			$subCategory=$request->get('subCategory');
			$subCategoryList = $em->createQuery("SELECT j.subcatid,j.subcategory FROM TraxAdminBundle:TblModulesubcategory j where j.subcatid in (".$subCategory.") ")->getArrayResult();

			$subCategoryListarray=$subCategoryList;
		}
if($getFunctionType=="getModuleFileNew"){	
			$subCategoryListarray=array();
			$subCategory=$request->get('subCategory');
			$subCategoryList = $em->createQuery("SELECT j.subcatid,j.subcategory FROM TraxAdminBundle:TblModulesubcategory j where j.subcatid in (".$subCategory.") ")->getArrayResult();

			$subCategoryListarray=$subCategoryList;
		}
if($getFunctionType=="getDepartmenttrainer"){	


			$departList = $em->createQuery("SELECT j.dprtid,j.department  FROM TraxAdminBundle:TblDepartment j  where j.customerid ='2'")->getArrayResult();

			$deptListarray['departmList']=$departList;
			
		}
		if($getFunctionType=="Changepassword"){

			
				 $userid=$request->get('empid');
				 $password=$request->get('password');
				 $newpassword=$request->get('newpassword');
			
				$em->createQuery("update TraxAdminBundle:TblUser j set j.password='".$myownclass->encryptor('encrypt',$newpassword)."' WHERE j.userid='".$userid."' ")->execute();		
		$successmsg['password']=$newpassword;
			}
		if($getFunctionType=="SendEmail"){

				 $email=$request->get('email');

		$usermaillist = $em->createQuery("SELECT j.name,j.emailid FROM TraxAdminBundle:TblUser j  where j.emailid='".$email."'")->getArrayResult();
		$newpassword = mt_rand(100000, 999999);
	

		}
		if($getFunctionType=="makeOption"){

				 $empId=$request->get('empId');
				 $currentType=$request->get('currentType');
				
				 $em->createQuery("update TraxAdminBundle:TblUser p set p.employeetype='".$currentType."' WHERE p.userid='".$empId."' ")->execute();

		}
		if($getFunctionType=="updatedatepicker"){

				 $subcatid=$request->get('subcatid');
				 $date=$request->get('reservation');

				 $em->createQuery("update TraxAdminBundle:TblMapmodule p set p.scheduledate='".$date."' WHERE p.mapid='".$subcatid."' ")->execute();

		}
		if($getFunctionType=="mapExtraTrainee"){

				$mapid=$request->get('mapid');

				$mappedList = $em->createQuery("SELECT j.employeeid FROM TraxAdminBundle:TblMapbatchtoemployee j  where j.mapmoduleid='".$mapid."'")->getArrayResult();

				for($i=0;$i<count($mappedList);$i++){
					$empid.=$mappedList[$i]['employeeid'].',';		
				}
				$empIds=rtrim($empid,',');

				$employeeList=$em->createQuery("SELECT j.userid,j.name,j.chorusid FROM TraxAdminBundle:TblUser j  where j.userid NOT IN (".$empIds.") and j.employeetype='Trainee'")->getArrayResult();
//print_r($employeeList);
		}
		if($getFunctionType=="viewhistory"){


			$empid=$request->get('empid');
			$moduleid=$request->get('moduleid');

			$usermaillist = $em->createQuery("SELECT j FROM TraxAdminBundle:TblViewHistory j  where j.moduleId='".$moduleid."' and j.empid='".$empid."'")->getArrayResult();
			if(count($usermaillist) <= 0)
			{

			$insert=new TblViewHistory();
			$insert->setEmpid($empid);
			$insert->setModuleId($moduleid);
			$insert->setViewDate(new \DateTime());	
			$em->persist($insert);
			$em->flush();
			}

			$successmsg[0]['msg']='success';


		}
        return $this->render('TraxAdminBundle:Admin:getFunction.html.php',array('getFunctionType'=>$getFunctionType,'trainingprogramList'=>$trainingprogramList,'EmployeeList'=>$EmployeeList,'trainerNamelist'=>$trainerNamelist,'userlist'=>$userlist,'frmoapp'=>$frmoapp,'userListarray'=>$userListarray,'mapmodulelistarray'=>$mapmodulelistarray,'sessionListarray'=>$sessionListarray,'mapmodulelistfilearray'=>$mapmodulelistfilearray,'mapmodulefileslist'=>$mapmodulefileslist,'sessionListEmparray'=>$sessionListEmparray,'employeeArray'=>$employeeArray,'subCategoryList'=>$subCategoryList,'Categorylist'=>$Categorylist,'departList'=>$departList,'employeeList'=>$employeeList,'em'=>$em,'loginuserId'=>$loginuserId,'deptListarray'=>$deptListarray,'userlistid'=>$userlistid,'successmsg'=>$successmsg,'usermaillist'=>$usermaillist,'newpassword'=>$newpassword,'subCategoryListarray'=>$subCategoryListarray,'mapModuleFileArray'=>$mapModuleFileArray));
    }
 public function adminMasterAction(Request $request)
   {

		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginExeType = $session->get('loginExeType');
		$master=$request->get('master');
		$loginuserId = $session->get('loginuserId');
		$deleteId=$request->get('deleteId'); 	
		if($loginExeType==1){			
 		$customerList = $em->createQuery("SELECT j.userid,j.name FROM TraxAdminBundle:TblUser j  where j.usertypeid=2 and j.status='active' ")->getArrayResult();
		}
		if($deleteId!=""){
			if($master=='Customer')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblUser j where j.userid='".$deleteId."'")->getArrayResult();
			
				}
			if($master=='Employee')
				{
				$em->createQuery("Delete FROM TraxAdminBundle:TblUser j where j.userid='".$deleteId."'")->getArrayResult();
				}
			if($master=='Department')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblDepartment j where j.dprtid='".$deleteId."'")->getArrayResult();
			
				}
			if($master=='Location')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblLocation j where j.zoneid='".$deleteId."'")->getArrayResult();
			
				}
			if($master=='TrainingBatch')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblBatch j where j.batchid='".$deleteId."'")->getArrayResult();
			
				}		
			if($master=='TrainingSchedule')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblTrainingschedule j where j.scheid='".$deleteId."'")->getArrayResult();
			
				}
			if($master=='TrainingProgram')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblTrainingprogram j where j.prgid='".$deleteId."'")->getArrayResult();
			
				}
			if($master=='ModuleCategory')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblModulecategory j where j.cateid='".$deleteId."'")->getArrayResult();
			
				}
			if($master=='ModuleSubCategory')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblModulesubcategory j where j.subcatid='".$deleteId."'")->getArrayResult();
			
				}
			if($master=='Module')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblModulefiles j where j.moduleid='".$deleteId."'")->getArrayResult();
			
				}
		
			if($master=='MapModule')
				{

				$em->createQuery("Delete FROM TraxAdminBundle:TblMapbatchtoemployee j where j.mapmoduleid='".$deleteId."'")->getArrayResult();
				$em->createQuery("Delete FROM TraxAdminBundle:TblMapprogramtocategory j where j.mapmoduleid='".$deleteId."'")->getArrayResult();
				$em->createQuery("Delete FROM TraxAdminBundle:TblMapmodule j where j.mapid='".$deleteId."'")->getArrayResult();
			
				}

			if($master=='loademployeelist')
				{
				$empid=$request->get('deleteId');
				$mapid=$request->get('mapid');
			
				$em->createQuery("Delete FROM TraxAdminBundle:TblMapbatchtoemployee j where j.employeeid='".$empid."'and j.mapmoduleid='".$mapid."'")->getArrayResult();
			
				}
		}

        return $this->render('TraxAdminBundle:Admin:adminMaster.html.php',array('master'=>$master,'loginExeType'=>$loginExeType,'customerList'=>$customerList,'loginuserId'=>$loginuserId));
    }
public function LoadModalContentAction(Request $request)
    {

		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$mastertype=$request->get('type');
		$loginExeType = $session->get('loginExeType');
			if($loginExeType==1){
				$customerList = $em->createQuery("SELECT j.userid,j.name,j.mobileno,j.address FROM TraxAdminBundle:TblUser j  where j.usertypeid=2 and j.status='active' ")->getArrayResult();
			}
			
			$editId=$request->get('editId');
			if($mastertype=='HomeMenu') 
			{						

				if($editId!=""){
					$editmenuList = $em->createQuery("SELECT j.menuid,j.menu,j.menudescription FROM TraxAdminBundle:TblHomemenu j  where j.status='active' and j.menuid='".$editId."'")->getArrayResult();
					//print_r($editmenuList);
				}
				
			}
			if($mastertype=='Customer') 
			{

				if($editId!=""){
					$editcustomerList = $em->createQuery("SELECT j.userid,j.name,j.mobileno,j.address,j.username,j.password,j.telephoneno FROM TraxAdminBundle:TblUser j  where j.usertypeid=2 and j.status='active' and j.userid ='".$editId."'")->getArrayResult();

				}
			
			}
			if($mastertype=='Location') 
			{

				if($editId!=""){
					$editLocation = $em->createQuery("SELECT j.zoneid,j.location,j.customerid  FROM TraxAdminBundle:TblLocation j  where j.zoneid ='".$editId."'")->getArrayResult();

				}
			}
			if($mastertype=='Department') 
			{
				$editId=$request->get('editId');
				if($editId!=""){
					$editDepartment = $em->createQuery("SELECT j.dprtid,j.department,j.customerid  FROM TraxAdminBundle:TblDepartment j  where j.dprtid ='".$editId."'")->getArrayResult();

				}
			}
			
			if($mastertype=='TrainingProgram') 
			{
				$batchlist = $em->createQuery("SELECT j.batchid,j.batchname,j.description,j.customerid  FROM TraxAdminBundle:TblBatch j  where j.customerid='".$loginuserId."'")->getArrayResult();

				if($editId!=""){
					$edittrainingProgram = $em->createQuery("SELECT j.prgid,j.programname,j.description,j.batchid  FROM TraxAdminBundle:TblTrainingprogram j  where j.prgid ='".$editId."'")->getArrayResult();

				}
			}
			if($mastertype=='TrainingSchedule') 
			{
				$batchlist = $em->createQuery("SELECT j.batchid,j.batchname,j.description,j.customerid  FROM TraxAdminBundle:TblBatch j  where j.customerid='".$loginuserId."'")->getArrayResult();
				$departList = $em->createQuery("SELECT j.dprtid,j.department  FROM TraxAdminBundle:TblDepartment j  where j.customerid ='".$loginuserId."'")->getArrayResult();
				$moduleCateList=$em->createQuery("SELECT j.cateid,j.modulecategory  FROM TraxAdminBundle:TblModulecategory j  where j.customerid ='".$loginuserId."'")->getArrayResult();

				if($editId!=""){
					$edittrainingProgram = $em->createQuery("SELECT j.prgid,j.programname,j.description,j.batchid  FROM TraxAdminBundle:TblTrainingprogram j  where j.prgid ='".$editId."'")->getArrayResult();
				}
			}
			if($mastertype=='ModuleCategory') 
			{
				$editId=$request->get('editId');
				if($editId!=""){
					$editModuleCategory = $em->createQuery("SELECT j.cateid,j.modulecategory,j.description  FROM TraxAdminBundle:TblModulecategory j  where j.cateid ='".$editId."'")->getArrayResult();

				}
				$TrainerList=$em->createQuery("SELECT j.userid,j.name  FROM TraxAdminBundle:TblUser j  where j.employeetype ='Trainer' and j.customerid='".$loginuserId."'")->getArrayResult();

			}
			if($mastertype=='ModuleSubCategory') 
			{
				$editId=$request->get('editId');
				
				if($editId!=""){
					$editModuleCategory = $em->createQuery("SELECT k.modulecategory,j.subcategory,j.description,j.subcatid FROM TraxAdminBundle:TblModulesubcategory j INNER JOIN  TraxAdminBundle:TblModulecategory k with k.cateid=j.catid where j.subcatid='".$editId."'")->getArrayResult();

				}
				$TrainerList=$em->createQuery("SELECT j.userid,j.name  FROM TraxAdminBundle:TblUser j  where j.employeetype ='Trainer' and j.customerid='".$loginuserId."'")->getArrayResult();
			}

			if($mastertype=='Module') 
			{
				$editId=$request->get('editId');
				$ModuleCategory = $em->createQuery("SELECT j.cateid,j.modulecategory FROM TraxAdminBundle:TblModulecategory j where j.customerid ='".$loginuserId."'")->getArrayResult();
			
				if($editId!=""){
					$editmodulefilelist = $em->createQuery("SELECT j.moduleid,j.modulename,j.description,j.modulecategory,j.filename FROM TraxAdminBundle:TblModulefiles j where j.moduleid='".$editId."'")->getArrayResult();

					$editModuleCategory = $em->createQuery("SELECT j.cateid,j.modulecategory,j.description  FROM TraxAdminBundle:TblModulecategory j where j.cateid ='".$editId."'")->getArrayResult();

				}
				$TrainerList=$em->createQuery("SELECT j.userid,j.name  FROM TraxAdminBundle:TblUser j  where j.employeetype ='Trainer' and j.customerid='".$loginuserId."'")->getArrayResult();

			}
			if($mastertype=='MapModule') 
			{
				$ModuleCategory = $em->createQuery("SELECT j.cateid,j.modulecategory FROM TraxAdminBundle:TblModulecategory j where j.customerid ='".$loginuserId."'")->getArrayResult();
				$departList = $em->createQuery("SELECT j.dprtid,j.department  FROM TraxAdminBundle:TblDepartment j  where j.customerid ='".$loginuserId."'")->getArrayResult();
			}
			
			if($mastertype=='loademployeelist') 
			{
				$mapid=$request->get('mapid');

				$getemployeevalue = $em->createQuery("SELECT k.name,k.userid,k.chorusid,k.gid,j.mapmoduleid FROM TraxAdminBundle:TblMapbatchtoemployee j INNER JOIN TraxAdminBundle:TblUser k with k.userid=j.employeeid where j.mapmoduleid='".$mapid."'")->getArrayResult(); 
//print_r($getemployeevalue);
			}
			if($mastertype=='updatescheduledate') 
			{
			  $id=$request->get('id');
			  $SelectDate = $em->createQuery("SELECT k FROM TraxAdminBundle:TblMapmodule k where k.mapid='".$id."'")->getArrayResult(); 		

			}
			if($mastertype=='Trainees') 
			{
			  $locationList = $em->createQuery("SELECT k FROM TraxAdminBundle:TblLocation k where k.customerid='".$loginuserId."' order by k.zoneid desc")->getArrayResult();
				$DepartmentList = $em->createQuery("SELECT j.dprtid,j.department  FROM TraxAdminBundle:TblDepartment j  where j.customerid ='".$loginuserId."'")->getArrayResult();

			}
        return $this->render('TraxAdminBundle:Admin:LoadModalContent.html.php',array('mastertype'=>$mastertype,'editId'=>$editId,'editDepartment'=>$editDepartment,'editEmployeeList'=>$editEmployeeList,'editLocation'=>$editLocation,'editcustomerList'=>$editcustomerList,'locationList'=>$locationList,'DepartmentList'=>$DepartmentList,'batchlist'=>$batchlist,'edittrainingProgram'=>$edittrainingProgram,'departList'=>$departList,'editModuleCategory'=>$editModuleCategory,'ModuleCategory'=>$ModuleCategory,'editmodulefilelist'=>$editmodulefilelist,'moduleCateList'=>$moduleCateList,'Categorylist'=>$Categorylist,'TrainerList'=>$TrainerList,'getemployeevalue'=>$getemployeevalue,'em'=>$em,'id'=>$id,'subcatid'=>$subcatid,'SelectDate'=>$SelectDate,'mapid'=>$mapid));
    }
public function dataTableMasterAction(Request $request)
    {

		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$mastertype=$request->get('type');
		$customerId=$request->get('customer');
		$myownclass = new myownclass();

			if($mastertype=='Customer') {
			
				$customerList = $em->createQuery("SELECT j.username,j.password,j.userid,j.name,j.mobileno,j.address FROM TraxAdminBundle:TblUser j  where j.usertypeid=2 and j.status='active' ")->getArrayResult();

			}
			
			if($mastertype=='Department'){

					$DepartmentList = $em->createQuery("SELECT j.dprtid,j.department FROM TraxAdminBundle:TblDepartment j  where j.customerid='".$customerId."'")->getArrayResult();
	
			}
			if($mastertype=='Location'){

					$LocationList = $em->createQuery("SELECT j.zoneid,j.location FROM TraxAdminBundle:TblLocation j  where j.customerid='".$customerId."'")->getArrayResult();
	
			}
			if($mastertype=='Employee'){
					
					$EmployeeList = $em->createQuery("SELECT j FROM TraxAdminBundle:TblUser j  where j.usertypeid=4 and j.status='active' ")->getArrayResult();	
			}
			if($mastertype=='TrainingBatch') 
			{

			$trainingbatchlist = $em->createQuery("SELECT j FROM TraxAdminBundle:TblBatch j where j.customerid='".$customerId."'")->getArrayResult();

			}
			if($mastertype=='TrainingProgram') 
			{
			
			$trainingprogramlist = $em->createQuery("SELECT j.prgid,j.programname,j.description,k.batchname FROM TraxAdminBundle:TblTrainingprogram j  INNER JOIN TraxAdminBundle:TblBatch k with k.batchid=j.batchid  where j.adminid='".$customerId."'")->getArrayResult();

			}
                        if($mastertype=='TrainingSchedule')
			{


			$TrainingSchedulelist = $em->createQuery("SELECT j.scheid,j.scheduledate,k.batchname,l.programname,j.trainername,m.employeename FROM TraxAdminBundle:TblTrainingschedule j  INNER JOIN TraxAdminBundle:TblBatch k with k.batchid=j.batchid  INNER JOIN TraxAdminBundle:TblTrainingprogram l with l.prgid=j.programid INNER JOIN TraxAdminBundle:TblEmployee m with m.empid=j.employeeid where j.customerid='".$customerId."'")->getArrayResult();			
			}
			if($mastertype=='ModuleCategory') 
			{
			
			$CategoryList = $em->createQuery("SELECT j.cateid,j.modulecategory,j.description FROM TraxAdminBundle:TblModulecategory j where j.customerid='".$customerId."'")->getArrayResult();

			}
			if($mastertype=='ModuleSubCategory') 
			{
			
			$SubCategoryList = $em->createQuery("SELECT j FROM TraxAdminBundle:TblModulesubcategory j where j.customerid='".$customerId."'")->getArrayResult();

			}
			if($mastertype=='Module') 
			{
			
			$modulefilelist = $em->createQuery("SELECT j.moduleid,j.modulename,j.description,k.modulecategory,j.filename,j.filepath, j.filetype FROM TraxAdminBundle:TblModulefiles j INNER JOIN TraxAdminBundle:TblModulecategory k with k.cateid=j.modulecategory where j.customerid='".$customerId."'")->getArrayResult();
			}
			if($mastertype=='MapModule') 
			{
		

			//$MapModuleList = $em->createQuery("SELECT j.description,k.modulecategory,j.employeeid,l.subcategory,l.subcatid,j.subcategory as subcatid,j.scheduledate FROM TraxAdminBundle:TblMapmodule j INNER JOIN  TraxAdminBundle:TblModulecategory k with k.cateid=j.categoryid  INNER JOIN TraxAdminBundle:TblModulesubcategory l with l.subcatid=j.subcategory where j.customerid='".$customerId."' group by j.subcategory ")->getArrayResult();

			$MapModuleList = $em->createQuery("SELECT j.mapid,j.scheduledate,m.modulecategory,l.name FROM TraxAdminBundle:TblMapmodule j INNER JOIN TraxAdminBundle:TblMapprogramtocategory k with k.mapmoduleid=j.mapid INNER JOIN TraxAdminBundle:TblModulecategory m with m.cateid=k.categoryid INNER JOIN TraxAdminBundle:TblUser l with l.userid =j.trainerid where j.customerid='".$customerId."' ")->getArrayResult();

			
			}
			if($mastertype=='ViewReadingHistory') 
			{
			$historylist = $em->createQuery("SELECT j FROM TraxAdminBundle:TblViewHistory j where j.empid is not null")->getArrayResult();
			}
			if($mastertype=='BasicMaster') 
			{
			$BasicMaster = $em->createQuery("SELECT j FROM TraxAdminBundle:TblBasicdetails j where j.customerid='".$customerId."'")->getArrayResult();


			}

        return $this->render('TraxAdminBundle:Admin:dataTableMaster.html.php',array('mastertype'=>$mastertype,'customerList'=>$customerList,'LocationList'=>$LocationList,'DepartmentList'=>$DepartmentList,'EmployeeList'=>$EmployeeList,'trainingbatchlist'=>$trainingbatchlist,'trainingprogramlist'=>$trainingprogramlist,'CategoryList'=>$CategoryList,'TrainingSchedulelist'=>$TrainingSchedulelist,'modulefilelist'=>$modulefilelist,'MapModuleList'=>$MapModuleList,'em'=>$em,'SubCategoryList'=>$SubCategoryList,'historylist'=>$historylist,'myownclass'=>$myownclass,'BasicMaster'=>$BasicMaster));
    }
 public function logoutAction(Request $request)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$session = $request->getSession();
		session_destroy();
		return $this->redirectToRoute('trax_user_homepage');
	
	//return $this->render('TraxAdminBundle:Admin:logout.html.php');
	}

public function InsertAdminMasterAction(Request $request)
    {

		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$type=$request->get('type');
		$myownclass = new myownclass();
		if($loginExeType==1){
				$customerId=$request->get('customer'); 
			}else{
				$customerId=$loginId;	
			}
			
			if($type=="Customer")
			{

					$Customername=$request->get('Customername'); 
					$Username=$request->get('Username'); 
					$Password=$myownclass->encryptor('encrypt',$request->get('Password'));
					$Mobile=$request->get('Mobile');
					$Address=$request->get('Address');
					$id=$request->get('editId');
					$uploadedFilenew = $request->files->get('uploadedFile');
					$uploadfile="";
					$ImagePath="";	
					$date=date("dMY_H:i:s");
					$path_parts = pathinfo($_FILES["uploadedFile"]["name"]);
					$path_parts['dirname'] ;
					$path_parts['basename'] ;
					$exten = $path_parts['extension'] ;
					$filename= $path_parts['filename'] ;
					$uploadedFile = $filename.'_'.$date.'.'.$exten;
									
					if($id=="")
					{
														
						if($uploadedFile!=""){
							$uploadfile = $uploadedFile;
							$uploadurl = '/var/www/html/MichelinClassroom/web/logofile/';
							$directoryName=$uploadurl.$Customername;
							mkdir($directoryName,0777);
							$ImagePath=$directoryName.'/'.$uploadedFile;
							$Tempfile= $_FILES["uploadedFile"]["tmp_name"];
							move_uploaded_file($Tempfile,$ImagePath);
							chmod($ImagePath, 0777);

						}

						$insert=new TblUser();
						$insert->setUsername($Username);
						$insert->setPassword($Password);
						$insert->setName($Customername);
						$insert->setEmailid($Username);
						$insert->setMobileno($Mobile);
						$insert->setAddress($Address);
						$insert->setFilename($uploadfile);
						$insert->setImagepath($ImagePath);
						$insert->setUsertypeid(2); 
						$insert->setAdminid($loginuserId);
						$insert->setCreatedat(new \DateTime());	
						$insert->setStatus("active");
						$em->persist($insert);
						$em->flush();

					}
					else
					{
			
					$em->createQuery("update TraxAdminBundle:TblUser j set j.name='".$Customername."',j.mobileno='".$Mobile."',j.address='".$Address."',j.telephoneno='".$Telphone."' WHERE j.userid='".$id."' ")->execute();
					
					}
			
			

			}
			
			if($type=="Location")
			{
				$Location=$request->get('Location'); 
				$id=$request->get('editId');

				if($id=="")
				{
					$insert=new TblLocation();
					$insert->setLocation($Location);
					$insert->setCustomerid($customerId);
					$insert->setAdminid($loginId);
					$insert->setCreatedat(new \DateTime());				
					$em->persist($insert);
					$em->flush();

				}
				else
				{
				$em->createQuery("update TraxAdminBundle:TblLocation p set p.location='".$Location."',p.customerid='".$customerId."' WHERE p.zoneid='".$id."' ")->execute();
					
				}	
			}
			if($type=="Department")
			{			
				$val=$request->get('val'); 
				if($val==1){
				$customerId=$request->get('customerId'); 
				$loginId=$request->get('Trainer'); 
				}
				$department=$request->get('department'); 
				$id=$request->get('editId');

				if($id=="")
				{
					$insert=new TblDepartment();
					$insert->setDepartment($department);
					$insert->setCustomerid($customerId);
					$insert->setAdminid($loginId);
					$insert->setCreatedat(new \DateTime());				
					$em->persist($insert);
					$em->flush();

				}
				else
				{
				$em->createQuery("update TraxAdminBundle:TblDepartment p set p.department='".$department."',p.customerid='".$customerId."' WHERE p.dprtid='".$id."' ")->execute();
					
				}	
			}
			if($type=="Employee")
			{

				$val=$request->get('val'); 
				if($val=='1'){
					
					$customerId=$request->get('customerId');
					$loginId=$request->get('loginemployeeuserId');  
					$employeeType="Trainee";
					$usertypeid="4";	
					$loginuserId=$customerId;		
				}
				else{

					if($loginExeType==1){
					$customerId=$request->get('customer'); 
					}else{
					$customerId=$loginId;	
					}
					$userTypeId=$request->get('userTypeId');
					if($userTypeId!=""){
						if($userTypeId=="Trainer"){
						$employeeType="Trainer";
						$usertypeid="4"; 
						}
						else if($userTypeId=="Guest Trainer"){
						$employeeType="Guest Trainer";
						$usertypeid="4"; 
						}
						
					}
					else{
						 $employeeType="Trainee";
						  $usertypeid="4";  
					}
					
	
				}


				$Employeename=explode('-',$request->get('Employeename'));
				$emplarra=explode(',',$Employeename[0]);
				if($emplarra[1]!=""){
					$employeename=$emplarra[1];
					$surename=$emplarra[0];
				}
				else{
					$employeename=$emplarra[0];
					$surename=$emplarra[0];
				}
				
				$Username=$request->get('gid');
				$gender=$request->get('gender'); 
				$chorusId=$request->get('chorusId');  
				$Password=$request->get('Password'); 
				$department=$request->get('department');
				$location=$request->get('location'); 
				$id=$request->get('editId');
				$uploadfile="";
				$ImagePath="";	
				$date=date("dMY_H:i:s");
				$path_parts = pathinfo($_FILES["uploadedFile"]["name"]);				
				if($id=="")
				{

					if($_FILES["uploadedFile"]["name"]!=""){
					$path_parts['dirname'] ;
					$path_parts['basename'] ;
					$exten = $path_parts['extension'] ;
					$filename= $path_parts['filename'] ;
					$uploadedFile = $filename.'_'.$date.'.'.$exten;
					$customerName = $em->createQuery("SELECT j.name FROM TraxAdminBundle:TblUser j  where j.userid='".$loginuserId."' ")->getArrayResult();
					$uploadfile = $uploadedFile;
					$uploadurl = '/var/www/html/MichelinClassroom/web/logofile/';
					$uploadfilenew='logofile/'.$customerName[0]['customername'].'/'.$uploadedFile;
					$directoryName=$uploadurl.$customerName[0]['customername'];
					$ImagePath=$directoryName.'/'.$uploadedFile;
					$Tempfile= $_FILES["uploadedFile"]["tmp_name"];
					move_uploaded_file($Tempfile,$ImagePath);
					chmod($ImagePath, 0777);
					}

					$insert=new TblUser();
					$insert->setUsername($Username);
					$insert->setPassword($myownclass->encryptor('encrypt',$Password));
					$insert->setSurename($surename);
					$insert->setName($employeename);
					$insert->setGender($gender);
					$insert->setEmployeetype($employeeType);
					$insert->setDepartment($department);
					$insert->setLocation($location);
					$insert->setChorusid($Password);
					$insert->setGid($Username);
					$insert->setFilename($uploadfilenew);
					$insert->setImagepath($ImagePath);
					$insert->setUsertypeid($usertypeid); 
					$insert->setCustomerid($customerId);
					$insert->setAdminid($loginId);
					$insert->setCreatedat(new \DateTime());						
					$insert->setStatus("active");
					$em->persist($insert);
					$em->flush();
   					echo "Success";				

				}
				else
				{

				$surename=$request->get('surename'); 
				$Employeename=$request->get('Employeename'); 
				$gid=$request->get('gid'); 
				$Password=$request->get('Password'); 
				$userTypeId=$request->get('userTypeId'); 
				$gender=$request->get('gender'); 
				$department=$request->get('department'); 
				$location=$request->get('location'); 
				$em->createQuery("update TraxAdminBundle:TblUser p set p.password='".$myownclass->encryptor('encrypt',$Password)."',p.surename='".$surename."',p.name='".$Employeename."',p.gender='".$gender."',p.department='".$department."',p.location='".$location."',p.employeetype='".$userTypeId."' WHERE p.userid='".$id."' ")->execute();
				echo "Update";					
				}
				
			}
		if($type=="TrainingBatch")
			{

 				$batchName=$request->get('batchName'); 
				$Description=$request->get('Description'); 
				 $id=$request->get('editId'); 
				if($id=="")
				{
					$insert=new TblBatch();
					$insert->setBatchname($batchName);
					$insert->setDescription($Description);
					$insert->setAdminid($loginId);
					$insert->setCustomerid($customerId);
					$insert->setCreatedat(new \DateTime());				
					$em->persist($insert);
					$em->flush();

				}	
				else
				{
				$em->createQuery("update TraxAdminBundle:TblBatch p set p.batchname='".$batchName."',p.description='".$Description."',p.customerid='".$customerid."'  WHERE p.batchid='".$id."' ")->execute();
					
				}

			}
			if($type=="TrainingProgram")
			{

				$batchName=$request->get('batchName'); 
				$Programname=$request->get('Programname'); 
				$Description=$request->get('Description'); 
				$id=$request->get('editId');

				if($id=="")
				{
					$insert=new TblTrainingprogram();
					$insert->setBatchid($batchName);
					$insert->setProgramname($Programname);
					$insert->setDescription($Description);
					$insert->setAdminid($customerId);
					$insert->setCreatedat(new \DateTime());				
					$em->persist($insert);
					$em->flush();

				}
				else
				{
				$em->createQuery("update TraxAdminBundle:TblTrainingprogram p set p.programname='".$Programname."',p.description='".$Description."'  WHERE p.prgid='".$id."' ")->execute();
					
				}

			}
     			if($type=="TrainingSchedule")
			{
				$batchName=$request->get('batchName'); 
				$ProgramName=$request->get('ProgramName'); 
				$Trainername=$request->get('Trainername'); 
				$date=$request->get('date'); 
				$Department=$request->get('Department'); 
				$ModuleCategory=$request->get('ModuleCategory'); 
				$employeelist=$request->get('employeelist'); 
				$id=$request->get('editId');
			        
				if($id=="")
				{
					for($i=0;$i<count($employeelist);$i++)
					{ 
						$insert=new TblTrainingschedule();
						$insert->setBatchid($batchName);
						$insert->setProgramid($ProgramName);
						$insert->setModulecateid($ModuleCategory);
						$insert->setTrainername($Trainername);
						$insert->setScheduledate(new \DateTime($date));
						$insert->setDepartid($Department);
						$insert->setCustomerid($customerId);
						$insert->setAdminid($loginId);
						$insert->setEmployeeid($employeelist[$i]);
						$insert->setCreatedat(new \DateTime());
						$em->persist($insert);
						$em->flush();
					}
				}
			}
			if($type=="ModuleCategory")
			{
				$Category=$request->get('Category'); 
				$Description=$request->get('Description'); 
				$loginIdTrainer=$request->get('Trainer');
				$val=$request->get('val'); 
				if($val=='1'){
					
					$customerId=$request->get('customerId');
					$loginId=$request->get('Trainer');
				}
				else{

				}				
				$id=$request->get('editId');
		
				if($id=="")
				{
					$insert=new TblModulecategory();
					$insert->setModulecategory($Category);
					$insert->setDescription($Description);
					$insert->setTrainerid($loginIdTrainer);
					$insert->setCustomerid($customerId);
					$insert->setAdminid($loginId);
					$insert->setCreatedat(new \DateTime());				
					$em->persist($insert);
					$em->flush();

				}
				else
				{
				$em->createQuery("update TraxAdminBundle:TblModulecategory p set p.modulecategory='".$Category."',p.description='".$Description."' WHERE p.cateid='".$id."' ")->execute();
					
				}	
			}
			if($type=="ModuleSubCategory")
			{
				$loginIdTrainer=$request->get('Trainer'); 
				$CategoryId=$request->get('CategoryId'); 
				$Description=$request->get('Description'); 
				$SubCategory=$request->get('SubCategory'); 
				$val=$request->get('val'); 

				if($val=='1'){
					$customerId=$request->get('customerId');
					$loginId=$request->get('loginemployeeuserId');  
				}
				
				$id=$request->get('editId');

				if($id=="")
				{
					$insert=new TblModulesubcategory();
					$insert->setCatid($CategoryId);
					$insert->setSubcategory($SubCategory);
					$insert->setDescription($Description);
					$insert->setTrainerid($loginIdTrainer);
					$insert->setCustomerid($customerId);
					$insert->setAdminid($loginId);
					$insert->setCreatedat(new \DateTime());				
					$em->persist($insert);
					$em->flush();

				}
				else
				{
				$em->createQuery("update TraxAdminBundle:TblModulesubcategory p set p.catid='".$CategoryId."',p.subcategory='".$SubCategory."',p.description='".$Description."' WHERE p.subcatid='".$id."' ")->execute();
					
				}	
			}
			
			if($type=="Module")
			{

				$val=$request->get('val'); 
				if($val=='1'){
					
					$customerId=$request->get('customerId');
					$loginId=$request->get('Trainer');  
				}
				else{

				}
					$Trainer=$request->get('Trainer');
					$fileType="";
					$Category=$request->get('CategoryId');
					$ModuleName=$request->get('ModuleName');
					$Description=$request->get('Description');
					$id=$request->get('editId');
					$SubCategory=$request->get('SubCategory'); 
					$uploadedFilenew = $request->files->get('uploadedFile');
					$uploadfile="";
					$ImagePath="";
					$date=date("dMY_H:i:s");
					$path_parts = pathinfo($_FILES["uploadedFile"]["name"]);
					$path_parts['dirname'] ;
					$path_parts['basename'] ;
					$exten = $path_parts['extension'] ;
					$filename= $path_parts['filename'] ;
					$uploadedFile = $filename.'_'.$date.'.'.$exten;
					$categoreyName=$em->createQuery("SELECT p FROM TraxAdminBundle:TblModulesubcategory p where p.subcatid='".$SubCategory."' ")->getArrayResult();
					$catName=$categoreyName[0]['subcategory'];
					if($id=="")
					{
						if($exten== 'jpg' || $exten== 'png' || $exten== 'jpeg' || $exten== 'gif' || $exten== 'zip' ||  $exten== 'odt'|| $exten== 'ods' || $exten== 'odp' || $exten== 'pdf' || $exten== 'mp4'|| $exten== 'webm'|| $exten== 'ogg'|| $exten== 'mp3' || $exten== '3gp' || $exten== 'mkv' ||$exten== '3gpp'|| $exten=='avi'||$exten=='flv')	
						{
								if($uploadedFile!=""){
							
									if($exten != 'zip'){
									$uploadfile = $uploadedFile;
									$uploadurl = '/var/www/html/MichelinClassroom/web/uploadfiles';
									$ImagePath=$uploadurl.'/'.$catName;
									mkdir($ImagePath,0777);
									chmod($ImagePath, 0777);
									$type=$ImagePath."/".$uploadfile;
									$Tempfile= $_FILES["uploadedFile"]["tmp_name"];
									move_uploaded_file($Tempfile,$type);
									chmod($type, 0777);
    									
									if($exten=='avi'){
										rename($type, preg_replace('/\s+/', '',$type));
										$newFilename=preg_replace('/\s+/', '',$type);
										exec('assets/ffmpeg.exe');
										exec("ffmpeg -i ".$newFilename." -an ".$ImagePath."/". preg_replace('/\s+/', '',$filename)."_".$date.".mp4");			
										$Filepath=$ImagePath."/".preg_replace('/\s+/', '',$filename)."_".$date.".mp4";
										unlink($newFilename);
									}else if($exten=='flv'){
										rename($type, preg_replace('/\s+/', '',$type));
										$newFilename=preg_replace('/\s+/', '',$type);
										exec('assets/ffmpeg.exe');
										exec("ffmpeg -i ".$newFilename." -c:v libx264 ".$ImagePath."/". preg_replace('/\s+/', '',$filename)."_".$date.".mp4");			
										$Filepath=$ImagePath."/".preg_replace('/\s+/', '',$filename)."_".$date.".mp4";
										unlink($newFilename);
									} else{
										$Filepath=$type;
									}									

									}else{

									$fileType="Story";
									$uploadfile = $filename.'_'.$date;
									$uploadurl = '/var/www/html/MichelinClassroom/web/uploadfiles';
									$ImagePath=$uploadurl.'/'.$catName;
									mkdir($ImagePath,0777);
									chmod($ImagePath, 0777);
									$directoryName=$ImagePath.'/'.$uploadfile;
									mkdir($directoryName,0777);
									chmod($directoryName, 0777);
									$Tempfile= $_FILES["uploadedFile"]["tmp_name"];
									$file=$_FILES["uploadedFile"];
									$ImagePath=$directoryName;
									$fileextr=$ImagePath."/".$_FILES["uploadedFile"]["name"];
									$Filepath=$ImagePath;
									move_uploaded_file($Tempfile,$fileextr);
									$zip = new \ZipArchive();
									if ($zip->open($fileextr) === TRUE) {
									$zip->extractTo($directoryName);
									$zip->close();
									} 
									unlink($fileextr);
							

									}
									
								}
						$insert=new TblModulefiles();
						$insert->setModulecategory($Category);
						$insert->setSubcategory($SubCategory);
						$insert->setModulename($ModuleName);
						$insert->setDescription($Description);
						$insert->setTrainerid($Trainer);
						$insert->setFiletype($fileType);
						$insert->setFilename($uploadfile);
						$insert->setFilepath($Filepath);
						$insert->setCustomerid($customerId);
						$insert->setAdminid($loginId);
						$insert->setCreatedat(new \DateTime());	
						$em->persist($insert);
						$em->flush();
						echo "Success";	
						}
						else{

						echo "Invalid File formate";	
						}
								
						
						
				}				
				else
				{

						if($exten == 'odt' || $exten == 'odp' || $exten == 'ods' || $exten == 'pdf')	
						{
							if($uploadedFile!=""){

								$uploadfile = $uploadedFile;
								$uploadurl = '/var/www/html/MichelinClassroom/web/uploadfiles';
								$ImagePath=$uploadurl.'/'.$uploadfile;
								$Tempfile= $_FILES["uploadedFile"]["tmp_name"];
								move_uploaded_file($Tempfile,$ImagePath);
								chmod($ImagePath, 0777);
					
								}

					$em->createQuery("update TraxAdminBundle:TblModulefiles p set p.modulecategory='".$Category."',p.modulename='".$ModuleName."',p.description='".$Description."',p.filename='".$uploadfile."',p.filepath='".$ImagePath."' WHERE p.moduleid='".$id."' ")->execute();
						}
					
				}	
	
			}

			if($type=="MapModule")
			{				
//print_r($_REQUEST);
				$Trainer=$request->get('Trainer'); 
				$customerId=$request->get('customerId'); 
				if($customerId!=''){
					$customerId=$customerId;
					$loginId=$request->get('loginuserId'); 
				}
				else{
					$customerId = $session->get('loginId');
				}			
				$Category=$request->get('CategoryId'); 
				$SubCategory=implode(",",$request->get('subCategory_to')); 
				$elearningModule=implode(",",$request->get('elearningModule')); 
				$reservation=$request->get('reservation'); 
				$select_All=$request->get('select_All');
				$Description=$request->get('Description');

				if($select_All=="on"){
				 $selectallEmployee=$request->get('selectallEmployee');				
				$Trainee=$em->createQuery("SELECT j.userid FROM TraxAdminBundle:TblUser j where j.department in (".$selectallEmployee.") and j.employeetype ='Trainee' and j.customerid='".$customerId."' ")->getArrayResult();
//print_r($Trainee);

				for($k=0; $k<count($Trainee); $k++){
						$employee.=$Trainee[$k]['userid'].",";
					}
					
				$employeelistarr =rtrim($employee,',');
					$employeelist=explode(',',$employeelistarr);		
				}
				else{
				$employeelist=$request->get('employeelist'); 
				}
				$id=$request->get('editId');
				
				if($id=="")
				{
						$insert=new TblMapmodule();
						$insert->setTrainerid($Trainer);
						$insert->setScheduledate($reservation);
						$insert->setCustomerid($customerId);
						$insert->setAdminid($loginId);
						$insert->setCreatedat(new \DateTime());				
						$em->persist($insert);
						$em->flush();
					   	
							$mapid = $insert->getMapid();
							$insert=new TblMapprogramtocategory();
							$insert->setMapmoduleid($mapid);
							$insert->setCategoryid($Category);
							$insert->setSubcategoryid($SubCategory);
							$insert->setModuleid($elearningModule);
							$insert->setCustomerid($customerId);
							$insert->setAdminid($loginId);
							$insert->setCreatedat(new \DateTime());				
							$em->persist($insert);
							$em->flush();

						for($i=0;$i<count($employeelist);$i++){
							$insert=new TblMapbatchtoemployee();
							$insert->setMapmoduleid($mapid);
							$insert->setEmployeeid($employeelist[$i]);
							$insert->setCustomerid($customerId);
							$insert->setAdminid($loginId);
							$insert->setCreatedat(new \DateTime());				
							$em->persist($insert);
							$em->flush();	
						}
					

					
				}
				else
				{
							
				}	
			}

			if($type=="MapModuleNew")
			{
				$customerId = $session->get('customerId');
				$department=$request->get('department');
				$cate=$request->get('category');
				$loginId = $request->get('loginId');
				$employee=$request->get('employee');
				$depforEmp=$request->get('depforEmp');
				//echo "category".$cate."department".$department;


				$department=explode(",",$department);
				$cate=explode(",",$cate);
				$employee=explode(",",$employee);
				for($i=0; $i<count($department); $i++)
				{
					if($department!="")
					{
					$mapping = $em->createQuery("SELECT j.empid FROM TraxAdminBundle:TblEmployee j where j.department='".$department[$i]."' and j.employeetype ='Employee' and j.customerid='".$customerId."' ")->getArrayResult();
					for($j=0; $j<count($mapping); $j++)
					{
						$studid=$mapping[$j]['empid'];
						for($k=0; $k<count($cate); $k++)
						{
							$insert=new TblMapmodule();
							$insert->setCategoryid($cate[$k]);
							$insert->setDepartid($department[$i]);
							$insert->setEmployeeid($studid);
							$insert->setDescription($Description);
							$insert->setCustomerid($customerId);
							$insert->setAdminid($loginId);
							$insert->setCreatedat(new \DateTime());				
							$em->persist($insert);
							$em->flush();
						}
					}
					}
				}

				for($i=0; $i<count($employee); $i++)
				{
					$studid=$employee[$i];
					if($studid!="")
					{
						for($j=0;$j<count($cate);$j++)
						{
								$insert=new TblMapmodule();
								$insert->setCategoryid($cate[$j]);
								$insert->setDepartid($depforEmp);
								$insert->setEmployeeid($studid);
								$insert->setDescription($Description);
								$insert->setCustomerid($customerId);
								$insert->setAdminid($loginId);
								$insert->setCreatedat(new \DateTime());				
								$em->persist($insert);
								$em->flush();
							echo $msg="Successfully Inserted";
						}
					}
					else
					{
							echo $msg=""; 
					}
				}

			}
		if ($type=="uploadMaster") 
		{
		
			$csvMimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');

			if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes))
			{
				if(is_uploaded_file($_FILES['file']['tmp_name']))
				{
				$csvFile = fopen($_FILES['file']['tmp_name'], 'r');
	
				$arrCSV=array();
				$i=0;
				$em->createQuery("Delete FROM TraxAdminBundle:TblBasicdetails j where j.customerid='".$customerId."'")->execute();
					while(($data = fgetcsv($csvFile, 1000, ",")) !== FALSE)
					{

					$arrCSV[$i]=$data;
					$num =count($data);
					$i++;
					}

					//print_r($arrCSV);
					for($j=1;$j<count($arrCSV);$j++)
					{						
						$gidCheck = $em->createQuery("SELECT j.gid FROM TraxAdminBundle:TblBasicdetails j where j.location like '%".$arrCSV[$j][3]."%' and j.customerid='".$customerId."'")->getArrayResult();
						if(count($gidCheck)==""){
							$insert=new TblBasicdetails();
							$insert->setName($arrCSV[$j][1]);
							$insert->setManagername($arrCSV[$j][2]);
							$insert->setChorusid($arrCSV[$j][0]);
							$insert->setGid($arrCSV[$j][3]);
							$insert->setCustomerid($customerId);
							$insert->setAdminid($loginuserId);
							$insert->setCreatedat(new \DateTime());				
							$em->persist($insert);
							$em->flush();
							
						}					

					}        
					echo "Success";           

					fclose($csvFile);

			  
				}	
	
			}          
			else{
				echo "invalid";
			}
		}
		if($type=="loademployeelist"){
			 $mapId=$request->get('mapId');
			 $employeelist=$request->get('employeelist');
				$val=$request->get('val'); 
				if($val==1){
				$customerId=$request->get('customerId'); 
				$loginId=$request->get('Trainer'); 
				}	 
						for($i=0;$i<count($employeelist);$i++){
							$insert=new TblMapbatchtoemployee();
							$insert->setMapmoduleid($mapId);
							$insert->setEmployeeid($employeelist[$i]);
							$insert->setCustomerid($customerId);
							$insert->setAdminid($loginId);
							$insert->setCreatedat(new \DateTime());				
							$em->persist($insert);
							$em->flush();
							echo "Success";	
						}
	
		}	
		if($type=="editContent"){
			 $mapid=$request->get('mapid');
			 $CategoryId=$request->get('CategoryId');
			 $subCategory=implode(',',$request->get('subCategory_to'));
			 $elearningModule=implode(',',$request->get('elearningModule'));
				$val=$request->get('val'); 
				if($val==1){
				$customerId=$request->get('customerId'); 
				$loginId=$request->get('Trainer'); 
				}	 
				$em->createQuery("update TraxAdminBundle:TblMapprogramtocategory j set j.categoryid='".$CategoryId."',j.subcategoryid='".$subCategory."',j.moduleid='".$elearningModule."' WHERE j.mapmoduleid='".$mapid."' ")->execute();	
		}	
			
        return $this->render('TraxAdminBundle:Admin:InsertAdminMaster.html.php',array('mastertype'=>$mastertype));
	}
 	public function BasicMasterAction(Request $request)
	{
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginExeType = $session->get('loginExeType');
		$loginuserId = $session->get('loginuserId');
		$loginId = $session->get('loginId');
		if($loginExeType==1){			
		 		$customerList = $em->createQuery("SELECT j.userid,j.name FROM TraxAdminBundle:TblUser j  where j.usertypeid=2 and j.status='active' ")->getArrayResult();
				}

				

	
	return $this->render('TraxAdminBundle:Admin:BasicMaster.html.php',array('loginExeType'=>$loginExeType,'customerList'=>$customerList));
	}
public function MapModuleAction(Request $request)
	{
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginExeType = $session->get('loginExeType');
		$loginuserId = $session->get('loginuserId');
		$loginId = $session->get('loginId');
		if($loginExeType==1){			
		 		$customerList = $em->createQuery("SELECT j.userid,j.name FROM TraxAdminBundle:TblUser j  where j.usertypeid=2 and j.status='active' ")->getArrayResult();
				}
		
		
		$TrainerList=$em->createQuery("SELECT j.userid,j.name  FROM TraxAdminBundle:TblUser j  where j.employeetype ='Trainer' and j.customerid='".$loginuserId."'")->getArrayResult();
	return $this->render('TraxAdminBundle:Admin:MapModule.html.php',array('loginExeType'=>$loginExeType,'customerList'=>$customerList,'ModuleCategory'=>$ModuleCategory,'departList'=>$departList,'TrainerList'=>$TrainerList,'loginuserId'=>$loginuserId));
	}
public function addEmployeeMasterAction(Request $request)
	{
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginExeType = $session->get('loginExeType');
		$loginuserId = $session->get('loginuserId');
		$loginId = $session->get('loginId');
		$myownclass = new myownclass();
				if($loginExeType==1){			
		 		$customerList = $em->createQuery("SELECT j.userid,j.name FROM TraxAdminBundle:TblUser j  where j.usertypeid=2 and j.status='active' ")->getArrayResult();
				}
				$locationList = $em->createQuery("SELECT k FROM TraxAdminBundle:TblLocation k where k.customerid='".$loginuserId."' order by k.zoneid desc")->getArrayResult();
				$DepartmentList = $em->createQuery("SELECT j.dprtid,j.department  FROM TraxAdminBundle:TblDepartment j  where j.customerid ='".$loginuserId."'")->getArrayResult();
				$editId=$request->get('editId');
				if($editId!=""){

					$editEmployeeList = $em->createQuery("SELECT j.username,j.password,j.surename,j.name,j.gender,j.chorusid,j.gid,l.dprtid,m.zoneid,j.employeetype,j.userid FROM TraxAdminBundle:TblUser j INNER JOIN TraxAdminBundle:TblDepartment l with l.dprtid=j.department INNER JOIN TraxAdminBundle:TblLocation m with m.zoneid=j.location where j.userid ='".$editId."'")->getArrayResult();

				}

	return $this->render('TraxAdminBundle:Admin:addEmployeeMaster.html.php',array('loginExeType'=>$loginExeType,'customerList'=>$customerList,'locationList'=>$locationList,'DepartmentList'=>$DepartmentList,'loginuserId'=>$loginuserId,'editEmployeeList'=>$editEmployeeList,'editId'=>$editId,'myownclass'=>$myownclass));
	}

}
