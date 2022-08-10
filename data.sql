CREATE DATABASE rumah_reza;
USE rumah_reza;
CREATE TABLE data_material (
                               id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                               tanggal DATE NOT NULL,
                               nama_bahan VARCHAR(50) NOT NULL,
                               harga_bahan INT(20) NOT NULL,
                               jumlah_bahan INT(11) NOT NULL,
                               harga INT(20) DEFAULT NULL,
                               nama_toko VARCHAR(50) DEFAULT NULL,
                               foto_nota VARCHAR(255) DEFAULT NULL
);