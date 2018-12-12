<h2>Data Pembelian Barang</h2>
<div class="table-responsive">
<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Supplier</th>
				<th>Tanggal</th>
			
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>


			<?php $total=1 ?>
			<?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN suplier ON pembelian.id_suplier=suplier.id_suplier WHERE pembelian.id_pembelian"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
						<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah['nama_suplier'];?></td>
				<td><?php echo $pecah['tanggal_pembelian'];?></td>
			
			
				<td>
					<a href="index.php?halaman=detail&id=<?php echo $pecah ['id_pembelian']; ?>" class="btn btn-info"> detail</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php }?>
		</tbody>
		

</table>
<a href="index.php?halaman=pembelian_tambah" class="btn btn-primary">Tambah Data</a>