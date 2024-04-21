/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MariaDB
 Source Server Version : 110003 (11.0.3-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : bae

 Target Server Type    : MariaDB
 Target Server Version : 110003 (11.0.3-MariaDB)
 File Encoding         : 65001

 Date: 22/04/2024 01:59:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for agencies
-- ----------------------------
DROP TABLE IF EXISTS `agencies`;
CREATE TABLE `agencies`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noreg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `leaderNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mou` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `legal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bankName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bankAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bankBranch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bankNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankHolder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `swiftCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of agencies
-- ----------------------------
INSERT INTO `agencies` VALUES (1, 4, 'Hitachi', '10012', 'Alamat', 'Yoshimura', '089654321880', 'Yuga', '089654321880', 'supra@mail.com', NULL, NULL, 'Bank Japan', 'Alamat', 'Branch', '0812300', 'HItachi', '1234', 0, '2024-04-18 04:29:54', '2024-04-18 04:29:54', NULL);
INSERT INTO `agencies` VALUES (2, 5, 'hima', '090', 'Alamat', 'himawari', '08655', 'wari', '0801', 'hima@mail.com', NULL, NULL, 'Japan', 'Address', 'Branch', '0877624', 'Hima', '020', 0, '2024-04-19 18:33:20', '2024-04-19 18:33:20', NULL);
INSERT INTO `agencies` VALUES (3, 7, 'Nagato', '001', 'Wanokuni', 'Jiraya', '084242', 'Hyuga', '7949242', 'oden@mail.com', NULL, NULL, 'Bank Wano', 'Japan', 'kuni', '898974242', 'nagato', '7972942', 0, '2024-04-20 01:22:32', '2024-04-20 01:22:32', NULL);
INSERT INTO `agencies` VALUES (4, 9, 'Global Style協同組合', 'gln001123', '〒328-0123　栃木県栃木市川原田町1675番地6', 'endo takuya', '0822402082', 'endo takuya', '123456', 'kumai@mail.com', NULL, NULL, 'tochigi bank', 'tochigi', 'tochigi', '1234567', 'Global Style協同組合', 'swiff123', 0, '2024-04-20 02:29:49', '2024-04-20 02:29:49', NULL);

-- ----------------------------
-- Table structure for bills
-- ----------------------------
DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `head` bigint(20) NOT NULL,
  `mitra` bigint(20) NOT NULL,
  `siswa` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '0',
  `nominal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bills
-- ----------------------------

-- ----------------------------
-- Table structure for broadcasts
-- ----------------------------
DROP TABLE IF EXISTS `broadcasts`;
CREATE TABLE `broadcasts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `agency` bigint(20) NOT NULL,
  `mitra` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of broadcasts
-- ----------------------------
INSERT INTO `broadcasts` VALUES (1, 4, 2, '2024-04-18 04:28:40', '2024-04-18 04:28:40');
INSERT INTO `broadcasts` VALUES (2, 4, 3, '2024-04-18 04:28:40', '2024-04-18 04:28:40');
INSERT INTO `broadcasts` VALUES (3, 5, 3, '2024-04-19 18:29:57', '2024-04-19 18:29:57');
INSERT INTO `broadcasts` VALUES (4, 7, 6, '2024-04-20 01:20:09', '2024-04-20 01:20:09');
INSERT INTO `broadcasts` VALUES (5, 7, 3, '2024-04-20 01:20:09', '2024-04-20 01:20:09');
INSERT INTO `broadcasts` VALUES (6, 7, 2, '2024-04-20 01:20:09', '2024-04-20 01:20:09');
INSERT INTO `broadcasts` VALUES (7, 9, 8, '2024-04-20 02:18:14', '2024-04-20 02:18:14');

-- ----------------------------
-- Table structure for companies
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `agency` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kanrihi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of companies
-- ----------------------------
INSERT INTO `companies` VALUES (1, 4, 'Welling', 'Alamat', 'HIyori', '089654321880', 'yori@mail.com', 'yori.com', '1000', '2024-04-18 04:33:54', '2024-04-18 04:34:06', NULL);
INSERT INTO `companies` VALUES (2, 4, 'Sonic', 'Yokohama', 'Flash', '0865489942093', 'sonic@mail.com', 'sonic.com', '1000', '2024-04-18 04:35:07', '2024-04-18 04:35:07', NULL);
INSERT INTO `companies` VALUES (3, 5, 'Kawasaki', 'Alamat', 'kwaki', '02424', 'kawasaki@mail.com', 'kawasaki.com', '1000', '2024-04-19 18:38:40', '2024-04-19 18:38:40', NULL);
INSERT INTO `companies` VALUES (4, 7, 'Hito', 'Nomi', 'Nebula', '09879424', 'hito@mail.com', 'hito.com', '1000', '2024-04-20 01:24:00', '2024-04-20 01:24:00', NULL);

-- ----------------------------
-- Table structure for complaints
-- ----------------------------
DROP TABLE IF EXISTS `complaints`;
CREATE TABLE `complaints`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `head` bigint(20) NOT NULL,
  `user` bigint(20) NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of complaints
-- ----------------------------
INSERT INTO `complaints` VALUES (1, 1, 3, 'uhuy', '2024-04-20 00:34:41', '2024-04-20 00:34:41');

-- ----------------------------
-- Table structure for data
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `users_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `prov` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `place_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `date_birth` date NULL DEFAULT NULL,
  `religion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `married` int(11) NULL DEFAULT NULL,
  `tall` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `blood` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hobbies` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `skill` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `accident` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sick` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `smoker` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alkohol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `japan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `look` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `power` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `learning` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `family` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `me` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `study` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `job` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `job_des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lisensi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `magang` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `magang_des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data
-- ----------------------------
INSERT INTO `data` VALUES (1, '3', '222', 'fa@ra.com', '085640431191', 'Lalu virtual', 'dfad', 'tenggara', 'Kalimantan Tenggara', '2', 'Pantura', '2024-04-18', '1', 1, '2424', '22', 'A', 'Musik', 'Upper', '1', '1', '1', '1', '1', '1', '1', '444', '3', '{\"ibu\":[\"tu\",\"44\",\"08686\"],\"wali\":[\"yuun\",\"45\",\"777\"]}', 'haku', '[[\"SMK Agribisnis\",\"2024-04\",\"2024-12\"]]', '[[\"PT Surya Kencana\",\"2024-04\",\"2024-09\",\"Staff\"],[\"PT Surya Kencani\",\"2024-04\",\"2024-09\",\"Kurir\"]]', 'ok', '[[\"SIM Mobil\",\"2020\",\"A\"],[\"SIM\",\"2023\",\"AB\"]]', '[[\"PT Bukit Asam\",\"2024-01\",\"2024-12\",\"Software\"]]', 'magangs', 1, '2024-04-20 20:59:55', '2024-04-20 21:41:48');

-- ----------------------------
-- Table structure for documents
-- ----------------------------
DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `head` bigint(20) NOT NULL,
  `cv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kontrak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pasport` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `residentCard` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of documents
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for fields
-- ----------------------------
DROP TABLE IF EXISTS `fields`;
CREATE TABLE `fields`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `residance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `interview` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `arrival` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `departure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `workStart` date NULL DEFAULT NULL,
  `workEnd` date NULL DEFAULT NULL,
  `complaint` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fields
-- ----------------------------

-- ----------------------------
-- Table structure for heads
-- ----------------------------
DROP TABLE IF EXISTS `heads`;
CREATE TABLE `heads`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mitra` bigint(20) NULL DEFAULT NULL,
  `company` bigint(20) NULL DEFAULT NULL,
  `agen` bigint(20) NULL DEFAULT NULL,
  `job` bigint(20) NULL DEFAULT NULL,
  `field` bigint(20) NULL DEFAULT NULL,
  `inter` bigint(20) NULL DEFAULT NULL,
  `type` enum('mandiri','partner') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of heads
-- ----------------------------
INSERT INTO `heads` VALUES (1, 3, 3, 2, 2, NULL, 1, 'partner', 0, '2024-04-21 11:57:13', '2024-04-21 11:57:13', NULL);

-- ----------------------------
-- Table structure for interview
-- ----------------------------
DROP TABLE IF EXISTS `interview`;
CREATE TABLE `interview`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mitra` bigint(20) NOT NULL DEFAULT 0,
  `doc` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = armscii8 COLLATE = armscii8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of interview
-- ----------------------------
INSERT INTO `interview` VALUES (1, 3, 'assets/data/mitra/3/cv_1713573059.pdf', '2024-04-20 00:30:59', '2024-04-20 00:30:59');
INSERT INTO `interview` VALUES (2, 6, 'assets/data/mitra/6/cv_1713577218.pdf', '2024-04-20 01:40:18', '2024-04-20 01:40:18');
INSERT INTO `interview` VALUES (3, 6, 'assets/data/mitra/6/cv_1713577232.pdf', '2024-04-20 01:40:32', '2024-04-20 01:40:32');

-- ----------------------------
-- Table structure for inv
-- ----------------------------
DROP TABLE IF EXISTS `inv`;
CREATE TABLE `inv`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `inv` bigint(20) NULL DEFAULT NULL,
  `siswa` bigint(20) NULL DEFAULT NULL,
  `time` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tanggal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '',
  `nominal` double NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inv
-- ----------------------------

-- ----------------------------
-- Table structure for invoices
-- ----------------------------
DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `head` bigint(20) NULL DEFAULT NULL,
  `parent` bigint(20) NULL DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `note` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '',
  `mitra` bigint(20) NULL DEFAULT NULL,
  `agen` bigint(20) NULL DEFAULT NULL,
  `template` int(11) NULL DEFAULT 0,
  `files` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '',
  `tanggal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `due` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of invoices
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company` bigint(20) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `residance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kouta` int(11) NOT NULL,
  `age` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `allowance` double NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT 0,
  `tojob` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------
INSERT INTO `jobs` VALUES (1, 2, 'Welder', 'volatile', 11, '23', 'Man', 10000, 1000, NULL, 'assets/data/company/1713414955.pdf', 0, NULL, '2024-04-18 04:35:55', '2024-04-18 04:35:55', NULL);
INSERT INTO `jobs` VALUES (2, 3, 'Drafter', 'Musafir', 20, '20', 'Man', 1000, 100, '-', 'assets/data/company/1713551955.pdf', 0, NULL, '2024-04-19 18:39:15', '2024-04-19 18:39:15', NULL);
INSERT INTO `jobs` VALUES (3, 4, 'Teacher', 'Musfir', 10, '20', 'Man', 1000, 100, 'everyman', 'assets/data/company/1713576318.pdf', 0, NULL, '2024-04-20 01:25:18', '2024-04-20 01:25:18', NULL);

-- ----------------------------
-- Table structure for logs
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `in` bigint(20) NOT NULL,
  `to` bigint(20) NOT NULL,
  `args` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------

-- ----------------------------
-- Table structure for mous
-- ----------------------------
DROP TABLE IF EXISTS `mous`;
CREATE TABLE `mous`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `agency` bigint(20) NOT NULL,
  `mitra` bigint(20) NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '',
  `file` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mous
-- ----------------------------
INSERT INTO `mous` VALUES (1, 1, 2, 'lampiran_1', '', '2024-04-18 04:32:48', '2024-04-18 04:32:48');
INSERT INTO `mous` VALUES (2, 1, 2, 'lampiran_2', '', '2024-04-18 04:32:55', '2024-04-18 04:32:55');
INSERT INTO `mous` VALUES (3, 1, 3, 'lampiran_1', '', '2024-04-18 04:33:14', '2024-04-18 04:33:14');
INSERT INTO `mous` VALUES (4, 1, 3, 'lampiran_2', '', '2024-04-18 04:33:21', '2024-04-18 04:33:21');
INSERT INTO `mous` VALUES (5, 2, 3, 'lampiran_1', '', '2024-04-19 18:37:30', '2024-04-19 18:37:30');
INSERT INTO `mous` VALUES (6, 2, 3, 'mou_tsk', '', '2024-04-19 18:37:37', '2024-04-19 18:37:37');
INSERT INTO `mous` VALUES (7, 3, 6, 'lampiran_1', '', '2024-04-20 01:23:08', '2024-04-20 01:23:08');
INSERT INTO `mous` VALUES (8, 3, 6, 'mou_tsk', '', '2024-04-20 01:23:17', '2024-04-20 01:23:17');

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for patrners
-- ----------------------------
DROP TABLE IF EXISTS `patrners`;
CREATE TABLE `patrners`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `leaderNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permitFile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankHolder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bankBranch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bankNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bankAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `swiftCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stamp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of patrners
-- ----------------------------
INSERT INTO `patrners` VALUES (1, 2, 'Lintas Energi', 'le@mail.com', 'Alamat', 'Saya', '081932663450', 'Kamu', '081932663450', 'kemenkueham', 'assets/data/mitra/2/izin.pdf', '8003', 'BCA', 'LINTAS KOTA', 'Branch', '0812300', 'Alamat', '1234', 'assets/data/mitra/2/logo.jpg', 'assets/data/mitra/2/stamp.jpg', 'assets/data/mitra/2/ttd.jpg', 0, '2024-04-18 04:25:30', '2024-04-18 04:25:30', NULL);
INSERT INTO `patrners` VALUES (2, 3, 'Lintas Negara', 'ln@mail.com', 'Alamat', 'Saya', '081932663450', 'Anda', '081932663450', 'kemenkueham', 'assets/data/mitra/3/izin.pdf', '8003', 'BCA', 'LINTAS KOTA', 'Branch', '0812300', 'Alamat', '1234', 'assets/data/mitra/3/logo.png', 'assets/data/mitra/3/stamp.png', 'assets/data/mitra/3/ttd.png', 0, '2024-04-18 04:27:17', '2024-04-18 04:27:46', NULL);
INSERT INTO `patrners` VALUES (3, 6, 'Wanokuni', 'yori@mail.com', 'Tokyo', 'Momo', '0768787', 'Hiyori', '0808786', 'kemenkueham', 'assets/data/mitra/6/izin.pdf', '80037878', 'Bank Japan', 'Oden', 'Branch', '081230011', 'wanokuni', '123400', 'assets/data/mitra/6/logo.jpg', 'assets/data/mitra/6/stamp.jpg', 'assets/data/mitra/6/ttd.jpg', 0, '2024-04-20 01:19:12', '2024-04-20 01:19:12', NULL);
INSERT INTO `patrners` VALUES (4, 8, 'LPK Ulaula', 'lpk@mail.com', 'Pluto', 'Adi', '08123456789', 'Avri', '08987654321', 'asdf', 'assets/data/mitra/8/izin.pdf', 'asdf', 'mandiri', 'LPK Pluto', 'asdf', '12344321', 'bank', 'pluto1234', 'assets/data/mitra/8/logo.jpg', 'assets/data/mitra/8/stamp.jpg', 'assets/data/mitra/8/ttd.jpg', 0, '2024-04-20 02:13:11', '2024-04-20 02:13:11', NULL);

-- ----------------------------
-- Table structure for payments
-- ----------------------------
DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `inv` bigint(20) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of payments
-- ----------------------------
INSERT INTO `payments` VALUES (1, 3, 'kanrihi', 'assets/data/agency/4/ss_1713554980.png', 1650000, '2024-04-19 19:29:40', '2024-04-19 19:29:40');
INSERT INTO `payments` VALUES (2, 2, 'kanrihi', 'assets/data/agency/5/ss_1713555329.png', 3000000, '2024-04-19 19:35:29', '2024-04-19 19:35:29');
INSERT INTO `payments` VALUES (3, 6, 'management_fee', 'assets/data/agency/4/ss_1713560436.png', 3300000, '2024-04-19 21:00:36', '2024-04-19 21:00:36');
INSERT INTO `payments` VALUES (4, 4, 'kanrihi', 'assets/data/agency/4/ss_1713560579.png', 1650000, '2024-04-19 21:02:59', '2024-04-19 21:02:59');
INSERT INTO `payments` VALUES (5, 5, 'management_fee', 'assets/data/agency/5/ss_1713560631.png', 3300000, '2024-04-19 21:03:51', '2024-04-19 21:03:51');
INSERT INTO `payments` VALUES (6, 7, 'monitoring_fee', 'assets/data/agency/5/ss_1713562506.jpg', 3300000, '2024-04-19 21:35:06', '2024-04-19 21:35:06');
INSERT INTO `payments` VALUES (7, 10, 'kanrihi', 'assets/data/agency/7/ss_1713576825.png', 3300000, '2024-04-20 01:33:45', '2024-04-20 01:33:45');
INSERT INTO `payments` VALUES (8, 11, 'ticket_pesawat', 'assets/data/agency/7/ss_1713576988.png', 1100000, '2024-04-20 01:36:28', '2024-04-20 01:36:28');
INSERT INTO `payments` VALUES (9, 12, 'management_fee', 'assets/data/agency/7/ss_1713577063.png', 3300000, '2024-04-20 01:37:43', '2024-04-20 01:37:43');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bank` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `self` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'Padang Bai - 010101', '10', 0, '2024-04-19 18:28:12', '2024-04-20 01:31:45');

-- ----------------------------
-- Table structure for to_jobs
-- ----------------------------
DROP TABLE IF EXISTS `to_jobs`;
CREATE TABLE `to_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `job` bigint(20) NOT NULL,
  `mitra` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of to_jobs
-- ----------------------------
INSERT INTO `to_jobs` VALUES (1, 1, 2, '2024-04-18 04:35:55', '2024-04-18 04:35:55');
INSERT INTO `to_jobs` VALUES (2, 1, 3, '2024-04-18 04:35:55', '2024-04-18 04:35:55');
INSERT INTO `to_jobs` VALUES (3, 2, 3, '2024-04-19 18:39:15', '2024-04-19 18:39:15');
INSERT INTO `to_jobs` VALUES (4, 3, 6, '2024-04-20 01:25:18', '2024-04-20 01:25:18');
INSERT INTO `to_jobs` VALUES (5, 3, 2, '2024-04-20 01:25:18', '2024-04-20 01:25:18');
INSERT INTO `to_jobs` VALUES (6, 3, 3, '2024-04-20 01:25:18', '2024-04-20 01:25:18');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `role` enum('peserta','agency','mitra','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'root', 'admin@admin.com', NULL, NULL, NULL, 'admin', '$2y$10$HtVVbJuNklGfQoh5HXMoQ.0ts2hbI.LgXnqOgbWJA9L/iLMp5VREW', NULL, 1, '2024-04-18 04:17:00', '2024-04-18 04:17:15');
INSERT INTO `users` VALUES (2, 'Lintas Energi', 'le@mail.com', NULL, NULL, NULL, 'mitra', '$2y$10$3ZL7Wklp9Fu3lVuWYNj/Vu8Wu8Vg5UP32z/smkvoUTXpqirt.NE2S', NULL, 1, '2024-04-18 04:18:10', '2024-04-18 04:18:10');
INSERT INTO `users` VALUES (3, 'Lintas Negara', 'ln@mail.com', NULL, NULL, NULL, 'mitra', '$2y$10$ZxdScY9Gn8yASJIGmnbWIedsFKQt.xFHHDNGhBWQ6VG8r4a0JK4rS', NULL, 1, '2024-04-18 04:18:32', '2024-04-18 04:18:32');
INSERT INTO `users` VALUES (4, 'Hitachi', 'hitachi@mail.com', NULL, NULL, 'kumai', 'agency', '$2y$10$lThCg53K4sdJ/pgCd4MNsuqlmwFKT3rRGBvYr3KP17B22rLSyR4Km', NULL, 1, '2024-04-18 04:28:40', '2024-04-18 04:28:40');
INSERT INTO `users` VALUES (5, 'Himawari', 'hima@mail.com', NULL, NULL, 'kumai', 'agency', '$2y$10$dQFob49BxtLGzu1IWjlfMOtwr3pwCeXh7g./LDq6gOczREm654UJW', NULL, 1, '2024-04-19 18:29:57', '2024-04-19 18:29:57');
INSERT INTO `users` VALUES (6, 'Lintas Angin', 'la@mail.com', NULL, NULL, NULL, 'mitra', '$2y$10$K9owP7Duz2qgk8qvgCysJeMF8cREGQ.PCN2JanahVD665XaEFzBu6', NULL, 1, '2024-04-20 01:16:34', '2024-04-20 01:16:34');
INSERT INTO `users` VALUES (7, 'Oden', 'oden@mail.com', NULL, NULL, 'kumai', 'agency', '$2y$10$PzamykpvhqtT8UeBJY7vI.4986fP2xkJ2Zj.8/CGZaEW0X6wsEH4K', NULL, 1, '2024-04-20 01:20:09', '2024-04-20 01:20:09');
INSERT INTO `users` VALUES (8, 'lpk', 'lpk@mail.com', NULL, NULL, NULL, 'mitra', '$2y$10$Rs/3KeLKylv8F7JHzQMXguDt3nnK2s0b0vn6pHabukyGz2nS7ikoy', NULL, 1, '2024-04-20 02:07:13', '2024-04-20 02:07:13');
INSERT INTO `users` VALUES (9, 'Kumai', 'kumai@mail.com', NULL, NULL, 'kumai', 'agency', '$2y$10$tmmmlFO1656miF1u3Sed.ejEyya7/C/wGS08Ky.vCj1ifY14JkGeO', NULL, 1, '2024-04-20 02:18:14', '2024-04-20 02:18:14');

SET FOREIGN_KEY_CHECKS = 1;
