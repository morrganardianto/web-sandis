<h2>Tambah Data</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group" style="display: none">
			<label>ID</label>
			<input type="text" class="form-control" name="id_mekanik">		
		</div>

		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama_mekanik">		
		</div>
		<div class="form-group">
			<label>No Telepon</label>
			<input type="text" class="form-control" name="no_telepon">		
		</div>
		
		<button class="btn btn-primary" name="save">Simpan</button>			

	</form>
	<?php 
		if (isset($_POST['save'])) {
			$id_mekanik = $_POST['id_mekanik'];
		    $nama_mekanik = $_POST['nama_mekanik'];
		    $no_telepon = $_POST['no_telepon'];
		
		    if ($nama_mekanik=="" || $no_telepon=="") {
      
  			?>
  			<div class="alert alert-danger" role="alert">
      Penambahan Mekanik <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{

			$koneksi->query("INSERT INTO mekanik (id_mekanik,nama_mekanik,no_telepon) VALUES('$id_mekanik','$nama_mekanik','$no_telepon');");

				echo "<div class='alert alert-info'> Data berhasil ditambahkan!</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=mekanik'>";
		}
	?>

	<?php } ?>