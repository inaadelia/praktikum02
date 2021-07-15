<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" method="POST" action="form_belanja.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Belanja Online</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-10 control-label" for="textinput">Customer</label>  
				  <div class="col-md-10">
				  <input id="textinput" name="customer" type="text" placeholder="Nama Customer" class="form-control input-md" required="">
				    
				  </div>
				</div>

				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-10 control-label" for="radios">Pilih Produk</label>
				  <div class="col-md-10"> 
				    <label class="radio-inline" for="radios-0">
				      <input type="radio" name="produk" id="radios-0" value="TV" required="">
				      TV
				    </label> 
				    <label class="radio-inline" for="radios-1">
				      <input type="radio" name="produk" id="radios-1" value="Kulkas" required="">
				      Kulkas
				    </label> 
				    <label class="radio-inline" for="radios-2">
				      <input type="radio" name="produk" id="radios-2" value="Mesin Cuci" required="">
				      Mesin Cuci
				    </label>
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-10 control-label" for="textinput">Jumlah</label>  
				  <div class="col-md-10">
				  <input id="textinput" name="jumlah" type="number" placeholder="Jumlah" class="form-control input-md" required="">
				    
				  </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-10 control-label" for=""></label>
				  <div class="col-md-10">
				    <button id="" name="proses" class="btn btn-success">Simpan</button>
				  </div>
				</div>

				</fieldset>
			</form>
		</div>
		<div class="col-md-6">
			<table class="col-md-10 table table-bordered">
				<tbody>
					<tr>
						<td class="bg-primary" style="color: white;">Daftar Harga</td>
					</tr>
					<tr>
						<td>TV : 4.200.000</td>
					</tr>
					<tr>
						<td>Kulkas : 3.100.000</td>
					</tr>
					<tr>
						<td>Mesin Cuci : 3.800.000</td>
					</tr>
					<tr>
						<td class="bg-primary" style="color: white;">Harga dapat berubah setiap waktu.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	

	<?php

	if (isset($_POST['proses'])) {
		if ($_POST['produk'] == 'TV') {
			$harga = 4200000;
		}elseif ($_POST['produk'] == 'Kulkas') {
			$harga = 3100000;
		}elseif($_POST['produk'] == 'Mesin Cuci'){
			$harga = 3800000;
		}

		echo 'Nama Customer : '.$_POST['customer'];
		echo '<br>';
		echo 'Produk Pilihan : '.$_POST['produk'];
		echo '<br>';
		echo 'Jumlah Beli : '.$_POST['jumlah'];
		echo '<br>';
		echo 'Total Belanja : Rp '.$harga*$_POST['jumlah'];
	}

	?>

</body>
</html>