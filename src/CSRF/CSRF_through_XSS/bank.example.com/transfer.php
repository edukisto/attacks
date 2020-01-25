<?php
// Текущие дата и время.
$dateTime = date('Y-m-d H:i:s');

if (empty($_SERVER['HTTP_HOST'])) {
    http_response_code(403);
    exit('Неизвестно доменное имя сервера.');
}

if (empty($_SERVER['HTTP_REFERER'])) {
    http_response_code(403);
    exit('Заголовок Referer отсутствует или пуст. Запрос заблокирован.');
}

// Доменное имя сервера.
$currentHost = $_SERVER['HTTP_HOST'];

// Доменное имя из заголовка Referer.
$referrerAddress = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
$referrerPort = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PORT);
$referrerHost = "$referrerAddress:$referrerPort";

// Сверка доменных имён.
if ((false === $referrerAddress) || ($currentHost !== $referrerHost)) {
    http_response_code(403);
    exit('Пресечена попытка проведения CSRF. Запрос заблокирован.');
}

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
