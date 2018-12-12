<?php
    $koneksi = new mysqli("localhost","root","","belajar");
 ?>
<?php 	include "head.php";
		include "header.php";
		 ?>
<body>


<!-- main image slider container -->
<section class="slide-window">
	<div class="slide-wrapper" style="width:300%;">
		
	</div>
	

<!-- welcome -->
<section class="Welcome py-5">
	<div class="container">
		<div class="welcome" style="margin-top: 100px">
					<div class="row">

				<?php $ambil = $koneksi ->query("SELECT * FROM produk"); ?><!-- dari database belajar -->
				<?php while($perproduk = $ambil->fetch_assoc()){  ?>
				
				<div class="col-md-3">
					<div class="thumnail" style="background-color: #eaeaea; border: solid #eaeaea; ">
					<img src="../foto/<?php echo $perproduk['foto_produk'];?>" alt"">
				<div class="caption">
					<h3><?php echo $perproduk['nama_produk'];?></h3>
					<h5>Rp.<?php echo number_format($perproduk['harga_produk']);?></h5>
					<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
				</div>
				</div>
				</div>
					<?php }?>
	

						
				
			</div>	
			</div>	
		</div>	
</section>
<!-- welcome -->

<!-- welcome bottom -->
<section class="Welcome-bottom">
	<div class="bs-slider-overlay">
		<div class="container">
			<div class="welcome-bottom-grids row">
				

	
</section>
<!-- end of main image slider container -->
	



<?php include "footer.php" ?>