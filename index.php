<?php

echo "Привет, мир!<br />";

echo "Hello, World with echo!<br />";
print "Hello, World with print!<br />";

$days = 288;
$message = "Все возвращаются на работу!";

echo "<br />";

echo "Вывод с использованием конкатенации:<br />";
echo "Количество дней: " . $days . "<br />";
echo "Сообщение: " . $message . "<br />";

echo "<br />";

echo "Вывод с использованием двойных кавычек:<br />";
echo "Количество дней: $days<br />";
echo "Сообщение: $message<br />";