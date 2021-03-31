<?php 
require 'Tabung.php';
$tabung = new Tabung;
if (isset($_POST['button_submit'])) {

    $tabung-> setDiameter($_POST['diameter']);
    $tabung-> setTinggi($_POST['tinggi']);
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

</form>
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='button_submit'>Hitung</button>

        <hr>

    </form>

    
    <ul>
            <li>Luas Sisi : <?php echo $tabung->getLuas(); ?></li>
            <li>Volume : <?php ?></li>
    </ul>
</body>
</html>