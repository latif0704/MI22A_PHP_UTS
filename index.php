<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Bar</title>
 <style>
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
      <li><a href="index.php">Beranda </a></li>
      <li><a href="login.php"> Form  Login</a></li>
      <li><a href="profil.php"> Form Profil</a></li>
      <li><a href="loop.php"> Form Loop</a></li>
    </ul>
  </nav>
 
</body>
</html>
