<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Search </title>
        <link rel="stylesheet" href="public/css/style.css" />
    </head>
    <body>
         <div id="wrapper">
            <div id="header">
                <img src=".... " alt="LOST&FIND " id="logo" />
                <h1 id="sitename" >Lost & Find.com</h1>
                <h4 id="siteintro">A place to find your Lost.</h4>
                <a id="signin" href="signin.php">Sign In </a>
            </div>
            <div id="navbar">
                <table>
                    <tr>
                    <td><a class="navheading" href="index.php">Home</a></td>
                    <td><a class="navheading" href="post.php">Post</a></td>
                    <td><a class="navheading" href="search.php">Search</a></td>
                    <td><a class="navheading" href="status.php">Status</a></td>
                    <td><a class="navheading" href="aboutus.php">About Us</a></td>
                    </tr>
                </table>
            </div>
             <div id="search">
                 <form id="searchform" action="search.php" method="get" >
                     <table id="searchtable" align="center">
                         <tr><th class="searchheading">Put the Search word here : </th>
						 <td><input type="text" id="searchinput"  name="searchinput" /></td>
						 </tr>
                         <tr>
						 <th class="searchheading">Search in Respect to : </th>
						 <td>
							<input type="radio" value="ObjectName" name="searchbasis" class="searchbasis" checked > Object Name
                                                <input type="radio" value="Location" name="searchbasis" class="searchbasis" >Location 
                                                 <input type="radio" value="Date" name="searchbasis" class="searchbasis" > Date</td> <br/>

                         <tr><th><input type="Submit" name="Submit" colspan="2" id="Searchsubmit" class="submit" value="Search" ></th></tr>
                     </table>
                 </form>
				</div>
<?php 
session_start() ; 

 
if(isset($_GET["Submit"]))
{
	$SearchInput=$_GET["searchinput"];
	$SearchBasis=$_GET["searchbasis"];
	if($SearchBasis!="" AND $SearchInput!="")
	{
		$s="localhost";
		$u="root";	
		$p="";
		$db="MYDB";
		$conn=new mysqli($s,$u,$p,$db);
		if($conn->connect_error){
		die("connection failed : " .$conn->connect_error);
		}
		//$sql="SELECT * FROM lost where '$SearchBasis' ='$SearchInput' ";
		if($SearchBasis=="ObjectName")
		{
			$GLOBALS['sql']="SELECT * FROM lost where ObjectName='$SearchInput'  ";
		}
		else if($SearchBasis=="Location")
		{
			$GLOBALS['sql']="SELECT * from LOST where Location=='$SearchInput' ";
		}
		else if($SearchBasis=="Date")
		{
			$GLOBALS['sql']="SELECT * from LOST where Date=='$SearchInput'";
		}
		$rslt=$conn->query($GLOBALS['sql']); if($rslt!=null) { echo " DATA Contains" ; }
		if($rslt->num_rows>0){ echo " Succesful query  " ;
			while($row=$rslt->fetch_assoc()){ 
			$a=$row["Name"];
			$b=$row["ObjectImage"];
			$c=$row["ObjectName"];
			$d=$row["Location"];
			$e=$row["Date"];
			$f=$row["Contact"];
			$g=$row["Address"];
			$h=$row["Description"] ; 
		?>
                <div id="newsfeed">
                    <div id="news"><img src=" " alt =" " id="newsfeeddp" />
                               <p id="newsline"> <?php echo $a ; ?> 
							   have got <?php echo $c ; ?> at <?php echo $d ; ?> on
							   <?php echo $e ; ?> </p>
                    </div>
                    <br/>
                    <img src="<?php echo $b ; ?> " id="objectpic" alt="Photo is not posted" />
                    <div id="newscontact"><h3> Contact Details :<?php echo $f ; ?></h3> </div>
                    <div id="newscontactaddress"><h3  > Address :<?php echo $g ; ?> </h3</div><br/>
                    <div id="objectinfo"><h3>Description : <?php echo $h ; ?> </h3></div>
                    <a href="upvote.php" id="newsupvote">Upvote</a>
                    <a href="comment.php" id="newscomment" > Comment </a>
                </div>

 <?php       }
} else { ?> <div id="newsfeed" > <div id="error"> <?php echo " Sorry ! No Data matched with your input . " ; } 
}} 
?>
             <div id="footer">
                <table> <tr>
                        <td><a class="footerheading " href="termsandpolicies.php">Terms & Policies </a></td>
                        <td><a class="footerheading" href="contactus.php">Contact Us </a></td>
                        <td> <a class="footerheading" href="signout.php">Sign Out</a></td>
                    </tr>
                </table>
            </div>
         </div>
    </body>
</html>
