<p>Пусть у нас есть какая-то булева переменная, которая может принимать значения true или false:</p>
<p>Давайте напишем if, проверяющий нашу переменную на значение true:</p>
<?php
	$test = true;
	
	if ($test === true) {
		echo '+';
	} else {
		echo '-';
	}
?>

<?php
	$test = true;
	
	if ($test === false) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p><b>Логические значения и двойное равно</b></p>
<p>В предыдущем примере я использовал для сравнения оператор ===. В этом случае наша переменная сравнивалась на равенство true как по значению, так и по типу.</p>
<p>В нашей задаче можно использовать и оператор ==. Если в переменной test всегда будет одно из значений true или false, то ничего и не изменится:</p>
<?php
	$test = true; // тут пишем или true, или false
	
	if ($test == true) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>А вот если в переменную $test могут попадать любые значения, то все становится намного сложнее. В таком случае, если в переменной будет не булево значение, то это значение вначале будет преобразовано к булеву и только затем будет сравниваться.</p>
<p>Пусть, например, в нашей переменной будет число 1. В этом случае оно вначале преобразуется к логическому типу, то есть к true. И затем будет выполнено сравнение:</p>
<?php
	$test = 1;
	
	if ($test == true) {
		echo '+'; // сработает это, тк 1 == true - это верно
	} else {
		echo '-';
	}
?>
<p>А вот, к примеру, число 0 преобразуется к false. И наше условие в результате будет ложным:</p>
<?php
	$test = 0;
	
	if ($test == true) {
		echo '+';
	} else {
		echo '-'; // сработает это, тк 0 == true - это НЕверно
	}
?>

<p>Сокращенный if</p>
<p>Пусть, к примеру, мы хотим узнать, равна ли переменная $test значению true. В этом случае конструкцию if можно записать так:</p>
<?php
	$test = true;
	
	if ($test == true) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>При программировании такие проверки требуются очень часто, поэтому для них существует более изящная сокращенная форма: вместо if ($test == true) можно написать просто if ($test).</p>
<?php
	$test = true;
	
	if ($test) { // эквивалентно if ($test == true)
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Пусть теперь мы проверяем на то, что переменная $test не равна true:</p>
<?php
	$test = true;
	
	if ($test != true) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>В этом случае сокращенный синтаксис будет выглядеть так:</p>
<?php
	$test = true;
	
	if (!$test) { // используем логическое НЕ
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Аналогичное сокращение существует и для проверки на false. Пусть дан вот такой код:</p>
<?php
	$test = true;
	
	if ($test == false) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Условие $test == false на самом деле все равно, что $test != true:</p>
<?php
	$test = true;
	
	if ($test != true) { // эквивалентно if ($test == false)
		echo '+';
	} else {
		echo '-';
	}
?>
<p>short if</p>
<?php
	$test = true;
	
	if (!$test) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Перепишите следующий код с использованием сокращенного сравнения:</p>
<?php
	$test = true;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}
?>
<?php
	$test = true;
	
	if (!$test) {
		echo '+';
	} else {
		echo '-';
	}
?>

<?php
	$test = true;
	
	if (!$test) {
		echo '+';
	} else {
		echo '-';
	}
?>

<?php
	$test = true;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Нюанс</p>
<p>Учтите, что в сокращенных операциях сравнение идет по ==, а не по ===.</p>


<?php
	$test = -12;
	
	if ($test) {
		echo '+';
	} else {
		echo '-';
	}
?>