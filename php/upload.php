
<!DOCTYPE html>
<html>
<title>Customer database</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php 


$con=mysqli_connect('localhost', 'root', '','project');
$name=$_POST['name'];
$payment_method=$_POST['payment_method'];
$price=$_POST['price'];
$cust_ID=$_POST['cust_ID'];
$item_type=$_POST['item_type'];
$barcode=$_POST['barcode'];
$quan=$_POST['quan'];
$sql="insert into `CUSTOMER` values ('$cust_ID','$name','$payment_method','$price','$item_type','$barcode','$quan')";
$sql1="update `$item_type` set quantity=quantity-'$quan' where BARCODE='$barcode'";
$rs=mysqli_query($con,$sql);
$rs=mysqli_query($con,$sql1);


function function_alert($message) {
    echo "<script>alert('$message');</script>";
}
$avail="select quantity from `$item_type` where barcode='$barcode'";
$rs=mysqli_query($con,$avail);
$row = mysqli_fetch_assoc($rs);

// Function call

if($row['quantity']==0)
function_alert("Out of stock");?>

// function check() {
// 	echo "CHAL RAHA HAI";
// 	$con=mysqli_connect('localhost:3307', 'root', '','project');
// 	$barcode=$_POST['barcode'];
// 	$item_type=$_POST['item_type'];
// 	$sql1="update `$item_type` set quantity=quantity+1 where BARCODE='$barcode'";
// 	$rs=mysqli_query($con,$sql1);
// 	$avail="select quantity from bags where barcode='$barcode'";
// 	$rs=mysqli_query($con,$avail);
// 	$row = mysqli_fetch_assoc($rs);
// 	echo var_dump($row['quantity'])."<br>";
// 	echo $row['quantity']." left in stock";
// 	echo '<script>alert("$row['quantity']. left in stock")</script>';
// }

// if (isset($_POST['button2'])) 
// {
//     check();
// }

// function function_alert($message) {

//     // Display the alert box 
//     echo "<script>alert('$message');</script>";
// }
// $avail="select quantity from `$item_type` where barcode='$barcode'";
// $rs=mysqli_query($con,$avail);
// echo mysqli_num_rows($rs);
// $row = mysqli_fetch_assoc($rs);

// // Function call
// echo $row['quantity'];
// if($row['quantity']<=0)
// function_alert("Out of stock");
// else
// function_alert("In stock")
// ;
  

<style type="text/css">
	*{padding: 0; margin: 0; box-sizing: border-box;}
body{height: 900px; background-color: #000;}
header {
	background: url('../img/custbg1.jpg');
	text-align: center;
	width: 100%;
	height: 900px;
	background-size: cover;
	background-attachment: fixed;
	position: relative;
	overflow-y: hidden;
	/*border-radius: 0 0 85% 85% / 30%;*/
}
header .overlay{
	width: 100%;
	height: 100%;
	padding: 50px;
	color: #FFF;
	text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);
	
}

h1 {
	font-family: 'Dancing Script', cursive;
	font-size: 80px;
	color: #000;
	margin-bottom: 30px;
}

button {
	border: none;
	outline: none;
	padding: 10px 20px;
	border-radius: 50px;
	color: #fff;
	background: #000;
	margin-bottom: 50px;
	box-shadow: 0 3px 20px 0 #0000003b;
}
button:hover{
	cursor: pointer;
	background-color: #fff;
	color: #000;
}
</style>
<body>

<header>
	<div class="overlay">
<h1>Database Updated!</h1>
<br><br>
	<button><a href="../homepage.html" style="text-decoration: none;">Back to Home</a></button>
		</div>
</header>


</body>
</html>