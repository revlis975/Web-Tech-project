<?php 
$con=mysqli_connect('localhost', 'root', '','project');
$bo_name=$_POST['bo_name'];
$publisher=$_POST['publisher'];
$author=$_POST['author'];
$bo_MRP=$_POST['bo_MRP'];
$bo_barcode=$_POST['bo_barcode'];
$quantity_bo=$_POST['quantity_bo'];
$sql="insert into `BOOKS`  values ('$bo_name','$publisher','$author','$bo_MRP','$bo_barcode','0','$quantity_bo')";
$rs=mysqli_query($con,$sql);
header("Location: http://localhost/Project/s.html");
?>