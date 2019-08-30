<?php
if(isset($_POST['uname'])&&isset($_POST['email'])&&isset($_POST['pwd'])&&isset($_POST['dob']))
{
require_once("conn.php");
$name=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pwd'];
$dob=$_POST['dob'];
$pass=md5($pass);
echo "$name $dob $email $pass";


// prepare and bind
$stmt = $conn->prepare("insert into users(u_name,u_pass,u_email,u_dob) values(
?,?,?,?)");

$stmt->bind_param("ssss", $name, $pass, $email,$dob);


$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
}
?>