<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Angka</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            
            if ($angka1 > $angka2) {
                echo "<h2>></h2>";
                echo "<h2>$angka1 lebih besar dari $angka2</h2>";
            } elseif ($angka1 < $angka2) {
                echo "<";
                echo "<h2>$angka1 lebih kecil dari $angka2</h2>";
            } else {
                echo "=";
                echo "<h2>$angka1 sama dengan $angka2</h2>";
            }
        }
        ?>
         <h4>Cek Perbandingan Angka</h4>
        <form method="post" action="">
            <input class="input-field" type="number" name="angka1" placeholder="Angka pertama" required>
            <input class="input-field" type="text" name="angka2" placeholder="Angka kedua" required>
            <button type="submit" class="btn">Kirim</button>
        </form>
    </div>
</body>
</html>