<p>Пусть переменная $num может принимать значения 1, 2 или 3. Пусть также для каждого значения мы хотим выводить на экран различные строки. Для решения задачи можно просто написать три if без конструкции else:</p>
<?php
	$num = 1; // может быть 1, 2 или 3
	
	if ($num === 1) {
		echo 'value1'; // сработает, если $num равно 1
	}
	
	if ($num === 2) {
		echo 'value2'; // сработает, если $num равно 2
	}
	
	if ($num === 3) {
		echo 'value3'; // сработает, если $num равно 3
	}
?>
<p>В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в какую декаду месяца попадает это число.</p>
<?php 
	$day = rand(1, 31);

	if ($day >= 1 and $day <= 10) {
		echo "Перша декада";
	}

	if ($day >= 11 and $day <= 20) {
		echo "2th decade";
	}

	if ($day >= 21 and $day <= 30) {
		echo "3th decade";
	}
	if ($day == 31) {
		echo "4th decade";
	}
?>
<p>Конструкция elseif</p>
<p>Приведенный выше код можно переписать через специальную конструкцию elseif:</p>
<?php
	$num = rand(1, 3);
	
	if ($num === 1) {
		echo 'value1';
	} elseif ($num === 2) {
		echo 'value2';
	} elseif ($num === 3) {
		echo 'value3';
	}
?>
<p>Решите предыдущую задачу на декады месяца через конструкцию elseif.</p>
<?php 
	$day = rand(1, 31);

	if ($day >= 1 and $day <= 10) {
		echo "Перша декада";
	} elseif ($day >= 11 and $day <= 20) {
		echo "2th decade";
	} elseif ($day >= 21 and $day <= 30) {
		echo "3th decade";
	} elseif ($day == 31) {
		echo "4th decade";
	}
?>
<p>Преимущество elseif</p>
<p>Преимуществом использования elseif вместо нескольких ифов является возможность отловить ситуацию, когда значение переменной $num не подходит ни под одно из условий:</p>
<?php
	$num = rand(1, 5);
	
	if ($num === 1) {
		echo 'value1';
	} elseif ($num === 2) {
		echo 'value2';
	} elseif ($num === 3) {
		echo 'value3';
	} else {
		echo 'неверное значение переменной $num';
	}
?>

<p>Модифицируйте предыдущую задачу так, чтобы, если в переменной $day будет не число от 1 до 31, выдавалось сообщение об ошибке.</p>
<?php 
	$day = rand(1, 41);

	if ($day >= 1 and $day <= 10) {
		echo "Перша декада";
	} elseif ($day >= 11 and $day <= 20) {
		echo "2th decade";
	} elseif ($day >= 21 and $day <= 30) {
		echo "3th decade";
	} elseif ($day == 31) {
		echo "4th decade";
	}
	else {
		echo "Error. $day more than 31 day in the nonth";
	}
?>
<p>Вложенные if</p>
<p>Конструкции if else можно вкладывать друг в друга произвольным образом. Смотрите пример:</p>
<?php
	$num = 3;
	
	if ($num >= 0) {
		if ($num <= 5) {
			echo 'меньше или равно 5';
		} else {
			echo 'больше 5';
		}
	} else {
		echo 'меньше нуля';
	}
?>
<p>Пусть в переменной $age хранится число. Если это число меньше 10 или больше 99, то выведите на экран сообщение об этом. Если же число попадает в указанный диапазон, то найдите сумму цифр этого числа. Если полученная сумма меньше или равна 9, то выведите на экран сообщение о том, что сумма цифр однозначна, в противном случае выведите сообщение о том, что сумма цифр двузначна.</p>

<?php 
	$age = (string) rand(1, 120);

	if ($age < 10 or $age > 99) {
		echo "$age это число меньше 10 или больше 99";
	}
	else {
		echo "$age Попадает в диапазон от 10 до 99.";
		$num1 = $age[0];
		$num2 = $age[1];
		$sum = $num1 + $num2;
		if ($sum <= 9) {
			echo " \$sum = $sum сумма цифр однозначна";
		}
		else {
			echo " \$sum = $sum сумма цифр двузначна";
		}
	}
?>