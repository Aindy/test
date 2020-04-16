-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2018 г., 16:31
-- Версия сервера: 5.6.34
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `z`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Islam', 'Dudaev', 'admin@zayedfund.com', 'cec776d1d50be955a0cadb53a823122ea97ed2ee82416895ad18987872c7db65f72cdf883ceeefa11ed7779e05d64a57'),
(2, 'Adam', 'Saparbiev', 'saparbiev@zayedfund.com', '9d7989b402e835c0571873811e0882ca6cd080c55e702a2e4453f3ae6ecd9a87936f130d5062cfe71581cb28eb9906ed'),
(3, 'Edil', 'Islamov', 'islamov@zayedfund.com', 'a2c3ba70a843c8eda430444d32c077161f1b1cca941edb2b46d38536994803ee819fc4eb77e555206b1667a7d73306d4');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Бизнес'),
(3, 'Политика'),
(4, 'События'),
(5, 'Объявления'),
(6, 'Истории успеха');

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `phone`, `email`, `website`) VALUES
(1, 'ООО \"Фонд имени Шейха Зайеда\"', '364000, Чеченская Республика, г. Грозный,\r\nПроспект А.А.Кадырова, дом 3/25,\r\nэтаж 13, секции 3,4', '+7 (8712) 29-10-10', 'info@zayedfund.com', 'www.zayedfund.com');

-- --------------------------------------------------------

--
-- Структура таблицы `industries`
--

CREATE TABLE `industries` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `industries`
--

INSERT INTO `industries` (`id`, `name`) VALUES
(3, 'Животноводство'),
(4, 'Производство'),
(5, 'Пищевая промышленность');

-- --------------------------------------------------------

--
-- Структура таблицы `map`
--

