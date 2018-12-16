<?php
session_start();
?>
<html>
<body>
<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
</center>
<?php
$v=$_SESSION["p"];
//echo $v;
$r=mysqli_connect("localhost","root","","inmar");
$q="select * from " . $v . "fruits";	
$sql=mysqli_query($r,$q);
echo "<table align=center border=2>";
echo "<tr>
<th>Items being sold</th>
<th>Prices</th>
<th>quantity</th>
</tr>";
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
</body>
</html>