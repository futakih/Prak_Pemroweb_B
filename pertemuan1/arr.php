<?php

    $students =[
            'nama'=> 'Taufikh',
            'nim' => '192410101126',
            'kelas' => 'Peweb_B'
    ]
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
    <h1> Data Mahasiswa <h1>
    <table>
        <head>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>kelas<th>
            </tr>
        </head>
        <body>
            <tr>
            <td> <?php echo $students['nama'];?></td>
            <td> <?php echo $students['nim'];?></td>
            <td> <?php echo $students['kelas'];?></td>
            </tr>
</body>
</html>