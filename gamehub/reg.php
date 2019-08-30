<?php
if(isset($_POST['uname'])&&isset($_POST['email'])&&isset($_POST['pwd'])&&isset($_POST['dob']))
{
require_once("conn.php");
$name=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pwd'];
$dob=$_POST['dob'];
echo "$name $dob $email $pass";
//$q="insert into users(u_name,u_pass,u_email,u_dob) //values('$name','$pass','$email','$dob')";
$stmt = $dbConnection->prepare("insert into users(u_name,u_pass,u_email,u_dob) values(
?,?,?,?)");
$stmt->bind_param('s', $name);
$stmt->bind_param('s',$pass);
$stmt->bind_param('s',$email);
$stmt->bind_param('s',$dob);

$stmt->execute();
//echo $q;
//$r=mysqli_query($con,$q);
//if($r>0)
//{
	echo"data added";
//}
/*else
{
	echo "data not added";
}*/

}
?>