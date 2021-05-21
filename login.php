<?php 
    session_start();
    /* Full Name: Marco Mulondayi
 * Student Number : 219049505
 * group 2B
    description:this is the login page
 */

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="register_style.css">
</head>
<body>
 <center>
	<form action="longin_fonc.php" method="POST">
     <div class="formBox1">
    <h1>LOGIN</h1>
    <?php 
     if (isset($_GET['login'])) {
         
         if ($_GET['login']=="wrong-password") {
           echo '<p class="danger"> wrong  password try again</p>';

         }
         if ($_GET['login']=="your-are-logged-in") {
           echo '<p class="danger"> your are logged in</p>';
         }
         if ($_GET['login']=="create-a-new-account") {
           echo '<p class="danger"> this account does not exist please create a new account </p>';
         }
     }

     ?>
    <input type="text" placeholder="Enter Username" name="uname" required><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br><a href="registration.php">Sign up</a><br>
    <input type="submit" value="LOGIN"name="submit" >
  
     </form>
    </center>
</body>
</html>