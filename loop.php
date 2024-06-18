<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    background: 	#9932CC;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
}

.form-box, .result-box {
    width: 300px;
    padding: 40px;
    background: 	#00CED1;
    text-align: center;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
    margin: 20px;
}

.form-box h2, .result-box h2 {
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
    background: #51bd09;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    text-decoration: none;
}

.btn:hover {
    background: #555;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

nav {
  background-color: #DC143C;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

nav ul li {
  display: inline;
}

nav ul li a {
  display: inline-block;
  padding: 15px 20px;
  text-decoration: none;
  color: #fff;
}

nav ul li a:hover {
  background-color: #555;
}

/* Style untuk konten */
div {
  padding: 20px;
  margin-top: 20px;
}

h2 {
  margin-top: 0;
}




    </style>
</head>
<body>
<nav>
    <ul>
     <li><a href="index.php">Beranda</a></li>
      <li><a href="login.php"> Form  Login</a></li>
      <li><a href="profil.php"> Form Profil</a></li>
      <li><a href="loop.php"> Form Loop</a></li>
    </ul>
  </nav>

<div class="form-box">
        <h2>Form Perulangan</h2>
        <form method="post" action="result.php">
            <div class="textbox">
                <input type="text" placeholder="Masukkan teks" name="inputText" required>
            </div>
            <div class="textbox">
                <input type="number" placeholder="Jumlah perulangan" name="repeatCount" required>
            </div>
            <input type="Submit" class="btn" value="Cetak">
        </form>
    </div>
</body>
</html>