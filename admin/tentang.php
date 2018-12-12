<h2>Informasi Tentang Bengkel</h2>
<div class="konten">
	<table style="text-align: center;font-size: 19px">
		<form>
			<?php $ambil=$koneksi->query("SELECT * FROM tentang"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><b><?php echo $pecah['nama_bengkel'];?></b></td>
			</tr>
			<hr>
			<tr>
				<td><?php echo $pecah['nama_pemilik'];?></td>
			</tr>
			<tr>
				<td><?php echo $pecah['deskripsi'];?></td>
			</tr>
			<tr>
				<td><?php echo $pecah['no_telepon'];?></td>
			</tr>
		</form>
		<?php }?>
	</table>

</div>		

					



			
				
				
				
				
				
				
			
			
			
	


</table>
