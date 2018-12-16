<?php
session_start();
?>
<html>
	<body>
		<center style="color:olive"><h1 style="font-size:10vw">Inmar</h1>
		</center>
	<?php
		$f=$_POST["a"];
		$v=$_SESSION["p"];

		$r=mysqli_connect("localhost","root","","inmar");
		$q=mysqli_query($r,"insert into " . $v . "fruits (fruitName) values ('$f');");
		if($q)
		{
			echo "successfully added";
		}
		else 
			echo "error adding"
	?>
	</body>
</html>