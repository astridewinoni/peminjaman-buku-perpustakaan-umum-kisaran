<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Peminjam Buku Perpustakaan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
					    <div class="form-group">
                            <label for="no_peminjam" class="col-sm-3 control-label">Nomor Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_peminjam"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Peminjam" required>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label for="nama_peminjam" class="col-sm-3 control-label">Nama Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_peminjam" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Peminjam Buku Perpustakaan" required>
                            </div>
                        </div>
						
                         <div class="form-group">
                            <label for="tanggal_pinjam" class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_pinjam" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Peminjaman" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_kembali" class="col-sm-3 control-label">Tanggal Kembali</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_kembali" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Pengembalian" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputPassword3" placeholder="Inputkan Judul Buku">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kode_buku" class="col-sm-3 control-label">Kode Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_buku" class="form-control" id="inputPassword3" placeholder="Inputkan Kode Buku">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nomor_rak" class="col-sm-3 control-label">Nomor Rak</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_rak" class="form-control" id="inputPassword3" placeholder="Inputkan Nomor Rak Buku">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Peminjam Buku</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=peminjam&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Peminjam
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nopin=$_POST['no_peminjam'];
  $nama=$_POST['nama_peminjam'];
  $tglpinjam=$_POST['tanggal_pinjam'];
  $tglkembali=$_POST['tanggal_kembali'];
  $ket=$_POST['keterangan'];
  $kdbuku=$_POST['kode_buku'];
  $norak=$_POST['nomor_rak'];
    //buat sql
    $sql="INSERT INTO datapeminjam VALUES ('','$nopin','$nama','$tglpinjam','$tglkembali','$ket','$kdbuku','$norak')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjam&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
