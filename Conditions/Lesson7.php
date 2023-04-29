<p>Команда empty в PHP</p>
<p>Зачастую в скриптах возникает нужда в проверке переменной на пустоту. В PHP переменная будет пустая, если она равна 0, '', '0', false или null.</p>
<p>Проверка на пустоту выполняется с помощью команды empty:</p>
<?php
	$test = '';
	
	if (empty($test)) {
		echo '+';
	} else {
		echo '-';
	}
?>
<p>Чаще, однако, возникает обратная задача - проверка на то, что переменная является не пустой. Давайте инвертируем наше условие:</p>
<?php
	$test = '';
	
	if (!empty($test)) {
		echo '+';
	} else {
		echo '-';
	}
?>