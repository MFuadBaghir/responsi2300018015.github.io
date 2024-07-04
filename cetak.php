<?php
    extract($_REQUEST);
    $total = $jarak * 15000;

    $file = fopen("text.txt", "a");

    fwrite($file, "Nama Pengirim : ");
    fwrite($file, $pengirim . "\n");
    fwrite($file, "Berat Barang : ");
    fwrite($file, $berat . " kg\n");
    fwrite($file, "Lokasi Asal : ");
    fwrite($file, $asal . "\n");
    fwrite($file, "Lokasi Tujuan : ");
    fwrite($file, $tujuan . "\n");
    fwrite($file, "Jarak : ");
    fwrite($file, $jarak . " km\n");
    fwrite($file, "Total Harga : Rp. ");
    fwrite($file, $total . "\n\n");
    fclose($file);

    header("Location: index.html?total=$total");
    exit();
?>
