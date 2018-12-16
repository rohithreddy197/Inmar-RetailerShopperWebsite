<html>
<body>
<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
<?php
session_start();
$a=$_POST['a'];
$b=$_POST['b'];
$v=$_SESSION['l'];
$rid=$_SESSION['rid'];
$r=mysqli_connect("localhost","root","","inmar");
$s1="select * from " . $rid . "fruits where fruitName='$a';";
$s2=mysqli_query($r,$s1);
$pr=mysqli_fetch_array($s2);
 $price=$pr['price'];
 $quantity=$pr['quantity'];
 $quantitySelected=$pr['quantitySelected'];
  $date=date("y/m/d");
  $priceOfSelected=$pr['priceOfSelected'];
 if($quantity>=$b){
$q="update " . $rid . "fruits set quantitySelected='$quantitySelected'+'$b' , quantity=('$quantity'-'$b') , priceOfSelected=('$priceOfSelected'+('$b'*'$price')) where fruitName='$a';";
$h="update shopwal set wallet=wallet-('$b'*'$price') where sid=$v;";
$y="update retwal set wallet=wallet+('$b'*'$price') where rid=$rid;";
$sql1=mysqli_query($r,$q);
$sql2=mysqli_query($r,$h);
$sql3=mysqli_query($r,$y);
if($sql1)
{ if($sql2)
	{if($sql3)
		{
			echo "you have purchased successfully";
			
		}else echo "third failed";
	}
else echo "second failed";
}
else 
	echo "first failed";
$retshop="insert into retshop values ('$rid','$v',('$b'*'$price'),'$date');";
$res=mysqli_query($r,$retshop);
if($res){
	echo "done";
}
echo "want to buy more?";
 }
 else 
	 echo "sorry the quantity you requested is not available please request less quantity!";
//echo "<html><body><a href="selection.php">Buy more</a></body></html>";
?>
<br>
<br>
Buy more!<a href="selection.php">buy</a>
</center>
</body>
</html>
		
		
