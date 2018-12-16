<html>
	<body>
	<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
		<?php
			session_start();
			$v=$_SESSION["l"];
			$r=mysqli_connect("localhost","root","","inmar");
			$sql="select * from shopwal where sid='$v';";
			$p=mysqli_query($r,$sql) or die( mysqli_error($r));;
			echo "<html><body><table border='2' align='center'>";
			echo "<tr><th>your id</th><th>wallet balance</th></tr>";
			while($row=mysqli_fetch_array($p))
			{
				echo "<tr><td>" . $row['sid'] . "</td>";
				echo "<td>" . $row['wallet'] . "</td></tr>";
			}
			echo "</table>";
			echo "</body></html>";
		?>
	</center>
	</body>
</html>