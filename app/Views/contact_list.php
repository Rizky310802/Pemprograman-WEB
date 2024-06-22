<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kontak</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Kontak</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>Nomor Telepon</th>
                <th>Jenis Layanan</th>
                <th>Alamat</th>
                <th>Pesan Tambahan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registrations as $index => $registration): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $registration['name'] ?></td>
                    <td><?= $registration['phone'] ?></td>
                    <td><?= $registration['service'] ?></td>
                    <td><?= $registration['address'] ?></td>
                    <td><?= $registration['message'] ?></td>
                    <td>
                        <a href="<?= base_url('registrations/edit/'.$registration['id']) ?>">Edit</a> |
                        <a href="<?= base_url('registrations/delete/'.$registration['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('registrations/create') ?>">Tambah Kontak Baru</a>
</body>
</html>
