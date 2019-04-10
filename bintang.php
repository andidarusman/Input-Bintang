<!DOCTYPE html>
<html>

<head>
	<title> Bintang Piramid </title>
</head>

<body>



	<form action="" method="POST">
		Masukan bintang
		<input type="text" name="bintang">
		<input type="submit" name="enter" value="GO">
	</form>
	<?php 
	echo "<pre>";

		if (isset($_POST["enter"])) {
			$nil = $_POST["bintang"];

			for ($i=1; $i<$nil ; $i++) {
				$spasi = str_repeat(" ", 100-$i);
				$bintang = str_repeat("*", ($i-1)*2+1);
				echo $spasi.$bintang."<br>";
				}
				echo "</pre>";
			}
?>
</body>

</html>