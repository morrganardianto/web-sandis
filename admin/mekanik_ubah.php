	<center><h2>Ubah mekanik</h2></center>
<?php
	$ambil=$koneksi->query("SELECT * FROM mekanik WHERE id_mekanik='$_GET[id]'");
	$pecah=$ambil->fetch_assoc();

	?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group" style="display: none">
		<label>No</label>
		<input type="text" name="id_mekanik" class="form-control" value="<?php echo $pecah['id_mekanik']?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama_mekanik" class="form-control" value="<?php echo $pecah['nama_mekanik']?>">
	</div>
	<div class="form-group">
		<label>No Telepon</label>
		<input type="text" name="no_telepon" class="form-control" value="<?php echo $pecah['no_telepon']?>">
	</div>
	
	<button class="btn btn-primary" name="ubah">UBAH</button>
</form>

 <?php
  if(isset($_POST['ubah'])){
  $id_mekanik = $_POST['id_mekanik'];
  $nama_mekanik = $_POST['nama_mekanik'];
  $no_telepon = $_POST['no_telepon'];

  $ubah_mekanik = "UPDATE mekanik SET nama_mekanik='$nama_mekanik',no_telepon='$no_telepon' WHERE id_mekanik=$id_mekanik;";?>

                              
 <?php
  if(mysqli_query($koneksi,$ubah_mekanik)){
  echo "<script>alert('data mekanik telah di ubah')</script>";
  echo "<script>location='index.php?halaman=mekanik';</script>";
	}
   }
 ?>