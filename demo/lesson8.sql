-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 04 2021 г., 12:16
-- Версия сервера: 5.6.47
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson8`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `id_good`, `count`, `id_user`, `status`) VALUES
(28, 1, 13, 17, 1),
(30, 3, 3, 17, 1),
(31, 1, 5, 18, 1),
(32, 3, 1, 18, 1),
(35, 3, 1, 19, 1),
(36, 1, 3, 19, 1),
(37, 4, 1, 19, 1),
(38, 1, 7, 20, 1),
(40, 3, 5, 20, 1),
(46, 1, 3, 23, 1),
(47, 2, 2, 23, 1),
(48, 1, 1, 24, 1),
(49, 2, 1, 24, 1),
(50, 7, 1, 10, 1),
(51, 8, 5, 10, 1),
(52, 9, 5, 10, 1),
(53, 10, 4, 10, 1),
(54, 8, 82, 25, 0),
(55, 9, 8, 25, 0),
(56, 8, 10, 26, 1),
(57, 9, 4, 26, 1),
(58, 10, 5, 26, 1),
(59, 0, 3, 10, 0),
(60, 12, 2, 10, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE `coments` (
  `id` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `coments`
--

INSERT INTO `coments` (`id`, `fio`, `email`, `text`, `date`) VALUES
(4, 'Маргарита', 'test@test.ru', 'Доставили быстро! Всё супер!', '2021-02-04 01:35:07'),
(5, 'Александр', 'test@test.ru', 'Очень вежливые менеджеры', '2021-02-04 01:42:08'),
(6, 'Александр', 'test@test.ru', 'Очень вежливые менеджеры', '2021-02-04 01:42:56');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `info` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(20) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `description`, `info`, `price`, `img`, `date_create`) VALUES
(8, 'Мышь', 'Мышь Microsoft Mobile 1850 Wool Blue — компактный манипулятор, который характеризуется простотой управления и небольшим весом. Беспроводное подключение к цифровым устройствам осуществляется с помощью USB-разъема. Надежное соединение поддерживается на расстоянии 5 м от источника сигнала.\r\n\r\nМышь Microsoft Mobile 1850 Wool Blue имеет приятное на ощупь покрытие, которое предотвращает соскальзывание пальцев с поверхности и обеспечивает удобный хват. Модель изготовлена из долговечного и износостойкого пластика. Питание устройства осуществляется посредством батарейки типоразмера АА, для которой предусмотрено специальное отделение. Ножки, расположенные на нижней части корпуса, облегчают скольжение манипулятора на различных поверхностях. Точное позиционирование курсора и высокую скорость перемещения обеспечивает разрешение сенсора 1000 dpi.', 'В наличии', 990, 'mouse.jpg', '2020-11-23 10:08:57'),
(9, 'Ноутбук HP', 'Операционная система Windows 10 Домашняя x64, \r\nДиагональ экрана 15.6\",\r\nРазрешение экрана 1920x1080 Пикс,\r\nПроизводитель процессора Intel,\r\nМодель процессора Core i3-1115G4,\r\nТактовая частота 1.6 ГГц', 'В наличии', 59990, 'notebook.jpg', '2020-11-23 10:09:19'),
(10, 'Клавиатура', 'Игровая клавиатура LOGITECH G213 Prodigy (920-008092) мембранного типа отличается высокой скоростью отклика на пользовательские команды и исключает возникновение двойных кликов, а также фантомных нажатий. Корпус является водонепроницаемым, поэтому работоспособность устройства сохраняется даже при случайном пролитии чая, кофе или других напитков. Модель произведена по уникальной технологии из качественного прочного материала, устойчивого к механическим повреждениям, износу и деформации.\r\n\r\nИгровая клавиатура LOGITECH G213 Prodigy (920-008092) оснащена дополнительными кнопками, с помощью которых управление мультимедиа осуществляется без выхода на рабочий стол. Устройство с удлиненной удобной подставкой для рук создает комфортные условия даже при многочасовой непрерывной эксплуатации. В модели предусмотрено 112 клавиш, а также многоцветная подсветка, что обеспечивает оптимальную видимость во время игровых сессий даже в темном помещении.', 'В наличии', 4990, 'keyboard.jpg', '2020-11-23 10:09:37'),
(12, 'Монитор', 'Диагональ экрана монитора 23,8 дюйма HP 24w 1CA86AA позволяет эксплуатировать устройство как в офисе для работы с текстовыми и графическими редакторами, так и для домашнего просмотра фильмов. Быстрый отклик, равный 5 мс, дает возможность использовать модель для игр, так как исключает задержку кадра по отношению к заданному действию пользователя. Оптимальное соотношение сторон 16:9 создает комфортные условия для просмотра видеоконтента. Яркость 250 кд/м² и контрастность в 1000:1 обеспечивают яркое контрастное изображение.\r\n\r\nДля передачи видеосигнала в устройстве предусмотрен стандарт VGA (D-Sub), а также интерфейс HDMI. Монитор HP 24w 1CA86AA оснащен LED-подсветкой, характеризующейся низким расходом электроэнергии. Поддержка HDCP обеспечивает защиту транслируемого сигнала, предупреждая незаконное копирование файлов. Модель укомплектована подставкой для удобства размещения, а также кабелем HDMI. В рабочем режиме максимальная потребляемая мощность устройства составляет 20 Вт.', 'В наличии', 8990, 'monitor.jpg', '2021-01-28 13:57:30'),
(15, 'Наушники', 'Беспроводные наушники JBL T460BT Black особенно понравятся любителям мощного и глубокого баса. Динамики транслируют чистый и впечатляющий своей реалистичностью звук, который позволит вам получить максимум наслаждения от любимых музыкальных композиций.\r\n\r\nВаши движения больше не связаны длиной кабеля: встроенный Bluetooth-модуль обеспечит надежное соединение с любым гаджетом в радиусе 10 метров. Емкости аккумулятора хватит на 11 часов работы в режиме нон-стоп, благодаря чему вы не будете скучать во время длительного перелета и сможете наслаждаться любимыми треками даже вдали от цивилизации.\r\n\r\nПри использовании в связке со смартфоном наличие микрофона позволит вам не пропустить важный звонок. Принимать вызовы, регулировать громкость и управлять плей-листом можно с помощью удобной панели управления, расположенной на ребре чашки.', 'В наличии', 2290, 'headphones.jpg', '2021-02-02 00:43:13'),
(16, 'Веб-камера', 'Веб-камера Canyon CNS-CWC5 произведена из прочных, высококачественных материалов. Устройство устойчиво к износу, деформации, образованию сколов, царапин, трещин, потертостей и других механических повреждений, поэтому характеризуется длительным сроком службы. Даже при регулярном использовании модель сохраняет потребительские качества и первоначальные свойства в течение продолжительного времени. В комплекте поставляется USB-провод.\r\n\r\nВеб-камера Canyon CNS-CWC5 оснащена микрофоном, поэтому оптимальна для съемки фото и записи видеофайлов. Компактный размер и легкий вес устройства обеспечивают комфортные условия в процессе применения, хранения и транспортировки. Модель можно поставить на стол, а также прикрепить к монитору персонального компьютера с помощью подставки, которая в конструкции. Веб-камера имеет функцию автоматической регулировки баланса белого. Опция позволяет получать естественную цветопередачу при различных типах освещения, в том числе при солнечном свете, с применением лампы накаливания или флюоресцентной, а также в темном помещении.', 'В наличии', 4190, 'webcam.jpg', '2021-02-02 00:45:04');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_order` int(11) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TotalSum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `status_order`, `date_order`, `TotalSum`) VALUES
(18, 10, 2, '2021-01-07 19:16:59', 22900),
(33, 26, 2, '2021-01-21 20:43:36', 17200);

