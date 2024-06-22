<a href="../App/createYour.php" class="btn btn-primary"><i class="fas fa-plus"></i> Tambahkan Data</a><br>
<div class="container mt-4" style="width: 140%">
    <table class="table text-center table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">NIK</th>
                <th scope="col">Alamat</th>
                <th scope="col">Hobi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0; ?>
            <?php foreach ($your as $yours) : ?>
                <tr <?php echo ($count % 2 == 0) ? 'class="table-light"' : 'class="table-secondary"'; ?>>
                    <td><?= $yours['nik'] ?></td>
                    <td><?= $yours['alamat'] ?></td>
                    <td><?= $yours['hobi'] ?></td>
                    <td>
                        <a href="../App/updateYour.php?nik=<?= $yours['nik'] ?>&id=<?= $yours['id'] ?>" class="btn btn-warning text-light"><i class="fas fa-edit"></i> Edit</a>
                        <a href="../App/deleteYour.php?nik=<?= $yours['nik'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
                <?php $count++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

