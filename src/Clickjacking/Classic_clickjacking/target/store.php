<?php

// Буферизация вывода.
ob_start();

// Имя файла, хранящего записи о нажатиях на кнопку.
$filename = 'clicks.log';

// Метка времени.
$timestamp = date('c');

// Сохранение данных в файловой системе сервера.
file_put_contents($filename, "$timestamp. Нажатие.\n", FILE_APPEND);

// Перенаправление клиента HTTP (браузера) на веб­‑страницу с формой.
header('Location: /target/');
