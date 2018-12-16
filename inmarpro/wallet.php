<?php
session_start();
?>
<html>
<body>
<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
<?php
//$f=$_POST["a"];
$v=$_SESSION["p"];
//echo $v;
$r=mysqli_connect("localhost","root","","inmar");
$q=mysqli_query($r,"select * from retwal where rid='$v';");
echo "<table width=19% border=2><tr><th>your Retailer id</th><th>money available</th></tr>";
while($c=mysqli_fetch_array($q))
{echo "<tr>
<td>";
echo $c['rid'];
echo "</td>
<td>";
echo $c['wallet'];
echo "</td>
</tr>";
}
echo "</table>";
echo "</body></html>";
?>
</center>
</body>
</html>