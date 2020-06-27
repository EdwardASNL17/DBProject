-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 27 2020 г., 14:30
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
(185, 'EdwardASNL17', 'В Кремле заявили о большом количестве фейков по поводу голосования', 'МОСКВА, 26 июн — РИА Новости. Пресс-секретарь президента Дмитрий Песков заявил, что количество фейков по поводу голосования по поправкам к Конституции \"просто зашкаливает\".<br><br>Так он отреагировал на просьбу журналистов прокомментировать сообщение, что во Владивостоке избирательный участок организовали в багажнике автомобиля.<br><br>Представитель Кремля уточнил, что эту информацию надо проверить, если она подтвердится, нужно будет обратиться в избирательную комиссию.<br><br>\"Есть организации, которые заинтересованы в чистоте голосования. Нужно выяснить, является ли это запрещенным форматом организации голосования по закону. И третье — это никоим образом, даже если предположить, что это так, это же не является принуждением\", — добавил Песков.<br><br>Он призвал корректно \"расставлять все нюансы\".<br><br>Как уточнил пресс-секретарь, он не уверен в том, что сообщения о голосовании на лавочках во дворах правдивы.<br><br>Ранее в соцсетях распространилось видео, на котором иномарка стоит у подъезда, у нее открыт багажник, рядом находится стол, стоит женщина с бейджем, которая подтверждает, что у нее можно проголосовать. На машине приклеена табличка \"УИК 838\". Власти Приморья сообщили, что жители многоквартирного дома объединились и \"заказали\" избирательную комиссию к себе на дом — пункт для голосования является выездным, а не постоянным.<br><br>Общероссийское голосование по поправкам к Конституции первоначально назначили на 22 апреля, но затем перенесли из-за пандемии коронавируса. Граждане могут отдать свой голос с 25 июня по 1 июля.<br><br>', 'https://cdn24.img.ria.ru/images/07e4/06/1a/1573506395_0:0:2910:1638_600x0_80_0_0_563ef687f287bc03c6ea875df7e5fa79.jpg'),
(186, 'EdwardASNL17', 'Российская нефть Urals достигла рекордной премии к Brent', 'МОСКВА, 26 июн — РИА Новости. Российская нефть Urals торгуется в Северо-Западной Европе с премией к североморской Brent в 2,35 доллара за баррель — рекордной за всю историю мониторинга с сентября 1994 года, сообщило международное ценовое агентство Argus.<br><br>\"Премия на \"Юралс\" в СЗЕ в четверг выросла на $0,40/барр. относительно Североморского датированного, до $2,35/барр. (cif Роттердам)\", — сказано в релизе.<br><br>Таким образом, премия превысила прежний максимум, установленный в конце мая в 2,30 доллара за баррель (cif Роттердам). В абсолютном выражении мера Urals подорожала на 0,92 доллара, до 43,25 доллара.<br><br>Как отмечает агентство, поддержку стоимости сорта оказала информация о снижении отгрузок в июле более чем на 40% вследствие сокращения добычи в России в рамках соглашения ОПЕК+.<br><br>', 'https://cdn25.img.ria.ru/images/07e4/05/0d/1571365295_0:320:3072:2048_600x0_80_0_0_d865b3eed1f55f15e80a3dad6b49e61b.jpg'),
(187, 'EdwardASNL17', 'МИД разъяснил, как будет действовать соглашение о визах с Белоруссией', 'МОСКВА, 26 июн — РИА Новости. Директор Второго департамента стран СНГ российского МИД Алексей Полищук разъяснил РИА Новости, как будет действовать соглашение между Москвой и Минском о взаимном признании виз.<br><br>Соглашение 19 июня подписали министр иностранных дел России Сергей Лавров и его белорусский коллега Владимир Макей.<br><br>\"Дело в том, что раньше отсутствовала правовая основа для пересечения  гражданами третьих стран российско-белорусской границы, поскольку на ней  нет пунктов пропуска. Теперь статья пять соглашения предусматривает такую возможность. Появляются условия для нормального перемещения  иностранцев. Это будет способствовать развитию иностранного туризма и  транзитных возможностей России и Белоруссии\", — сказал Полищук.<br><br>То есть, пояснил он, граждане тех государств, для которых действует безвизовый режим и с Россией, и с Белоруссией, смогут свободно передвигаться по территориям обеих стран.<br><br>\"Но при этом срок их пребывания определяется международными договорами или законодательством страны, на чьей территории они находятся\", — добавил дипломат.<br><br>Однако это касается только поездок граждан, безвизовый режим для которых введен международными договорами России и Белоруссии, подчеркнул собеседник агентства. Так что указ президента Белоруссии, в соответствии с которым граждане 74 стран могут без виз въезжать через минский аэропорт на 30 суток, не позволит им ездить в Россию.<br><br>Одна из статей соглашения предусматривает обмен сведениями о пересечении границы, поэтому российская сторона сможет узнать, въехал ли иностранец в Белоруссию в этом \"30-суточном режиме\".<br><br>\"Порядок такого обмена будет определен дополнительно профильными ведомствами двух стран\", — добавил Полищук.<br><br>Изначально к проекту соглашения прилагался список стран, граждане которых подпадали под его действие, но впоследствии от него отказались. По словам Полищука, стороны сочли более логичным внести в соглашение формулировки, которые предусматривают перемещение по территории Союзного государства граждан тех стран, чьи режимы въезда в Россию и Белоруссию различаются. \"Благодаря этому соглашение стало более универсальным, а возможность путешествовать в его рамках получили, в частности, граждане Китая\", — пояснил дипломат. Кроме того, упростились технические моменты, связанные с обменом информацией.<br><br>Таким образом, отметил Полищук, иностранец с белорусской визой сможет въехать через российский пункт пропуска. Однако, например, если гражданин Грузии  едет в Белоруссию (у них действует безвизовый режим) через территорию России, то ему понадобится российская виза.<br><br>\"Если же он летит в Минск из Грузии или другой страны напрямую, то российская виза не потребуется. Правда, в этом случае он сможет находиться только на территории Беларуси и не будет иметь права въезда в Россию\", — уточнил Полищук.<br><br>Кроме того, соглашение позволит пересекать российско-белорусскую границу обладателям разрешений на временное проживание и видов на жительство, оформленных в России и Белоруссии. \"Но при этом право на работу или учебу у них будет только в той стране, где оно получено\", — обратил внимание дипломат.<br><br>Он напомнил, что соглашение касается только иностранцев и не затрагивает режим взаимных поездок граждан России и Белоруссии. \"Россияне и белорусы, как и раньше, могут перемещаться по территории Союзного государства в соответствии с соглашением 2006 года об обеспечении равных прав граждан на свободу передвижения, выбор места пребывания и жительства\", —  заключил Полищук.<br><br>', 'https://cdn24.img.ria.ru/images/07e4/03/13/1568852869_0:9:3072:1736_600x0_80_0_0_f4b9412931f89de6e830f31ce0eaf4e9.jpg'),
(188, 'EdwardASNL17', 'тест', 'тестовое сообщение', ''),
(189, 'EdwardASNL17', 'тест', 'тестовый формат', 'uploads/wiKac36OJb4.jpg');

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
-- Структура таблицы `predlojka`
--

