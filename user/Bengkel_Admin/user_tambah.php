<!-- Modal Tambah Buku -->

<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA USER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">NAMA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" placeholder="NAMA">
        </div>

         </div>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">ALAMAT</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" placeholder="ALAMAT">
        </div>


        </div>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">NAMA PENGGUNA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" placeholder="NAMA PENGGUNA">
        </div>

        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">KATA SANDI</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="KATA SANDI"></div>
        </div>
         
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">LEVEL</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="level" placeholder="LEVEL">
           </div>
          </div>



    </div>

      <!-- Footer modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" name="buttoninsert" class="btn btn-outline-primary">Tambahkan</button>
        </div>
  </form>

    </div>
  </div>
</div>