<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */
$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_query($connect,"INSERT INTO `computers` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')");

/*
 * Переадресация на главную страницу
 */

header('Location: /adminavt.php?id=');