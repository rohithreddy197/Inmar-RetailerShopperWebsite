<?php
session_start();
//$_SESSION['a']=$_POST['a'];
//$_SESSION['b']=$_POST['b'];
$v=$_SESSION['l'];
$rid=$_POST['a'];
$_SESSION['rid']=$rid;
$date=date("y/m/d");
$r=mysqli_connect("localhost","root","","inmar");
$s="select * from retshop where date='$date' and sid='$v' and rid='$rid';";
$sql=mysqli_query($r,$s);
$rows=mysqli_num_rows($sql);
if(($rows)>0){
	header("location:error.html");
}
else 
	    header("location: selection.php");
	?>

	