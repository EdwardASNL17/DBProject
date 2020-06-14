-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2020 г., 13:51
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `topic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `blogtext` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `login`, `topic`, `blogtext`, `image`) VALUES
(35, 'EdwardASNL17', '', 'Тестовое сообщение', ''),
(42, 'EdwardASNL17', 'В ВОЗ объяснили низкую смертность от коронавируса в России', 'ЖЕНЕВА, 10 июня. /ТАСС/. Всемирная организация здравоохранения (ВОЗ) считает &quot;необычным&quot; тот факт, что в России смертность от коронавируса ниже, чем во многих других странах. Однако объясняет это в том числе быстрым осуществлением большого числа тестов на наличие инфекции. Об этом заявил в среду на брифинге в Женеве директор программы ВОЗ по чрезвычайным ситуациям Майкл Райан.', 'https://phototass3.cdnvideo.ru/width/1020_b9261fa1/tass/m2/uploads/i/20200610/5583717.jpg'),
(43, 'EdwardASNL17', 'Сбербанк договорился о покупке 2ГИС', 'Сбербанк подписал документы о приобретении контрольной доли в картографическом сервисе 2ГИС. В результате сделки Сбербанк получит 75% сервиса, который был оценен в 14,3 млрд руб., сообщается на сайте банка.\r\n\r\nДоля Сбербанка в 2ГИС составит 72%, еще 3% получит ООО &laquo;О2О Холдинг&raquo; &mdash; совместное предприятие Сбербанка и Mail.ru Group в сфере еды и транспорта. Основатели и менеджмент 2ГИС сохранят за собой долю 25% в компании. Инвестиционные фонды Baring Vostok и RTP Global Леонида Богуславского полностью выйдут из капитала 2ГИС.', ''),
(44, 'EdwardASNL17', 'Xiaomi Mi Band 5 получит магнитную зарядку', 'Компания Xiaomi раскрыла новые подробности фитнес-браслета Xiaomi Mi Band 5, который можно будет приобрести в этом месяце.\r\n\r\nВ новых рекламных тизерах раскрыли подробную информацию о технологии зарядки устройства. Для браслета сделали магнитную зарядку. С ее помощью можно не снимать гаджет с ремешка, чтобы зарядить гаджет. Зарядка крепится к специальной площадке с контактами на задней панели Mi Band 5.\r\n\r\nXiaomi также подтвердила, что в новом браслете будет увеличенный дисплей (1,2 дюйма), а также возможность измерять уровень кислорода в крови. Официальная презентация новинки состоится 11 июня.', 'https://www.ixbt.com/img/x780/n1/news/2020/5/3/image.png'),
(45, 'EdwardASNL17', '&laquo;ВКонтакте&raquo; научилась переводить голосовые сообщения в текст', 'Подчёркивается, что они могут переводить в текст не только полученные голосовые сообщения, но и отправленные. ', 'https://static.inforeactor.ru/uploads/2020/06/09/orig-1591700471trw4RjfaX6TtMUElCe8OhywnN3kp3e0fS0fHnAJF.jpeg'),
(46, 'EdwardASNL17', 'тема', 'не раскрыта', '');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(10) UNSIGNED NOT NULL,
  `feed_login` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `feed_email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subject` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_login`, `feed_email`, `subject`, `message`) VALUES
