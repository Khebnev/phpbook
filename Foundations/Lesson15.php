<p>Як ви вже знаєте, рядки в PHP слід брати в лапки. Може бути таке, що всі символи рядка будуть цифри. У цьому випадку, якщо над рядком з цифрами виконати якусь математичну операцію - ця операція буде виконана так, ніби у нас справді числа, а не рядки</p>
<?php
	echo '1' + '2'; // выведет 3
?>

<?php
	echo '1' + 2;   // выведет 3
?>

<?php
	echo 1 + '2';   // выведет 3
?>

<?php
	$a = '1';
	$b = '2';
	
	echo $a + $b;   // выведет 3
?>
<p>Перетворення до рядка</p>
<?php
	echo 1 . 2;    // выведет '12'
?>
<p>Але тут є нюанси. Крапка використовується не тільки для складання рядків, але і для відокремлення дробової частини від цілої. Тому, якщо в нашому коді прибрати прогалини навколо точки, ми отримаємо дріб, а не додавання рядків:</p>
<?php
	echo 1.2;     // выведет 1.2
?>
<?php
	$a = '1';
	$b = '2';
	
	echo $a.$b;   // выведет 12, а не ошибку
?>