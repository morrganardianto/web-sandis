<h2>Data Pelanggan</h2>
<div class="table-responsive">
<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAMA LENGKAP</th>
				<th>ALAMAT</th>
				<th>EMAIL</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $nomor='PLG1'; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM user"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah['nama'];?></td>
				<td><?php echo $pecah['alamat'];?></td>
				<td><?php echo $pecah['username'];?></td>

				
			</tr>
			<?php $nomor++; ?>
			<?php }?>
		</tbody>

</table>