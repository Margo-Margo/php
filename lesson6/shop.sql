-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2020 г., 05:14
-- Версия сервера: 5.6.47
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `fio` text NOT NULL,
  `email` text NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `fio`, `email`, `text`, `date`) VALUES
(1, 'Тест', 'test@test.ru', 'проверка', '2020-12-17 02:02:09');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(10) NOT NULL,
  `src` varchar(255) NOT NULL,
  `small_src` varchar(255) NOT NULL,
  `is_active` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `src`, `small_src`, `is_active`) VALUES
(1, 'Декор Елочка в горшочке 40 см. ', 'Декор Елочка в горшочке 40 см. Производитель: - Edelman B.V. (Нидeрлaнды), изготавливается в Таиланде.', 1500, 'uploads/001.jpg', 'uploads/mini/001.jpg', 1),
(2, 'Triumph Tree Сосна Санкт-Петербург 1.2 м.', 'Искусственная елка СОСНА САНКТ-ПЕТЕРБУРГ 1,20 м. - полностью соответствует своему названию! Характеристики: \r\n— Артикул: - 73286. \r\nМатериал хвои: - мягкая ПВХ пленка. \r\nЦвет хвои: - зеленый. \r\nВысота (см.): - 120. \r\nПодставка: - металлическая. Количество веток (шт.): - 196. Диаметр нижнего яруса (cм.): - 81. Размер коробки (д.ш.в. (м.)): - 0.79х0.59х0.41. Объём (м3): - 0,0319. Штук в коробке: - 6. Вес нетто (кг.): - 24. Вес упаковки (кг.): - 1,91. Вес брутто (кг.): - 25,91. Производитель: - Edelman B.V. (Нидерланды), торговая марка Triumph Tree, изготавливается в Таиланде.', 4000, 'uploads/002.jpg', 'uploads/mini/002.jpg', 1),
(3, 'Black Box Ель Ирландская зеленая 2.3 м.', 'Ель искусственная Black Box Сосна «Ирландская» зеленая 230 см. Елка высокого качества голландской компании EDELMAN. Данная модель елки входит в коллекцию Naturals - лучшую из елок Black Box. Высококачественный материал хвои, представляющий из себя сочетание резиновых (PE) и полиэтиленовых (PVC) веток, соответствует требованиям противопожарной безопасности российских и международных стандартов - при поджигании не разгорается. Характеристики: — Артикул: - 74057. Материал хвои: - резина РЕ + мягкая ПВХ пленка (приствольное пространство). Цвет хвои: - зеленый. Высота (см.): - 230. Подставка: - металлическая. Количество веток (шт.): - 2526. Диаметр нижнего яруса (cм.): - 140. Размер коробки (д.ш.в. (м.)): - 1.17х0.38х0.39. Объём (м3): - 0,1734. Штук в коробке: - 1. Вес нетто (кг.): - 13,8. Вес упаковки (кг.): - 2,64. Вес брутто (кг.): - 16,44. Производитель: - Edelman B.V. (Нидерланды), торговая марка Black Box, изготавливается в Таиланде.', 28000, 'uploads/003.jpg', 'uploads/mini/003.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `small_src` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `src`, `small_src`, `size`, `count`) VALUES
(1, '001.jpg', 'uploads/001.jpg', 'uploads/mini/001.jpg', 28088, 1),
(2, '002.jpg', 'uploads/002.jpg', 'uploads/mini/002.jpg', 200767, 0),
(3, '003.jpg', 'uploads/003.jpg', 'uploads/mini/003.jpg', 241664, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
