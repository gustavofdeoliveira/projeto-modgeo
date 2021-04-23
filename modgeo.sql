-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Abr-2021 às 00:48
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `cidade_origem` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nome_sondagem`
--

CREATE TABLE `nome_sondagem` (
  `id_sondagem` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `responsavel` varchar(150) NOT NULL,
  `coord_x` float NOT NULL,
  `coord_y` float NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `cota` float NOT NULL,
  `direcao` varchar(5) NOT NULL,
  `profundidade` float NOT NULL,
  `inclinacao` float NOT NULL,
  `georeferenciamento` float NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parametros_sondagem`
--

CREATE TABLE `parametros_sondagem` (
  `id_parametros_sondagem` int(11) NOT NULL,
  `alteracao` int(11) NOT NULL,
  `consistencia` int(11) NOT NULL,
  `fraturamento` int(11) NOT NULL,
  `rqd` int(11) NOT NULL,
  `id_sondagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_ocorrencia _sondagem`
--

CREATE TABLE `tipo_ocorrencia _sondagem` (
  `id_tipo_rocha_sondagem` int(11) NOT NULL,
  `profundidade_min` float NOT NULL,
  `profundidade_max` float NOT NULL,
  `tipo_rocha` varchar(30) NOT NULL,
  `id_sondagem` int(11) NOT NULL,
  `hachuras` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices para tabela `nome_sondagem`
--
ALTER TABLE `nome_sondagem`
  ADD PRIMARY KEY (`id_sondagem`);

--
-- Índices para tabela `parametros_sondagem`
--
ALTER TABLE `parametros_sondagem`
  ADD PRIMARY KEY (`id_parametros_sondagem`),
  ADD KEY `id_sondagem` (`id_sondagem`);

--
-- Índices para tabela `tipo_ocorrencia _sondagem`
--
ALTER TABLE `tipo_ocorrencia _sondagem`
  ADD PRIMARY KEY (`id_tipo_rocha_sondagem`),
  ADD KEY `id_sondagem` (`id_sondagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nome_sondagem`
--
ALTER TABLE `nome_sondagem`
  MODIFY `id_sondagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `parametros_sondagem`
--
ALTER TABLE `parametros_sondagem`
  MODIFY `id_parametros_sondagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_ocorrencia _sondagem`
--
ALTER TABLE `tipo_ocorrencia _sondagem`
  MODIFY `id_tipo_rocha_sondagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `parametros_sondagem`
--
ALTER TABLE `parametros_sondagem`
  ADD CONSTRAINT `sondagem_parameto` FOREIGN KEY (`id_sondagem`) REFERENCES `nome_sondagem` (`id_sondagem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
