
<?php
include 'DBconn.php'; 


if (isset($_POST['submit'])) {
 $name=$_POST['fname'];
 $email=$_POST['Email'];
 $phone=$_POST['Phone'];
 $message=$_POST['text'];

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact_tb (contact_name, contact_email, contact_phone,message)VALUES ('$name','$email','$phone','$message')";
if ($conn->query($sql) === TRUE) {
    header('location: index.php?submit=sucess');

    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>