<!DOCTYPE html>
<html>

<head>
    <title>Soal 1</title>
</head>

<body>
    <?php $i = 1; ?> 
    <form action="" method="post">
        <label for="jumlah">Jumlah Peserta :</label>
        <input type="text" name="jumlah"> </br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <?php if (isset($_POST['submit'])) : ?>
        <?php while ($i <= $_POST['jumlah']) { ?>
            <?php if ($i % 2 == 1) { ?>
                <h2 style="color: red">Peserta ke-<?= $i; ?></h2>
            <?php } else { ?>
                <h2 style="color: green">Peserta ke-<?= $i; ?></h2>
            <?php } ?>
            <?php $i = $i + 1; ?>
        <?php } ?>
    <?php endif; ?>
</body>

</html>
