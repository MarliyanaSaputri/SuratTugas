-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 03:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `kd_bid` varchar(15) NOT NULL,
  `nama_bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bidang`
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
-- Table structure for table `tb_dl`
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
  `hadir2` text,
  `hadir3` text,
  `hadir4` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dl`
--

INSERT INTO `tb_dl` (`id_dl`, `id_st`, `no_st`, `NIP`, `maksud_tujuan`, `tgl_pelaksanaan`, `tgl_akhir`, `peserta_hadir`, `daerah_tujuan`, `bahasan`, `lain-lain`, `tgl_pembuatan`, `hadir2`, `hadir3`, `hadir4`) VALUES
(6, 1, '090 / 02   / 114.3 / 2019', '19680614 199602 2 002', 'Mendatangi Acara Ulang Tahun Jatim ', '2019-10-21', '2019-11-22', 'Kepala Dinas Kominfo Surabaya', 'Surabaya', 'Acara perayaan ulang tahun jatim\r\nAcara Perayaan Jatim di Malang\r\nAcara Perayaan Jatim di Madiun\r\nAcara Perayaan Jatim di Mojokerto\r\nAcara Perayaan Jatim di Pasuruan', 'Acara Perayaan Jatim di Surabaya\r\n', '2019-10-21', 'Sekretaris', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `NIP` varchar(35) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `pangkat` varchar(35) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `kd_bid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`NIP`, `nama`, `pangkat`, `golongan`, `jabatan`, `kd_bid`) VALUES
(' 114-08081988-012017-3840', 'Agus Maryono', '', 'PTT', '', '114.6'),
(' 19631121 198603 2 005', 'Naniek Kustyarini', 'Penata', 'III/c', '', '114.1'),
('114-01041982-012017-3841', 'ARIP YUDIANTO', '', 'PTT', '', '114.1'),
('114-02081977-012009-1519', 'SAMIATI, S.Sos', '', 'PTT', '', '114.3'),
('114-02091966-012017-3844', 'SARWANDI', '', 'PTT', '', '114.1'),
('114-04081985-012009-1524', 'AUDI LAKSMANA, S.I.Kom.', '', 'PTT', '', '114.2'),
('114-05011980-012009-1511', 'ACHMAD MUHADJIR , S.Sos', '', 'PTT', '', '114.2'),
('114-06031968-012009-1518', 'SUPARNO S. S', '', 'PTT', '', '114.3'),
('114-06051981-012009-1510', 'SITI SAADAH, S.Sos', '', 'PTT', '', '114.2'),
('114-06121980-012009-1515', 'Renny Lestani  Susanti,S.I.Kom', '', 'PTT', '', '144.6'),
('114-07071991-012017-8590', 'PONDRA SETIAWAN', '', 'PTT', '', '114.4'),
('114-07071991-012017-8591', 'FARAH DEVI ISNANDA', '', 'PTT', '', '114.4'),
('114-07071991-012017-8592', 'DEVAN ASTIKO BAKTIAR', '', 'PTT', '', '114.4'),
('114-08011990-102016-8100', 'Angela Anggi Ranistianis', '', 'PTT', '', '144.6'),
('114-08031984-012009-1514', 'MOCH KHOIRUL RIJAL, S.Sos', '', 'PTT', '', '114.2'),
('114-09031979-012019-3518', 'Hadi Wiyono', '', 'PTT', '', '114.1'),
('114-11031988-012017-3836', 'NUR CHOTIMAH', '', 'PTT', '', '114.1'),
('114-11051974-012008-1508', 'WALUYO HERASIA', '', 'PTT', '', '114.1'),
('114-12111969-012009-1516', 'GATOT DWI SASONGKO, SE', '', 'PTT', '', '114.2'),
('114-12121986-012014-1528', 'DESI PANCA INDRA', '', 'PTT', '', '114.2'),
('114-13051983-012007-1507', 'Sielfia Lekatompessy, S.Kom', '', 'PTT', '', '144.6'),
('114-14101971-012009-1517', 'SITI FATONAH', '', 'PTT', '', '114.1'),
('114-15041983-012017-3842', 'Edy Sukarno', '', 'PTT', '', '114.1'),
('114-16091975-012006-1505', 'PUNGKY SETIAWAN A.Md', '', 'PTT', '', '114.3'),
('114-17011978-102005-1502', 'IMAM SUHARTOYO', '', 'PTT', '', '114.3'),
('114-19041988-012017-3838', 'RUNA FERRI SANJAYA', '', 'PTT', '', '114.1'),
('114-19061984-012017-3835', 'Heny Kusumaningsih, Se', '', 'PTT', '', '114.1'),
('114-19061985-012009-1513', 'MOCH AFRIZAL AKBAR, S.I.Kom', '', 'PTT', '', '114.2'),
('114-19071979-012009-1522', 'SUKMA SUSILAWATI, S.Sos', '', 'PTT', '', '114.1'),
('114-21051973-012009-1523', 'MUHAMMAD,  S.Sos', '', 'PTT', '', '114.2'),
('114-22011969-012010-1525', 'ANANG SETYAWAN, ST', '', 'PTT', '', '114.5'),
('114-22031994-052018-9790', 'BRILLIANTARA ANUGRAH', '', 'PTT', '', '114.4'),
('114-23051971-062005-1503', 'PRIYO JATMIKO', '', 'PTT', '', '114.1'),
('114-24041978-012010-1526', 'SUKARDI', '', 'PTT', '', '114.4'),
('114-24041980-012009-1521', 'Rahmad Hartono', '', 'PTT', '', '114.1'),
('114-24111994-012017-3847', 'MUHAMMAD ZAZULI YUSUF', '', 'PTT', '', '114.5'),
('114-25091978-012009-1520', 'SRI LESTARI, S.Kom', '', 'PTT', '', '114.1'),
('114-25111990-042019-5369', 'HERA FIRDHAUSA KATILI, S.T', '', 'PTT', '', '114.1'),
('114-27051972-012005-1504', 'ANANG ANGGONO WIBOWO, SE', '', 'PTT', '', '114.3'),
('114-27051980-012009-1512           ', 'Aris Effendi, S.Sos', '', 'PTT', '', '114.2'),
('114-27071981-012007-1506', 'Fitria Maharani, S.Sos', '', 'PTT', '', '114.1'),
('114-30081986-012014-1529', 'DENNY RAHARJO', '', 'PTT', '', '114.3'),
('114-30091970-012017-3839', 'Hari Budiman', '', 'PTT', '', '114.1'),
('144-24121980-012017-3843', 'Imam Supi''i', '', 'PTT', '', '114.1'),
('19611022 198803 2 003', 'A. AMBARWATYNINGTYAS, BA', 'Penata Tingkat I', 'III/d', '', '114.3'),
('19611029 198603 2 003', 'SRI UTAMI Bc. Kn. ', '', 'III/c', '', '114.4'),
('19620125 198403 2 002', 'SAADATUL QORINAH', 'Penata Muda Tingkat I', 'III/b', '', '114.3'),
('19620301 198203 2 010', 'HERINI MAWARTI RAHAJOE', 'Penata Tingkat I', 'III/d', '', '114.2'),
('19620316 199003 1 006', 'Ir. DODONG M. MEDIANTOKO, M.Si', '', 'IV/b', 'Kepala Bidang Infrastruktur TIK', '114.5'),
('19620410 199103 1 006', 'PURWANTO', '', 'II/c', '', '114.3'),
('19620419 198303 2 006', 'Dra.OETAMI TRISNA SAYEKTI', 'Pembina', 'IV/a', 'Kepala Seksi Pengelolaan Opini Publik', '114.3'),
('19620812 198603 2 011', 'Kasmani', 'Penata Muda Tingkat I', 'III/b', '', '114.1'),
('19621010 199003 1 012', 'SUWARNO', 'Penata Muda Tingkat I', 'III/b', '', '114.3'),
('19621021 199003 1 004', 'Eko Roedhy Loegmanto, Sh.', 'Penata Tingkat I', 'III/d', 'Kepala Sub Bagian Penyusunan Program Anggaran Dinas Komunikasi dan Informatika Provinsi Jawa Timur', '114.1'),
('19621226 198503 1 015', 'AGUS DWI  MUHANAN, S.Sos, MM.', 'Pembina', 'IV/a', 'Kepala Seksi Layanan Informasi Publik', '114.2'),
('19630225 199602 1 001', 'Drs. Ec. RUDY PRASETYA, MM', 'Pembina Tingkat I', 'IV/b', 'Kepala Bidang Pengelolaan Data dan Statistik Dinas Komunikasi Dan Informatika Jawa Timur', '114.6'),
('19630321 199003 2 002', 'MARIA OEDETE CES SILVA', '', 'II/a', '', '114.4'),
('19630607 198903 2 005', 'FIELIANNA MACHDA, S.Sos. MM.', 'Pembina', 'IV/a', '', '114.2'),
('19630610 199903 2 002', 'Ir. NANIEK YUNIATI, SH', 'Pembina', 'IV/a', '', '114.2'),
('19630907 198502 1 002', 'JONY ERWANTO, SH', 'Pengatur Tingkat I', 'III/d', '', '114.6'),
('19631225 199103 1 012', 'SUNARYO', 'Penata Muda Tingkat I', 'III/b', '', '114.2'),
('19640117 199103 1 007', 'DJOKO WIJONO', 'Penata', 'III/c', '', '114.3'),
('19640317 199303 1 007', 'Ir. AGUNG MARTONO', 'Penata Tingkat I', 'III/d', 'Kepala Seksi Pemeliharaan Infrastruktur TIK', '114.5'),
('19640507 198703 1 018', 'Soekismanto', 'Penata Muda Tingkat I', 'III/b', '', '114.1'),
('19640515 198303 2 002', 'Anjaina', 'Pengatur', 'II/c', '', '114.2'),
('19640528 198303 1 001', 'SAMSURI, S.Sos, M.Si', 'Pembina', 'IV/a', 'Kepala Sub Bagian Keuangan ', '114.1'),
('19640706 199903 1002', 'Masruhin', 'Penata Muda', 'III/a', '', '114.1'),
('19640707 199803 1 002', 'Suwantoyo', 'Penata Muda Tingkat 1', 'III/b', '', '114.6'),
('19640804  198803 1 011', 'Dr. Ardo Sahak. SE, MM', 'Pembina Utama Madya', 'IV/d', 'Kepala Dinas Komunikasi dan Informatika Provinsi Jawa Timur', '114.1'),
('19640923 198803 1 004', 'SUBIYANTORO', 'Penata Muda Tingkat I', 'III/b', '', '114.3'),
('19641204 199803 1 002', 'HANDOJO KILAT STYAWAN', '', 'III/a', '', '114.4'),
('19641224 198803 1 008', 'CAHYONO YHUDIATMADJI', 'Penata Muda Tingkat I', 'III/b', '', '114.3'),
('19650307 200701 1 018', 'Didik Surwadi', 'Pengatur Tingkat 1', 'II/d', '', '114.1'),
('19650710 198703 1 010', 'SUGENG', 'Penata Tingkat I', 'III/d', '', '114.2'),
('19650809 199103 2 008', 'Dra. TATIK AGUSTINA', 'Penata Tingkat I', 'III/d', '', '114.1'),
('19650909 199403 2 006', 'Dra. Ec. NIRMALA DEWI, MM', 'Pembina Tingkat I', 'IV/a', 'Kepala Bidang Aplikasi Informatika', '114.4'),
('19660101 198610 1 006', 'M. SOEHARTONO', '', 'III/b', '', '114.4'),
('19660201 198903 1 010', 'Nurhadi', 'Penata Muda Tingkat I', 'III/b', '', '114.1'),
('19660419 198607 2 001', 'SOETJININGSIH', 'Penata Muda Tingkat I', 'III/b', '', '114.3'),
('19660630 199003 2 010', 'Erna Diah Akriyanti, S.Sos', 'Penata Tingkat I', 'III/d', '', '114.1'),
('19660630 201212 1 001', 'Hamidun', 'Pengatur Muda Tingkat I', 'II/b', '', '114.6'),
('19660707 199103 1 013', 'MARHAENRY MATHEUS YANI', 'Penata', 'III/c', '', '114.2'),
('19660717 201001 1 003', 'Agus Sunaryo', 'Pengatur', 'II/c', '', '114.1'),
('19660801 199703 1 002', 'Edy Mulyono,Sh', 'Penata Muda Tingkat I', 'III/b', '', '114.1'),
('19661112 198603 2 006', 'TUTIK SUPRIYATI', '', 'III/b', '', '114.4'),
('19661117 199011 2 001', 'SOFIA KURNIAWATI, SE, Msi', 'Pembina', 'IV/a', 'Kepala Seksi Kemitraan Komunikasi Publik ', '114.3'),
('19661129 199602 1 001', 'Heri Dwi Oetojo', 'Penata Muda Tingkat I', 'III/b', '', '114.1'),
('19670302 199302 1 002', 'Samsul Hadi', 'Penata Muda', 'III/a', '', '114.1'),
('19670313 198903 1 008', 'AMAT MUSTA’IN, S.Sos', 'Pembina', 'IV/a', '', '114.2'),
('19670404 200701 1 027', 'April Hari Santoso, S.Sos', 'Penata Muda', 'III/a', '', '114.1'),
('19670418 198903 1 007', 'HERLAMBANG PRIJOMBODO', 'Penata Tingkat I', 'III/d', '', '114.2'),
('19670518 199003 2 009', 'YANTI DYAH HARSONO, S.Sos. M.S', 'Pembina', 'IV/a', 'Kepala Seksi Media Publik', '114.2'),
('19670530 198903 1 006', 'EDI SUPAJI, SH, MM', 'Pembina', 'IV/a', 'Kepala Bidang Informasi Publik', '114.2'),
('19670620 199403 2 007', 'Dra. SITI PURWATININGSIH, MM', 'Pembina', 'IV/a', '', '114.1'),
('19670920 199203 1 015', 'CHOIRUL ANWAR, SE', 'Penata', 'III/c', '', '114.2'),
('19671002 199403 1 005', 'SUPONO', 'Penata Muda Tingkat I', 'III/b', '', '114.2'),
('19671113 200701 1 023', 'Sucipto', 'Penata Muda', 'III/a', '', '114.6'),
('19680513 200901 1 004', 'Suparto', 'Pengatur Muda', 'II/a', '', '114.1'),
('19680614 199602 2 002', 'Ir. Dra. AJU MUSTIKA DEWI, MM', 'Pembina Tingkat I', 'IV/b', 'Sekretaris Dinas Komunikasi dan Informatika Provinsi jawa Timur', '114.1'),
('19680722 199003 1 006', 'Drs. AGUNG SRIONO, SH. MM', 'Pembina', 'IV/a', 'Kepala Sub Bagian Tata Usaha Dinas Komunikasi dan Informatika Provinsi Jawa Timur', '114.1'),
('19680909 198903 2 006', 'UNON SEPTI PRATIWI W. ', 'Penata Tingkat I', 'III/d', '', '114.2'),
('19681002 199203 2 005', 'SRI WAHYUNI', 'Penata Muda Tingkat I', 'III/b', '', '114.3'),
('19690129 199112 2 001', 'SITI HATIDJAH, SE', 'Penata', 'III/c', '', '114.2'),
('19690204 199202 1 001', 'Usman', 'Penata', 'III/c', '', '114.1'),
('19690214 198803 1 002', 'AGUS BUDI SAMPURNO, SE', 'Penata Tingkat I', 'III/d', 'Kepala Seksi Jaringan Infrastruktur TIK', '114.5'),
('19690513 200801 1 013', 'FADIL', '', 'II/a', '', '114.5'),
('19691015 198903 1 006', 'SUPRIONO, SH', 'Pembina', 'IV/a', '', '114.2'),
('19691211 198911 1 002', 'Drs. SATRIYO WAHYUDI, M. Si', 'Pembina', 'IV/a', '', '114.4'),
('19701121 200701 1 013', 'Marsudi\r\n', 'Pengatur Muda Tingkat I', 'II/b', '', '114.6'),
('19701122 199903 2 004', 'TITIK SUSIATI, SE', 'Penata Tingkat I', 'III/d', '', '114.1'),
('19710511 199703 2 002', 'MEI JUNIARTI, S. Sos', 'Pembina', 'IV/a', '', '114.1'),
('19710818 201412 1 001', 'HARSANTO, ST', 'Penata Muda Tingkat I', 'III/b', '', '114.4'),
('19711009 199901 1 001', 'DENDY EKA PUSPAWADI, S.Si', 'Penata Tingkat I', 'III/d', 'Kepala Seksi Tata Kelola dan Pemberdayaan TIK', '114.4'),
('19711111 199402 2 002', 'SUSIATI, SE', 'Penata Tingkat 1', 'III/d', '', '114.6'),
('19711228 200801 1 004', 'NANANG EKO KUSWORO,ST', 'Penata', 'III/c', '', '114.5'),
('19720113 199203 1 003', 'Moedjianto', 'Pengatur', 'II/c', '', '114.1'),
('19720126 199803 1 007', 'Idham Assari KP, ST. MM', 'Pembina', 'IV/a', 'Kepala Seksi Evaluasi dan Informasi', '114.6'),
('19720530 199303 2 006', 'ERNI WIDIARTI', 'Penata', 'III/c', '', '114.2'),
('19721020 199403 1 008', 'YUDI EFENDI', 'Penata', 'III/c', '', '114.4'),
('19721031 200604 1 005', 'ACHMAD FADLIL CHUSNI, S.Kom. M', 'Penata Tingkat I', 'III/d', 'Kepala Seksi Pengembangan Aplikasi ', '114.4'),
('19730218 201001 1 004', 'SUDARMANTO', '', 'II/c', '', '114.5'),
('19730411 200701 2 008', 'Umi Susila Rini', 'Pengatur Tingkat 1', 'II/d', '', '114.1'),
('19731020 200901 1 001', 'Wahyu Purwantono', '', 'II/c', '', '114.1'),
('19740109 200801 1 008', 'Edy Mugi Basuki', 'Pengatur', 'II/c', '', '114.2'),
('19740207 200801 1 003', 'Taufik Hidayat', 'Pengatur', 'II/c', '', '114.1'),
('19740325 199803 1 006', 'Much. Hufron', 'Pengatur', 'II/c', '', '114.1'),
('19740411 199803 1 004', 'PUTUT DARMAWAN', 'Penata', 'III/c', '', '114.2'),
('19740620 200801 1 011', 'M. Dhaimul Kharomin', 'Pengatur', 'II/c', '', '114.2'),
('19740714 200801 1 009', 'Arif Sedtiaji', 'Pengatur', 'II/c', '', '114.6'),
('19740823 199803 2 005', 'Ary Retno Indarwati', 'Penata Muda', 'III/a', '', '114.1'),
('19741020 200501 1 009', 'Octavitriadi', 'Pengatur Tingkat I', 'II/d', '', '114.1'),
('19750304 200102 2 006', 'LENNY MARTARINA, SE. Ak', 'Pembina', 'IV/a', '', '114.1'),
('19750621 200801 2 010', 'Diana Kitasari, Se', 'Penata Muda', 'III/a', '', '114.1'),
('19761220 201001 1 002', 'ROFI’I', '', 'II/c', '', '114.4'),
('19770517 200901 1 005', 'I WAYAN RUDY ARTHA, S.Kom', 'Penata', 'III/c', 'Kepala Seksi Pengelolaan Data Dinas Komunikasi dan Informatika Jawa Timur', '114.6'),
('19770626 201001 2 005', 'RETNO YUNI  W , ST', 'Penata Muda Tingkat I', 'III/b', '', '114.4'),
('19771119 200901 1 001', 'EKO UJIANTO', '', 'II/c', '', '114.2'),
('19771218 200801 1 008', 'GURUH AGUNG YUGITA WARDHANA', '', 'lII/a', '', '114.4'),
('19780420 201001 1 003', 'Feri Hadijaya, Se', 'Penata', 'III/c', '', '114,1'),
('19781020 201001 2 003', 'Ida Prihatin. S.P. S.Pd. Mm', 'Penata', 'III/c', '', '114.1'),
('19781024 200801 2 009', 'Anny Farizah', 'Pengatur', 'II/c', '', '114.1'),
('19781111 201012 1 001', 'ALI FIRMAN HERLAMBANG, ST', '', 'III/b', '', '114.4'),
('19781126 200901 2 002', 'Helida Nur Ainun', 'Pengatur', 'II/c', '', '114.6'),
('19781228 200901 1 002', 'Furqon Hidayat', 'Pengatur', 'II/c', '', '114.1'),
('19790210 200312 2 006', 'Dwi Wara Utari, S.Ap', 'Penata Muda', 'III/a', '', '114.1'),
('19790609 200901 1 004', 'DJUNI WIDJATMIKO', '', 'II/c', '', '114.2'),
('19791024 200901 2 002', 'Ratna Tri Setyawati, A.Md', 'Pengatur Tingkat I', 'II/d', '', '114.1'),
('19800114 201001 2 006', 'AYU SAULINA ERNALITA , S.S', 'Penata', 'III/c', '', '114.2'),
('19800215 201001 1005', 'SUWARNO TEHUAYO', '', 'II/c', '', '114.4'),
('19800224 201001 2 009', 'Ratna Diah Ayuningtyas,Se', 'Penata', 'III/c', '', '114.1'),
('19800319 201403 2 001', 'Indriyanti Tri Wulandari, A.Md', 'Pengatur', 'II/c', '', '114.1'),
('19810621 201101 1 001', 'YUSUF EKO ARDHIANTO, S.Kom', 'Penata Muda Tingkat I', 'III/b', '', '114.5'),
('19810922 200901 1 006', 'Yoga Wiwoko', 'Pengatur', 'II/c', '', '114.6'),
('19820213 201101 1 010', 'Tugirin, Se', 'Penata', 'III/c', '', '114.1'),
('19820514 200902 2 001', 'Mila Astriana, S.Sos', 'Penata', 'III/c', '', '114.1'),
('19820630 201001 1 006', 'MUHAMMAD GHUFRON', '', 'II/c', '', '114.5'),
('19820810 201001 2 020', 'Reni Agustin, Sh. Mh ', 'Penata', 'III/c', '', '114.1'),
('19820829 200604 1 005', 'ANDI BAGUS SETIAWAN, A.Md', '', 'III/a', '', '114.2'),
('19820901 201101 1 004', 'TAUFIK MAULANA, S.Sos. M.AP', 'Penata Muda Tingkat I', 'III/b', '', '114.3'),
('19821016 201101 1 005', 'GUGI ALIFRIANTO W, ST,MMT', 'Penata Muda Tingkat I', 'III/b', 'Kepala Seksi Pengendalian Infrastruktur TIK', '114.5'),
('19830106 200902 1 002', 'PRIMA AGUNG PRANGHAJI, A.Md', '', 'II/d', '', '114.2'),
('19830227 200112 1 001', 'DANU ARDHIARSO, S.STP', 'Penata Tingkat I', 'III/d', 'Kepala Bidang Komunikasi Publik', '114.3'),
('19830331 201001 2 009', 'ANA ERISTIA WULANDARI, S.Kom', 'Penata Muda Tingkat I', 'III/b', '', '114.4'),
('19830413 200903 2 007', 'Rr. RENITA INDRI KUSUMA D, ST', 'Penata', 'III/c', '', '114.5'),
('19840101 200801 1 014', 'AKHMAD SUPANDI', '', 'II/c', '', '114.5'),
('19840623 201903 1 006', 'TAUFIQ RAMADHANY. S.T', '', 'III/a', '', '114.4'),
('19840812 201001 1 010', 'HARUN AL ROSYID , ST', 'Penata Muda Tingkat I', 'III/b', '', '114.6'),
('19841010 201001 1 003', 'Saiful Anwar ', 'Pengatur Muda', 'II/a', '', '114.1'),
('19850120 201001 2 016', 'SISCA AGUSTIA PUTRI, S.Sos', 'Penata Muda Tingkat I', 'III/b', '', '114.3'),
('19850925 200902 1 001', 'DWI SUSILA WIJAYA, S.Sos', 'Penata', 'III/c', '', '114.2'),
('19851024 200912 1 012', 'AULIA BAHAR PERMANA, S.Kom', 'Penata', 'III/c', 'Seksi Persandian dan Keamanan Informasi', '114.4'),
('19851102 201001 2 023', 'RIA AMALIA, S.Sos', 'Penata Muda Tingkat I', 'III/b', '', '114.2'),
('19851127 201001 1 008', 'NOFIAN  ADI  P , S.Kom, MMT', 'Penata', 'III/c', '', '114.5'),
('19860306 201903 1 005', 'MARTIN IVO HARDINOTO, S.ST', '', 'lII/a', '', '114.4'),
('19870823 201101 1 006', 'Pradipta Wira Pradana, Se', 'Penata', 'III/c', '', '114.1'),
('19871029 201101 1 007', 'EKO SETIAWAN , S.I.Kom, M.Med.', 'Penata', 'III/c', 'Ketua Seksi Sumber Daya Komunikasi Publik', '114.3'),
('19880721 201903 1 002', 'RADEN MAKARYO NUGRAHADI, S.Kom', '', 'III/a', '', '114.4'),
('19890618 201403 1 002', 'ADI KURNIAWAN, S.Kom', '', 'III/b', '', '114.4'),
('1990210 201403 1 001', 'FEBBY KRISBIYANTORO, SH', 'Penata Muda Tingkat I', 'III/b', '', '114.2'),
('19911117 201503 2 002', 'GIGIH REDANA PUTRY WAHANA, A.M', '', 'II/d', '', '114.5'),
('19920306 201903 1 007', 'ADE PUTRA HABIBI, S.Kom', '', 'III/a', '', '114.5'),
('19920926 201503 1 005', 'Septian Fajar Arifin, Amd', 'Pengatur Tingkat I', 'II/d', '', '114.1'),
('19930224 201903 1 005', 'BOBBY KRISTYA MARESWARA, S,Kom', '', 'III/a', '', '114.5'),
('19931031 201903 2 012', 'NURUL KHOIRINA, S. Kom', '', 'III/a', '', '114.4'),
('19960128 2019 1 003', 'IBRAHIM YUNUS MUH. FIQHAN, S.K', '', 'III/a', '', '114.5'),
('19960627 201903 2 007', 'ELISA ERAWATI, S.Kom', '', 'III/a', '', '114.5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_st`
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
-- Dumping data for table `tb_st`
--

INSERT INTO `tb_st` (`id_st`, `no_st`, `NIP`, `kd_bid`, `nama_tugas`, `tgl_pembuatan`, `status`) VALUES
(1, '090 / 02   / 114.3 / 2019', '19680614 199602 2 002', '114.3', 'Mendatangi acara di Surabaya', '2019-09-26', 'DL'),
(2, '090 / 12  / 114.3 / 2019', '19680614 199602 2 002', '114.3', 'Acara Jatim Expo', '2019-09-26', 'Belum_DL'),
(3, '090 / 4  / 114.6 / 2019', '19650909 199403 2 006', '114.6', 'Jatim dev', '2019-09-26', 'Belum_DL'),
(5, '096/ 99 /144.5/2019', '19680614 199602 2 002', '144.5', 'Menghadiri ', '2019-09-26', 'Belum_DL'),
(6, '094/ 199 /114.4/2019', '19650909 199403 2 006', '114.4', 'Menghadiri Acara Pembukaan Jatim Fair', '2019-10-21', 'Belum_DL');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `kd_tugas` varchar(20) NOT NULL,
  `nama_tugas` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tugas`
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1: Admin, 2 : User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 1),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'User\r\n', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`kd_bid`);

--
-- Indexes for table `tb_dl`
--
ALTER TABLE `tb_dl`
  ADD PRIMARY KEY (`id_dl`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `tb_st`
--
ALTER TABLE `tb_st`
  ADD PRIMARY KEY (`id_st`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`kd_tugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dl`
--
ALTER TABLE `tb_dl`
  MODIFY `id_dl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_st`
--
ALTER TABLE `tb_st`
  MODIFY `id_st` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
