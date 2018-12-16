<?php
session_start();
?>
<html>
	<body>
	<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
	</center>
	<?php
		$v=$_SESSION["p"];
		//$e=$_SESSION["e"];
		echo $v;
		$r=mysqli_connect("localhost","root","","inmar");
		$q=mysqli_query($r,"select * from store where pid='$v';");
		$c=mysqli_num_rows($q);
			if($c>0)
				{
					echo "Sorry! You already have a store. You're not allowed to create another one";
				}
			else
				{
					mysqli_query($r,"insert into store values('$v');");
					$sql="CREATE TABLE " . $v . "fruits ( fruitName varchar(20) unique, quantity int, price double unique, quantitySelected int default 0, priceOfSelected double default 0,dateou varchar(10),dateouq varchar(10) );";
					$sql1=mysqli_query($r,$sql);
					$sql2="insert into " . $v . "fruits (fruitName) values ('mango'),('orange'),('apple'),('banana'),('pineapple'),('pomogranate'),('watermelon'),('guava');";
					$sql3=mysqli_query($r,$sql2);
					if($sql1){
					echo "Youve successfully created your store please update prices.";
				}
			else
				{
					echo "error creating table";
				}
				}
				$sql4="insert into retwal values ('$v',0);";
				$sql5=mysqli_query($r,$sql4);
				if($sql5){
					echo "wallet created ";
				}
?>
	</body>
</html>