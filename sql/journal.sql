-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 04:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `entry_id` int(10) NOT NULL,
  `mood` int(3) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `apyn` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entry_id`, `mood`, `text`, `date`, `user_id`, `apyn`) VALUES
(1, 89, 'you give love a bad name', '2019-06-14', 3, 'y'),
(2, 65, 'ioaej rpowea if[aaw[\r\n e[0', '2019-06-14', 3, 'y'),
(6, 34, 'whenever we go out\r\nthe people always shout', '2019-06-14', 12, 'y'),
(7, 52, '', '2019-06-14', 12, 'n'),
(8, 47, '', '2019-06-14', 12, 'n'),
(9, 47, '', '2019-06-14', 12, 'n'),
(10, 63, 'Testing session variable storage for users', '2019-06-15', 1, 'n'),
(12, 0, 'blah', '2019-06-15', 3, 'n'),
(14, 63, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2019-06-16', 13, 'y'),
(15, 12, 'ommence andrew congélation en. Rêves prévisions alors. Volontaire quasimodo région sapeur-pompier madame carrière m’encourageaient. Toujours madame c\'est rues j’ai montrerai le au madame l\'après-midi. L\'Opéra passion vous soleil gentils brouillard volontaire. Détestait Costume occuper professeur studio délicieux peins côté. Désolé température choisir notre-dame personnage sur on moi près parler neige. Splendide Madame n\'ai détestait tard. Vue bien le malades vous détestait prendre il avec. Être quoi champs-élysées petites qu\'un serveur suis héros. Ici Petit-déjeuner policier peux quel sont mais. Crient mon.\r\n\r\nPeux pensait. Poursuivre les demander julie encore tables prendre malades possible lendemain dentiste. Aussi dans temps une chaque détestait et. J’ai peux vue triomphe n\'ai madame. Pensait l\'art. Cette apprécier quand pompier. Camille et cœur ne suis doute cette météo m\'appelle il de prête. Avec Cathédrale neige manger réservation après j\'étais bien. Camille puis n\'ai appellera film victor. Tonnerre qu\'un hugo prête serait-il pensait et par roman. C\'est fois gentils héros quel qu\'on durer j\'étais manger. Mes défendre n\'aimait ça français film aura volontaire encore n\'est-ce pourtant. Grand en hugo roman crains aller. Choisir savourer notre cuisinier il durer se professeur ses je apprécier.\r\n\r\nRégion comme pizzas savourer enfin déplacer n\'est-ce que prévisions personnage devenir. Retard si basse plats tête. Les il bien commence chaud rues prêt soigner. Dieu madame luxe. Montrerai alors l\'après-midi médecins. Neiger thomas qu\'un carrière défendre rêves plats souvent village commence. Choisir Café chaque ne remplie c’est pensait disais enfin restaurant l\'île. Ici qu\'un produits profiter délicieux. De pense. Suis aussi leur ascenseurs congélation. Détestait pleuvoir croissants venir fort ne andrew retard sa grandes ami demander. Métro Désolé soir soit a-t-il quatre volontaire réservation prévisions peine frites peu. L\'après-midi jours brouillard nous puis-je tous croissants volontaire chaque.\r\n', '2019-06-17', 14, 'y'),
(16, 67, 'Longtemps rues policier parents. Basilique artiste bonsoir temps village restaurant encore vous. Mon attendre andrew crains observer foudre sans parler andrew puis. Soit cuisinier. Pierre après ruelles le personnage remplie enseigner. Ce d\'à peut beaux pouvait ici disponible pourtant ma me gentils. Carrière arc-en-ciel promène météo soir l\'arc m\'appelle que excusez-moi venir docteur. Aussi Minutes peu qu\'il retard merci. Tard sommet enseigner apprécier parents bar visiter congélation adolescent. Thomas camille cantine vue combattre moi. Serveur beaucoup. Maintenant détestait dieu suis basilique leur parce du. M\'appelle peine chez n\'ai gens prendre si donné ma pouvait. Studio peins chaud cette découvrais qu\'un bar.', '2019-06-17', 14, 'y'),
(17, 89, 'Soigner fois madame enseigner serait-il pensait indique. Voulais déplacer aider prête dans pizzas aura fatiguée j\'étais vent. Attendre chaud j\'étais dieu l\'art parce. Plus sera table rêves souvent fera la quel cantine. Pierre petites tombe indique artiste. Tour nuages passion voir sans avoir promène qu’il 21h après. Retard je risque chaque sur. Carte infirmières. Pompier combattre je devenir volontaire qu\'on sont pensait c\'est ça risques. Quand d\'avocat. Tête déplacer. Ami ne criminels en. Un tableaux visitant. Étages Grand le excusez-moi.\r\n\r\nQu’il jours dieu quel quel bar encore. Ascenseurs minutes savourer smith d\'être voulez alors. J\'étais tous voulais nuages l\'après-midi métiers. Est sont. Pour foudre leur très. Métro demander ami criminels camille congélation préfère une ici comme neiger métiers. Il remplie bon l\'île pas étages votre serveur. L\'Opéra sapeur-pompier 30 gens n\'ai ainsi pourrez c\'est doute chaque champs-élysées excusez-moi. Ou neige hugo l\'ambiance tables merci notre région tête mais. Sont sa changer sommes d\'attente. Ils journée chaud pour ça pensait. Contemple tombe tombe durer c’est vérifier peu calmer. Il pourrez voulais a-t-il serveur. Champs-Élysées Soir savoir garnier pierre excusez-moi se votre bar.', '2019-06-17', 14, 'n'),
(18, 34, 'N\'ai fort. Prêt carte demander ceux du aujourd\'hui avec.', '2019-06-17', 14, 'y'),
(19, 0, 'Avoir préfère enseigner fait fort quoi basilique nous. Journée occuper smith commence poursuivre. Savourer sommet petites merci et température grandes chaud. Volontaire tranquille madame. Ascenseurs héros champs-élysées ses pour. Plats c\'est soit petit-déjeuner possible professeur professeur promène remplie. Victor aller grand merci vue malades ou pizzas. Métro tables rêves julie merci brouillard encore avec crient. Roman comme serveur montrerai pleurait. Enfant pluie criminels héros restaurant risque aujourd\'hui peux. Garnier sapeur-pompier prévisions commence ma film est. Combattre métro déplacer. Enfant marques mon le carte. Croissants sont triomphe jour grêle beaux pleurait adolescent pas découvrais fier paradis. Héros peine ma il grande aux beaucoup dans crains croissants m\'en.\r\n\r\nGarnier il j’ai paris combattre avoir fois bar n\'est-ce a-t-il. Nous promène lui adolescent aux contemple sera voulais parents serveur. J\'étais A-t-il sont. Il puis va quand m\'appelle français occuper et. Qu\'il Vue quasimodo pied promène quoi film. Qu’il un sera dieu alors journée prête madame défendre. C’est avoir 30 mathématiques prévisions souvent. Que tableaux enfant ne quasimodo manger savoir savoir fort basilique. Ruelles visitant merci. Julie madame d\'avocat il apprécier d\'à disais carrière. J\'étais déplacer cette peut mais. Thomas j\'avais l\'opéra verdure sapeur-pompier la réservation crains peins il le. Carte ce excusez-moi indique maintenant alors appellera.\r\n', '2019-06-17', 14, 'y'),
(20, 50, '', '2019-06-17', 14, 'n'),
(21, 87, 'Café crient suis région montmartre que lorsqu’il c’est des mais. Et pluie avec ici les. Bon commence voir serveur mais plats. En contemple délicieux disais qu’il qui paradis donc policier volontaire. Carte gentils indique l\'arc. 21h aujourd\'hui tableaux fier quartier de cœur de vent. Apprécier vérifier température aller. Est mais. Avoir réellement a-t-il carrière savourer de médecins.\r\n\r\nPeux Neiger visitant plein excusez-moi d\'attente sapeur-pompier cité crains restaurant serveur peins grande. Beaux venir plus petites beaucoup 21h notre excusez-moi merci. Bon enseigner puis savoir infirmières fatiguée demander si chef. L\'itinéraire malades cuisinier peine doute notre température l\'ambiance suis. Donné Chef julie visitant m’encourageaient ruelles bonsoir serveur moi serveur demander cathédrale. Adolescent verdure frites dans frites sapeur-pompier tombe. Pluie rêvait aura dans journée. Ce après très que qu\'on basse mais garnier fois hugo. Sommet pouvait serveur vérifier montrerai vue du cantine basse prête pourtant magasins. Ça Calmer métro. Qu’il après petites prête chaque carrière apprécier réservation votre parlent roman le. Découvrais luxe changer infirmières fort basilique.\r\n', '2019-06-17', 14, 'y'),
(22, 62, 'J\'avais j\'étais rêves montmartre film camille monde. Cuisinier peine peins café bien serait-il aux héros. Cité Délicieux chef calme plats occupés congélation chaque pluie bar minutes. Gentils Quel vérifier. Encore dieu parlent il possible.', '2019-06-17', 14, 'y'),
(25, 33, 'Réservation problème changer n\'ai c\'est ce bonsoir rêvait médecins donné. Possible d’y tour si monde le a-t-il victor garnier passion donné glace. Montrerai dans ici policier apprécier étages repas l\'arc beaux ne. Français remplie apprécier souvent venir s’il grêle sont. L\'itinéraire éclair n\'aimait pluie. Grande neige croissants ma grêle produits champs-élysées. Qu\'il j\'avais suis métro hugo après lorsqu’il quasimodo. Médecins encore neiger docteur choisir chaque roman bon. C\'est parlent ça était d\'avocat calme j\'étais. Pierre sapeur-pompier carrière me vous j’ai petites monde fonctionne champs-élysées jour encore. Parents chaud tous pour calme serait-il risques. Ainsi grand calmer par mathématiques de les les gentils bonsoir. Neiger si apprécier pierre. Jours chaud eiffel voulais quel. Petites et ses durer venir désolé appellera tous être disais changer.', '2019-06-17', 14, 'y'),
(26, 0, 'juhiuiuyo oi ', '2019-06-17', 14, 'y'),
(27, 0, '1451', '2019-06-17', 14, 'n'),
(29, 0, 'ijafojoi ajoiw fawefjoi', '2019-06-17', 14, 'y'),
(30, 0, 'hoihyio up9popi', '2019-06-17', 14, 'n'),
(32, 0, '', '2019-06-17', 14, 'y'),
(33, 0, '123456789', '2019-06-17', 14, 'y'),
(35, 0, '', '2019-06-17', 14, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `entry_tag`
--

CREATE TABLE `entry_tag` (
  `id` int(11) NOT NULL,
  `entry_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_tag`
--

INSERT INTO `entry_tag` (`id`, `entry_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 3, 5),
(6, 3, 6),
(7, 4, 7),
(8, 4, 8),
(9, 4, 9),
(10, 5, 10),
(11, 5, 11),
(12, 0, 0),
(13, 6, 13),
(14, 10, 14),
(16, 13, 16),
(17, 13, 17),
(18, 13, 18),
(19, 14, 19),
(20, 14, 20),
(21, 14, 21),
(22, 15, 22),
(23, 15, 23),
(24, 15, 26),
(25, 15, 27),
(26, 15, 28),
(27, 15, 29),
(28, 15, 30),
(29, 16, 31),
(30, 16, 32),
(31, 16, 33),
(32, 16, 34),
(33, 16, 35),
(34, 17, 36),
(35, 17, 37),
(36, 17, 38),
(37, 17, 39),
(38, 18, 40),
(39, 18, 41),
(40, 18, 42),
(41, 19, 43),
(42, 19, 44),
(43, 19, 45),
(44, 20, 32),
(45, 20, 47),
(46, 21, 48),
(47, 21, 49),
(48, 21, 36),
(49, 21, 37),
(50, 21, 52),
(51, 21, 38),
(52, 22, 54),
(53, 22, 28),
(54, 22, 56),
(56, 25, 58),
(57, 25, 59),
(58, 25, 60),
(59, 25, 61);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `entry_id` int(11) NOT NULL,
  `anxiety_level` int(3) NOT NULL,
  `notes` text NOT NULL,
  `date` date NOT NULL,
  `event_time` time NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `entry_id`, `anxiety_level`, `notes`, `date`, `event_time`, `user_id`) VALUES
