<?php
// echo "WORKING";
$con=mysqli_connect('localhost', 'root', '','project');
$item_type=$_POST['item_type'];
$barcode=$_POST['barcode'];
function function_alert($message) {

    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
$avail="select quantity from `$item_type` where barcode='$barcode'";
$rs=mysqli_query($con,$avail);
echo mysqli_num_rows($rs);
$row = mysqli_fetch_assoc($rs);

// Function call
echo $row['quantity'];
if($row['quantity']==0)
function_alert("Out of stock");
else
function_alert("In stock");
?>