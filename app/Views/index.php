<!-- app/Views/registrations/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Registrasi</title>
</head>
<body>
    <h1>Daftar Registrasi</h1>
    <a href="<?= site_url('registrations/create') ?>">Tambah Registrasi Baru</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>Jenis Layanan</th>
            <th>Alamat</th>
            <th>Pesan Tambahan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($registrations as $registration): ?>
        <tr>
            <td><?= $registration['id'] ?></td>
            <td><?= $registration['name'] ?></td>
            <td><?= $registration['phone'] ?></td>
            <td><?= $registration['service'] ?></td>
            <td><?= $registration['address'] ?></td>
            <td><?= $registration['message'] ?></td>
            <td>
                <a href="<?= site_url('registrations/show/' . $registration['id']) ?>">Detail</a> |
                <a href="<?= site_url('registrations/edit/' . $registration['id']) ?>">Edit</a> |
                <a href="<?= site_url('registrations/delete/' . $registration['id']) ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
