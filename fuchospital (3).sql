-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2018 às 04:49
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuchospital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `name`, `arquivo`, `created_at`, `updated_at`) VALUES
(1, 'teste', 'teste.txt', '2018-11-23 02:00:00', '2018-11-23 02:00:00'),
(2, 'teste2', 'teste2.txt', '2018-11-23 02:00:00', '2018-11-23 02:00:00'),
(4, 'arquivo2', 'arquivos/053547201811235bf791b352d1a.jpeg', '2018-11-23 07:35:47', '2018-11-23 07:35:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE `avisos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'teste', 'tests teste teste', '2018-11-15 02:00:00', '2018-11-15 02:00:00'),
(2, 'testa 1', 'testeando', '2018-11-15 18:18:07', '2018-11-15 18:21:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapios`
--

CREATE TABLE `cardapios` (
  `id` int(10) UNSIGNED NOT NULL,
  `cardapio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cardapios`
--

INSERT INTO `cardapios` (`id`, `cardapio`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Arroz com feijão', '2018-11-15', '2018-11-16 02:00:00', '2018-11-16 02:00:00'),
(2, 'Massa e carne', '2018-11-23', '2018-11-23 02:00:00', '2018-11-23 02:00:00'),
(4, 'Lazanha de frango', '2018-11-30', '2018-11-23 10:35:32', '2018-11-23 10:35:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Problema 1', 'Problema ao acessar a p&aacute;gina', 2, '2018-11-23 22:51:21', '2018-11-23 22:51:21'),
(3, 'Problema 3', 'Problema no logout.', 2, '2018-11-23 22:52:54', '2018-11-23 22:52:54'),
(4, 'Problema 4', 'Erro layout.', 2, '2018-11-23 22:54:41', '2018-11-23 22:54:41'),
(6, 'Problema na maquina', 'Minha maquina n&atilde;o liga.', 5, '2018-11-23 23:40:09', '2018-11-23 23:40:09'),
(7, 'teste', 'teste', 2, '2018-12-01 02:32:15', '2018-12-01 02:32:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(2, 'evento teste', 'masi um teste', 'evento/165748201811155beda58c0ceb7.png', '2018-11-15 18:57:48', '2018-11-15 18:57:48'),
(3, 'Evento 1', 'No dia 03/11 ocorrerá um evento muito.', 'evento/170645201811155beda7a55dd57.jpeg', '2018-11-15 19:06:45', '2018-11-20 03:52:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_13_224716_user', 1),
(2, '2018_10_27_030401_create_noticias_table', 2),
(3, '2018_11_15_152201_create_avisos_table', 3),
(4, '2018_11_15_152958_create_avisos_table', 4),
(5, '2018_11_15_153104_create_avisos_table', 5),
(6, '2018_11_15_163806_create_eventos_table', 6),
(7, '2018_11_16_153215_create_cardapios_table', 7),
(8, '2018_11_16_153548_create_cardapios_table', 8),
(9, '2018_11_23_035637_create_arquivos_table', 9),
(10, '2018_11_23_100837_create_password_resets_table', 10),
(11, '2018_11_23_173029_create_chamados_table', 11),
(12, '2018_11_23_233409_create_respostas_table', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(12, 'noticia 3', 'Mussum Ipsum, cacilds vidis litro abertis. In elementis mé pra quem é amistosis quis leo. Per aumento de cachacis, eu reclamis. Sapien in monti palavris qui num significa nadis i pareci latim. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.\r\n\r\nSuco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Leite de capivaris, leite de mula manquis sem cabeça. Manduma pindureta quium dia nois paga.\r\n\r\nDelegadis gente finis, bibendum egestas augue arcu ut est. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. Viva Forevis aptent taciti sociosqu ad litora torquent.\r\n\r\nQuem manda na minha terra sou euzis! Paisis, filhis, espiritis santis. Diuretics paradis num copo é motivis de denguis. Si num tem leite então bota uma pinga aí cumpadi!\r\n\r\nPraesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Aenean aliquam molestie leo, vitae iaculis nisl. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis!', 'noticia/014938201810295bd6673211308.png', '2018-10-29 04:49:38', '2018-11-07 00:14:43'),
(15, 'Notícia 5', 'Mussum Ipsum, cacilds vidis litro abertis. In elementis mé pra quem é amistosis quis leo. Per aumento de cachacis, eu reclamis. Sapien in monti palavris qui num significa nadis i pareci latim. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.\r\n\r\nSuco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Leite de capivaris, leite de mula manquis sem cabeça. Manduma pindureta quium dia nois paga.\r\n\r\nDelegadis gente finis, bibendum egestas augue arcu ut est. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. Viva Forevis aptent taciti sociosqu ad litora torquent.\r\n\r\nQuem manda na minha terra sou euzis! Paisis, filhis, espiritis santis. Diuretics paradis num copo é motivis de denguis. Si num tem leite então bota uma pinga aí cumpadi!\r\n\r\nPraesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Aenean aliquam molestie leo, vitae iaculis nisl. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis!', 'noticia/022625201810295bd66fd16a2d7.png', '2018-10-29 05:26:25', '2018-11-07 00:15:03'),
(16, 'Hoberrek', 'A Hoberrek Arquitetos associados est&aacute; promovendo um evento.', 'noticia/014610201811205bf3676275252.jpeg', '2018-11-20 03:46:12', '2018-11-20 03:46:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, 'allan_f2008@hotmail.com', '$2y$10$jnmxW3VRo3cDUBZudtWBdOZSIisqV3MMGXQTz5GL0AqXQ77C7yLTm', '2018-11-23 12:12:07', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_chamado` int(10) UNSIGNED NOT NULL,
  `resposta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `id_chamado`, `resposta`, `created_at`, `updated_at`) VALUES
(5, 2, 'teste', NULL, NULL),
(6, 2, 'Estamos validando.', '2018-11-24 04:35:42', '2018-11-24 04:35:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomecompleto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nascimento` date NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `nomecompleto`, `email`, `email_verified_at`, `password`, `nascimento`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'allan', 'Allan Ferreira', 'allan_f2008@hotmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1992-07-25', 'user/021835201812015c01ef7b0d17c.jpeg', 'jnWMA54DwIC1SzqFursT5kfFbwmY5cZxDwd7AIpnp302WG5ig3J2Vu9oxQAb', '2018-10-26 05:06:57', '2018-12-01 04:52:29'),
(3, 'maria', 'Maria Borges', 'maria8@hotmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1983-03-17', 'user/mari.jpg', 'ra07V4fnM8hzjzAhroObLqOpwrzcd0wT3IdbpAo4A84N82qsg94CswlIdnMu', '2018-10-26 05:06:57', '2018-12-01 04:55:54'),
(4, 'pedro', 'Pedro Borba', 'pedro8@hotmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1983-01-13', 'user/pedro.jpg', 'ra07V4fnM8hzjzAhroObLqOpwrzcd0wT3IdbpAo4A84N82qsg94CswlIdnMu', '2018-10-26 05:06:57', '2018-10-26 05:06:57'),
(5, 'bruna', 'Bruna Silva', 'bruna@gmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1983-06-09', 'user/bruna.jpg', 'ra07V4fnM8hzjzAhroObLqOpwrzcd0wT3IdbpAo4A84N82qsg94CswlIdnMu', '2018-10-26 05:06:57', '2018-10-26 05:06:57'),
(6, 'marcia', 'Marcia Costa', 'marcia@gmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1983-10-07', 'user/marcia.jpg', 'ra07V4fnM8hzjzAhroObLqOpwrzcd0wT3IdbpAo4A84N82qsg94CswlIdnMu', '2018-10-26 05:06:57', '2018-10-26 05:06:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardapios`
--
ALTER TABLE `cardapios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chamados_user_id_foreign` (`user_id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `respostas_id_chamado_foreign` (`id_chamado`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cardapios`
--
ALTER TABLE `cardapios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `chamados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_id_chamado_foreign` FOREIGN KEY (`id_chamado`) REFERENCES `chamados` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
