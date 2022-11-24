<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админ панель для сайта ALEXPC</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Компьютер</th>
        <th>Описание</th>
        <th>Цена</th>
    </tr>

    <?php

    /*
     * Делаем выборку всех строк из таблицы "products"
     */

    $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    $products = mysqli_query($connect, "SELECT * FROM `computers`");

    /*
     * Преобразовываем полученные данные в нормальный массив
     */

    $products = mysqli_fetch_all($products);

    /*
     * Перебираем массив и рендерим HTML с данными из массива
     * Ключ 0 - id
     * Ключ 1 - title
     * Ключ 2 - price
     * Ключ 3 - description
     */

    foreach ($products as $product) {
        ?>
        <tr>
            <td><?= $product[0] ?></td>
            <td><?= $product[1] ?></td>
            <td><?= $product[3] ?></td>
            <td><?= $product[2] ?>₽</td>
            <td><a href="product.php?id=<?= $product[0] ?>">Посмотреть</a></td>
            <td><a href="update.php?id=<?= $product[0] ?>">Обновить</a></td>
            <td><a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<h3>Добавить новый компьютер</h3>
<form action="vendor/create.php" method="post">
    <p>Заголовок</p>
    <input type="text" name="title">
    <p>Описание</p>
    <textarea name="description"></textarea>
    <p>Цена</p>
    <input type="number" name="price"> <br> <br>
    <button type="submit">Добавить новый компьютер
</form>
</body>
</html>
