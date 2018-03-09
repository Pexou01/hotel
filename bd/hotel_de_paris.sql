
CREATE DATABASE IF NOT EXISTS `hotel_de_paris` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `hotel_de_paris`;

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id_booking` int(11) NOT NULL AUTO_INCREMENT,
  `id_room` int(11) NOT NULL,
  `from_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `to_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_booking`),
  KEY `id_room` (`id_room`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `hostels`;
CREATE TABLE IF NOT EXISTS `hostels` (
  `id_hostel` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id_hostel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `hostels` (`id_hostel`, `name`, `address`) VALUES
(1, 'Hôtel du Sud', '4 rue de Marseille 75010 Paris'),
(2, 'Hôtel du Nord', '4 rue de Dunkerque 75010 Paris'),
(3, 'Hôtel de l\'Ouest', '4 rue de Nantes 75010 Paris');

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id_resa` int(250) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `ville` varchar(40) DEFAULT NULL,
  `paye` varchar(20) DEFAULT NULL,
  `information_resa` varchar(250) DEFAULT NULL,
  `du` date DEFAULT NULL,
  `au` date DEFAULT NULL,
  PRIMARY KEY (`id_resa`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

INSERT INTO `locations` (`id_resa`, `nom`, `prenom`, `adresse`, `cp`, `ville`, `paye`, `information_resa`, `du`, `au`) VALUES
(1, 'Dupont', 'Frédéric', '13, place joseph de guignes', '95300', 'PONTOISE', 'france', '1 chambre simple dans l\'hotel du nord', '2018-03-08', '2018-03-14');

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id_room` int(255) NOT NULL AUTO_INCREMENT,
  `id_hostel` int(255) NOT NULL,
  `capacity` int(1) NOT NULL,
  `price` int(16) NOT NULL,
  PRIMARY KEY (`id_room`),
  KEY `id_hostel` (`id_hostel`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

INSERT INTO `rooms` (`id_room`, `id_hostel`, `capacity`, `price`) VALUES
(1, 1, 1, 999),
(2, 1, 1, 999),
(3, 1, 1, 999),
(4, 1, 1, 999),
(5, 1, 1, 999),
(8, 1, 2, 1599),
(9, 1, 2, 1599),
(10, 1, 2, 1599),
(11, 1, 2, 1599),
(12, 1, 2, 1599),
(16, 2, 2, 1799),
(17, 2, 2, 1799),
(18, 2, 2, 1799),
(19, 2, 2, 1799),
(20, 2, 2, 1799),
(21, 2, 1, 999),
(22, 2, 1, 999),
(23, 2, 1, 999),
(24, 2, 1, 999),
(25, 2, 1, 999),
(26, 3, 1, 200),
(27, 3, 1, 200),
(28, 3, 1, 200),
(29, 3, 1, 200),
(30, 3, 1, 200),
(31, 3, 2, 550),
(32, 3, 2, 550),
(33, 3, 2, 550),
(34, 3, 2, 550),
(35, 3, 2, 550);


ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id_room`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`id_hostel`) REFERENCES `hostels` (`id_hostel`) ON DELETE CASCADE ON UPDATE CASCADE;
