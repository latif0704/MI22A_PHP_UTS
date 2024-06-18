<!DOCTYPE html>
<html>
<head>
    <title>Hasil Form Profil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="Hasil-box">
        <h2>Informasi Profil</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = htmlspecialchars($_POST['nim']);
            $nama = htmlspecialchars($_POST['nama']);
            $kelas = htmlspecialchars($_POST['kelas']);
            $email = htmlspecialchars($_POST['email']);
            $nomor_hp = htmlspecialchars($_POST['nomor_hp']);
            
            echo "<p><strong>NIM:</strong> $nim</p>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Kelas:</strong> $kelas</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Nomor HP:</strong> $nomor_hp</p>";
        }
        ?>
        <a href="Profil.php" class="btn">Kembali</a>
    </div>
</body>
</html>