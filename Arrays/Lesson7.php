<?php
	$arr = ['a', 'b', 'c'];
	echo $arr[0]; // выведет 'a'
?>
<p>Давайте тепер ключ елемента не будемо писати безпосередньо в квадратних дужках, а запишемо його в змінну</p>
<?php
	$arr = ['a', 'b', 'c'];
	$key = 0; // запишем ключ в переменную
?>
<p>Використовуємо тепер нашу змінну для виведення відповідного елемента:</p>
<?php
	$arr = ['a', 'b', 'c'];
	$key = 0; // запишем ключ в переменную
	
	echo $arr[$key]; // выведет 'a'
?>
<p>Дана также переменная $key1 со значением 1 и переменная $key2 со значением 2. Найдите сумму элементов, ключи которых хранятся в наших переменных.</p>
<?php
	$arr = [1, 2, 3, 4, 5];
	$key = 0;
	$key1 = 1;
	$key2 = 2;

	$sum = $arr[$key] + $arr[$key1] + $arr[$key2];

	echo $sum;
?>
<p>Дана переменная $key, в которой хранится один из ключей нашего массива. Выведите с помощью этой переменной соответствующий элемент массива.</p>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	$key = $arr['b'];

	echo $key;
	// var_dump($arr);
?>