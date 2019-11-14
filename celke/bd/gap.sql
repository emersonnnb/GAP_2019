DROP Database IF EXISTS  gap;

CREATE Database gap CHARACTER SET utf8 COLLATE utf8_general_ci;

use gap;

/* Estrutura da tabela `usuario`--*/

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,  
  `email` varchar(100) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `nivelusuario` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
);

INSERT INTO `usuario` ( `nome`, `email`, `senha`, `nivelusuario`, `status`) VALUES
('admin ', 'admin@admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'Ativo');

/* Estrutura da Tabela de Endereço */

DROP TABLE IF EXISTS `endereco`;

CREATE TABLE IF NOT EXISTS `endereco` (
  `id_endereco` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `rua` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `cep` int(15) NOT NULL,   
  `usuario_id` int,
  
  FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id_usuario`)
  );

--Estrutura da Tabela de Categoria --
/*
DROP TABLE IF EXISTS `categoria`;

CREATE TABLE IF NOT EXISTS `categoria` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  PRIMARY KEY (`IdCategoria`);

INSERT INTO `categoria` (`IdCategoria`, `Nome`) VALUES
(1, 'Software'),
(2, 'Hardware'),
(6, 'Teste');

--Estrutura da Tabela de estoque --

DROP TABLE IF EXISTS `estoque`;

CREATE TABLE IF NOT EXISTS `estoque` (
  `IdProduto` int(11) NOT NULL AUTO_INCREMENT,
  `Numero` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  `Categoria` varchar(100) DEFAULT NULL,
  `Fornecedor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdProduto`);

INSERT INTO `estoque` (`IdProduto`, `Numero`, `Nome`, `Quantidade`, `Categoria`, `Fornecedor`) VALUES
(1, 1, 'Caixa de som', 5, 'Perifericos', 'Fornecedor A'),
(2, 2, 'Teclado', 25, 'Perifericos', 'Fornecedor B'),
(3, 2, 'Teclado', 25, 'Perifericos', 'Fornecedor B'),
(4, 2, 'Teclado', 25, 'Perifericos', 'Fornecedor B'),
(9, 1458, 'luz', 5, 'Fornecedor 01', ''),
(10, 4, 'teste', 56, 'Fornecedor 01', ''),
(11, 4, 'teste', 56, 'Fornecedor 01', ''),
(12, 56, 'teste', 56, 'Software', 'Fornecedor 03'),
(13, 56, 'teste', 56, 'Software', 'Fornecedor 03');

-- Estrutura da tabela `fornecedor`--

DROP TABLE IF EXISTS `fornecedor`;

CREATE TABLE IF NOT EXISTS `fornecedor` (
  `IdFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  PRIMARY KEY (`IdFornecedor`);

INSERT INTO `fornecedor` (`IdFornecedor`, `Nome`) VALUES
(1, 'Fornecedor 01'),
(2, 'Fornecedor 02'),
(3, 'Fornecedor 03');

*/