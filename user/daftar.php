<?php include 'head.php' ?>
    <body>

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Daftar Sekarang</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Isi Nama Lengkap">
                            </div>
                             <div class="form-group">
                                <label>Alamat</label>
                                <input type="text"  name="alamat" class="form-control" placeholder="isi alamat lengkap">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="username" placeholder="isi email" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Kata Sandi</label>
                                <input type="password" class="form-control" name="password" placeholder="" required="">
                            </div>

                           <center> <button type="submit" class="btn btn-primary submit mb-4"
                            name="submit">Daftar</button></center>
                            <p class="text-center pb-4">
                                <a href="login.php">Sudah mendaftar ? Silahkan anda ke menu Masuk !</a>
                            </p>
                        </form>
                        <?php
            include ("function/koneksi.php");

            if (isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $username = $_POST['username'];
                $password = md5($_POST['password']);

                $sqlinsert = "INSERT INTO user (nama, alamat, username, password) VALUES ('$nama','$alamat', '$username', '$password')";
                if (mysqli_query($koneksi, $sqlinsert)) {
                    echo "<script>New record created successfully</script>";
                    echo '<META http-equiv="refresh" content="1;URL=login.php"> ';
                }else {
                    echo "Error: " . $sqlinsert . "<br>" . mysqli_error($koneksi);
                }
                mysqli_close($koneksi);
            }
        ?>

                    </div>
                </div>

            </div>
        </div>
    </div>