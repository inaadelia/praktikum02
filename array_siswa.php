<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>

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