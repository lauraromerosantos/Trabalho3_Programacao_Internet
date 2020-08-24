-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2020 às 16:20
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `n_matricula` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `curso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`n_matricula`, `nome`, `endereco`, `cidade`, `curso`) VALUES
(8, 'Ana Júlia Schimdt', 'Av. Rio Branco', 'Rio de Janeiro', '2'),
(12, 'Pedro Sampaio', 'Av. Goethe', 'Porto Alegre', '4'),
(14, 'Marco Muller', 'Av. Cristiano Machado', 'Rio de Janeiro', '1'),
(15, 'Cassiano Bryant', 'Av. Mal. Floriano Peixoto', 'Porto Alegre', '3'),
(16, 'Laura Bennett', 'R Constante Ramos', 'Rio de Janeiro', '5'),
(25, 'Alfredo Jr Ramos', 'Av. Setembro', 'Belo Horizonte', '4'),
(26, 'Marina Gomes', 'Rua Antônio Cabral', 'Joinville', '5'),
(27, 'Joaquim Barbosa', 'Av. Sebastian Neves', 'Recife', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `cod_cidade` smallint(20) NOT NULL,
  `nomecid` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`cod_cidade`, `nomecid`, `estado`) VALUES
(1, 'Porto Alegre', 'RS'),
(2, 'Rio de Janeiro', 'Rio de Janeiro'),
(3, 'Belo Horizonte', 'Minas Gerais'),
(4, 'São Paulo', 'São Paulo'),
(5, 'Joinville', 'Santa Catarina'),
(6, 'Recife', 'Pernambuco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `cod_curso` smallint(6) NOT NULL,
  `nomecur` varchar(30) NOT NULL,
  `data_abertura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`cod_curso`, `nomecur`, `data_abertura`) VALUES
(1, 'Sistemas de Informação', '2009-02-04'),
(2, 'Design de Moda', '0000-00-00'),
(3, 'Engenharia Mecânica', '2011-02-20'),
(4, 'Medicina', '2000-01-21'),
(5, 'Direito', '2012-02-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `codestado` smallint(6) NOT NULL,
  `nomeest` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`codestado`, `nomeest`) VALUES
(1, 'RS'),
(2, 'Rio de Janeiro'),
(3, 'Minas Gerais'),
(4, 'São Paulo'),
(5, 'Santa Catarina'),
(6, 'Pernambuco');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`n_matricula`);

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`cod_cidade`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`codestado`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `n_matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `cod_cidade` smallint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `cod_curso` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `codestado` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
