<?php
require_once 'libfungsi.php';

$proses			= $_POST['proses'];
$nama_siswa 	= $_POST['nama'];
$mata_kuliah 	= $_POST['matkul'];
$nilai_uts 		= $_POST['nilai_uts'];
$nilai_uas 		= $_POST['nilai_uas'];
$nilai_tugas 	= $_POST['nilai_tugas'];

$nilai_total 	= (0.3 * $nilai_uts) + (0.35 * $nilai_uas) + (0.35 * $nilai_tugas);

$hasil_ujian 	= kelulusan($nilai_total);
$grade 			= grade($nilai_total);
$predikat		= predikat($grade);

if(!empty($proses)) {
	echo 'Proses : '.$proses;
	echo '<br/>Nama : '.$nama_siswa;
	echo '<br/>Mata Kuliah : '.$mata_kuliah;
	echo '<br/>Nilai UTS : '.$nilai_uts;
	echo '<br/>Nilai UAS : '.$nilai_uas;
	echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
	echo '<br/>Nilai Total : '.$nilai_total;
	echo '<br/>DINYATAKAN : '.$hasil_ujian;
	echo '<br/>Grade : '.$grade;
	echo '<br/>Predikat : '.$predikat;
}
?>