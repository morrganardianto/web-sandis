  <?php
        if(isset($_POST['buttonubah'])){
          $id_jadwal = $_POST['id_jadwal'];
          $hari = $_POST['hari'];
          $jam_kerja = $_POST['jam_kerja'];


        $queryupdate = "UPDATE jadwal SET hari='$hari',jam_kerja='$jam_kerja' WHERE id_jadwal=$id_jadwal;";
        if(mysqli_query($connection,$queryupdate)){
          echo "";
        }else{
          echo "data tidak berhasil diubah";
        }
      }
  ?>
  
<!-- Modal ubah -->
<div class="modal fade" id="modalubah<?php echo $row['id_jadwal'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT BUKU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['id_jadwal'];
      $queryselectedit = "SELECT * FROM jadwal WHERE id_jadwal=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>
        <form method="post">
      <div class="modal-body">
                <input type="hidden" name="id_jadwal" value="<?php echo $id;?>">
          <div class="form-group row">
            <label for="hari" class="col-sm-4 col-form-label">JUDUL BUKU</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="hari" placeholder="JUDUL BUKU" value="<?php echo $rowselectedit['hari'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">jam_kerja</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="jam_kerja" placeholder="jam_kerja" value="<?php echo $rowselectedit['jam_kerja'];?>">
            </div>
          </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" name="buttonubah" class="btn btn-primary">Ubah</button>
      </div>
    
    </form>
    </div>
  </div>
</div>