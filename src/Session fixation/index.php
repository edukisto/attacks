<?php
// Начать или возобновить (по session ID) сессию.
session_start();
?><!DOCTYPE html>
<html lang="ru-luna1918">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="0">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        >
    <title>Аутентификация пользователя</title>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
        >
</head>
<body>
    <main class="container">
        <h1>Аутентификация пользователя</h1>

        <form action="auth.php" method="post">
            <div class="form-group">
                <label for="username">Имя пользователя</label>

                <input
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Введите john"
                    required
                    value="john"
                    >
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>

                <input
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Введите 123456"
                    required
                    type="password"
                    value="123456"
                    >
            </div>

            <input class="btn btn-block btn-primary" type="submit">
        </form>
    </main>
</body>
</html>
