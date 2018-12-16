<?php
session_start();
?>
<html>
<body>
<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
<?php
if(isset($_SESSION["l"]))
{ 
$v=$_SESSION["l"];
//echo $v;
}
	echo "Retailer ID's of existing stores";
	echo "<br>";
	$r=mysqli_connect("localhost","root","","inmar");
	$store= "select * from store;";
	$storeRes=mysqli_query($r,$store);
echo "<table width=120 align=center  border='2'><tr><th>RetailerId</th></tr>";
while($row=mysqli_fetch_array($storeRes))
	{
			echo "<tr><td>" . $row['pid'] . "</td></tr>";
	}	
echo "</table>";
?>

Enter the RetailerId of the StoreName you want to purchase fruits from :<br>
<form method="POST" action="checkdate.php">
<input type="number" name="a"><br>
<input type="submit" name="submit">
</form>
</center>
</body>
</html>
