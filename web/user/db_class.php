<?php //session_start();
//$prj_name=$_SESSION['prj_name'];
//$prj_name=$_GET['prj_name'];
//$dbname=$a="traxcrm1_".$prj_name;
/*
Class Name : DB
Purpose : To access mysql databases via single function
Created On : 6 July 2006
Modified By:
Modified On:
*/

class DB
	{
        //var $a;
	var $transaction; //whether we are using transaction for the query or not
	var $host; //computer name
	var $dbname; //database name
	var $user; 
	var $password; 
	var $conn;
	var $result;
	var $transaction_isolation; //transaction related parameter used by the database engine
	var $lock_type; //lock used for the data
	var $query;
	var $errors;

        var $url1="http://www.zitm.in/zitm/web/builder/smstransliterate/outboundsms?";
        var $simcellnumber="9790818184";
        var $sight="http://www.dotcue.in/";
/*
Function Name : DB <constructor>
Arguments : Database Name,Host[optional],User[optional],Password[optional]
Returns : instance of DB class
Purpose : intialises local variables with user value
Modified By:
Modified On:
*/
	//function DB($dbname='traxcrm1_princeRezDB', $host='localhost',$user='traxcrm1_root', $password='console')
	function DB($dbname='MichelinClassroomDB', $host='localhost',$user='root', $password='console')
	{
		$this->user=$user;
		$this->password=$password;
		$this->host=$host;
		$this->dbname=$dbname;
	}
/*
Function Name : createConnect
Arguments : -NILL-
Returns : -NILL-
Purpose : creates connection with mysql database specified
Modified By:
Modified On:
*/
	function createConnect()
		{
		$this->conn=mysql_pconnect($this->host,$this->user,$this->password);
		if(!is_resource($this->conn))
			{
			$this->errors="Could Not able to connect to the SQL Server.";
			}
		$d = mysql_select_db($this->dbname, $this->conn);
		if(!is_resource($d))
			{
			$this->errors="Could Not able to Use database ".$this->dbname.".";
			}
		}
/*
Function Name : runQuery
Arguments : -NILL-
Returns : -NILL-
Purpose : executes the query passed by the user to the member variable of the class.
If the function is called without assigning query, error -NULL QUERY- is printed
If execution of query has problem it prints the whole list of traversing of the call with cause of the problem,
and aborts the transaction if any.
Modified By:
Modified On:
*/	
	function runQuery()
		{
		if(!$this->conn)
			{
			$this->createConnect();
			}
		if($this->query)
			{
			$this->errors="";
			$this->query.=";";
			$this->result = mysql_query($this->query);
			if(mysql_affected_rows()>=0)
				{
				unset($this->query);
				}
			else
				{
				echo "<br>Error:<br>";
				$debugging=debug_backtrace();
				foreach ($debugging as $debug)
					{
					echo "<b>File :</b> ".$debug["file"]."<br />";
					echo "<b>Line :</b> ".$debug["line"]."<br />";
					echo "<b>Function :</b> ".$debug["function"]."<br />";
					echo "<b>Cause :</b> ".mysql_error()."<br />";
					}
				echo "<b>Query :</b> ".$this->query."<hr>";
				}
			}
		else
			{
			echo "<br>-- NULL Query --";
			}
		if (!is_resource($this->result))
			{
			$this->errors=mysql_error();
			if($this->transaction)
				{
					$this->transaction=FALSE;
					$this->query="ROLLBACK TRANSACTION";
					$this->runQuery();
				}
			}
		}
/*
Function Name : returnArrays
Arguments : -NILL-
Returns : Two dimensional array of result of previously executed query
Purpose : To fetch the result of the query exceuted
Modified By:
Modified On:
*/
	function returnArrays()
		{
		if (mysql_num_rows($this->result) > 0)
			{
			while($row=mysql_fetch_assoc($this->result))
				{
				$arrays[]=$row;
				}
			}
		return $arrays;
		}
/*
Function Name : createConnect
Arguments : -NILL-
Returns : -NILL-
Purpose : to begin a mysql stardard transaction(works with specified table type only)
Modified By:
Modified On:
*/
	function beginTransaction()
		{
		$this->transaction=FALSE;
		$this->query="START TRANSACTION ";
		$this->query.=($this->transaction_isolation)?" ISOLATION LEVEL ".$this->transaction_isolation:"";
		$this->query.=($this->lock_type)?$this->lock_type:"";
		$this->runQuery();
		$this->transaction=TRUE;
		}
/*
Function Name : createConnect
Arguments : -NILL-
Returns : -NILL-
Purpose : to end a mysql stardard transaction(works with specified table type only). 
Either it can be a commit or rollback
Modified By:
Modified On:
*/
	function endTransaction()
		{
		if($this->transaction)
			{
			$this->transaction=FALSE;
			$this->query="COMMIT TRANSACTION";
			$this->runQuery();
			}
		}
/*
Function Name : createConnect
Arguments : two dimensional array result from the return arrays function
Returns : -NILL-
Purpose : prints a simple table on the argument passed
Modified By:
Modified On:
*/
	function printTable($arg_array)
		{
		echo "<table border=1>";
		foreach($arg_array[0] as $key=>$value)
			{
			echo "<th>".$key."</th>";
			}
		echo "<tr>";
		foreach($arg_array as $row =>$record)
			{
			foreach($record as $column_head => $value)
				{
				echo "<td>".$value."</td>";
				}
			echo "</tr>";	
			}
		echo "</table>";
		}
	}
	
	
?>
