<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Получаем ID продукта из адресной строки
 */

$id = $_GET['id'];

/*
 * Делаем запрос на удаление строки из таблицы products
 */
$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_query($connect, "DELETE FROM `computers` WHERE `computers`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: /adminavt.php?id=' . $id);