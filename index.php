<!DOCTYPE html>
<html>
	<head>
		<title>Pyramid Test of Asterisks</title>
	</head>
	<body>

		<center>
			<header>
				<h1>Pyramid Test of Asterisks</h1>
			</header>
			<form action="index.php" method="POST">
			<input type="number" name="form1" placeholder="enter any number">
			<button type="submit">Generate</button>

			</form>
		</center>

		<br><br>


		<?php
					
			if (isset($_POST["form1"])) {
						
						 
				$value = $_POST["form1"];
				$i = 0;

				for($i=1; $i<=$value; $i++){
				    echo "<center>";   
				    echo str_repeat("&nbsp;", $value-$i);
				    echo str_repeat("*&nbsp;", $i);
				}

			}	 

		?>

	</body>
</html>




