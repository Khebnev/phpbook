<p>В PHP есть специальная конструкция switch-case, которая используется для выбора одного значения из некоторого ряда значений. Изучите ее синтаксис:</p>
<p>Как вы можете заметить, switch-case представляет собой альтернативу множеству elseif. Давайте посмотрим на примере. Пусть у нас есть вот такой код:</p>
<?php
	$num = rand(1, 3);
	if ($num == 1) {
		$lang = 'ua';
	} elseif ($num == 2) {
		$lang = 'en';
	} else {
		$lang = 'de';
	}

	// $lang = 'ua';
	
	if ($lang === 'ua') {
		echo 'Укр';
	} elseif ($lang === 'en') {
		echo 'Англ';
	} elseif ($lang === 'de') {
		echo 'Нім';
	} else {
		echo 'Мова не підтримується';
	}
?>
<p>Перепишем этот код через конструкцию switch-case:</p>
<?php
$num = rand(1, 3);
	if ($num == 1) {
		$lang = 'ua';
	} elseif ($num == 2) {
		$lang = 'en';
	} else {
		$lang = 'de';
	}
	// $lang = 'ua';
	
	switch ($lang) {
		case 'ua':
			echo 'Укр';
		break;
		case 'en':
			echo 'англ';
		break;
		case 'de':
			echo 'нем';
		break;
		default:
			echo 'язык не поддерживается';
		break;
	}
?>
<p>Переменная $num может принимать значения 1, 2, 3 или 4. Определите, в какую пору года попадает значение этой переменной.</p>
<?php 
	$num = rand(1, 4);

	switch ($num) {
		case '1':
			echo $num . ' Пора року - Весна';
		break;
		case '2':
			echo $num . ' Пора року - Літо';
		break;
		case '3':
			echo $num . ' Пора року - Осінь';
		break;
		case '4':
			echo $num . ' Пора року - Зима';
		break;

		
		default:
			echo 'If you are here I dont know how';
			break;
	}

?>
<p>Необязательность default</p>
<p>Блок default является необязательным. Давайте его уберем из предыдущего кода:</p>
<?php 
	$num = rand(1, 4);

	switch ($num) {
		case '1':
			echo $num . ' Пора року - Весна';
		break;
		case '2':
			echo $num . ' Пора року - Літо';
		break;
		case '3':
			echo $num . ' Пора року - Осінь';
		break;
		case '4':
			echo $num . ' Пора року - Зима';
		break;
	}
?>
<p>Необязательность break</p>
<p>Команда break является необязательной. Без нее, однако, поведение блоков case будет неожиданным. Давайте посмотрим на примере. Пусть у нас есть вот такой код:</p>
<?php
	$num = 1;
	
	switch ($num) {
		case 1:
			echo 1;
		break;
		case 2:
			echo 2;
		break;
		case 3:
			echo 3;
		break;
	}
?>
<p>Уберем в нем все break, а в переменную $num для начала запишем число 3.

Пока все будет работать так, как и работало:</p>
<?php
	$num = 3; // пусть здесь число 3
	
	switch ($num) {
		case 1:
			echo 1;
		case 2:
			echo 2;
		case 3:
			echo 3;
	}
	
	// После запуска код выведет 3 - все хорошо
?>
<p>Давайте теперь в переменную $num запишем число 2. В этом случае у нас ожидаемо выполнится case 2, а затем неожиданно еще и case 3:</p>
<?php
	$num = 2;
	
	switch ($num) {
		case 1:
			echo 1;
		case 2:
			echo 2;
		case 3:
			echo 3;
	}
	
	// После запуска код выведет 2, а затем 3
?>
<p>Если же в переменную $num записать число 1, то вообще выполнятся все конструкции case:</p>
	<?php
	$num = 1;
	
	switch ($num) {
		case 1:
			echo 1;
		case 2:
			echo 2;
		case 3:
			echo 3;
	}
	
	// После запуска код выведет 1, затем 2, а затем 3
?>
<p>То есть получается, что при отсутствии break после выполнения задуманного case, выполнятся и все case ниже него. Иногда такую особенность используют, при решении задач.</p>
<p>В следующем примере, если переменная $num имеет значение 1 или 2, то в переменную $result запишется 'a'. Если же переменная $num имеет значение 3, то в переменную $result запишется 'b':</p>
<?php
	$num = 1;
	
	switch ($num) {
		case 1:
		case 2:
			$result = 'a';
		break;
		case 3:
			$result = 'b';
		break;
	}
	
	echo $result;
?>
<p>Выше я написал, что иногда такую особенность используют, но я, в общем-то, не рекомендую ей пользоваться, так как код становится не очень очевидным.</p>
<p>Очевиднее решить такую задачу через ифы:</p>
<?php

	$num = rand(1, 3);
	
	if ($num == 1 or $num == 2) {
		$result = 'a';
	}
	
	if ($num == 3) {
		$result = 'b';
	}
	
	echo $result;
?>