(28, 'EdwardASNL17', '', 'Тестовый запуск', 'Батут работает\r\n'),
(29, 'EdwardASNL17', '', 'Тестовый запуск 2', 'Батут сработал успешно'),
(30, 'EdwardASNL17', 'edwardasnl@mail.ru', 'Это последняя', 'точно\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `test_id` int(10) UNSIGNED NOT NULL,
  `question_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `test_id`, `question_name`) VALUES
(1, 1, 'Вам сложно представить себя другим людям.'),
(2, 1, 'Вы очень часто так погружаетесь в свои мысли, что не замечаете или забываете об окружающих вас людях.'),
(3, 1, 'Вам легко оставаться уравновешенным и сконцентрированным даже в напряженной обстановке.'),
(5, 1, 'Вы, как правило, не начинаете разговор.'),
(7, 1, 'Вы редко делаете что-то из чистого любопытства.\r\n'),
(8, 1, 'Вам кажется, что вы в чем-то превосходите других людей.\r\n'),
(9, 1, 'Быть организованным для вас более важно, чем уметь приспособиться.'),
(12, 1, 'Вы очень целеустремленный и энергичный человек.'),
(13, 1, 'Для вас важнее убедиться в том, что никто не огорчился, чем выиграть спор.'),
(14, 1, 'Ваш дом и ваше рабочее место очень аккуратные.'),
(15, 1, 'Очень часто вы чувствуете, что вам необходимо оправдываться перед другими людьми.'),
(16, 1, 'Вы не против того, чтобы быть в центре внимания.'),
(17, 1, 'Вы считаете себя больше практичным, чем креативным человеком.'),
(18, 1, 'Люди редко могут огорчить вас.'),
(19, 1, 'Ваши планы путешествий, как правило, продуманы до мелочей.'),
(20, 1, 'Ваше настроение часто меняется.'),
(21, 1, 'Вам зачастую сложно поставить себя на место другого человека.'),
(22, 1, 'Во время дискуссии правда должна быть важнее чувств других людей.'),
(23, 1, 'Вы редко переживаете относительно того, какое влияние могут оказать ваши действия на других людей.'),
(24, 1, 'Ваш стиль работы можно скорее охарактиризовать как беспорядочные всплески энергии, а не методичная и организованная деятельность.');

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `test_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `text_result` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `test_id`, `user_id`, `text_result`, `type_id`) VALUES
(15, 1, 19, '', 1),
(20, 1, 50, '', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `name`, `comment`) VALUES
(1, 'Тест личности', 'Оценивает ваше психологическое состояние и те или иные склонности');

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `citata` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `type`, `citata`, `text`) VALUES
(0, 'Стратег', 'Вы не имеете права на вашу точку зрения. Вы имеете право на вашу обоснованную точку зрения. Никто не имеет права быть невежественным.', 'Стратеги уже в раннем детстве демонстрируют природное стремление к знаниям и другие дети часто дают им прозвище «буквоед». Несмотря на то, что такое прозвище может быть обидным с точки зрения их сверстников, часто они с удовольствием принимают это и даже гордятся этим, наслаждаясь своими обширными знаниями. Стратеги любят делиться своими знаниями, они уверены в своем мастерстве. Такие личности предпочитают разрабатывать и выполнять идеальные планы в своей области, а не обсуждать «неинтересные» темы, например, слухи.'),
(1, 'Посредник', 'Не всякое золото ярко блестит, Скитальцы не все пропадают. Глубокие корни мороз не сразит, Сила старая не увядает.', 'Посредники — истинные идеалисты, всегда ищущие искру добра даже в худших из людей или событий в попытке улучшить ситуацию. В то время, как многие воспринимают их как спокойных, сдержанных, даже стеснительных людей, в Посредниках горит внутреннее пламя и страсть, которые могут в какой-то момент засиять. Составляя всего 4% от населения, личности типа «Посредник» часто рискуют остаться непонятыми — но, когда они находят думающих схожим образом людей, с которыми они проводят время, появившаяся гармония становится источником радости и вдохновения.'),
(2, 'Администратор', 'Я заметил, что если одного человека достаточно для выполнения задачи, то двое справляются с ней куда хуже, а если дать это же задание троим, то и вовсе результата можно не добиться.', 'Тип личности Администратор считается одним из наиболее распространенных и составляет 13% населения. Определяющие характеристики данного типа — целостность, практическая логика и неустанное следование своему долгу — делают Администраторов жизненно важным ядром многих семей и организаций, в которых ценятся традиции, правила и стандарты, например, в юридических компаниях, правительственных организациях или в армии. Люди типа личности Администратор предпочитают отвечать за свои поступки и гордиться работой, которую они выполняют — когда они работают над поставленной задачей, они не жалеют ни сил, ни энергии, выполняя задания аккуратно и терпеливо.'),
(3, 'Виртуоз', 'Я хотел жить жизнью, другой жизнью. Я не хотел идти в одно и то же место каждый день, видеть тех же людей, делать ту же работу. Я хотел интересных приключений.', 'Виртуозы любят пробовать новое на ощупь и на глаз, трогая и изучая мир вокруг себя со спокойным рационализмом и воодушевленным любопытством. Люди с таким типом личности — прирожденные творцы, двигающиеся от проекта к проекту, строя полезное и бесполезное ради самого процесса и приобретая новый опыт по мере продвижения. Часто они бывают механиками или инженерами: для Виртуозов нет большего удовольствия, чем возиться по локоть в механизмах, разбирая и собирая их вновь, делая их чуть лучше, чем они были до этого.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `avatar` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `password`, `avatar`) VALUES
(19, 'edwardasnl@mail.ru', 'EdwardASNL17', '25d55ad283aa400af464c76d713c07ad', 'https://sun1-22.userapi.com/18xSdJdxEvk_HqFRItFIJUp3GUpSRs_V_OQ5kA/vMj2vWrzqSk.jpg'),
(50, 'test@mail.ru', 'test_user', '202cb962ac59075b964b07152d234b70', 'https://image.flaticon.com/icons/svg/145/145845.svg'),
(51, 'budaog@yandex.ru', 'Гриша Буда', '202cb962ac59075b964b07152d234b70', 'https://image.flaticon.com/icons/svg/145/145842.svg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`) USING BTREE;

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`);

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`);

--
-- Ограничения внешнего ключа таблицы `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`),
  ADD CONSTRAINT `results_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
