-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Jul-2022 às 00:24
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `caronah`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caronas`
--

DROP TABLE IF EXISTS `caronas`;
CREATE TABLE IF NOT EXISTS `caronas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horario` varchar(280) NOT NULL,
  `valor` float NOT NULL,
  `vagas` int(11) NOT NULL,
  `saida` varchar(280) NOT NULL,
  `destino` varchar(280) NOT NULL,
  `parada1` varchar(280) DEFAULT NULL,
  `parada2` varchar(280) DEFAULT NULL,
  `parada3` varchar(280) DEFAULT NULL,
  `parada4` varchar(280) DEFAULT NULL,
  `parada5` varchar(280) DEFAULT NULL,
  `veiculo` varchar(280) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caronas`
--

INSERT INTO `caronas` (`id`, `horario`, `valor`, `vagas`, `saida`, `destino`, `parada1`, `parada2`, `parada3`, `parada4`, `parada5`, `veiculo`) VALUES
(6, '21:00', 30, 4, 'Centro', 'Penha', '', '', '', '', '', 'HB20'),
(3, '20:00', 20, 4, 'Centro', 'Penha', '', '', '', '', '', 'HB20'),
(4, '20:00', 20, 4, 'Centro', 'Penha', '', '', '', '', '', 'HB20'),
(5, '10:00', 20, 4, 'Centro', 'Penha', '', '', '', '', '', 'HB20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
