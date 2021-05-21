<?php
include 'DBconn.php'; 


if (isset($_POST['submit'])) {
 $name=$_POST['fname'];
 $email=$_POST['Email'];
 $phone=$_POST['Phone'];
 $date=$_POST['date'];
 $time=$_POST['time'];


 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO appointement_tb (contact_name, contact_email, contact_phone,appt_date,appt_time)VALUES ('$name','$email','$phone','$date','$time')";
if ($conn->query($sql) === TRUE) {
    header('location: index.php?submit=sucess');

    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>