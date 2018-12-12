<?php include "function/koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Suplier</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

<?php include "navigasi.php";
      include "sidebar.php";?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">         
            DATA SUPLIER</h1></div>

<button type="button" class="btn btn-outline-primary " 
            data-toggle="modal" data-target="#modaltambah" >
             <img src="glyph-iconset-master/svg/si-glyph-document-plus.svg" style="height: 25px;" />Tambah Data

           </button><p>

                <meta http-equiv="refresh" content="url=index.php"/>
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
          
  <?php 
    include "suplier_tambah.php";?>

    <div class="Konten">
      <?php
              $queryselect = "SELECT * FROM tb_suplier";
              $resultselect = mysqli_query($connection,$queryselect);
      
      ?>

        <style>
        th{
          background-color: black;
          color:white;
          text-align: center;
                }
              </style>

            <table class="table table-striped">
              <thead>
                <tr>
                
                  <th scope="col">ID SUPLIER</th>
                  <th scope="col">NAMA SUPLIER</th>
                  <th scope="col">ALAMAT</th>
                 
                  <th scope="col">NO HP</th>
                  <th scope="col" colspan="2">AKSI</th>

                </tr>
              </thead>
              <tbody>
  <?php
  while ($row=mysqli_fetch_array($resultselect)) {
  ?>
    <tr>
      
      <td><?php echo $row['id_suplier']; ?></td> 
      <td><?php echo $row['nama_suplier']; ?></td>
      <td><?php echo $row['alamat_suplier']; ?></td>
      <td><?php echo $row['notelp_suplier']; ?></td>
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalubah<?php echo $row['id_suplier']; ?>">Ubah</button></td>
      <td><button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modalhapus<?php echo $row['id_suplier']; ?>">Hapus</button></td>
  <?php
  include("suplier_update.php");
  include("suplier_hapus.php");
}
  ?>
  </tbody>
</table>

          </div>
  
  <!-- Bootstrap inti dari JavaScript
  ================================================== --> 
  <!-- Posisi Jquery diakhir dokumen agar load halaman lebih cepat -->
    <script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>

</html>