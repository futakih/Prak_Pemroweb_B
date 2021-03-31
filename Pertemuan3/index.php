<?php
    require 'Kubus.php';
    $kubus=new Kubus;
    $angka=4;
    $kubus->setSisi($angka);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?="luas kubus dengan sisi $angka = ".$kubus->getLuas()?></h1>
    <br>
    <h1><?="volume kubus dengan sisi $angka = ".$kubus->getVolume()?>.</h1>
</body>
</html>