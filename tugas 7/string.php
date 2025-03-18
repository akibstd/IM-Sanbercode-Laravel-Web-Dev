<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>contoh soal</h2>
<?php
$kalimat1="hello word";
echo "kalimat pertama ". $kalimat1."<br>";
echo "panjang string". strlen($kalimat1)."<br>";
echo "jumlah kata:".str_word_count($kalimat1);

echo "<h3>contoh2 </h3>";

$string2="nama saya akib";
echo "kalimat ke dua".$string2."<br>";
echo  "kata pertama: ".substr($string2,0,4)."<br>";
echo  "kata kedua:".substr($string2,5,4)."<br>";
echo  "kata ketiga:".substr($string2,8,9)."<br>";


echo "<h3>contoh3 </h3>";

$string3="selamat pagi";
echo "kalimat ketiga :".$string3. "<br>";
echo "ganti kalimat ketiga :".str_replace("pagi","malam",$string3);





?>

</body>
</html>