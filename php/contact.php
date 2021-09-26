<?php
$con = mysqli_connect("localhost","root","","db_contact");
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }
// if($con)
// {
//     echo "connection succesfull";
// }
// else{
//     echo "No connection";
// }

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$concern = $_POST['concern'];

$sql = "insert into table_contact(fldName, fldPhone, fldEmail, fldConcern) values('$name', '$phone', '$email', '$concern')";

$rs = mysqli_query($con, $sql);
header("Location: http://localhost/Project/homepage.html");
// if($rs)
// {
//     echo "Contact Records Inserted";
// }
// else{
//     die('Error: ' . mysqli_connect_error());
// }
?>