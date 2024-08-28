<!DOCTYPE html>
<html>

<head>
    <title>Soal 4</title>
</head>

<body>
    <?php
    $bintang = isset($_POST['bintang']) ? $_POST['bintang'] : NULL;
    $picture = "<img style='width: 70px;' src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' >";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['tambah'])) {
            $bintang += 1;
        }
        if (isset($_POST['kurang'])) {
            $bintang -= 1;
        }
    }

    if (empty($bintang)) { ?>
        <form action="" method="post">
            <label for="bintang">Jumlah bintang </label>
            <input type="text" name="bintang"> </br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php } else {
        echo "Jumlah bintang $bintang "; ?>
        <br><br>
        <?php for ($i = 0; $i < $bintang; $i++) {
            echo "$picture";
        } ?>
        <form action="" method="post">
            <input type="hidden" name="bintang" value="<?= $bintang ?>">
            <button type="submit" name="tambah">tambah</button>
            <button type="submit" name="kurang">kurang</button>
        </form>
    <?php } ?>
</body>

</html>
