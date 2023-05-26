<?php
$namaPerHuruf = array("S", "E", "N", "A");
$listLokasi = array("Lampung", "Riau", "Jambi", "Bengkulu", "Makassar", "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");

$banyakHuruf = count($namaPerHuruf);
$banyakLokasi = count($listLokasi);

$lokasiCocok = false;

for ($i = 0; $i < $banyakHuruf; $i++) {
    $huruf = $namaPerHuruf[$i];
    for ($j = 0; $j < $banyakLokasi; $j++) {
        $lokasi = $listLokasi[$j];
        if (strpos($lokasi, $huruf) !== false) {
            echo "Anda KKN di $lokasi.";
            $lokasiCocok = true;
            break 2;
        }
    }
}

if (!$lokasiCocok) {
    echo "Anda KKN di Jawa Timur";
}
?>