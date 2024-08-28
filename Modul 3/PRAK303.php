<!DOCTYPE html>
<html>

<head>
    
    <title>Soal 3</title>
</head>

<body>
    <form action="" method="post">
        <label for="bawah">Batas Bawah :</label>
        <input type="text" name="bawah"> </br>
        <label for="atas">Batas Atas :</label>
        <input type="text" name="atas"> </br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>
    <?php
    $i;
    $j;
    ?>

    <?php if (isset($_POST['submit'])) : ?>
        <?php
        $i = $_POST['bawah'];
        $j = $_POST['atas'];
        ?>
        <?php do { ?>
            <?php if (($i + 7) % 5 == 0) { ?>
                <img style="width: 20px;" src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png"alt="">
            <?php } else { ?>
                <?= $i; ?>
            <?php } ?>
            <?php $i = $i + 1; ?>
        <?php } while ($i <= $j) ?>
    <?php endif; ?>
</body>

</html>