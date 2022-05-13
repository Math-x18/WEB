CREATE TABLE `produto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CodigoProduto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DescricaoProduto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
);