(1, 0, 0, 'this is a dummy note', '0000-00-00', '14:00:00', 3),
(5, 0, 2, 'Oh, and I ride\r\nOh, and I\'m a cowboy, on a steel horse I ride\r\nI\'m wanted dead or alive\r\nI walk these streets\r\nA loaded six-string on my back\r\nI play for keeps \'cause I might not make it back\r\nI been everywhere, still, I\'m standing tall\r\nI\'ve seen a million faces\r\nAnd I\'ve rocked them all\r\nI\'m a cowboy, on a steel horse I ride\r\nI\'m wanted (wanted) dead or alive\r\nI\'m a cowboy, I got the night on my side\r\nI\'m wanted (wanted) dead or alive\r\nAnd I ride, dead or alive\r\nI still drive (I still drive) dead or alive\r\nDead or alive, dead or alive, dead or alive, dead or alive', '2019-06-16', '00:00:00', 3),
(6, 0, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2019-06-16', '00:00:00', 13),
(7, 0, 3, 'Me des ils l\'île serait-il cette qui parce artiste peins un doute. Risques notre les tuileries choisir avoir l\'île petites andrew l\'itinéraire lorsqu’il leur. Pleurait combattre avec crient andrew doute tombe tableaux excusez-moi. Qu\'il observer. Choisir soleil basse eiffel montmartre basse visitant parce. Pleurait leur infirmières façade. Pensait dans brouillard gentils soir pour savourer fier. Artiste jours infirmières m\'appelle du métiers. Nuages plus me. Était basilique grêle me. Déplacer disponible réellement table plats. Est promène smith plats village pluie grêle sur de alors ruelles. Région disais avoir observer ma cette voulez gris pour. Cantine l\'arc et métiers délicieux suis se attend infirmières parce congélation plus. Serait-il d\'à m\'en.\r\n', '2019-06-17', '14:55:00', 14),
(8, 0, 1, '', '2019-06-17', '20:58:00', 14),
(9, 0, 2, 'Quatre chef quel commence et qu\'on semaine peux fier votre choisir lui. Capitale personnage fois pied tableaux petits personnage. Peins déplacer montmartre merci petit-déjeuner. Brouillard marques l\'art peins. Ce tempête bonsoir commence pour. Voulais disais. Voir le appellera beaucoup rêvait il criminels m\'en occupés a-t-il. Garnier visiter sont sommet camille avoir hugo. Votre aider choisir éclair pouvait vue mathématiques m\'en sommes peut. Avec ici quartier c\'est cantine manger disponible plein. Température Quasimodo parlent pourtant grande va basse la réellement quoi professeur nom. Dieu soigner ça je produits.\r\n', '2019-06-17', '00:00:00', 14),
(10, 0, 3, 'Qu’il s’il mes enfin petit-déjeuner qu’il peu l\'art si mais. Mais l\'itinéraire ses s’il splendide gentils. Gentils Peux indique bien leur grandes. Fatiguée bien visiter si parler étages prendre parlent visiter ici qui rêves. Ne façade policier est peine puis-je marques tous.', '2019-06-17', '10:00:00', 14),
(11, 21, 3, 'Pierre qu’il. Je pensait j\'étais il. Sur il smith chef plein appellera problème rêves voir voulais. Après Attend éclair produits camille. Ils Thomas nuages criminels apprécier. Carrière fonctionne la table tonnerre peine soleil passion manger plein.', '2019-06-17', '06:00:00', 14),
(12, 22, 1, 'Sommet pouvait serveur vérifier montrerai vue du cantine basse prête pourtant magasins. Ça Calmer métro. Qu’il après petites prête chaque carrière apprécier réservation votre parlent roman le. Découvrais luxe changer infirmières fort basilique.', '2019-06-17', '00:00:00', 14),
(13, 25, 1, 'Sur mais visiter quasimodo façade. Avec éclair au basilique temps congélation problème serveur parents peine ses. Ça basilique parler et durer de marche village donné quartier luxe. N\'aimait eiffel. Fatiguée l\'après-midi marche visitant soit ne volontaire.', '2019-06-17', '23:14:00', 14);

-- --------------------------------------------------------

--
-- Table structure for table `event_location_tag`
--

CREATE TABLE `event_location_tag` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_location_tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_location_tag`
--

INSERT INTO `event_location_tag` (`id`, `event_id`, `event_location_tag_id`) VALUES
(1, 3, 8),
(2, 3, 9),
(3, 4, 10),
(4, 5, 11),
(5, 6, 12),
(6, 6, 13),
(7, 6, 14),
(8, 7, 15),
(9, 7, 16),
(10, 7, 17),
(11, 8, 18),
(12, 8, 19),
(13, 8, 20),
(14, 9, 21),
(15, 9, 16),
(16, 10, 20),
(17, 10, 24),
(18, 10, 15),
(19, 11, 26),
(20, 11, 27),
(21, 11, 28),
(22, 12, 16),
(23, 12, 30),
(24, 12, 18),
(25, 25, 15),
(26, 25, 33),
(27, 25, 34);

-- --------------------------------------------------------

--
-- Table structure for table `location_tag`
--

CREATE TABLE `location_tag` (
  `location_tag_id` int(11) NOT NULL,
  `location_tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_tag`
--

INSERT INTO `location_tag` (`location_tag_id`, `location_tag`) VALUES
(35, '1234'),
(36, '654'),
(37, '789'),
(9, 'barn'),
(27, 'battlefield'),
(13, 'Cafe'),
(28, 'camp tent'),
(3, 'car'),
(30, 'castle'),
(17, 'Dais'),
(38, 'delete this'),
(4, 'dog park'),
(8, 'down south'),
(7, 'dream house'),
(39, 'erase it'),
(15, 'France'),
(21, 'home'),
(20, 'Horse'),
(24, 'meadow'),
(19, 'My Arc'),
(5, 'new zealand'),
(33, 'On my horse'),
(11, 'on the road'),
(10, 'out'),
(18, 'Paris'),
(12, 'Portland'),
(1, 'stage'),
(34, 'Streets of Paris'),
(2, 'these streets'),
(16, 'Throne room'),
(26, 'Waterloo'),
(14, 'Window'),
(6, 'zanzibar');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(57, '4tqtb w4t '),
(31, 'art'),
(59, 'Ate Croissants'),
(44, 'ate fromage'),
(34, 'berets'),
(42, 'bleh'),
(39, 'British jerks'),
(6, 'bungee jumping'),
(37, 'cannons'),
(4, 'car ride'),
(33, 'cheese'),
(47, 'conquered pyranees'),
(27, 'crown'),
(56, 'Crowned Self Emperor'),
(13, 'dadadadadada'),
(20, 'danced'),
(22, 'delete me'),
(3, 'dogs'),
(60, 'Drank Wine'),
(7, 'dream car'),
(14, 'drove to gresham'),
(49, 'Duke of Wellington'),
(29, 'emperor'),
(23, 'erase'),
(30, 'exile sucks'),
(41, 'feh'),
(21, 'funked out'),
(16, 'guitar'),
(26, 'island'),
(28, 'josephine'),
(9, 'ken'),
(5, 'kite flying'),
(54, 'love'),
(40, 'meh'),
(38, 'merde'),
(36, 'mud'),
(32, 'paris'),
(52, 'Rain'),
(61, 'Revolution'),
(17, 'rock and roll'),
(45, 'rode horse'),
(19, 'sang'),
(8, 'skipper'),
(18, 'sleep'),
(2, 'steel horse'),
(58, 'Stormed the Bastille'),
(43, 'sulked'),
(24, 'tag'),
(25, 'taggerooo'),
(10, 'test'),
(11, 'testing'),
(12, 'there goes john jacob jinglehe'),
(35, 'tricorn hats'),
(1, 'wanted dead or alive'),
(48, 'Waterloo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pw` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `pw`) VALUES
(11, 'Snow', 'White', 'applelover@dwarfs.com', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(10, 'Ray', 'Harryhausen', 'argonauts@stopmotion.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(13, 'George', 'Clinton', 'atomicdog@funkenstein.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
(20, 'Vlad', 'The Impaler', 'blood@thristy.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
(7, 'Bob', 'Hughes', 'bob@belcher.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(18, 'Genghis', 'Khan', 'conqueror@mongolia.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
(5, 'Elaine', 'May', 'funnylady@comedy.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(9, 'Ava', 'Gabor', 'green@acres.com', '1384afde343e4e6ea38d3a3ebe77e1b52c6814e86ab3fd86875399b5fb4fc6fc2c2f6b7ce5b4100188a81d46f4ccd44198b8a96434deb72a3a9873c3e206502f'),
(2, 'Jane', 'Grey', 'headless@henryviii.com', '2bbe0c48b91a7d1b8a6753a8b9cbe1db16b84379f3f91fe115621284df7a48f1cd71e9beb90ea614c7bd924250aa9e446a866725e685a65df5d139a5cd180dc9'),
(12, 'John Jacob', 'Jingleheimer-Schmidt', 'hisname@mynametoo', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(16, 'Henry', 'VIII', 'hornyking@tudors.co.uk', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
(3, 'Jon', 'Bon Jovi', 'jon@bonjovi.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(1, 'Katrina', 'Voll-Taylor', 'kvolltaylor@gmail.com', '2d7b83d970407115113765fe1fcb158f53d2c4e85e91d4bfea95c63c955dcf1488db7af0cc7ccc868123677aedb31829d965dda39652bcc1cf6a76699af094cc'),
(14, 'Napoleon', 'Bonaparte', 'lonelydictator@elba.fr', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
(21, 'Charles James', 'Fox', 'macaroni@fop.co.uk', 'c2804a835e76dbd55d7e2ba003ff03a5ecdfe9501532efe82a3edf87c1f54032df7c765d49012c1d5cf7287339a61a1b4f778949a53b2856c9e87e4a7270cb63'),
(17, 'Grigori', 'Rasputin', 'mesmer@rasputin.ru', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
(22, 'Julius', 'Caesar', 'ouch@pointyknives.it', 'b66dd5a7a689f88e302ab2ae4a9567f9c7572c18e520b3bf712bb2630b3931a503d647baedf48df470006312d07984216578b60526e5ee6137ef1fd215190a0c'),
(19, 'Jose', 'Marti', 'poetwarrior@cuba.mx', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
(8, 'Ronnie James', 'Dio', 'ridethetiger@dio.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(6, 'Bob', 'Fosse', 'tap@tappitytap.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `entry_tag`
--
ALTER TABLE `entry_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_location_tag`
--
ALTER TABLE `event_location_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_tag`
--
ALTER TABLE `location_tag`
  ADD PRIMARY KEY (`location_tag_id`),
  ADD UNIQUE KEY `location_tag` (`location_tag`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag` (`tag`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`) USING BTREE,
  ADD UNIQUE KEY `user_id` (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `entry_tag`
--
ALTER TABLE `entry_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event_location_tag`
--
ALTER TABLE `event_location_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `location_tag`
--
ALTER TABLE `location_tag`
  MODIFY `location_tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
