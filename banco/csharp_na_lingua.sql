-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/09/2023 às 20:27
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `csharp_na_lingua`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `resultados_quiz`
--

CREATE TABLE `resultados_quiz` (
  `id` int(11) NOT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `resultado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `resultados_quiz`
--

INSERT INTO `resultados_quiz` (`id`, `cod_usuario`, `resultado`) VALUES
(1, 6, 2),
(3, 7, 1),
(4, 8, 2),
(5, 9, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'Admin', 'admin@admin.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'Admin2', 'admin2@admin.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'Admin3', 'admin3@admin.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'Rafael Perez Silva', 'rafaelperezsilva2005@gmail.com', '$2y$10$a3jiU2PdE6ggdiTTPHH9sOtQgMhUXhlzTMAVyWbZLcyrP/Yper5Oq'),
(7, 'Luciana', 'luciana@gmail.com', '$2y$10$qJXYiZc6UULrkO04YRjMcuzYW/rHaPGUHDu1OUhWxwCM0hrpTzkLi'),
(8, 'Kayk', 'kayk@gmail.com', '$2y$10$efRMMaVcuIc9sSSHeTf/Je1LpgnU68w62IReFWKsdF6L91KD8Zspi'),
(9, 'Gabriel', 'gabriel@gmail.com', '$2y$10$J9hnvIawVVvWXIAf9szuieOdKWdL/eHd6SGMOoGTg19HO3VTnq3YO');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `resultados_quiz`
--
ALTER TABLE `resultados_quiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `resultados_quiz`
--
ALTER TABLE `resultados_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `resultados_quiz`
--
ALTER TABLE `resultados_quiz`
  ADD CONSTRAINT `resultados_quiz_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`cod_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
