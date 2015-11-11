<html>
	<head>
		<title>Week 9 Lab Task 2 by Jian Liu</title>
	</head>

	<body>
		<h1>Week 9 Lab Task 2</h1>
	<form name="converter" method="get" action="Week9Lab_Task2_JianLiu.php">
		<table>
			<tr>
				<th colspan="2">Temperature conversion</th>
			</tr>
			<tr>
				<td>Degree:</td>
				<td><input type="text" name="degree" id="degree"></td>
			</tr>
			<tr>
				<td>Convert to:</td>
				<td><input type="radio" name="type" id="type" value="cels">Celsius
				<input type="radio" name="type" id="type" value="fahr">Fahrenheit</td>
			</tr>
			<tr>
				<td  colspan="2"><input type="submit" name="submitted" value="Convert!"><!--<input type="submit" id="btnConvert" value="Convert!"></td>-->
			</tr>
		</table>
	</form>
	<p style = 'font-weight: bold;'> Instruction: Please enter the base degree, and choose 
		the desired type of convision, then press the 'Convert!' button</p>
	
	<?php
		if (isset($_GET["submitted"])){
	    
			$degree = $type = "";
		
			if (isset($_GET["degree"])){
				$degree = $_GET["degree"];
			}
		
			if (isset($_GET["type"])){
				$type = $_GET["type"];
			}
		
			if($degree != "" && $type != ""){
				if (is_numeric($degree)){
					converter($type, $degree);
				}
				else{
					echo "<p style = 'color: red; font-size: 150%;'> Invalid input, please enter a number.</p>";
					exit();
				}	
			}
			elseif ( $type == "" && $degree!= ""){
				echo "<p style = 'color: red; font-size: 150%;'> Invalid input, please select the type of conversion.</p>";
				exit();
			}
			elseif ($degree == "" && $type != "" ){
				echo "<p style = 'color: red; font-size: 150%;'> Invalid input, please please enter the base degree.</p>";
				exit();
			}
			elseif ($degree == "" && $type == ""){
				echo "<p style = 'color: red; font-size: 150%;'> Invalid input, please enter the degree and select the type.</p>";
				exit();
			}
			else{
				exit();
			}
		}
		else{}
		
		function converter($type, $degree){
			if ($type == "cels"){
				$result = ($degree - 32) * 5/9;
				echo "<p style = 'color: blue; font-size: 200%;'>The Fahrenheit you entered was $degree, convert to Celsius is $result</p>";
			}
			else{
				$result = $degree * 9/5 + 32;
				echo "<p style = 'color: blue; font-size: 200%;'>The Celsius you entered was $degree, convert to Fahrenheit is $result</p>";
			}	
		}
		

	?>
	
		
	</body>
</html>
