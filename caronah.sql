-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Jul-2022 às 00:25
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caronas`
--

INSERT INTO `caronas` (`id`, `horario`, `valor`, `vagas`, `saida`, `destino`, `parada1`, `parada2`, `parada3`, `parada4`, `parada5`, `veiculo`) VALUES
(6, '21:00', 30, 4, 'Centro', 'Penha', '', '', '', '', '', 'HB20'),
(3, '20:00', 20, 4, 'Centro', 'Penha', '', '', '', '', '', 'HB20'),
(4, '20:00', 20, 4, 'Centro', 'Penha', '', '', '', '', '', 'HB20'),
(9, '22:22', 26, 1, 'Centro', 'Moda', '', '', '', '', '', 'Palio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caronas-dadas`
--

DROP TABLE IF EXISTS `caronas-dadas`;
CREATE TABLE IF NOT EXISTS `caronas-dadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horario` time NOT NULL,
  `valor` float NOT NULL,
  `saida` varchar(280) NOT NULL,
  `destino` varchar(280) NOT NULL,
  `parada1` varchar(280) NOT NULL,
  `parada2` varchar(280) NOT NULL,
  `parada3` varchar(280) NOT NULL,
  `parada4` varchar(280) NOT NULL,
  `parada5` varchar(280) NOT NULL,
  `veiculo` varchar(280) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caronas-recebidas`
--

DROP TABLE IF EXISTS `caronas-recebidas`;
CREATE TABLE IF NOT EXISTS `caronas-recebidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horario` time NOT NULL,
  `valor` float NOT NULL,
  `saida` int(11) NOT NULL,
  `destino` varchar(280) NOT NULL,
  `parada1` varchar(280) NOT NULL,
  `parada2` varchar(280) NOT NULL,
  `parada3` varchar(280) NOT NULL,
  `parada4` varchar(280) NOT NULL,
  `parada5` varchar(280) NOT NULL,
  `veiculo` varchar(280) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(140) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(280) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `endereco`, `email`, `senha`) VALUES
(5, 'Bruno Henrique Pimenta', '144.719.487-09', 'Rua Itaipu', 'jean.maia.m.santos@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
CREATE TABLE IF NOT EXISTS `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(20) NOT NULL,
  `cor` varchar(140) NOT NULL,
  `modelo` varchar(280) NOT NULL,
  `ano` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `placa` (`placa`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `placa`, `cor`, `modelo`, `ano`, `tipo`) VALUES
(1, 'BRA2E19', 'Vermelha', 'Gol', 2010, 1),
(2, 'BRA2E20', 'Branco', 'HB20', 2020, 1),
(3, '12345', 'Preto', 'Palio', 1990, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
