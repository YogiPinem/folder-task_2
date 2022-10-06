<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Data/style.css">
    <title>Document</title>
    
</head>
<body>
    <?php
    if (isset ($_GET['submit'])) {
        $aData = $_GET['aData'];
        $bData = $_GET['bData'];
        $cData = $_GET['cData'];
        $dData = $_GET['dData'];
    }
    ?>
    <div class="container_card">
        <h3 class="title">DATA PRIBADI SINGKAT</h3>
        <div class="card">
            <div class="pict_card">
                <img src="picture.jpg" alt="card" width="200" height="200">
            </div>
            <div class="description">
                <small>Nama</small>
                <h3><?php echo $aData ?></h3>
                <small>Asal</small>
                <h3><?php echo $bData ?></h3>
                <small>Tanggal Lahir</small>
                <h3><?php echo $cData ?></h3>
                <small>No. Telepon</small>
                <h3><?php echo $dData ?></h3>
            </div>
        </div>

    </div>
</body>

</html>
    
