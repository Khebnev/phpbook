<?php
	if (isset($arr['test'])) {
		$elem = $arr['test'];
	} else {
		$elem = 'empty';
	}
	echo $elem;
?>
<p>Этот код можно переписать через тернарный оператор:</p>
<?php
	$elem = isset($arr['test']) ? $arr['test'] : 'empty';
	echo $elem;
?>
<p>Однако, и первый вариант кода, и второй, вызывают некоторое неудобство. Для упрощения таких конструкций был придуман оператор объединения с null, представляющий собой команду ??. Перепишем наш код через этот оператор:</p>
<?php
	$elem = $arr['test'] ?? 'empty';
?>
<p>Перепишите следующий код через изученный оператор:</p>
<?php
	$user = ['name' => 'john', 'age' => 30];
	
	if (isset($user['name'])) {
		$name = $user['name'];
	} else {
		$name = 'unknown';
	}
?>

<p>it'll be</p>
<?php
	$user = ['name' => 'john', 'age' => 30];
	
	$name = $user['name'] ?? 'unknown';
	echo $name;
?>
<p>Цепочка</p>
<p>Операторы объединения можно вызывать друг за другом цепочкой. В следующем примере в переменную запишется либо первый элемент массива, либо второй элемент массива, либо заданная строка, если этих элементов нет:</p>
<?php
	// $arr = ['test2' => 'john', 'test12' => 30];
	$elem = $arr['test1'] ?? $arr['test2'] ?? 'empty';
	echo $elem;
?>
<p>Перепишите следующий код через изученный оператор:</p>

<?php
	if (isset($user['name'])) {
		$result = $user['name'];
	} elseif (isset($user['surname'])) {
		$result = $user['surname'];
	} else {
		$result = '';
	}
?>

<?php
	$user = ['name' => 'John', 'surname' => 'Snow'];
	$result = $user['name'] ?? $user['surname'] ?? '';
	echo $result;
?>