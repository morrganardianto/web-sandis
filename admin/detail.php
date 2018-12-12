<center><h2>Detail Pembelian</h2></center>
<?php 
	$ambil = $koneksi->query("SELECT * FROM pembelian  JOIN suplier ON pembelian.id_suplier=suplier.id_suplier WHERE pembelian.id_pembelian='$_GET[id] '");
	$detail = $ambil->fetch_assoc(); 
?>

<table>
	
	<tr>
		<td>Nama Supplier</td>
		<td>:</td>
		<td><?php echo $detail['nama_suplier']; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $detail['alamat_suplier']; ?></td>
	</tr>
	<tr>
		<td>No telepone</td>
		<td>:</td>
		<td><?php echo $detail['notelp_suplier']; ?></td>
	</tr>
	<tr>
		<td>Tanggal Pembelian</td>
		<td>:</td>
		<td><?php echo $detail['tanggal_pembelian']; ?></td>
	
</table><br/>

<table class="table table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Nama Produk</th>
		<th>Harga Beli</th>
		<th>Jumlah</th>
		<th>Subtotal</th>
	</tr>
</thead>
<tbody>
	<?php $nomor=1;?>
	<?php $total=0 ?>
	
	<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk INNER JOIN produk ON pembelian_produk.id_produk=produk.id_produk ") ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<?php $subtotal= $pecah['harga_produk']*$pecah['jumlah']; ?>
		<?php $total += $subtotal; ?>

		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga_produk']; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td>Rp.<?php echo $subtotal;  ?></td>

			
		</tr>
	
		<?php $nomor++; ?>
		<?php  }?>
					
	<td colspan="3"></td>
				<td>Total</td>
				<td>Rp.<?php echo $total; ?></td>
			</tr>

</tbody>
</table>
<a href="index.php?halaman=detail_tambah" class="btn btn-primary">Tambah Data</a>


