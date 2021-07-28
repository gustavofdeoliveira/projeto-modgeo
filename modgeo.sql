-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jul-2021 às 03:01
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

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
  `nmEmpresa` varchar(150) NOT NULL,
  `nrCnpj` varchar(14) NOT NULL,
  `nmCidadeOrigem` varchar(100) NOT NULL,
  `nmEmail` varchar(150) NOT NULL,
  `nrTelefone` varchar(14) NOT NULL,
  `dtInclusao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nmEmpresa`, `nrCnpj`, `nmCidadeOrigem`, `nmEmail`, `nrTelefone`, `dtInclusao`) VALUES
(16, 'PRATICA ENGENHARIA LTDA', '08.385.477/000', 'SP', 'ORCEF@ORCEF.COM.BR', '(11) 3851-0167', '2021-07-27 20:43:56'),
(17, 'BRASECOL ENGENHARIA E FUNDACOES S.A.', '82.715.061/000', 'SC', 'BRASECOL@CONTATO.COM.BR', '(45) 9999-9999', '2021-07-27 20:47:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nome_sondagem`
--

CREATE TABLE `nome_sondagem` (
  `id_sondagem` int(15) NOT NULL,
  `nmSondagem` varchar(150) NOT NULL,
  `nmResponsavel` varchar(150) NOT NULL,
  `dtInicio` date NOT NULL,
  `dtTermino` date NOT NULL,
  `nrCoord_x` float NOT NULL,
  `nrCoord_y` float NOT NULL,
  `nrCota` float NOT NULL,
  `nrDirecao` varchar(5) NOT NULL,
  `nrProfundidade` float NOT NULL,
  `nrInclinacao` float NOT NULL,
  `nrGeoreferenciamento` float NOT NULL,
  `txtComentario` text NOT NULL,
  `dtInclusao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parametros_sondagem`
--

CREATE TABLE `parametros_sondagem` (
  `id_parametros_sondagem` int(15) NOT NULL,
  `nrAlteracao` int(11) NOT NULL,
  `nrConsistencia` int(11) NOT NULL,
  `nrFraturamento` int(11) NOT NULL,
  `nrRqd` int(11) NOT NULL,
  `id_sondagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_ocorrencia_sondagem`
--

CREATE TABLE `tipo_ocorrencia_sondagem` (
  `id_tipo_ocorrencia_sondagem` int(11) NOT NULL,
  `nrProfundidadeMin` float NOT NULL,
  `nrProfundidadeMax` float NOT NULL,
  `nmTipoRocha` varchar(50) NOT NULL,
  `id_sondagem` int(11) NOT NULL,
  `nmHachuras` varchar(50) NOT NULL,
  `nmCor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `nome_sondagem`
--
ALTER TABLE `nome_sondagem`
  MODIFY `id_sondagem` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