CREATE TABLE `map` (
  `map_id` int(11) NOT NULL,
  `map_x` float NOT NULL,
  `map_y` float NOT NULL,
  `proj_id` int(11) NOT NULL,
  `ind_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `map`
--

INSERT INTO `map` (`map_id`, `map_x`, `map_y`, `proj_id`, `ind_id`) VALUES
(1, 43.3315, 45.6951, 1, 1),
(2, 55.66, 37.48, 1, 1),
(3, 55.65, 37.42, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `category` int(10) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `date`, `category`, `image`) VALUES
(1, 'Приветствие Хусейна Новейса', '<p>Правительства ОАЭ и Российской Федерации уделяют особое внимание установлению и развитию отношений, отвечающих интересам обеих стран и способствующих экономическому развитию во имя сохранения мира и стабильности в регионах. Одним из наиболее значимых проектов, реализуемых в рамках межгосударственного сотрудничества ОАЭ и Российской Федерации, является создание в Чеченской Республике Фонда имени Шейха Зайеда по поддержке предпринимательства и инноваций.\r\n</p><p>\r\nМы высоко ценим честь, оказанную нам Его Высочеством Шейхом Мухаммадом Бин Зайедом Аль Нахайяном, Наследным Принцом Абу-Даби и заместителем Главнокомандующего вооруженных сил ОАЭ. По личному поручению Шейха Мухаммада Фонда Халифа по поддержке предпринимательства (Абу-Даби, ОАЭ) учредил в городе Грозном Фонд Зайеда, призванный стать ключевым элементом системы содействия предпринимательской деятельности для достижения устойчивого социально-экономического эффекта в Чеченской Республике посредством оказания целевой поддержки малому и среднему бизнесу.\r\n</p><p>\r\nХотелось бы подчеркнуть, что участие Фонда Халифа отнюдь не ограничивается предоставлением финансовых средств. В своей операционной деятельности Фонд Зайеда полагается на многолетний опыт экспертов Фонда Халифы, в основе которого лежат четыре основных принципа: обучение, консультирование, финансирование и административная поддержка. Сотрудники чеченского офиса прошли специальное обучение в Абу-Даби в головном офисе Фонда Халифа, где ознакомились с действующими процессами и методикой работы с предпринимателями, и продолжают тесно взаимодействовать и консультироваться со своими эмиратскими коллегами в ходе налаживания своей деятельности.\r\n</p><p>\r\nМы рассчитываем, что Фонд Зайеда в Чеченской Республике сможет профинансировать порядка 3 000 проектов на общую сумму более 300 миллионов долларов США в течение ближайших десяти лет, что позволит создать почти 70 000 рабочих мест для жителей Республики.\r\n</p>', '2017-05-09 15:46:28', 4, 'newsNowais.jpg'),
(2, 'Приветствие Хасана Хакимова', '<p>Стимулирование роли малого и среднего бизнеса в развитии экономики Чеченской Республики является важнейшей задачей, стоящей перед руководством нашего региона. Именно развитие малого и среднего бизнеса способно обеспечить социально-экономическую стабильность в Чеченской Республике на долгие годы.\r\n</p><p>\r\nМы очень рады, что благодаря усилиям Главы Чеченской Республики, Героя России Рамзана Ахматовича Кадырова, нам удалось привлечь к решению этой задачи наших партнеров из ОАЭ и при участии Фонда Халифа создать в Чеченской Республике Фонд имени Шейха Зайеда по поддержке предпринимательства и инноваций.\r\n</p><p>\r\nСоветом директоров Фонда, в состав которого входят четыре представителя эмиратского Фонда Халифа, утверждена стратегия его развития и определены направления деятельности на ближайшие пять лет. Предлагаемые продукты финансирования учитывают потребности местного бизнеса и позволяют предпринимателям получить финансирование по сниженной процентной ставке в размере 11% годовых, со льготным периодом до 12 месяцев и гибким требованиям к залоговому обеспечению. Хотелось бы особо отметить, что Фонд Зайеда станет одним из пионеров в сфере предоставления предпринимателям Чеченской Республики доступа к исламским финансовым продуктам по принципу партнерского участия.\r\n</p><p>\r\nОтдельного внимания заслуживает обучающая программа Фонда, являющаяся неотъемлемой частью стратегии его деятельности. Для предпринимателей будут организованы специальные курсы по всем ключевым направлениям, необходимым для успешной организации и ведения бизнеса.\r\n</p><p>\r\nВ целом, мы уверены, что деятельность Фонда будет успешно интегрирована в экосистему поддержки предпринимательской деятельности в Чеченской Республике и позволит значительно увеличить долю малых и средних частных предприятий в общем объеме экономической деятельности региона.\r\n</p>', '2017-05-10 12:25:23', 4, 'newsKhakimov.jpg'),
(3, 'Гарантийный фонд Чеченской Республики', '<p>16 октября 2017 года подписано соглашение о сотрудничестве между ООО «Фонд имени Шейха Зайеда» и некоммерческой организацией «Гарантийный фонд Чеченской Республики».</p>\r\n<p>Наличие соглашения с НО «Гарантийный фонд Чеченской Республики» позволит клиентам ООО «Фонд имени Шейха Зайеда», имеющим недостаточную залоговую базу, привлечь поручительство Гарантийного Фонда в размере до 70% от требующегося обеспечения.</p>\r\n<p>НО «Гарантийный фонд Чеченской Республики» создан в соответствии с Распоряжением Правительства Чеченской Республики № 323-р от 05.09.2011 года с целью предоставления поручительств по обязательствам (кредитные договоры, договоры займа, договоры лизинга) субъектов малого и среднего предпринимательства и организаций, образующих инфраструктуру поддержки субъектов малого и среднего предпринимательства Чеченской Республики.</p>\r\n<p>Официальный сайт: <a href=\"http://www.gf-chr.ru\" target=\"_blank\">www.gf-chr.ru</a></p>', '2017-10-16 14:30:00', 4, 'article3.jpg'),
(4, 'Вечерний чай c Фондом Зайеда', ' <div class=\"embed-responsive embed-responsive-16by9\">\r\n    <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/C2rRiypTKHk\"></iframe>\r\n</div>\r\n<br>\r\n<p>Телепередача \"Вечерний чай\" на ГрозТРК с представителям Фонда имени Шейха Зайеда от 9 октября 2017 г.\r\n</p>', '2017-10-24 00:00:00', 4, NULL),
(5, 'Заседание Кредитного Комитета', '<p>9 ноября 2017 г. состоялось очередное заседание Кредитного Комитета ООО «Фонд имени Шейха Зайеда», по итогам которого было одобрено 5 проектов по созданию и расширению бизнеса для последующего финансирования. В число одобренных проектов вошли бизнес-идеи по созданию производства продуктов питания, развития сервиса по доставке еды, дистрибуции товаров.</p>\r\n<p>Стоит отметить, что авторы проектов в ходе подготовки бизнес-планов получили возможность обрести необходимые навыки и компетенции посредством участия в тренингах, организованных Фондом на бесплатной основе.</p>\r\n<p>Участие в реализации подобных начинаний соответствует основной миссии Фонда – содействие эффективному развитию предпринимательства в Чеченской Республике. Желаем предпринимателям в дальнейшем успеха и плодотворной деятельности!</p>                                                          \r\n<p>Дала аьтто бойла массера!</p>', '2017-11-21 11:50:03', 4, 'meeting1.jpg'),
(6, 'Хакатон: Зима-2017', 'Молодежные мероприятия, проводимые на площадке Технопарка Чеченского государственного университета, становятся доброй традицией.\r\n<p>\r\nФонд имени Шейха Зайеда по поддержке предпринимательства и инноваций выступил одним из титульных спонсоров Всероссийского IT-конкурса «Хакатон: Зима-2017», посвященного открытым данным и технологиям умного дома.\r\n<p>\r\nПрограмма Хакатона была очень насыщенной – непосредственному выполнению заданий предшествовала двухдневная образовательная программа с привлечением экспертов. Затем команды, состоящие из представителей высших учебных заведений Чеченской Республики и даже общеобразовательных школ, и других IT-энтузиастов, получили возможность найти и предоставить решения на заданные кейсы в результате 48 часов непрерывного коддинга. <p>\r\nОпытное и очень строгое жюри собралось на чемпионате для того чтобы дать оценку представленным решениям кейсов. В составе жюри от лица Фонда имени Шейха Зайеда принял участие Эдил Исламов – Директор Департамента по развитию потенциала предпринимателей.  <p>\r\nПо результатам оценки жюри второе место было присуждено команде «Bionic» в номинации «Технологии умного дома». <p>\r\nПервое место в номинации «Технологии умного дома» получила команда «Power Rangers», состоящая из студентов ГГНТУ, которая, по мнению жюри, наиболее успешно справилась с выполнением условий кейса и сумела продемонстрировать практически готовое к использованию приложение для управления «Умным домом».  <p>\r\nПервое место в номинации «Открытые данные» досталось команде «Intocode», которая сумела не только выполнить условия задания, но и оформить своё решение в удобный для пользования интерфейс. <p>\r\nОтдельное внимание стоит уделить тому, что в Хакатоне активное участие приняли школьники, представленные двумя командами. Команда «Next Generation», состоящая из учащихся ГБОУ «Математическая школа №1 имени Х.И.Ибрагимова», также представила действующее приложение по «Умному дому», за что получила приз зрительских симпатий и денежное вознаграждение.   <p>\r\nФонд имени Шейха Зайеда выражает отдельную благодарность Технопарку ЧГУ и другим спонсорам мероприятия rimgroup. <p>\r\nПоздравляем всех победителей и желаем удачи и успехов в дальнейших начинаниях всем участникам Хакатона!\r\n', '2017-12-26 17:28:45', 4, '20171226174128--mg-1459.jpg'),
(7, 'Заседание Кредитного Комитета', '20 декабря в Фонде имени Шейха Зайеда прошло очередное заседание Кредитного Комитета, на котором было рассмотрено 9 заявок на предоставление заемного финансирования от Фонда.\r\nПо результатам заседания 6 заявителей успешно защитили свои бизнес-идеи, на реализацию которых они смогут привлечь финансирование от Фонда.\r\nВ число одобренных вошли бизнес-проекты по открытию сети ресторанов быстрого питания, производству строительных материалов и дистрибуции товаров бытовой химии.\r\nУчастие Фонда в реализации бизнес-идей не ограничивается финансированием. Заявители смогли пройти бесплатное обучение на тренингах по бизнес-планированию, организованных Фондом на базе Технопарка ЧГУ, и в дальнейшем смогут получать консультационную поддержку от закрепленных за их проектами бизнес-консультантов.\r\nМы желаем успехов и удачи нашим клиентам в предстоящей деятельности!\r\nДала тIаьхье беркате йойла, Дала аьтту бойла!    ', '2017-12-27 18:04:04', 4, 'photo-2017-12-27-17-19-54.jpg'),
(8, 'История Хью Эверетта Мура – изобретателя бумажных стаканчиков', '<b><i>Разовые стаканчики, изготовленные из полимеров, стали настоящей бедой – их производят миллиардами, утилизировать их перерабатывающая промышленность не успевает, и они засоряют планету. Самое время вспомнить об их бумажных собратьях, а заодно и их изобретателе, мистере Хью Эверетте Муре. Человек этот стал богатым благодаря не только самому продукту, введенному им в обиход человечества, но и по причине удачно сложившейся для него обстановки, обусловившей рыночную конъюнктуру. Это – типичный пример человека, оказавшегося в нужное время в подходящем месте и вовремя сформулировавшего удачную бизнес-идею. К тому же Мур стал основоположником целой новой отрасли индустрии, оборот которой измеряется многими миллиардами долларов.</i> </b>\r\n<p>\r\n<b><h4>Путь в бизнес</h4></b>\r\n<p>\r\nО юных годах Хью Мура известно немного, в частности то, что он был канзасским фермером, в начале XX века решившим отправиться поближе к восточному побережью США – в Бостон (Массачусетс), город, развитый в промышленном и научном отношении и обещавший шансы на лучшую долю. Он даже выдержал экзамены в Гарвард и устроился журналистом в одно из местных периодических изданий, что свидетельствует о незаурядных способностях и высоком интеллекте будущего изобретателя и бизнесмена. Благодаря репортёрским гонорарам Хью мог оплачивать учёбу, и вполне возможно, что через пару-тройку лет стал бы неплохим юристом с престижным дипломом, но тут в дело вмешался случай. Дело в том, что у Мура в Канзасе был хороший приятель, звали которого Лоуренс Луэллен, и он пытался создать автомат, продающий газированную воду. Описываются дальнейшие события разными источниками несколько противоречиво, но бесспорен тот факт, что ....\r\n<p>\r\n <a href= \"http://telegra.ph/Istoriya-Hyu-EHveretta-Mura--izobretatelya-bumazhnyh-stakanchikov-11-20\">Читать далее>></a></p>', '2018-01-26 15:23:18', 6, '8.jpg'),
(9, 'Как американец и русский в Туле открыли совместный бизнес.', '<b><i>В 1990-е в США были очень популярны российские студийные микрофоны,  но потом они исчезли с рынка. Солист группы Brazzaville Дэвид Браун и бывший сотрудник компании Mars Павел Баздырев решили восстановить статус-кво и четыре года назад основали в Туле производство микрофонов. Сегодня продукция марки «Союз» успешно продается в США, Германии, Франции и других странах, на тульских микрофонах записаны последние альбомы Coldplay и Radiohead. Выручка компании за прошлый год — $270 тысяч (около 16 млн рублей). Дэвид Браун и Павел Баздырев рассказали Inc., как вывозили за рубеж товар в ручной клади, случайно нашли инвестора в вагоне-ресторане и доказали налоговой, что их предприятие — не фейк. </b></i>\r\n<p>\r\n<b><h4>Сорванная сделка</b></h4>\r\n</p>\r\n<p>\r\nДэвид Браун и Павел Баздырев познакомились в 2013 году в Краснодаре. Баздырев, давний поклонник Brazzaville, после концерта подошел к Брауну и пригласил сыграть в его родной Туле.\r\n</p>\r\n<p>\r\n— Я его сразу спросил: это там, где делают микрофоны «Октава»? — вспоминает Дэвид. — Я много лет использовал эти микрофоны советского производства для записи альбомов и сразу встрепенулся: «В Тулу? Да ты шутишь, вот это совпадение!» \r\n</p>\r\n<p>\r\nБаздырев организовал и концерт, и экскурсию на завод «Октавы». Узнав, что предприятие недавно потеряло доступ к американскому рынку, он пошутил: «Может, стоит помочь этим микрофонам вернуться в США?»\r\n</p>\r\n\r\n<p>\r\n <a href= \"https://incrussia.ru/fly/prekrasen-nash-soyuz-kak-amerikanets-i-russkij-delayut-v-tule-mikrofony-dlya-rok-zvezd-na-oborudovanii-kalashnikova/\">Далее>></a></p>', '2018-02-02 11:41:49', 6, 'obl-1.jpg'),
(10, 'Наши в Долине', '<b><i>Трое российских разработчиков создали бота Statsbot и привлекли $2 млн инвестиций в США. Первое время они жили в хостеле и экономили на еде, теперь отказывают инвесторам, предлагающим слишком много денег. </b></i>\r\n<p>\r\n«Ты говоришь, что ты русский хакер и приехал в США учиться зарабатывать деньги? — рассмеялся офицер-пограничник на паспортном контроле. — Ну проходи, тут много таких», — вспоминает сооснователь чат-бота Statsbot Михаил Меланьин о том, как он с облегчением пересек границу США.\r\n</p>\r\n<p>\r\nЕго ответы на стандартные вопросы были действительно подозрительными. Жить он собирался в «хакер-хаузе», хостеле для программистов, а денег с собой имел куда меньше, чем амбиций, — у него с партнерами Артемом Кейдуновым и Павлом Тиуновым было $30 тысяч на троих. Кейдунову и Тиунову достались менее веселые пограничники — опрашивали несколько часов, но все-таки пустили. Офицеры таможни в Калифорнии привыкли к странным гикам с акцентом.\r\n</p>\r\n<p>\r\n <a href= \"http://www.forumdaily.com/nashi-v-doline-kak-najti-investorov-v-ssha/\"> Читать далее>></a></p>', '2018-02-09 14:29:37', 6, '9349a98fa7b62ebab6b61370dbddc505.jpg'),
(11, 'Заседание Кредитного Комитета 4', '14 февраля 2018 года в Фонде имени Шейха Зайеда состоялось очередное заседание Кредитного Комитета, на котором было рассмотрено 13 заявок на предоставление заемного финансирования от Фонда Зайеда.\r\n<p>\r\nКредитный комитет является уполномоченным органом Фонда, который проводит анализ и оценку потенциальных заемщиков на основе имеющейся у него информации, включая как предоставленную потенциальным клиентом, так и свои собственные информационные базы.\r\n</p>\r\nНа этом заседании было одобрено 9 заявок на общую сумму свыше 23 млн рублей. В число одобренных вошли такие проекты как: производство и оптовая торговля молочными продуктами, выращивание помидоров в теплицах, разведение КРС и производство молока, производство и реализация жареного ролл-мороженного, автопогрузчики по договору купли-продажи с условием рассрочки платежа, разведение КРС и производство молока, производство и реализация меда, цех по производству изделий из дерева, открытие пекарни и магазина розничной продажи хлебобулочных изделий.\r\n</p>\r\n<p>\r\nВсе эти заявители прошли бесплатные тренинги по разработке бизнес-плана на базе Технопарка ЧГУ, организованные Фондом Зайеда. \r\nФонд продолжает осуществлять финансирование малых и средних предприятий для резидентов Чеченской республики и консультирование по вопросам финансовой поддержки. \r\n</p>', '2018-02-20 16:56:22', 4, 'whatsapp-image-2018-02-20-at-16.54.02.jpeg'),
(12, 'Совместима ли концепция здорового питания с вендинговым аппаратом', '<p><i>Здоровый образ жизни и здоровая еда - этого мы все хотели бы на словах, давно позабыв вкус не пересоленной-переперченной-пересахаренной еды, не приправленной майонезом и сильно поджаренной или замаринованной.</i>\r\n</p>\r\n<p>\r\nМария Колосова и Дмитрий Пронин познакомились, работая над девелоперским проектом. Колосова в качестве приглашенного консультанта пришла в компанию «Уралсиб», в которой Пронин занимал одну из топовых позиций. «Мы сразу поняли, что у нас много общего», – вспоминают партнеры.</p>\r\n<p>\r\n<b><h4>Война майонезу и кетчупу</b></h4>\r\nУ обоих была мечта: построить бизнес на идеях здорового образа жизни. Колосова бегает марафон, соблюдает принципы правильного питания. В 2008 г. она могла считать себя вполне состоявшимся человеком – возглавляла собственный консалтинговый центр «Стимул», растила четверых детей. Пронин тоже был увлечен темой здорового образа жизни, занимался спортом, стремился к самореализации в бизнесе.\r\n\r\nДевелоперский проект в «Уралсибе» свернули из-за кризиса. И тогда партнеры разработали несколько идей для совместного проекта – ...\r\n<p>\r\n <a href= \"https://www.vedomosti.ru/management/articles/2012/08/10/syrnik_protiv_gamburgera\"> Читать далее>></a></p>', '2018-02-22 10:55:44', 6, 'whatsapp-image-2018-02-21-at-16.42.26.jpeg'),
(13, 'Взгляд на проблему мусора через очки. Не розовые', 'От пластиковой бутылки до модных солнцезащитных очков. Бельгийский стартап, основанный в Антверпене, даёт вторую жизнь отходам из пластика. Он также хочет изменить отношение людей к экологичному развитию планеты.\r\n<p><i>\r\nКогда Себастьян де Нёбаург, молодой инженер из Бельгии, узнал, что к 2050 году пластикового мусора в океане будет больше, чем рыбы, то, по его собственным словам, «возмутился и решил поднять бунт против сложившегося порядка вещей». Бунт нашел свое воплощение в стартапе по переработке пластиковых отходов W.R.YUMA. Бутылки, одноразовые стаканчики, пакеты и даже автомобильные детали превращаются в модные солнцезащитные очки, которые, в свою очередь, также можно сдать на переработку.</i></p>\r\n<p>\r\n <a href= \"http://www.nb-forum.ru/business/foreign-experience/ochki-17.html\"> Читать далее>></a></p>\r\n', '2018-02-26 11:07:54', 6, 'whatsapp-image-2018-02-26-at-10.59.32.jpeg'),
(14, 'Онлайн-сапожник: как студент-инженер создал «итальянский» обувной бренд', '<p><b><h4>22-летний Махач Хайбаев организовал в Санкт-Петербурге мастерскую обуви ручной работы Migliori. За год продажи готовых и сделанных на заказ туфель принесли 24 млн руб. выручки\r\n</h4></b></p>\r\n<p><b>Обувные страсти</b></p>\r\n<p>\r\n«Я был уверен, что Migliori — итальянская марка, качество не отличается абсолютно. Вы для меня открыли происхождение бренда», — удивляется стилист и дизайнер одежды Гоша Карцев. У Гоши большой размер ноги, и найти готовую обувь, которая бы хорошо сидела, бывает непросто. Поэтому он предпочитает индивидуальный пошив и носит Migliori. Вообще-то на главной странице сайта Migliori написано «сделано в Санкт-Петербурге», но стилист, похоже, не обратил на это внимание.</p>\r\n<p>\r\nСтудент-инженер Махач Хайбаев совместил ремесленное производство обуви и онлайн-конструктор, который позволяет собрать свою пару из 50 тыс. вариантов. Мужские туфли продаются по 20 тыс. руб. за пару, бренд успешно конкурирует с известными итальянскими марками.\r\n</p>\r\nХайбаев учился в Санкт-Петербургском национальном исследовательском университете (ИТМО) на инженера телекоммуникационных систем, но два года назад бросил: настоящим увлечением Махача всегда была обувь. Он до сих пор вспоминает сандалии, изготовленные вручную, которые ему ....\r\n<p>\r\n <a href= \"https://www.rbc.ru/own_business/08/09/2016/57d118f79a7947c455ede64al\"> <h4>Читать далее>></h4></a></p>\r\n<p>\r\n<b>Автор:</b> <i>Ильмира Гайсина.</i>\r\n</p>\r\n\r\n', '2018-03-01 11:21:52', 6, '754733435556699.jpg'),
(15, 'Топ-бренды не могут заработать в Африке из-за тонн фэйка и нищеты. Но один студент их уделал.', '«Языковые барьеры, культурные различия, коррупция, очень плохой интернет – периодически нам сложно поддерживать контакт с партнерами. И это только малая часть проблем», – рассказывает Sports.ru Люк Уэсткотт.\r\n\r\n<p>В 2014 году Люк вложил семь тысяч долларов в собственный бренд спортивной одежды AMS (African Manufacturing Solutions) и зашел на рынок Южного Судана – самой молодой страны мира, которая еще не остыла после гражданской войны, и очень необеспеченной – по данным ООН, от недоедания там страдает 40% населения (4,9 млн человек). При этом, по данным Nielsen Company (очень авторитетная компания-измеритель, предоставляющая данные и маркетинговую информацию), Африка – самый вовлеченный футбольный рынок в мире, но крупные спортивные бренды игнорируют это. Невероятные 76% населения Африки к югу от Сахары одержимы футболом. В Европе этот показатель на уровне 57%, в Южной Америке – 69%, на Среднем Востоке – 67%.</p>\r\n<p>\r\n</p>\r\n<p><b><h4>Почему топ-бренды не зарабатывают на таком перспективном рынке?</p></b></h4>\r\n<p>\r\n</p>\r\n<p>\r\nNike, adidas и Puma сотрудничают только с видными африканскими сборными типа Египта, Нигерии, Ганы и Марокко.\r\n</p>\r\n<p>«Крупный бренд оценивает конкурентоспособность сборной – будет ли команда квалифицирована на крупные турниры? насколько хороши ее футболисты? – а затем предлагает спонсорство, которое включает в себя бесплатные комплекты формы и дополнительную денежную выплату. Они могут не получать прибыль с продаж, но получат выгоду от маркетинга и продвижения бренда», – объясняет Люк.</p>\r\n\r\n<p>Например, в сборную Габона (92-е место в рейтинге ФИФА, на чемпионате мира ее не будет) вкладывается Puma – из-за Обамеянга. Остальная Африка к югу от Сахары – нестабильные рынки с политической и экономической неопределенностью.</p>\r\n\r\n<p>«Adidas, Nike и Puma представляют ряд африканских сборных, но они не могут попасть на внутренние рынки просто потому, что их продукция недоступна для большинства покупателей», – говорится в свежем исследовании Люка.</p>\r\n\r\n<p>В Африке очень много фэйка – это обусловлено отсутствием ценовой гибкости со стороны брендов, они не хотят подстраиваться под конкретные страны. Например, на сайте adidas все джерси продаются по одной цене: оригинал – $130, реплика – $90. Бренды не учитывают благосостояние конкретной страны: например, джерси сборной Германии (при средней зарплате – 3703 евро) обойдется немцу в ту же сумму, что и египетскому болельщику (при средней зарплате не более 300 евро в месяц) майка сборной Египта.</p>\r\n\r\n<p>По этой причине внутренние рынки наводнила контрафактная продукция. В начале апреля марокканская газета Al Maasae сообщила, что местная федерация и представители adidas отложили выпуск формы сборной Марокко к чемпионату мира из-за гарантированного наводнения страны подделками. А так можно хотя бы смягчить удар.</p>\r\n\r\n<p>Нужно понимать, что черный рынок контрафактных джерси – проблема, объем которой растет ежегодно, и которую не уничтожить даже в Европе. Отчасти это связано с тем, что растут объемы сделок  в интернете. Торговца на рынке можно арестовать, а продукцию изъять, но что делать с кучей анонимных продавцов, которые продают фэйки через Amazon, eBay, Alibaba и даже мессенджеры.</p>\r\n\r\n<p><b><h4>А как это австралиец хочет зарабатывать? Он что, умнее топ-брендов?</p></b></h4>\r\n<p>\r\n«Единственный способ конкурировать с фэйками – просто продавать свои футболки по той же цене, что и фэйки. Проще говоря, зачем клиенту покупать фэйк, если они могут купить настоящий майку AMS по той же цене? В Южном Судане мы выиграли конкуренцию у фэйковых джерси, используя эту модель», – отвечает Люк.</p>\r\n<p>\r\nБизнес-план он написал в 18 лет (в 2013-м), в последнем классе школы, потом поступил на бизнес-курс топового технологического университета Австралии (RMIT University) и приступил к делу.</p>\r\n<p>\r\nСуть плана проста – ворваться на уничтоженные внутренние рынки и заработать на них. AMS бесплатно снабжает формами сборные, но в основе бизнеса лежит и ориентация на людей – джерси должны продаваться по доступной для местных цене. Средняя цена на сайте AMS – $45. Сборная Сьерра-Леоне, занимающая 102-е место в рейтинге ФИФА, – топовый партнер бренда. Джерси всех стран и клубов, с которыми сотрудничает AMS (сейчас таких команд 27), можно приобрести на сайте с доставкой в любую точку мира.</p>\r\n<p>\r\nВ 2014 году Уэсткотт обозначил три сборные с наибольшим потенциалом продаж (Южный Судан, Сомали и Эритрея). Потом он сделал концепт формы и наладил контакт: с президентом Федерации футбола Южного Судана, например, он связался в фейсбуке и договорился об отправке первой партии. Игрокам и представителям Федерации понравилась форма, и они заключили контракт.  \r\n</p>\r\n<p>«На те партии пошли деньги, заработанные на eBay, и сбережения после подработок в магазине спорттоваров. Первыми командами, которым мы отправили форму, были Эритрея и Южный Судан, и мы потратили около 7000 долларов – все, что мы зарабатываем с тех пор реинвестируется в расширение бизнеса. Сейчас меня, на самом деле, не очень интересует прибыль, поскольку мы все еще тестируем бизнес-модель на внутренних рынках Африки, но я определенно вижу огромные возможности здесь», – рассказал Люк.</p>\r\n<p>\r\n <a href= \"https://www.sports.ru/tribuna/blogs/laprimeranotes/1684135.html\"> <h4>Читать далее>></h4></a></p>\r\n<p>\r\n<b>Автор:</b> <i>Богдан Баёв.</i>\r\n</p>', '2018-05-07 14:46:57', 6, 'rue30ec46d476.jpg'),
(16, 'Процесс подачи заявки', ' <div class=\"embed-responsive embed-responsive-16by9\">\r\n    <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/7SaD5QBcI0M\"></iframe>\r\n</div>\r\n<br>\r\n<p>Процесс подачи заявки от бизнес-тренера Магомеда Алиева\r\n</p>', '2018-10-10 11:07:24', 5, NULL),
(17, 'Разработка бизнес плана', ' <div class=\"embed-responsive embed-responsive-16by9\">\r\n    <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/qgpAs3B2dCo\"></iframe>\r\n</div>\r\n<br><p>Разработка бизнес плана от бизнес-тренера Магомеда Алиева</p> ', '2018-10-10 11:44:08', 5, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `industry` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `title`, `content`, `date`, `industry`, `image`, `latitude`, `longitude`) VALUES
(1, 'Профинансированный проект', 'ASfsdfsdfsdf', '0000-00-00 00:00:00', 3, '', 43.3315, 45.6951),
(2, 'Пекарня', 'Открылась пекарня', '2018-10-30 22:00:11', 5, '', 43.3549, 45.6922),
(3, 'Завод', 'Первый завод по производству', '2018-10-30 22:00:42', 4, '', 43.295, 45.7416),
(4, 'Alv\\', 'Alvi prohect', '2018-11-05 01:44:00', 3, '', 43.3253, 45.6886),
(5, 'Ayndi', 'myu posojdhf;jsa hdgfjshd gfshadgfj,hzsdf jh', '2018-11-05 17:24:11', 4, '', 43.3253, 45.711);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`map_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `map`
--
ALTER TABLE `map`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