-- --------------------------------------------------------

--
-- Структура таблицы `orderstatus`
--

CREATE TABLE `orderstatus` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orderstatus`
--

INSERT INTO `orderstatus` (`id`, `status`) VALUES
(1, 'В работе'),
(2, 'Направлен в работу'),
(3, 'Выполнен'),
(4, 'Приостановлен');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `fio` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `login` varchar(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `fio`, `phone`, `address`, `login`, `pass`, `role`) VALUES
(10, 'Сергей', '22423424', 'Саратов', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(11, 'Александр ', '34545646', 'Саратов', 'alex', '534b44a19bf18d20b71ecc4eb77c572f', 0),
(12, 'zfsdf', '345345', 'demotest', 'demotest', '5c4896c0c3fefb8ef0b326e436790906', 0),
(13, 'fsdf', '23423', 'Саратов', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 0),
(14, 'Денис', '345353', 'Саратов', 'denis', 'c3875d07f44c422f3b3bc019c23e16ae', 0),
(15, 'Misha', '123', 'Москва', 'Misha', '13d9e09cbe1ea0ff77fc09d2b6e0ab43', 0),
(16, 'Андрей', '234234', 'Саратов, Чернышевского 81', 'andrei', 'b2d09b73eb5ad0228f9cb2e51485a45f', 0),
(17, 'Дмитрий', '2323345', 'Саратов', 'dima', '0f5b25cd58319cde0e6e33715b66db4c', 0),
(18, 'Maria', 'Maria', 'Саратов', 'Maria', 'cbc19b07662418d5f14cc55657295924', 0),
(19, 'sfsdfsdfsf', 'sfsdfsdfsf', 'sfsdfsdfsf', 'sfsdfsdfsf', '7ee7fb6922e84660f66e1210dc20d4f4', 0),
(20, 'Василий', '345345', 'тест', 'vasya', 'a127c4fdad3080541ec6acc0d8acd704', 0),
(23, 'Anna', '23435', 'Саратов', 'Anna', '97a9d330e236c8d067f01da1894a5438', 0),
(24, 'Наташа', '234234', 'Саратов', 'natasha', '6275e26419211d1f526e674d97110e15', 0),
(25, 'Тест', '123456', 'Москва', 'testt', '202cb962ac59075b964b07152d234b70', 0),
(26, 'Тест', '123456', 'testtt', 'testtt', 'f55e23f49445a3cf708c19577f218a5b', 0),
(27, 'tes', '51654654654', 'tes', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 0),
(28, 'Маргарита', '123456789', 'Москва', 'Маргарита', 'd95740eb35ab71890646d7611955d475', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
