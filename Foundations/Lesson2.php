<p>Команда echo виводить щось на екран:</p>
<?php 
	echo "Hello";
?>
<p>echo + numbers:</p>
<?php echo(123); ?>

<p>Однострочні та багатострочні коментарі:</p>
<?php echo('This code with comments'); //comment 
/* he
re
is
the comment */
?>

<p>Function var_dump використовується для налагодження</p>
<?php var_dump('12345'); ?>
<p>  var_dump('12345');  буде виводити: string(5) "12345"</p>

<p><b>Функції</b></p>
<p>На прикладі var_dump ми стикаємося із функціями. Вони дають змогу виконувати деякі дії. Функція складається з імені та круглих дужок, написаних після цього імені. У цих круглих дужках слід написати параметри функції. У разі параметром є текст, який виводиться на екран. Бувають функції, які потрібно передавати не один параметр, як у нас зараз, а кілька параметрів. У цьому випадку ці параметри пишуться через кому.
</p>