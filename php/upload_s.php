<?php 
$con=mysqli_connect('localhost', 'root', '','project');
$s_name=$_POST['s_name'];
$s_type=$_POST['s_type'];
$brand_s=$_POST['brand_s'];
$s_MRP=$_POST['s_MRP'];
$barcode_s=$_POST['barcode_s'];
$quantity_s=$_POST['quantity_s'];
$sql="insert into `STATIONARY`  values ('$s_name','$s_type','$brand_s','$s_MRP','$barcode_s','0','$quantity_s')";
$rs=mysqli_query($con,$sql);
header("Location: http://localhost/Project/s.html");
?>