<?php

// NIM :2257401004
// NAMA:ABDUL LATIF
// Kelas:MI22A

// Mulai sesi
session_start();

// Variabel untuk menyimpan pesan kesalahan
$error = '';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hardcode username dan password
    $username = "admin";
    $password = "admin";

    // Validasi login
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        // Set session dan redirect ke halaman welcome
        $_SESSION['login_user'] = $username;
        header("location: welcome.php");
    } else {
        $error = "Login Berhasil.";
        $error = "Username/Password Tidak Sesuai.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    background: #9932CC;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
}

.login-box {
    width: 300px;
    padding: 40px;
    position: absolute;
    background: #00CED1;
    text-align: center;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
}

.login-box h2 {
    margin: 0 0 20px;
    padding: 0;
    color: #333;
}

.textbox {
    position: relative;
    margin-bottom: 30px;
}

.textbox input {
    width: 100%;
    padding: 10px;
    background: #f2f2f2;
    border: none;
    outline: none;
}

.btn {
    width: 100%;
    background: #042ee6;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
}

.btn:hover {
    background: #555;
}
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Navbar style */
.navbar {
  background-color: #333;
  overflow: hidden;
}

.navbar-brand {
  float: left;
}

.navbar-brand a {
  display: flex;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar-links {
  float: right;
}

.navbar-links a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar-links a:hover {
  background-color: #ddd;
  color: black;
}

</style>
<body>
<nav class="navbar">
  <div class="navbar-brand">
    <a href="index.php">Beranda</a>
  </div>
  <div class="navbar-links">
    <a href="login.php">Login</a>
    <a href="loop.php">Loop</a>
    <a href="profil.php">Profil</a>
  </div>
</nav>

    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="">
            <div class="textbox">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <input type="submit" class="btn" value ="Login">
            <span><?php echo $error; ?></span>
        </form>
    </div>
</body>
</html>
