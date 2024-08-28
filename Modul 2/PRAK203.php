<!DOCTYPE html>
<html>

<head>
    <title>Soal 3</title>
</head>

<body>
    
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
        Dari : <br>
        <input type="radio" name="dari" value="celcius" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "celcius") echo "checked"; ?>>Celcius<br>
        <input type="radio" name="dari" value="fahrenheit" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "fahrenheit") echo "checked"; ?>>Fahrenheit<br>
        <input type="radio" name="dari" value="reamur" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "reamur") echo "checked"; ?>>Rheamur<br>
        <input type="radio" name="dari" value="kelvin" <?php if (isset($_POST["dari"]) and $_POST["dari"] == "kelvin") echo "checked"; ?>>Kelvin<br>
        Ke : <br>
        <input type="radio" name="ke" value="celcius" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "celcius") echo "checked"; ?>>Celcius<br>
        <input type="radio" name="ke" value="fahrenheit" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "fahrenheit") echo "checked"; ?>>Fahrenheit<br>
        <input type="radio" name="ke" value="reamur" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "reamur") echo "checked"; ?>>Rheamur<br>
        <input type="radio" name="ke" value="kelvin" <?php if (isset($_POST["ke"]) and $_POST["ke"] == "kelvin") echo "checked"; ?>>Kelvin<br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST["konversi"])) {
        if (!empty($_POST["dari"]) and !empty($_POST["ke"])) {
            $nilai = $_POST["nilai"];

            $konversi = array(
                "celcius" => array(
                    "celcius" => $nilai,
                    "fahrenheit" => ($nilai * 9/5) + 32,
                    "reamur" => $nilai * 4/5,
                    "kelvin" => $nilai + 273.15
                ),
                "fahrenheit" => array(
                    "celcius" => ($nilai - 32) * 5/9,
                    "fahrenheit" => $nilai,
                    "reamur" => ($nilai - 32) * 4/9,
                    "kelvin" => ($nilai + 459.67) * 5/9
                ),
                "reamur" => array(
                    "celcius" => $nilai * 5/4,
                    "fahrenheit" => ($nilai * 9/4) + 32,
                    "reamur" => $nilai,
                    "kelvin" => ($nilai * 5/4) + 273.15
                ),
                "kelvin" => array(
                    "celcius" => $nilai - 273.15,
                    "fahrenheit" => ($nilai * 9/5) - 459.67,
                    "reamur" => ($nilai - 273.15) * 4/5,
                    "kelvin" => $nilai
                )
            );

            echo "<h2>Hasil Konversi: " . number_format($konversi[$_POST['dari']][$_POST['ke']], 1) . " &deg;";
           
            // Memilih simbol suhu berdasarkan unit yang dipilih
            if ($_POST['ke'] == 'fahrenheit') {
                echo "F";
            } elseif ($_POST['ke'] == 'celcius') {
                echo "C";
            } elseif ($_POST['ke'] == 'reamur') {
                echo "Re";
            } elseif ($_POST['ke'] == 'kelvin') {
                echo "K";
            } else {
                echo strtoupper($_POST['ke'][0]);
            }
            echo "</h2>";
        }
    }
    ?>
</body>

</html>
