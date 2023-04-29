Давайте посмотрим на следующий код:
<?php
	$a = 1;
	$b = 2;
	
	if ($a == $b) {
		var_dump(true);
	} else {
		var_dump(false);
	}
?>
<p>Как вы видите, в данном коде выполняется сравнение переменных a и b и, если они равны, то в консоль выводится true, а если не равны - то false.</p>
<p>Здесь пришло время открыть вам некоторую неочевидную вещь: на самом деле конструкция if не является обязательной для сравнения - сами операторы вида ==, ===, !=, <, > и т.д. возвращают своим результатом либо true, либо false.</p>
<?php
	var_dump(1 == 1); // выведет true
	var_dump(1 == 2); // выведет false
?>
<p>Исходя из написанного, код из начала урока можно переписать более простым образом:</p>
<?php
	$a = 1;
	$b = 2;
	
	var_dump($a == $b);
?>
<p>Можно не выводить результат сразу, а присвоить его какой-нибудь переменной:</p>
<?php
	$a = 1;
	$b = 2;
	
	$result = $a == $b;
	var_dump($result);
?>
<p>Используя оператор ==, узнайте, равны ли значения этих переменных или нет.</p>
<?php
	$a = 2 * (3 - 1);
	$b = 6 - 2;

	var_dump($a == $b);
?>
<p>Пусть даны следующие переменные:</p>
<?php
	$a = 5 * (7 - 4);
	$b = 1 + 2 + 7;

	$result = $a > $b;
	var_dump($result);
?>

<?php
	$a = 2 ** 4;
	$b = 4 ** 2;

	$result = ($a != $b);
	echo $a . ' ' . $b . ' ';
	var_dump($result);
?>