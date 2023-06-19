-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2023 г., 13:30
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Smartok`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Iphone', 'Iphone', NULL, NULL, NULL),
(2, 'Samsung', 'Samsung', NULL, NULL, NULL),
(3, 'Huawei\r\n', 'Huawei', NULL, NULL, NULL),
(4, 'Honor', 'Honor', NULL, NULL, NULL),
(7, 'Xiaomi', 'Xiaomi', NULL, NULL, NULL),
(13, 'akssesyar', 'akssesyar', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories2`
--

CREATE TABLE `categories2` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_11_08_073338_create_orders_table', 2),
(10, '2022_11_08_073428_create_order_products_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` double NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gty` tinyint UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `status` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `note`, `gty`, `total`, `status`, `email`, `created_at`, `updated_at`) VALUES
(6, '', 0, '0', '', 1, 999, 0, '1@mail.ru', '2022-11-27 06:39:32', '2022-11-27 06:39:32'),
(7, '', 0, '0', '', 1, 898, 0, 'none@mail.ru', '2022-11-27 06:45:13', '2022-11-27 06:45:13'),
(13, 'Nikita Putincev', 79199432375, 'Москва Широтная 122к2', 'aaa', 1, 790, 0, '1@mail.ru', '2023-04-12 15:49:58', '2023-04-12 15:49:58'),
(14, 'Nikita Putincev', 79199432375, 'МоскваШиротная122к2', 'aaaa', 1, 424, 0, '1@mail.ru', '2023-04-12 15:51:56', '2023-04-12 15:51:56'),
(16, 'Nikita Putincev', 79199432375, 'Москва Широтная 122к2', 'aaa', 1, 424, 0, '12@mail.ru', '2023-04-12 15:53:46', '2023-04-12 15:53:46'),
(29, 'Nikita Putincev', 79199432375, 'Москва Широтная 122к2', 'aaa', 1, 424, 0, '1@mail.ru', '2023-04-12 16:05:30', '2023-04-12 16:05:30'),
(30, 'Nikita Putincev', 79199432375, 'Москва Широтная 122к2', 'aaa', 1, 424, 0, '1@mail.ru', '2023-04-12 16:06:23', '2023-04-12 16:06:23'),
(31, 'Nikita Putincev', 79199432375, 'Москва Широтная 122к2', 'a', 1, 69000, 0, '1@mail.ru', '2023-04-12 16:34:20', '2023-04-12 16:34:20'),
(32, 'Nikita Putincev', 79199432375, 'Москва Широтная 122к2', 'Спасибо', 1, 69000, 0, '1@mail.ru', '2023-04-12 16:35:19', '2023-04-12 16:35:19'),
(33, 'Nikita Putincev', 79199432375, 'Москва Широтная 122к2', 'aaaaaaaaa', 2, 138000, 0, '1@mail.ru', '2023-04-12 17:34:49', '2023-04-12 17:34:49');

-- --------------------------------------------------------

--
-- Структура таблицы `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `gty` tinyint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `title`, `price`, `gty`, `created_at`, `updated_at`) VALUES
(3, 6, 3, 'Scorn', 999, 1, NULL, NULL),
(4, 7, 13, 'DEVIL MAY CRY 5', 898, 1, NULL, NULL),
(13, 13, 2, 'Dark Souls  III', 790, 1, NULL, NULL),
(14, 14, 20, 'Hearts of Iron', 424, 1, NULL, NULL),
(16, 16, 1050, 'ss', 424, 1, NULL, NULL),
(28, 29, 20, 'Hearts of Iron', 424, 1, NULL, NULL),
(29, 30, 20, 'Hearts of Iron', 424, 1, NULL, NULL),
(30, 31, 2, 'iPhone 14', 69000, 1, NULL, NULL),
(31, 32, 2, 'iPhone 14', 69000, 1, NULL, NULL),
(32, 33, 2, 'iPhone 14', 69000, 1, NULL, NULL),
(33, 33, 1054, 'iphone 14', 69000, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `status` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `izdatel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razrab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double UNSIGNED NOT NULL DEFAULT '0',
  `old_price` double UNSIGNED NOT NULL DEFAULT '0',
  `hit` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `sale` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `content`, `category_id`, `status`, `img`, `izdatel`, `razrab`, `price`, `old_price`, `hit`, `sale`, `created_at`, `updated_at`, `user_id`) VALUES
