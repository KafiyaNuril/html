<?php
$teks = "Selamat ulang tahun yang ke-17!";

// mencari semua simbol (karakter yang bukan huruf atau angka)
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

//fungsi count untuk menghitung jumlah elemen dalam array
if (count($matches[0]) > 0) {
    // menghitung duplikasi simbol
    $uniqueSymbol = array_unique($matches[0])
    echo "Karakter yang terdapat pada kalimat";
}
?>