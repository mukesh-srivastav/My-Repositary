<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>Contribute here </title>
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
            <div id="post">
                <img src="... " alt=" " />
                <h3> <?php if(isset($_SESSION["name"])) { echo $_SESSION["name"] ; } ?> WELCOME  </h3><hr id="tableline">
                <table summary="Post here" >
                <form action="postsubmit.php" method="post" enctype="multipart/form-data" >
                    <tr><caption id="posttabletitle"> Post the Object here and help a needy person </caption></tr>
                <tr class="posttablerow">   <th>Name</th><td><?php if(isset($_SESSION["name"])) { ?> <input class ="textinput" name="Name"  id="UserName" type="text" maxlength="30" value=" <?php echo $_SESSION["name"] ; ?>" /></td></tr> 
				 <?php } else {  ?>
															<input class ="textinput" name="Name"  id="UserName" type="text" maxlength="30" /></td></tr> <?php } ?>
                <tr class="posttablerow">   <th>Object</th><td><input class ="textinput" name="ObjectName"  id="Objectname" type="text" maxlength="20" /></td></tr>
                    <tr  class="posttablerow" ><th>Upload the photo</th><td><input id="ObjectImage" type="file" name="ObjectImage" ></td></tr>
                    <tr  class="posttablerow" ><th>Object Location where It was found:</th><td><input class="textinput" type="text" name="ObjectLocation" /></td></tr>
                    <tr  class="posttablerow" ><th>Date when Object found:</th><td><input type="text" class="textinput" name="ObjectDate" /> </td></tr>
                    <tr  class="posttablerow" ><th>Description / Information about Object : </th><td><input class="textareainput" type="textarea" name="ObjectInformation" /> </td></tr>
                    <tr  class="posttablerow" ><th> Contact Details (Email ,Mobile number ):</th><td><input type="text" class="textinput" name="ContactDetails" /></td></tr>
                    <tr  class="posttablerow" ><th> Contact Address  (for object): </th><td><input type="text" class="textinput" name="ContactAddress" /></td></tr>
                    <tr  class="posttablesubmit"><th><input type="Submit" class="submit" name="Submit" value="Post" /></th></tr>

                </form>
                </table>
            </div>
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
