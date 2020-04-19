<?php
function get_session_info()
{
    return '<hr>' . implode('.<br>', [
        'Пользователь: ' . $_SESSION['username'],
        'Идентификатор сеанса: ' . session_id(),
        'Каталог, где хранятся данные сеансов: ' . session_save_path(),
        'Защищённая страница: ' . '<a href="target.php">/target.php</a>',
    ]);
}
