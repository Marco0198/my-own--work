<?php 
 /* Full Name: Marco Mulondayi
 * Student Number : 219049505
 * group 2B
    description:this is the login page fonctionality
 */
if (isset($_POST['submit'])) {

$userName =$_POST['uname'];
$passwordConf=$_POST['psw'];

$servername = "localhost";
$username = "root";
$db_password = "";
$dbname = "mydatabase";


// Create connection
$conn = mysqli_connect($servername, $username,$db_password, $dbname);

$sql = "SELECT * FROM tbl_User where userName=? OR email=?;" ;

$statement=mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($statement,$sql)) {
  echo "eroor";
 
}
else{
   
   mysqli_stmt_bind_param($statement,"ss",$userName ,$passwordConf);
    mysqli_stmt_execute($statement);
    $result=mysqli_stmt_get_result($statement);

    if ($row=mysqli_fetch_assoc($result)) {

      $passwordCheck = password_verify($passwordConf,$row['passwordConf']);
     // $passwordConf=$row['passwordConf'];
       $passwordCheck=$passwordConf;
   
    if ($passwordCheck!==$row['passwordConf'] )
    {
         echo "wrong password";
          header('location: login.php?login=wrong-password');
    }
if ($passwordCheck==$row['passwordConf']) {
   session_start();
  $_SESSION['idUser']=$row['id'];
  $_SESSION['userEmai']=$row['userName'];
  echo "your are logged in";
      header('location: login.php?login=your-are-logged-in');
   exit();
}

}
else{
 echo "create a new  account";
  header('location: login.php?login=create-a-new-account');
  exit();
}
}
}

 ?>