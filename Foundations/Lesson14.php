<p>У PHP існує ще одне спеціальне значення null, яке означає "нічого". Наприклад, ми можемо надати змінній це значення на знак того, що там нічого не лежить.</p>
<?php
	$test = null;
	var_dump($test); // выведет null
?>
<p>echo виведе порожнечу</p>
<?php
	$test = null;
	echo $test;      // выведет пустоту
?>
<p>За промовчанням змінні, які не були оголошені в коді, мають значення null:</p>
<?php
	var_dump($test); // выведет null
?>
<p>Надайте змінної значення null. Виведіть цю змінну на екран.</p>
<?php 
	$thisNull = null;
	var_dump($thisNull);
?>
<p>Виведіть на екран значення будь-якої неоголошеної змінної.</p>
<?php 
	var_dump($a);
?>