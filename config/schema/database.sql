/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Inicio das estrutura da tabela `faturas` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `faturas` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`data_vencimento` DATE NOT NULL,
`data_pagamento` DATE DEFAULT NULL,
`usuario_id` INTEGER(11) NOT NULL,
`pedido_id` INTEGER(11) NOT NULL,
`status` INTEGER(1) NOT NULL DEFAULT 0 COMMENT '0 - Aguardando Pagamento | 1 - Pago | 2 - Atrazado | 3 - Cancelado | 9 - Excluido',
`valor` FLOAT(11,2) NOT NULL,
`juros` FLOAT(11,2) DEFAULT NULL,
`codigo` VARCHAR(45) NOT NULL,
`token` TEXT DEFAULT NULL,
`valor_recebido` FLOAT(11,2) DEFAULT NULL,
`created` DATETIME NOT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `faturas` --


-- Inicio das estrutura da tabela `pedidos` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `pedidos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`usuario_id` INTEGER(11) DEFAULT NULL,
`usuarios_dominio_id` INTEGER(11) DEFAULT NULL,
`valor` FLOAT(11,2) DEFAULT NULL,
`juros` FLOAT(11,2) DEFAULT NULL,
`desconto` FLOAT(11,2) DEFAULT NULL,
`total` FLOAT(11,2) DEFAULT NULL,
`status` INTEGER(1) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`periodo_emissao` INTEGER(1) DEFAULT NULL COMMENT '1 - Mensal | 2 - Trimestral | 3 - Semestral | 4 - Anual',
`data_ultima_emissao` DATE DEFAULT NULL,
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pedidos` --


-- Inicio das estrutura da tabela `pedidos_produtos` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `pedidos_produtos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`pedido_id` INTEGER(11) DEFAULT NULL,
`produto_id` INTEGER(11) DEFAULT NULL,
`valor` FLOAT(11,2) DEFAULT NULL,
`desconto` FLOAT(11,2) DEFAULT NULL,
`juros` FLOAT(11,2) DEFAULT NULL,
`status` INTEGER(1) DEFAULT NULL COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`created` DATETIME DEFAULT NULL,
`modified` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `pedidos_produtos` --


-- Inicio das estrutura da tabela `produtos` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `produtos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) NOT NULL,
`descricao` TEXT DEFAULT NULL,
`valor` FLOAT(11,2) NOT NULL,
`created` DATETIME NOT NULL,
`modified` DATETIME DEFAULT NULL,
`updated` DATETIME DEFAULT NULL,
`status` INTEGER(1) NOT NULL DEFAULT 1 COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `produtos` --


-- Inicio das estrutura da tabela `usuarios` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `usuarios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) NOT NULL,
`telefones` TEXT DEFAULT NULL,
`emails` TEXT NOT NULL,
`usuario` VARCHAR(255) NOT NULL,
`senha` VARCHAR(255) DEFAULT NULL,
`created` DATETIME NOT NULL,
`modified` DATETIME DEFAULT NULL,
`updated` DATETIME DEFAULT NULL,
`status` INTEGER(1) NOT NULL DEFAULT 1 COMMENT '0 - Inativo | 1 - Ativo',
`tipo` VARCHAR(50) NOT NULL DEFAULT 'clientes' COMMENT 'Clientes | Administrador',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `usuarios` --


-- Inicio das estrutura da tabela `usuarios_dominios` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `usuarios_dominios` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`usuario_id` INTEGER(11) NOT NULL,
`dominio` VARCHAR(500) NOT NULL,
`status` INTEGER(1) NOT NULL DEFAULT 1 COMMENT '0 - Inativo | 1 - Ativo',
`created` DATETIME NOT NULL,
`modified` DATETIME DEFAULT NULL,
`updated` DATETIME DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `usuarios_dominios` --


/* !40101 SET SQL_MODE=@OLD_SQL_MODE */;
/* !40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/* !40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* !40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

