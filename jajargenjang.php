<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
    <?php
    $alas=15;
    $tinggi=8;
    $sisi_alas=15;
    $sisi_miring=8;
    $luas=$alas*$tinggi;
    $keliling=2*($sisi_alas+$sisi_miring);
    ?>
<a href="index.php">Home</a>
    <h1>Jajar Genjang</h1>
    <h4>Luas  = alas x tinggi = <?php echo $luas;?></h4>
    <h4>Keliling = 2 x (sisi alas + sisi miring) = <?php echo $keliling;?></h4>
    <img src="jajargenjang.JPG" alt="jajargenjang.JPG">
</body>
</html>