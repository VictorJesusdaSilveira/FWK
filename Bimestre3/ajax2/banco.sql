-- Criação do banco de dados (caso ainda não exista)
CREATE DATABASE IF NOT EXISTS `sistema_teste` 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE `sistema_teste`;

-- Criação da tabela de usuários
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserção dos 10 registros fictícios
INSERT INTO `usuarios` (`nome`, `email`) VALUES
('Ana Silva', 'ana.silva@email.com'),
('Bruno Oliveira', 'bruno.oliveira@email.com'),
('Carla Souza', 'carla.souza@email.com'),
('Daniel Santos', 'daniel.santos@email.com'),
('Eduarda Lima', 'eduarda.lima@email.com'),
('Felipe Costa', 'felipe.costa@email.com'),
('Gabriela Pereira', 'gabriela.pereira@email.com'),
('Henrique Alves', 'henrique.alves@email.com'),
('Isabela Rodrigues', 'isabela.rodrigues@email.com'),
('João Pedro Ferreira', 'joao.ferreira@email.com');
