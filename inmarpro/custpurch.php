<?php
session_start();
?>
<html>
	<body>
	<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
		<?php
			$v=$_SESSION["p"];
			$r=mysqli_connect("localhost","root","","inmar");
			$q=mysqli_query($r,"select * from retshop where rid='$v';");
			echo "<table width=19% border=2><tr><th>your Retailer id</th><th>shooper id</th><th>amount transferred</th><th>date of purchase</th></tr>";
			while($c=mysqli_fetch_array($q))
				{
					echo "<tr><td>";
					echo $c['rid'];
					echo "</td><td>";
					echo $c['sid'];
					echo "</td><td>";
					echo $c['amount'];
					echo "</td><td>";
					echo $c['date'];
					echo "</td><tr>";
				}
			echo "</table>";
			echo "</body></html>";
		?>
	</center>
	</body>
</html>