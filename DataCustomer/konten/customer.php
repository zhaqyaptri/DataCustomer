<div class="tabel">
    <h1>
    Jumlah Data : <?php echo "$jumlahdata"; ?>
    </h1>
    <button><a href="?menu=tambah-customer">Tambah</a></button>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Id Pesanan</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Warna</th>
            <th>Alamat</th>
            <th>No hp</th>
            <th>Aksi</th>
        </tr>
        <?php
        $n = 1;
        while ($row = mysqli_fetch_assoc($tblcustomer)) { ?>
            <tr>
                <td><?= $n++; ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td><?= $row['id_pesanan'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jumlah'] ?></td>
                <td><?= $row['warna'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['notelp'] ?></td>
                <td>
                    <a href="?menu=edit-customer&id=<?= $row['id'] ?>">Edit</a> |
                    <a href="?menu=hapus-customer&id=<?= $row['id'] ?>"
                     onclick="return confirm('Hapus data customer ini?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>