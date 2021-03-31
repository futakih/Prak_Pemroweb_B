<?php
    //built in function
    echo date('l d m Y');
    echo '<br>';
    //user defined function
    function printMyName($name="unknown"){
        echo"My Name is $name";
    }
    // printMyName();
    echo '<br>';
    function printAngka(){
        return 4;
    }
    echo"Hasil dari return fungsi =".(printAngka()+printAngka());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar function</title>
</head>
<body>
    <h1><?php printMyName("Taufik");?></h1>
</body>
</html>