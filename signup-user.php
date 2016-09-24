<?php 
session_start();
if(isset($_POST["Submit"]) ){
$name=$_POST["name"];
$bio=$_POST["bio"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$email=$_POST["email"];
$password=$_POST["password"];

if($name!="" AND $bio!="" AND $age!="" AND $gender!="" AND $address!="" AND $email!="" AND $password!=""){
	$s="localhost";
$u="root";
$p="";
$db="MYDB";
$conn=new mysqli($s,$u,$p,$db);
if($conn->connect_error){
die("connection failed : " .$conn->connect_error);
}
$sql="insert into  LFinder( Name , Bio, Age , Gender , Address ,Email, Password) 
VALUES ('$name', '$bio', '$age' , '$gender' , '$address' , '$email', '$password' ) ";
$rslt=$conn->query($sql);
if($rslt===true){

	header("Location:signin.php?id=success&v=you are signed up successfully");
	}
	else {
	header ("Location: signup.php ? id=Error&v=sorry database error ..try again..." );
	 }
	
	
}
else{
 header( "Location: signup.php?id=error &v=Error:All fields mandatory");
 }
 }
else
{ header("Location: signup.php?id=error&v=Please Submit the fills ");
}
?>