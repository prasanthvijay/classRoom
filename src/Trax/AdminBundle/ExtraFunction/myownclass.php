<?php
namespace trax\AdminBundle\ExtraFunction;

class myownclass {



function getUserIP()
{
  
if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;

}

	function encryptor($action, $string) {
	    $output = false;

	    $encrypt_method = "AES-256-CBC";
	    //pls set your unique hashing key
	    $secret_key = 'classroom';
	    $secret_iv = 'classroom';

	    // hash
	    $key = hash('sha256', $secret_key);

	    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	    $iv = substr(hash('sha256', $secret_key), 0, 16);

	    //do the encyption given text/string/number
	    if( $action == 'encrypt' ) {
		$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		$output = base64_encode($output);
	    }
	    else if( $action == 'decrypt' ){
	    	//decrypt the given text/string/number
		$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	    }

	    return $output;
	}

	function queryExecute($query)
	{
		$resultArray=array();
		$con=mysqli_connect("localhost","root","console","contenDistribution");	
		$arraySet=mysqli_query($con,$query);
	 	while ($row = mysqli_fetch_array($arraySet)) 
		{
            		$resultArray[]=$row;
            	}
        	return $resultArray;
	} 

	function paymentReport($em,$studentId,$month,$year,$newyear)
	{

		$paymentList = $em->createQuery("SELECT SUM(k.totalamount) as total,k.extraAmount,c.amount FROM traxAdminBundle:Tblpayment k INNER JOIN traxAdminBundle:Tblstudentamount c with c.studentid=k.studentid where k.studentid='".$studentId."' and k.paidofmonth='".$month."'")->getArrayResult();

$totalamount=$paymentList[0]['amount']+$paymentList[0]['extraAmount'];
$paiddetails=$em->createQuery("SELECT e.createdat,e.studentid,e.paidofmonth,e.paidofyear FROM traxAdminBundle:Tblpayment e where e.studentid='".$studentId."'")->getArrayResult();		
$paidyear=$paiddetails[0]['paidofyear'];
$paidmonth=$paiddetails[0]['paidofmonth'];

$paiddate=date_format($paiddetails[0]['createdat'],'Y-m-d');
$newyear=strtotime($newyear);
$paiddate=strtotime($paiddate);
/*date('Y', strtotime($paiddate));
date('m', strtotime($paiddate));
echo $paidmonth[0]['studentid'];
echo $dateandmonth;
*/
		if($newyear>=$paiddate)
		{
			if($paymentList[0]['total']=="")
			{
				$returnVar='<span class="glyphicon glyphicon-remove" style="color:#E94B3E;"></span>'.$paymentList[0]['total'];
			}
			else if($paymentList[0]['total']==$totalamount)
			{
				if($year==$paidyear)
				{
				$returnVar='<span class="glyphicon glyphicon-ok" style="color:#5CB85C;"></span>'.$paymentList[0]['total'];			}
				else
				{
				$returnVar='<span class="glyphicon glyphicon-remove" style="color:#E94B3E;"></span>';				}
			}
			else if($paymentList[0]['total']<$totalamount)
			{	if($year==$paidyear)
				{
				$pendingamount=$totalamount-$paymentList[0]['total'];
				$returnVar='<span class="glyphicon glyphicon-remove" style="color:#E94B3E;"></span>'.$pendingamount;
				}
				else
				{
				$returnVar='<span class="glyphicon glyphicon-remove" style="color:#E94B3E;"><span>';	
				}
			}
		
			return $returnVar;
		}
			else 
			{
				$returnVar='<span class="glyphicon glyphicon-minus" style="color:black;"></span>';
				return $returnVar;
			}
		

	}
	function extaAttendCalculate($em,$studentId,$month,$year)
	{


$query="SELECT * FROM `tblStudentSelectBatch` WHERE studentId='".$studentId."'";
$studentBatchList =$this->queryExecute($query);
//print_r($studentBatchList);
	
		$query="SELECT count(studentId) as count FROM `tblStudentAttendance` WHERE MONTH(`Attendance`)='".$month."' and YEAR(`Attendance`)='".$year."' and studentId='".$studentId."'";
		$totalAttendance =$this->queryExecute($query);
		//print_r($totalAttendance);
					if($month==1)
					{
					$mon ='Jan';
					}
					else if($month==2)
					{
					$mon ='Feb';
					}
					else if($month==3)
					{
					$mon ='Mar';
					}
					else if($month==4)
					{
					$mon ='Apr';
					}
					else if($month==5)
					{
					$mon ='May';
					}
					else if($month==6)
					{
					$mon ='Jun';
					}
					else if($month==7)
					{
					$mon ='Jul';
					}
					else if($month==8)
					{
					$mon ='Aug';
					}
					else if($month==9)
					{
					$mon ='Sep';
					}
					else if($month==10)
					{
					$mon ='Oct';
					}
					else if($month==11)
					{
					$mon ='Nov';
					}
					else if($month==12)
					{
					$mon ='Dec';
					}
$val="";
if($totalAttendance > 0)
{
 $daycount=$totalAttendance[0]['count'];

if($daycount > 8)
{
$val=1;
$dayclasscountofmonth = 8;
$totalclassesdaycount= $daycount;
$extraclass = $totalclassesdaycount - $dayclasscountofmonth;
}
else
{
$totalclassesdaycount= $daycount;
$extraclass = "";
}
}


/*for($i=0;$i<count($studentBatchList);$i++)
		{
		$query="SELECT * FROM `tblMapBatch` WHERE mainBatchId='".$studentBatchList[$i]['batch']."'";
				$mapbatch_list =$this->queryExecute($query);
		
//print_r($mapbatch_list);
			
			for($j=0;$j<count($mapbatch_list);$j++)
			{
					$query="SELECT * FROM `tbl_batch` WHERE id='".$mapbatch_list[$j]['batchId']."'";
							$batch_list =$this->queryExecute($query);

			$batchday=$batch_list[0]['day'];
			$daycount= $this->num_days($batchday,$mon,$year);
			$val="";
		if($daycount == '5')
			{
				
				$extraclass=$daycount-4;
				$classday=$daycount-1;
				$val="1";
			}
			*/

$textcontent.='<div class="row form-group">
		<div class="col-sm-5"></div>
		<div class="col-sm-5"><span class="label label-primary">Total classes Attend on selected month  : '.$totalclassesdaycount.' days</span><br>';
	if($val == "1") { $textcontent.='<span class="label label-primary">Extra Class Attend :'.$extraclass.' day</span>'; 
}
$textcontent.='</div></div>';
					// $content.=$batchday."-->".$this->num_days($batchday,$mon,$year)."<br>";
			
	
			//}


		//}

return	$textcontent;

}

