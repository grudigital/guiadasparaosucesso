-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06/10/2020 às 15:07
-- Versão do servidor: 10.4.14-MariaDB-cll-lve
-- Versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u319275366_sistema2020`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes`
--

CREATE TABLE `anunciantes` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logradouro` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inicioplano` date DEFAULT NULL,
  `fimplano` date DEFAULT NULL,
  `plano` int(10) DEFAULT NULL,
  `whatsapp` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logotipo` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `anunciantes`
--

INSERT INTO `anunciantes` (`id`, `titulo`, `categoria`, `telefone`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `inicioplano`, `fimplano`, `plano`, `whatsapp`, `email`, `facebook`, `instagram`, `linkedin`, `descricao`, `senha`, `imagem`, `logotipo`, `video`, `status`, `datacadastro`) VALUES
(1, 'Rizzo Bartenders', '8', 'telefone2', 'logradouro2', 'numero2', 'bairro2', 'cidade2', 'estado2', '2020-09-20', '2020-09-18', NULL, 'whatsapp2', 'email2', 'facebook2', 'instagram2', NULL, 'descricao2', '', '1601299757.jpg', '1601483537.jpg', '4FOghJzXuYg', 1, '2020-09-28 02:47:32'),
(2, 'Birittas', '8', '11 930937007', 'Rua Santa Ursula', '23', 'Jd. Pedreira', 'São Paulo', 'São Paulo', '2020-09-28', '2020-09-30', NULL, '11 930907007', 'felipesergio@outlook.com', 'www.facebook.com.br', 'instagram.com.br/teste', NULL, 'presto serviços de bartender', '21232f297a57a5a743894a0e4a801fc3', '1601299765.jpg', '', 'KRNBLQYTwz4', 1, '2020-09-28 10:25:44'),
(3, 'Coquetel Mania', '8', '11 56125565 ', 'Rua Olavo Bilac', '45', 'Interlagos', 'São Paulo', 'SP', '2020-09-29', '2020-10-01', NULL, '11 930937007', 'felipesergio@yahoo.com', 'facebook2', 'instagram.com.br/teste', NULL, 'DESCRIÇÃO', '', '1601299773.jpg', '', 'ySiHx875HmM', 1, '2020-09-28 10:26:53'),
(4, 'Circuito Bar', '8', '11 930937007', 'Rua Olavo Bilac', '874', 'Sabará', 'São Paulo', 'São Paulo', '2020-09-29', '2020-09-30', NULL, '11930937007', 'felipesergio@yahoo.com', 'www.facebook.com/ad', 'instagram.com/teste', NULL, 'este é um otimo anunciante', '', '1601299781.jpg', '', 'w-z5mbZ-yCI', 1, '2020-09-28 10:28:16'),
(5, 'Raimundo Somelier', '12', '11 930937007', 'Rua Santa Ursula', '10423', 'Jd. Pedreira', 'São Paulo', 'SP', '2020-09-28', '2020-09-29', NULL, '93093700723', 'felipesergio@yahoo.com', 'facebook2', 'instagram2', NULL, 'descrição do somelier', '21232f297a57a5a743894a0e4a801fc3', '1601301433.jpg', '', 'BOrwdLv6ERE', 1, '2020-09-28 10:56:48'),
(6, 'Francisco Garçon', '10', '11961503927', 'Rua Olavo Bilac', '97', 'Jd. Pedreira', 'São Paulo', 'São Paulo', '2020-09-24', '2020-09-30', NULL, 'whatsapp', 'felipesergio@yahoo.com', 'facebook2', 'Link do instagram', NULL, 'otimo garçon', '21232f297a57a5a743894a0e4a801fc3', '1601301499.jpg', '', 'Ssz3veNykbA', 1, '2020-09-28 10:57:49'),
(7, 'Jacquin', '11', '11961503927', 'Rua Olavo Bilac', '104', 'Pedreira', 'São Paulo', 'São Paulo', '2020-09-23', '2020-10-02', NULL, 'whatsapp', 'felipesergio@yahoo.com', 'facebook', 'instagram.com.br/teste', NULL, 'descrição', '21232f297a57a5a743894a0e4a801fc3', '1601301549.jpg', '', 'KzhC-7XTRvc', 1, '2020-09-28 10:58:51'),
(8, 'Paola', '11', '11961503927', 'Rua Olavo Bilac', '97', 'Pedreira', 'São Paulo', 'São Paulo', '2020-09-07', '2020-10-01', 2, 'gfdsg', 'felipesergio@yahoo.com', 'linkdofacebook', 'instagram', 'linkedin da paola', 'otima chef de cozinha', '', '1601301601.jpg', '', 'fjiaCQuQjhQ', 1, '2020-09-28 10:59:47'),
(11, 'Loja do Felipe', '', '11 930937007', 'Loja do Felipe', '104', 'Jd. Pedreira', 'São Paulo', 'São Paulo', '0000-00-00', '0000-00-00', 4, '11 930937001', 'felipe@grudigital.com.br', 'www.facebook.com.br', 'www.instagram.com', 'www.linkedin.com.br', 'Essa loja é sensacional', '21232f297a57a5a743894a0e4a801fc3', '1601668592.jpg', '1601668268.jpg', 'yazkNHqoyZ8', 0, '2020-10-01 04:16:49'),
(12, 'Resma Design', '10', '4399819-9001', 'Rua Prefeito Hugo Cabral ', '167', 'Centro', 'Londrina', 'PR', '0000-00-00', '0000-00-00', 2, '4399819-9001', 'resmadesign@gmail.com', 'https://web.facebook.com/resmadesign', 'https://www.instagram.com/resmadesign/', '', 'Diretora criativa: Paula Napo\r\nEspecialistas em marcas. Identidade Visual: empresas, profissionais, eventos - Wedding Branding\r\nRegistro/Gestão de Marca', '2423*Wxci290989', '1601940760.jpg', '1601940727.jpg', '', 1, '2020-10-03 19:58:49'),
(13, 'Melissa', '13', '43984016969', 'Melissa', '450', 'Gleba Palhano', 'Londrina', 'Paraná', NULL, NULL, NULL, '43984016969', 'msessak@gmail.com', 'https://www.facebook.com/melissasessak', 'https://www.instagram.com/melissa.sessak/', '', 'Social Media', '0695583cf1423228dbd0318ab54c8a48', '1601940118.jpg', '1601940097.jpg', NULL, 1, '2020-10-05 22:40:30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_categoria`
--

