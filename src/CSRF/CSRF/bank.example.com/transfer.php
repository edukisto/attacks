<?php
// Текущие дата и время.
$dateTime = date('Y-m-d H:i:s');

// Защищаем сценарий от XSS.
$account = htmlspecialchars($_POST['account'], ENT_QUOTES, 'UTF-8');
$amount = htmlspecialchars($_POST['amount'], ENT_QUOTES, 'UTF-8');

// Сообщение о переводе.
$message = "{$dateTime}. Перевод {$amount} ₽ на счёт {$account}.\n";

// Пишем сообщение в журнал.
file_put_contents(
    'transfer.log',
    $message,
    FILE_APPEND
);

// Выводим сообщение на экран.
echo $message;
