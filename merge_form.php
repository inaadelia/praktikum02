<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
	.custab{
	    border: 1px solid #ccc;
	    padding: 5px;
	    margin: 5% 0;
	    box-shadow: 3px 3px 2px #ccc;
	    transition: 0.5s;
	    }
	.custab:hover{
	    box-shadow: 3px 3px 0px transparent;
	    transition: 0.5s;
	    }
</style>


<form method="GET" action="merge_form.php">
	Nama : <input type="text" name="nama" value="" size="30"/><br/>
	Mata Kuliah :
	<select name="matkul" required="">
		<option value="DDP">Dasar-Dasar Pemrograman</option>
		<option value="BDI">Basis Data I</option>
		<option value="WEB1">Pemrograman Web</option>
	</select><br/>
	Nilai UTS : <input type="text" name="nilai_uts" value="" size="6" required="" /><br/>
	Nilai UAS : <input type="text" name="nilai_uas" value="" size="6" required="" /><br/>
	Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas" value="" size="6" required="" /><br/>
	<input type="submit" value="Simpan" name="proses"/>
 </form>


 <?php
if (isset($_GET['proses'])) {
	$proses			= $_GET['proses'];
	$nama_siswa 	= $_GET['nama'];
	$mata_kuliah 	= $_GET['matkul'];
	$nilai_uts 		= $_GET['nilai_uts'];
	$nilai_uas 		= $_GET['nilai_uas'];
	$nilai_tugas 	= $_GET['nilai_tugas'];

	echo 'Proses : '.$proses;
	echo '<br/>Nama : '.$nama_siswa;
	echo '<br/>Mata Kuliah : '.$mata_kuliah;
	echo '<br/>Nilai UTS : '.$nilai_uts;
	echo '<br/>Nilai UAS : '.$nilai_uas;
	echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
}

?>

<?php
$ns1 	= ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 	= ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 	= ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 	= ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

if (isset($_GET['proses'])) {
	$new_ns = ['id'=>5,'nim'=>$nama_siswa,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
	array_push($ar_nilai, $new_ns);
}
?>

<h3>Daftar Nilai Siswa</h3>
<div class="container">
	<table border="1" width="100%" class="table table-striped custab">
		<thead>
			<tr>
				<th>No</th><th>NIM</th><th>UTS</th>
				<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
			</tr>
		</thead>
		<tbody>
	<?php
	$nomor = 1;
	foreach($ar_nilai as $ns){
		echo '<tr><td>'.$nomor.'</td>';
		echo '<td>'.$ns['nim'].'</td>';
		echo '<td>'.$ns['uts'].'</td>';
		echo '<td>'.$ns['uas'].'</td>';
		echo '<td>'.$ns['tugas'].'</td>';
		$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
		echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
		echo '<tr/>';
		$nomor++;
	}
	?>

		</tbody>
	</table>
</div>