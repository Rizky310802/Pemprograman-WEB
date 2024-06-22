<!-- app/Views/contact_result.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
    <h1>Terima kasih!</h1>
    <p>Berikut adalah detail yang Anda kirimkan:</p>
    <ul>
        <li><strong>Nama Lengkap:</strong> <?= $name ?></li>
        <li><strong>Nomor Telepon:</strong> <?= $phone ?></li>
        <li><strong>Jenis Layanan Telkomsel:</strong> <?= $service ?></li>
        <li><strong>Alamat:</strong> <?= $address ?></li>
        <li><strong>Pesan Tambahan:</strong> <?= $message ?></li>
    </ul>
</body>
</html>
