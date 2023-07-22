-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 22 juil. 2023 à 18:15
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hunt_showdown`
--

-- --------------------------------------------------------

--
-- Structure de la table `monster`
--

DROP TABLE IF EXISTS `monster`;
CREATE TABLE IF NOT EXISTS `monster` (
  `id` int NOT NULL AUTO_INCREMENT,
  `monster_class_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` longtext COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_245EC6F45CC4479C` (`monster_class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `monster`
--

INSERT INTO `monster` (`id`, `monster_class_id`, `name`, `slug`, `decription`, `image_url`) VALUES
(1, 1, 'Butcher', 'butcher', '<i>Researcher\'s insight into the Butcher</i>\n<br>\n<i>Undated</i>\n<br><br>\nThe documentation is clearly unreliable. As we piece together the puzzle, we are forced to make many leaps of both logic and faith. Inconsistencies are not altogether surprising considering the sources, and the subjectivity of remembered experience. The big picture makes a certain kind of sense, follows its own internal logic. In spite of that, even I have trouble believing what I\'ve found in regards to its first appearance in Louisiana.\n<br><br>\nThe huge bloated body - clearly a relative of the Meathead - with bits of wood and metal protruding from the skin. A leather apron covers the horrors of its torso, the head of a pig,and - and somehow this is the detail that I find most difficult to believe - a flaming hook. It is comfortable with fire and resistant to heat - likely thanks in part to the apron - and to bludgeoning. A regular bulletsponge, and though more fallible to rending attacks, it is hard for me to imagine how these people managed to kill any of them at all. When driven into a violent fury, its behavior would become erratic, and flames would fly from the aforementioned hook. I shudder to think. What it must have felt like to round a dark corner and come face to face with the empty eyes and glowing hook of that seemingly impossible beast?\n<br><br>\nIf the reports can be believed, these Butchers, as they were called by those who hunted them, were the stuff of nightmares. Either that, or only the most fantastical of tales have survived. Can we really separate the facts from the fictions at this distance? Perhaps not, but I am driven to continue to try, even if I never can be sure of the truth.\n<br>\n', 'https://cdna.artstation.com/p/assets/images/images/014/712/986/large/chris-goodswen-butcher-beauty.jpg?1545138666'),
(3, 1, 'Spider', 'spider', '<i>Researcher\'s insight into the Spider</i>\n<br>\n<i>Undated</i>\n<br><br>\nMore people than you think suffer arachnophobia. A primal fear of something poisonous lurking, weaving traps, able to scale any surface. At odds, though, with its domestic function: keeping a dwelling clear of flies and other undesirable creatures. A spider the size of a quarter, though, is manageable. But, at the size of a horse, even the most rational and logical would recoil in disgust at an eight-legged arachnid, gnashing its mandibles, expelling coils of webbing.The Spider strikes the ardent occultist as one of the most outlandish and monstrous examples of the hysteria that so gripped the bayous. An example, though, that in all its multifaceted dimensions and exhaustive iterations, vindicates that hysteria.\n<br><br>\nReferences keep cropping up throughout the archive, of something not quite human and not quite spider, a semi-sentient mass of limbs, poisonous in both body and intent.\n<br><br>\nThe hunters were pragmatic, that much can be said. Most information preserved concerned how to combat such a beast. It hit hard, then retreated to the shadows to ready its next assault. Hunters were advised to keep moving, as the Spider could apparently spit poison, which lingered some time after in the air.\n<br><br>\nMelee weapons, which could slash or pummel, proved effective at rending its limbs and breaking its bones. Poison and other toxins were ineffective.\n<br><br>\nI\'m sure that a more fastidious study of the source text would doubtless reveal more insights.\n<br><br>\nThe best sources I found to work with though were interviews given by the notorious JV. A detailed physical description, and at least reference to Black and Scognamiglio (the latter suspiciously silent on the subject in his own writing). Some pages missing, though the most relevant are reproduced here.\n<br><br>\nWhat is known though, is that this Spider was of the greater possessions of the greater evil that lurked there. All the more that can be discovered of it, the more clearly we will see the picture as a whole. \n<br><br>\n<br>\n<i>Undated</i>\n<br><br>\nThe documentation is clearly unreliable. As we piece together the puzzle, we are forced to make many leaps of both logic and faith. Inconsistencies are not altogether surprising considering the sources, and the subjectivity of remembered experience. The big picture makes a certain kind of sense, follows its own internal logic. In spite of that, even I have trouble believing what I\'ve found in regards to its first appearance in Louisiana.\n<br><br>\nThe huge bloated body - clearly a relative of the Meathead - with bits of wood and metal protruding from the skin. A leather apron covers the horrors of its torso, the head of a pig,and - and somehow this is the detail that I find most difficult to believe - a flaming hook. It is comfortable with fire and resistant to heat - likely thanks in part to the apron - and to bludgeoning. A regular bulletsponge, and though more fallible to rending attacks, it is hard for me to imagine how these people managed to kill any of them at all. When driven into a violent fury, its behavior would become erratic, and flames would fly from the aforementioned hook. I shudder to think. What it must have felt like to round a dark corner and come face to face with the empty eyes and glowing hook of that seemingly impossible beast?\n<br><br>\nIf the reports can be believed, these Butchers, as they were called by those who hunted them, were the stuff of nightmares. Either that, or only the most fantastical of tales have survived. Can we really separate the facts from the fictions at this distance? Perhaps not, but I am driven to continue to try, even if I never can be sure of the truth.\n<br>\n', 'https://cdna.artstation.com/p/assets/images/images/014/735/430/large/florian-reschenhofer-spider-03-model-01.jpg?1545230532'),
(4, 1, 'Assassin', 'assassin', '<i>Researcher\'s insight into the Assassin</i><br><i>Undated</i><br><br>The arrival of the Assassin marks a surprising turning point in the Louisiana Case. Before its arrival, the entity\'s major aspects were certainly formidable combatants, though designed for other purposes. The humanoid Assassin seemed especially sculpted to shock humans, and destroy them.<br>Accounts of such a creature are similar: that of a tall humanoid figure who can seemingly melt into a swarm of insects. Whether or not this is the result of trickery, or actual physical transformation, is debatable. Though with all things relating to this case, I am inclined toward belief in the most outlandish and bizarre theorizations one day, and incredulous the next.<br><br>Of this, I\'ve noted a remarkable pattern in its behavior. The Assassin seemed capable of remarkable feats. Chief among them, the ability to split into several (three) manifestations of itself. These manifestations would function as a distraction, attacking hunters independently, while the true Assassin would use the opportunity to find the right moment to strike.<br><br>Thankfully, Harold Black preserved much of what we know. His encounter with the Assassin seems to have forged him into the man we revere today.<br><br>His account, in typical Blackian fashion, seems indirect by modern academic standards. Indeed, he does mention his failed career as a writer, and his inability to inform clearly seems to affirm this.<br><br>However, this does give a rare insight into the abilities of the Assassin, particularly their development from a human host. You\'d be forgiven for missing some of the more pragmatic information, such as that the Assassin\'s chest seems to harbor a vulnerable point.<br><br>\n', 'https://hypernia.com/wp-content/uploads/2023/04/The-Assassin-painting.jpg'),
(5, 1, 'Scrapbeak', 'scrapbeak', '<i>Researcher\'s Notes</i><br> <i>Handwritten</i><br> <i>Undated</i><br><br>\nThe question of the beak is paramount. Initially, I had supposed it a mask, fashioned from the scavenged detritus the creature holds so dear, a theory supported by the fact that the beak\'s composition does not resemble that of any bird yet catalogued by man. However, dissection reveals that the periphery of the beak-structure is fused with the bone of the skull, though the mandibles and the surrounding musculature are curiously positioned, non-functional, and show extensive scarring. The scar tissue is singular, exhibiting attributes of both keloid and hypertrophic tissue, and marked in such a way as to suggest a violently expediated healing process.\n<br><br>\nFrom this, I must conclude that the beak was not part of the beast\'s original physiognomy, but rather a more recent addition — an addition that could only have been made through a most gruesome surgical procedure — and that the healing process was accelerated and warped by the transformation process of which I still, maddeningly, know so little. I shudder to think of it, for I can imagine no circumstance under which a man might agree, of his own free will, to allow such a surgery to take place, or the physician willing to perform it. Finding that physician - possibly under the influence of the corruption themselves - would give the most valuable insight into this creature. Perhaps the Sculptor is not, in the end, the most egregious being in the Bayou. One must only read the headlines of the daily papers to know the staggering capacity for cruelty of the human specimen. \n<br><br>\n', 'https://i.redd.it/ct5hh03bekr61.png');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `monster`
--
ALTER TABLE `monster`
  ADD CONSTRAINT `FK_245EC6F45CC4479C` FOREIGN KEY (`monster_class_id`) REFERENCES `monster_class` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
