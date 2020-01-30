<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Buku Perpustakaan Umum Kisaran</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    //$sql = "SELECT * FROM tbl_buku As b INNER JOIN datapeminjam As p ON b.kode_buku = p.keterangan";
                    //$sql = "SELECT* FROM tbl_buku.datapeminjam where tbl_buku.kode_buku,datapeminjam.keterangan";
                    $sql = "SELECT *FROM datapeminjam WHERE no_peminjam='" . $_GET ['id'] . "'"; 
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nomor Peminjam</td> <td><?= $data['no_peminjam'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Peminjam</td> <td><?= $data['nama_peminjam'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pinjam</td> <td><?= $data['tanggal_pinjam'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Kembali</td> <td><?= $data['tanggal_kembali'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                        <tr>
                            <td>Kode Buku</td> <td><?= $data['kode_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Rak</td> <td><?= $data['nomor_rak'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=peminjam&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Peminjaman </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

