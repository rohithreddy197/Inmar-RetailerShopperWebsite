<<?php
session_start();
?>
<html>
<body>
<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
<?php
$v=$_SESSION["p"];
$a=$_POST['a'];
$b=$_POST['b'];
$_SESSION['a']=$a;
$_SESSION['b']=$b;
$date=date('y/m/d');
$r=mysqli_connect("localhost","root","","inmar");
$sql= "select * from " . $v . "fruits where fruitName='$a' and dateouq='$date';";
$res=mysqli_query($r,$sql);
$rows=mysqli_num_rows($res);
if(($rows)>0){
	header("location:quantityerror.html");
}
else 
	    header("location: updateQuantity.php");
	?>