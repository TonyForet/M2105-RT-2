# M2105-RT-2
Repository pour travaux liés aux TDs et TPs

- [x] [Module M2105](http://slamwi.kobject.net/php-rt/cours/)
- [x] [Cours, TDs et TPs](http://slamwi.kobject.net/php-rt/)
- [x] Projet (à venir)



<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Variables</title>
	</head>

<body>
<?php

function addition($a,$b) {
    return $a + $b;
}


function soustraction($a,$b) {
	return $a - $b;
}


function multiplication($a,$b) {
	return $a * $b;
}


function division($a,$b) {
	return $a / $b;
}


function operation($val1,$val2,$op)
{
	return $op($val1,$val2);
}


echo operation(2,7,"addition")."<br>";
echo operation(2,7,"soustraction")."<br>";
echo operation(2,7,"division")."<br>";
echo operation(2,7,"multiplication")."<br>";

?>
</body>
</html>