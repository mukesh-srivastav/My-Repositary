<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign In</title>
        <link rel="stylesheet" href="public/css/style.css" />
		
    </head>
    <body>
       <div id="wrapper">
            <div id="header">
                <img src=".... " alt="LOST&FIND " id="logo" />
                <h1 id="sitename" >Lost & Find.com</h1>
                <h4 id="siteintro">A place to find your Lost.</h4>
               
            </div>
			<?php if(isset($_GET['id'])) { ?> <div id="<?php echo $_GET['id']  ; ?> "> <?php echo $_GET['v'] ; ?> </div><?php } ?>
           <div id="signinwrapper">
               <form method="post" action="signup-user.php" >
                   <table align="center">
                   <caption> WELCOME  </caption>
                   <tr><th>Name : </th><td><input type="text" name="name" class="signininput"></td></tr>
                   <tr><th>Bio (About you) : </th><td><input type="text" name="bio" max-length="30" class="signininput"></td></tr>
				   <tr><th>Age :  </th><td><input type="number"  name="age" max-length="3" class="signininput" required ></td></tr>
                   <tr><th>Gender :  </th><td><input type="radio"  name="gender" class="signininputgender" value="Male" >Male</input>
											  <input type="radio"  name="gender" class="signininputgender" value="Female" >Female</input></td></tr>
                   <tr><th>Current Address: </th><td><input type="text" name="address" class="signininput"></td></tr>
                   <tr><th>Email : </th><td><input type="email" name="email" class="signininput" required></td></tr>
                   <tr><th>Password : </th><td><input type="password"  name="password" class="signininput" required></td></tr>
                   <tr><th  colspan="2" ><input type="submit"  id="signinsubmit" name="Submit"   value="Submit" class="submit" ></th></tr>
                  
                   </table>

               </form>
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
