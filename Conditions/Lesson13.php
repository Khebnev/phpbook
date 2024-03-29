<p>Пусть у нас есть следующий код, проверяющий есть ли уже пользователю 18 лет или нет:</p>
<?php
	$age = rand(10, 30);
	
	if ($age >= 18) {
		$adult = true;
	} else {
		$adult = false;
	}
	
	var_dump($adult);
?>
<p>Как вы видите, конструкция if-else нужна только для того, чтобы записать определенное значение в переменную $adult. Для таких задач, когда у нас в условии происходит только запись одной переменной, существует более короткое решение через так называемый тернарный оператор.</p>
<p>Его синтаксис таков:</p>
<p><i><b>переменная = условие ? значение1 : значение2;</b></i></p>
<p>Оператор работает так: если условие истинно, то возвращается значение1, в противном случае - значение2. Давайте перепишем приведенный в самом начале урока код через тернарный оператор:</p>
<?php
	$age = rand(10, 30);
	$adult = $age >= 18 ? true: false;
	var_dump($adult);
?>
<p>Можно, кстати, не записывать результат в переменную, а сразу вывести в через var_dump:</p>
<?php
	$age = rand(10, 30);
	var_dump( $age >= 18 ? true: false );
?>
<p>Пусть дана переменная $num, которая может быть либо отрицательной, либо положительной. Запишите в переменную $result число 1, если переменная $num больше или равна нулю, и число -1, если переменная $num меньше нуля.</p>
<?php 
	$num = rand(-10, 10);

	$result = $num >= 0 ? 1: -1;
	echo $num . ' поэтому result = ' . $result;
?>
<p>Замечания</p>
<p>Тернарный оператор следует использовать только в самых простых случаях, так как его использование затрудняет понимание кода.</p>