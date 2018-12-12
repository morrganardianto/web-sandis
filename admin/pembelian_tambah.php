<h2>Tambah Data</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group" style="display: none">
			<label>ID</label>
			<input type="text" class="form-control" name="id_pembelian">		
		</div>

		<div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Supplier</label>
          <div class="col-sm-10">
            <select id="kategori" name="id_suplier" class="form-control">
         <option></option>
         <?php
            $querysuplier=$koneksi->query("SELECT * FROM suplier");
            while($j = $querysuplier->fetch_assoc()){
               echo "<option value='$j[id_suplier]'>$j[nama_suplier]</option>";
            }
         ?>
      </select>
        </div>
        </div>


		<div class="form-group">
			<label>Tanggal</label>
			<input type="date" class="form-control" name="tanggal_pembelian">		
		</div>
		
		<button class="btn btn-primary" name="save">Simpan</button>			

	</form>
	<?php 
		if (isset($_POST['save'])) {
			$id_pembelian = $_POST['id_pembelian'];
		    $id_suplier = $_POST['id_suplier'];
		    $tanggal_pembelian = $_POST['tanggal_pembelian'];
		
		    if ($id_suplier=="" || $tanggal_pembelian=="") {
      
  			?>
  			<div class="alert alert-danger" role="alert">
      Penambahan pembelian <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{

			$koneksi->query("INSERT INTO pembelian (id_pembelian,id_suplier,tanggal_pembelian) VALUES('$id_pembelian','$id_suplier','$tanggal_pembelian');");

				echo "<div class='alert alert-info'> Data berhasil ditambahkan!</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pembelian'>";
		}
	?>

	<?php } ?>