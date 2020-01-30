<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Peminjaman Buku</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM datapeminjam WHERE no_peminjam='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Peminjaman Buku Perpustakaan Umum Kisaran </h2>
                        <h4>Jalan Cokro Aminoto No. 30a, Kisaran Kota,  
                        <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA PEMINJAMAN BUKU</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nomor Peminjam</td> <td><?= $data['no_peminjam'] ?></td>
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

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Arsip,<strong></u><br>
                                        NIP.102971391616714
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
