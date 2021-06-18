/*
 Navicat Premium Data Transfer

 Source Server         : db
 Source Server Type    : MySQL
 Source Server Version : 50725
 Source Host           : localhost:3306
 Source Schema         : cemu

 Target Server Type    : MySQL
 Target Server Version : 50725
 File Encoding         : 65001

 Date: 18/06/2021 08:37:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for endereco
-- ----------------------------
DROP TABLE IF EXISTS `endereco`;
CREATE TABLE `endereco`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `numero` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cep` int(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for relato
-- ----------------------------
DROP TABLE IF EXISTS `relato`;
CREATE TABLE `relato`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `texto` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `quantidade_pessoas` int(255) NOT NULL,
  `tempo_espera` int(255) NOT NULL,
  `fk_id_upa` int(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_id_relato`(`fk_id_upa`) USING BTREE,
  CONSTRAINT `fk_id_relato` FOREIGN KEY (`fk_id_upa`) REFERENCES `upa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for upa
-- ----------------------------
DROP TABLE IF EXISTS `upa`;
CREATE TABLE `upa`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fk_id_endereco` int(255) NOT NULL,
  `horario_funcionamento` int(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_id_endereco`(`fk_id_endereco`) USING BTREE,
  CONSTRAINT `fk_id_endereco` FOREIGN KEY (`fk_id_endereco`) REFERENCES `endereco` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
