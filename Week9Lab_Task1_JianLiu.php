<html>
	<head>
		<title>Week9 Lab Task 1 by Jian Liu</title>
	</head>
	<body>

	<h1>Week9 Lab Task 1</h1>

 <?php


    if (isset($_GET["lastName"]) && isset($_GET["firstName"])){
		$lastN = $_GET["lastName"];
        $firstN = $_GET["firstName"];
		echo "<p>Hello, $firstN $lastN. </p>";
		}
	elseif (isset($_GET["firstName"]) && !(isset($_GET["lastName"]))){
		$firstN = $_GET["firstName"];
		echo "<p>Hello, $firstN.</p>";
		}	
	else 
		echo "<p>welcome to the lab 9.</p>";

 ?>

 </body>
</html>