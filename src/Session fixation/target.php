<?php
// Начать или возобновить (по session ID) сессию.
session_start();

require_once 'get_session_info.php';

echo '<h1>Защищённая страница</h1>';

if (!empty($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    echo 'Привет, мир! ' . get_session_info();
} else {
    echo 'Эта страница только для аутентифицированных пользователей';
}
