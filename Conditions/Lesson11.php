<p>В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).</p>
<?php 
	$month = rand(1,12);

	if ($month >= 3 and $month <= 5) {
		echo "Month is $month, that's Spring";
	} elseif ($month >= 6 and $month <= 8) {
		echo "Month is $month, that's Summer";
	} elseif ($month >= 9 and $month <= 11) {
		echo "Month is $month, that's Autumn";
	} elseif ($month == 12 or ($month >= 1 and $month <= 2)) {
		echo "Month is $month, that's Winter";
	} else {
		echo "Month is $month, how did you get here?";
	}
?>
<p>Дана строка, состоящая из символов, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'.</p>
<?php 
	$str = 'abcde';

	if($str[0] == 'a') {
		echo "The first letter of the string is 'a'";
	} else {
		echo "Here isn't 'a' as the firts letter of the string";
	}

?>
<p>Дано число, например, 12345. Проверьте, что первым символом этого числа является цифра 1, 2 или 3.</p>
<?php 
	$str = '12345';
	if($str[0] == '1'){
		echo "The first symbol is 1";
	} elseif ($str[0] == '2') {
		echo "The first symbol is 2";
	} elseif ($str[0] == '3') {
		echo "The first symbol is 3";
	} else {
		echo "The first symbol isn't 1, 2 or 3";
	}
?>
<p>Дано трехзначное число. Найдите сумму цифр этого числа.</p>
<?php 
	$num = rand(100, 999);

	// echo $num;
	$str = (string) $num;
	$num1 = $str[0];
	$num2 = $str[1];
	$num3 = $str[2];
	$sum = $num1 + $num2 + $num3;
	echo 'The number is ' . $num . ' = ' . $num1 . ' + ' . $num2 . ' + ' . $num3 . ' = ' . $sum;
?>
<p>Дано число из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.</p>
<?php 
	$num = rand(100000, 999999);
	$str = (string) $num;

	$num1 = $str[0];
	$num2 = $str[1];
	$num3 = $str[2];
	$num4 = $str[3];
	$num5 = $str[4];
	$num6 = $str[5];

	$sum1 = $num1 + $num2 + $num3;
	$sum2 = $num4 + $num5 + $num6;
	if ($sum1 == $sum2) {
		echo 'Число дорівнює ' . $num . ' Сума перших трьох цифр дорівнює ' . $sum1 . '. Сума других трьох цифр дорівнює ' . $sum2 .  '. Сумма первых трех цифр равняется сумме вторых трех цифр';
	} else {
		echo 'Число дорівнює ' . $num . ' Сума перших трьох цифр дорівнює ' . $sum1 . '. Сума других трьох цифр дорівнює ' . $sum2 .  '. Сумма первых трех цифр не равняется сумме вторых трех цифр';
	}
?>

