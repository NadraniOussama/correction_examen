-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le : Lun 29 Juin 2015 à 19:52
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `examsmi2015`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `idArticle` int(10) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) NOT NULL,
  `Contenu` text NOT NULL,
  `nomAuteur` varchar(30) NOT NULL,
  `prenomAuteur` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `heure` varchar(30) NOT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`idArticle`, `Titre`, `Contenu`, `nomAuteur`, `prenomAuteur`, `date`, `heure`) VALUES
(1, 'Titre de l''article 1', 'c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. c''est un essai de l''article 1. ', 'Omari', 'Omar', '29 juin 2015', '17h10'),
(2, 'Article 2', 'ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.\r\nARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. J''ai dit qu''il s''agit de l''article numéro 2.ARticle 2 yes c''est article 2. ', 'Kaddouri', 'Kaddour', '15 juin 2015', '17h13');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Comment` varchar(500) NOT NULL,
  `idArticle` int(10) NOT NULL,
  `Pseudo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `Comment`, `idArticle`, `Pseudo`) VALUES
(1, 'je commennte 1111111', 1, 'Omar'),
(2, 'je commente une autre fois 111111111111111111111111', 1, 'Slimane'),
(3, 'je commente first time 222222222222222', 2, 'Omar'),
(4, 'je commente 3 times 222222222222222222222', 1, 'Brahim');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
