<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $diagonal1=$_POST['diagonal1'];
    $diagonal2=$_POST['diagonal2'];
    $sisi=$_POST['sisi'];
    $luas=1/2*$diagonal1*$diagonal2;
    $keliling=4*$sisi;
    ?>
<a href="index.php">Home</a>
    <h1>Belah ketupat</h1>
    <h4>Luas = 1/2 x diagonal 1 x diagonal 2 = <?php echo $luas;?></h4>
    <h2>Keliling = 4 x sisi = <?php echo $keliling;?></h4>
    <img src="belahketupat.JPG" alt="belahketupat.JPG">
</body>
</html>