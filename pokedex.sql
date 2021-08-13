-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 13 août 2021 à 10:45
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pokedex`
--

-- --------------------------------------------------------

--
-- Structure de la table `charged_attacks`
--

CREATE TABLE `charged_attacks` (
  `idChargedAttacks` int(11) NOT NULL,
  `nameChargedAttacks` varchar(255) DEFAULT NULL,
  `datecreateChargedAttacks` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `charged_attacks`
--

INSERT INTO `charged_attacks` (`idChargedAttacks`, `nameChargedAttacks`, `datecreateChargedAttacks`) VALUES
(1, 'Tourbi-Sable', '2021-07-23 06:14:04'),
(2, 'Châtiment', '2021-07-23 06:14:23'),
(3, 'Gyroballe', '2021-07-23 06:14:42'),
(4, 'Piqûre', '2021-07-23 06:15:00'),
(5, 'Poing Météore', '2021-07-23 06:15:43'),
(6, 'Éboulement', '2021-07-23 06:16:34'),
(7, 'Coud\'Krâne', '2021-07-23 06:17:12'),
(8, 'Surpuissance', '2021-07-23 06:17:33'),
(9, 'Crochet Venin', '2021-07-23 06:17:55'),
(10, 'Tempête Verte', '2021-07-23 06:19:26'),
(11, 'Laser Glace', '2021-07-23 06:19:57'),
(12, 'Tir de Boue', '2021-07-23 06:20:17'),
(13, 'Calcination', '2021-07-23 06:20:48'),
(14, 'Ouragan', '2021-07-23 06:42:51'),
(15, 'Pistolet à O', '2021-07-23 06:43:23'),
(16, 'Souffle Glacé', '2021-07-23 06:44:00');

-- --------------------------------------------------------

--
-- Structure de la table `evolutions`
--

CREATE TABLE `evolutions` (
  `idEvolutions` int(11) NOT NULL,
  `level1Evolutions` varchar(255) DEFAULT NULL,
  `level2Evolutions` varchar(255) DEFAULT NULL,
  `level3Evolutions` varchar(255) DEFAULT NULL,
  `datecreateEvolutions` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `immediate_attacks`
--

CREATE TABLE `immediate_attacks` (
  `idImmediateAttacks` int(11) NOT NULL,
  `nameImmediateAttacks` varchar(255) DEFAULT NULL,
  `datecreateImmediateAttacks` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `immediate_attacks`
--

INSERT INTO `immediate_attacks` (`idImmediateAttacks`, `nameImmediateAttacks`, `datecreateImmediateAttacks`) VALUES
(1, 'Cru-Ailes', '2021-07-23 05:36:34'),
(2, 'Tornade', '2021-07-23 05:37:10'),
(3, 'Tempête Verte', '2021-07-23 05:58:44'),
(4, 'Surchauffe', '2021-07-23 05:59:02'),
(5, 'Tacle Lourd', '2021-07-23 05:59:25'),
(6, 'Séisme', '2021-07-23 05:59:40'),
(7, 'Vent Violent', '2021-07-23 05:59:58'),
(8, 'Crocs Feu', '2021-07-23 06:00:16'),
(9, 'Éclair Fou', '2021-07-23 06:00:36'),
(10, 'Danse Flammes', '2021-07-23 06:00:54'),
(11, 'Dynamo-Poing', '2021-07-23 06:01:11'),
(12, 'Close Combat', '2021-07-23 06:02:35'),
(13, 'Écume', '2021-07-23 06:03:53'),
(14, 'Paresse', '2021-07-23 06:43:07'),
(15, 'Séduction', '2021-07-23 06:43:47'),
(16, 'Tourniquet', '2021-07-23 06:44:26');

-- --------------------------------------------------------

--
-- Structure de la table `pokemons`
--

CREATE TABLE `pokemons` (
  `idPokemons` int(11) NOT NULL,
  `numberPokemons` int(11) DEFAULT NULL,
  `namePokemons` varchar(50) DEFAULT NULL,
  `descriptionPokemons` text DEFAULT NULL,
  `maxweightPokemons` float DEFAULT NULL,
  `maxsizePokemons` float DEFAULT NULL,
  `levelevolutionsPokemons` varchar(50) DEFAULT NULL,
  `imgPokemons` varchar(50) DEFAULT NULL,
  `datecreatedPokemons` timestamp NOT NULL DEFAULT current_timestamp(),
  `idImmediateAttacks` int(11) DEFAULT NULL,
  `idChargedAttacks` varchar(50) DEFAULT NULL,
  `idTypes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pokemons`
--

INSERT INTO `pokemons` (`idPokemons`, `numberPokemons`, `namePokemons`, `descriptionPokemons`, `maxweightPokemons`, `maxsizePokemons`, `levelevolutionsPokemons`, `imgPokemons`, `datecreatedPokemons`, `idImmediateAttacks`, `idChargedAttacks`, `idTypes`) VALUES
(15, 1, 'Bulbizarre', 'Il a une étrange graine plantée sur son dos. Elle grandit avec lui depuis la naissance.', 37, 1, NULL, '001.png', '2021-07-22 12:26:38', 3, '4', '12'),
(16, 2, 'Herbizarre', 'Sa plante mûrit en absorbant les rayons du soleil. Il migre souvent vers les endroits ensoleillés.', 72, 3, NULL, '002.png', '2021-07-22 12:27:32', 6, '12', '12'),
(17, 3, 'Florizarre', '	Sa plante mûrit en absorbant les rayons du soleil. Il migre souvent vers les endroits ensoleillés.', 145, 5, NULL, '003.png', '2021-07-22 12:28:52', 4, '9', '12'),
(18, 4, 'Salameche', 'Il préfère les endroits chauds. En cas de pluie, de la vapeur se forme autour de sa queue.', 13, 1, NULL, '004.png', '2021-07-22 12:30:04', 6, '10', '8'),
(19, 5, 'Reptincel', 'En agitant sa queue, il peut élever le niveau de la température à un degré incroyable.', 43, 2, NULL, '005.png', '2021-07-22 12:32:51', 8, '8', '8'),
(20, 6, 'Dracaufeu', 'Il peut fondre la roche de son souffle brûlant. Il est souvent la cause de nombreux incendies.', 144, 5, NULL, '006.png', '2021-07-22 12:34:15', 5, '13', '8'),
(21, 7, 'Carapuce', 'Son dos durcit avec l\'âge et devient une super carapace. Il peut cracher des jets d\'écume.', 9, 1, NULL, '007.png', '2021-07-22 12:35:18', 13, '11', '5'),
(22, 8, 'Carabaffe', '	Il se cache au fond de l\'eau pour guetter sa proie. Ses oreilles sont des gouvernails.', 54, 2, NULL, '008.png', '2021-07-22 12:37:23', 6, '12', '5'),
(23, 9, 'Tortank', 'Un POKéMON brutal armé de canons hydrauliques. Ses puissants jets d\'eau sont dévastateurs.', 185, 4, NULL, '009.png', '2021-07-22 12:38:19', 3, '9', '5'),
(24, 10, 'Chenipan', '	Ses petites pattes sont équipées de ventouses, lui permettant de grimper aux murs.', 1, 1, NULL, '010.png', '2021-07-22 12:41:42', 13, '10', '10'),
(25, 11, 'Chrysacier', 'Il est vulnérable aux attaques tant que sa carapace fragile expose son corps tendre et mou.', 1, 1, NULL, '011.png', '2021-07-22 12:42:52', 6, '10', '10'),
(26, 12, 'Papilusion', 'En combat, il bat des ailes très rapidement pour projeter des poudres toxiques sur ses ennemis.', 5, 2, NULL, '012.png', '2021-07-22 12:44:08', 7, '9', '10'),
(27, 13, 'Aspicot', 'Il se nourrit de feuilles dans les forêts. L\'aiguillon sur son front est empoisonné.', 1, 1, NULL, '013.png', '2021-07-22 12:45:10', 5, '12', '10'),
(28, 14, 'Coconfort', 'Incapable de se déplacer de luimême, il se défend en durcissant sa carapace.', 1, 1, NULL, '014.png', '2021-07-22 12:46:04', 5, '9', '10'),
(29, 15, 'Dardargnan', '	Il vole à très grande vitesse. Il se bat avec les dards empoisonnés de ses bras.', 18, 1, NULL, '015.png', '2021-07-22 12:48:22', 4, '9', '10'),
(30, 16, 'Roucool', 'Il est souvent vu dans les forêts. Il brasse l\'air de ses ailes près du sol pour projeter du sable.', 4, 1, NULL, '016.png', '2021-07-22 12:49:16', 6, '10', '19'),
(31, 17, 'Roucoups', 'Il protège son territoire avec ardeur et repousse à coups de bec tout intrus.', 29, 2, NULL, '017.png', '2021-07-22 12:50:06', 7, '8', '19'),
(32, 18, 'Roucarnage', 'Il chasse en survolant la surface de l\'eau et en plongeant pour attraper des proies faciles.', 46, 5, NULL, '018.png', '2021-07-22 12:50:58', 2, '8', '19'),
(33, 19, 'Rattata', 'Sa morsure est très puissante. Petit et rapide, on en voit un peu partout.', 3, 1, NULL, '019.png', '2021-07-23 05:25:08', 6, '12', '16'),
(34, 20, 'Rattatac', 'Si ses moustaches sont coupées, il perd le sens de l\'équilibre et devient moins rapide.', 17, 1, NULL, '020.png', '2021-07-23 05:27:36', 5, '---', '16'),
(35, 21, 'Piafabec', 'Il chasse les insectes dans les hautes herbes. Ses petites ailes lui permettent de voler très vite.', 24, 1, NULL, '021.png', '2021-07-23 05:30:38', 4, '11', '19'),
(38, 22, 'Rapasdepic', 'Ses ailes géantes lui permettent de planer si longtemps qu\'il ne se pose que très rarement.', 34, 2, NULL, '022.png', '2021-07-23 06:47:33', 13, '8', '19'),
(39, 23, 'Abo', 'Il se déplace en silence pour dévorer des oeufs de ROUCOOL ou de PIAFABEC.', 12, 2, NULL, '023.png', '2021-07-23 06:49:14', 15, '7', '13'),
(40, 24, 'Arbok', 'Les motifs féroces peints sur son corps changent selon son environnement.', 34, 4, NULL, '024.png', '2021-07-23 06:50:33', 16, '2', '13'),
(41, 25, 'Pikachu', 'Quand plusieurs de ces POKéMON se réunissent, ils provoquent de gigantesques orages.', 12, 1, NULL, '025.png', '2021-07-23 06:55:09', 9, '1', '6'),
(42, 26, 'Raichu', 'Il doit garder sa queue en contact avec le sol pour éviter toute électrocution.', 43, 2, NULL, '026.png', '2021-07-23 06:56:30', 14, '8', '6'),
(43, 27, 'Sabelette', 'Il s\'enterre dans les régions arides et désertiques. Il émerge seulement pour chasser.', 14, 1, NULL, '027.png', '2021-07-23 06:59:19', 6, '6', '16'),
(44, 28, 'Sablaireau', 'Il se roule en boule hérissée de piques s\'il est menacé. Il peut ainsi s\'enfuir ou attaquer.', 34, 2, NULL, '028.png', '2021-07-23 07:00:29', 10, '7', '16'),
(45, 29, 'Nidoran♀️', 'Ce POKéMON est hérissé de dards empoisonnés. Les femelles ont des dards plus petits.', 12, 1, NULL, '029.png', '2021-07-23 07:02:29', 6, '7', '13'),
(46, 30, 'Nidorina', 'La corne de la femelle grandit lentement. Elle préfère attaquer avec ses griffes et sa gueule.', 24, 2, NULL, '030.png', '2021-07-23 07:03:49', 12, '7', '13'),
(47, 31, 'Nidoqueen', 'Ses écailles très résistantes et son corps massif sont des armes dévastatrices.', 34, 2, NULL, '031.png', '2021-07-23 07:28:02', 9, '10', '13'),
(48, 32, 'Nidoran♂️', 'Son ouïe très fine l\'avertit du danger. Plus ses cornes sont grandes, plus son poison est mortel.\r\n', 12, 1, NULL, '032.png', '2021-07-23 07:29:55', 3, '6', '13'),
(49, 33, 'Nidorino', 'Très agressif, il est prompt à répondre à la violence. La corne sur sa tête est venimeuse.', 23, 1, NULL, '033.png', '2021-07-23 07:30:59', 12, '4', '13'),
(50, 34, 'Nidoking', 'Sa queue est une arme redoutable, il s\'en sert pour attraper sa proie et lui broyer les os.', 43, 2, NULL, '034.png', '2021-07-23 07:32:06', 11, '6', '13'),
(51, 35, 'Mélofée', 'Très recherché pour son aura mystique, il est très rare et ne vit que dans des endroits précis.', 31, 1, NULL, '035.png', '2021-07-23 07:33:12', 14, '3', '7'),
(52, 36, 'Mélodelfe', 'Une sorte de petite fée très rare. Il se cache en apercevant un être humain.', 45, 1, NULL, '036.png', '2021-07-23 07:34:21', 11, '10', '7'),
(53, 37, 'Goupix', 'Il n\'a qu\'une seule queue à la naissance. Sa queue se divise à la pointe au fil des ans.', 24, 1, NULL, '037.png', '2021-07-23 07:36:46', 5, '5', '8'),
(54, 38, 'Feunard', 'Très intelligent et rancunier. Attrapez-lui une de ses queues et il vous maudira pour 1000 ans.', 48, 2, NULL, '038.png', '2021-07-23 07:38:25', 9, '5', '8'),
(55, 39, 'Rondoudou', 'Quand ses yeux s\'illuminent, il chante une mystérieuse berceuse.', 34, 1, NULL, '039.png', '2021-07-23 07:39:53', 10, '3', '7');

-- --------------------------------------------------------

--
-- Structure de la table `pokemon_caught`
--

CREATE TABLE `pokemon_caught` (
  `idPokemonCaught` int(11) NOT NULL,
  `weightPokemonCaught` int(11) DEFAULT NULL,
  `sizePokemonCaught` decimal(15,2) DEFAULT NULL,
  `datecreatedPokemonCaught` datetime DEFAULT NULL,
  `idSexe` varchar(50) NOT NULL,
  `idPokemon` varchar(50) NOT NULL,
  `idDressseur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sex`
--

CREATE TABLE `sex` (
  `idSex` int(11) NOT NULL,
  `nameSex` varchar(255) DEFAULT NULL,
  `datecreateSex` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sex`
