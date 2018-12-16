<html>
<body>
	<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
	<?php
		session_start();
		$a=$_SESSION['rid'];
		$v=$_SESSION['l'];
		$_SESSION['rid']=$a;
		//echo $_SESSION['a'];
		$r=mysqli_connect("localhost","root","","inmar");
		$q="select * from " . $a . "fruits";
		$sql=mysqli_query($r,$q);
		echo "<table width=30% border=2><tr><th>fruits available</th><th>Price of fruits per kg</th><th>quantity available</th></tr>";
		while($c=mysqli_fetch_array($sql))
		{echo "<tr>
		<td>";
		echo $c['fruitName'];
		echo "</td>
		<td>";
		 echo $c['price'];
		echo "</td>
		<td>";
		echo $c['quantity'];
		echo "</td>
		</tr>";
		}
		echo "</table>";
	?>
	<form method="post" action="selectitem.php">
	<br>
	select a fruit listed<input type="text" name="a"><br>
	select the qunatity <input type="number" name="b"><br>
	<input type="submit" value="submit">
	</center>
	</body>
</html>