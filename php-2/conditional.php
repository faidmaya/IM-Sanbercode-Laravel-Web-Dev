<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Function</title>
</head>
<body>

<h1>Berlatih Function PHP</h1>

<?php

/* =========================
   Soal No 1 - Greetings
========================= */
echo "<h3> Soal No 1 Greetings </h3>";

function greetings($nama) {
    echo "Halo " . ucfirst($nama) . ", Selamat Datang di Sanbercode!";
}

greetings("Bagas");
echo "<br>";
greetings("Wahyu");
echo "<br>";
greetings("Nama Peserta");

echo "<br><br>";

/* =========================
   Soal No 2 - Reverse String
========================= */
echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($str) {
    $hasil = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $hasil .= $str[$i];
    }
    echo $hasil;
}

reverseString("Nama Peserta");
echo "<br>";
reverseString("Sanbercode");
echo "<br>";
reverseString("We Are Sanbers Developers");

echo "<br><br>";

/* =========================
   Soal No 3 - Palindrome
========================= */
echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($str) {
    $balik = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $balik .= $str[$i];
    }

    if ($str === $balik) {
        echo "true";
    } else {
        echo "false";
    }
}

palindrome("civic");
echo "<br>";
palindrome("nababan");
echo "<br>";
palindrome("jambaban");
echo "<br>";
palindrome("racecar");

echo "<br><br>";

/* =========================
   Soal No 4 - Tentukan Nilai
========================= */
echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

echo tentukan_nilai(98);
echo "<br>";
echo tentukan_nilai(76);
echo "<br>";
echo tentukan_nilai(67);
echo "<br>";
echo tentukan_nilai(43);

?>

</body>
</html>
