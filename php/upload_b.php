<?php 
$con=mysqli_connect('localhost', 'root', '','project');
$brand_b=$_POST['brand_b'];
$type_b=$_POST['type_b'];
$b_MRP=$_POST['b_MRP'];
$barcode_b=$_POST['barcode_b'];
$quantity_b=$_POST['quantity_b'];
$sql="insert into `BAGS`  values ('$brand_b','$type_b','$b_MRP','$barcode_b','0','$quantity_b')";
$rs=mysqli_query($con,$sql);
header("Location: http://localhost/Project/s.html");
?>