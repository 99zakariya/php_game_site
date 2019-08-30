<?php
session_start();
if( !empty($_POST['email']))
{ $email=$_POST['email'];
	require_once("conn.php");
	if(!empty($_POST['pwd']))
	{
		
		$pass=md5($_POST['pwd']);
		echo "$email  $pass";
		
		$stmt = $conn->prepare("select * from users where u_email=? and u_pass=?");
           $stmt->bind_param("ss", $email, $pass);
		   $stmt->execute();
		   $stmt->store_result();

        // get variables from result.
           $stmt->bind_result($id,$name,$email,$pass,$roel,$dob);
           if($stmt->fetch())
		   {
		   //echo "$id,$name,$email,$pass,$roel,$dob";
		   $_SESSION['name']=$name;
		   $_SESSION['id']=$id;
		   $_SESSION['email']=$email;
		   $_SESSION['role']=$roel;
		   $_SESSION['dob']=$dob;
		   
		   echo $_SESSION['id']. $_SESSION['role']." loged sucess";
		   }
		   else
		   {
			   echo "loged failed";
			}
		   $stmt->close();
		   
	}
	else if(!empty($_POST['pwdf'])&&!empty($_POST['dobf'])&&!empty($_POST['cpwdf']))
	{
		
		$pass=$_POST['pwdf'];
		$pass2=$_POST['cpwdf'];
		$dob=$_POST['dobf'];
		if($pass==$pass2)
		{
			$pass=md5($pass);
			//echo " $pass,$email,$dob";
			$stmt = $conn->prepare("update users set 	u_pass=? where u_email=? and u_dob=?");
           $stmt->bind_param("sss",  $pass,$email,$dob);
		   $stmt->execute();
		   echo "pasword changed";
		   $stmt->close();
		}
		else
		{
			echo " password dose not match";
		}
		
	}
}

?>