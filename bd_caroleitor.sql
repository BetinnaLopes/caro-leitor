-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2023 às 01:44
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_caroleitor`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `address`
--

INSERT INTO `address` (`id`, `user_id`, `rua`, `user`, `numero`, `cidade`, `estado`) VALUES
(1, 1, 'Avenida Ipiranga', 1, 190, 'Arroio dos Ratos', 'RS'),
(2, 2, 'Avenida Ipiranga', 2, 542, 'Arroio dos Ratos', 'RS'),
(3, 3, 'Avenida Ipiranga', 3, 190, 'Arroio dos Ratos', 'RS'),
(4, 4, 'Avenida Ipiranga', 4, 542, 'Arroio dos Ratos', 'RS'),
(5, 5, 'Avenida Ipiranga', 5, 190, 'Arroio dos Ratos', 'RS'),
(6, 6, 'Avenida Ipiranga', 6, 542, 'Arroio dos Ratos', 'RS'),
(7, 7, 'Avenida Ipiranga', 7, 190, 'Arroio dos Ratos', 'RS'),
(8, 8, 'Avenida Ipiranga', 8, 542, 'Arroio dos Ratos', 'RS'),
(9, 9, 'Avenida Ipiranga', 9, 190, 'Arroio dos Ratos', 'RS'),
(26, 10, 'Avenida Ipiranga', 10, 542, 'Arroio dos Ratos', 'RS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `books`
--

CREATE TABLE `books` (
  `id` int(200) NOT NULL,
  `name_books` varchar(200) NOT NULL,
  `synopsis` varchar(1500) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `date_publication` varchar(200) NOT NULL,
  `name_author` varchar(200) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `books`
--

INSERT INTO `books` (`id`, `name_books`, `synopsis`, `gender`, `date_publication`, `name_author`, `categoria_id`) VALUES
(0, 'A Vida Invisível de Addie Larue', ' A história segue uma jovem francesa em 1714 fazendo uma barganha com o diabo que a torna imortal, mas a amaldiçoa para ser esquecida por todos que conhece.', 'Fantasia', '06/10/2020', 'V. E. Schwab', 3),
(1, 'A Garota do Lago', 'Em uma cidade pequena, a detetive Laura investiga a chocante descoberta do corpo de uma jovem no lago. Envolta em segredos obscuros, ela corre contra o tempo para desvendar o mistério e deter o assassino antes que ocorram mais mortes. ', 'Mistério', '18/12/2016', 'Charlie Donlea', 5),
(2, 'Carrie', 'Uma adolescente descobre ter poderes telecinéticos e, após ser alvo de humilhação cruel por seus colegas de escola, decide se vingar. À medida que seus poderes aumentam e sua fúria se intensifica, a pequena cidade onde vive se torna palco de um caos descontrolado.', 'Terror', '05/04/1974', 'Stephen King', 1),
(3, 'A Culpa é das Estrelas', 'Um romance sobre o amor entre Hazel e Augustus, ambos lutando contra o câncer. Juntos, eles enfrentam desafios, descobrem o significado da vida e aprendem sobre o poder do amor. Uma história sensível e comovente sobre esperança e superação.', 'Romance', '05/06/2014', 'John Green', 2),
(4, 'Teto para Dois', 'Um romance engraçado que acompanha a vida de Tiffy e Leon, que decidem dividir o mesmo apartamento. Enquanto Tiffy ocupa o espaço durante o dia, Leon utiliza o apartamento à noite. Por meio de bilhetes deixados pela casa, eles se aproximam e constroem um relacionamento único, repleto de humor e conexão.', 'Comédia romântica', '09/09/2019', 'Beth OLeary', 4),
(5, 'Poemas de Amor', 'Uma coletânea que revela a profundidade e a sensibilidade da poesia de Emily Dickinson. Neste livro, a autora explora os complexos sentimentos do amor, revelando suas nuances, intensidades e contradições. Com sua linguagem poética única, Dickinson transporta os leitores para um mundo de emoções e reflexões, celebrando e questionando o poder do amor em todas as suas formas.', 'Poema', '07/12/1880', 'Emily Dickinson', 7),
(6, 'Rita Lee: uma autobiografia', 'Um livro de memórias escrito pela cantora e compositora brasileira Rita Lee, contando um pouco de sua vida e trajetória como estrela do rock BR.', 'Biografia', '15/11/2016', 'Rita Lee', 6),
(7, 'É assim que acaba', 'A história segue a vida de Lily Bloom, uma jovem que enfrenta um relacionamento abusivo. Ao conhecer o misterioso Ryle Kincaid, ela se vê dividida entre o amor e a dor, confrontando seus medos mais profundos. Uma narrativa cativante que explora temas complexos como relacionamentos tóxicos, superação e a busca pela felicidade genuína.', 'Drama', '29/02/2016', 'Colleen Hoover', 8),
(8, 'A Biblioteca da Meia-Noite', 'Nora, uma jovem solitária, descobre uma biblioteca que abre apenas à meia-noite, revelando livros que contam as vidas das pessoas. Conforme ela mergulha nessas histórias, Nora encontra coragem, amizade e a chance de transformar sua própria vida. Uma narrativa envolvente sobre a importância dos livros e da conexão humana.', 'Ficção', '13/08/2020', 'Matt Haig', 10),
(9, 'As Coisas que Você Só Vê Quando Desacelera', 'Um livro inspirador onde através de reflexões e ensinamentos, o autor nos convida a desacelerar e apreciar os momentos simples da vida, nos lembrando da importância de viver o presente e encontrar a felicidade nas pequenas coisas.', 'Autoajuda', '13/01/2012', 'Haemin Sunim', 9),
(10, 'Mulheres que correm com os lobos', 'Um livro poderoso que resgata e explora o arquétipo da mulher selvagem. Através de contos e mitos, a autora convida as mulheres a se reconectarem com sua essência primal, sua intuição e força interior.', 'Não-ficção', '27/03/1989', 'Clarissa Pinkola Estés', 11),
(11, 'Lady Killers', 'Um livro que explora as histórias reais de mulheres assassinas ao longo da história. A autora mergulha em casos surpreendentes com uma abordagem envolvente e perspicaz, nos levando a refletir sobre a complexidade da natureza humana e os estereótipos de gênero na criminalidade.', 'Crime', '10/10/2017', 'Tori Telfer', 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Terror'),
(2, 'Romance'),
(3, 'Fantasia'),
(4, 'Comédia romântica'),
(5, 'Mistério'),
(6, 'Biografia'),
(7, 'Poema'),
(8, 'Drama'),
(9, 'Autoajuda'),
(10, 'Ficção'),
(11, 'Não-ficção'),
(12, 'Crime');

-- --------------------------------------------------------

--
-- Estrutura para tabela `faqs`
--

CREATE TABLE `faqs` (
  `id` int(5) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(1, 'Os livros são bons?', 'Sim! São ótimos :)'),
(2, 'Qual é o título com mais resenhas?', 'Carrie, do Stephen King.'),
(3, 'Quantos títulos existem no site?', 'Aproximadamente 10, por enquanto.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `images`
--

INSERT INTO `images` (`id`, `name`, `address`) VALUES
(0, 'avidainvisiveldeaddielarue', '\"C:UserslebesDownloadsimagens-bd_caroLeitoravidainvisiveldeaddielarue.jpg\"');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reviews`
--

