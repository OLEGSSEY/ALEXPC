<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $product_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */
    $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    $product = mysqli_query($connect, "SELECT * FROM `computers` WHERE `id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);

    /*
     * Делаем выборку всех строк комментариев с полученным ID продукта выше
     */

    $comments = mysqli_query($connect, "SELECT * FROM `computers` WHERE `product_id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     */




?>

<!doctype html>
<html lang="ru">
<head>
    <title>Компьютер</title>
</head>
<body>
    <h2>Заголовок: <?= $product['title'] ?></h2>
    <h4>Цена: <?= $product['price'] ?></h4>
    <p>Описание: <?= $product['description'] ?></p>

</body>
</html>