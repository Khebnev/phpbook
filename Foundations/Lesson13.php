<p>Крім чисел і рядків існує ще один тип даних – логічний (boolean). Він складається з двох можливих значень: true або false. Ці значення позначають істину та брехню відповідно.</p>

<p>Логічний тип даних використовується для таких речей, які передбачають два варіанти відповіді – так чи ні. Наприклад, на запитання "вам уже є 18 років?" можете відповісти так, тобто true, чи ні, тобто false.</p>
<?php
	$isAdult = true;
	var_dump($isAdult); // выведет true
?>
<p>Логічний тип даних виводити через команду echo незручно, то буде 1 або порожнеча</p>
<?php
	echo true;  // выведет 1
	echo false; // выведет пустоту
?>

<p>Надайте змінній значення true. Виведіть цю змінну на екран.</p>
<?php 
	$isTrue = true;
	var_dump($isTrue);
?>
<p>Надайте змінній значення false. Виведіть цю змінну на екран.</p>
<?php 
	$isFalse = false;
	var_dump($isFalse);
?>