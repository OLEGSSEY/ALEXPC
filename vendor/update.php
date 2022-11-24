<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

/*
 * Делаем запрос на изменение строки в таблице products
 */
$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_query($connect, "UPDATE `computers` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `computers`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: /adminavt.php?id=' . $id);