-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Out-2015 às 23:37
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exemplo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `comentario` longtext NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `post`, `nome`, `comentario`, `status`) VALUES
(1, 'Post Fulano de tal', 'Matteus Sousa', 'comentário no post fulano de tal yaahhh', 0),
(2, 'Post Fulano de tal 2', 'Matteus Sousa', 'comentário no post fulano de tal 2 yaahhh', 0),
(3, 'Post Fulano de tal 3', 'Matteus Sousa', 'comentário no post fulano de tal 3 yaahhh', 0),
(4, 'Post Fulano de tal 4', 'Matteus Sousa', 'comentário no post fulano de tal 4 yaahhh', 2),
(5, 'Post Fulano de tal 5', 'Matteus Sousa', 'comentário no post fulano de tal 5 yaahhh', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
