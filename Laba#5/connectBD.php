<?php 
	define ("HOST", "localhost");
	define ("USER", "f0612560_forgston");
	define ("PASS", "123");
	define ("DB", "f0612560_forgston"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
 ?>