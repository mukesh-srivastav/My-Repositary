<?php session_start();
 
	if(isset($_POST["Submit"])) {
		function GetImageExtensions($imagetype){
				if(empty($imagetype)) return false;
				switch($imagetype)
				{
				case 'image/bmp':return '.bmp';
				case 'image/gif':return '.gif';
				case 'image/jpeg':return '.jpg';
				case 'image/png':return '.png';
				default:return false;
				} 
				}
	$Name=$_POST["Name"]; 
$ObjectName=$_POST["ObjectName"]; 
$Location =$_POST["ObjectLocation"]; 
$Date=$_POST["ObjectDate"]; 
$Description=$_POST["ObjectInformation"]; 
$Contact=$_POST["ContactDetails"]; 
$Address=$_POST["ContactAddress"]; 
$ObjectImage=$_FILES["ObjectImage"]["name"];
	$temp_name=$_FILES["ObjectImage"]["tmp_name"];
	$imgtype=$_FILES["ObjectImage"]["type"];
	$ext=GetImageExtensions($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext; 
	$target_path="public/images/".$imagename; 
	


if($Name!="" AND $ObjectImage!="" AND $ObjectName!="" AND $Location!="" AND $Date!="" 
AND $Description!="" AND $Contact!="" AND $Address!="" AND $target_path!="" )
{ if(move_uploaded_file($temp_name,$target_path)) {
$s="localhost";
$u="root";
$p="";
$db="MYDB";
$conn=new mysqli($s,$u,$p,$db);
if($conn->connect_error){
die("connection failed : " .$conn->connect_error);
}
$sql="insert into  lost( Name , ObjectImage, ObjectName,Location, Date , Contact ,
 Address, Description) 
 VALUES ('$Name', '$target_path','$ObjectName','$Location','$Date','$Contact', 
'$Address' , '$Description' ) ";
$rslt=$conn->query($sql);
if($rslt===true){
	header("Location:index.php?id=success&v=Your Post has been uploaded succesfully. ");
	}
	else {
	header ("Location:post.php ? id=Error&v=sorry database error ..try again..." );
	 }
	
	} else { exit("error While uploading image on the server");  }
}
else{
   header( "Location: signup.php?id=error &v=Error:All fields mandatory");
 }
 
}
else
{ header("Location: signup.php?id=error&v=Please Submit the fills ");
}
 ?> 
 