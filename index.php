<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<h2>Arvutamine murd- ja täisarvudega</h2>
	<?php echo $float = 3.14; ?><br>
	<?php echo $float + 7; ?> <br>
	<?php echo 4/3 ; ?> <br>

	<h2>Murdarvude ümardamine</h2>
	<?php echo(round(3.14)); ?> <br>
	<?php echo(ceil($float)); ?> <br>
	<?php echo(floor($float)); ?> <br>

	<h2> Andmetüübi funktsioonid </h2>
	<?php echo $integer = 3; ?> <br>
	<?php echo "Kas {$integer} on integer? " . is_int($integer); ?><br>
	<?php echo "Kas 7 on integer? " . is_int(7); ?><br>
	<?php echo "Kas 3.14 on integer? " . is_int($float); ?><br>
	<?php echo "Kas 7 on float? " . is_int($float); ?><br>
	<?php echo "Kas 3.14 on float? " . is_int(7); ?><br>
	<?php echo "Kas 7 on number? " . is_int(7); ?><br>
	<?php echo "Kas 3.14 on number? " . is_int(7); ?><br>

	<h2>Jadad (array) </h2>
	<?php
	    $numbers = array(4,8,15,16,23,42); ?>
		<?php	echo $numbers[0];?> <br>
		<?php	echo $numbers[1];?> <br>
		<?php	echo $numbers[2];?> <br>
		<?php	echo $numbers[3];?> <br>
		<?php	echo $numbers[4];?> <br>
		<?php	echo $numbers[5];?> <br>
	<?php  $mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));
	?>
	<?php echo $mixed[2];?> <br>
	<?php echo $mixed[4][2];?> <br>

	<?php $mixed[5] = "kass"; ?>
	<?php $mixed[] = "hobune"; ?>
	<pre><?php echo print_r($mixed); ?>
	</pre>
	<h2>Associative arrays</h2>
	<?php $assoc = array("first_name" => "Ingrid", "last_name" => "Kelder"); ?>
	<?php echo $assoc['first_name'];?> <br>
	<?php echo $assoc['last_name'];?> <br>
	 <?php $numbers = array(0 => 4, 5 => 8, 6 => 15, 9 => 16, 10 => 23, 15 => 42); ?>
	<?php $assoc["age"] = 20; ?>
	<?php $assoc["first_name"] = "Ingrid" ?>
	<?php echo $assoc['first_name'] = "Ingrid";?> <br>
	<?php echo $assoc['last_name'] = "Kelder";?> <br>
	<?php echo $assoc['e-mail'] = "ingrid.kelder@khk.ee";?> <br>
	<?php echo $assoc['e-mail'] = "ingrid.kelder@khk.ee";?> <br>
	<?php echo "Minu nimi on {$assoc["first_name"]} {$assoc["last_name"]}. Minu e-post on {$assoc["e-mail"]}"; ?><br>

	<h2>Array functions</h2>
	<?php $numbers_2 = array(8,23,15,42,16,4); ?>
	<?php echo count($numbers_2);?> <br>
	<?php echo max($numbers_2);?> <br>
	<?php echo min($numbers_2);?> <br>
	<?php echo sort($numbers_2);?> <br>
	<?php
	    sort($numbers_2);
	    print_r($numbers_2);
	?> <br>
		<?php
	    rsort($numbers_2);
	    print_r($numbers_2);
	?><br>
		<?php
	    implode(" ja ", $numbers_2)
	?>
	<?php print_r(explode(" ja ", $num_string)); ?>
	</body>
</html>