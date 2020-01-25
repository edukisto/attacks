<?php
// Раскомментируйте следующую строку, чтобы отразить атаку.
// header("Content-Security-Policy: frame-src 'none'");
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
    <title>Веб­‑сайт, уязвимый для classic clickjacking</title>
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
    <script
        defer
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"
        ></script>
    <script
        defer
        src="switch.js"
        integrity="sha256-oG0yrYEN3n+kkcycsQMppoBDecpfc2vTDFC3L03Qlb8="
        crossorigin="anonymous"
        ></script>
</head>
<body>
    <main class="container text-center">
        <h1>Веб­‑сайт, уязвимый для classic clickjacking</h1>

        <div class="form-group">
            <button class="btn btn-primary">Нажимайте</button>

            <!-- Невидимый фрейм, расположенный поверх кнопки «Нажимайте». -->
            <iframe src="/target/"></iframe>
        </div>

        <div class="form-group form-check">
            <input class="form-check-input" id="switch" type="checkbox">
            <label class="form-check-label" for="switch">
                Показать всё, что скрыто
            </label>
        </div>
    </main>
</body>
</html>
