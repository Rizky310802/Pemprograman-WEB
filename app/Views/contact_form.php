<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Kontak Baru</title>
</head>
<body>
    <h1>Registrasi Kontak Baru</h1>
    <form action="<?= base_url('registrations/store') ?>" method="post">
        <label for="name">Nama Lengkap:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="phone">Nomor Telepon:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>
        
        <label for="service">Jenis Layanan:</label><br>
        <input type="text" id="service" name="service" required><br><br>
        
        <label for="address">Alamat:</label><br>
        <textarea id="address" name="address" required></textarea><br><br>
        
        <label for="message">Pesan Tambahan:</label><br>
        <textarea id="message" name="message"></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
