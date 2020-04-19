<?php
// Начать или возобновить (по session ID) сессию.
session_start();

require_once 'get_session_info.php';

echo '<h1>Результат аутентификации</h1>';

// Проверки имени пользователя и пароля нет: она не имеет значения для примера.
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    // Устанавливаем флаг, свидетельствующий об успешной аутентификации.
    $_SESSION['logged_in'] = true;
    // Сохраняем имя пользователя.
    $_SESSION['username'] = $_POST['username'];
    // Выводим сообщение об успешной аутентификации.
    echo 'Вы аутентифицированы. ' . get_session_info();
} else {
    http_response_code(403);
    exit('Доступ запрещён');
}
