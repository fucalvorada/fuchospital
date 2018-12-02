-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2018 às 20:31
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
(12, '2018_11_23_233409_create_respostas_table', 12),
(13, '2018_12_02_034202_create_roles_table', 13),
(14, '2018_12_02_034241_create_permissions_table', 13);

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
(12, 'noticia 3', 'Mussum Ipsum, cacilds vidis litro abertis. In elementis mé pra quem é amistosis quis leo. Per aumento de cachacis, eu reclamis. Sapien in monti palavris qui num significa nadis i pareci latim. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.\r\n\r\nSuco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Leite de capivaris, leite de mula manquis sem cabeça. Manduma pindureta quium dia nois paga.\r\n\r\nDelegadis gente finis, bibendum egestas augue arcu ut est. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. Viva Forevis aptent taciti sociosqu ad litora torquent.\r\n\r\nQuem manda na minha terra sou euzis! Paisis, filhis, espiritis santis. Diuretics paradis num copo é motivis de denguis. Si num tem leite então bota uma pinga aí cumpadi!\r\n\r\nPraesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Aenean aliquam molestie leo, vitae iaculis nisl. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis!', 'noticia/192643201812025c0431f3b30a5.jpeg', '2018-10-29 04:49:38', '2018-12-02 21:26:43'),
(15, 'Notícia teste', 'Mussum Ipsum, cacilds vidis litro abertis. In elementis mé pra quem é amistosis quis leo. Per aumento de cachacis, eu reclamis. Sapien in monti palavris qui num significa nadis i pareci latim. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.\r\n\r\nSuco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Leite de capivaris, leite de mula manquis sem cabeça. Manduma pindureta quium dia nois paga.\r\n\r\nDelegadis gente finis, bibendum egestas augue arcu ut est. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. Viva Forevis aptent taciti sociosqu ad litora torquent.\r\n\r\nQuem manda na minha terra sou euzis! Paisis, filhis, espiritis santis. Diuretics paradis num copo é motivis de denguis. Si num tem leite então bota uma pinga aí cumpadi!\r\n\r\nPraesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Aenean aliquam molestie leo, vitae iaculis nisl. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis!', 'noticia/192729201812025c0432212677c.jpeg', '2018-10-29 05:26:25', '2018-12-02 21:27:29'),
(16, 'Hoberrek', 'A Hoberrek Arquitetos associados est&aacute; promovendo um evento.', 'noticia/192743201812025c04322f46f46.jpeg', '2018-11-20 03:46:12', '2018-12-02 21:27:43');

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
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'create_aviso', 'Gerenciar Aviso', NULL, NULL),
(2, 'create_doc', 'Gerenciar Arquivos', NULL, NULL),
(3, 'create_eventos', 'Gerenciar Eventos', NULL, NULL),
(4, 'create_notice', 'Gerenciar Noticia', NULL, NULL),
(5, 'create_cardapio', 'Gerenciar Cardápio', NULL, NULL),
(6, 'create_suporte', 'Abrir Chamado ', NULL, NULL),
(7, 'create_user', 'Gerenciar Usuários', NULL, NULL),
(9, 'gen_chamado', 'Gerenciar Suporte', NULL, NULL),
(10, 'adm_user', 'Gerenciar Usuários', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(5, 4, 1),
(13, 1, 1),
(16, 5, 1),
(19, 2, 1),
(21, 3, 1),
(26, 7, 1),
(32, 4, 2),
(34, 2, 2),
(36, 3, 2),
(38, 5, 2),
(39, 6, 2),
(40, 1, 2),
(41, 6, 3),
(43, 9, 6),
(45, 10, 7);

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
(6, 2, 'Estamos validando.', '2018-11-24 04:35:42', '2018-11-24 04:35:42'),
(7, 2, 'teste', '2018-12-02 21:06:13', '2018-12-02 21:06:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'adm', 'Administrador do sistema', NULL, NULL),
(2, 'diretor', 'diretoria', NULL, NULL),
(3, 'padrao', 'Usuário padrão', NULL, NULL),
(6, 'gen_chamado', 'gen chamado', NULL, NULL),
(7, 'adm_user', 'Administrar usuários', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 2),
(11, 2, 5),
(13, 3, 3),
(15, 2, 4),
(17, 2, 6),
(19, 1, 4),
(23, 2, 3),
(24, 6, 4),
(25, 7, 2),
(27, 7, 19),
(28, 1, 19),
(29, 2, 20),
(30, 6, 20),
(31, 1, 20),
(32, 2, 21),
(33, 3, 21);

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
(2, 'allan', 'Allan Ferreira', 'allan_f2008@hotmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1992-07-25', 'user/021835201812015c01ef7b0d17c.jpeg', 'XIi4k8jqNDzKd4Nh4m0H5ttvFuDnZv1XiLJ8FPOtNqAclrTCiut2DGH8sHHy', '2018-10-26 05:06:57', '2018-12-01 04:52:29'),
(3, 'maria', 'Maria Borges', 'maria8@hotmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1983-03-17', 'user/mari.jpg', 'eMjaT7ZfQByKKGom0f8qNzvEETyu9Isuqjo0zypN1WnrprYI6ruybk148z8e', '2018-10-26 05:06:57', '2018-12-01 04:55:54'),
(4, 'pedro', 'Pedro Borba', 'pedro8@hotmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1983-01-13', 'user/pedro.jpg', 'VGptEJVwDuAD1VdLDhPS81Y5TcwIUaFde1LkZCQP3xCuRmDmuBy6aHrQtws4', '2018-10-26 05:06:57', '2018-10-26 05:06:57'),
(5, 'bruna', 'Bruna Silva', 'bruna@gmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1983-06-09', 'user/bruna.jpg', 'BwJv2XFMfmImz104W15uRak5UQg6Agba9BGbr8LOIxnZ5hHXqKd238Kjws5t', '2018-10-26 05:06:57', '2018-10-26 05:06:57'),
(6, 'marcia', 'Marcia Costa', 'marcia@gmail.com', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '1983-10-07', 'user/marcia.jpg', 'VlVZ73ujrWgMIGb4qXXvkLHotIuKdt96975pliKNhNIrE84xLYULzycG6KRn', '2018-10-26 05:06:57', '2018-10-26 05:06:57'),
(19, 'admin', 'mais novo admin', 'admin@hotmail.co', NULL, '$2y$10$vqw6Q2o5FqH3UJbgUL59NunSRpVfNR/nT0gvrwVeRMtlRb5hZvjsO', '2018-12-20', 'user/192017201812025c04307187674.jpeg', '6QXASrytHy0OSMi9dDCDmyYZPnPF4Bzx9GAQ6JEaZaCuz3luCqJTjaahr0xP', '2018-12-02 20:52:19', '2018-12-02 21:20:17'),
(20, 'dire', 'novo diretor', 'dire@hotmail.co', NULL, '$2y$10$NpQTJWleWaxo.FCPZorXDu6aWDc6/3cnEFwGTR.4IQVbDRzSVZouW', '2018-12-03', 'user/192003201812025c0430637f575.jpeg', 'bAGTCiH7LmscZvfJRoB7zwAm5RmkcX6snaKidY9eh4gDx3lJvKhgNXmo96bo', '2018-12-02 20:59:12', '2018-12-02 21:20:03'),
(21, 'user', 'usuario padrao', 'user@hotmail.co', NULL, '$2y$10$K6KersLUL3L/TjKEkR7Uk.eJ/TOOqM92P.HiNG5slTvodulvX9c4.', '2018-12-11', 'user/191943201812025c04304fc31a8.jpeg', '5zucIUNgMKxrIVvqRz5lk7Rubs7x7x7hNdN3wWFIT9rHBzZHhP487xWAfoTE', '2018-12-02 21:13:12', '2018-12-02 21:19:43');

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `respostas_id_chamado_foreign` (`id_chamado`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `chamados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_id_chamado_foreign` FOREIGN KEY (`id_chamado`) REFERENCES `chamados` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
