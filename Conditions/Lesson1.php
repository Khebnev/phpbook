<?php
	$test = 1;
	
	if ($test > 0) {
		echo '+'; // сработает это
	} else {
		echo '-';
	}
?>
<p>Змінемо на від'ємне число:</p>
<?php
	$test = -1; // поменяем значение переменной
	
	if ($test > 0) {
		echo '+';
	} else {
		echo '-'; // сработает это
	}
?>
<p>Змінна = 0</p>
<?php
	$test = 0;
	
	if ($test > 0) {
		echo '+';
	} else {
		echo '-'; // сработает это
	}
?>
<p>Умова >= 0</p>
<?php
	$test = 0;
	
	if ($test >= 0) {
		echo '+'; // сработает это
	} else {
		echo '-';
	}
?>

<p>Проверьте то, что переменная $test больше 10.</p>
<?php 
	$test = 0;
	if ($test > 10) {
		echo  '$test дорівнює ' . $test . ', тому Більше';
	} else {
		echo  '$test дорівнює ' . $test . ', тому Не Більше';
	}

?>
<p>Проверьте то, что переменная $test меньше 10.</p>
<?php 
	$test = 2;
	if ($test < 10) {
		echo 'Змінна дорівнює ' . $test . ', тому меньше';
	} else {
		echo 'Змінна дорівнює ' . $test . ', тому більше';
	}
?>
<p>Проверьте то, что переменная $test больше или равна 10.</p>
<?php 
	$test = 10;
	if ($test >= 10) {
		echo 'Змінна ' . $test . ' дорівнює або більше 10';
	} else {
		echo 'Змінна ' . $test . ' менше 10';
	}
?>
<p>Проверьте то, что переменная $test меньше или равна 10.</p>
<?php 
	$test = 5;
	if ($test <= 10) {
		echo 'Змінна $test дорівнює ' . $test . ' тому менше 10'; 
	} else {
		echo 'Змінна $test дорівнює ' . $test . ' більше 10'; 
	}
?>
<p>Перевірка на рівність</p>
<p>Для проверки двух значений на равенство используется оператор ==. Давайте для примера проверим, что переменная $test равна 0</p>
<?php
	$test = 0; // пусть значение переменной равно 0
	
	if ($test == 0) {
		echo '+'; // сработает это, так как переменная равна 0
	} else {
		echo '-';
	}
?>

<?php
	$test = 1; // пусть значение переменной равно 1
	
	if ($test == 0) {
		echo '+';
	} else {
		echo '-'; // сработает это, так как переменная НЕ равна 0
	}
?>
<p>Проверьте то, что переменная $test равна 10.</p>
<?php 
	$test = 10;
	if ($test == 10) {
		echo "+";
	} else {
		echo "-";
	}
?>
<p>Перевірка на нерівність</p>
<p>Существует также оператор !=, который наоборот, проверяет на неравенство. Давайте для примера проверим, что test переменная не равна 0:</p>
<?php
	$test = 1; // пусть значение переменной равно 1
	
	if ($test != 0) {
		echo '+'; // сработает это, так как переменная НЕ равна 0
	} else {
		echo '-';
	}
?>
<p>Поменяем значение переменной</p>
<?php
	$test = 0; // пусть значение переменной равно 0
	
	if ($test != 0) {
		echo '+';
	} else {
		echo '-'; // сработает это, так как переменная равна 0
	}
?>
<p>Проверьте то, что переменная $test не равна 10.</p>
<?php 
	$test = 5;

	if ($test != 10) {
		echo "Не дорівнює";
	} else {
		echo "Дорівнює";
	}
?>
<p>Порівняння змінних</p>
<p>В примерах выше мы сравнивали переменную с каким-то числом. Но никто не запрещает нам сравнивать две переменные</p>
<?php
	$test1 = 1;
	$test2 = 2;
	
	if ($test2 > $test1) {
		echo '+'; // сработает это, так как $test2 больше $test1
	} else {
		echo '-';
	}
?>
<p>Даны переменные $test1 и $test2. Проверьте, что значение какой из этих переменных больше и выведите соответствующее сообщение на экран.</p>
<?php 
	$test1 = 5;
	$test2 = 10;

	if ($test2 > $test1) {
		echo "$test2 больше $test1";
	} else {
		echo "$test1 больше $test2";
	}
?>