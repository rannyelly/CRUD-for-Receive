CREATE DATABASE devedores DEFAULT CHARACTER SET utf8;
USE devedores;

CREATE TABLE `devedores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cpf_cnpj` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `descricao_titulo` text,
  `valor` float DEFAULT NULL,
  `data_vencimento` date DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
)
