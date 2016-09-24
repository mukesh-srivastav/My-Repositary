<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Mukesh Srivastav</title>
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
				<?php session_start();
				 if(isset($_SESSION['Name']))
					{ 

					if(isset($_GET["id"]))
					{ echo "<div id=".$_GET["id"].">".$_GET["v"]."</div>";
					}
					?>
				
				
            </div>
             <div id="status" >
                 <div id="profile">
                     <img src="...." alt= "  "  id ="statusprofiledp">
                     <h1 id="statusprofilename"> <?php $a= $_SESSION['Name'];  echo $a ; ?></h1>
                     <h4 id="statusprofilebio"> <?php $b= $_SESSION['Bio'];  echo $b ; ?> </h4>
                     <h5 id="statuscontribution"> Contribution : </h5><hr/>
                 </div>
				 <div id="newsfeed">
			<?php 	
				$s="localhost";
				$u="root";
				$p="";
				$db="MYDB";
				$conn=new mysqli($s,$u,$p,$db);
				if($conn->connect_error){
				die("connection failed : " .$conn->connect_error);
				}
				$sql="SELECT * FROM lost where Name='$a' ";
				$rslt=$conn->query($sql);
				if($rslt->num_rows>0){
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
                <div id="news"><img src="..." id="newsfeeddp" />
                    <p id="newsline"> <?php echo $a ; ?>  have got <?php echo $c ; ?>
					at <?php echo $d ; ?>  on <?php echo $e ; ?>  </p></div><br/>
                <img src="<?php echo $b ; ?> " id="objectpic" alt="Photo is not posted" />
                <div id="newscontact"><h3> Contact Details : <?php echo $f ; ?> </h3>
                   
                    </div>
                <div id="newscontactaddress"><h3  > Address :<?php echo $g ; ?> </h3>
                    </div><br/>
                <div id="objectinfo"><h3>Description : <?php echo $h ; ?>  </h3>
                    </div>
           <!--<div id="newsfeed">
                    <div id="news"><img src="..." alt =" " id="newsfeeddp" />
                               <p id="newsline">.... have got .... at .... on ..... </p>
                    </div>
                    <br/>
                    <img src="...." id="objectpic" alt="Photo is not posted" />
                    <div id="newscontact"><h3> Contact Details : ...... </h3> </div>
                    <div id="newscontactaddress"><h3  > Address :.... </h3</div><br/>
                    <div id="objectinfo"><h3>Description : .... </h3></div>
                    <a href="upvote.php" id="newsupvote">Upvote</a>
                    <a href="comment.php" id="newscomment" > Comment </a>
                </div> */
              

         </div> -->
		 <?php }}} else 
{
	?><div id="anonymous" ><h1 id="anonymoush"> Anonymous User </h1>
	 </div>          
 <?php } 
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
