-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Fev-2021 às 18:47
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `modgeo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `nome_sondagem`
--

CREATE TABLE `nome_sondagem` (
  `id_sondagem` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `coord_x` float NOT NULL,
  `coord_y` float NOT NULL,
  `cota` float NOT NULL,
  `profundidade` float NOT NULL,
  `inclinacao` float NOT NULL,
  `georeferenciamento` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nome_sondagem`
--

INSERT INTO `nome_sondagem` (`id_sondagem`, `nome`, `coord_x`, `coord_y`, `cota`, `profundidade`, `inclinacao`, `georeferenciamento`) VALUES
(1, 'sondagem 1', 123, 123, 54, 123, 0, 0),
(2, 'sondagem 1', 123, 123, 54, 123, 0, 0),
(3, 'sondagem 12', 123455, 123545, 5455, 123545, 0, 0),
(4, 'sondagem 1', 123, 123, 54, 123, 5, 6675),
(5, 'sondagem 1', 123, 123, 54, 123, 5, 6675),
(6, 'Sondagem teste', 1235, 11234, 97, 87, 90, 21343400),
(7, 'Sondagem teste', 1235, 11234, 97, 87, 90, 21343400);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_rocha_sondagem`
--

CREATE TABLE `tipo_rocha_sondagem` (
  `id_tipo_rocha_sondagem` int(11) NOT NULL,
  `profundidade_min` float NOT NULL,
  `profundidade_max` float NOT NULL,
  `tipo_rocha` varchar(30) NOT NULL,
  `id_sondagem` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `nome_sondagem`
--
ALTER TABLE `nome_sondagem`
  ADD PRIMARY KEY (`id_sondagem`);

--
-- Índices para tabela `tipo_rocha_sondagem`
--
ALTER TABLE `tipo_rocha_sondagem`
  ADD PRIMARY KEY (`id_tipo_rocha_sondagem`),
  ADD KEY `id_sondagem` (`id_sondagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `nome_sondagem`
--
ALTER TABLE `nome_sondagem`
  MODIFY `id_sondagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
