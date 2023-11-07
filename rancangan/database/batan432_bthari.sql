/*
 Navicat Premium Data Transfer

 Source Server         : localhost_mysql
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : batan432_bthari

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 07/11/2023 10:18:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita`  (
  `id` int NOT NULL,
  `judul` varchar(350) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(350) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dibaca` int NOT NULL,
  `title_gambar` varchar(350) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES (1, 'Bupati Sampaikan LKPJ dan LKPD TA 2016 Pada Paripurna DPRD', '<p>MUARABULIAN,DISKOMINFO<br />\r\nRapat Paripurna DPRD Kabupaten Batanghari dalam rangka pembahasan Laporan Keterangan Pertanggung Jawaban Bupati dan Laporan Keuangan Pemerintah Daerah Kabupaten Batanghari Tahun 2016 berlangsung Sukses. Rapat Paripurna yang dihadiri langsung oleh Bupati Batanghari,Ir.H.Syahirsyah,Sy beserta Wakil Bupati Batanghari Hj.Sofia Joesoef berlangsung di ruang Rapat Gedung DPRD Kabupaten Batanghari. Acara yang dilaksanakan pada Selasa (11/04) pagi tadi juga dihadiri Plt.Sekda Batanghari,Seluruh Kepala OPD, Forkompinda dan seluruh anggota Dewan dan para tamu undangan lainnya.(omy/kim)</p>\r\n', '2017-04-11', '1493040115.jpg', 1005, 'Bupati dan Wakil Bupati Bersama Pimpinan DPRD Kabupaten Batang Hari', '2023-11-06 22:34:57', '2023-11-06 15:34:57');
INSERT INTO `berita` VALUES (2, 'Plt Sekretaris Daerah Buka Forum OPD Kabupaten Batang Hari Tahun 2017', '<p><span dir=\"rtl\">DISKOMINFO, Plt.Sekda Batanghari,H.Bakhtiar,SP pada Tanggal 09 Maret 2017 secara resmi membuka acara Forum Organisasi Perangkat Daerah Kabupaten Batanghari Tahun 2017. Acara yang dilaksanakan di Ruang Aula Bappeda Batanghari ini dihadiri Para Asisten Setda, Kepala OPD,seluruh Kepala SKPD se-Kabupaten Batanghari,seluruh Camat se-Kabupaten Batanghari, Delegasi Kecamatan, Tenaga Ahli Pemberdayaan Masyarakat dan&nbsp;Para tamu undangan.</span></p>\r\n\r\n<p><span dir=\"rtl\">&nbsp; &nbsp; &nbsp; &nbsp; Acara Forum Organisasi Perangkat Daerah ini bertemakan &quot;Dengan Forum Organisasi Perangkat Daerah Kabupaten Batanghari Tahun 2017 kita Mewujudkan Konsistensi dan Sinkronisasi Perencanaan Pembangunan Kabupaten Batanghari dalam Rangka Mewujudkan Bangun Sumber Daya Manusia untuk menggerakkan Ekonomi Kerakyatan yang ditinjau dengan Infrastruktur.&quot;</span></p>\r\n\r\n<p><span dir=\"rtl\">&nbsp; &nbsp; &nbsp; &nbsp; Bupati Batanghari yang diwakili Plt.Sekda Batanghari,dalam sambutannya menyampaikan Kepada seluruh Kepala OPD Kabupaten Batanghari untuk memperhatikan kegiatan prioritas Hasil Musrenbang Kecamatan yang diselaraskan dengan Renstra dan Rancangan Renja OPD dengan menggunakan data dan informasi yang lengkap dan akurat serta rencana tata ruang wilayah kabupaten Batanghari,sehingga tercapai sasaran yang ditetapkan sebagaimana tertuang dalam Visi dan Misi RPJMD Kabupaten Batanghari Tahun 2016-2021.</span></p>\r\n', '2017-03-13', '1493040346.jpg', 843, 'PLT. Sekreatis Daerah Membuka Forum OPD Tahun 2017', '2023-11-06 22:21:51', '2023-11-06 15:21:51');

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting`  (
  `id` int NOT NULL,
  `alamat` varchar(350) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telepon` varchar(350) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(350) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `twitter` varchar(350) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `facebook` varchar(350) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES (1, 'Jln. Jenderal Sudirman No 1 Muara Bulian Perkantoran Kantor Bupati Kab. Batang Hari Kode Pos: 36613', '0743 21282 Fax: 0743 21282 / 0821 7932 8999', 'ppidbatangharikab@gmail.com/ ppid@batangarikab.go.id', '', 'diskominfo_bth@yahoo.com', '2020-07-14 01:47:39', '2020-07-14 01:47:39');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, 'foto', 'url');
INSERT INTO `slider` VALUES (2, 'foto', 'url');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `username` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `password` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `usertype` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `block` tinyint NOT NULL DEFAULT 0,
  `sendEmail` tinyint NULL DEFAULT 0,
  `gid` tinyint UNSIGNED NOT NULL DEFAULT 1,
  `registerDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastvisitDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activation` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `params` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `usertype`(`usertype`) USING BTREE,
  INDEX `idx_name`(`name`) USING BTREE,
  INDEX `gid_block`(`gid`, `block`) USING BTREE,
  INDEX `username`(`username`) USING BTREE,
  INDEX `email`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 84 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (62, 'Administrator', 'admin', 'hacker-by-fatih@hotmail.com', 'afc71e48b38eba52ccb118f1ef57a055:hNkdTIs9moPX4WCDfmafikB7qefd1aK1', 'Super Administrator', 0, 1, 25, '2010-12-30 22:03:57', '2011-12-29 21:05:01', '', 'admin_language=id-ID\nlanguage=id-ID\neditor=\nhelpsite=\ntimezone=7\npage_title=Sunting Rincian Anda.\nshow_page_title=1\n\n');
INSERT INTO `users` VALUES (63, 'Suyanto', 'kpde', 'yantopde@yahoo.co.id', '04147e1f5dedd311072b56846c5a87f0:He7Ae4TH1ybIYR20D8xPcvRtL43fpuUl', 'Administrator', 0, 1, 24, '2011-03-06 12:58:43', '2012-01-02 03:06:53', '', 'admin_language=id-ID\nlanguage=id-ID\neditor=\nhelpsite=\ntimezone=7\n\n');
INSERT INTO `users` VALUES (64, 'hukum', 'hukum', 'hukum@yahoo.com', 'ef05aec803fedcd6816f0e52fc232d9d:d8lPVjsYyukZ8kOhlMLc4zyYwNoQNYG2', 'Author', 0, 0, 19, '2011-03-08 02:11:41', '2011-07-11 04:30:44', '', 'admin_language=id-ID\nlanguage=id-ID\neditor=\nhelpsite=\ntimezone=7\n\n');
INSERT INTO `users` VALUES (65, 'Emil', 'kpde1', 'emiliakpde@gmail.com', '36fa455cf4f0f417d8e0fdd70552929c:HVcttvjVxXEYULYnjBVQQALyL0LcZVJj', 'Publisher', 0, 0, 21, '2011-03-23 01:19:51', '2011-03-23 01:31:10', '', 'admin_language=id-ID\nlanguage=id-ID\neditor=\nhelpsite=\ntimezone=7\n\n');
INSERT INTO `users` VALUES (67, 'RSUD HAMBA', 'herawan', 'hera_wan@yahoo.co.id', 'd89c117f846104c21a57a6ce191a0014:xmtjmWoblnD8SAYEudH6R4bvaYxTKhHi', 'Author', 0, 1, 19, '2011-04-04 07:25:55', '2011-04-11 15:57:25', '', 'admin_language=\nlanguage=\neditor=\nhelpsite=\ntimezone=7\n\n');
INSERT INTO `users` VALUES (71, 'evi', 'evi', 'eviismayanti@yahoo.com', '5d4a5215328f6d332b056daefbd82aae:KrrPUzpigu3w0Pgkk473XcGDvFVsYYhw', 'Manager', 0, 0, 23, '2011-04-20 04:47:46', '2011-04-27 02:23:15', '', 'admin_language=id-ID\nlanguage=id-ID\neditor=\nhelpsite=\ntimezone=7\n\n');
INSERT INTO `users` VALUES (70, 'Dzilka mella shafira', 'jill', 'dzilkamellashafira@yahoo.com', '76b436fc380dac6819301b75575cd740:jsfpKpsFlwpTsXZkZ84fJBnoceomewdY', 'Author', 0, 1, 19, '2011-04-15 14:03:07', '0000-00-00 00:00:00', '', 'admin_language=id-ID\nlanguage=id-ID\neditor=\nhelpsite=\ntimezone=7\n\n');
INSERT INTO `users` VALUES (80, 'batanghari', 'kholidi', 'a.kpde@yahoo.co.id', 'e370c5f878fb52d4545e886c4166a6a9:jwsJtDoHNvjERt2FgJWldYPKslg3BvhR', 'Super Administrator', 0, 1, 25, '2011-06-01 04:01:19', '0000-00-00 00:00:00', 'e370c5f878fb52d4545e886c4166a6a9:jwsJtDoHNvjERt2FgJWldYPKslg3BvhR', 'admin_language=id-ID\nlanguage=id-ID\neditor=\nhelpsite=\ntimezone=7\n\n');
INSERT INTO `users` VALUES (78, 'Antho', 'Dinas Pekerjaan Umum', 'chichie89@rocketmail.com', 'a2edbcb5a25f87ba59b24b564b06a71e:LDjdT9J8iXR79EsDkoPXFbkM3PAEntsR', '', 0, 0, 19, '2011-05-14 03:31:08', '2011-05-14 14:36:33', '', '\n');
INSERT INTO `users` VALUES (81, 'THL-TBPP Batanghari', 'Vis', 'marissacantik55@gmail.com', '608e65e24108e5847bcf3beaafec63f2:RHjGBiQE3rZGHGIcbGtkNFhchGbuO7t4', 'Author', 0, 0, 19, '2011-06-14 08:50:46', '2011-06-14 10:12:28', '', '\n');

-- ----------------------------
-- Table structure for video_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `video_kegiatan`;
CREATE TABLE `video_kegiatan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of video_kegiatan
-- ----------------------------
INSERT INTO `video_kegiatan` VALUES (1, 'VIDEO: BUPATI BATANGHARI HADIRI HUT PGRI TINGKAT KAB. BATANG HARI', 'https://www.youtube.com/watch?v=w-sms6ItKew');
INSERT INTO `video_kegiatan` VALUES (2, 'VIDEO: BUPATI BATANGHARI TINJAU PELAKSANAAN PILKADES SERENTAK 2021', 'https://www.facebook.com/100063944693939/videos/pcb.257073556434132/412033597102535');
INSERT INTO `video_kegiatan` VALUES (3, 'VIDEO: BUPATI BATANGHARI MENYERAHKAN RUMAH PROGRAM BAZNAS BATANGHARI KEPADA MUSTAHIQ DI DESA TELUK', 'https://www.facebook.com/pemkab.batanghari/videos/1463888344011718');

SET FOREIGN_KEY_CHECKS = 1;
