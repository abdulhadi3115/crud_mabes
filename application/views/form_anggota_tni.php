<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1><?=$tipe?> Anggota TNI</h1>
		
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" value="<?=isset($default['nama'])? $default['nama'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Pangkat					
				</label>
				<div class="col-sm-10">
					<textarea name="pangkat" class="form-control"><?=isset($default['pangkat'])? $default['pangkat'] : ""?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Korps					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="korps" value="<?=isset($default['korps'])? $default['korps'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					NRP/NIP					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nrp" value="<?=isset($default['nrp'])? $default['nrp'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Jabatan					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="jabatan" value="<?=isset($default['jabatan'])? $default['jabatan'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Kesatuan					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="kesatuan" value="<?=isset($default['kesatuan'])? $default['kesatuan'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Matra					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="matra" value="<?=isset($default['matra'])? $default['matra'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Alamat					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="alamat" value="<?=isset($default['alamat'])? $default['alamat'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Email					
				</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" value="<?=isset($default['email'])? $default['email'] : ""?>">
				</div>
			</div>
				<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>


		</form>
	</div>
</body>
</html>