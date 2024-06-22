<a href="../App/createMine.php" class="btn btn-primary"><i class="fas fa-plus"></i> Tambahkan Data</a><br>
<div class="container mt-4" style="width: 150%">
    <table class="table text-center table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0; ?>
            <?php foreach ($mine as $mines) : ?>
                <tr <?php echo ($count % 2 == 0) ? 'class="table-light"' : 'class="table-secondary"'; ?>>
                    <td><?= $mines['id'] ?></td>
                    <td><?= $mines['nama'] ?></td>
                    <td><?= $mines['pekerjaan'] ?></td>
                    <td>
                        <a href="../App/updateMine.php?id=<?= $mines['id'] ?>" class="btn btn-warning text-light"><i class="fas fa-edit"></i> Edit</a>
                        <a href="../App/deleteMine.php?id=<?= $mines['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
                <?php $count++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>