(1058, 'iPhone 14', 'iPhone 14', 'Описание Apple iPhone 14 256Gb Фиолетовый\r\nТонкий и легкий смартфон из новой линейки Apple iPhone 14 с высоким разрешением OLED-экрана, хорошим объемом памяти и запасом автономности во влагостойком корпусе. Продвинутые камеры позволят снимать фото и видео в отличном качестве даже при слабом освещении. Функция экстренной помощи со связью через спутник выручит, когда нет возможности выйти в интернет. Мощный процессор откроет новые возможности для игр и развлечений.\r\n\r\n\r\nОбновленный дизайн\r\nСкругленные углы корпуса смартфона Apple iPhone 14 придают внешнему виду устройства узнаваемость и элегантный стиль. Очень тонкий — менее 8 мм, и легкий — весом 172 г, он крепко лежит в ладони, не скользит, позволяя комфортно перемещаться по меню одной рукой. Сам корпус выполнен из алюминия аэрокосмического класса и обладает степенью влагозащиты IP68 — его можно погружать в воду на глубину до 6 метров на срок до получаса. Случайные падения в бассейн, ванну, открытые водоемы не страшны.\r\n\r\nПремиальный экран Super Retina XDR\r\nДиагональ OLED-дисплея составляет 6.1 дюйма и имеет разрешение 2532х1170 точек. Высокие яркость и контрастность обеспечивают отличную видимость изображения в любых условиях, а поддержка технологии HDR гарантирует реалистичную цветопередачу при просмотре контента. Олеофобное покрытие сокращает количество отпечатков пальцев на экране, чтобы он всегда выглядел чистым и аккуратным.\r\n\r\n\r\nДля лучших кадров\r\nНовые камеры и улучшенная обработка изображений открывают крутые возможности по созданию фотографий и видеороликов. Среди самых интересных опций — портретный режим с шестью различными эффектами, широкий захват цветов, ночная съемка.\r\n\r\n\r\nВ смартфоне установлено два сенсора — основной и широкоугольный по 12 Мп каждый. Предусмотрен двукратный оптический зум, цифровой способен масштабировать изображение в кадре до 5 раз. Крышка объектива выполнена из сапфирового стекла и не боится царапин.', 1, 1, 'images/RpqEmcCFz2vy2LYdrkdoCo9noIf26k4ueazynoJI.jpg', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:07:05', '2023-04-12 18:08:08', 1),
(1059, 'iPhone 14 Pro', 'iPhone 14 Pro', 'СУПЕР PRO.\r\n\r\nИнновационная основная камера 48Мп. Революционные функции безопасности, разработанные для спасения жизней. Дисплей до 2х раз ярче на солнце. Все это на новейшем чипе для iPhone.\r\n\r\nДИСПЛЕЙ ВСЕГДА ВКЛЮЧЕН.\r\nТеперь на заблокированном экране всегда видна полезная информация. Вам больше не нужно каждый раз включать дисплей нажатием, чтобы проверить время или уведомления. Но если вы перевернёте iPhone экраном вниз или уберёте в карман, дисплей погаснет полностью и сэкономит вам заряд аккумулятора.\r\n\r\nФОТОГРАФИИ ВЫХОДЯТ НА НОВЫЙ УРОВЕНЬ\r\nСовершенно новая система камер с 48 Мп основной камерой превращает iPhone в профессиональный фотоаппарат. Новый улучшенный сенсор позволяет обрабатывать фото в ProRAW так, как никогда раньше. Кадрируйте, выделяйте детали, настраивайте резкость, манипулируйте параметрами – вам не захочется останавливаться в процессе создания фото.\r\n\r\nШТАТИВ-СТАБИЛИЗАТОР ВАМ БОЛЬШЕ НЕ ПОНАДОБИТСЯ!\r\nВ каких бы условиях съёмки вы не оказались, будь то поездка во внедорожнике по горам или кросс по пересечённой местности, просто переключите запись в экшен-режим. Видео будет настолько плавным, что никто не узнает, как там на самом деле трясло на кочках.\r\n\r\nВСТРЕЧАЙТЕ НОВОЕ ЛИЦО IPHONE\r\nПредставляем Dynamic Island, по-настоящему инновационный интерфейс взаимодействия с iPhone. Область вокруг камеры FaceTime, которая может сужаться и расширяться в зависимости от того, чем вы занимаетесь и какая информация нужна вам именно сейчас. Звонки, музыка, уведомления и многое другое теперь сами запрыгивают на островок Dynamic Island, чтобы быть у вас на виду.', 1, 1, 'images/MBWETt2nMClP9pM2UUjYHKVogBmve17sp12CF35X.jpg', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:09:24', '2023-04-12 18:09:24', 1),
(1060, 'iPhone 14 Pro Max', 'iPhone 14 Pro Max', 'Теперь на заблокированном экране всегда видна полезная информация. Вам больше не нужно каждый раз включать дисплей нажатием, чтобы проверить время или уведомления. Но если вы перевернёте iPhone экраном вниз или уберёте в карман, дисплей погаснет полностью и сэкономит вам заряд аккумулятора.\r\n\r\nФОТОГРАФИИ ВЫХОДЯТ НА НОВЫЙ УРОВЕНЬ\r\nСовершенно новая система камер с 48 Мп основной камерой превращает iPhone в профессиональный фотоаппарат. Новый улучшенный сенсор позволяет обрабатывать фото в ProRAW так, как никогда раньше. Кадрируйте, выделяйте детали, настраивайте резкость, манипулируйте параметрами – вам не захочется останавливаться в процессе создания фото.\r\n\r\nШТАТИВ-СТАБИЛИЗАТОР ВАМ БОЛЬШЕ НЕ ПОНАДОБИТСЯ!\r\nВ каких бы условиях съёмки вы не оказались, будь то поездка во внедорожнике по горам или кросс по пересечённой местности, просто переключите запись в экшен-режим. Видео будет настолько плавным, что никто не узнает, как там на самом деле трясло на кочках.\r\n\r\nВСТРЕЧАЙТЕ НОВОЕ ЛИЦО IPHONE\r\nПредставляем Dynamic Island, по-настоящему инновационный интерфейс взаимодействия с iPhone. Область вокруг камеры FaceTime, которая может сужаться и расширяться в зависимости от того, чем вы занимаетесь и какая информация нужна вам именно сейчас. Звонки, музыка, уведомления и многое другое теперь сами запрыгивают на островок Dynamic Island, чтобы быть у вас на виду.', 1, 1, 'images/UVGlPeJfwbMlH4GmNQO6gDa8l19V2OY5SkqDnPyu.jpg', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:11:49', '2023-04-12 18:11:49', 1),
(1061, 'Samsung Galaxy S23', 'Samsung Galaxy S23', 'Операционная система\r\n\r\n- Операционная система: Android\r\n\r\n- Версия операционной системы: 13\r\n\r\nОсновные характеристики\r\n\r\n- Количество SIM-карт: 2\r\n\r\n- Тип SIM-карты: 2 nano SIM\r\n\r\n- Режим работы нескольких SIM карт: попеременный\r\n\r\n- Модуль сотовой связи: 5G, 4G (LTE), 3G, 2G\r\n\r\n- Поддержка 5G: да\r\n\r\n- Поддержка NFC: есть\r\n\r\n- Поддержка eSIM: да\r\n\r\nДисплей\r\n\r\n- Экран: 6.1\"\r\n\r\n- Разрешение экрана: 2340x1080\r\n\r\n- Яркость: 1750 кд/м2\r\n\r\n- Тип дисплея: Dynamic AMOLED 2X\r\n\r\n- Плотность пикселей: 425 PPI\r\n\r\n- Тип стекла: Corning Gorilla Glass Victus 2\r\n\r\n- Функция Multi-Touch: да\r\n\r\n- Безрамочный дисплей: да\r\n\r\nПроцессор\r\n\r\n- Производитель процессора: Qualcomm\r\n\r\n- Модель процессора: Snapdragon 8 Gen 2\r\n\r\n- Частота процессора: 3200, 2800, 2000 МГц\r\n\r\n- Количество ядер процессора: 8\r\n\r\n- Видеопроцессор: Adreno 740\r\n\r\nПамять\r\n\r\n- Встроенная память: 256 Гб\r\n\r\n- Оперативная память: 8 Гб\r\n\r\nОсновная камера\r\n\r\n- Количество основных камер: 3\r\n\r\n- Разрешение основной камеры: 10 Мп, 12 Мп, 50 Мп\r\n\r\n- Тройная камера: да\r\n\r\n- Широкоугольный объектив: да\r\n\r\n- Стабилизация изображения: оптический\r\n\r\n- Стабилизатор: OIS, VDIS\r\n\r\n- Диафрагма: F2.2\r\n\r\n- Диафрагма телеобъектива: F2.4\r\n\r\n- Диафрагма широкоугольного объектива: F1.8\r\n\r\n- Кратность оптического увеличения: 3x\r\n\r\n- Автофокус: да\r\n\r\n- Вспышка: светодиодная\r\n\r\n- Режимы съемки: ночной, портретный режим, боке\r\n\r\nФронтальная камера\r\n\r\n- Количество фронтальных камер: 1\r\n\r\n- Разрешение фронтальной камеры: 12 Мп\r\n\r\n- Широкоугольный объектив: да\r\n\r\n- Диафрагма: F2.2\r\n\r\n- Фокусное расстояние: 26 мм\r\n\r\nВидеосъемка\r\n\r\n- Качество видеозаписи: 8K, 1080р, 4K\r\n\r\n- Максимальное разрешение видео: 7680x4320\r\n\r\n- Съемка замедленного видео: да\r\n\r\n- Частота кадров в секунду: 24, 30, 60, 240, 960\r\n\r\n- Ночной режим видеосъемки: да\r\n\r\nАудиосистема\r\n\r\n- Аудиотехнология: Dolby Atmos\r\n\r\nИнтерфейсы\r\n\r\n- Тип разъема: USB Type-C\r\n\r\nБеспроводная связь\r\n\r\n- Стандарты Wi-Fi: IEEE 802.11 a, IEEE 802.11 ac, IEEE 802.11 ax, IEEE 802.11 b, IEEE 802.11 g, IEEE 802.11 n\r\n\r\n- Частота Wi-Fi: 2.4, 5, 6 ГГц\r\n\r\n- Технология Wi-Fi: Direct\r\n\r\n- Версия Bluetooth: 5.3\r\n\r\n- Спутниковая навигация: BDS, Galileo, GPS, ГЛОНАСС\r\n\r\nПитание\r\n\r\n- Тип аккумулятора: Li-Ion\r\n\r\n- Объём аккумулятора: 3900 мАч\r\n\r\n- Время работы в режиме воспроизведения видео: 22 ч\r\n\r\n- Время работы в режиме воспроизведения аудио: 71 ч\r\n\r\n- Беспроводная зарядка: да\r\n\r\n- Зарядка от USB: да\r\n\r\n- Быстрая зарядка: да\r\n\r\nДополнительные характеристики\r\n\r\n- Сканер отпечатка пальца: есть\r\n\r\n- Положение сканера отпечатков: под экраном\r\n\r\n- Датчики: G-сенсор (акселерометр), барометр, гироскоп\r\n\r\n- Дополнительная информация: частота обновления экрана 120 Гц, поддержка стeреозвука, адаптивный Vision Booster\r\n\r\n- Год выхода модели: 2023\r\n\r\nКорпус\r\n\r\n- Материал корпуса: стекло, металл\r\n\r\n- Цвет: чёрный\r\n\r\n- Защита от влаги и пыли: да\r\n\r\n- Класс пылевлагозащищенности: IP68\r\n\r\nКомплектация\r\n\r\n- Кабель USB-C: в комплекте\r\n\r\n- Инструкция: да\r\n\r\nРазмеры и вес\r\n\r\n- Высота: 14.63 см\r\n\r\n- Ширина: 7.09 см\r\n\r\n- Толщина: 0.76 см\r\n\r\n- Вес: 168 г\r\n\r\nПоказать полностью\r\nКомплектация\r\nКабель USB-C; Инструкция', 2, 1, 'images/9m5loH8utv7nVtw2B78O487TmYrkZi0VLVQn7fNf.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:14:11', '2023-04-12 18:23:48', 1),
(1063, 'Samsung S23 Ultra', 'Samsung S23 Ultra', 'Samsung S23 Ultra', 2, 1, 'images/47AqCSp0pZpPPYMf87BazoFc1JX3fd2XjhjRki66.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:42:00', '2023-04-12 18:42:00', 1),
(1064, 'Samsung S23 Plus', 'Samsung S23 Plus', 'Samsung S23 Plus', 2, 1, 'images/TaWmt6cykvgt8KGfsiQi4vqMvZv45IK9KGO4rvP1.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:42:23', '2023-04-12 18:42:23', 1),
(1065, 'Huawei', 'Huawei', 'Huawei', 3, 1, 'images/nxgpTTo4oPk866QOVUWi3RBqZEhYKc3dDEXgCf5B.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:43:25', '2023-04-12 18:43:25', 1),
(1066, 'HUAWEI Mate 50', 'HUAWEI Mate 50', 'HUAWEI Mate 50', 3, 1, 'images/OFNWlsoJUAQRbQjlwZd2OlQtXgrp9y9v8gyGKAdU.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:44:35', '2023-04-12 18:44:35', 1),
(1067, 'HUAWEI Mate Xs 2', 'HUAWEI Mate Xs 2', 'HUAWEI Mate Xs 2', 3, 1, 'images/C2Yvxu24a2QttctU7gIL2d0dQMt4JH1LLioDDJp2.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:47:01', '2023-04-12 18:47:01', 1),
(1068, 'Honor 50', 'Honor 50', 'Honor 50', 4, 1, 'images/5rNfT79eJ1WKNYpVqGkdWbs12ip4YHCC9R8ZlNoW.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:48:37', '2023-04-12 18:48:37', 1),
(1069, 'HONOR 50 Lite', 'HONOR 50 Lite', 'HONOR 50 Lite', 4, 1, 'images/dEj1R31lELnxv70Ic5EQiPUkIHoXLNCfBfokcyOL.jpg', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:51:07', '2023-04-12 18:51:07', 1),
(1070, 'Honor X', 'Honor X', 'Honor X', 4, 1, 'images/jNt28FgJ7pIFzYajP6m1uhepksmzgAj2jSFXHMep.jpg', NULL, NULL, 69000, 0, 0, 0, '2023-04-12 18:53:39', '2023-04-12 18:53:39', 1),
(1071, 'Xiaomi 12T', 'Xiaomi 12T', 'Xiaomi 12T', 7, 1, 'images/dD4GkzAu3qu5eDpUWxWvIJPS9XAYYmQiIgCXkI1o.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-13 05:08:08', '2023-04-13 05:08:08', 1),
(1072, 'Xiaomi 12 Pro', 'Xiaomi 12 Pro', 'Xiaomi 12 Pro', 7, 1, 'images/at7MrsGNFzOAUtAybglSZ730AjyNlhdx0j7yt9cj.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-13 05:09:31', '2023-04-13 05:10:06', 1),
(1073, 'Xiaomi 12X', 'Xiaomi 12X', 'Xiaomi 12X', 7, 1, 'images/8zDMVJmwj2VaRBUSaGLKoRsdo5alwY8ViYaaEqVA.webp', NULL, NULL, 69000, 0, 0, 0, '2023-04-13 05:10:41', '2023-04-13 05:10:41', 1),
(1074, 'Чехол Silicone Case для iPhone 14', 'Чехол Silicone Case для iPhone 14', 'Чехол Silicone Case для iPhone 14', 13, 1, 'images/v346QteBvfH7SS0iODB1QqZqzsCcHjkag9MiR11N.png', NULL, NULL, 1200, 0, 0, 0, '2023-04-13 05:29:26', '2023-04-13 05:32:44', 1),
(1075, 'Чехол силиконовый Hoco Premium для iPhone 14 Pro прозрачный', 'Чехол силиконовый Hoco Premium для iPhone 14 Pro прозрачный', 'Чехол силиконовый Hoco Premium для iPhone 14 Pro прозрачный', 13, 1, 'images/mwpLH8t3fEtBYCvztJ5wMLURkTN84cuY6saIfogl.png', NULL, NULL, 3999, 0, 0, 0, '2023-04-13 05:33:29', '2023-04-13 05:33:29', 1),
(1076, 'Адаптер питания Apple 5Вт USB Power Adapter', 'Адаптер питания Apple 5Вт USB Power Adapter', 'Адаптер питания Apple 5Вт USB Power Adapter', 13, 1, 'images/4WB5cxpjBNko7ls9MTxPrnMAhlZIxV8PjHNnxNbh.jpg', NULL, NULL, 1999, 0, 0, 0, '2023-04-13 05:34:03', '2023-04-13 05:34:03', 1),
(1077, 'Кабель для iPhone, iPad Apple Lightning to USB Cable 1 m', 'Кабель для iPhone, iPad Apple Lightning to USB Cable 1 m', 'Кабель для iPhone, iPad Apple Lightning to USB Cable 1 m', 13, 1, 'images/0dwyKQGJOarnTR6xqAoS7qKwDzw138hin0HWstu1.jpg', NULL, NULL, 1999, 0, 0, 0, '2023-04-13 05:34:24', '2023-04-13 05:34:24', 1),
(1078, 'Чехол силиконовый Hoco Premium для iPhone 14 Pro Max прозрачный', 'Чехол силиконовый Hoco Premium для iPhone 14 Pro Max прозрачный', 'Чехол силиконовый Hoco Premium для iPhone 14 Pro Max прозрачный', 1, 1, 'images/HWLdJK9nFGFzPQruJO5iPj5vKdqg5jTR3vsIjFVd.png', NULL, NULL, 69000, 0, 0, 0, '2023-04-13 05:35:45', '2023-04-13 05:35:45', 1),
(1079, 'Чехол-книжка Deppa Book Cover Silk Pro для Galaxy S23 черный', 'Чехол-книжка Deppa Book Cover Silk Pro для Galaxy S23 черный', 'Чехол-книжка Deppa Book Cover Silk Pro для Galaxy S23 черный', 13, 1, 'images/7WoZ43eDUYy0YWsqiZJNusx0ne0uKFVvtLppcAp6.jpg', NULL, NULL, 1999, 0, 0, 0, '2023-04-13 05:36:49', '2023-04-13 05:36:49', 1),
(1080, 'Чехол Deppa Liquid Silicone Pro для Galaxy S23 Ultra Черный', 'Чехол Deppa Liquid Silicone Pro для Galaxy S23 Ultra Черный', 'Чехол Deppa Liquid Silicone Pro для Galaxy S23 Ultra Черный', 13, 1, 'images/psLugY3v8fO58fKfdUvOvHulNXgy1vRUKGjCK8ef.jpg', NULL, NULL, 1999, 0, 0, 0, '2023-04-13 05:37:31', '2023-04-13 05:37:31', 1),
(1081, 'Защитное стекло Whitestone Dome Glass для Galaxy S23 прозрачный', 'Защитное стекло Whitestone Dome Glass для Galaxy S23 прозрачный', 'Защитное стекло Whitestone Dome Glass для Galaxy S23 прозрачный', 13, 1, 'images/5WzJAgrmliOIKs8clXqppEeuUSZLZve6IV6YzkCs.jpg', NULL, NULL, 7999, 0, 0, 0, '2023-04-13 05:38:18', '2023-04-13 05:38:18', 1),
(1082, 'Беспроводные наушники Samsung Galaxy Buds Live оникс (SM-R180NZTAGLB)', 'Беспроводные наушники Samsung Galaxy Buds Live оникс (SM-R180NZTAGLB)', 'Беспроводные наушники Samsung Galaxy Buds Live оникс (SM-R180NZTAGLB)', 13, 1, 'images/56azlnJeU5sDCQ5YOMqQt01weBnJOBjvQw49KwUu.jpg', NULL, NULL, 13000, 0, 0, 0, '2023-04-13 05:39:21', '2023-04-13 05:39:21', 1),
(1083, 'Штатив Joby GripTight One Micro Stand белый', 'Штатив Joby GripTight One Micro Stand белый', 'Штатив Joby GripTight One Micro Stand белый', 13, 1, 'images/7GLcp2vRrruu1nBsO8vJL7vq6sryTqqIRtRSfY5D.jpg', NULL, NULL, 4000, 0, 0, 0, '2023-04-13 05:39:51', '2023-04-13 05:39:51', 1),
(1084, 'Защитная пленка Samsung для Galaxy S23 Ultra прозрачный', 'Защитная пленка Samsung для Galaxy S23 Ultra прозрачный', 'Защитная пленка Samsung для Galaxy S23 Ultra прозрачный', 13, 1, 'images/wpvQrkf1ZbnLj2AdhPrV7XEGTB7CvDwO3H7MniUK.png', NULL, NULL, 4500, 0, 0, 0, '2023-04-13 05:40:59', '2023-04-13 05:40:59', 1),
(1085, 'Накладка HONOR Silicon Rubber Case для HONOR 50', 'Накладка HONOR Silicon Rubber Case для HONOR 50', 'Накладка HONOR Silicon Rubber Case для HONOR 50', 13, 1, 'images/Mlwhiep7C1miuZDGAMG8z0dRBIfn8SSn6EfXU4dy.webp', NULL, NULL, 5000, 0, 0, 0, '2023-04-13 05:45:37', '2023-04-13 05:45:37', 1),
(1086, '6.57\" Защитное стекло Red Line для экрана HONOR 50', '6.57\" Защитное стекло Red Line для экрана HONOR 50', '6.57\" Защитное стекло Red Line для экрана HONOR 50', 13, 1, 'images/1iQHxiePaNCDFV6bFEezeUUFY8fcEpNi9Yr9RgDG.webp', NULL, NULL, 424, 0, 0, 0, '2023-04-13 05:46:10', '2023-04-13 05:46:10', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'В наличии', 'fas fa-check text-success', '2020-12-12 08:46:12', '2020-12-12 08:46:12'),
(2, 'Ожидается', 'far fa-pause-circle text-danger', '2020-12-12 08:46:12', '2020-12-12 08:46:12');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, '1', '1@mail.ru', NULL, '$2y$10$2nNPI3jW.l/ea2Mh6bBOQOsR5PHuHrL6hnxOx/hK7ehBDJacPbZTC', NULL, '2022-11-26 03:52:29', '2022-11-26 03:52:29', 1),
(2, '1', '12@mail.ru', NULL, '$2y$10$cAsE7Tat4z/Vx1LHNzHv9endjGdF67Hu.meTOnvkrJPuXOAnQTNny', NULL, '2022-11-26 04:00:35', '2023-03-26 14:07:42', 1),
(3, 'das', 'dasd@mail.ru', NULL, '$2y$10$QNOmzpySrIC2FJlvD.kTUuaGVK/5xRyy0OuGz3BLwD1GGwSNyXvkm', NULL, '2022-11-27 06:21:01', '2023-03-26 14:07:43', 1),
(4, '3', '3@mail.ru', NULL, '$2y$10$Nc.g4lzJwAgGd2sZdYgsQer57wGSapSqUgsmDGCSdwNAxGale9mgS', NULL, '2022-11-28 10:16:58', '2023-03-26 13:27:20', 0),
(5, 'a1', 'a1@mail.ru', NULL, '$2y$10$16lQrRuerljY9V2irv8ezuvIkL0g3qp3AJz9hjPkyl6KFTxquv1xW', NULL, '2022-12-11 23:00:37', '2023-03-26 13:27:20', 0),
(6, '2', 'a2@mail.ru', NULL, '$2y$10$prxlBxdpRAoV7BTZksLcJ.wJTEgRs4OlM.KT.C1A/dSZMwHPNaWhS', NULL, '2022-12-12 06:35:36', '2023-03-26 13:27:16', 0),
(7, '4', '4@mail.ru', NULL, '$2y$10$Fwn/yH1AYlkhAq2MJdp6QuusXE4fo.dK5NLnlqf9OEhDAK9XABnk6', NULL, '2022-12-18 01:51:55', '2023-03-26 13:27:15', 0),
(8, 'Rosalia Bergstrom', 'ramiro.johnston@example.com', '2023-03-24 11:12:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ly0r1bV3TT', '2023-03-24 11:12:14', '2023-03-26 13:27:14', 0),
(9, 'Flavie Bergstrom', 'ohara.duncan@example.org', '2023-03-24 11:12:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wLNh7IHdJQ', '2023-03-24 11:12:25', '2023-03-24 11:12:25', 0),
(10, 'Santa Conn', 'hkozey@example.org', '2023-03-24 11:16:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0j3xPpid6p', '2023-03-24 11:16:26', '2023-03-24 11:16:26', 0),
(11, 'Beau Weissnat', 'kiehn.madge@example.org', '2023-03-24 11:16:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RgdWsl3Efb', '2023-03-24 11:16:57', '2023-03-24 11:16:57', 0),
(12, 'Kobe Schiller', 'jamison21@example.org', '2023-03-24 11:19:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7q0RjNNnKd', '2023-03-24 11:19:46', '2023-03-24 11:19:46', 0),
(13, 'Mrs. Rosemary O\'Kon', 'gaylord.mallie@example.net', '2023-03-24 11:46:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hjsEVBXp9S', '2023-03-24 11:46:19', '2023-03-24 11:46:19', 0),
(14, 'Ignacio Dietrich', 'heathcote.bonnie@example.net', '2023-03-24 11:51:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kZMYcidq0x', '2023-03-24 11:51:37', '2023-03-24 11:51:37', 0),
(15, 'Kory Graham', 'dquigley@example.org', '2023-03-24 11:52:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1H9KTZ0DRO', '2023-03-24 11:52:24', '2023-03-24 11:52:24', 0),
(16, '1', '11111@mail.ru', NULL, '$2y$10$HJZxtXq3zicxisMG4OHB7O9Xa.B7sT7Oc7QPELKKSC5il5DdbbZja', NULL, '2023-04-12 11:54:31', '2023-04-12 11:54:31', 0),
(17, '5', '5@mai.ru', NULL, '$2y$10$GJc8ulWCGpuZBHxbvS25G.xEt3M4b9ywDEvY4OwdSI1u5oygTe1zO', NULL, '2023-04-12 14:34:19', '2023-04-12 14:34:19', 0),
(18, '6', '6@mail.ru', NULL, '$2y$10$78UgcDmkH56FSiaSTvvi9eiajH.4ZRe6A7MruKq.QI4rQXa4eCKPS', NULL, '2023-04-12 14:35:06', '2023-04-12 14:35:06', 0),
(19, '2', '222@mail.ru', NULL, '$2y$10$tKEyfvSSyYddBgmVuRSnmuBXmzBrSbmmoYBL3zlNWBn4dilSn5iPO', NULL, '2023-05-19 04:59:32', '2023-05-19 04:59:32', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories2`
--
ALTER TABLE `categories2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `categories2`
--
ALTER TABLE `categories2`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1087;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
