-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 20-Ago-2019 às 06:47
-- Versão do servidor: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.14-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atv_prt_041_bd(2)`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipes`
--

CREATE TABLE `equipes` (
  `número da equipe` int(200) NOT NULL,
  `nome da equipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipes`
--

INSERT INTO `equipes` (`número da equipe`, `nome da equipe`) VALUES
(32, 'Os cus são legal'),
(54, 'Anarquia da Porrada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `nome da escola` varchar(70) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`nome da escola`, `cidade`, `estado`) VALUES
('IFC', 'Araquari', 'Santa Catarina'),
('IFC', 'Araquari', 'Santa Catarina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE `membros` (
  `e-mail` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `escola` varchar(255) NOT NULL,
  `função` varchar(60) NOT NULL,
  `número da equipe` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`e-mail`, `nome`, `escola`, `função`, `número da equipe`) VALUES
('joaocoelho@gmail.com', 'João Vitor Coelho', 'IFC', 'Estudante', 54),
('lucaszferreira100@gmail.com', 'Lucas Ziemann Ferreira', 'IFC', 'Estudante', 60),
('Marcusviniciusshow@gmail.com', 'Marcus Vinicius da Costa Graciano', 'IFC', 'Estudante', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`número da equipe`);

--
-- Indexes for table `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`e-mail`);
ALTER TABLE `membros` ADD FULLTEXT KEY `Marcos` (`e-mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
