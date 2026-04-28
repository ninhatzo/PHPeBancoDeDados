-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/04/2026 às 00:07
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `notas_alunos`
--

CREATE TABLE `notas_alunos` (
  `id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `bimestre` varchar(20) NOT NULL,
  `nota1` decimal(5,2) NOT NULL,
  `nota2` decimal(5,2) NOT NULL,
  `nota3` decimal(5,2) NOT NULL,
  `peso` decimal(4,2) NOT NULL DEFAULT 1.00,
  `faltas` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `notas_alunos`
--

INSERT INTO `notas_alunos` (`id`, `aluno_id`, `bimestre`, `nota1`, `nota2`, `nota3`, `peso`, `faltas`, `created_at`) VALUES
(1, 1, 'Primeiro', 6.00, 7.00, 7.98, 4.00, 5, '2026-04-27 23:40:07'),
(2, 1, 'Primeiro', 10.00, 10.00, 10.00, 3.00, 1, '2026-04-28 00:39:16'),
(3, 8, 'Primeiro', 6.00, 7.00, 9.00, 4.00, 3, '2026-04-28 00:40:48');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `alunos_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `idade` int(11) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `curso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`alunos_id`, `id`, `nome`, `email`, `telefone`, `idade`, `cidade`, `curso`) VALUES
(0, 1, 'Maria Clara', 'mariaclara@gmail.com', '(48) 9 9877-6598', 19, 'São Paulo', 'Direito'),
(0, 2, 'José Carlos', 'carlosjose12@hotmail.com', '(67) 9 8879 4962', 26, 'Curitiba', 'Farmacia'),
(0, 3, 'Carlos Henrique', 'carloshenri@outlook.com', '(54) 9 9765 9865', 12, 'Maranhão', 'Ensino Fundamental'),
(0, 4, 'Ana Silveira', 'ana_c_da-silveira@estudante.sc.senai.br', '(47) 99288-9592', 24, 'Joinville', 'ADS'),
(0, 5, 'Lucas Oliveira', 'lucas.oliveira@email.com', '(47) 99123-4567', 22, 'Joinville', 'Engenharia Civil'),
(0, 6, 'Sofia Santos', 'sofia.santos@email.com', '(48) 98876-1234', 21, 'Florianópolis', 'Psicologia'),
(0, 7, 'Miguel Ferreira', 'miguel.ferreira@email.com', '(41) 99765-4321', 23, 'Curitiba', 'Administração'),
(0, 8, 'Helena Costa', 'helena.costa@email.com', '(11) 99234-5678', 24, 'Rio de Janeiro', 'Direito'),
(0, 9, 'Alice Martins', 'alice.martins@email.com', '(31) 99887-2222', 20, 'Joinville', 'Ciência da Computação'),
(0, 10, 'Laura Gomes', 'laura.gomes@email.com', '(51) 99555-4444', 23, 'Goiânia', 'Engenharia Mecânica'),
(0, 11, 'Manuela Carvalho', 'manuela.carvalho@email.com', '(85) 99333-6666', 22, 'Fortaleza', 'Design Gráfico'),
(0, 12, 'Gabriel Rocha', 'gabriel.rocha@email.com', '(27) 99222-7777', 21, 'Vitória', 'Educação Física'),
(0, 13, 'Júlia Barros', 'julia.barros@email.com', '(71) 99111-8888', 23, 'Salvador', 'Biomedicina'),
(0, 14, 'Bernardo Freitas', 'bernardo.freitas@email.com', '(19) 99000-9999', 25, 'Campinas', 'Economia'),
(0, 15, 'Isabela Teixeira', 'isabela.teixeira@email.com', '(34) 98989-1010', 22, 'Uberlândia', 'Jornalismo'),
(0, 16, 'Matheus Correia', 'matheus.correia@email.com', '(67) 98888-2020', 24, 'Campo Grande', 'Engenharia Elétrica'),
(0, 17, 'Rafael Cardoso', 'rafael.cardoso@email.com', '(98) 98666-4040', 23, 'São Luís', 'Sistemas de Informação'),
(0, 18, 'Mariana Dias', 'mariana.dias@email.com', '(83) 98555-5050', 22, 'João Pessoa', 'Publicidade e Propaganda'),
(0, 19, 'Enzo Pinto', 'enzo.pinto@email.com', '(79) 98444-6060', 20, 'Aracaju', 'Análise e Desenvolvimento de Sistemas'),
(0, 20, 'Beatriz Moreira', 'beatriz.moreira@email.com', '(65) 98333-7070', 23, 'Cuiabá', 'Odontologia'),
(0, 21, 'Gustavo Lopes', 'gustavo.lopes@email.com', '(92) 98222-8080', 24, 'Manaus', 'Ciências Contábeis'),
(0, 22, 'Vitória Nunes', 'vitoria.nunes@email.com', '(95) 98111-9090', 22, 'Boa Vista', 'Relações Internacionais'),
(0, 23, 'Felipe Araújo', 'felipe.araujo@email.com', '(96) 98000-1112', 25, 'Macapá', 'Engenharia de Produção'),
(0, 24, 'Clara Mendes', 'clara.mendes@email.com', '(63) 97999-1212', 21, 'Palmas', 'Fisioterapia'),
(0, 25, 'Henrique Batista', 'henrique.batista@email.com', '(68) 97888-1313', 23, 'Rio Branco', 'História'),
(0, 30, 'Maria Joaquina', 'mariajoana@mail.com', '48889535', 32, 'São Paulo', 'Enfermagem'),
(NULL, 36, 'Soraya', 'soraya@soraya.com', '47954628', 78, 'João Pessoa', 'Marinha');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `notas_alunos`
--
ALTER TABLE `notas_alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alunos_id` (`alunos_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `notas_alunos`
--
ALTER TABLE `notas_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
