-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Ago-2024 às 18:53
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trab-manter`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `recuperar_senha`
--

DROP TABLE IF EXISTS `recuperar_senha`;
CREATE TABLE IF NOT EXISTS `recuperar_senha` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data_criacao` datetime NOT NULL,
  `token` char(100) NOT NULL,
  `usado` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `recuperar_senha`
--

INSERT INTO `recuperar_senha` (`email`, `data_criacao`, `token`, `usado`) VALUES
('bruno.2022310667@aluno.iffar.edu.br', '2024-07-29 16:29:56', 'c05a25063e008ad2a351cb289a4bbeeff14c8359d409d7b67c1e3032b788b81772ba4890fd5691d76e76a008f2df5b2d6268', 0),
('bruno.2022310667@aluno.iffar.edu.br', '2024-07-29 16:31:11', '30879407995d06cdf8ea990ffa6c9b345abb59f4b9be072c81935da8d4350630b97c6747706075eb08e65139c46e5a1e1832', 0),
('bruno.2022310667@aluno.iffar.edu.br', '2024-07-29 16:35:01', '0b5a9cf9e473288856ee1bfc4cefee8e27378b7fdf790a63efd9fa306c23b853e7401639aa06ee62613bc7cf215f24dd36a6', 1),
('bruno.2022310667@aluno.iffar.edu.br', '2024-08-05 15:50:12', 'b0808b5af74ea7a224b40baf71ab7c63036ffe49f2ee8d5892034b84a514c128489ab72f6ee06ee124f1cb49e909b33e38c9', 0),
('bruno.2022310667@aluno.iffar.edu.br', '2024-08-05 15:54:40', '932acc4599cf7022b4a6056b67e85d5df3e65bbc3748518046bd4881f2ce0482971a696d89e0405d87c0d61ebd76518ecc23', 0),
('bruno.2022310667@aluno.iffar.edu.br', '2024-08-05 15:57:38', 'ff7ad2004d876dc8c7bc46691d5977109393ad16acd4b02cb206cfcc26cf10316d7b5993a04858110e4c981ad49255f48eaa', 1),
('bruno.2022310667@aluno.iffar.edu.br', '2024-08-05 16:13:29', '7ed63d719e1adc33e9222f3c45a791e7c7c4603da1c9c69027b19c8e053d9af8a9ca6965f4d3e2a2085be8eb370689be55b3', 1),
('bruno.2022310667@aluno.iffar.edu.br', '2024-08-05 16:15:58', '2cde3678f2e6fd0f1d163ce0e94f6cc740df1107900781ec9ca4afc77a3223feb0ae1553cf4e607d3b3abd6e2eff013b256f', 1),
('bruno.2022310667@aluno.iffar.edu.br', '2024-08-05 16:16:52', 'df7521a8881091e86ee5ef6f358ecc3dad63f1186f83de21996748d71d901cf3104e1f70041d47dd5a4f99bdcf04d88a7000', 0),
('bruno.2022310667@aluno.iffar.edu.br', '2024-08-09 08:22:50', '58a50e708512c4f4adadd08e209668aad096f21244dc6a4ffa3b876ed3fb9bc0147e104e0bcd2443eba81a880f244b6d08ce', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` int NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'default.jfif',
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `foto`) VALUES
(4, 'bruno', 'bruno.2022310667@aluno.iffar.edu.br', 123456, 'default.jfif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
