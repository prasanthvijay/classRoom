<?php

namespace Trax\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Trax\AdminBundle\ExtraFunction\myownclass;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Trax\AdminBundle\Entity\TblUser;
use Trax\AdminBundle\Entity\TblLocation;
use Trax\AdminBundle\Entity\TblDepartment;
use Trax\AdminBundle\Entity\TblEmployee;
class UserController extends Controller
{
	public function indexAction(Request $request)
	{
	
	return $this->render('TraxUserBundle:User:index.html.php');
	}
	public function userFunctionAction(Request $request)
	{	
        	$session = $request->getSession();	
		$em = $this->getDoctrine()->getEntityManager();
		$myownclass = new myownclass();
		$getFunctionType=$request->get('type');
		if($getFunctionType=="LoginCheck"){
			 $username=$request->get('username');
			 $password=$request->get('password');

			$userList = $em->createQuery("SELECT j.userid,j.usertypeid,j.name,j.employeetype,j.customerid FROM TraxAdminBundle:TblUser j  where j.username='".$username."' and j.password='".$myownclass->encryptor('encrypt',$password)."'")->getArrayResult();
			
				if($userList[0]['usertypeid']=='Trainee'){

					$session->set('loginuserId', $employeeList[0]['empid']);
					$session->set('loginExeType', $userList[0]['usertypeid']);
					$session->set('customerId', $employeeList[0]['customerid']);
					$_SESSION['userid']= $userList[0]['userid'];
					$_SESSION['ExeType']= $userList[0]['usertypeid'];
					$_SESSION['employeetype']=$employeeList[0]['employeetype'];
					$_SESSION['employeename']=$employeeList[0]['name'];
					$_SESSION['customerid']=$employeeList[0]['customerid'];
					echo $userList[0]['employeetype']; 
					}
				if($userList[0]['employeetype']=='Trainer' || $userList[0]['employeetype']=='Guest Trainer'){

					$session->set('loginemployeeuserId', $userList[0]['userid']);
					$session->set('loginExeType', $userList[0]['usertypeid']);
					$session->set('customerId', $userList[0]['customerid']);
					$_SESSION['userid']= $userList[0]['userid'];
					$_SESSION['ExeType']= $userList[0]['usertypeid'];
					$_SESSION['employeetype']=$userList[0]['employeetype'];
					$_SESSION['employeename']=$userList[0]['employeename'];
					$_SESSION['customerid']=$userList[0]['customerid'];
					echo $userList[0]['employeetype']; 
					}

				if($userList[0]['usertypeid']==2){
					$session->set('loginId', $userList[0]['userid']);
					$session->set('loginuserId', $userList[0]['userid']);
					$session->set('loginExeType', $userList[0]['usertypeid']);
					$_SESSION['ExeType']= $userList[0]['usertypeid'];
					$_SESSION['customername']= $userList[0]['name'];
					echo $userList[0]['usertypeid']; 
					}
	     	}
		
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$customerId = $session->get('customerId');

		if($getFunctionType=="getsubCategory"){	
			$catid=$request->get('catid'); 	
			$subCategoryList = $em->createQuery("SELECT j.subcatid,j.subcategory FROM TraxAdminBundle:TblModulesubcategory j where j.catid='".$catid."' ")->getArrayResult();	

		}

		return $this->render('TraxUserBundle:User:userFunction.html.php',array('getFunctionType'=>$getFunctionType,'subCategoryList'=>$subCategoryList));
	}
	public function portletAction(Request $request)
	{
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginuserId = $session->get('loginuserId');
		$customerId = $session->get('customerId');

		$ModuleCategoryList = $em->createQuery("SELECT k.modulecategory,k.cateid FROM TraxAdminBundle:TblMapmodule j INNER JOIN TraxAdminBundle:TblModulecategory k with k.cateid=j.categoryid  where j.employeeid='".$loginuserId."'")->getArrayResult();
		
		return $this->render('TraxUserBundle:User:portlet.html.php',array('ModuleCategoryList'=>$ModuleCategoryList,'em'=>$em));
	}
	