--

INSERT INTO `sex` (`idSex`, `nameSex`, `datecreateSex`) VALUES
(2, 'Femelle', '2021-07-23 05:11:08');

-- --------------------------------------------------------

--
-- Structure de la table `trainer`
--

CREATE TABLE `trainer` (
  `idTrainer` int(11) NOT NULL,
  `pseudoTrainer` varchar(255) DEFAULT NULL,
  `emailTrainer` varchar(255) DEFAULT NULL,
  `passwordTrainer` varchar(255) DEFAULT NULL,
  `typeTrainer` varchar(255) DEFAULT NULL,
  `dateCreateTrainer` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trainer`
--

INSERT INTO `trainer` (`idTrainer`, `pseudoTrainer`, `emailTrainer`, `passwordTrainer`, `typeTrainer`, `dateCreateTrainer`) VALUES
(4, 'admin', 'guillardmarc44@outlook.fr', '$2y$10$100FX3x0QdfmMj8SSN2Nh.mWX/1V13XpdVkg/V6IiLddrWQ8Jc.6q', 'admin', '2021-07-22 08:17:51'),
(5, 'sacha', 'sacha@sacha.com', '$2y$10$Zc5QaR5mssXwkdSSwpfaD.T3PjUCTjlFQBANHgh3dAElkT.tgEq5K', 'Trainer', '2021-07-23 08:07:47');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `idType` int(11) NOT NULL,
  `nameType` varchar(255) DEFAULT NULL,
  `imgType` varchar(255) DEFAULT NULL,
  `dateType` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`idType`, `nameType`, `imgType`, `dateType`) VALUES
(1, 'Acier', 'acier.png', '2021-07-23 05:39:20'),
(2, 'Combat', 'combat.png', '2021-07-23 05:39:43'),
(3, 'Dragon', 'dragon.png', '2021-07-23 05:40:00'),
(5, 'Eau', 'eau.png', '2021-07-23 05:40:28'),
(6, 'Electrik', 'électrik.png', '2021-07-23 05:41:01'),
(7, 'Fée', 'fée.png', '2021-07-23 05:42:27'),
(8, 'Feu', 'feu.png', '2021-07-23 05:43:01'),
(9, 'Glace', 'glace.png', '2021-07-23 05:43:37'),
(10, 'Insecte', 'insecte.png', '2021-07-23 05:44:07'),
(11, 'Normal', 'normal.png', '2021-07-23 05:44:23'),
(12, 'Plante', 'plante.png', '2021-07-23 05:44:42'),
(13, 'Poison', 'poison.png', '2021-07-23 05:45:01'),
(14, 'Psy', 'psy.png', '2021-07-23 05:45:15'),
(15, 'Roche', 'roche.png', '2021-07-23 05:45:32'),
(16, 'Sol', 'sol.png', '2021-07-23 05:45:53'),
(17, 'Spectre ', 'spectre.png', '2021-07-23 05:46:20'),
(18, 'Ténèbres ', 'ténèbres.png', '2021-07-23 05:46:41'),
(19, 'Vol', 'vol.png', '2021-07-23 05:47:14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `charged_attacks`
--
ALTER TABLE `charged_attacks`
  ADD PRIMARY KEY (`idChargedAttacks`);

--
-- Index pour la table `evolutions`
--
ALTER TABLE `evolutions`
  ADD PRIMARY KEY (`idEvolutions`);

--
-- Index pour la table `immediate_attacks`
--
ALTER TABLE `immediate_attacks`
  ADD PRIMARY KEY (`idImmediateAttacks`);

--
-- Index pour la table `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`idPokemons`);

--
-- Index pour la table `pokemon_caught`
--
ALTER TABLE `pokemon_caught`
  ADD PRIMARY KEY (`idPokemonCaught`);

--
-- Index pour la table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`idSex`);

--
-- Index pour la table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`idTrainer`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`idType`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `charged_attacks`
--
ALTER TABLE `charged_attacks`
  MODIFY `idChargedAttacks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `evolutions`
--
ALTER TABLE `evolutions`
  MODIFY `idEvolutions` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `immediate_attacks`
--
ALTER TABLE `immediate_attacks`
  MODIFY `idImmediateAttacks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `idPokemons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `pokemon_caught`
--
ALTER TABLE `pokemon_caught`
  MODIFY `idPokemonCaught` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sex`
--
ALTER TABLE `sex`
  MODIFY `idSex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `idTrainer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
