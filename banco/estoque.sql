DROP Database IF EXISTS  estoque;

CREATE Database estoque CHARACTER SET utf8 COLLATE utf8_general_ci;

use estoque;
--
-- Database: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `Nome`) VALUES
(1, 'Software'),
(2, 'Hardware'),
(6, 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `IdProduto` int(11) NOT NULL AUTO_INCREMENT,
  `Numero` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  `Categoria` varchar(100) DEFAULT NULL,
  `Fornecedor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`IdProduto`, `Numero`, `Nome`, `Quantidade`, `Categoria`, `Fornecedor`) VALUES
(1, 1, 'Caixa de som', 5, 'PerifÃ©ricos', 'Fornecedor A'),
(2, 2, 'Teclado', 25, 'PerifÃ©ricos', 'Fornecedor B'),
(3, 2, 'Teclado', 25, 'PerifÃ©ricos', 'Fornecedor B'),
(4, 2, 'Teclado', 25, 'PerifÃ©ricos', 'Fornecedor B'),
(9, 1458, 'luz', 5, 'Fornecedor 01', ''),
(10, 4, 'teste', 56, 'Fornecedor 01', ''),
(11, 4, 'teste', 56, 'Fornecedor 01', ''),
(12, 56, 'teste', 56, 'Software', 'Fornecedor 03'),
(13, 56, 'teste', 56, 'Software', 'Fornecedor 03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `IdFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  PRIMARY KEY (`IdFornecedor`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`IdFornecedor`, `Nome`) VALUES
(1, 'Fornecedor 01'),
(2, 'Fornecedor 02'),
(3, 'Fornecedor 03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(80) NOT NULL,
  `Sobrenome` varchar(90) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(256) NOT NULL,
  `NivelUsuario` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nome`, `Sobrenome`, `Email`, `Senha`, `NivelUsuario`, `Status`) VALUES
(1, 'admin ', 'administrador', 'admin@admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'Ativo'),
(2, 'Maria', 'Rosana', 'maria_ro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 'Ativo'),
(3, 'dayana', 'dayana', 'eternamente@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 'Ativo')
