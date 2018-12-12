<!--<?php include"function/koneksi.php"; ?>-->
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
	<div class="container py-sm-5">
		<div class="welcome-grids row" style="margin-top: 100px">
						<?php
			              $queryselect = "SELECT * FROM tentang";
			              $resultselect = mysqli_query($koneksi,$queryselect);
			            ?>


			              <style>
			                th{
			                  background-color: black;
			                  color:white;
			                  text-align: center;
			                }
			                tr{
			                  text-align: center;
			                }
			              </style>

			            <table align="center">
			              <tbody>
			     
			<?php
			  while ($row=mysqli_fetch_array($resultselect)) {
			  ?>
			    <tr>
			      
			      <td><h3><?php echo $row['nama_bengkel']; ?></h3></td>
			           
			    </tr>
			    <tr>
			      <td style="color: blue"><?php echo $row['nama_pemilimk']; ?></td>
			    </tr> <tr>
			      <td><?php echo $row['deskripsi']; ?></td>
			    </tr>
			   <tr>
			      <td><p>CP: &nbsp;<?php echo $row['no_telepon']; ?></p></td>
			    </tr>
			  
			  <?php

			}
			  ?>
			  </tbody>
			</table>

			
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