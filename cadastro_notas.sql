-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Out-2022 às 21:48
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_notas`
--

CREATE TABLE `cadastro_notas` (
  `Id_estudante` int(11) NOT NULL,
  `nome_estudante` varchar(100) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `nota4` float NOT NULL,
  `nota5` float NOT NULL,
  `nota6` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_notas`
--

INSERT INTO `cadastro_notas` (`Id_estudante`, `nome_estudante`, `nota1`, `nota2`, `nota3`, `nota4`, `nota5`, `nota6`) VALUES
(12, 'Maria Eduarda', 9, 9, 9, 9, 9, 9),
(13, 'Maria Eduarda', 9, 9, 9, 9, 9, 9),
(14, 'Maria Eduarda', 9, 9, 9, 9, 9, 9),
(15, 'Maria Eduarda', 9, 9, 9, 9, 9, 9),
(16, 'Maria Eduarda', 9, 9, 9, 9, 9, 9),
(17, 'Maria Eduarda', 9, 9, 9, 9, 9, 9);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_notas`
--
ALTER TABLE `cadastro_notas`
  ADD PRIMARY KEY (`Id_estudante`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_notas`
--
ALTER TABLE `cadastro_notas`
  MODIFY `Id_estudante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
