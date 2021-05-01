-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Maio-2021 às 22:05
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

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome`, `cnpj`, `cidade_origem`, `email`, `telefone`) VALUES
(2, 'Basalto LTDA', '1234567891011', 'Santa Terezinha', 'basaltoltda@hotmail.com', '9950-8717'),
(3, 'Zinco Companhia', '0123456789', 'Foz do Iguaçu', 'zincocompanhia@gmail.com', '01234567');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nome_sondagem`
--

CREATE TABLE `nome_sondagem` (
  `id_sondagem` int(11) NOT NULL,
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
(22, 'Felipe de Tal', 'Zinco Companhia', '2021-01-04', '2021-03-10', 1234, 123, 10, '1234', 20, 10, 843, 'wertyuioçlkjhgds'),
(23, 'Carlos Andre', 'Basalto LTDA', '2001-10-04', '2003-04-05', 123, 934, 134, '45678', 20, 10, 843, 'qweuiojfgtty'),
(24, 'Carlos Andre', 'Basalto LTDA', '2021-10-04', '2021-12-30', 123, 934, 9843, '1234', 20, 10, 843, 'asdfghjklçpoiuytrewq'),
(25, '', 'Selecione', '0000-00-00', '0000-00-00', 0, 0, 123, '45678', 8, 10, 843, 'asdfghj'),
(26, 'Carlos Andre', 'Zinco Companhia', '2010-10-10', '2010-10-20', 12, 124, 134, '1234', 20, 10, 843, 'asdfghjkl'),
(27, 'cota 1', 'Zinco Companhia', '2022-02-10', '2022-03-20', 123, 124, 123, '1234', 20, 10, 843, 'asdfghj');

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

--
-- Extraindo dados da tabela `parametros_sondagem`
--

INSERT INTO `parametros_sondagem` (`id_parametros_sondagem`, `alteracao`, `consistencia`, `fraturamento`, `rqd`, `id_sondagem`) VALUES
(5, 123, 234, 345, 456, 22),
(9, 1234, 2345, 3456, 4567, 26),
(10, 1234, 2345, 3456, 4567, 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_ocorrencia_sondagem`
--

CREATE TABLE `tipo_ocorrencia_sondagem` (
  `id_tipo_rocha_sondagem` int(11) NOT NULL,
  `profundidade_min` float NOT NULL,
  `profundidade_max` float NOT NULL,
  `tipo_rocha` varchar(30) NOT NULL,
  `id_sondagem` int(11) NOT NULL,
  `hachuras` varchar(6) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_ocorrencia_sondagem`
--

INSERT INTO `tipo_ocorrencia_sondagem` (`id_tipo_rocha_sondagem`, `profundidade_min`, `profundidade_max`, `tipo_rocha`, `id_sondagem`, `hachuras`, `cor`) VALUES
(10, 10, 40, 'Água', 22, 'asd', '#000000'),
(11, 10, 40, 'Água', 22, 'asd', '#000000'),
(13, 10, 40, 'Água', 24, 'asd', '#000000'),
(15, 10, 40, 'Filito', 26, 'asd', '#000000'),
(16, 10, 40, 'Diamictito', 27, 'asd', '#000000');

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
-- Índices para tabela `tipo_ocorrencia_sondagem`
--
ALTER TABLE `tipo_ocorrencia_sondagem`
  ADD PRIMARY KEY (`id_tipo_rocha_sondagem`),
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
  MODIFY `id_sondagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `parametros_sondagem`
--
ALTER TABLE `parametros_sondagem`
  MODIFY `id_parametros_sondagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tipo_ocorrencia_sondagem`
--
ALTER TABLE `tipo_ocorrencia_sondagem`
  MODIFY `id_tipo_rocha_sondagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