	public function logoutAction(Request $request)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$session = $request->getSession();
		session_destroy();
		return $this->redirectToRoute('trax_user_homepage');


		return $this->render('TraxUserBundle:User:logout.html.php');
	}
	
    	public function trainerAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		 $loginuserId = $session->get('loginuserId');
		 $loginemployeeuserId = $session->get('loginemployeeuserId');
		 $loginExeType = $session->get('loginExeType');
		 $customerId = $session->get('customerId');
		$userid = $session->get('userid');

$DepartmentList = $em->createQuery("SELECT j.dprtid,j.department FROM TraxAdminBundle:TblDepartment j where j.customerid='".$customerId."'")->getArrayResult();
		$LocationList = $em->createQuery("SELECT j.zoneid,j.location FROM TraxAdminBundle:TblLocation j where j.customerid='".$customerId."'")->getArrayResult();


	      return $this->render('TraxUserBundle:User:trainer.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'DepartmentList'=>$DepartmentList,'LocationList'=>$LocationList,'customerId'=>$customerId,'userid'=>$userid,'loginemployeeuserId'=>$loginemployeeuserId));
	    }
	public function maptranieeAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
	        $loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$customerId = $session->get('customerId');
		$type=$request->get('type');
    		
		$categoryList = $em->createQuery("SELECT k.modulecategory,k.cateid FROM TraxAdminBundle:TblUser j INNER JOIN  TraxAdminBundle:TblModulecategory k with k.customerid=j.userid where k.customerid='".$customerId."'")->getArrayResult();

		$DepartmentList = $em->createQuery("SELECT j.department,j.dprtid FROM TraxAdminBundle:TblDepartment j where j.customerid='".$customerId."'")->getArrayResult();
		$LocationList = $em->createQuery("SELECT j.zoneid,j.location FROM TraxAdminBundle:TblLocation j ")->getArrayResult();

		if($type=="getDepartment")
			{
			   	$dprtid=$request->get('dprtid');
				
				$par=$request->get('par');
				$emplyeelist = $em->createQuery("SELECT j FROM TraxAdminBundle:TblEmployee j where j.department='".$dprtid."' and j.employeetype ='Employee' and j.customerid='".$customerId."' ")->getArrayResult();
                        	
			}
	      return $this->render('TraxUserBundle:User:maptraniee.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'DepartmentList'=>$DepartmentList,'LocationList'=>$LocationList,'categoryList'=>$categoryList,'trainermap'=>$trainermap,'emplyee'=>$emplyee,'customerId'=>$customerId,'emplyeelist'=>$emplyeelist,'type'=>$type,'par'=>$par,'mapping'=>$mapping));
	    }

 	public function mappedtranieelistAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$customerId = $session->get('customerId');


