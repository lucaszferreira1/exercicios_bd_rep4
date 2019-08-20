-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 20-Ago-2019 às 06:48
-- Versão do servidor: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.14-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atv_prt_042_bd(2)`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste1`
--

CREATE TABLE `teste1` (
  `testID` int(4) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `idade` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `teste1`
--

INSERT INTO `teste1` (`testID`, `nome`, `idade`) VALUES
(1234, 'Marcus', 16),
(2134, 'João Coelho', 17),
(4321, 'Lucas', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teste1`
--
ALTER TABLE `teste1`
  ADD PRIMARY KEY (`testID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
