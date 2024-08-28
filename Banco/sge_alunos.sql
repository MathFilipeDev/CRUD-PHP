-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 29/08/2024 às 01:15
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sge`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `sge_alunos`
--

CREATE TABLE `sge_alunos` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(200) NOT NULL,
  `email_aluno` varchar(200) NOT NULL,
  `telefone_aluno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sge_alunos`
--

INSERT INTO `sge_alunos` (`id_aluno`, `nome_aluno`, `email_aluno`, `telefone_aluno`) VALUES
(1, 'Matheus ', 'matheus@gmail.com', '11 99999-9999'),
(2, 'Liz', 'liz@gmail.com', '11 99999-9998'),
(3, 'Theo', 'theo@gmail.com', '11 99999-9997'),
(4, 'Flora', 'flora@gmail.com', '11 99999-9996'),
(5, 'Nina', 'nina@gmail.com', '11 99999-9995');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `sge_alunos`
--
ALTER TABLE `sge_alunos`
  ADD PRIMARY KEY (`id_aluno`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sge_alunos`
--
ALTER TABLE `sge_alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
