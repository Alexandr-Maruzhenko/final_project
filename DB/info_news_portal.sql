-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 11 2022 г., 00:32
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `info_news_portal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `content`, `photo`, `article_slug`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Джаред Лето проиграл судебный процесс против TMZ и Warner Bros', 'В конце 2015 года музыкант подал исковое заявление, в котором говорилось, что Интернет-портал TMZ украл и опубликовал видеозапись, на которой запечатлено, как музыкант осыпает Тэйлор Свифт насмешками во время прослушивания её альбома 1989.', 'Вокалист 30 Seconds to Mars Джаред Лето проиграл судебный процесс против TMZ и Warner Bros. В конце 2015 года музыкант подал исковое заявление, в котором говорилось, что Интернет-портал TMZ украл и опубликовал видеозапись, на которой запечатлено, как музыкант осыпает Тэйлор Свифт насмешками во время прослушивания её альбома 1989.\nПозже Лето извинился перед певицей, сказав, что «она невероятно талантлива и является примером того, что человек может достичь».\nВидео было снято в доме Джареда оператором Найемом Мунафом. Лето подал иск о нарушении авторских прав после публикации этого материала, утверждая, что кадры были украдены.\nОднако судья окружного суда США заявил, что видео было снято на камеру Мунафа, и в это время он не работал на Джареда Лето, поэтому мог на законных основаниях делать с материалом всё, что хочет. Таким образом, в удовлетворении иска музыканту было отказано.', '/storage/images/1.jpg', 'article-1', 2, 1, NULL, NULL),
(2, 'Ритмичная стрельба под динамичный метал в свежем геймплее Metal: Hellsinger', 'На канале IGN появился 12-минутный геймплейный ролик динамичного ритм-шутера Metal: Hellsinger.', 'Судя по всему, игровой процесс записали со свежей демоверсии. В ролике главная героиня расправляется с ордами демонов под композицию Stygia, записанную группой Two Feathers при участии Алиссы Уайт-Глаз из Arch Enemy.\nMetal: Hellsinger — это шутер от первого лица с элементами ритм-игры, действие которого происходит в глубинах ада. От умения сражаться в унисон с музыкой будет зависеть сила атак главной героини.\nИгра порадует богатым арсеналом оружия, разнообразными локациями и оригинальными саундтреками метал-групп. А сюжет в игре озвучивает сам Трой Бейкер.', '/storage/images/2.jpg', 'article-2', 3, 2, NULL, NULL),
(3, 'Впервые во вселенной: Джуд Лоу сыграет в сериале Star Wars: Skeleton Crew', 'Джон Уоттс, режиссёр трилогии про Человека-паука с Томом Холландом, в ходе события Star Wars Celebration объявил, что летом начнутся съёмки его нового сериала. Он получил название Star Wars: Skeleton Crew, и главную роль в нём сыграет дважды номинант на «Оскар» Джуд Лоу.', 'Лоу впервые появится во вселенной «Звёздных войн», и пока что мы не знаем, в чём будет состоять его роль и чему посвящён сам сериал. Пока что доподлинно известно лишь, что его события разворачиваются после финала «Звёздные войны. Эпизод VI: Возвращение джедая», примерно одновременно с «Мандалорцем».\nИсполнительными продюсерами сериала Star Wars: Skeleton Crew выступают Джон Фавро и Дэйв Филони. Сценарием занят Кристофер Форд, один из сценаристов фильма «Человек-паук: Возвращение домой». Премьера сериала запланирована на 2023 год.', '/storage/images/3.jpg', 'article-3', 1, 1, NULL, NULL),
(4, 'Стартовали съёмки второго сезона «Вампиров средней полосы»', 'Авторы «Вампиров средней полосы» сообщили о начале съёмок второго сезона российского сериала с Юрием Стояновым про семью кровопийц для сервиса Start.', 'За сценарий отвечает автор первого сезона Алексей Акимов, однако режиссёр у продолжения новый — Дмитрий Грибанов, занимавшийся комедийной антиутопией «Два холма», которая показала лучший старт за 2022 год на сервисе.\nСюжет разворачивается летом, а в центре истории окажется цепочка загадочных убийств в Подмосковье, причём под подозрение снова попадают главные герои. Параллельно вампирам потребуется взять под опеку маленькую девочку Милу, которая выступает важным свидетелем — и за ней ведут охоту.\nКроме того, баланс между вампирами и их Хранителями в очередной раз может быть нарушен из-за прибавления в семье первых.', '/storage/images/4.jpg', 'article-4', 1, 1, NULL, NULL),
(5, 'Вероятно, PS5 Pro и новые Xbox Series могут появиться в 2023 или 2024 году', 'По данным польского издания PPE, на презентации TCL были упомянуты PS5 Pro и новые Xbox Series с релизом в 2023 или 2024 году.', 'По данным польского издания PPE, на презентации TCL были упомянуты PS5 Pro и новые Xbox Series с релизом в 2023 или 2024 году.\nСообщается, что в улучшенных консолях реализуют поддержку 8K и 120 Гц. Также во время презентации упомянули видеокарту AMD Radeon RX 7700 XT.\nРанее ютубер Moore\'s Law is Dead также упоминал о выходе PS5 Pro в 2023/2024 году. По его словам, новой консоли потребуется порядка 300 Вт энергии, и она будет рассчитана прежде всего на богатых геймеров.', '/storage/images/5.jpg', 'article-5', 3, 1, NULL, NULL),
(6, 'В сеть утёк трейлер фильма «Аватар: Путь воды»', 'В сети раньше времени появился трейлер продолжения «Аватара», которое получило подзаголовок «Путь воды».', 'В сети раньше времени появился трейлер продолжения «Аватара», которое получило подзаголовок «Путь воды». Сам ролик далеко не лучшего качества, а официально его наверняка выпустят в ближайшие дни — видео будут показывать перед началом «Доктора Стрэнджа: В мультивселенной безумия».\nБольшую часть ролика посвятили героям и красотам, пейзажам Пандоры, а также её обителям. При этом не обделили вниманием и людей и их технику, показав начало грядущего противостояния.', '/storage/images/6.jpg', 'article-6', 1, 1, NULL, NULL),
(14, 'Он улетел, но обещал вернуться — E3 должны провести в 2023-м', 'Выставка E3 пропускает 2022 год, уступая лучи славы Summer Game Fest Джеффа Кили (Geoff Keighley). Однако царствование SGF не продлится долго — организаторы E3 обещают вернуть ивент в следующем году.', 'Об этом рассказал Стэн Пьер-Луи (Stan Pierre-Louis), президент Entertainment Software Association (ESA), в беседе с The Washington Post. По его словам, в 2023 году E3 стоит ждать не только в онлайне, но и в живом формате.\r\n\r\nОн считает, что стримы хорошо справляются с охватом аудитории, но у публики созрело желание собраться, чтобы поболтать лично и увидеть друг друга. Несмотря на то, что игровые компании переключились на онлайн-трансляции, Пьер-Луи уверен — всегда найдётся место для выставки по старинке.\r\n\r\nЖурналисты также озвучили сведения, что проблемы с участниками у выставки начались из-за массового исхода компаний в собственные цифровые ивенты. Ведь так им не приходилось тратиться на дорогие поездки в Лос-Анджелес. В ответ на заявление Пьер-Луи ограничился фразой, что на все мероприятия в живом формате за последние три года повлияла пандемия COVID-19.\r\n\r\nНапомним, в 2020-м году E3 отменили совсем, а в 2021 году её провели только в онлайн-формате.', '/storage/images/01109.5HYbIoo.jpg', 'summer-game-fest', 3, 2, '2022-06-07 16:02:34', '2022-06-07 16:02:34');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Кино', 'movie', NULL, NULL),
(2, 'Музыка', 'music', NULL, NULL),
(3, 'Игры', 'games', NULL, NULL),
(4, 'Авто', 'auto', NULL, NULL),
(5, 'Общество', 'society', NULL, NULL),
(6, 'Здоровье', 'health', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(36, '2022_05_26_113819_create_categories_table', 2),
(37, '2022_05_26_174453_create_articles_table', 2),
(38, '2022_06_08_182451_create_reviews_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `mark` tinyint(4) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `article_id`, `mark`, `text`, `created_at`, `updated_at`) VALUES
(18, 2, 14, 10, 'Шикарная статья! Спасибо!', '2022-06-08 17:53:43', '2022-06-08 17:53:43'),
(19, 2, 14, 8, 'Полезная информация.', '2022-06-08 17:57:32', '2022-06-08 17:57:32'),
(20, 2, 14, 9, 'Замечательно!', '2022-06-08 17:58:24', '2022-06-08 17:58:24');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alex', 'zzzzzerro@gmail.com', NULL, '$2y$10$KbKB386VUyqblGHkX0Cy4OIXEKtSOlSoOx5XHlefwiuFKWk0vx2fu', 'kpljsH53eZzIIQHF70sLOpiXfYDLhIQiFkmAcYRF2UoO1zsjlDs19Y2mevcD', '2022-04-19 19:14:12', '2022-04-19 19:14:12'),
(2, 'User2', 'user2@gmail.com', NULL, '$2y$10$I9CyL67k7bT5PhsAG9C0C.owGrduoysg3oNPK.b1gxc00O/emz6Zy', NULL, '2022-05-28 12:36:44', '2022-05-28 12:36:44');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_article_slug_unique` (`article_slug`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_slug_unique` (`category_slug`);

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
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_article_id_foreign` (`article_id`);

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
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
