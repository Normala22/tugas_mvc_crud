
<h1>TABLE 1 join TABLE 2</h1><br>
<div class="container mt-4" style="width: 140%">
    <table class="table text-center table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Hobi</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0; ?>
            <?php foreach ($join as $joins) : ?>
                <tr <?php echo ($count % 2 == 0) ? 'class="table-light"' : 'class="table-secondary"'; ?>>
                    <td><?= $joins['id'] ?></td>
                    <td><?= $joins['nik'] ?></td>
                    <td><?= $joins['nama'] ?></td>
                    <td><?= $joins['alamat'] ?></td>
                    <td><?= $joins['pekerjaan'] ?></td>
                    <td><?= $joins['hobi'] ?></td>
                </tr>
            <?php $count++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>