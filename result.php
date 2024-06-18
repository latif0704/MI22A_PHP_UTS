<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perulangan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
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
</style>
<body>
    <div class="result-box">
        <h2>Hasil Perulangan</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputText = $_POST['inputText'];
            $repeatCount = intval($_POST['repeatCount']);
            
            for ($i = 0; $i < $repeatCount; $i++) {
                echo "<p>$inputText</p>";
            }
        }
        ?>
        <a href="index.php" class="btn">Kembali</a>
    </div>
</body>
</html>