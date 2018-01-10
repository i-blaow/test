-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 10 2018 г., 20:00
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `News_Site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `News`
--

CREATE TABLE `News` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `TextFull` text NOT NULL,
  `PhotoLink` varchar(255) NOT NULL,
  `PhotoName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `News`
--

INSERT INTO `News` (`id`, `Link`, `Date`, `title`, `text`, `TextFull`, `PhotoLink`, `PhotoName`) VALUES
(1, 'google.com', '2018-01-07', 'Криптовалюта от Дурова: преимущества, особенности и принцип работы', 'В сети появились инсайдерские подробности о блокчейне и криптовалюте Павла Дурова Telegram Open Network (TON). Разработку назвали блокчейном третьего поколения после Bitcoin и Ethereum. TON решит сразу несколько проблем существующих криптовалют: например, сократит высокую стоимость и длительность транзакций до 1 миллиона операций в секунду, а также предложит другие улучшения. Чем отличается TON от остальных «монет» — читайте под катом.', 'В сети появились инсайдерские подробности о блокчейне и криптовалюте Павла Дурова Telegram Open Network (TON). Разработку назвали блокчейном третьего поколения после Bitcoin и Ethereum. TON решит сразу несколько проблем существующих криптовалют: например, сократит высокую стоимость и длительность транзакций до 1 миллиона операций в секунду, а также предложит другие улучшения. Чем отличается TON от остальных «монет» — читайте под катом. Telegram Open Network упростит интерфейсы покупки, хранения и перевода, а также расширит сферу применения «крипты» в повседневной жизни. Инсайдеры сообщают, что в самой компании валюту назвали Gram.   Telegram  TON будет основана на алгоритме Proof-of-Stake — когда создатель блока выбирается по количеству валюты на кошельке. Блокчейн Telegram будет состоять из основного чейна и множества дополнительных (до 2 в 29-й степени), поддерживая интеграцию с другими платформами. Благодаря опции Infinite Sharding Platform блокчейны TON могут разделяться и объединяться, зависимости от нагрузки, а технология Instant Hypercube Routing обеспечивает бо́льшую скорость транзакций.  Операции с новой валютой будут проводиться через лёгкие клиенты Telegram Wallet. Приложение выдаёт ключи шифрования только самим владельцам кошельков, а за идентификацию пользователей будет отвечать единая система Telegram External Secure ID. При этом все личные данные будут защищены сквозным шифрованием и не попадут на внешние серверы.  Во внутренних документах Telegram указано, что 4% или 200 миллионов от всего количества «граммов» будет зарезервировано для команды разработчиков проекта на четыре года. Также не менее 52% монет «придержат» на время, чтобы защитить их от спекуляций. Остальные 44% попадут в открытые и закрытые продажи.  Запуск TON пройдёт в несколько этапов: в январе создатели проведут закрытые предпродажи валюты, первичное размещение монет пройдёт в марте 2018 года, а в четвёртом квартале разработчики запустят Telegram Wallet. Остальная часть сервисов Telegram Open Network заработает в первой половине 2019 года.  Сам Павел Дуров пока что не прокомментировал утечку.', 'view/images/PhotoForPaper/mnMKIU06wTMvkLttoSiSXkz2iNgCdnJmZUjPb.jpg', 'Crypta_ot_Durova'),
(11, 'Elephone', '2018-01-10', 'Elephone U Pro: что известно о новом флагмане с изогнутым экраном', 'Компания Elephone выпустит смартфон с экраном, как у флагманов Samsung, использовав AMOLED-матрицу другого производителя. Ранее аппарат уже был из', 'Компания Elephone выпустит смартфон с экраном, как у флагманов Samsung, использовав AMOLED-матрицу другого производителя. Ранее аппарат уже был известен под названием S9, однако компания решила переименовать его. Новый индекс U напоминает по форме главную «фишку» устройства — изогнутый экран. Elephone также рассказала, чем ещё примечательна новая модель.\r\nИзменения также касаются Pro-версии смартфона, которая теперь носит название Elephone U Pro. В остальном параметры гаджетов ничем не отличаются от тех, что были заявлены ранее.\r\nElephone U Pro получит процессор Snapdragon 660, 6 ГБ ОЗУ, 128 ГБ хранилища, двойную камеру Samsung с разрешением 13 Мп и программными алгоритмами Arcsoft, заднюю панель из стекла Gorilla Glass, алюминиевый корпус и поддержку NFC.', 'view/images/PhotoForPaper/EU.jpg', 'EU.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `email`, `token`) VALUES
(31, 'blaow', '9017959c6a9927bd52ae15bbeeda3e98', '123456@gmail.com', 'sca5CK0wloTc323Mg56DHkwTaODiUX5uxLEwM5Pj85UWLklKiFeIEU12'),
(52, 'JohnD', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'JohnD@gmail.com', 'ITdN1K4plR98ZBKeki0rjQImconqlYkTCyotIs9UglKxJ8SBK1k353mB');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `News`
--
ALTER TABLE `News`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `News`
--
ALTER TABLE `News`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
