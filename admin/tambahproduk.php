<h2>tambah produk</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>nama</label>
			<input type="text" class="form-control" name="nama">		
		</div>
		<div class="form-group">
			<label>Jenis</label>
			<input type="text" class="form-control" name="jenis">		
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input type="number" class="form-control" name="stok">		
		</div>
		<div class="form-group">
			<label>Foto</label>
			<input type="file" class="form-control" name="foto">		
		</div>
		<div class="form-group">
			<label>Deskripsi</label>
			<textarea class="form-control" name="deskripsi" rows="10"></textarea>		
		</div>
		<div class="form-group">
			<label>Harga (Rp)</label>
			<input type="number" class="form-control" name="harga">		
		</div>
		<button class="btn btn-primary" name="save">Simpan</button>			

	</form>
	<?php 
		if (isset($_POST ['save'])) {

			$nama = $_FILES['foto']['name'];
			$lokasi = $_FILES['foto']['tmp_name'];
			move_uploaded_file ($lokasi, "../foto/".$nama);
			$koneksi->query("INSERT INTO produk 
				(nama_produk,jenis_produk,stok,foto_produk,deskripsi,harga_produk)
				VALUES('$_POST[nama]','$_POST[jenis]','$_POST[stok]','$nama','$_POST[deskripsi]','$_POST[harga]')");

				echo "<div class='alert alert-info'> Data Tersimpan</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
		}
	?>