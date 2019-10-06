-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 16/09/2019 às 00:56
-- Versão do servidor: 10.4.6-MariaDB
-- Versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agv-check`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agv-troll`
--

CREATE TABLE `agv-troll` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `check_list`
--

CREATE TABLE `check_list` (
  `id` int(11) NOT NULL,
  `codigo` int(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `alimentacao` varchar(255) NOT NULL,
  `justali` varchar(255) NOT NULL,
  `otico` varchar(255) NOT NULL,
  `justotic` varchar(255) NOT NULL,
  `mecanico` varchar(255) NOT NULL,
  `justmecanic` varchar(255) NOT NULL,
  `fita` varchar(255) NOT NULL,
  `justfita` varchar(255) NOT NULL,
  `integridade` varchar(255) NOT NULL,
  `justintegro` varchar(255) NOT NULL,
  `sinalizacao` varchar(255) NOT NULL,
  `justsinal` varchar(255) NOT NULL,
  `conservacao` varchar(255) NOT NULL,
  `justconserv` varchar(255) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `check_list`
--

INSERT INTO `check_list` (`id`, `codigo`, `tipo`, `alimentacao`, `justali`, `otico`, `justotic`, `mecanico`, `justmecanic`, `fita`, `justfita`, `integridade`, `justintegro`, `sinalizacao`, `justsinal`, `conservacao`, `justconserv`, `data`) VALUES
(20, 3, 'AGV', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', '2019-09-15 17:56:22'),
(18, 2, 'AGV', 'G', 'GOOD', 'NG', 'NO GOOD', 'G', 'GOOD', 'NG', 'NO GOOD', 'G', 'GOOD', 'NG', 'TA BOM NAO', 'G', 'GOOD', '2019-09-15 15:47:09'),
(21, 0, 'AGV', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', '2019-09-15 17:57:56'),
(22, 0, 'AGV', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', '2019-09-15 17:58:25'),
(23, 0, 'AGV', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', 'G', 'GOOD', '2019-09-15 17:58:35');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agv-troll`
--
ALTER TABLE `agv-troll`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `check_list`
--
ALTER TABLE `check_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agv-troll`
--
ALTER TABLE `agv-troll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `check_list`
--
ALTER TABLE `check_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
