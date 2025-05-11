<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
</head>
<body>
    <?php
    $diagonal1=10;
    $diagonal2=25;
    $sisi1=12;
    $sisi2=27;
    $luas=1/2*$diagonal1*$diagonal2;
    $keliling=2*($sisi1+$sisi2);
    ?>
<a href="index.php">Home</a>
    <h1>Layang layang</h1>
    <h4>Luas = 1/2 x diagonal 1 x diagonal 2 = <?php echo $luas;?></h4>
    <h4>Keliling 4 x sisi = <?php echo $keliling;?></h4>
    <img src="layanglayang.JPG" alt="layanglayang.JPG">    
</body>
</html>