-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para loginsystem
CREATE DATABASE IF NOT EXISTS `loginsystem` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `loginsystem`;

-- Copiando estrutura para tabela loginsystem.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela loginsystem.users: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nome`, `email`, `senha`) VALUES
	(1, 'Pedro', 'Pedro@gmail.com', '$2y$10$nkpK7UAV7X2uNYFu1.HVwe0jPEon/qjRrralSZO8CedWaLAVZv9CC'),
	(2, 'Alexandre', 'Alexandre@gmail.com', '$2y$10$v.lPNEhXcpUW9VwbrQvLs.RHr002H0ouD6zg1pWBl2kQTfcyYluTO'),
	(3, 'Ellie', 'Ellie@gmail.com', '$2y$10$RV5EH.NsRqzGaE1Ed6mQeO7ymohwdsCfxXtkVBUJoS2jcW1wdt3Ru'),
	(4, 'karina', 'karina@gmail.com', '$2y$10$LHxrNWse1pAK5bflLRszPOr.vHOlPLUh6aPgSD.P29gyUICHSU5uy'),
	(6, 'mia', 'mia@gmail.com', '$2y$10$gttMmjKUauQ.Jhwnp.YRP.YDSwvD7TdTQmyb21vf2PeviNvEGOp/S'),
	(7, 'matheus', 'matheus@gmail.com', '$2y$10$uOa7qgGmBSuuyFdD2onzl.KJ2pHqVQXfhzRA7EGCTBA110XAzlU/S'),
	(9, 'matias', 'matias@gmail.com', '$2y$10$alBQm4K/0tyTwUkW3fYNEuFtzaMfjdLbyuXaKiglC7AX/ETvvq/zq'),
	(10, 'nico', 'nico@gmail.com', '$2y$10$UtpFHbjAuxWrvGQh1oGmTuIppMpCrUmr9ItczdaIILZU.A0qakRwu'),
	(13, 'trina', 'trina@gmail.com', '$2y$10$xfWHRp69L363Xx7F.ckc7urPKrbyHUKFR0.ZlStOjkY2uwek6tzM.'),
	(15, 'lola', 'lola@gmail.com', '$2y$10$STMeL0YVaftbgK9WUxSpw.e/6umNZvvqmh2zePbM8v4rHLh9LiSwq'),
	(16, 'peter', 'peter@gmail.com', '$2y$10$XGjXBHJWjFzDl8dZ44Sni.oH1DFsKwW00HGcgzh2Bl3tsqqX1GZx6'),
	(17, 'monica', 'monica@gmail.com', '$2y$10$rVa7IYxA5u.8SST3BmgBm.XN2sy4GnIL8FiSsovIiyR8.oYj57ZRa'),
	(18, 'mary', 'mary@gmail.com', '$2y$10$SghQJ09xQd54AVG6GqJ6b..AUqxyjgCDPILMrgOvM8HsW/u9gQTWu');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
