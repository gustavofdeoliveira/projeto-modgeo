-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2021 às 03:00
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

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

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome`, `cnpj`, `cidade_origem`, `email`, `telefone`) VALUES
(2, 'Basalto LTDA', '1234567891011', 'Santa Terezinha', 'basaltoltda@hotmail.com', '9950-8717'),
(3, 'Zinco Companhia', '0123456789', 'Foz do Igua?u', 'zincocompanhia@gmail.com', '01234567');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nome_sondagem`
--

CREATE TABLE `nome_sondagem` (
  `id_sondagem` int(15) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `responsavel` varchar(150) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `coord_x` float NOT NULL,
  `coord_y` float NOT NULL,
  `cota` float NOT NULL,
  `direcao` varchar(5) NOT NULL,
  `profundidade` float NOT NULL,
  `inclinacao` float NOT NULL,
  `georeferenciamento` float NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nome_sondagem`
--

INSERT INTO `nome_sondagem` (`id_sondagem`, `nome`, `responsavel`, `inicio`, `termino`, `coord_x`, `coord_y`, `cota`, `direcao`, `profundidade`, `inclinacao`, `georeferenciamento`, `comentario`) VALUES
(2, 'Sondagem Itaipu', '2', '2021-03-04', '2021-04-10', 1234, 1234, 1234, '45678', 20, 12, 23, 'essa sondagem foi realizada em Santa Terezinha'),
(3, 'Sondagem em Ita', '2', '2021-02-10', '2021-04-04', 123, 934, 123, '45678', 1234, 325, 843, 'Sondagem realizada em Itaipu (lado da Argentina)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parametros_sondagem`
--

CREATE TABLE `parametros_sondagem` (
  `id_parametros_sondagem` int(15) NOT NULL,
  `alteracao` int(11) NOT NULL,
  `consistencia` int(11) NOT NULL,
  `fraturamento` int(11) NOT NULL,
  `rqd` int(11) NOT NULL,
  `id_sondagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `parametros_sondagem`
--

INSERT INTO `parametros_sondagem` (`id_parametros_sondagem`, `alteracao`, `consistencia`, `fraturamento`, `rqd`, `id_sondagem`) VALUES
(1, 1234, 2345, 3456, 4567, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_ocorrencia_sondagem`
--

CREATE TABLE `tipo_ocorrencia_sondagem` (
  `id_tipo_ocorrencia_sondagem` int(11) NOT NULL,
  `profundidade_min` float NOT NULL,
  `profundidade_max` float NOT NULL,
  `tipo_rocha` varchar(30) NOT NULL,
  `id_sondagem` int(11) NOT NULL,
  `hachuras` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_ocorrencia_sondagem`
--

INSERT INTO `tipo_ocorrencia_sondagem` (`id_tipo_ocorrencia_sondagem`, `profundidade_min`, `profundidade_max`, `tipo_rocha`, `id_sondagem`, `hachuras`, `cor`) VALUES
(1, 10, 40, 'Água', 2, 'asd', '#000000'),
(4, 12, 40, 'Água', 3, 'asd', '#000000');

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
  ADD KEY `fk_id_sondagem` (`id_sondagem`);

--
-- Índices para tabela `tipo_ocorrencia_sondagem`
--
ALTER TABLE `tipo_ocorrencia_sondagem`
  ADD PRIMARY KEY (`id_tipo_ocorrencia_sondagem`),
  ADD KEY `id_sondagem` (`id_sondagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `nome_sondagem`
--
ALTER TABLE `nome_sondagem`
  MODIFY `id_sondagem` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `parametros_sondagem`
--
ALTER TABLE `parametros_sondagem`
  MODIFY `id_parametros_sondagem` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tipo_ocorrencia_sondagem`
--
ALTER TABLE `tipo_ocorrencia_sondagem`
  MODIFY `id_tipo_ocorrencia_sondagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `parametros_sondagem`
--
ALTER TABLE `parametros_sondagem`
  ADD CONSTRAINT `fk_id_sondagem` FOREIGN KEY (`id_sondagem`) REFERENCES `nome_sondagem` (`id_sondagem`);

--
-- Limitadores para a tabela `tipo_ocorrencia_sondagem`
--
ALTER TABLE `tipo_ocorrencia_sondagem`
  ADD CONSTRAINT `id_sondagem` FOREIGN KEY (`id_sondagem`) REFERENCES `nome_sondagem` (`id_sondagem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
