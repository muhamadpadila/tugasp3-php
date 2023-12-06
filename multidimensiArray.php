<?php

// Membuat Multidimensi Array
$kendaraan = [
    "transportasi" => ["Mobil", "Sepeda", "Truk", "Motor", "Bus"],
    "mobil" => ["merk" => "Toyota", "type" => "Vios", "year" => 2016],
    "motor" => ["Honda", "Yamaha", "Suzuki"]
];

// Menampilkan Output
echo "Ini Array Kendaraan <br><br>";
echo implode(", ", $kendaraan["transportasi"]) . "<br>";

echo "==========================<br>";

echo "Ini Array Mobil <br><br>";
echo $kendaraan["mobil"]["merk"] . $kendaraan["mobil"]["type"] . ", Tahun: " . $kendaraan["mobil"]["year"] . "<br>";

echo "==========================<br>";

echo "Ini Array Motor <br><br>";
echo implode(", ", $kendaraan["motor"]) . "<br><br>";

?>
