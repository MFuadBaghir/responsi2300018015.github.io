<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pengiriman</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo.png">
</head>
<body>
    <div class="bg"></div>
    <div class="container">
        <h1>Riwayat Pengiriman </h1>
        <div class="history-list">
            <?php
                // Membaca file text.txt dan menampilkan data dalam format yang diinginkan
                $file = fopen("text.txt", "r");
                if ($file) {
                    while (($line = fgets($file)) !== false) {
                        echo "<div class='history-item'>$line</div>";
                    }
                    fclose($file);
                } else {
                    echo "Gagal membuka file text.txt";
                }
            ?>
        </div>
        <a href="index.html" class="back-button">Kembali</a>
    </div>


    <script src="script.js"></script>
</body>
</html>
