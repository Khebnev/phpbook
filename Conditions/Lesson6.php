<?php
	$test = null;
	
	if ($test !== null) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Более удобно такую проверку можно выполнить с помощью специальной команды isset:</p>
<?php
	$test = null;
	
	if (isset($test)) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Подавление ворнинга</p>
<p>Пусть переменная $test вообще не определена. Как вы уже знаете, значение такой переменной будет равно null. При этом попытка обратиться к этой переменной приведет к появлению ворнинга:</p>
<?php
	var_dump($test); // выведет null и ворнинг
?>
<p>Ворнинг также будет показан при попытке проверить переменную на null:</p>
<?php
	if ($test !== null) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>А вот проверка через команду isset не приведет к появлению ворнинга - он будет автоматически подавлен:</p>
<?php
	if (isset($test)) {
		echo $test;
	} else {
		echo 'variable does not exist';
	}
?>
<p>Инвертирование высказывания</p>
<p>Можно выполнить обратную проверку, на то, что переменная не определена. Для этого выполним инвертирование isset с помощью логического НЕ:</p>
<?php
	$test = null;
	
	if (!isset($test)) {
		echo '+'; //show +
	} else {
		echo '-';
	}
?>
<p><b>Элементы массивов</b></p>
<p><i>С помощью isset можно проверить существование элемента массива:</i></p>
<?php
	$arr = ['a', 'b', 'c'];
	
	if (isset($arr['5'])) {
		echo $arr['5'];
	} else {
		echo 'element does not exist';
	}
?>
<p>Можно также проверить элемент несуществующего массива:</p>
<?php
	if (isset($arr['5'])) {
		echo $arr['5'];
	} else {
		echo 'array or element does not exist';
	}
?>