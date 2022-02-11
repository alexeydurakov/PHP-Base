-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 11 2022 г., 19:36
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geekbrains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `for_goods` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`, `for_goods`) VALUES
(1, 'Влад', 'Кто не любит пицу! А эта- пальчики оближешь! Сколько сыра! И что интересно, много чего еще положено. По мне так очень немаловажно, что есть маринованные помидорчики, перчик сладкий, конечно колбаска, майонезик. Теста немного, а это тоже неплохо! Короче класс, смак и вкуснотища!', 1),
(2, 'Сергей', 'Ожидания не оправдались, но любопытство удовлетворил.', 2),
(3, 'Дмитрий', 'Сочное яблоко.', 3),
(4, 'Дмитрий', 'Пицца бомба', 1),
(5, 'Светлана', 'Восхитительный фруктовый вкус', 2),
(6, 'Женя', 'Сладкие и сочный яблоки', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `goods_price` int NOT NULL,
  `goods_img` char(255) NOT NULL,
  `goods_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `goods_name`, `goods_price`, `goods_img`, `goods_description`) VALUES
(1, 'Пепперони', 360, '01.jpg', 'Пицца, которая не оставит равнодушным ни одного гурмана: нежнейшее тесто, таящий во рту сыр моцарелла в сочетании с пепперони и томатным соусом.'),
(2, 'Чай Екатерина Великая', 120, '02.jpg', 'Этот купаж покоряет своей легкостью и аристократизмом. Основа композиции – благородная нота турецкой розы, раскрывающаяся в окружении свежего и насыщенного фруктового аромата. В этом аромате идеально сочетаются таинственность, роскошь и богатство вкуса. Он станет верным спутником тех, кто уверен в себе и умеет каждый миг жизни встречать с улыбкой.'),
(3, 'Яблоко Бреберн', 136, '03.jpg', 'Яблоки обладают низкой калорийностью. В состав этого фрукта входит клетчатка, которая очищает кишечник от токсинов и лишней жидкости, что имеет огромную пользу для здоровья. Яблоки можно употреблять, как в свежем, так и в переработанном виде. Из плодов готовят различные напитки, например, соки, компоты');

-- --------------------------------------------------------

--
-- Структура таблицы `images_file_name`
--

