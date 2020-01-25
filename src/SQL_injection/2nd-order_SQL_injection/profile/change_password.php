<?php

// Устанавливаем соединение с СУБД.
require_once '../connect.php';
$connection = connect();

// Присваиваем переменным значения, переданные по HTTP методом POST.
$id       = $_POST['id'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

/*
 * Разработчик использует подготовленное предложение SQL,
 * потому что данные, переданные клиентом, потенциально опасны.
 */
$statement = $connection->prepare('SELECT username FROM users WHERE id = ?');
$statement->execute([$id]);

// Если извлечён хотя бы один кортеж…
if ((false !== $statement) && ($statement->rowCount() > 0)) {
    // Преобразуем в объект.
    $user = $statement->fetchObject();

    /*
     * Разработчик решил, что данные, извлечённые из БД, безопасны,
     * и интерполировал (вклеил) имя пользователя в SQL­‑выражение.
     * В результате возникла уязвимость для SQL­‑инъекций II порядка.
     */
    $statement = $connection->prepare("
        UPDATE users
        SET password = ?
        WHERE username = '{$user->username}'
    ");
    $result = $statement->execute([$password]);

    // Отладочная печать.
    echo $statement->debugDumpParams();

    if (false !== $result) {
        echo ' Пароль изменён.';
    } else {
        echo ' Пароль не изменён.';
    }

    /*
     * В целях защиты от SQL­‑инъекций II порядка следует:
     * 1) переписать запрос:
     *     UPDATE users SET password = новый_пароль
     *     WHERE username = имя AND password = старый_пароль;
     * 2) использовать подготовленные выражения.
     */
}
