CREATE TABLE anggota(
	id_anggota INT,
	NIM INT,
	nama VARCHAR(225),
	prodi CHAR,
	Motivasi VARCHAR(99999)
);
CREATE TABLE admin(
	id_admin INT,
	nama VARCHAR(225),
	username VARCHAR(225)
);
CREATE TABLE akun(
	id_akun INT,
	username VARCHAR(225),
	katasandi VARCHAR(225)
);
CREATE TABLE kepengurusan(
	id_kepengurusan INT,
	nim INT,
	nama VARCHAR(225),
	jabatan VARCHAR(225),
	prodi VARCHAR(225)
);
CREATE TABLE keuangan_klub(
	id_keuangan INT,
	nama VARCHAR(225),
	pembayaran INT,
	total_bulanan INT
);
CREATE TABLE status_anggota(
	id_status INT,
	keadaan VARCHAR(225),
	nama_anggota VARCHAR(225),
	nim INT,
	prodi VARCHAR(225)
);
CREATE TABLE register(
	id_register INT,
	nama VARCHAR(225),
	motivasi VARCHAR(2255),
	nim INT,
	prodi VARCHAR(225)
);
CREATE TABLE pengumuman(
	id_pengumuman INT,
	deskripsi VARCHAR(225),
	tanggal_terbit DATE,
	judul VARCHAR(2225)
);
CREATE TABLE artikel(
	id_artikel INT,
	deskripsi VARCHAR(225),
	penerbit VARCHAR(225),
	judul VARCHAR(225),
	tanggal_terbit VARCHAR(225)
);