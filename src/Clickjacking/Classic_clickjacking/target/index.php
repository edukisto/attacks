<?php
// Раскомментируйте две следующих строки, чтобы отразить атаку.
// header('X-Frame-Options: DENY');
// header("Content-Security-Policy: frame-ancestors 'none'");
?>
<!DOCTYPE html>
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
    <title>Целевой веб­‑сайт</title>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
        >
    <link
        rel="stylesheet"
        href="../style.css"
        integrity="sha256-WeQ+UoD5Rq19YgbLPiAgHuWeRGWn6aRVx62t0GoSJkw="
        crossorigin="anonymous"
        >
</head>
<body class="bg-dark text-center">
    <form action="store.php">
        <!-- По нажатии на кнопку браузер запросит store.php. -->
        <button class="btn btn-danger m-2" type="submit">Нравится!</button>
    </form>
</body>
</html>
