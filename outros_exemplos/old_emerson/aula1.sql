
--
-- Banco de dados: `aula1`
--

DROP DATABASE IF EXISTS aula1;

CREATE DATABASE aula1 CHARACTER SET utf8 COLLATE utf8_general_ci;

USE aula1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

INSERT INTO `usuario` (`nome`,`email`,`endereco`,`complemento`,`cidade`,`estado`,`cep`,`login`,`senha`) VALUES
('emerson','emersonnnb@hotmail.com','rua das pedras',null,'Belford roxo','Rio de Janeiro',null,'admin',md5('123456'))
