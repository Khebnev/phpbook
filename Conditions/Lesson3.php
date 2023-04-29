<p>Іноді можливо потрібно скласти якусь складну умову. Для цього існують оператори and (логічне І) та or (логічне АБО).</p>
<p><b>Логическое И</b></p>
<p>Логическое И позволяет задать одновременность условий. В следующем примере условие выполнится, если переменная $num больше нуля и одновременно меньше 10:</p>
<?php
	$num = 3;
	
	if ($num > 0 and $num < 10) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Условия могут налагаться не на одну переменную, а на разные. В следующем примере условие выполнится, если переменная $num1 равна 2 и одновременно переменная $num2 равна 3:</p>
<?php
	$num1 = 2;
	$num2 = 3;
	
	if ($num1 == 2 and $num2 == 3) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Проверьте то, что переменная $num больше нуля и меньше 5</p>
<?php 
	$num = 3;

	if ($num > 0 and $num < 5) {
		echo  $num . " more than 0 and less than 5";
	} else {
		echo "less than 0 and more than 5";
	}
?>
<p>Проверьте то, что переменная $num больше или равна 10 и меньше или равна 20.</p>
<?php 
	$num = 12;

	if ($num >= 10 and $num <= 20) {
		echo $num . ' more or = 10 and less or = 20';
	} else {
		echo 'less 10 or more than 20';
	}
	
?>
<p>Проверьте то, что переменная $num1 равна или меньше 1, а переменная $num2 больше или равна 3.</p>
<?php 
	$num1 = 5;
	$num2 = 7;

	if ($num1 <= 1 and $num2 >=3) {
		echo $num1 . 'переменная $num1 равна или меньше 1 і $num2 больше или равна 3';
	} else {
		echo "-";
	}
?>
<p><b>Логическое ИЛИ</b></p>
<p>Логическое ИЛИ требует выполнения хотя бы одного условия. В следующем примере условие выполнится, если переменная $num1 больше 0 или переменная $num2 больше 0 (достаточно выполнения хотя бы одного из условий):</p>
<?php
	$num1 = 10;
	$num2 = -5;
	
	if ($num1 > 0 or $num2 > 0) {
		echo '+'; // сработает это
	} else {
		echo '-';
	}
?>
<p>Приоритет операций сравнения</p>
<p>Операция and имеет приоритет над or. В следующем примере условие сработает, если переменная $num от 0 до 5 ИЛИ от 10 до 20:</p>
<?php
	$num = 3;
	
	if ($num > 0 and $num < 5 or $num > 10 and $num < 20) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Группировка условий</p>
<p>Хотя операция and и имеет приоритет над or, часто удобнее использовать группирующие круглые скобки, чтобы явно показать приоритет операций:</p>
<?php
	$num = 3;
	
	if ( ($num > 0 and $num < 5) or ($num > 10 and $num < 20) ) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>В приведенном ниже коде укажите приоритет операций в явном виде:</p>
<?php
	$num = 3;
		
	if ( ($num > 5 and $num < 10) or $num == 20) {
		echo '+';
	} else {
		echo '-';
	}
?>

<?php
	$num = 3;
		
	if ($num == 9 or ($num > 10 and $num < 20) or ($num > 20 and $num < 30)) {
		echo '+';
	} else {
		echo '-';
	}
?>