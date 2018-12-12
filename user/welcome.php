
<?php
	session_start();
	if (!isset($_SESSION['nama'])) {
		header("location: login.php");
	}
?>
<?php include "head.php"; ?>
<?php include "header_welcome.php"; ?>
<body>
<section class="slide-window">
	<div class="slide-wrapper" style="width:300%;">
		<div class="slide">
			<div class="slide-caption text-center">
			   <h4 class="text-uppercase">Jadwal <span>Bengkel</span></h4>
			   <p class="my-4">

				<?php include "function/koneksi.php"; ?>
				<?php
              $queryselect = "SELECT * FROM jadwal";
              $resultselect = mysqli_query($koneksi,$queryselect);
            ?>

            <table class="table table-striped" style="color: white;">
              <thead>
                <tr>
                  <th scope="col">HARI</th>
                  <th scope="col">JAM KERJA</th>
                 </tr>
              </thead>
              <tbody>
     
			<?php
			  while ($row=mysqli_fetch_array($resultselect)) {
			  ?>
			    <tr>
			      <th><?php echo $row['hari']; ?></th>
			      <th><?php echo $row['jam_kerja']; ?></th>
			    </tr>
			  <?php
			}
			  ?>
			  </tbody>
			</table>


			   </p>
			   <div class="read">
					<a href="#" data-toggle="modal" data-target="#exampleModalJadwal" role="button">Selengkapnya... <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>				
			</div>
		</div>
		<div class="slide slide2">
			<div class="slide-caption text-center">
				<h4 class="text-uppercase">Cara <span>Pembayaran </span></h4>
			   <p class="my-4">Cara membayar di bengkol Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eum vitae, illum? Aut consectetur doloribus accusamus quaerat et velit numquam illo tempore blanditiis odit ad voluptas vel, sit, labore quisquam.</p>
			   <div class="read">
					<a href="#" data-toggle="modal" data-target="#exampleModalCara" role="button">Selengkapnya... <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>	
			</div>
		</div>
		<div class="slide slide3">
			<div class="slide-caption text-center">
				<h4 class="text-uppercase">Bengkel<span> Lainnya</span></h4>
			   <p class="my-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla,
				gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia hasellus lacinia id erat culpa quis.</p>
			   <div class="read">
					<a href="#" data-toggle="modal" data-target="#exampleModalLain" role="button">Selengkapnya... <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>	
			</div>
		</div>
	</div>
	<div class="slide-controller">
		<div class="slide-control-left">
			<div class="slide-control-line"></div>
			<div class="slide-control-line"></div>
		</div>
		<div class="slide-control-right">
			<div class="slide-control-line"></div>
			<div class="slide-control-line"></div>
		</div>
	</div>
</section>
<!-- end of main image slider container -->
	
<section class="Welcome py-5">
	<div class="container py-sm-5">
		<div class="welcome-grids row">
			<div class="col-lg-6 mb-lg-0 mb-5">
				<h3 class="mt-lg-4">Phasellus lacinia id erat.</h3>
				<p class="my-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla,
				gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia</p>
				<p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla.</p>
				<div class="read">
					<a href="about.html">Click More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>	
			</div>
			<div class="col-lg-3 col-md-4 col-6 pr-1 welcome-image">
				<img src="images/a1.jpg" class="img-fluid" alt="" />
			</div>	
			<div class="col-lg-3 col-md-4 col-6 pl-1 welcome-image">
				<img src="images/a2.jpg" class="img-fluid" alt="" />
			</div>
		</div>	
	</div>	
</section>
<!-- welcome -->


<!-- welcome -->
<section class="Welcome py-5">
	<div class="container py-sm-5">
		<div class="welcome-grids row">
			<div class="col-lg-6 mb-lg-0 mb-5">
				<h3 class="mt-lg-4">Phasellus lacinia id erat.</h3>
				<p class="my-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla,
				gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia</p>
				<p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla.</p>
				<div class="read">
					<a href="about.html">Click More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>	
			</div>
			<div class="col-lg-3 col-md-4 col-6 pr-1 welcome-image">
				<img src="images/a1.jpg" class="img-fluid" alt="" />
			</div>	
			<div class="col-lg-3 col-md-4 col-6 pl-1 welcome-image">
				<img src="images/a2.jpg" class="img-fluid" alt="" />
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