	function num_days ($day, $month, $year) { 
	    $day_array = array("Mon" => "Monday", "Tue" => "Tuesday", "Wed" => "Wednesday", "Thu" => "Thursday", "Fri" => "Friday", "Sat" => "Saturday", "Sun" => "Sunday");

	    $month_array = array(1 => "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

	    if (!(in_array($day, $day_array) || array_key_exists($day, $day_array))) { 
		return 0; 
	    }

	    if (($mth = array_search(substr($month,0,3), $month_array)) <= 0) { 
		return 0; 
	    }

	    $time = mktime(0,0,0,$mth+1,1,$year);
	    $str = strtotime("last $day", $time);

	    $date = date("j", $str);

	    if ($date <= 28) { 
		return 4; 
	    } else { 
		return 5; 
	    } 
	} 
function gcmfunction( $message,$registration_ids) {
$fields = array(
'registration_ids' => $registration_ids,
'data'=> $message,
);
$headers = array(
'Authorization: key=AIzaSyBR1oHNDZac1wJeVOUVr5dTmewf4elANxs', // FIREBASE_API_KEY_FOR_ANDROID_NOTIFICATION
'Content-Type: application/json'
);
// Open connection
$ch = curl_init();
 
// Set the url, number of POST vars, POST data
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
 
// Disabling SSL Certificate support temporarly
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
 
// Execute post
$result = curl_exec($ch );
if($result === false){
die('Curl failed:' .curl_errno($ch));
}
 
// Close connection
curl_close( $ch );
		
return $result;
}




	/*function gcmfunction($data,$Gcmdetails){
		define( 'API_ACCESS_KEY', 'AIzaSyBR1oHNDZac1wJeVOUVr5dTmewf4elANxs' );
		$headers = array(
		'Authorization: key='.API_ACCESS_KEY,
		'Content-Type: application/json'
		);
		$msg = array(
			'message' 	=> 'here is a message. message',
			'subject'	=> 'This is a title. title',
			);

		$fields = array(
		'registration_ids' => $Gcmdetails,
		'data' => $msg,
		);
		
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		curl_close( $ch );
		echo $result;
		return $result;

					
	}*/

}
