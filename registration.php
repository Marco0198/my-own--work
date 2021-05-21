
<?php 
    session_start();
     /* Full Name: Marco Mulondayi
 * Student Number : 219049505
 * group 2B
    description:this is the registration  page 
 */
 ?>
 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="register_style.css">
	<title></title>
</head>
 <body>
 	<center>
 		<form action="registration_fonc.php" method="post">
     <div class="formBox">
    <h1>SIGN UP!</h1>
    <?php 
    if (isset($_GET['login'])) {

        if ($_GET['login']=="invali") {
           echo '<p class="danger"> invalid User Name please use aA-zZ0-9</p>';

         }
         
         if ($_GET['login']=="successfully") {
           echo '<p class="danger"> all your field has beeen recorded successfully</p>';

         }
         if ($_GET['login']=="username-taken") {
           echo '<p class="danger"> this user name is already taken</p>';
         }
         if ($_GET['login']=="sucess") {
           echo '<p class="danger">all your field has beeen recorded successfully</p>';

         }
          if ($_GET['login']=="pass") {
           echo '<p class="danger"> the password does not match</p>';
           
         }
     }


     ?>
     <input type="text" placeholder="Enter Username" name="uname" required><br>
     <p></p>
     <input type="email" placeholder="@email" name="email" required><br>
     <input type="password" placeholder="Enter Password" name="psw" required><br>
     <input type="password" placeholder=" Confirm Enter Password" name="pswconfirm" required><br>
     <input type="submit" value="LOGIN" name="submit">
  
     </form>
  </center>
</body>
</html>