CREATE TABLE `reviews` (
  `id` int(200) NOT NULL,
  `books_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(21, 'betinna', 'betinna66gmail.com', '$2y$10$qh9srocxK.UjRRY9SjZEoecu69TZXpc45IXlSboxUNmaopOSeU/L.'),
(22, 'betinna', 'betinna667gmail.com', '$2y$10$LdnuyOqDAc6IV5rOtVrUbudW2zOJVLg/3izjm6IZggUs6LBoa7azi'),
(23, 'betinna', 'betinna6767gmail.com', '$2y$10$U1kFZq5JPHZkq17E9spBo.5nPoQDarKZSCsASi5N68BCDUtimMB3S'),
(24, 'betinna', 'betinna69767gmail.com', '$2y$10$Tv3vIFgETpmuiOHFQeAemeyGVJUWonZE0WOOGVuf17rNTuI8Ie1Aa'),
(25, 'betinna', 'betinna699767gmail.com', '$2y$10$P5XDehBZDerTBYTVFfcR2eQSfTAblxGqLdOZpXVRyNjud2HK8iTXO'),
(26, 'betinna', 'betinna6990767gmail.com', '$2y$10$tfoQJVRvrHC67YxnvUL5nOyHE211mCMUVF3ujk45XtQkLHumSid7m'),
(27, 'Fabio', 'fabiosantos@ifsul.edu.br', '$2y$10$AZPQO4BPRoH0vztAyK4dweBZh9xQ6S6dT1WXAYMV9Ss88qmgd32Q6');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Índices de tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_id` (`books_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categories` (`id`);

--
-- Restrições para tabelas `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`books_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
