<?php session_start();
if(isset($_POST["Submit"])){
$email=$_POST["email"];
$password=$_POST["password"];
if($email!="" AND $password!=""){
	
$s="localhost";
$u="root";
$p="";
$db="MYDB";
$conn=new mysqli($s,$u,$p,$db);
if($conn->connect_error){
die("connection failed : " .$conn->connect_error);
}
$sql="SELECT * FROM LFinder where Email='$email' AND Password='$password' ";
$rslt=$conn->query($sql);
if($rslt->num_rows>0){ echo "Suceess" ;
while($row=$rslt->fetch_assoc()){ 
$a=$row["Name"];
$b=$row["Bio"];
$c=$row["Address"];
$d=$row["Email"];
$e=$row["Password"];
$f=$row["Age"];
$g=$row["Gender"];
$_SESSION[Name]= $a  ;
$_SESSION[Bio]=$b ;
$_SESSION[Address]=$c; 
$_SESSION[Email]=$d;
$_SESSION[Age]=$f;
$_SESSION[Gender]=$g;
header("Location:status.php"); 
}
}
	else { header( "Location:index.php?id=error&&v=Incorrect email/password. Please log in again or  sign up ");
}
$conn->close();
}
else {
header ("Location : index.php");
echo " please fill complete details before submission ";
}
 } else { echo "Please Submit the details "; }

?>