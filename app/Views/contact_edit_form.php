<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kontak</title>
</head>
<body>
    <h1>Edit Kontak</h1>
    <form action="<?= base_url('registrations/update/'.$contact['id']) ?>" method="post">
        <label for="name">Nama Lengkap:</label><br>
        <input type="text" id="name" name="name" value="<?= $contact['name'] ?>" required><br><br>
        
        <label for="phone">Nomor Telepon:</label><br>
        <input type="tel" id="phone" name="phone" value="<?= $contact['phone'] ?>" required><br><br>
        
        <label for="service">Jenis Layanan:</label><br>
        <input type="text" id="service" name="service" value="<?= $contact['service'] ?>" required><br><br>
        
        <label for="address">Alamat:</label><br>
        <textarea id="address" name="address" required><?= $contact['address'] ?></textarea><br><br>
        
        <label for="message">Pesan Tambahan:</label><br>
        <textarea id="message" name="message"><?= $contact['message'] ?></textarea><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
