<?php
    require'Tabung.php';
    $tabung=new Tabung;
    if(isset($_POST['button_submit'])){
        $Tabung->setDiameter($_POST['diameter']);
        $Tabung->setTinggi($_POSt['tinggi']);
    }
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
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='button_submit'>Hitung</button>
    </form>
    <hr>
    <ul>
        <li>luas selimut : <?=is_null($tabung)?'Tabung kosong':$tabung->getLuasSelimut();?></li>
    </ul>
</body>
</html>