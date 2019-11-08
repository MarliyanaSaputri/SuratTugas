-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2019 pada 02.20
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spt_1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `kd_bid` varchar(15) NOT NULL,
  `nama_bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bidang`
--

INSERT INTO `tb_bidang` (`kd_bid`, `nama_bidang`) VALUES
('114.1', 'SEKRETARIAT'),
('114.2', 'BIDANG INFORMASI PUBLIK'),
('114.3', 'BIDANG KOMUNIKASI PUBLIK'),
('114.4', 'BIDANG APLIKASI INFORMATIKA'),
('114.6', 'BIDANG PENGELOLAAN DATA DAN ST'),
('114.7', 'UNIT PELAKSANAAN TEKNIS'),
('114.8', 'KELOMPOK PELAKSANAAN TEKNIS'),
('144.5', 'BIDANG INFRASTRUKTUR TIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dl`
--

CREATE TABLE `tb_dl` (
  `id_dl` int(10) NOT NULL,
  `id_st` int(100) NOT NULL,
  `no_st` varchar(40) NOT NULL,
  `NIP` varchar(35) NOT NULL,
  `maksud_tujuan` text NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `peserta_hadir` text NOT NULL,
  `daerah_tujuan` varchar(30) NOT NULL,
  `bahasan` text NOT NULL,
  `lain-lain` text NOT NULL,
  `tgl_pembuatan` date NOT NULL,
  `hadir2` text DEFAULT NULL,
  `hadir3` text DEFAULT NULL,
  `hadir4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dl`
--

INSERT INTO `tb_dl` (`id_dl`, `id_st`, `no_st`, `NIP`, `maksud_tujuan`, `tgl_pelaksanaan`, `tgl_akhir`, `peserta_hadir`, `daerah_tujuan`, `bahasan`, `lain-lain`, `tgl_pembuatan`, `hadir2`, `hadir3`, `hadir4`) VALUES
(6, 1, '090 / 02   / 114.3 / 2019', '19680614 199602 2 002', 'Mendatangi Acara Ulang Tahun Jatim ', '2019-10-21', '2019-11-22', 'Kepala Dinas Kominfo Surabaya', 'Surabaya', 'Acara perayaan ulang tahun jatim\r\nAcara Perayaan Jatim di Malang\r\nAcara Perayaan Jatim di Madiun\r\nAcara Perayaan Jatim di Mojokerto\r\nAcara Perayaan Jatim di Pasuruan', 'Acara Perayaan Jatim di Surabaya\r\n', '2019-10-21', 'Sekretaris', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `NIP` varchar(35) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `pangkat` varchar(35) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `kd_bid` varchar(15) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1. Admin; 2. User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`NIP`, `nama`, `pangkat`, `golongan`, `jabatan`, `kd_bid`, `username`, `password`, `level`) VALUES
('1', 'Admin', 'Admin', 'Admin', 'Admin', '114.3', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
('114020919660120173844', 'SARWANDI', '', 'PTT', '', '114.1', 'sae', '', 2),
('114050119800120091511', 'ACHMAD MUHADJIR , S.Sos', '', 'PTT', '', '114.2', '', '', 2),
('114060319680120091518', 'SUPARNO S. S', '', 'PTT', '', '114.3', '', '', 2),
('114060519810120091510', 'SITI SAADAH, S.Sos', '', 'PTT', '', '114.2', '', '', 2),
('114061219800120091515', 'Renny Lestani  Susanti,S.I.Kom', '', 'PTT', '', '144.6', '', '', 2),
('114070719910120178590', 'PONDRA SETIAWAN', '', 'PTT', '', '114.4', '', '', 2),
('114070719910120178591', 'FARAH DEVI ISNANDA', '', 'PTT', '', '114.4', '', '', 2),
('114070719910120178592', 'DEVAN ASTIKO BAKTIAR', '', 'PTT', '', '114.4', '', '', 2),
('114080119901020168100', 'Angela Anggi Ranistianis', '', 'PTT', '', '144.6', '', '', 2),
('114080319840120091514', 'MOCH KHOIRUL RIJAL, S.Sos', '', 'PTT', '', '114.2', '', '', 2),
('114090319790120193518', 'Hadi Wiyono', '', 'PTT', '', '114.1', '', '', 2),
('114110319880120173836', 'NUR CHOTIMAH', '', 'PTT', '', '114.1', '', '', 2),
('114110519740120081508', 'WALUYO HERASIA', '', 'PTT', '', '114.1', '', '', 2),
('114121119690120091516', 'GATOT DWI SASONGKO, SE', '', 'PTT', '', '114.2', '', '', 2),
('114121219860120141528', 'DESI PANCA INDRA', '', 'PTT', '', '114.2', '', '', 2),
('114130519830120071507', 'Sielfia Lekatompessy, S.Kom', '', 'PTT', '', '144.6', '', '', 2),
('114141019710120091517', 'SITI FATONAH', '', 'PTT', '', '114.1', '', '', 2),
('114150419830120173842', 'Edy Sukarno', '', 'PTT', '', '114.1', '', '', 2),
('114160919750120061505', 'PUNGKY SETIAWAN A.Md', '', 'PTT', '', '114.3', '', '', 2),
('114170119781020051502', 'IMAM SUHARTOYO', '', 'PTT', '', '114.3', '', '', 2),
('114190419880120173838', 'RUNA FERRI SANJAYA', '', 'PTT', '', '114.1', '', '', 2),
('114190619840120173835', 'Heny Kusumaningsih, Se', '', 'PTT', '', '114.1', '', '', 2),
('114190619850120091513', 'MOCH AFRIZAL AKBAR, S.I.Kom', '', 'PTT', '', '114.2', '', '', 2),
('114190719790120091522', 'SUKMA SUSILAWATI, S.Sos', '', 'PTT', '', '114.1', '', '', 2),
('114210519730120091523', 'MUHAMMAD,  S.Sos', '', 'PTT', '', '114.2', '', '', 2),
('114220119690120101525', 'ANANG SETYAWAN, ST', '', 'PTT', '', '114.5', '', '', 2),
('114220319940520189790', 'BRILLIANTARA ANUGRAH', '', 'PTT', '', '114.4', '', '', 2),
('114230519710620051503', 'PRIYO JATMIKO', '', 'PTT', '', '114.1', '', '', 2),
('114240419780120101526', 'SUKARDI', '', 'PTT', '', '114.4', '', '', 2),
('114240419800120091521', 'Rahmad Hartono', '', 'PTT', '', '114.1', '', '', 2),
('114241119940120173847', 'MUHAMMAD ZAZULI YUSUF', '', 'PTT', '', '114.5', '', '', 2),
('114250919780120091520', 'SRI LESTARI, S.Kom', '', 'PTT', '', '114.1', '', '', 2),
('114251119900420195369', 'HERA FIRDHAUSA KATILI, S.T', '', 'PTT', '', '114.1', '', '', 2),
('114270519720120051504', 'ANANG ANGGONO WIBOWO, SE', '', 'PTT', '', '114.3', '', '', 2),
('114270519800120091512           ', 'Aris Effendi, S.Sos', '', 'PTT', '', '114.2', '', '', 2),
('114270719810120071506', 'Fitria Maharani, S.Sos', '', 'PTT', '', '114.1', '', '', 2),
('114300819860120141529', 'DENNY RAHARJO', '', 'PTT', '', '114.3', '', '', 2),
('114300919700120173839', 'Hari Budiman', '', 'PTT', '', '114.1', '', '', 2),
('144241219800120173843', 'Imam Supi\'i', '', 'PTT', '', '114.1', '', '', 2),
('196110221988032003', 'A. AMBARWATYNINGTYAS, BA', 'Penata Tingkat I', 'III/d', '', '114.3', '', '', 2),
('196110291986032003', 'SRI UTAMI Bc. Kn. ', '', 'III/c', '', '114.4', '', '', 2),
('196201251984032002', 'SAADATUL QORINAH', 'Penata Muda Tingkat I', 'III/b', '', '114.3', '', '', 2),
('196203011982032010', 'HERINI MAWARTI RAHAJOE', 'Penata Tingkat I', 'III/d', '', '114.2', '', '', 2),
('196203161990031006', 'Ir. DODONG M. MEDIANTOKO, M.Si', '', 'IV/b', 'Kepala Bidang Infrastruktur TIK', '114.5', '', '', 2),
('196204101991031006', 'PURWANTO', '', 'II/c', '', '114.3', '', '', 2),
('196204191983032006', 'Dra.OETAMI TRISNA SAYEKTI', 'Pembina', 'IV/a', 'Kepala Seksi Pengelolaan Opini Publik', '114.3', '', '', 2),
('196208121986032011', 'Kasmani', 'Penata Muda Tingkat I', 'III/b', '', '114.1', '', '', 2),
('196210101990031012', 'SUWARNO', 'Penata Muda Tingkat I', 'III/b', '', '114.3', '', '', 2),
('196210211990031004', 'Eko Roedhy Loegmanto, Sh.', 'Penata Tingkat I', 'III/d', 'Kepala Sub Bagian Penyusunan Program Anggaran Dinas Komunikasi dan Informatika Provinsi Jawa Timur', '114.1', '', '', 2),
('196212261985031015', 'AGUS DWI  MUHANAN, S.Sos, MM.', 'Pembina', 'IV/a', 'Kepala Seksi Layanan Informasi Publik', '114.2', '', '', 2),
('196302251996021001', 'Drs. Ec. RUDY PRASETYA, MM', 'Pembina Tingkat I', 'IV/b', 'Kepala Bidang Pengelolaan Data dan Statistik Dinas Komunikasi Dan Informatika Jawa Timur', '114.6', '', '', 2),
('196303211990032002', 'MARIA OEDETE CES SILVA', '', 'II/a', '', '114.4', '', '', 2),
('196306071989032005', 'FIELIANNA MACHDA, S.Sos. MM.', 'Pembina', 'IV/a', '', '114.2', '', '', 2),
('196306101999032002', 'Ir. NANIEK YUNIATI, SH', 'Pembina', 'IV/a', '', '114.2', '', '', 2),
('19630907198501002', 'JONY ERWANTO, SH', 'Pengatur Tingkat I', 'III/d', '', '114.6', '', '', 2),
('196312251991031012', 'SUNARYO', 'Penata Muda Tingkat I', 'III/b', '', '114.2', '', '', 2),
('19640117199103007', 'DJOKO WIJONO', 'Penata', 'III/c', '', '114.3', '', '', 2),
('196403171993031007', 'Ir. AGUNG MARTONO', 'Penata Tingkat I', 'III/d', 'Kepala Seksi Pemeliharaan Infrastruktur TIK', '114.5', '', '', 2),
('196405071987031018', 'Soekismanto', 'Penata Muda Tingkat I', 'III/b', '', '114.1', '', '', 2),
('19640515198302002', 'Anjaina', 'Pengatur', 'II/c', '', '114.2', '', '', 2),
('196405281983031001', 'SAMSURI, S.Sos, M.Si', 'Pembina', 'IV/a', 'Kepala Sub Bagian Keuangan ', '114.1', '', '', 2),
('196407061999031002', 'Masruhin', 'Penata Muda', 'III/a', '', '114.1', '', '', 2),
('196407071998031002', 'Suwantoyo', 'Penata Muda Tingkat 1', 'III/b', '', '114.6', '', '', 2),
('196408041988031011', 'Dr. Ardo Sahak. SE, MM', 'Pembina Utama Madya', 'IV/d', 'Kepala Dinas Komunikasi dan Informatika Provinsi Jawa Timur', '114.1', '', '', 2),
('196409231988031004', 'SUBIYANTORO', 'Penata Muda Tingkat I', 'III/b', '', '114.3', '', '', 2),
('196412041998031002', 'HANDOJO KILAT STYAWAN', '', 'III/a', '', '114.4', '', '', 2),
('196412241988031008', 'CAHYONO YHUDIATMADJI', 'Penata Muda Tingkat I', 'III/b', '', '114.3', '', '', 2),
('196503072007011018', 'Didik Surwadi', 'Pengatur Tingkat 1', 'II/d', '', '114.1', '', '', 2),
('196507101987031010', 'SUGENG', 'Penata Tingkat I', 'III/d', '', '114.2', '', '', 2),
('196508091991032008', 'Dra. TATIK AGUSTINA', 'Penata Tingkat I', 'III/d', '', '114.1', '', '', 2),
('196509091994032006', 'Dra. Ec. NIRMALA DEWI, MM', 'Pembina Tingkat I', 'IV/a', 'Kepala Bidang Aplikasi Informatika', '114.4', '', '', 2),
('196601011986101006', 'M. SOEHARTONO', '', 'III/b', '', '114.4', '', '', 2),
('196602011989031010', 'Nurhadi', 'Penata Muda Tingkat I', 'III/b', '', '114.1', '', '', 2),
('196604191986072001', 'SOETJININGSIH', 'Penata Muda Tingkat I', 'III/b', '', '114.3', '', '', 2),
('196606301990032010', 'Erna Diah Akriyanti, S.Sos', 'Penata Tingkat I', 'III/d', '', '114.1', '', '', 2),
('196606302012121001', 'Hamidun', 'Pengatur Muda Tingkat I', 'II/b', '', '114.6', '', '', 0),
('196607071991031013', 'MARHAENRY MATHEUS YANI', 'Penata', 'III/c', '', '114.2', '', '', 2),
('19660717 201001 1 003', 'Agus Sunaryo', 'Pengatur', 'II/c', '', '114.1', '', '', 0),
('196608011997031002', 'Edy Mulyono,Sh', 'Penata Muda Tingkat I', 'III/b', '', '114.1', '', '', 2),
('196611121986032006', 'TUTIK SUPRIYATI', '', 'III/b', '', '114.4', '', '', 2),
('196611171990112001', 'SOFIA KURNIAWATI, SE, Msi', 'Pembina', 'IV/a', 'Kepala Seksi Kemitraan Komunikasi Publik ', '114.3', '', '', 2),
('19661129 199602 1 001', 'Heri Dwi Oetojo', 'Penata Muda Tingkat I', 'III/b', '', '114.1', '', '', 0),
('196703021993021002', 'Samsul Hadi', 'Penata Muda', 'III/a', '', '114.1', '', '', 2),
('196703131989031008', 'AMAT MUSTA’IN, S.Sos', 'Pembina', 'IV/a', '', '114.2', '', '', 2),
('196704042007011027', 'April Hari Santoso, S.Sos', 'Penata Muda', 'III/a', '', '114.1', '', '', 2),
('196704181989031007', 'HERLAMBANG PRIJOMBODO', 'Penata Tingkat I', 'III/d', '', '114.2', '', '', 2),
('196705181990032009', 'YANTI DYAH HARSONO, S.Sos. M.S', 'Pembina', 'IV/a', 'Kepala Seksi Media Publik', '114.2', '', '', 2),
('196705301989031006', 'EDI SUPAJI, SH, MM', 'Pembina', 'IV/a', 'Kepala Bidang Informasi Publik', '114.2', '', '', 2),
('196706201994032007', 'Dra. SITI PURWATININGSIH, MM', 'Pembina', 'IV/a', '', '114.1', '', '', 2),
('196709201992031015', 'CHOIRUL ANWAR, SE', 'Penata', 'III/c', '', '114.2', '', '', 2),
('196710021994031005', 'SUPONO', 'Penata Muda Tingkat I', 'III/b', '', '114.2', '', '', 2),
('196711132007011023', 'Sucipto', 'Penata Muda', 'III/a', '', '114.6', '', '', 2),
('196805132009011004', 'Suparto', 'Pengatur Muda', 'II/a', '', '114.1', '', '', 2),
('196806141996022002', 'Ir. Dra. AJU MUSTIKA DEWI, MM', 'Pembina Tingkat I', 'IV/b', 'Sekretaris Dinas Komunikasi dan Informatika Provinsi jawa Timur', '114.1', '', '', 2),
('196807221990031006', 'Drs. AGUNG SRIONO, SH. MM', 'Pembina', 'IV/a', 'Kepala Sub Bagian Tata Usaha Dinas Komunikasi dan Informatika Provinsi Jawa Timur', '114.1', '', '', 2),
('19680909 198903 2 006', 'UNON SEPTI PRATIWI W. ', 'Penata Tingkat I', 'III/d', '', '114.2', '', '', 0),
('196810021992032005', 'SRI WAHYUNI', 'Penata Muda Tingkat I', 'III/b', '', '114.3', '', '', 2),
('196901291991122001', 'SITI HATIDJAH, SE', 'Penata', 'III/c', '', '114.2', '', '', 2),
('196902041992021001', 'Usman', 'Penata', 'III/c', '', '114.1', '', '', 2),
('196902141988031002', 'AGUS BUDI SAMPURNO, SE', 'Penata Tingkat I', 'III/d', 'Kepala Seksi Jaringan Infrastruktur TIK', '114.5', '', '', 2),
('196905132008011013', 'FADIL', '', 'II/a', '', '114.5', '', '', 2),
('19691015 198903 1 006', 'SUPRIONO, SH', 'Pembina', 'IV/a', '', '114.2', '', '', 0),
('196912111989111002', 'Drs. SATRIYO WAHYUDI, M. Si', 'Pembina', 'IV/a', '', '114.4', '', '', 2),
('197011212007011013', 'Marsudi\r\n', 'Pengatur Muda Tingkat I', 'II/b', '', '114.6', '', '', 2),
('197011221999032004', 'TITIK SUSIATI, SE', 'Penata Tingkat I', 'III/d', '', '114.1', '', '', 2),
('197105111997032002', 'MEI JUNIARTI, S. Sos', 'Pembina', 'IV/a', '', '114.1', '', '', 2),
('197108182014121001', 'HARSANTO, ST', 'Penata Muda Tingkat I', 'III/b', '', '114.4', '', '', 2),
('197110091999011001', 'DENDY EKA PUSPAWADI, S.Si', 'Penata Tingkat I', 'III/d', 'Kepala Seksi Tata Kelola dan Pemberdayaan TIK', '114.4', '', '', 2),
('197111111994022002', 'SUSIATI, SE', 'Penata Tingkat 1', 'III/d', '', '114.6', '', '', 2),
('197112282008011004', 'NANANG EKO KUSWORO,ST', 'Penata', 'III/c', '', '114.5', '', '', 2),
('19720113 199203 1 003', 'Moedjianto', 'Pengatur', 'II/c', '', '114.1', '', '', 0),
('197201261998031007', 'Idham Assari KP, ST. MM', 'Pembina', 'IV/a', 'Kepala Seksi Evaluasi dan Informasi', '114.6', '', '', 2),
('197205301993032006', 'ERNI WIDIARTI', 'Penata', 'III/c', '', '114.2', '', '', 2),
('197210201994031008', 'YUDI EFENDI', 'Penata', 'III/c', '', '114.4', '', '', 2),
('197210312006041005', 'ACHMAD FADLIL CHUSNI, S.Kom. M', 'Penata Tingkat I', 'III/d', 'Kepala Seksi Pengembangan Aplikasi ', '114.4', '', '', 2),
('197302182010011004', 'SUDARMANTO', '', 'II/c', '', '114.5', '', '', 2),
('197304112007012008', 'Umi Susila Rini', 'Pengatur Tingkat 1', 'II/d', '', '114.1', '', '', 2),
('197310202009011001', 'Wahyu Purwantono', '', 'II/c', '', '114.1', '', '', 2),
('197401092008011008', 'Edy Mugi Basuki', 'Pengatur', 'II/c', '', '114.2', '', '', 2),
('197402072008011003', 'Taufik Hidayat', 'Pengatur', 'II/c', '', '114.1', '', '', 2),
('19740325 199803 1 006', 'Much. Hufron', 'Pengatur', 'II/c', '', '114.1', '', '', 0),
('197404111998031004', 'PUTUT DARMAWAN', 'Penata', 'III/c', '', '114.2', '', '', 2),
('197406202008011011', 'M. Dhaimul Kharomin', 'Pengatur', 'II/c', '', '114.2', '', '', 2),
('197407142008011009', 'Arif Sedtiaji', 'Pengatur', 'II/c', '', '114.6', '', '', 2),
('19740823 199803 2 005', 'Ary Retno Indarwati', 'Penata Muda', 'III/a', '', '114.1', '', '', 0),
('197410202005011009', 'Octavitriadi', 'Pengatur Tingkat I', 'II/d', '', '114.1', '', '', 2),
('19750304 200102 2 006', 'LENNY MARTARINA, SE. Ak', 'Pembina', 'IV/a', '', '114.1', '', '', 0),
('197506212008012010', 'Diana Kitasari, Se', 'Penata Muda', 'III/a', '', '114.1', '', '', 2),
('197612202010011002', 'ROFI’I', '', 'II/c', '', '114.4', '', '', 2),
('197705172009011005', 'I WAYAN RUDY ARTHA, S.Kom', 'Penata', 'III/c', 'Kepala Seksi Pengelolaan Data Dinas Komunikasi dan Informatika Jawa Timur', '114.6', '', '', 2),
('197706262010012005', 'RETNO YUNI  W , ST', 'Penata Muda Tingkat I', 'III/b', '', '114.4', '', '', 2),
('197711192009011001', 'EKO UJIANTO', '', 'II/c', '', '114.2', '', '', 2),
('197712182008011008', 'GURUH AGUNG YUGITA WARDHANA', '', 'lII/a', '', '114.4', '', '', 2),
('19780420 2010011003', 'Feri Hadijaya, Se', 'Penata', 'III/c', '', '114,1', '', '', 2),
('197810202010012003', 'Ida Prihatin. S.P. S.Pd. Mm', 'Penata', 'III/c', '', '114.1', '', '', 2),
('19781024 200801 2 009', 'Anny Farizah', 'Pengatur', 'II/c', '', '114.1', '', '', 0),
('197811112010121001', 'ALI FIRMAN HERLAMBANG, ST', '', 'III/b', '', '114.4', '', '', 2),
('197811262009012002', 'Helida Nur Ainun', 'Pengatur', 'II/c', '', '114.6', '', '', 2),
('19781228 2009011002', 'Furqon Hidayat', 'Pengatur', 'II/c', '', '114.1', '', '', 2),
('19790210 200312 2 006', 'Dwi Wara Utari, S.Ap', 'Penata Muda', 'III/a', '', '114.1', '', '', 0),
('197906092009011004', 'DJUNI WIDJATMIKO', '', 'II/c', '', '114.2', '', '', 2),
('19791024 200901 2 002', 'Ratna Tri Setyawati, A.Md', 'Pengatur Tingkat I', 'II/d', '', '114.1', '', '', 0),
('19800114 201001 2 006', 'AYU SAULINA ERNALITA , S.S', 'Penata', 'III/c', '', '114.2', '', '', 0),
('198002152010011005', 'SUWARNO TEHUAYO', '', 'II/c', '', '114.4', '', '', 2),
('19800224 201001 2 009', 'Ratna Diah Ayuningtyas,Se', 'Penata', 'III/c', '', '114.1', '', '', 0),
('19800319 201403 2 001', 'Indriyanti Tri Wulandari, A.Md', 'Pengatur', 'II/c', '', '114.1', '', '', 0),
('198106212011011001', 'YUSUF EKO ARDHIANTO, S.Kom', 'Penata Muda Tingkat I', 'III/b', '', '114.5', '', '', 2),
('198109222009011006', 'Yoga Wiwoko', 'Pengatur', 'II/c', '', '114.6', '', '', 2),
('19820213 201101 1 010', 'Tugirin, Se', 'Penata', 'III/c', '', '114.1', '', '', 0),
('19820514 200902 2 001', 'Mila Astriana, S.Sos', 'Penata', 'III/c', '', '114.1', '', '', 0),
('198206302010011006', 'MUHAMMAD GHUFRON', '', 'II/c', '', '114.5', '', '', 2),
('198208102010012020', 'Reni Agustin, Sh. Mh ', 'Penata', 'III/c', '', '114.1', '', '', 2),
('198208292006041005', 'ANDI BAGUS SETIAWAN, A.Md', '', 'III/a', '', '114.2', '', '', 2),
('198209012011011004', 'TAUFIK MAULANA, S.Sos. M.AP', 'Penata Muda Tingkat I', 'III/b', '', '114.3', '', '', 2),
('198210162011011005', 'GUGI ALIFRIANTO W, ST,MMT', 'Penata Muda Tingkat I', 'III/b', 'Kepala Seksi Pengendalian Infrastruktur TIK', '114.5', '', '', 2),
('19830106 200902 1 002', 'PRIMA AGUNG PRANGHAJI, A.Md', '', 'II/d', '', '114.2', '', '', 0),
('198302272001121001', 'DANU ARDHIARSO, S.STP', 'Penata Tingkat I', 'III/d', 'Kepala Bidang Komunikasi Publik', '114.3', '', '', 2),
('19830331 201001 2 009', 'ANA ERISTIA WULANDARI, S.Kom', 'Penata Muda Tingkat I', 'III/b', '', '114.4', '', '', 0),
('198304132009032007', 'Rr. RENITA INDRI KUSUMA D, ST', 'Penata', 'III/c', '', '114.5', '', '', 2),
('198401012008011014', 'AKHMAD SUPANDI', '', 'II/c', '', '114.5', '', '', 2),
('198406232019031006', 'TAUFIQ RAMADHANY. S.T', '', 'III/a', '', '114.4', '', '', 2),
('198408122010011010', 'HARUN AL ROSYID , ST', 'Penata Muda Tingkat I', 'III/b', '', '114.6', '', '', 2),
('19841010 201001 1 003', 'Saiful Anwar ', 'Pengatur Muda', 'II/a', '', '114.1', '', '', 0),
('198501202010012016', 'SISCA AGUSTIA PUTRI, S.Sos', 'Penata Muda Tingkat I', 'III/b', '', '114.3', '', '', 2),
('198509252009021001', 'DWI SUSILA WIJAYA, S.Sos', 'Penata', 'III/c', '', '114.2', '', '', 2),
('19851024 200912 1 012', 'AULIA BAHAR PERMANA, S.Kom', 'Penata', 'III/c', 'Seksi Persandian dan Keamanan Informasi', '114.4', '', '', 0),
('198511022010012023', 'RIA AMALIA, S.Sos', 'Penata Muda Tingkat I', 'III/b', '', '114.2', '', '', 2),
('198511272010011008', 'NOFIAN  ADI  P , S.Kom, MMT', 'Penata', 'III/c', '', '114.5', '', '', 2),
('198603062019031005', 'MARTIN IVO HARDINOTO, S.ST', '', 'lII/a', '', '114.4', '', '', 2),
('198708232011011006', 'Pradipta Wira Pradana, Se', 'Penata', 'III/c', '', '114.1', '', '', 2),
('198710292011011007', 'EKO SETIAWAN , S.I.Kom, M.Med.', 'Penata', 'III/c', 'Ketua Seksi Sumber Daya Komunikasi Publik', '114.3', '', '', 2),
('198807212019031002', 'RADEN MAKARYO NUGRAHADI, S.Kom', '', 'III/a', '', '114.4', '', '', 2),
('198906182014031002', 'ADI KURNIAWAN, S.Kom', '', 'III/b', '', '114.4', '', '', 2),
('19902102014031001', 'FEBBY KRISBIYANTORO, SH', 'Penata Muda Tingkat I', 'III/b', '', '114.2', '', '', 2),
('199111172015032002', 'GIGIH REDANA PUTRY WAHANA, A.M', '', 'II/d', '', '114.5', '', '', 2),
('199203062019031007', 'ADE PUTRA HABIBI, S.Kom', '', 'III/a', '', '114.5', '', '', 2),
('199209262015031005', 'Septian Fajar Arifin, Amd', 'Pengatur Tingkat I', 'II/d', '', '114.1', '', '', 2),
('199302242019031005', 'BOBBY KRISTYA MARESWARA, S,Kom', '', 'III/a', '', '114.5', '', '', 2),
('199310312019032012', 'NURUL KHOIRINA, S. Kom', '', 'III/a', '', '114.4', '', '', 2),
('1996012820191003', 'IBRAHIM YUNUS MUH. FIQHAN, S.K', '', 'III/a', '', '114.5', '', '', 2),
('199606272019032007', 'ELISA ERAWATI, S.Kom', '', 'III/a', '', '114.5', '', '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_st`
--

CREATE TABLE `tb_st` (
  `id_st` int(100) NOT NULL,
  `no_st` varchar(30) NOT NULL,
  `NIP` varchar(35) NOT NULL,
  `kd_bid` varchar(15) NOT NULL,
  `nama_tugas` text NOT NULL,
  `tgl_pembuatan` date NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'Belum_DL'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_st`
--

INSERT INTO `tb_st` (`id_st`, `no_st`, `NIP`, `kd_bid`, `nama_tugas`, `tgl_pembuatan`, `status`) VALUES
(1, '090 / 02   / 114.3 / 2019', '19680614 199602 2 002', '114.3', 'Mendatangi acara di Surabaya', '2019-09-26', 'DL'),
(2, '090 / 12  / 114.3 / 2019', '19680614 199602 2 002', '114.3', 'Acara Jatim Expo', '2019-09-26', 'Belum_DL'),
(3, '090 / 4  / 114.6 / 2019', '19650909 199403 2 006', '114.6', 'Jatim dev', '2019-09-26', 'Belum_DL'),
(5, '096/ 99 /144.5/2019', '19680614 199602 2 002', '144.5', 'Menghadiri ', '2019-09-26', 'Belum_DL'),
(6, '094/ 199 /114.4/2019', '19650909 199403 2 006', '114.4', 'Menghadiri Acara Pembukaan Jatim Fair', '2019-10-21', 'Belum_DL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `kd_tugas` varchar(20) NOT NULL,
  `nama_tugas` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tugas`
--

INSERT INTO `tb_tugas` (`kd_tugas`, `nama_tugas`) VALUES
('090', 'Perjalanan Dinas'),
('091', 'Perjalanan Presiden / Wakil Presiden ke Daerah'),
('092', 'Perjalanan Menteri ke Daerah'),
('093', 'Perjalanan Pejabat Tinggi (Pejabat Eselon I) '),
('094', 'Perjalanan Pegawai,Termasuk pemanggilan pegawai'),
('095', 'Perjalanan Tamu Asing ke Daerah'),
('096', 'Perjalanan Presiden / Wakil Presiden ke Luar Negeri'),
('097', 'Perjalanan Menteri ke Luar Negeri'),
('098', 'Perjalanan Pejabat Tinggi ke Luar Negeri'),
('099', 'Perjalanan Pegawai ke Luar Negeri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1: Admin, 2 : User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 1),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'User\r\n', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`kd_bid`);

--
-- Indeks untuk tabel `tb_dl`
--
ALTER TABLE `tb_dl`
  ADD PRIMARY KEY (`id_dl`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `tb_st`
--
ALTER TABLE `tb_st`
  ADD PRIMARY KEY (`id_st`);

--
-- Indeks untuk tabel `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`kd_tugas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dl`
--
ALTER TABLE `tb_dl`
  MODIFY `id_dl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_st`
--
ALTER TABLE `tb_st`
  MODIFY `id_st` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
