<?php
	$num = 1; // объявляем переменную $num и записываем в нее значение 1
	$num = $num + 2; // записываем в $num ее саму плюс 2
	echo $num; // выведет 3
?>

<?php
	$num  = 1;
	$num += 3; // эквивалентно $num = $num + 3;
?>
<p>Спростіть наведений код через скорочені операції:</p>
<?php
	$num = 47;
	$num += 7;
	$num -= 18;
	$num *= 10;
	$num /= 15;
	echo $num;
?>
<p>Спростіть наведений код через скорочені операції:</p>
<?php
	$str = 'a';
	$str .= 'b';
	$str .= 'c';
	
	echo $str;
?>