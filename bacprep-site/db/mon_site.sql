-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2025 at 02:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mon_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `niveau` varchar(50) DEFAULT NULL,
  `filiere` varchar(50) DEFAULT NULL,
  `matiere` varchar(50) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `pdf_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`id`, `niveau`, `filiere`, `matiere`, `titre`, `pdf_url`, `youtube_url`) VALUES
(1, '2BAC', 'Sciences physiques', 'Mathématiques', 'calcul integral', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/calcul-integral-resume-de-cours-1.pdf', 'https://youtube.com/playlist?list=PLWDP1k6hCnoTdjQMGxLJg0vP2Y9DHJOgz&si=QZgAH0yWI2BRQQUz'),
(2, '2BAC', 'Sciences physiques', 'mathématiques', 'derivation et etude des fonctions', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/derivation-et-etude-des-fonctions-resume-de-cours-1-2 (1).pdf', 'https://www.youtube.com/watch?v=6u6_QaM7q7o'),
(3, '2BAC', 'Sciences physiques', 'mathématiques', 'equations differentielles', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/equations-differentielles-resume-de-cours-1-2.pdf', 'https://youtu.be/qHF5kiDFkW8?si=XwYkbiKzZGb07fru'),
(4, '2BAC', 'Sciences physiques', 'mathématiques', 'fonctions exponentielles', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/fonctions-exponentielles-resume-de-cours-2-2.pdf', 'https://www.youtube.com/watch?v=gwX_8hZrF2c&list=PLX4JM5un62hBjboF7NA_4ysuVpVQWy0I7'),
(5, '2BAC', 'Sciences physiques', 'mathématiques', 'fonctions logarithmiques', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/fonctions-logarithmiques-cours-1-4.pdf', 'https://youtu.be/dLn4O7TKgo8?si=Fda5y_fZscTi-q0S'),
(6, '2BAC', 'Sciences physiques', 'mathématiques', 'fonctions primitives ', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/fonctions-primitives-resume-de-cours-1.pdf', 'https://youtu.be/Kihb9h-EXOI?si=aGKdC2a2z5NpMLJ7'),
(7, '2BAC', 'Sciences physiques', 'mathématiques', 'geometrie dans l\'espace', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/geometrie-dans-l-espace-resume-de-cours-1.pdf', 'https://youtu.be/FqTYa6NONwY?si=fRZGVj_UxLQx9gHN'),
(8, '2BAC', 'Sciences physiques', 'mathématiques', 'limites et continuite', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/limites-et-continuite-resume-de-cours-1-6.pdf', 'https://youtu.be/3dU-Yxfz1Ro?si=-xQzjg6Ozs6yCAD_'),
(9, '2BAC', 'Sciences physiques', 'mathématiques', 'nombres complexes', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/nombres-complexes-1-2-resume-de-cours-8.pdf', 'https://youtu.be/M792MqryTKc?si=7FvH63kA8XwJrYV3'),
(10, '2BAC', 'Sciences physiques', 'mathématiques', 'probabilites ', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/probabilites-resume-de-cours-1.pdf', 'https://youtu.be/uczoXEQsVjc?si=7fwQqQMuF7X-ExZL'),
(11, '2BAC', 'Sciences physiques', 'mathématiques', 'suites numeriques', 'uploads/courses/2bac/Sciences_Physiques/Mathématiques/suites-numeriques-resume-de-cours-5-4.pdf', 'https://www.youtube.com/watch?v=czAlKlF4axM&list=PLX4JM5un62hC_2hdO08G3XVZdIIHlgMSg'),
(12, '2BAC', 'Sciences physiques', 'Physique-Chimie', 'chute libre verticale d\'un solide', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/chute-libre-verticale-d-un-solide-resume-de-cours-1-1.pdf', NULL),
(13, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'decroissance radioactive', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/decroissance-radioactive-cours-2-1.pdf', NULL),
(14, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'dipole RC', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/dipole-rc-resume-de-cours-1-1.pdf', NULL),
(15, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'dipole RL', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/dipole-rl-resume-de-cours-1-1.pdf', NULL),
(16, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'dosage acido basique', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/dosage-acido-basique-cours-2-1.pdf', NULL),
(17, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'etat d\'equilibre d\'un systeme chimique', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/etat-d-equilibre-d-un-systeme-chimique-cours-1-2.pdf', NULL),
(18, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'lois de newton', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/lois-de-newton-resume-de-cours-1-1.pdf', NULL),
(19, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'mouvement de rotation d\'un solide autour d\'un axe fixe', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/mouvement-de-rotation-d-un-solide-autour-d-un-axe-fixe-resume-de-cours-1-1.pdf', NULL),
(20, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'mouvement des satellites et des planetes', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/mouvement-des-satellites-et-des-planetes-resume-de-cours-1-1.pdf', NULL),
(21, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'mouvements plans', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/mouvements-plans-resume-de-cours-1-1.pdf', NULL),
(22, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'noyaux masse et energie', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/noyaux-masse-et-energie-resume-de-cours-1-1.pdf', NULL),
(23, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'ondes mecaniques progressives periodiques', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/ondes-mecaniques-progressives-periodiques-resume-de-cours-1-1.pdf', NULL),
(24, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'ondes mecaniques progressives', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/ondes-mecaniques-progressives-resume-de-cours-1-1.pdf', NULL),
(25, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'oscillations libres d\'un circuit RLC serie', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/oscillations-libres-d-un-circuit-rlc-serie-resume-de-cours-1-2.pdf', NULL),
(31, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'propagation des ondes lumineuses', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/propagation-des-ondes-lumineuses-resume-de-cours-1-1.pdf', NULL),
(32, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'suivi temporel d\'une transformation chimique vitesse de reaction', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/suivi-temporel-d-une-transformation-chimique-vitesse-de-reaction-resume-de-cours-1.pdf', NULL),
(33, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'transformations chimiques s\'effectuant dans les 2 sens', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/transformations-chimiques-s-effectuant-dans-les-2-sens-resume-de-cours-1-1.pdf', NULL),
(34, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'transformations lentes et transformations rapides', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/transformations-lentes-et-transformations-rapides-resume-de-cours-1-1.pdf', NULL),
(35, '2BAC', 'Sciences Physiques', 'Physique-Chimie', 'transformations liees a des reactions acide base', 'uploads/courses/2bac/Sciences_Physiques/Physique-Chimie/transformations-liees-a-des-reactions-acide-base-resume-de-cours-1-1.pdf', NULL),
(36, '2BAC', 'Sciences Physiques', 'SVT', 'controle de la qualite et de la salubrite des milieux naturels', 'uploads/courses/2bac/Sciences_Physiques/SVT/controle de la qualite et de la salubrite des milieux naturels.pdf', NULL),
(37, '2BAC', 'Sciences Physiques', 'SVT', 'expression de l\'information genetique', 'uploads/courses/2bac/Sciences_Physiques/SVT/expression de l\'information genetique.pdf', NULL),
(38, '2BAC', 'Sciences Physiques', 'SVT', 'la pollution des milieux naturels', 'uploads/courses/2bac/Sciences_Physiques/SVT/la pollution des milieux naturels.pdf', NULL),
(39, '2BAC', 'Sciences Physiques', 'SVT', 'les matieres radioactives et l\'energie nucleaire', 'uploads/courses/2bac/Sciences_Physiques/SVT/les matieres radioactives et l\'energie nucleaire.pdf', NULL),
(40, '2BAC', 'Sciences Physiques', 'SVT', 'les ordures menageres issues de l\'utilisation des matieres organiques et inorganiques', 'uploads/courses/2bac/Sciences_Physiques/SVT/les ordures menageres issues de l\'utilisation des matieres organiques et inorganiques.pdf', NULL),
(41, '2BAC', 'Sciences Physiques', 'SVT', 'les phenomenes geologiques accompagnant la formation des chaines de montagnes et leur relation avec la tectonique des plaques', 'uploads/courses/2bac/Sciences_Physiques/SVT/les phenomenes geologiques accompagnant la formation des chaines de montagnes et leur relation avec la tectonique des plaques.pdf', NULL),
(42, '2BAC', 'Sciences Physiques', 'SVT', 'liberation de l\'energie emmagasinee dans la matiere organique', 'uploads/courses/2bac/Sciences_Physiques/SVT/liberation de l\'energie emmagasinee dans la matiere organique.pdf', NULL),
(43, '2BAC', 'Sciences Physiques', 'SVT', 'lois statistiques de la transmission des caracteres hereditaires', 'uploads/courses/2bac/Sciences_Physiques/SVT/lois statistiques de la transmission des caracteres hereditaires.pdf', NULL),
(44, '2BAC', 'Sciences Physiques', 'SVT', 'notion de l\'information genetique', 'uploads/courses/2bac/Sciences_Physiques/SVT/notion de l\'information genetique.pdf', NULL),
(45, '2BAC', 'Sciences Physiques', 'SVT', 'role du muscle strie squelettique dans la conversion de l\'energie', 'uploads/courses/2bac/Sciences_Physiques/SVT/role du muscle strie squelettique dans la conversion de l\'energie.pdf', NULL),
(46, '2BAC', 'Sciences Physiques', 'SVT', 'transmission de l\'information genetique par la reproduction sexuee', 'uploads/courses/2bac/Sciences_Physiques/SVT/transmission de l\'information genetique par la reproduction sexuee.pdf', NULL),
(49, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'calcul integral', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Mathématiques/calcul integral.pdf', NULL),
(50, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'derivation et etude des fonctions', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/derivation et etude des fonctions.pdf', NULL),
(51, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'equations differentielles', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/equations differentielles.pdf', NULL),
(52, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'fonctions exponentielles', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/fonctions exponentielles.pdf', NULL),
(53, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'fonctions logarithmiques', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/fonctions logarithmiques.pdf', NULL),
(54, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'fonctions primitives', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/fonctions primitives.pdf', NULL),
(55, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'geometrie dans l\'espace', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/geometrie dans l\'espace.pdf', NULL),
(56, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'limites et continuite', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/limites et continuite.pdf', NULL),
(57, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'nombres complexes', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/nombres complexes.pdf', NULL),
(58, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'probabilites', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/probabilites.pdf', NULL),
(59, '2BAC', 'Sciences de la Vie et de la Terre', 'mathématiques', 'suites numeriques', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/mathématiques/suites numeriques.pdf', NULL),
(60, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'la chute libre verticale d\'un solide', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/la chute libre verticale d\'un solide.pdf', NULL),
(61, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'la propagation des ondes lumineuses', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/la propagation des ondes lumineuses.pdf', NULL),
(62, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'la transformation spontanees dans les piles et la production d\'energie', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/la transformation spontanees dans les piles et la production d\'energie.pdf', NULL),
(63, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'le dipole RC', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/le dipole RC.pdf', NULL),
(64, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'le dipole RL', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/le dipole RL.pdf', NULL),
(65, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'le mouvement de rotation d\'un solide autour d\'un axe fixe', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/le mouvement de rotation d\'un solide autour d\'un axe fixe.pdf', NULL),
(66, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'le mouvement d\'un projectile dans un plan', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/le mouvement d\'un projectile dans un plan.pdf', NULL),
(67, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'le noyau masse et energie', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/le noyau masse et energie.pdf', NULL),
(68, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'le suivi temporel d\'une transformation chimique la vitesse de reaction', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/le suivi temporel d\'une transformation chimique la vitesse de reaction.pdf', NULL),
(69, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'les lois de newton', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/les lois de newton.pdf', NULL),
(70, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'les ondes mecaniques progressives periodiques', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/les ondes mecaniques progressives periodiques.pdf', NULL),
(71, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'les oscillations libres d\'un circuit RLC', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/les oscillations libres d\'un circuit RLC.pdf', NULL),
(72, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'les reactions d\'esterification et d\'hydrolyse', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/les reactions d\'esterification et d\'hydrolyse.pdf', NULL),
(73, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'les transformations chimiques qui s\'effectuent dans les 2 sens', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/les transformations chimiques qui s\'effectuent dans les 2 sens.pdf', NULL),
(74, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'les transformations lentes et les transformations rapides', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/les transformations lentes et les transformations rapides.pdf', NULL),
(75, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'les transformations liees a des reactions acide base', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/les transformations liees a des reactions acide base.pdf', NULL),
(76, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'les transformations nucleaires', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/les transformations nucleaires.pdf', NULL),
(77, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'l\'etat d\'equilibre d\'un systeme chimique', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/l\'etat d\'equilibre d\'un systeme chimique.pdf', NULL),
(78, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'l\'evolution spontanee d\'un systeme chimique', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/l\'evolution spontanee d\'un systeme chimique.pdf', NULL),
(79, '2BAC', 'Sciences de la Vie et de la Terre', 'Physique-Chimie', 'pendule pesant', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/Physique-Chimie/pendule pesant.pdf', NULL),
(80, '2BAC', 'Sciences de la Vie et de la Terre', 'SVT', 'expression de l\'information génétique', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/SVT/expression de l\'information génétique.pdf', NULL),
(81, '2BAC', 'Sciences de la Vie et de la Terre', 'SVT', 'génétique des populations', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/SVT/génétique des populations.pdf', NULL),
(82, '2BAC', 'Sciences de la Vie et de la Terre', 'SVT', 'les lois statistiques de la transmission des caracteres hereditaires', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/SVT/les lois statistiques de la transmission des caracteres hereditaires.pdf', NULL),
(83, '2BAC', 'Sciences de la Vie et de la Terre', 'SVT', 'les phenomenes géologiques accompagnant la formation des chaines de montagnes et leur relation avec la tectonique des plaques', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/SVT/les phenomenes géologiques accompagnant la formation des chaines de montagnes et leur relation avec la tectonique des plaques.pdf', NULL),
(84, '2BAC', 'Sciences de la Vie et de la Terre', 'SVT', 'liberation de l\'energie emmagasinee dans la matiere organique', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/SVT/liberation de l\'energie emmagasinee dans la matiere organique.pdf', NULL),
(85, '2BAC', 'Sciences de la Vie et de la Terre', 'SVT', 'l\'immunologie', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/SVT/l\'immunologie.pdf', NULL),
(86, '2BAC', 'Sciences de la Vie et de la Terre', 'SVT', 'notion de l\'information genetique', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/SVT/notion de l\'information genetique.pdf', NULL),
(87, '2BAC', 'Sciences de la Vie et de la Terre', 'SVT', 'role du muscle strie squelettique dans la conversion de l\'energie', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/SVT/role du muscle strie squelettique dans la conversion de l\'energie.pdf', NULL),
(88, '2BAC', 'Sciences de la Vie et de la Terre', 'SVT', 'transmission de l\'information génétique par la reproduction sexuee', 'uploads/courses/2bac/Sciences_de_la_Vie_et_de_la_Terre/SVT/transmission de l\'information génétique par la reproduction sexuee.pdf', NULL),
(89, '1BAC', 'Sciences Expérimentales', 'Arabe', 'العدد', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/aladd aldrs.pdf', NULL),
(90, '1BAC', 'Sciences Expérimentales', 'Arabe', 'الأمر والنهي', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/alamr oalnhi.pdf', NULL),
(91, '1BAC', 'Sciences Expérimentales', 'Arabe', 'الاستعارة', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/alastaara.pdf', NULL),
(92, '1BAC', 'Sciences Expérimentales', 'Arabe', 'الاستفهام', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/alasthfam.pdf', NULL),
(93, '1BAC', 'Sciences Expérimentales', 'Arabe', 'الحال', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/alhal.pdf', NULL),
(94, '1BAC', 'Sciences Expérimentales', 'Arabe', 'الإيجاز والاطناب', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/alijjaz oalitnab.pdf', NULL),
(95, '1BAC', 'Sciences Expérimentales', 'Arabe', 'الممنوع من الصرف', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/almnnoa mn alsrf.pdf', NULL),
(96, '1BAC', 'Sciences Expérimentales', 'Arabe', 'المصدر', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/almsadr.pdf', NULL),
(97, '1BAC', 'Sciences Expérimentales', 'Arabe', 'النسبة', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/alnsba.pdf', NULL),
(98, '1BAC', 'Sciences Expérimentales', 'Arabe', 'التّطبيق والمقابلة', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/altbqa oalmqabla.pdf', NULL),
(99, '1BAC', 'Sciences Expérimentales', 'Arabe', 'التّرميز', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/altmiiz.pdf', NULL),
(100, '1BAC', 'Sciences Expérimentales', 'Arabe', 'التّمني والنداء', 'uploads/courses/1bac/Sciences_Experimentales/Arabe/altrmni oalndaa.pdf', NULL),
(101, '1BAC', 'Sciences Expérimentales', 'Français', 'la focalisation ou point de vue', 'uploads/courses/1bac/Sciences_Experimentales/Français/la focalisation ou point de vue.pdf', NULL),
(102, '1BAC', 'Sciences Expérimentales', 'Français', 'le discours rapporte', 'uploads/courses/1bac/Sciences_Experimentales/Français/le discours rapporte.pdf', NULL),
(103, '1BAC', 'Sciences Expérimentales', 'Français', 'l’énonciation', 'uploads/courses/1bac/Sciences_Experimentales/Français/l’énonciation.pdf', NULL),
(104, '1BAC', 'Sciences Expérimentales', 'Français', 'les champs lexicaux', 'uploads/courses/1bac/Sciences_Experimentales/Français/les champs lexicaux.pdf', NULL),
(105, '1BAC', 'Sciences Expérimentales', 'Français', 'les figures de style', 'uploads/courses/1bac/Sciences_Experimentales/Français/les figures de style.pdf', NULL),
(106, '1BAC', 'Sciences Expérimentales', 'Français', 'les niveaux de langue', 'uploads/courses/1bac/Sciences_Experimentales/Français/les niveaux de langue.pdf', NULL),
(107, '1BAC', 'Sciences Expérimentales', 'Français', 'les registres de langue', 'uploads/courses/1bac/Sciences_Experimentales/Français/les registres de langue.pdf', NULL),
(108, '1BAC', 'Sciences Expérimentales', 'Français', 'recit et discours', 'uploads/courses/1bac/Sciences_Experimentales/Français/recit et discours.pdf', NULL),
(109, '1BAC', 'Sciences Expérimentales', 'Français', 'resume d’antigone partie 1', 'uploads/courses/1bac/Sciences_Experimentales/Français/resume d’antigone partie 1.pdf', NULL),
(110, '1BAC', 'Sciences Expérimentales', 'Français', 'resume d’antigone partie 2', 'uploads/courses/1bac/Sciences_Experimentales/Français/resume d’antigone partie 2.pdf', NULL),
(111, '1BAC', 'Sciences Expérimentales', 'Français', 'resume Le dernier jour d’un condamné', 'uploads/courses/1bac/Sciences_Experimentales/Français/resume Le dernier jour d’un condamné.pdf', NULL),
(112, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'العلام العربي، مشكل الماء والظاهرة الصحراوية', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/alaalm_alarbi_mshkl_almaa_othahira_altshr.pdf', NULL),
(113, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'الاختيارات الكبرى للسياسة إعداد التراب الوطني', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/alalkhtiarat_alkbra_lsiasa_iidad_altrab_alotni.pdf', NULL),
(114, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'الاتحاد العربي نحو اندماج شامل', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/altahad_alarabi_nho_andmaj_shaml.pdf', NULL),
(115, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'الضغوط الاستعمارية على المغرب ومحاولات الإصلاح', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/aldghot_alastamaria_ala_almaghrb_omhaolat_alislah.pdf', NULL),
(116, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'الحرب العالمية الثانية: الأسباب والنتائج', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/alhrb_alaalmia_althania_alasbab_oalntiaj.pdf', NULL),
(117, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'اليقظة الفكرية بالمشرق العربي', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/aliqtha_alfkria_balmshrq_alarbi.pdf', NULL),
(118, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'المجال المغربي: الموارد الطبيعية والبشرية', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/almjal_almaghrbi_almoard_altbiaia_oalbshria.pdf', NULL),
(119, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'الولايات المتحدة الأمريكية قوة اقتصادية عظمى', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/alolaiat_almthda_alamerika_qoa_aqtssadia_athma.pdf', NULL),
(120, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'الصين: قوة اقتصادية صاعدة', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/alsin_qoa_aqtssadia_saada.pdf', NULL),
(121, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'التهيئة الحضرية والريفية: أزمة المدينة والريف وأشكال التدخل', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/althiaa_alhddria_oalrifia_azma_almdina_oalrif_oashkal_altdkhl.pdf', NULL),
(122, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'التحولات الاقتصادية والمالية والاجتماعية والفكرية في العالم في القرن 19م', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/altholat_alaqtsadia_oalmalia_oalajtmaaia_oalfkria_fi_alaalm_fi_alqrn_19m.pdf', NULL),
(123, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'التنافس الإمبريالي واندلاع الحرب العالمية الأولى', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/altnafs_alambriiali_oandlaa_alhrb_alaalmia_alaoala.pdf', NULL),
(124, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'أوروبا من نهاية الحرب العالمية الأولى إلى أزمة 1929م', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/aoroba_mn_nhaia_alhrb_alaalmia_alaoala_ila_azma_1929m.pdf', NULL),
(125, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'مفهوم التنمية، تعدد المغربات، التقسيمات الكبرى للعالم، خريطة التنمية', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/rmfhom_altnmia_tadd_almaghrbat_altaqsimat_alkbra_llaalm_khrita_altnmia.pdf', NULL),
(126, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'ملف العولمة والتحديات الراهنة', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/mlf_alaolma_oalthditat_alrahna.pdf', NULL),
(127, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'ملف الشراكة بين المغرب والاتحاد الأوروبي', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/mlf_alshraka_bin_almaghrb_oalathad_alaoorobi.pdf', NULL),
(128, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'نضال المغرب من أجل تحقيق الاستقلال واستكمال الوحدة الترابية', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/ndhal_almaghrb_mn_ajl_thqiq_alastqla_oastkmal_aloho_altrbia.pdf', NULL),
(129, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'نظام الحماية بالمغرب والاستقلال الاستعماري', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/ntham_alhmiia_baimghrb_oalastqalat_alastamari.pdf', NULL),
(130, '1BAC', 'Sciences Expérimentales', 'Histoire-Géographie', 'تقديم عام للبرنامج: التحولات الكبرى للعالم الرأسمالي وانعكاساتها خلال القرنين 19م و20م', 'uploads/courses/1bac/Sciences_Experimentales/Histoire-Géographie/tqdim_aam_lbrnamj_altarikh_altholat_alkbra_llaalm_alrasmali_oanaksatha_khal_alqrnin_19m_o20m.pdf', NULL),
(131, '2BAC', 'Sciences Physiques', 'Philosophie', 'الدولة', 'uploads/courses/2bac/meme_cours/philosophie/aldola.pdf', NULL),
(132, '2BAC', 'Sciences Physiques', 'Philosophie', 'الغير', 'uploads/courses/2bac/meme_cours/philosophie/alghir.pdf', NULL),
(133, '2BAC', 'Sciences Physiques', 'Philosophie', 'الحق والعدالة', 'uploads/courses/2bac/meme_cours/philosophie/alhq oaladala.pdf', NULL),
(134, '2BAC', 'Sciences Physiques', 'Philosophie', 'الحقيقة', 'uploads/courses/2bac/meme_cours/philosophie/alhqiqa.pdf', NULL),
(135, '2BAC', 'Sciences Physiques', 'Philosophie', 'الحرية', 'uploads/courses/2bac/meme_cours/philosophie/alhria.pdf', NULL),
(136, '2BAC', 'Sciences Physiques', 'Philosophie', 'النظرية والتجربة', 'uploads/courses/2bac/meme_cours/philosophie/althria oaltjrba.pdf', NULL),
(137, '2BAC', 'Sciences Physiques', 'Philosophie', 'الواجب', 'uploads/courses/2bac/meme_cours/philosophie/aloa jb.pdf', NULL),
(138, '2BAC', 'Sciences Physiques', 'Philosophie', 'الشخص', 'uploads/courses/2bac/meme_cours/philosophie/alshkhs.pdf', NULL),
(139, '2BAC', 'Sciences de la Vie et de la Terre', 'Philosophie', 'الدولة', 'uploads/courses/2bac/meme_cours/philosophie/aldola.pdf', NULL),
(140, '2BAC', 'Sciences de la Vie et de la Terre', 'Philosophie', 'الغير', 'uploads/courses/2bac/meme_cours/philosophie/alghir.pdf', NULL),
(141, '2BAC', 'Sciences de la Vie et de la Terre', 'Philosophie', 'الحق والعدالة', 'uploads/courses/2bac/meme_cours/philosophie/alhq oaladala.pdf', NULL),
(142, '2BAC', 'Sciences de la Vie et de la Terre', 'Philosophie', 'الحقيقة', 'uploads/courses/2bac/meme_cours/philosophie/alhqiqa.pdf', NULL),
(143, '2BAC', 'Sciences de la Vie et de la Terre', 'Philosophie', 'الحرية', 'uploads/courses/2bac/meme_cours/philosophie/alhria.pdf', NULL),
(144, '2BAC', 'Sciences de la Vie et de la Terre', 'Philosophie', 'النظرية والتجربة', 'uploads/courses/2bac/meme_cours/philosophie/althria oaltjrba.pdf', NULL),
(145, '2BAC', 'Sciences de la Vie et de la Terre', 'Philosophie', 'الواجب', 'uploads/courses/2bac/meme_cours/philosophie/aloa jb.pdf', NULL),
(146, '2BAC', 'Sciences de la Vie et de la Terre', 'Philosophie', 'الشخص', 'uploads/courses/2bac/meme_cours/philosophie/alshkhs.pdf', NULL),
(147, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 1: Formal, Informal and Non-Formal Education', 'uploads/courses/2bac/meme_cours/English/unit 1 formal informal and non formal education.pdf', NULL),
(148, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 2: Gifts of Youth', 'uploads/courses/2bac/meme_cours/English/unit 2 gifts of youth.pdf', NULL),
(149, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 3: Cultural Issues and Values', 'uploads/courses/2bac/meme_cours/English/unit 3 cultural issues and values.pdf', NULL),
(150, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 4: Humour', 'uploads/courses/2bac/meme_cours/English/unit 4 humour.pdf', NULL),
(151, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 5: Science and Technology', 'uploads/courses/2bac/meme_cours/English/unit 5 science and technology.pdf', NULL),
(152, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 6: Sustainable Development', 'uploads/courses/2bac/meme_cours/English/unit 6 sustainable development.pdf', NULL),
(153, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 7: Women and Power', 'uploads/courses/2bac/meme_cours/English/unit 7 women and power.pdf', NULL),
(154, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 8: Brain Drain', 'uploads/courses/2bac/meme_cours/English/unit 8 brain drain.pdf', NULL),
(155, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 9: International Organizations', 'uploads/courses/2bac/meme_cours/English/unit 9 international organizations.pdf', NULL),
(156, '2BAC', 'Sciences Physiques', 'Anglais', 'Unit 10: Citizenship', 'uploads/courses/2bac/meme_cours/English/unit 10 citizenship.pdf', NULL),
(157, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 1: Formal, Informal and Non-Formal Education', 'uploads/courses/2bac/meme_cours/English/unit 1 formal informal and non formal education.pdf', NULL),
(158, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 2: Gifts of Youth', 'uploads/courses/2bac/meme_cours/English/unit 2 gifts of youth.pdf', NULL),
(159, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 3: Cultural Issues and Values', 'uploads/courses/2bac/meme_cours/English/unit 3 cultural issues and values.pdf', NULL),
(160, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 4: Humour', 'uploads/courses/2bac/meme_cours/English/unit 4 humour.pdf', NULL),
(161, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 5: Science and Technology', 'uploads/courses/2bac/meme_cours/English/unit 5 science and technology.pdf', NULL),
(162, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 6: Sustainable Development', 'uploads/courses/2bac/meme_cours/English/unit 6 sustainable development.pdf', NULL),
(163, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 7: Women and Power', 'uploads/courses/2bac/meme_cours/English/unit 7 women and power.pdf', NULL),
(164, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 8: Brain Drain', 'uploads/courses/2bac/meme_cours/English/unit 8 brain drain.pdf', NULL),
(165, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 9: International Organizations', 'uploads/courses/2bac/meme_cours/English/unit 9 international organizations.pdf', NULL),
(166, '2BAC', 'Sciences de la Vie et de la Terre', 'Anglais', 'Unit 10: Citizenship', 'uploads/courses/2bac/meme_cours/English/unit 10 citizenship.pdf', NULL),
(167, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'العفو والتسامح', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/alafo oaltsamh.pdf', NULL),
(168, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'الإيمان والعلم', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/aliiman oalalm.pdf', NULL),
(169, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'الإيمان والفلسفة', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/aliiman oalflsfa.pdf', NULL),
(170, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'الإيمان بالغيب', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/aliiman oalghib.pdf', NULL),
(171, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'الإيمان وعمارة الأرض', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/aliiman oamara alardh.pdf', NULL),
(172, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'الكفاءة والاستحقاق أساس التكليف', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/alkfaaa oalisthqqq asas altklif.pdf', NULL),
(173, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'الرسول صلى الله عليه وسلم في بعثه', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/alrsol sla allh alih oslm fi bith.pdf', NULL),
(174, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'الرسول صلى الله عليه وسلم مفاوضاً ومستشيراً', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/alrsol sla allh alih oslm mfaodha omstshira.pdf', NULL),
(175, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'السبعة الذين يظلهم الله', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/alsbaa althin ithlhrm allh.pdf', NULL),
(176, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'فقه الأسرة: الأسرة نواة المجتمع', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/fqh alasra alasra noaa almjtma.pdf', NULL),
(177, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'فقه الأسرة: الطلاق - الأحكام والمقاصد', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/fqh alasra altlaq alahkam oalmqasd.pdf', NULL),
(178, '1BAC', 'Sciences Expérimentales', 'Education-Islamique', 'فقه الأسرة: الزواج - الأحكام والمقاصد', 'uploads/courses/1bac/Sciences_Experimentales/Education-Islamique/fqh alasra alzoaj alahkam oalmqasd.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `cours_id`, `created_at`) VALUES
(13, 10, 8, '2025-07-30 19:17:36'),
(14, 11, 12, '2025-07-30 20:02:58'),
(24, 9, 42, '2025-08-01 21:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(5, 'jljE', 'ccccccccccccc@gmail.com', '$2y$10$Y/C.IG1yl/MwGtFMFpYA0epzRIE.jdEE0Vj0WYRI9fT81HSuyYYXO', '2025-07-16 19:28:30'),
(6, 'mohmed', 'med@gmail.com', '$2y$10$/BtjVxPv9e4K3T.l1wIvj.0ub.gYbG01HPyC11fVgfFXmNX31Th76', '2025-07-17 19:50:18'),
(7, 'sywa', 'wafa.sybous@gmail.com', '$2y$10$xG8IMA3VCcZPnBqp55Cd/.6gxlIiZz6JuXup166KAh5QWykdf/4O2', '2025-07-17 23:49:40'),
(8, 'YYY', 'wafa.syboust@gmail.com', '$2y$10$U9R8SDLjd2E.oZhfBVi88uTBBMfvnhQ5O1w2I89uy2EHZ.pNvpK7S', '2025-07-17 23:55:38'),
(9, 'mohmed sybous', 'mohamed.sybous@gmail.com', '$2y$10$NVT2I6lR7KM0ng3tPncFmODinsrg59NoYOZZ.SH9.kuKmPO9f6QsS', '2025-07-18 16:32:24'),
(10, 'loubna sybous', 'sybouslubna@gmail.ma', '$2y$10$bz3rxq3kYVN/f2Y6//GWi.nuCCMDfvKhO9wvxfbxC7boTLPrXY5MG', '2025-07-30 20:14:26'),
(11, 'sybous fatima', 'sybousfatima@gmail.com', '$2y$10$8GZYt/EDbqACb5M3WGw/Wufm2Tzf4LiUJy5Be35fSp8DTRpf/5LsS', '2025-07-30 21:01:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_favorite` (`user_id`,`cours_id`),
  ADD KEY `cours_id` (`cours_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
