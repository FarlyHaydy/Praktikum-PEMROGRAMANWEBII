<!DOCTYPE html>
<html>

<head>
    
    <title>Soal 1</title>
</head>

<body>
    <?php

    // Fungsi untuk melakukan insertion sort
    function insertionSort($array)
    {
        for ($i = 0; $i < count($array); $i++) {
            $val = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $array[$j] > $val) {
                $array[$j + 1] = $array[$j];
                $j--;
            }
            $array[$j + 1] = $val;
        }
        return $array;
    }
    ?>
    <form action="" method="post">
        Nama: 1 <input type="text" name="nama1"> <br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <input type="submit" name="submit" value="urutkan">
    </form>

    <?php
    
    // Menjalankan insertion sort ketika tombol submit ditekan
    if (isset($_POST['submit'])) {
        $hasil = array();
        $hasil[] = $_POST['nama1'];
        $hasil[] = $_POST['nama2'];
        $hasil[] = $_POST['nama3'];
        foreach (insertionSort($hasil) as $value) {
            echo $value;
            echo "<br>";
        }
    }
    ?>
</body>

</html>