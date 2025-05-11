<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jari=$_POST['jari'];
    $luas=3.14*$jari*$jari;
    $keliling=2*3.14*$jari;
    ?>
<a href="index.php">Home</a>
    <h1>Lingkaran</h1>
    <h4>Luas = π × r² = <?php echo $luas; ?></h4>
    <h4>Keliling = 2 × π × r = <?php echo $keliling; ?></h4>
    <img src="lingkaran.jpg" alt="lingkaran.jpg">
</body>
</html>