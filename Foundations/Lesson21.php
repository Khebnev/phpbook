<p>Пусть дана переменная r с радиусом круга. По соответствующей формуле найдите площадь круга и запишите ее в переменную s. Выведите содержимое этой переменной на экран.</p>
$r = 2. $s = M_PI * $r^2.

<?php 
	$r = 2;
	$s = M_PI * $r ** 2;
	echo '$s дорівює' . $s;
?>
<p>Пусть дана переменная a со стороной квадрата. Найдите площадь квадрата и запишите ее в переменную s. Выведите содержимое этой переменной на экран.</p>
<?php 
	$a = 5;
	$s = $a ** 2;
	echo "Площа квадрата дорівює сторона $a ^ 2. $s = " . $s;
?>

<p>Пусть даны переменные a и b со сторонами прямоугольника. Найдите площадь прямоугольника и запишите ее в переменную s. Выведите содержимое этой переменной на экран.</p>
<?php 
	$a = 3;
	$b = 2;
	$s = $a * $b;
	echo 'Площа прямоугольника дорівює ' . $s;
?>

<p>Пусть даны переменные a и b со сторонами прямоугольника. Найдите периметр прямоугольника и запишите его в переменную p. Выведите содержимое этой переменной на экран.</p>
<?php 
	$a = 5;
	$b = 10;
	$p = $a * 2 + $b * 2;
	echo $p;
	echo " або ";
	$p = ($a + $b) * 2;
	echo $p;
?>

<p>Пусть дана переменная tc с температурой в градусах Цельсия. По соответствующей формуле выполните перевод этой температуры в градусы Фаренгейта.</p>
tc * 1.8 + 32 = 
<?php 
	$tc = 15;
	$f = $tc * 1.8 + 32;
	echo $f;
?>
<p>Пусть дана переменная tf с температурой в градусах Фаренгейта. По соответствующей формуле выполните перевод этой температуры в градусы Цельсия.</p>
(tf - 32) * 5/9
<?php 
	$tf = 59;
	$tc = ($tf - 32) * 5/9;
	echo "Температура дорівює = " . $tc;
?>