CREATE TABLE `images_file_name` (
  `id` int NOT NULL,
  `filename` text NOT NULL,
  `likes` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `images_file_name`
--

INSERT INTO `images_file_name` (`id`, `filename`, `likes`) VALUES
(1, '01.jpg', 0),
(2, '02.jpg', 0),
(3, '03.jpg', 6),
(4, '04.jpg', 1),
(5, '05.jpg', 0),
(6, '06.jpg', 2),
(7, '07.jpg', 0),
(8, '08.jpg', 0),
(9, '09.jpg', 0),
(10, '10.jpg', 4),
(11, '11.jpg', 1),
(12, '12.jpg', 0),
(13, '13.jpg', 2),
(14, '131.jpeg', 5),
(15, '14.jpg', 1),
(16, '15.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` char(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'В США объяснили, почему Байден, а не Россия, виновен в кризисе на Украине', 'Сенатор Круз обвинил президента США Байдена в эскалации ситуации на Украине\r\nСенатор-республиканец от штата Техас Тед Круз - РИА Новости, 1920, 04.02.2022\r\n© AP Photo / Justin Hayworth\r\nСенатор-республиканец от штата Техас Тед Круз\r\nЧитать ria.ru в\r\nМОСКВА, 4 фев — РИА Новости. Эскалация ситуации вокруг Украины произошла после того, как сменился \"обитатель Овального кабинета\", обратил внимание сенатор-республиканец Тед Круз, слова которого приводит издание The Hill.\r\n\"Почему Россия не напала на Украину в 2017 году? Почему этого не произошло в 2018, 2019 или 2020 году? Что изменилось?\" — задается вопросом политик.\r\n\r\nСам же отвечая на него, он приходит к выводу, что причиной текущей напряженности стал нынешний президент США Джо Байден, который \"продемонстрировал слабость и попустительство практически сразу после того, как \"положил руку на Библию\", произнося клятву при инаугурации.\r\nРеклама\r\n \r\nКупить деревянные двутавровые балки\r\nДеревянные двутавровые балки перекрытия и стропильной системы от производителя\r\nВысокая прочность\r\nБесплатная раскладка\r\nДоставка по России\r\nВыгодно\r\nenter-city.ru\r\nВ последнее время отношения между Россией и Западом стали еще более напряженными из-за ситуации вокруг Украины. Вашингтон и Брюссель обвиняют Москву в подготовке \"вторжения\", заявляя о стягивании российских войск к границе. На этом фоне НАТО увеличивает количество своих сил и техники в Восточной Европе.\r\nСенатор Алексей Пушков - РИА Новости, 1920, 04.02.2022\r\n08:50\r\nПушков объяснил \"украинскую стратегию\" Байдена\r\nВ Москве отвергают подобные обвинения, отмечая, что перемещают войска в пределах своей территории. Россия также напоминает, что Украина не соблюдает Минские соглашения, предусматривающие прекращение огня и отвод тяжелых вооружений от линии соприкосновения.\r\nВ Кремле и МИД неоднократно подчеркивали, что цель вбросов \"об агрессии\" — нарастить иностранную группировку у российских границ, а основная причина эскалации на Украине — действия США и НАТО, которые посылают туда военных инструкторов, оружие и технику, увеличивают число учений, тем самым подталкивая Киев к военным авантюрам.\r\n345\r\n283\r\n9\r\n2\r\n12\r\n30\r\nОбсудить12'),
(2, 'Bloomberg: Россия построила \"финансовую крепость\" против западных санкций', 'МОСКВА, 4 фев — РИА Новости. За последние несколько лет России удалось построить \"финансовую крепость\", которая позволит стране пережить новые западные санкции без особых потерь, пишет Bloomberg.\r\n\"Шаги против России, которые обсуждает администрация Байдена со своими союзниками, могут повлиять на рубль, инвестиционный климат в стране или инфляцию, однако они не способны спровоцировать падение показателей, как в 2014 году\", — пишет автор статьи Анна Андрианова.\r\nКак отмечается в статье, Кремлю удалось нарастить резервы, свести госдолг к одному из самых низких значений среди основных мировых экономик, а также добиться профицита бюджета.\r\nРеклама\r\n \r\nКупить деревянные двутавровые балки\r\nДеревянные двутавровые балки перекрытия и стропильной системы от производителя\r\nВысокая прочность\r\nБесплатная раскладка\r\nДоставка по России\r\nВыгодно\r\nenter-city.ru\r\nПомимо этого, Москва все больше сокращает зависимость от доллара, переведя как сбережения, так и внешнеторговые расчеты в другие валюты, например, евро и юань.\r\nПрохожие на Вестминстерском мосту в Лондоне  - РИА Новости, 1920, 01.02.2022\r\n1 февраля, 08:00\r\nЗапад мстит России за ее правоту\r\n\"Россия намного лучше готова к санкциям, чем раньше, по крайней мере по макропоказателям\", — заявила в комментарии к статье старший экономист БКС Наталья Лаврова.\r\nПо ее словам, только самые экстремальные сценарии введения рестрикций остановят рост экономики страны.\r\nВ последние месяцы в западных СМИ все чаще стали появляться сообщения о якобы подготовке Москвой \"вторжения\" на Украину. В России не раз опровергали подобные голословные утверждения. При этом США и их союзники по НАТО в случае обострения конфликта угрожают ввести санкции.\r\nКак указывал представитель Кремля Дмитрий Песков, вооруженные силы перемещаются в пределах России — это никому не угрожает и никого не должно волновать. В Москве подчеркивали, что заявления о \"российской агрессии\" используются как предлог для наращивания контингента НАТО в приграничных регионах.'),
(3, 'В Пекине завершились переговоры Путина и Си Цзиньпина, длившиеся почти три часа', 'МОСКВА, 4 фев — РИА Новости. Переговоры лидеров России и Китая Владимира Путина и Си Цзиньпина, продолжавшиеся почти три часа, завершились, передает корреспондент РИА Новости.\r\nПрезидент России находится с визитом в Пекине. Переговорам предшествовала официальная церемония встречи и фотографирование. После этого Путин и Си Цзиньпин побеседовали с участием членов делегаций, затем встреча продолжилась тет-а-тет.\r\nПо итогам переговоров был подписан пакет совместных документов, а лидеры приняли совместное заявление.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images_file_name`
--
ALTER TABLE `images_file_name`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `images_file_name`
--
ALTER TABLE `images_file_name`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;