$TrainingSchedulelist = $em->createQuery("SELECT j.scheid,j.scheduledate,k.batchname,l.programname,j.trainername,m.employeename FROM TraxAdminBundle:TblTrainingschedule j  INNER JOIN TraxAdminBundle:TblBatch k with k.batchid=j.batchid  INNER JOIN TraxAdminBundle:TblTrainingprogram l with l.prgid=j.programid INNER JOIN TraxAdminBundle:TblEmployee m with m.empid=j.employeeid where j.customerid='".$customerId."'")->getArrayResult();

	      return $this->render('TraxUserBundle:User:mappedtranieelist.html.php',array('batchlist'=>$batchlist,'em'=>$em,'TrainingSchedulelist'=>$TrainingSchedulelist));
	    }

 	public function modulemasterAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
		$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginemployeeuserId = $session->get('loginemployeeuserId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$customerId = $session->get('customerId');
		$userid = $session->get('userid');

		$type = $request->get('type');
		$editId = $request->get('editId');

		if($type=='Category'){			
				if($editId!='')
				{
				$editmodcatlist=$em->createQuery("SELECT j FROM TraxAdminBundle:TblModulecategory j  where j.cateid ='".$editId."'")->getArrayResult();
				}

		}
		if($type=='SubCategory'){
				$ModuleCategory = $em->createQuery("SELECT j.cateid,j.modulecategory FROM TraxAdminBundle:TblModulecategory j where j.trainerid ='".$loginemployeeuserId."'")->getArrayResult();		
				if($editId!="")
				{
				$editModuleCategory=$em->createQuery("SELECT j.subcatid,j.subcategory,j.description,p.modulecategory,p.cateid FROM TraxAdminBundle:TblModulesubcategory j INNER JOIN TraxAdminBundle:TblModulecategory p with p.cateid=j.catid where j.subcatid ='".$editId."'")->getArrayResult();

}
		}
		if($type=='UploadModule'){
				$ModuleCategory = $em->createQuery("SELECT j FROM TraxAdminBundle:TblModulecategory j  where j.trainerid ='".$loginemployeeuserId."'")->getArrayResult();
		}
		if($type=='Trainee'){
			$DepartmentList = $em->createQuery("SELECT j.dprtid,j.department FROM TraxAdminBundle:TblDepartment j where j.customerid='".$customerId."'")->getArrayResult();
			$LocationList = $em->createQuery("SELECT j.zoneid,j.location FROM TraxAdminBundle:TblLocation j where j.customerid='".$customerId."'")->getArrayResult();

		}


	      return $this->render('TraxUserBundle:User:modulemaster.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'customerId'=>$customerId,'loginemployeeuserId'=>$loginemployeeuserId,'editmodcatlist'=>$editmodcatlist,'type'=>$type,'ModuleCategory'=>$ModuleCategory,'editId'=>$editId,'editModuleCategory'=>$editModuleCategory,'DepartmentList'=>$DepartmentList,'LocationList'=>$LocationList));
	    }
	
	
	public function modulemasterlistAction(Request $request)
		{
		$em = $this->getDoctrine()->getEntityManager();
		$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginemployeeuserId = $session->get('loginemployeeuserId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$customerId = $session->get('customerId');
		$userid = $session->get('userid');
		$delmodulemasterlist=$request->get('delmodulemasterlist');
		$type=$request->get('type');

		if($type=='Category'){

			$ModuleCategory = $em->createQuery("SELECT j.cateid,j.modulecategory,j.description FROM TraxAdminBundle:TblModulecategory j  where j.trainerid ='".$loginemployeeuserId."'")->getArrayResult();

			if($delmodulemasterlist!="")
			{
			$delete = $em->createQuery("DELETE FROM TraxAdminBundle:TblModulecategory j where j.cateid='".$delmodulemasterlist."' ")->getArrayResult();
			}
		}
		if($type=='SubCategory')
		{
			$userListt = $em->createQuery("SELECT j.subcatid,j.subcategory,j.description,p.modulecategory FROM TraxAdminBundle:TblModulesubcategory j INNER JOIN  TraxAdminBundle:TblModulecategory p with j.catid=p.cateid  where p.trainerid='".$loginemployeeuserId."' ORDER BY j.subcatid")->getArrayResult();

			if($delsubmodulemasterlist!="")
			{
			$delete = $em->createQuery("DELETE FROM TraxAdminBundle:TblModulesubcategory j where j.subcatid='".$delsubmodulemasterlist."' ")->getArrayResult();
			}
		}
		if($type=='ModuleList'){

			$modulefilelist = $em->createQuery("SELECT j.moduleid,j.modulename,j.description,k.modulecategory,j.filename,j.filepath, j.filetype FROM TraxAdminBundle:TblModulefiles j INNER JOIN TraxAdminBundle:TblModulecategory k with k.cateid=j.modulecategory where j.trainerid='".$loginemployeeuserId."'")->getArrayResult();


		}
		if($type=='MappedModuletoUserList'){

			/*$MapModuleList = $em->createQuery("SELECT j.description,k.modulecategory,j.employeeid,l.subcategory,l.subcatid,j.subcategory as subcatid,j.scheduledate FROM TraxAdminBundle:TblMapmodule j INNER JOIN  TraxAdminBundle:TblModulecategory k with k.cateid=j.categoryid  INNER JOIN TraxAdminBundle:TblModulesubcategory l with l.subcatid=j.subcategory where j.trainerid='".$loginemployeeuserId."' group by j.subcategory ")->getArrayResult();*/


		}
		if($type=='TraineeList'){

			$Employee = $em->createQuery("SELECT j.userid,j.name,j.employeetype,j.username,j.password,j.gid,j.chorusid,j.surename,k.department,l.location FROM TraxAdminBundle:TblUser j INNER JOIN TraxAdminBundle:TblDepartment k with k.dprtid=j.department inner join TraxAdminBundle:TblLocation l with l.zoneid=j.location where j.customerid='".$customerId."' and j.employeetype='Trainee'")->getArrayResult();
		//print_r($Employee);
			$DepartmentList = $em->createQuery("SELECT j.dprtid,j.department FROM TraxAdminBundle:TblDepartment j where j.customerid='".$customerId."'")->getArrayResult();



		}
	      return $this->render('TraxUserBundle:User:modulemasterlist.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'ModuleCategory'=>$ModuleCategory,'em'=>$em,'customerId'=>$customerId,'delmodulemasterlist'=>$delmodulemasterlist,'type'=>$type,'userListt'=>$userListt,'modulefilelist'=>$modulefilelist,'MapModuleList'=>$MapModuleList,'Employee'=>$Employee,'DepartmentList'=>$DepartmentList));
	    }	
	
	public function mapmoduletouserAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginemployeeuserId = $session->get('loginemployeeuserId');
	        $loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$customerId = $session->get('customerId');
		$type=$request->get('type');
    		
		$categoryList = $em->createQuery("SELECT k.modulecategory,k.cateid FROM TraxAdminBundle:TblUser j INNER JOIN  TraxAdminBundle:TblModulecategory k with k.customerid=j.userid where k.customerid='".$customerId."'")->getArrayResult();

		$DepartmentList = $em->createQuery("SELECT j.department,j.dprtid FROM TraxAdminBundle:TblDepartment j where j.customerid='".$customerId."'")->getArrayResult();
		$LocationList = $em->createQuery("SELECT j.zoneid,j.location FROM TraxAdminBundle:TblLocation j ")->getArrayResult();

		if($type=="getDepartment")
			{
			   	$dprtid=$request->get('dprtid');
				
				$par=$request->get('par');
				$emplyeelist = $em->createQuery("SELECT j FROM TraxAdminBundle:TblEmployee j where j.department='".$dprtid."' and j.employeetype ='Employee' and j.customerid='".$customerId."' ")->getArrayResult();
                        	
			}
	      return $this->render('TraxUserBundle:User:mapmoduletouser.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'DepartmentList'=>$DepartmentList,'LocationList'=>$LocationList,'categoryList'=>$categoryList,'trainermap'=>$trainermap,'emplyee'=>$emplyee,'customerId'=>$customerId,'emplyeelist'=>$emplyeelist,'type'=>$type,'par'=>$par,'mapping'=>$mapping,'loginemployeeuserId'=>$loginemployeeuserId));
	    }
  	public function trainingCalendarAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');

		$DepartmentList = $em->createQuery("SELECT j.dprtid,j.department FROM TraxAdminBundle:TblDepartment j ")->getArrayResult();
		$LocationList = $em->createQuery("SELECT j.zoneid,j.location FROM TraxAdminBundle:TblLocation j ")->getArrayResult();



	      return $this->render('TraxUserBundle:User:trainingCalendar.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'DepartmentList'=>$DepartmentList,'LocationList'=>$LocationList));
	    }
public function maptrainerbatchAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$type=$request->get('type');
		if($type=="edit")
		{	
			$id=$request->get('id');	
			$editdata = $em->createQuery("SELECT j FROM TraxAdminBundle:TblBatch j where j.batchid='".$id."' ")->getArrayResult();
				
		}
		
	      return $this->render('TraxUserBundle:User:maptrainerbatch.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'DepartmentList'=>$DepartmentList,'LocationList'=>$LocationList,'editdata'=>$editdata));
	    }
	public function maptrainerprogramAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
	        $userid=$_SESSION["userid"];

		$BatchList = $em->createQuery("SELECT j FROM TraxAdminBundle:TblBatch j where j.adminid='".$userid."' ")->getArrayResult();
		
		$type=$request->get('type');
		if($type=="edit")
		{	
			$id=$request->get('id');	
			$editdata = $em->createQuery("SELECT j FROM TraxAdminBundle:TblTrainingprogram j where j.prgid='".$id."' ")->getArrayResult();
			//print_r($editdata);
				
		}		
	
	      return $this->render('TraxUserBundle:User:maptrainerprogram.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'BatchList'=>$BatchList,'LocationList'=>$LocationList,'editdata'=>$editdata));
	    }
	public function maptrainingscheduleAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$userid= $session->get('userid');
		$customerId= $session->get('customerId');

		$batchlist = $em->createQuery("SELECT j FROM TraxAdminBundle:TblBatch j where j.adminid='".$userid."' ")->getArrayResult();
$departList = $em->createQuery("SELECT j.dprtid,j.department  FROM TraxAdminBundle:TblDepartment j  where j.customerid ='".$loginuserId."'")->getArrayResult();

		$moduleCateList=$em->createQuery("SELECT j.cateid,j.modulecategory  FROM TraxAdminBundle:TblModulecategory j  where j.customerid ='".$loginuserId."'")->getArrayResult();
	      return $this->render('TraxUserBundle:User:maptrainingschedule.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'programlist'=>$programlist,'batchlist'=>$batchlist,'departList'=>$departList,'userid'=>$userid,'moduleCateList'=>$moduleCateList,'customerId'=>$customerId));
	    }
	public function trainingbatchAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$userid=$_SESSION["userid"];

		$BatchList = $em->createQuery("SELECT j FROM TraxAdminBundle:TblBatch j where j.adminid='".$userid."' ")->getArrayResult();
		$parid=$request->get('parid');
		if($parid!="")
		{
			$delete = $em->createQuery("DELETE FROM TraxAdminBundle:TblBatch j where j.batchid='".$parid."' ")->getArrayResult();
		//echo "succeess";
		}
	      return $this->render('TraxUserBundle:User:trainingbatch.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'DepartmentList'=>$DepartmentList,'BatchList'=>$BatchList,'parid'=>$parid));
	    }
	public function trainingscheduleAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');

	      return $this->render('TraxUserBundle:User:trainingschedule.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'DepartmentList'=>$DepartmentList,'LocationList'=>$LocationList));
	    }
	public function trainingprogramAction(Request $request)
	    {
		$em = $this->getDoctrine()->getEntityManager();
        	$session = $request->getSession();
		$loginId = $session->get('loginId');
		$loginuserId = $session->get('loginuserId');
		$loginExeType = $session->get('loginExeType');
		$userid=$_SESSION["userid"];

		$LocationList = $em->createQuery("SELECT k.batchname,j.programname,j.description,j.prgid FROM TraxAdminBundle:TblTrainingprogram j INNER JOIN TraxAdminBundle:TblBatch k with k.batchid=j.batchid where j.adminid='".$userid."' ")->getArrayResult();	

		$prsid=$request->get('prsid');
		if($prsid!="")
		{
			$delete = $em->createQuery("DELETE FROM TraxAdminBundle:TblTrainingprogram j where j.prgid='".$prsid."' ")->getArrayResult();
		//echo "succeess";
		}

	      return $this->render('TraxUserBundle:User:trainingprogram.html.php',array('loginId'=>$loginId,'loginuserId'=>$loginuserId,'loginExeType'=>$loginExeType,'BatchList'=>$BatchList,'LocationList'=>$LocationList,'prsid'=>$prsid));
	    }

}
