<h5>Halaman Buku Tamu.</h5>
<a href="?url=tambah-buku" class="btn btn-primary"> Tambah buku tamu </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Nama</td>
        <td>No Telepon</td>
        <td>asal</td>
        <td>pekerjaan</td>
        <td>keperluan</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php

    include'./koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM buku ORDER BY id_tamu DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['no_telp'] ?></td>
            <td><?= $data['asal'] ?></td>
            <td><?= $data['pekerjaan'] ?></td>
            <td><?= $data['keperluan'] ?></td>
            <td>
               <a href="?url=edit-buku&id_tamu=<?= $data['id_tamu'] ?>" class='btn btn-warning'>EDIT</a> 
            </td>
            <td>
               <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" 
               href="?url=hapus-buku&id_tamu=<?= $data['id_tamu'] ?>" class='btn btn-danger'>HAPUS</a> 
            </td>
        </tr>
    <?php } ?>

</table>