CREATE TABLE `predlojka` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `topic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `blogtext` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `test_id`, `user_id`, `type_id`) VALUES
(15, 1, 19, 1),
(20, 1, 50, 3),
(21, 1, 53, 1),
(22, 1, 54, 0);

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
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `type`, `citata`, `text`, `author`) VALUES
(0, 'Стратег', 'Вы не имеете права на вашу точку зрения. Вы имеете право на вашу обоснованную точку зрения. Никто не имеет права быть невежественным.\r\n', 'Стратеги уже в раннем детстве демонстрируют природное стремление к знаниям и другие дети часто дают им прозвище «буквоед». Несмотря на то, что такое прозвище может быть обидным с точки зрения их сверстников, часто они с удовольствием принимают это и даже гордятся этим, наслаждаясь своими обширными знаниями. Стратеги любят делиться своими знаниями, они уверены в своем мастерстве. Такие личности предпочитают разрабатывать и выполнять идеальные планы в своей области, а не обсуждать «неинтересные» темы, например, слухи.', 'HARLAN ELLISON'),
(1, 'Посредник', 'Не всякое золото ярко блестит, Скитальцы не все пропадают. Глубокие корни мороз не сразит, Сила старая не увядает.', 'Посредники — истинные идеалисты, всегда ищущие искру добра даже в худших из людей или событий в попытке улучшить ситуацию. В то время, как многие воспринимают их как спокойных, сдержанных, даже стеснительных людей, в Посредниках горит внутреннее пламя и страсть, которые могут в какой-то момент засиять. Составляя всего 4% от населения, личности типа «Посредник» часто рискуют остаться непонятыми — но, когда они находят думающих схожим образом людей, с которыми они проводят время, появившаяся гармония становится источником радости и вдохновения.', 'J. R. R. TOLKIEN'),
(2, 'Администратор', 'Я заметил, что если одного человека достаточно для выполнения задачи, то двое справляются с ней куда хуже, а если дать это же задание троим, то и вовсе результата можно не добиться.', 'Тип личности Администратор считается одним из наиболее распространенных и составляет 13% населения. Определяющие характеристики данного типа — целостность, практическая логика и неустанное следование своему долгу — делают Администраторов жизненно важным ядром многих семей и организаций, в которых ценятся традиции, правила и стандарты, например, в юридических компаниях, правительственных организациях или в армии. Люди типа личности Администратор предпочитают отвечать за свои поступки и гордиться работой, которую они выполняют — когда они работают над поставленной задачей, они не жалеют ни сил, ни энергии, выполняя задания аккуратно и терпеливо.', 'GEORGE WASHINGTON'),
(3, 'Виртуоз', 'Я хотел жить жизнью, другой жизнью. Я не хотел идти в одно и то же место каждый день, видеть тех же людей, делать ту же работу. Я хотел интересных приключений.', 'Виртуозы любят пробовать новое на ощупь и на глаз, трогая и изучая мир вокруг себя со спокойным рационализмом и воодушевленным любопытством. Люди с таким типом личности — прирожденные творцы, двигающиеся от проекта к проекту, строя полезное и бесполезное ради самого процесса и приобретая новый опыт по мере продвижения. Часто они бывают механиками или инженерами: для Виртуозов нет большего удовольствия, чем возиться по локоть в механизмах, разбирая и собирая их вновь, делая их чуть лучше, чем они были до этого.', 'HARRISON FORD');

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
(19, 'edwardasnl@mail.ru', 'EdwardASNL17', '25d55ad283aa400af464c76d713c07ad', 'uploads/пятерка по физре.jpg'),
(50, 'test@mail.ru', 'test_user', '202cb962ac59075b964b07152d234b70', 'https://image.flaticon.com/icons/svg/145/145845.svg'),
(51, 'budaog@yandex.ru', 'Гриша Буда', '202cb962ac59075b964b07152d234b70', 'uploads/2019-12-23_14-43-33__97e139a4-2592-11ea-9706-074415d0149e.jpg'),
(53, 'check@mail.ru', 'Лерочка', '202cb962ac59075b964b07152d234b70', 'https://image.flaticon.com/icons/svg/145/145842.svg'),
(54, 'platyboi300@mail.ru', 'Платибой', '202cb962ac59075b964b07152d234b70', 'uploads/платибой300.jpg');

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
-- Индексы таблицы `predlojka`
--
ALTER TABLE `predlojka`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `predlojka`
--
ALTER TABLE `predlojka`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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