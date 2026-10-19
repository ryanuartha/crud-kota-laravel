-- Skema dan data awal untuk latihan CRUD Kota - Pertemuan 5.
-- Jalankan pada database MySQL yang dipilih di file .env.
-- Jika tabel propinsi/kota sudah ada dan berisi data, jangan jalankan ulang bagian CREATE TABLE.

CREATE TABLE IF NOT EXISTS `propinsi` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nama_propinsi` VARCHAR(75) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `kota` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `id_propinsi` INT(11) NOT NULL,
  `nama_kota` VARCHAR(100) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `kota_id_propinsi_index` (`id_propinsi`)
) ENGINE=InnoDB;

-- Data contoh dari modul. INSERT hanya jika tabel masih kosong.
INSERT INTO `propinsi` (`id`, `nama_propinsi`)
SELECT 1, 'DIY' WHERE NOT EXISTS (SELECT 1 FROM `propinsi` WHERE `id` = 1);
INSERT INTO `propinsi` (`id`, `nama_propinsi`)
SELECT 2, 'Jawa Tengah' WHERE NOT EXISTS (SELECT 1 FROM `propinsi` WHERE `id` = 2);
INSERT INTO `propinsi` (`id`, `nama_propinsi`)
SELECT 3, 'Jawa Barat' WHERE NOT EXISTS (SELECT 1 FROM `propinsi` WHERE `id` = 3);
INSERT INTO `propinsi` (`id`, `nama_propinsi`)
SELECT 4, 'Jawa Timur' WHERE NOT EXISTS (SELECT 1 FROM `propinsi` WHERE `id` = 4);
INSERT INTO `propinsi` (`id`, `nama_propinsi`)
SELECT 5, 'Lampung' WHERE NOT EXISTS (SELECT 1 FROM `propinsi` WHERE `id` = 5);

INSERT INTO `kota` (`id`, `id_propinsi`, `nama_kota`)
SELECT 1, 1, 'Bantul' WHERE NOT EXISTS (SELECT 1 FROM `kota` WHERE `id` = 1);
INSERT INTO `kota` (`id`, `id_propinsi`, `nama_kota`)
SELECT 2, 1, 'Sleman' WHERE NOT EXISTS (SELECT 1 FROM `kota` WHERE `id` = 2);
INSERT INTO `kota` (`id`, `id_propinsi`, `nama_kota`)
SELECT 3, 1, 'Kulon Progo' WHERE NOT EXISTS (SELECT 1 FROM `kota` WHERE `id` = 3);
INSERT INTO `kota` (`id`, `id_propinsi`, `nama_kota`)
SELECT 4, 5, 'Kotabumi' WHERE NOT EXISTS (SELECT 1 FROM `kota` WHERE `id` = 4);
