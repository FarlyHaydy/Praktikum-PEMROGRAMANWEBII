<!DOCTYPE html>
<html>

<head>
    <title>Soal 4</title>
</head>

<body>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>" min="0" required><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>
    <?php

    if (isset($_POST["konversi"])) {
        echo "<h1>";
        if (!empty($_POST["nilai"]) or empty($_POST["nilai"])) {
            echo "Hasil: ";
        }
        $nilai = $_POST["nilai"];
        if ($nilai == 0) {
            echo "Nol";
        } elseif ($nilai >= 1 && $nilai <= 9) {
            echo "Satuan";
        } elseif ($nilai >= 11 && $nilai <= 19) {
            echo "Belasan";
        } elseif ($nilai >= 10 && $nilai <= 99) {
            echo "Puluhan";
        } elseif ($nilai >= 100 && $nilai <= 999) {
            echo "Ratusan";
        } else {
            echo "Anda Menginput Melebihi Limit Bilangan";
        }
        echo "</h1>";
    }
    ?>
</body>

</html>
