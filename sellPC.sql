

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `computers` (`id`, `title`, `price`, `description`) VALUES
(1, 'Компьютер 15k', 15000, 'Процессор: Процессор AMD Athlon 3000G OEM\r\n\r\nОперативная память: AMD Radeon R9 Gamer Series 2x4 ГБ\r\n\r\nМатеринская плата: GIGABYTE GA-A320M-H\r\n\r\nНакопитель: 256 ГБ 2.5\" SATA накопитель Smartbuy Splash'),
(2, 'Компьютер 30k', 30000, 'Процессор: Процессор Ryzen 3 1400 OEM\r\n\r\nВидеокарта: GTX 1050 ti\r\n\r\nОперативная память: AMD Radeon R9 Gamer Series 2x4 ГБ\r\n\r\nМатеринская плата: Материнская плата GIGABYTE GA-A320M-H\r\n\r\nНакопитель: 256 ГБ 2.5\" SATA накопитель Smartbuy Splash'),
(3, 'Компьютер 50k', 50000, 'Процессор: Процессор Intel Core i3-10100f OEM\r\n\r\nВидеокарта: GTX 1660 ti\r\n\r\nОперативная память: A-DATA D10 2x8 ГБ\r\n\r\nМатеринская плата: GIGABYTE H410M H V3\r\n\r\nНакопитель: 256 ГБ 2.5\" SATA накопитель Smartbuy Splash'),
(4, 'Компьютер 70k', 70000, 'Процессор: Процессор Intel Core i3-12100f OEM\r\n\r\nВидеокарта: RADEON RX 6650 XT\r\n\r\nОперативная память: A-DATA D20 2x8 ГБ\r\n\r\nМатеринская плата: Материнская плата GIGABYTE B660M DS3H\r\n\r\nНакопитель: 512 ГБ 2.5\" SATA накопитель PATRIOT P210');




ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


