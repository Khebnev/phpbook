<meta charset="utf-8">
<?php
	mb_internal_encoding('UTF-8');
	echo 'Моя перша програма';
?>
<p>Помилки</p>
<?php 
	error_reporting('E_ALL');
	ini_set('display_errors', 'on');
?>

<p>Повний код для запуска PHP:</p>
<meta charset="utf-8">
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	
	echo 'Моя перша програма';
?>
<p>Повний код</p>
<meta charset="utf-8">
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	
	echo 'моя первая программа';
?>
<p>Include:</p>
<meta charset="utf-8">
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	
	echo 'моя первая программа';
	include('code.php');
?>
<p>Include file from root</p>
<meta charset="utf-8">
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	include('code.php');
	include('../rootcode.php');
?>