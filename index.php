<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
		//1. Variablen
		echo "Thema: Autos<p>";
		$a=5;
		$b="er BMW mit ";
		$c=4.752;
		$d=" Hubraum";
		echo $a . $b . $c . $d . " und 300 PS.<br>";

		//2. Arrays
		$cars=array("BMW","Mercedes","Audi");
		echo "2. Array-Element: $cars[1]<br>";
		$anzahl=count($cars);
		echo $anzahl;
		unset($cars[1]);
		echo "<br>2. Array-Element nach unset: $cars[1]<br>";
		echo "Ausgabe des kompletten Arrays mit print_r: ";
		print_r($cars);

		//3. Verzweigungen
		if ($a==5) {
			echo "<br>a ist $a";
		} else {
			echo "<br>a ist nicht 5";
		}
		switch($c){
			case 4.752: echo "<p>Hubraum: 4.752"; break;
			case 3: echo "<p>Hubraum: 3"; break;
			default: echo "<p>Kein Hubraum"; break;
		}

		//4. Schleifen (engl. loops)
		echo "<p>for-Schleife:";
		for($i=1;$i<5;$i++){
			echo "<br>$i. Schleifendurchlauf";
		}
		echo "<p>while-Schleife:";
		while($c<10){
			echo "<br>$c";
			$c++;
		}
		echo "<p>foreach-Schleife:";
		$cars[1]="Volkswagen";
		foreach($cars as $value){
			echo "<br>" . $value;
		}
	?>
	
	<p>************************************************</p>
	<p><strong>Quellen PHP:</strong></p>
	<ul>
		<li><a href="http://www.php.net/manual/de/langref.php" target="_blank">http://www.php.net/manual/de/langref.php</a>
		<li><a href="http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/" target="_blank">http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/</a>
		<li><a href="http://us2.php.net/tut.php" target="_blank">http://us2.php.net/tut.php</a>
		<li><a href="http://www.w3schools.com/PHP/Default.asp" target="_blank">http://www.w3schools.com/PHP/Default.asp/</a>
	</ul>
	<script>

	</script>
</body>

</html>