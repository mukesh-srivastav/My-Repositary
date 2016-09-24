
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lost & Find </title>
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
			<?php 
					if(isset($_GET["id"]))
					{ echo "<div id=".$_GET["id"].">".$_GET["v"]."</div>";
					}
					?> 
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
				$sql="SELECT * FROM Lost  ";
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
                <img src="<?php echo $b ; ?> " id="objectpic" alt=" " />
                <div id="newscontact"><h3> Contact Details : <?php echo $f ; ?> </h3>
                   
                    </div>
                <div id="newscontactaddress"><h3  > Address :<?php echo $g ; ?> </h3>
                    </div><br/>
                <div id="objectinfo"><h3>Description : <?php echo $h ; ?>  </h3>
                    </div>
                <a href="upvote.php" id="newsupvote">Upvote</a>
                <a href="comment.php" id="newscomment" > Comment </a> 
				
            </div>
			<?php }} ?>
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