CREATE TABLE `anunciantes_categoria` (
  `id` int(11) UNSIGNED NOT NULL,
  `categoria` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `anunciantes_categoria`
--

INSERT INTO `anunciantes_categoria` (`id`, `categoria`, `imagem`) VALUES
(8, 'Gastronomia', '1601300442.jpg'),
(9, 'Beleza', '1601939674.jpg'),
(10, 'Saúde', '1601939718.jpg'),
(11, 'Marketing', '1601939582.jpg'),
(12, 'Direito', ''),
(13, 'Manicure', '1601920050.jpg'),
(14, 'Social Media', ''),
(15, 'Design', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_comentarios`
--

CREATE TABLE `anunciantes_comentarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `estrelas` int(10) DEFAULT NULL,
  `datacomentario` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `anunciantes_comentarios`
--

INSERT INTO `anunciantes_comentarios` (`id`, `anunciante`, `nome`, `cpf`, `email`, `telefone`, `comentario`, `status`, `estrelas`, `datacomentario`) VALUES
(1, '1', 'felipe sergio', '35251690860', 'felipesergio@outlook.com', '11 930937007', 'o fornecedor é excelente adorei os serviços prestados', '1', 2, '2020-09-28 09:39:36'),
(2, '11', 'Felipe Sergio', '35251690860', 'felipesergio@outlook.com', '11930937007', 'otima chefe de cozinha', '2', 4, '2020-09-30 16:46:00'),
(3, '8', 'sdfsdf', 'sdfsdfsd', 'dsfsd', 'sdfsdf', 'sdfsdf', '1', 3, '2020-09-30 16:51:10'),
(4, '7', 'Felipe', '35251690860', 'felipesergio@yahoo.com', '11961503927', 'dsffds', '1', 5, '2020-09-30 18:35:21'),
(5, '11', 'Felipe Sergio', '3525169086023', 'felipesergio@outlook.com', '11930937007', 'dsfdsfds', '1', 2, '2020-09-30 18:40:11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_estrelas`
--

CREATE TABLE `anunciantes_estrelas` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_fotos`
--

CREATE TABLE `anunciantes_fotos` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `anunciantes_fotos`
--

INSERT INTO `anunciantes_fotos` (`id`, `anunciante`, `imagem`) VALUES
(14, '', '1601504266.jpg'),
(15, '8', '1601504374.jpg'),
(17, '8', '1601504735.jpg'),
(18, '8', '1601504746.jpg'),
(19, '0', '1601671074.jpg'),
(21, '0', '1601671152.jpg'),
(22, '0', '1601671162.jpg'),
(24, '0', '1601940183.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_orcamento`
--

CREATE TABLE `anunciantes_orcamento` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` int(10) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datacontato` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `anunciantes_orcamento`
--

INSERT INTO `anunciantes_orcamento` (`id`, `anunciante`, `nome`, `email`, `telefone`, `mensagem`, `datacontato`) VALUES
(1, 11, 'felipe sergio', 'felipesergio@outlook.com', '11 930937007', 'o fornecedor é otimo', '0000-00-00 00:00:00'),
(2, 7, 'Felipe Sergio', 'felipesergio@outlook.com', '11 930937007', 'tompero', '2020-09-30 15:53:56'),
(3, 7, 'Felipe Sergio', 'felipesergio@outlook.com', '11930937007', 'tompero 2', '2020-09-30 15:59:45'),
(4, 11, 'Felipe Sergio', 'felipesergio@outlook.com', '11930937007', 'tompero 3', '2020-09-30 16:02:04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `anunciantes_video`
--

CREATE TABLE `anunciantes_video` (
  `id` int(11) UNSIGNED NOT NULL,
  `anunciante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) UNSIGNED NOT NULL,
  `local` int(10) NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `datacadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `banners`
--

INSERT INTO `banners` (`id`, `local`, `titulo`, `imagem`, `link`, `status`, `datacadastro`) VALUES
(3, 1, '', '1601983836.jpg', 'https://guiadasparaosucesso.com.br/contato.php', 1, '2020-09-24 13:46:24'),
(4, 1, '', '1601758071.jpg', '#m', 1, '2020-09-24 13:46:35'),
(5, 1, '', '1601758090.jpg', '#', 1, '2020-09-24 13:46:54'),
(6, 1, '', '1601758112.jpg', '#', 1, '2020-09-24 13:47:07'),
(7, 1, '', '1601758133.jpg', '#', 1, '2020-09-24 13:47:26'),
(8, 1, '', '1601758365.jpg', '#', 1, '2020-09-24 13:47:37'),
(9, 1, '', '1601758684.jpg', '#', 1, '2020-09-24 13:47:49'),
(10, 1, '', '1601758206.jpg', '#', 1, '2020-09-24 13:48:05'),
(11, 3, 'Quem somos', '1600966557.jpg', '#', 1, '2020-09-24 13:54:21'),
(12, 4, 'Faça parte', '1600966581.jpg', '#', 1, '2020-09-24 13:54:38'),
(13, 5, 'Termos de uso', '1600966597.jpg', '#', 1, '2020-09-24 13:54:54'),
(14, 6, 'Política de privacidade', '1600966614.jpg', '#', 1, '2020-09-24 13:55:16'),
(15, 2, 'Banner do meio', '1600966935.jpg', '#', 1, '2020-09-24 14:01:58'),
(17, 7, 'Produtos', '1600974895.jpg', '#', 1, '2020-09-24 16:14:36'),
(18, 99, 'Busca', '1601486185.jpg', '#', 1, '2020-09-30 14:14:44');

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners_local`
--

CREATE TABLE `banners_local` (
  `id` int(10) UNSIGNED NOT NULL,
  `local` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `banners_local`
--

INSERT INTO `banners_local` (`id`, `local`) VALUES
(1, 'Home - topo ( 600 x 800 ) '),
(2, 'Home - meio( 1200 x 800 ) '),
(3, 'Quem somos ( 1600 x 950 )'),
(4, 'Faça parte ( 1600 x 950 )'),
(5, 'Termos de uso ( 1600 x 950 )'),
(6, 'Politica de privacidade ( 1600 x 950 )'),
(7, 'Produtos ( 1350 x 550 )');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blocos`
--

CREATE TABLE `blocos` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagina` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resumo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `blocos`
--

INSERT INTO `blocos` (`id`, `titulo`, `pagina`, `resumo`, `texto`, `imagem`) VALUES
(3, 'História', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. Sed sodales nulla purus, nec porta ipsum rutrum ut. Integer aliquam mattis facilisis. Donec imperdiet mi quis est placerat facilisis. Cras semper placerat elementum. Mauris pulvinar iaculis ante, sit amet blandit eros condimentum a. Sed vel mollis libero. Ut nibh felis, luctus in eros non, semper vestibulum ex. Donec rutrum quam quam, vitae facilisis leo tincidunt quis. Etiam tempus euismod ornare. Morbi quis quam ex. Donec auctor fermentum nibh a sagittis. Pellentesque nec lectus quam.', '1601941148.jpg'),
(4, 'Propósitos do grupo', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. Sed sodales nulla purus, nec porta ipsum rutrum ut. Integer aliquam mattis facilisis. Donec imperdiet mi quis est placerat facilisis. Cras semper placerat elementum. Mauris pulvinar iaculis ante, sit amet blandit eros condimentum a. Sed vel mollis libero. Ut nibh felis, luctus in eros non, semper vestibulum ex. Donec rutrum quam quam, vitae facilisis leo tincidunt quis. Etiam tempus euismod ornare. Morbi quis quam ex. Donec auctor fermentum nibh a sagittis. Pellentesque nec lectus quam.', '1601941484.jpg'),
(5, 'Atuais gestoras e suas principais funções', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. Sed sodales nulla purus, nec porta ipsum rutrum ut. Integer aliquam mattis facilisis. Donec imperdiet mi quis est placerat facilisis. Cras semper placerat elementum. Mauris pulvinar iaculis ante, sit amet blandit eros condimentum a. Sed vel mollis libero. Ut nibh felis, luctus in eros non, semper vestibulum ex. Donec rutrum quam quam, vitae facilisis leo tincidunt quis. Etiam tempus euismod ornare. Morbi quis quam ex. Donec auctor fermentum nibh a sagittis. Pellentesque nec lectus quam.', '1601941227.jpg'),
(6, 'Missão, visão e valores', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. Sed sodales nulla purus, nec porta ipsum rutrum ut. Integer aliquam mattis facilisis. Donec imperdiet mi quis est placerat facilisis. Cras semper placerat elementum. Mauris pulvinar iaculis ante, sit amet blandit eros condimentum a. Sed vel mollis libero. Ut nibh felis, luctus in eros non, semper vestibulum ex. Donec rutrum quam quam, vitae facilisis leo tincidunt quis. Etiam tempus euismod ornare. Morbi quis quam ex. Donec auctor fermentum nibh a sagittis. Pellentesque nec lectus quam.', '1600959266.jpg'),
(7, 'Como se tornar uma GPS', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. Sed sodales nulla purus, nec porta ipsum rutrum ut. Integer aliquam mattis facilisis. Donec imperdiet mi quis est placerat facilisis. Cras semper placerat elementum. Mauris pulvinar iaculis ante, sit amet blandit eros condimentum a. Sed vel mollis libero. Ut nibh felis, luctus in eros non, semper vestibulum ex. Donec rutrum quam quam, vitae facilisis leo tincidunt quis. Etiam tempus euismod ornare. Morbi quis quam ex. Donec auctor fermentum nibh a sagittis. Pellentesque nec lectus quam.', '1600970204.jpg'),
(8, 'Planos e valores', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. Sed sodales nulla purus, nec porta ipsum rutrum ut. Integer aliquam mattis facilisis. Donec imperdiet mi quis est placerat facilisis. Cras semper placerat elementum. Mauris pulvinar iaculis ante, sit amet blandit eros condimentum a. Sed vel mollis libero. Ut nibh felis, luctus in eros non, semper vestibulum ex. Donec rutrum quam quam, vitae facilisis leo tincidunt quis. Etiam tempus euismod ornare. Morbi quis quam ex. Donec auctor fermentum nibh a sagittis. Pellentesque nec lectus quam.', '1600970217.jpg'),
(9, 'Termos de uso', '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. Sed sodales nulla purus, nec porta ipsum rutrum ut. Integer aliquam mattis facilisis. Donec imperdiet mi quis est placerat facilisis. Cras semper placerat elementum. Mauris pulvinar iaculis ante, sit amet blandit eros condimentum a. Sed vel mollis libero. Ut nibh felis, luctus in eros non, semper vestibulum ex. Donec rutrum quam quam, vitae facilisis leo tincidunt quis. Etiam tempus euismod ornare. Morbi quis quam ex. Donec auctor fermentum nibh a sagittis. Pellentesque nec lectus quam.', '1600970552.jpg'),
(10, 'Política de privacidade', '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus magna sit amet elit efficitur faucibus. Sed sodales nulla purus, nec porta ipsum rutrum ut. Integer aliquam mattis facilisis. Donec imperdiet mi quis est placerat facilisis. Cras semper placerat elementum. Mauris pulvinar iaculis ante, sit amet blandit eros condimentum a. Sed vel mollis libero. Ut nibh felis, luctus in eros non, semper vestibulum ex. Donec rutrum quam quam, vitae facilisis leo tincidunt quis. Etiam tempus euismod ornare. Morbi quis quam ex. Donec auctor fermentum nibh a sagittis. Pellentesque nec lectus quam.', '1600970719.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blocos_paginas`
--

CREATE TABLE `blocos_paginas` (
  `id` int(10) UNSIGNED NOT NULL,
  `pagina` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blocos_paginas`
--

INSERT INTO `blocos_paginas` (`id`, `pagina`) VALUES
(1, 'Quem somos'),
(2, 'Faça parte'),
(3, 'Termos de uso'),
(4, 'Políticas de privacidade');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_categorias`
--

CREATE TABLE `blog_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blog_categorias`
--

INSERT INTO `blog_categorias` (`id`, `categoria`) VALUES
(1, 'Categoria 1'),
(2, 'Categoria 2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_comentarios`
--

CREATE TABLE `blog_comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `publicacao` int(10) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `status` int(10) NOT NULL,
  `datacomentario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blog_comentarios`
--

INSERT INTO `blog_comentarios` (`id`, `publicacao`, `nome`, `email`, `mensagem`, `status`, `datacomentario`) VALUES
(1, 6, 'sdfsad', 'fsdaf', 'sdafsdf', 1, '2020-09-15 18:28:48');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_publicacoes`
--

CREATE TABLE `blog_publicacoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `categoria` int(10) DEFAULT NULL,
  `publicador` varchar(30) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `imagem` varchar(120) DEFAULT NULL,
  `video` varchar(120) DEFAULT NULL,
  `datapublicacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blog_publicacoes`
--

INSERT INTO `blog_publicacoes` (`id`, `titulo`, `categoria`, `publicador`, `resumo`, `texto`, `imagem`, `video`, `datapublicacao`) VALUES
(7, 'sdsad', 1, '1', 'sdfsadfdss', 'adfsdf', NULL, NULL, '2020-09-25 22:57:13');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias_destaques`
--

CREATE TABLE `categorias_destaques` (
  `id` int(10) UNSIGNED NOT NULL,
  `local` varchar(10) DEFAULT NULL,
  `medidas` varchar(100) DEFAULT NULL,
  `categoria` int(10) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categorias_destaques`
--

INSERT INTO `categorias_destaques` (`id`, `local`, `medidas`, `categoria`, `imagem`) VALUES
(1, '1', '700x604', 8, '1601080010.jpg'),
(2, '2', '560x480', 13, '1601080132.jpg'),
(3, '3', '560x480', 12, '1601080143.jpg'),
(4, '4', '800x343', 11, '1601080215.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mensagem` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `datacontato` datetime DEFAULT current_timestamp(),
  `status` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `telefone`, `email`, `mensagem`, `datacontato`, `status`) VALUES
(1, 'sdafadsf', 'asdf', 'sdafdsf', 'asdf', '2020-09-23 14:14:56', '2'),
(2, 'Felipe Sergio', '11 930937007', 'felipesergio@outlook.com', '', '2020-09-23 15:35:37', '2'),
(3, 'Felipe Sergio', '11 930937007', 'felipesergio@outlook.com', '', '2020-09-23 15:35:44', '2'),
(4, 'Felipe Sergio', '11 930937007', 'felipesergio@outlook.com', '', '2020-09-23 15:35:50', '2'),
(5, 'Felipe Sergio', '11 930937007', 'felipesergio@outlook.com', '', '2020-09-23 15:36:08', '2'),
(6, 'sdfsdf', '333333', 'sdfds@hotmail.com', 'sdfsdfsd', '2020-09-23 15:37:24', '2'),
(8, 'Loja do Felipe', '11 930937007', 'felipe@grudigital.com.br', 'Quero mudar meu plano.', '2020-10-02 18:12:49', '2'),
(9, 'Loja do Felipe', '11 930937007', 'felipe@grudigital.com.br', 'Quero mudar meu plano.', '2020-10-02 18:13:28', '2'),
(10, 'Melissa', '43984016969', 'msessak@gmail.com', 'OI meninas!!!!!!\r\nMuito sucesso pra vocês!!!!!', '2020-10-05 22:42:33', '2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) UNSIGNED NOT NULL,
  `perfil` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `iniciodestaque` date NOT NULL,
  `fimdestaque` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `id` int(11) UNSIGNED NOT NULL,
  `telefone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `telegram` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `telefone`, `email`, `instagram`, `facebook`, `telegram`, `youtube`) VALUES
(1, 'telefone2b2', 'contato@guiadasparaosucesso.com.br', 'instagram2b2', 'facebook2', 'telegram2b2', 'youtube2b2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `orcamentos`
--

CREATE TABLE `orcamentos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` text COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `dataorcamento` datetime NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `planos`
--

CREATE TABLE `planos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `valor` varchar(120) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `botao` varchar(120) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `planos`
--

INSERT INTO `planos` (`id`, `titulo`, `valor`, `resumo`, `descricao`, `botao`, `imagem`, `status`) VALUES
(2, 'Plano Diamante', '100', '<p>Resumo de plano 1</p>', '<p>Descri&ccedil;&atilde;o do plano 1</p>', 'botaodepagamento1', '1601480423.jpg', 1),
(3, 'Plano Ouro', '200', '<p>Resumo do plano 2</p>', '<p>Descri&ccedil;&atilde;o do plano 2</p>', 'botaodepagamento2', '1601480479.jpg', 1),
(4, 'Plano Prata', '300', '<p>Resumo do plano 3</p>', '<p>Descri&ccedil;&atilde;o do plano 3</p>', 'botaodepagamento3', '1601480537.jpg', 1),
(5, 'Plano Bronze', '400', '<p>Resumo do plano 4</p>', '<p>Descri&ccedil;&atilde;o do plano 4</p>', 'botaodepagamento4', '1601480690.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(120) DEFAULT NULL,
  `video` varchar(120) DEFAULT NULL,
  `linkpagamento` varchar(200) DEFAULT NULL,
  `preconovo` varchar(60) DEFAULT NULL,
  `precoantigo` varchar(60) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `resumo`, `descricao`, `imagem`, `video`, `linkpagamento`, `preconovo`, `precoantigo`, `status`, `datacadastro`) VALUES
(2, 'Produto 1', '<p>Resumo do produto 1</p>', '<p>Descri&ccedil;&atilde;o do produto 1</p>', '1600976256.jpg', NULL, '#', '100', '150', 1, '2020-09-24 16:34:07'),
(3, 'Produto 2', '<p>resumo do produto 2</p>', '<p>descri&ccedil;&atilde;o do produto 2</p>', '1600976446.jpg', NULL, '#', '500', '600', 1, '2020-09-24 16:39:23'),
(4, 'Produto 3', '<p>resumo de produto 3</p>', '<p>descri&ccedil;&atilde;o de produto 3</p>', '1600976567.jpg', NULL, '#', '500', '20', 1, '2020-09-24 16:41:22'),
(5, 'Produto 4', '<p>resumo de produto 4</p>', '<p>descri&ccedil;&atilde;o de produto 4</p>', '1600976580.jpg', NULL, '#', '100', '100', 1, '2020-09-24 16:41:51'),
(6, 'Produto 5', '<p>resumo de produto 4</p>', '<p>descricao de produto 5</p>', '1600976626.jpg', 'epG47IUL68k', '#', '33', '333', 1, '2020-09-24 16:43:29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `seo`
--

CREATE TABLE `seo` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `analytics` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `seo`
--

INSERT INTO `seo` (`id`, `description`, `keywords`, `analytics`) VALUES
(1, 'desciptions2', 'keywordss2', 'analytiucss2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Felipe Sergio', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'Lourival Netto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'Paula', 'contato@guiadasparaosucesso.com.br', 'a36e8f285db9990ba9df5dc629db6bf8');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `anunciantes`
--
ALTER TABLE `anunciantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_categoria`
--
ALTER TABLE `anunciantes_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_comentarios`
--
ALTER TABLE `anunciantes_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_estrelas`
--
ALTER TABLE `anunciantes_estrelas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_fotos`
--
ALTER TABLE `anunciantes_fotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_orcamento`
--
ALTER TABLE `anunciantes_orcamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `anunciantes_video`
--
ALTER TABLE `anunciantes_video`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `banners_local`
--
ALTER TABLE `banners_local`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blocos`
--
ALTER TABLE `blocos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blocos_paginas`
--
ALTER TABLE `blocos_paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_categorias`
--
ALTER TABLE `blog_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_comentarios`
--
ALTER TABLE `blog_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_publicacoes`
--
ALTER TABLE `blog_publicacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `categorias_destaques`
--
ALTER TABLE `categorias_destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `anunciantes`
--
ALTER TABLE `anunciantes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `anunciantes_categoria`
--
ALTER TABLE `anunciantes_categoria`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `anunciantes_comentarios`
--
ALTER TABLE `anunciantes_comentarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `anunciantes_estrelas`
--
ALTER TABLE `anunciantes_estrelas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `anunciantes_fotos`
--
ALTER TABLE `anunciantes_fotos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `anunciantes_orcamento`
--
ALTER TABLE `anunciantes_orcamento`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `anunciantes_video`
--
ALTER TABLE `anunciantes_video`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `banners_local`
--
ALTER TABLE `banners_local`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `blocos`
--
ALTER TABLE `blocos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `blocos_paginas`
--
ALTER TABLE `blocos_paginas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `blog_categorias`
--
ALTER TABLE `blog_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `blog_comentarios`
--
ALTER TABLE `blog_comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `blog_publicacoes`
--
ALTER TABLE `blog_publicacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `categorias_destaques`
--
ALTER TABLE `categorias_destaques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
